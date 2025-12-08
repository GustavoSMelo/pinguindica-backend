<?php

namespace App\Http\Controllers;

use App\Models\Distro;
use Exception;
use Illuminate\Http\Request;

class DistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return response()->json(Distro::all());
        } catch (\Exception $err) {
            return response()->json([
                'error' => $err
            ], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'difficult' => ['required', 'string', 'in:easy,medium,hard,extreme'],
                'old_hardware' => ['required', 'boolean'],
                'appearance' => ['required', 'array'],
                'appearance.*' => ['required', 'string', 'in:windows-like,macos-like,terminal,difference,various,terminal'],
                'focus' => ['required', 'array'],
                'focus.*' => ['required', 'string', 'in:general use,enthusiast,entry point,server,gaming,stability,security'],
                'logo_url' => ['required', 'string', 'url'],
                'recommended' => ['required', 'boolean'],
                'name' => ['required', 'string'],
                'download_page' => ['required', 'string', 'url'],
                'difficulty' => ['required', 'string', 'url'],
                'description' => ['required', 'string'],
                'security_password' => ['required', 'string']
            ]);


            $security_password = $request->input('security_password');
            $security_password_env = (string) config('app.security_password');

            if ($security_password != $security_password_env) {
                return response()->json(['message' => 'security password is invalid'], 400);
            }

            $difficulty = $request->input('difficulty');
            $old_hardware = $request->input('old_hardware');
            $appearance = $request->input('appearance');
            $focus = $request->input('focus');
            $logo_url = $request->input('logo_url');
            $recommended = $request->input('recommended');
            $name = $request->input('name');
            $download_page = $request->input('download_page');
            $description = $request->input('description');

            $distro = Distro::create([
                'difficulty' => $difficulty,
                'old_hardware' => $old_hardware,
                'appearance' => json_encode($appearance),
                'focus' => json_encode($focus),
                'logo_url' => $logo_url,
                'description' => $description,
                'download_page' => $download_page,
                'name' => $name,
                'recommended' => $recommended,
            ]);

            return response()->json([
                'message' => 'distro created with success',
                'distro' => $distro
            ]);
        } catch (\Exception $err) {
            return response()->json([
                'error' => $err
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        try {
            $request->validate([
                'difficulty' => ['required', 'string', 'in:easy,medium,hard,extreme'],
                'old_hardware' => ['required', 'boolean'],
                'appearance' => ['required', 'array'],
                'appearance.*' => ['required', 'string', 'in:windows-like,macos-like,terminal,difference,various'],
                'focus' => ['required', 'array'],
                'focus.*' => ['required', 'string', 'in:general use,enthusiast,entry point,server,gaming,stability,security']
            ]);

            $query = Distro::query()
                ->where('old_hardware', '=',$request->old_hardware)
                ->where('difficulty','=', $request->difficulty);

            foreach ($request->appearance as $item) {
                $query->whereJsonContains('appearance', $item);
            }

            foreach ($request->focus as $item) {
                $query->whereJsonContains('focus', $item);
            }

            return response()->json($query->get());
        } catch (\Exception $err) {
            return response()->json(['error' => $err->getMessage()], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            $request->validate([
                'difficulty' => ['required', 'string', 'in:easy,medium,hard,extreme'],
                'old_hardware' => ['required', 'boolean'],
                'appearance' => ['required', 'array'],
                'appearance.*' => ['required', 'string', 'in:windows-like,macos-like,terminal,difference,various,terminal'],
                'focus' => ['required', 'array'],
                'focus.*' => ['required', 'string', 'in:general use,enthusiast,entry point,server,gaming,stability,security'],
                'logo_url' => ['required', 'string', 'url'],
                'recommended' => ['required', 'boolean'],
                'name' => ['required', 'string'],
                'download_page' => ['required', 'string', 'url'],
                'difficulty' => ['required', 'string', 'url'],
                'description' => ['required', 'string'],
                'security_password' => ['required', 'string']
            ]);

            $security_password = $request->input('security_password');
            $security_password_env = (string) config('app.security_password');

            if ($security_password != $security_password_env) {
                return response()->json(['message' => 'security password is invalid'], 400);
            }

            $difficulty = $request->input('difficulty');
            $old_hardware = $request->input('old_hardware');
            $appearance = $request->input('appearance');
            $focus = $request->input('focus');
            $logo_url = $request->input('logo_url');
            $recommended = $request->input('recommended');
            $name = $request->input('name');
            $download_page = $request->input('download_page');
            $description = $request->input('description');

            $distro = Distro::query()->where('id', '=', $id)->first();

            $distro->update([
                'difficulty' => $difficulty,
                'old_hardware' => $old_hardware,
                'appearance' => json_encode($appearance),
                'focus' => json_encode($focus),
                'logo_url' => $logo_url,
                'description' => $description,
                'download_page' => $download_page,
                'name' => $name,
                'recommended' => $recommended,
            ]);

            return response()->json([
                'message' => 'Distro updated with success',
                'distro' => $distro
            ]);
        } catch (Exception $err) {
            return response()->json([
                'error' => $err
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {
            $distro = Distro::query()->where('id', '=', $id)->first();

            if ($distro === null) {
                return response()->json([
                    'error' => 'Distro not found'
                ], 400);
            }

            $distro->delete();

            return response()->json([
                'message' => 'Distro deleted with success'
            ]);
        } catch (\Exception $err) {
            return response()->json([
                'error' => $err
            ], 400);
        }
    }
}
