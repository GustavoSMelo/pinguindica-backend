<?php

namespace App\Http\Controllers;

use App\Models\Distro;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

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
                'description' => ['require', 'string']
            ]);

            $difficult = $request->input('difficult');
            $old_hardware = $request->input('old_hardware');
            $appearance = $request->input('appearance');
            $focus = $request->input('focus');
            $logo_url = $request->input('logo_url');
            $recommended = $request->input('recommended');
            $name = $request->input('name');
            $download_page = $request->input('download_page');
            $description = $request->input('description');

            $distro = Distro::create([
                'difficulty' => $difficult,
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
                'difficult' => ['required', 'string', 'in:easy,medium,hard,extreme'],
                'old_hardware' => ['required', 'boolean'],
                'appearance' => ['required', 'array'],
                'appearance.*' => ['required', 'string', 'in:windows-like,macos-like,terminal,difference,various,terminal'],
                'focus' => ['required', 'array'],
                'focus.*' => ['required', 'string', 'in:general use,enthusiast,entry point,server,gaming,stability,security']
            ]);

            $difficult = $request->input('difficult');
            $old_hardware = $request->input('old_hardware');
            $appearance = $request->input('appearance');
            $focus = $request->input('focus');

            $distros = Distro::query()
                ->where('old_hardware', $old_hardware)
                ->where('difficult', $difficult)
                ->get();

            foreach ($appearance as $item) {
                $distros->where('appearance', 'LIKE', "%$item%");
            }

            foreach ($focus as $item) {
                $distros->where('focus', 'LIKE', "%$item%");
            }

            return response()->json($distros);
        } catch (\Exception $err) {
            return response()->json([
                'error' => $err
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integer $id)
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
                'description' => ['require', 'string']
            ]);

            $difficult = $request->input('difficult');
            $old_hardware = $request->input('old_hardware');
            $appearance = $request->input('appearance');
            $focus = $request->input('focus');
            $logo_url = $request->input('logo_url');
            $recommended = $request->input('recommended');
            $name = $request->input('name');
            $download_page = $request->input('download_page');
            $description = $request->input('description');

            $distro = Distro::query()->find('id', $id)->first();

            $distro->update([
                'difficulty' => $difficult,
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
    public function destroy(Integer $id)
    {
        try {
            Distro::delete($id);

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
