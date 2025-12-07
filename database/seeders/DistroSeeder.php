<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('distro')->insert([
            'name' => 'Ubuntu',
            'difficulty' => 'medium',
            'old_hardware' => true,
            'appearance' => json_encode(['beginner friendly', 'difference']),
            'focus' => json_encode(['general use', 'server']),
            'description' => 'Ubuntu é uma das distribuições Linux mais conhecidas e usadas no mundo. Uma das suas maiores forças é a popularidade. Por ser a distro mais usada, ela acaba sendo também a mais bem servida em termos de ajuda: existem milhares de tutoriais, vídeos, guias e fóruns onde você pode encontrar respostas para praticamente qualquer dúvida. Se você procurar algo sobre Linux na internet, é muito provável que encontre instruções específicas para Ubuntu. Outra vantagem importante é que ele é a distribuição com maior suporte de aplicativos e programas no mundo Linux. Muitos softwares são criados ou testados primeiro para Ubuntu, o que deixa tudo mais simples para o usuário comum. Impressoras, placas de vídeo, ferramentas de trabalho e aplicativos do dia a dia geralmente funcionam sem dor de cabeça.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/ubuntu.png',
            'download_page' => 'https://ubuntu.com/download/desktop'
        ]);

        DB::table('distro')->insert([
            'name' => 'Zorin OS',
            'difficulty' => 'easy',
            'old_hardware' => true,
            'appearance' => json_encode(['beginner friendly', 'windows-like']),
            'focus' => json_encode(['general use', 'entry point']),
            'description' => 'Zorin OS é uma distribuição Linux feita especialmente para quem está saindo do Windows e quer algo familiar. Ele se destaca por ter uma interface muito parecida com o Windows 10 e 11, com um menu iniciar, barra de tarefas e organização visual que deixam qualquer usuário de Windows confortável desde o primeiro minuto. Esse visual amigável ajuda bastante quem não quer passar por uma mudança brusca ao migrar para o Linux. Além disso, o Zorin OS é rápido, bonito e pensado para ser fácil de usar, mesmo para quem nunca mexeu com Linux antes. Outra vantagem é que ele já vem com vários programas úteis instalados e possui uma loja de aplicativos simples e bem organizada, que lembra bastante a experiência das lojas de apps modernas. Para muitos usuários, o Zorin acaba sendo a “transição perfeita”: mantém a sensação do Windows, mas com a estabilidade e segurança do Linux.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/zorin.png',
            'download_page' => 'https://zorin.com/os/download/',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Linux Mint',
            'difficulty' => 'easy',
            'old_hardware' => true,
            'appearance' => json_encode(['beginner friendly', 'windows-like']),
            'focus' => json_encode(['general use', 'entry point']),
            'description' => 'Linux Mint é uma das distribuições Linux mais populares e queridas, principalmente entre iniciantes. Ele é conhecido por ser simples, leve e muito fácil de usar, oferecendo uma experiência que lembra bastante o visual clássico do Windows, o que ajuda muito quem está migrando e quer algo familiar. O sistema funciona bem mesmo em computadores mais fracos e já vem com vários programas úteis instalados, permitindo que você comece a usar tudo sem complicação. Além disso, o Mint conta com uma comunidade grande e ativa, cheia de tutoriais e suporte, tornando a transição para o Linux ainda mais tranquila. No geral, é uma escolha excelente para quem busca um sistema estável, rápido e pronto para o dia a dia.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/mint.png',
            'download_page' => 'https://linuxmint.com/download.php',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Pop!_OS',
            'difficulty' => 'easy',
            'old_hardware' => false,
            'appearance' => json_encode(['beginner friendly', 'macos-like']),
            'focus' => json_encode(['general use', 'entry point']),
            'description' => 'Pop!_OS é uma distribuição Linux moderna e voltada para quem gosta de desempenho e praticidade. Criado pela System76, ele é pensado para ser rápido, bonito e muito fácil de usar, com uma interface elegante que ajuda a organizar as janelas e deixar tudo mais produtivo. Uma das suas maiores vantagens é que ele funciona muito bem para quem usa o computador para estudar, trabalhar ou programar, além de ter um ótimo suporte para placas de vídeo, o que o torna uma ótima opção para jogos e tarefas pesadas. O Pop!_OS também traz ferramentas próprias que facilitam o dia a dia, como o modo de tiling automático, que organiza as janelas na tela de forma inteligente. No geral, é uma escolha excelente para quem quer um Linux moderno, ágil e pronto para oferecer uma experiência fluida tanto para usuários iniciantes quanto mais avançados.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/popos.png',
            'download_page' => 'https://system76.com/pop/download/?srsltid=AfmBOopI7bxL6A7PjTPDYDNZVJRCnBGp23D7l6t-QyoViV9X4OixfFsd',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Debian',
            'difficulty' => 'medium',
            'old_hardware' => false,
            'appearance' => json_encode(['terminal', 'difference', 'various']),
            'focus' => json_encode(['general use', 'server', 'stability', 'security']),
            'description' => 'Debian é uma das distribuições Linux mais antigas e respeitadas, conhecida pela sua estabilidade e confiabilidade. Ele é o tipo de sistema que “simplesmente funciona” por anos, sendo muito usado em servidores e também por usuários que querem um computador estável para o dia a dia. Apesar de ser muito poderoso, o Debian costuma ser um pouco mais técnico do que outras distros populares, e algumas configurações podem exigir mais conhecimento ou pesquisa por parte do usuário. Por outro lado, sua comunidade é enorme e muito ativa, o que garante bastante suporte, tutoriais e soluções para praticamente qualquer problema. O sistema prioriza estabilidade, por isso nem sempre traz os programas mais recentes, mas em troca oferece uma experiência sólida e segura. No geral, o Debian é ideal para quem busca um Linux confiável, limpo e sem muitas modificações, perfeito para usuários que querem aprender mais sobre o sistema e preferem estabilidade acima de tudo.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/debian.png',
            'download_page' => 'https://www.debian.org/distrib/',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Manjaro',
            'difficulty' => 'medium',
            'old_hardware' => true,
            'appearance' => json_encode(['windows-like', 'macos-like', 'various']),
            'focus' => json_encode(['general use', 'enthusiast']),
            'description' => 'Manjaro é uma distribuição Linux moderna que busca juntar o melhor dos dois mundos: a velocidade e atualizações constantes do Arch Linux, mas com muito mais praticidade e facilidade. Ele é pensado para pessoas que querem um sistema rápido, atualizado e cheio de recursos, mas sem precisar passar pelas configurações complicadas do Arch. O Manjaro já vem pronto para usar, com drivers instalados, ferramentas próprias e uma interface bonita, disponível em várias versões como XFCE, KDE e GNOME. Por receber atualizações mais recentes, é uma ótima escolha para quem gosta de novidades e quer tirar o máximo da máquina, seja para jogos, trabalho ou estudo. No geral, o Manjaro atende bem usuários que querem algo mais moderno e poderoso, sem abrir mão de uma experiência acessível e muito amigável.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/manjaro.png',
            'download_page' => 'https://manjaro.org/products/download/x86'
        ]);

        DB::table('distro')->insert([
            'name' => 'Arch Linux',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['terminal', 'various']),
            'focus' => json_encode(['general use', 'enthusiast']),
            'description' => 'Arch Linux é uma distribuição conhecida por dar total controle ao usuário. Ele não vem pronto como outras distros: você mesmo monta o sistema do zero, escolhendo exatamente o que quer instalar. Isso faz do Arch uma opção poderosa e extremamente personalizável, mas também mais difícil e indicada para quem gosta de aprender, explorar e mexer no sistema. Uma das suas características mais marcantes é o modelo de atualizações contínuas, que mantém tudo sempre na versão mais recente. Além disso, o Arch possui uma das melhores documentações do mundo Linux, o famoso Arch Wiki, que ajuda muito na hora de configurar o sistema. No geral, o Arch Linux é ideal para quem quer entender profundamente como o Linux funciona e ter um sistema totalmente moldado ao seu gosto, mesmo que isso exija tempo e conhecimento.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/arch.png',
            'download_page' => 'https://archlinux.org/download/'
        ]);

        DB::table('distro')->insert([
            'name' => 'Fedora',
            'difficulty' => 'medium',
            'old_hardware' => false,
            'appearance' => json_encode(['various']),
            'focus' => json_encode(['general use', 'enthusiast']),
            'description' => 'Fedora é uma distribuição Linux moderna e confiável, conhecida por trazer tecnologias novas antes da maioria das outras distros. Ele é rápido, organizado e tem um visual bem profissional, usando o GNOME como interface principal. O Fedora é uma ótima opção para quem gosta de um sistema estável, mas também quer acesso a novidades e melhorias constantes. É muito usado por programadores, estudantes e pessoas que querem um Linux atualizado sem complicação. O sistema funciona muito bem “do jeito que vem”, com uma instalação limpa, segura e pensada para produtividade. No geral, o Fedora é ideal para quem busca um Linux moderno, elegante e pronto para o dia a dia, combinando estabilidade com inovação de forma equilibrada.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/fedora.png',
            'download_page' => 'https://www.fedoraproject.org/pt-br/workstation/download',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Kali',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['security', 'enthusiast', 'security']),
            'description' => 'Kali Linux é uma distribuição feita especialmente para testes de segurança e auditoria digital, amplamente usada por profissionais da área de segurança da informação. Diferente das distros voltadas para uso comum, o Kali já vem com várias ferramentas avançadas para análise, investigação e testes de segurança, por isso não é indicado para iniciantes nem para uso diário. Ele exige mais conhecimento e cuidado, já que seu foco não é ser um sistema simples ou amigável, mas sim um ambiente profissional e preparado para tarefas específicas. No geral, o Kali Linux é ideal para quem trabalha com cibersegurança ou está estudando essa área de forma séria e responsável, oferecendo um conjunto poderoso de ferramentas em um sistema leve e direto ao ponto.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/kali.png',
            'download_page' => 'https://www.kali.org/get-kali/#kali-platforms'
        ]);

        DB::table('distro')->insert([
            'name' => 'tails',
            'difficulty' => 'extreme',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['security', 'enthusiast', 'security']),
            'description' => 'O Tails OS é um sistema operacional focado em privacidade e anonimato, desenvolvido para ser usado a partir de um pendrive ou DVD sem deixar rastros no computador. Baseado no Debian, ele direciona todo o tráfego de internet automaticamente pela rede Tor, o que dificulta a identificação do usuário e protege contra vigilância e censura. Uma de suas características mais marcantes é que, ao ser desligado, o sistema não armazena informações localmente, preservando o sigilo das atividades realizadas durante sua execução. Para quem precisa guardar arquivos ou configurações, existe a opção de criar um armazenamento persistente criptografado no próprio pendrive, acessível apenas com senha. Além dos mecanismos de anonimato, o Tails inclui diversas ferramentas voltadas à segurança, como softwares de criptografia de arquivos e comunicações, aplicativos para edição segura de documentos e navegadores configurados para minimizar rastreamento. Por ser um sistema voltado à proteção pessoal, ele é muito usado por jornalistas, defensores de direitos humanos e pessoas que vivem em ambientes de risco, onde a privacidade digital é essencial. Apesar disso, o Tails mantém uma filosofia de uso responsável, reforçando que anonimato não é sinônimo de impunidade, mas sim uma forma de garantir liberdade e segurança no ambiente digital.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/tails.png',
            'download_page' => 'https://tails.net/install/index.en.html'
        ]);

        DB::table('distro')->insert([
            'name' => 'Slackware',
            'difficulty' => 'extreme',
            'old_hardware' => true,
            'appearance' => json_encode(['difference', 'terminal']),
            'focus' => json_encode(['stability', 'enthusiast', 'security']),
            'description' => 'O Slackware é uma das distribuições Linux mais antigas ainda em atividade, conhecido por sua filosofia de simplicidade, estabilidade e proximidade com o funcionamento original do Unix. Criado por Patrick Volkerding em 1993, o Slackware busca oferecer um sistema limpo, sem modificações desnecessárias e com o mínimo de automação possível, permitindo que o usuário mantenha controle total sobre o ambiente. Sua instalação e configuração tendem a ser mais manuais do que em outras distribuições modernas, o que pode exigir mais conhecimento técnico, mas ao mesmo tempo oferece uma compreensão mais profunda do sistema. A distribuição utiliza ferramentas tradicionais, como scripts em shell para gerenciamento de pacotes e serviços, evitando soluções mais complexas ou pesadas. Por essa abordagem conservadora e altamente personalizada, o Slackware é muito valorizado por usuários experientes, administradores de sistemas e entusiastas que desejam um Linux confiável, previsível e livre de abstrações. Ao longo dos anos, o Slackware ganhou reputação por ser extremamente robusto, fazendo dele uma opção ideal para servidores e ambientes onde estabilidade é essencial. Mesmo mantendo seu estilo clássico, a distribuição continua evoluindo lentamente para incorporar novas tecnologias, sempre priorizando coerência e simplicidade técnica acima de recursos automatizados.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/slackware.png',
            'download_page' => 'https://download.liveslak.org/'
        ]);

        DB::table('distro')->insert([
            'name' => 'Big Linux',
            'difficulty' => 'easy',
            'old_hardware' => true,
            'appearance' => json_encode(['various']),
            'focus' => json_encode(['gaming', 'general use']),
            'description' => 'O BigLinux é uma distribuição Linux brasileira que se destaca por oferecer uma experiência prática, rápida e amigável para usuários de todos os níveis, especialmente aqueles que estão migrando do Windows e buscam um sistema pronto para uso. Baseado no Debian e no KDE Neon, o BigLinux combina estabilidade com um ambiente gráfico moderno, utilizando o KDE Plasma altamente personalizado para proporcionar uma interface elegante e intuitiva. A distribuição se diferencia por trazer uma grande variedade de ferramentas próprias, como o Big Store — uma loja de aplicativos unificada que facilita a instalação de programas em formatos como DEB, Snap, Flatpak e AppImage — e o Big Drivers, que simplifica a configuração de componentes de hardware, incluindo placas de vídeo. Além disso, o sistema oferece otimizações automáticas, temas visuais variados e recursos que melhoram o desempenho, tornando a experiência fluida mesmo em computadores mais simples. O BigLinux também inclui codecs, aplicativos essenciais e diversas opções de personalização, permitindo que o usuário molde o sistema de acordo com suas preferências sem complicações. Com sua combinação de facilidade, beleza e eficiência, ele se tornou uma das principais opções nacionais para quem busca um Linux amigável, completo e pronto para tarefas cotidianas, produtividade e até mesmo jogos.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/biglinux.png',
            'download_page' => 'https://www.biglinux.com.br/download'
        ]);

        DB::table('distro')->insert([
            'name' => 'Endeavour OS',
            'difficulty' => 'medium',
            'old_hardware' => true,
            'appearance' => json_encode(['various']),
            'focus' => json_encode(['gaming', 'general use']),
            'description' => 'O BigLinux é uma distribuição Linux brasileira que se destaca por oferecer uma experiência prática, rápida e amigável para usuários de todos os níveis, especialmente aqueles que estão migrando do Windows e buscam um sistema pronto para uso. Baseado no Debian e no KDE Neon, o BigLinux combina estabilidade com um ambiente gráfico moderno, utilizando o KDE Plasma altamente personalizado para proporcionar uma interface elegante e intuitiva. A distribuição se diferencia por trazer uma grande variedade de ferramentas próprias, como o Big Store — uma loja de aplicativos unificada que facilita a instalação de programas em formatos como DEB, Snap, Flatpak e AppImage — e o Big Drivers, que simplifica a configuração de componentes de hardware, incluindo placas de vídeo. Além disso, o sistema oferece otimizações automáticas, temas visuais variados e recursos que melhoram o desempenho, tornando a experiência fluida mesmo em computadores mais simples. O BigLinux também inclui codecs, aplicativos essenciais e diversas opções de personalização, permitindo que o usuário molde o sistema de acordo com suas preferências sem complicações. Com sua combinação de facilidade, beleza e eficiência, ele se tornou uma das principais opções nacionais para quem busca um Linux amigável, completo e pronto para tarefas cotidianas, produtividade e até mesmo jogos.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/endeavour.png',
            'download_page' => 'https://endeavouros.com/'
        ]);

        DB::table('distro')->insert([
            'name' => 'Garuda Linux',
            'difficulty' => 'medium',
            'old_hardware' => false,
            'appearance' => json_encode(['various', 'difference']),
            'focus' => json_encode(['gaming', 'general use', 'enthusiast']),
            'description' => 'O Garuda Linux é uma distribuição baseada no Arch que se destaca por oferecer alto desempenho, visual moderno e uma experiência prática, mesmo para quem não quer lidar com as configurações manuais típicas do Arch Linux. A distribuição adota uma abordagem ousada, trazendo um conjunto de otimizações avançadas que melhoram a velocidade e a responsividade do sistema, além de incluir ferramentas próprias que facilitam a administração diária. Um dos destaques do Garuda é o uso do sistema de arquivos Btrfs por padrão, com snapshots automáticos integrados ao Timeshift, o que permite restaurar o sistema facilmente em caso de problemas, algo especialmente útil em distribuições rolling release. O Garuda também oferece diversas edições com ambientes gráficos variados — como KDE Dr460nized, GNOME, Cinnamon, Xfce, LXQt-Kwin e até opções com window managers minimalistas — cada uma com identidade visual marcante e ajustes prontos para uso. A distribuição incorpora utilitários como o Garuda Assistant e o Garuda Settings Manager, que simplificam desde a instalação de drivers até a otimização de desempenho. Combinando estética, rapidez e facilidade, o Garuda Linux se tornou uma opção popular entre usuários que desejam a flexibilidade do Arch, mas com um sistema mais amigável, protegido e cheio de recursos desde o primeiro boot.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/garuda.png',
            'download_page' => 'https://garudalinux.org/editions'
        ]);

        DB::table('distro')->insert([
            'name' => 'Alpine Linux',
            'difficulty' => 'hard',
            'old_hardware' => false,
            'appearance' => json_encode(['terminal']),
            'focus' => json_encode(['server', 'stability', 'security']),
            'description' => 'O Alpine Linux é uma distribuição conhecida por sua leveza, segurança e simplicidade, amplamente utilizada em servidores, contêineres e ambientes onde eficiência é fundamental. Desenvolvido para ser pequeno e rápido, o sistema utiliza a biblioteca musl e o OpenRC como sistema de inicialização, evitando componentes mais pesados presentes em outras distribuições. Sua filosofia se baseia em oferecer um ambiente enxuto, com poucos pacotes por padrão, permitindo que o usuário adicione apenas o que realmente precisa. Outro ponto importante é o foco em segurança: o Alpine compila seus pacotes com hardening por padrão e utiliza tecnologias que reduzem a superfície de ataque. Devido ao seu tamanho extremamente reduzido e à rapidez na inicialização, o Alpine se tornou muito popular no ecossistema de contêineres, especialmente em imagens Docker, onde sua leveza resulta em sistemas mais rápidos e com menor consumo de recursos. Apesar de minimalista, ele oferece grande flexibilidade e pode ser usado tanto em servidores quanto em sistemas embarcados ou como base para projetos personalizados. Seu design direto e robusto faz do Alpine Linux uma escolha ideal para quem busca eficiência máxima e um ambiente altamente seguro e controlado.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/alpine.png',
            'download_page' => 'https://alpinelinux.org/downloads/',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Red Hat Enterprise Linux',
            'difficulty' => 'hard',
            'old_hardware' => false,
            'appearance' => json_encode(['terminal']),
            'focus' => json_encode(['server', 'stability', 'security']),
            'description' => 'O Red Hat Enterprise Linux, conhecido como RHEL, é uma distribuição Linux comercial desenvolvida pela Red Hat e voltada principalmente para ambientes corporativos que exigem estabilidade, segurança e suporte profissional. Sua principal característica é oferecer um ciclo de vida longo, com atualizações rigorosamente testadas e certificações para diversos tipos de hardware e softwares empresariais, garantindo confiabilidade para servidores, data centers e aplicações críticas. O RHEL é amplamente utilizado por grandes empresas devido ao seu modelo de suporte, que inclui assistência técnica, atualizações de segurança, documentação completa e ferramentas de gerenciamento avançadas. A distribuição também é base para muitas outras, como o CentOS Stream e o Rocky Linux, que seguem sua filosofia e estrutura. Além disso, o RHEL integra tecnologias voltadas para virtualização, containers, automação e computação em nuvem, sendo uma escolha comum em ambientes que utilizam Kubernetes, OpenShift e soluções corporativas da Red Hat. Com sua combinação de robustez, previsibilidade e suporte especializado, o RHEL se consolidou como uma das distribuições Linux mais importantes no setor empresarial.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/redhat.png',
            'download_page' => 'https://www.redhat.com/en/technologies/linux-platforms/enterprise-linux'
        ]);

        DB::table('distro')->insert([
            'name' => 'Alma Linux',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['server', 'security']),
            'description' => 'O AlmaLinux é uma distribuição Linux criada como uma alternativa gratuita e compatível com o Red Hat Enterprise Linux (RHEL), voltada principalmente para servidores, ambientes corporativos e infraestrutura de TI. Ela surgiu após a mudança de direção do CentOS, oferecendo uma opção estável e de longo suporte para quem precisa de um sistema confiável baseado no ecossistema RHEL. Mantido pela AlmaLinux OS Foundation, um grupo sem fins lucrativos, o projeto segue um modelo comunitário no qual empresas e usuários colaboram para garantir a continuidade e a segurança da distribuição. O AlmaLinux é totalmente binário compatível com o RHEL, o que significa que aplicações desenvolvidas para RHEL funcionam da mesma forma no AlmaLinux, sem necessidade de ajustes. A distribuição recebe atualizações de segurança, patches e manutenção de forma constante, tornando-se uma solução adequada para servidores web, bancos de dados, computação em nuvem e outros ambientes críticos. Além disso, o projeto oferece ferramentas de migração que facilitam a troca a partir de outras distros RPM, como CentOS e Rocky Linux. Com foco em estabilidade, previsibilidade e abertura, o AlmaLinux consolidou-se como uma opção robusta para quem busca um sistema empresarial de alto nível sem custos de licenciamento.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/alma.png',
            'download_page' => 'https://almalinux.org/get-almalinux/'
        ]);

        DB::table('distro')->insert([
            'name' => 'Rocky Linux',
            'difficulty' => 'hard',
            'old_hardware' => false,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['server', 'stability']),
            'description' => 'O Rocky Linux é outra distribuição criada como sucessora comunitária do CentOS tradicional, também oferecendo compatibilidade binária completa com o RHEL. Fundado por Gregory Kurtzer, um dos criadores originais do CentOS, o Rocky Linux foi desenvolvido com o objetivo de ser uma distribuição estável, transparente e totalmente controlada pela comunidade. Assim como o AlmaLinux, ele segue de perto o ciclo de atualizações do RHEL, tornando-se uma plataforma confiável para servidores, aplicações corporativas e ambientes de produção que exigem segurança e previsibilidade. Desde seu lançamento, o Rocky Linux ganhou forte aceitação entre empresas e administradores de sistemas que buscavam uma alternativa livre e comunitária após a mudança de foco do CentOS.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/rocky.png',
            'download_page' => 'https://rockylinux.org/pt-BR/download'
        ]);

        DB::table('distro')->insert([
            'name' => 'Open Suse Leap',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['server', 'stability', 'security']),
            'description' => 'O openSUSE Leap é uma distribuição estável desenvolvida pela comunidade openSUSE em parceria com a SUSE, trazendo uma base sólida derivada do código-fonte do SUSE Linux Enterprise. Com foco em estabilidade, robustez e integração fácil com ferramentas corporativas, o Leap é ideal para usuários que desejam um sistema confiável tanto para desktops quanto para servidores. A distribuição utiliza o gerenciador de pacotes Zypper e o YaST, um conjunto de ferramentas administrativas poderosas que permitem configurar praticamente todos os aspectos do sistema de forma simples e centralizada. Embora não seja tão atual quanto o openSUSE Tumbleweed, o Leap privilegia ciclos de atualização mais lentos e previsíveis, oferecendo uma experiência segura e consistente. Com sua base empresarial e sua comunidade ativa, o openSUSE Leap se tornou uma opção amplamente utilizada por profissionais que buscam equilíbrio entre estabilidade e flexibilidade.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/opensuse.png',
            'download_page' => 'https://get.opensuse.org/leap/16.0/?type=server'
        ]);

        DB::table('distro')->insert([
            'name' => 'Open Suse Tumbleweed',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['general use', 'enthusiast']),
            'description' => 'O openSUSE Tumbleweed é a variante rolling release do openSUSE, desenvolvida para fornecer as versões mais recentes de pacotes, kernels e tecnologias sem comprometer a qualidade. Todas as atualizações passam por testes automatizados rigorosos através do projeto openQA, garantindo que o sistema mantenha estabilidade mesmo sendo constantemente atualizado. Diferentemente do Leap, o Tumbleweed é indicado para usuários que desejam acesso rápido a novidades, desenvolvimento de software ou uso de recursos atualizados do kernel e dos ambientes gráficos. Apesar de trazer pacotes recentes, o sistema permanece confiável graças ao modelo estruturado de testes e ao forte ecossistema de administração do openSUSE, incluindo o YaST e ferramentas como o zypper. Com isso, o Tumbleweed se firmou como uma das distribuições rolling mais estáveis e bem testadas do mundo Linux.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/tumbleweed.png',
            'download_page' => 'https://get.opensuse.org/tumbleweed/?type=server'
        ]);

        DB::table('distro')->insert([
            'name' => 'Bazzite',
            'difficulty' => 'easy',
            'old_hardware' => true,
            'appearance' => json_encode(['windows-like']),
            'focus' => json_encode(['gaming', 'stability']),
            'description' => 'O Bazzite Linux é uma distribuição baseada no Fedora, voltada principalmente para jogos e multimídia, oferecendo drivers de vídeo, bibliotecas e compatibilidade com plataformas como Steam e Lutris desde a instalação. Ele utiliza um sistema imutável com rpm-ostree, permitindo atualizações seguras e rollback em caso de problemas. Embora seja focado em performance e jogos, também pode ser usado como sistema diário, oferecendo suporte a aplicativos, codecs e ambientes de desktop prontos para uso. Seu objetivo é combinar facilidade, estabilidade e desempenho, tornando a experiência Linux acessível para gamers e usuários que querem um sistema pronto para uso.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/bazzite.png',
            'download_page' => 'https://bazzite.gg/'
        ]);

        DB::table('distro')->insert([
            'name' => 'CachyOS',
            'difficulty' => 'medium',
            'old_hardware' => false,
            'appearance' => json_encode(['various']),
            'focus' => json_encode(['gaming', 'enthusiast', 'general use']),
            'description' => 'O CachyOS é uma distribuição Linux baseada no Arch, voltada para desempenho e otimização do sistema, com foco em desktops modernos. Ele inclui ajustes de kernel, configurações de I/O e ferramentas próprias para melhorar a velocidade e a responsividade, além de oferecer ambientes gráficos prontos para uso, como KDE Plasma, GNOME e XFCE. O sistema mantém a filosofia rolling release do Arch, permitindo que o usuário tenha sempre softwares atualizados, combinando eficiência, personalização e experiência pronta para o dia a dia.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/cachyos.png',
            'download_page' => 'https://cachyos.org/download/',
            'recommended' => true,
        ]);

        DB::table('distro')->insert([
            'name' => 'Elementary OS',
            'difficulty' => 'easy',
            'old_hardware' => true,
            'appearance' => json_encode(['macos-like']),
            'focus' => json_encode(['general use']),
            'description' => 'O elementary OS é uma distribuição Linux baseada no Ubuntu, conhecida pelo seu design elegante, interface minimalista e facilidade de uso. Foca em oferecer uma experiência visualmente agradável e consistente, com o desktop Pantheon, aplicativos próprios integrados e uma filosofia de simplicidade que lembra a experiência de uso do macOS. É voltado para usuários que buscam um sistema pronto para o dia a dia, combinando produtividade, estabilidade e estética sem exigir grandes configurações.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/elementary.png',
            'download_page' => 'https://elementary.io/pt_BR/'
        ]);

        DB::table('distro')->insert([
            'name' => 'Void Linux',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['general use', 'enthusiast']),
            'description' => 'O Void Linux é uma distribuição independente, conhecida por sua leveza, simplicidade e flexibilidade, sem depender de bases como Debian ou Ubuntu. Ele utiliza o gerenciador de pacotes XBPS, oferece versões com init system runit em vez do systemd, e foca em desempenho, personalização e controle total pelo usuário. Por ser minimalista e eficiente, é indicado para usuários avançados que desejam construir um sistema ajustado às suas necessidades.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/void.png',
            'download_page' => 'https://voidlinux.org/download/'
        ]);

        DB::table('distro')->insert([
            'name' => 'Nix OS',
            'difficulty' => 'hard',
            'old_hardware' => true,
            'appearance' => json_encode(['difference']),
            'focus' => json_encode(['general use', 'enthusiast']),
            'description' => 'NixOS é uma distribuição Linux inovadora que se destaca pelo seu sistema de gerenciamento de pacotes declarativo e reprodutível. Em vez de alterar o sistema diretamente, ele utiliza o Nix, que garante que cada pacote e configuração seja isolado, permitindo que diferentes versões coexistam sem conflitos. As configurações do sistema são definidas em arquivos de texto, tornando fácil reproduzir setups em outras máquinas ou reverter alterações. Além disso, o NixOS oferece segurança, consistência e facilidade de rollback, sendo especialmente útil para desenvolvedores e administradores que precisam de ambientes estáveis e previsíveis.',
            'logo_url' => 'https://distrowatch.com/images/yvzhuwbpy/nixos.png',
            'download_page' => 'https://nixos-org.translate.goog/download/?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=pt&_x_tr_pto=tc'
        ]);
    }
}
