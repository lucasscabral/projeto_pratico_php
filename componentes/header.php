<?php
$itens = [
    [
        'href' => '',
        'texto' => 'Projetos'
    ],
    [
        'href' => 'https://github.com/lucasscabral',
        'texto' => 'GitHub'
    ],
    [
        'href' => 'https://www.linkedin.com/in/lucas-santos-cabral/',
        'texto' => 'Linkedin'

    ],
    [
        'href' => '',
        'texto' => 'Instagram'
    ]

]
?>

<header class="bg-[url('./img/Background_Intro.png')] bg-cover bg-center h-screen w-full flex justify-center items-center">
    <!-- Container que envolve todo o conteúdo do header -->
    <div class="flex flex-col items-center gap-y-16">
        <!-- Imagem de Perfil -->
        <div class="rounded-full w-50 h-50 p-2 border-4 border-red-500 flex items-center justify-center">
            <img src="https://github.com/lucasscabral.png" alt="Foto de Perfil" class="rounded-full w-40 h-40" />
        </div>

        <!-- Descrição do meu Perfil -->
        <div class="flex flex-col items-center gap-y-4 max-w-screen-lg">
            <p class="text-xl text-gray-300">Hello World! Meu nome é <span class="text-red-400 text-xl">Lucas Cabral</span> e sou</p>
            <h1 class="text-5xl font-bold text-white">Desenvolvedor Web</h1>
            <p class="text-center">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
        </div>
        <?php
        $minhasStacks = [
            [
                "stack" => "PHP",
                "color" => "red"
            ],
            [
                "stack" => "JavaScript",
                "color" => "blue"
            ],
            [
                "stack" => "ReactJs",
                "color" => "rose"
            ],
            [
                "stack" => "Html",
                "color" => "slate"
            ],
            [
                "stack" => "NodeJs",
                "color" => "green"
            ],
            [
                "stack" => "JAVA",
                "color" => "amber"
            ],
            [
                "stack" => "Css",
                "color" => "orange"
            ],
            [
                "stack" => "MySql",
                "color" => "cyan"
            ],
            [
                "stack" => "TypeScript",
                "color" => "sky"
            ],
            [
                "stack" => "Docker",
                "color" => "violet"
            ]
        ];

        ?>

        <!-- Minhas Stacks -->
        <div class="mx-auto flex flex-wrap justify-center space-x-2 p-4">
            <?php foreach ($minhasStacks as $stack) : ?>
                <span class="hover:translate-y-0.5 bg-<?= $stack['color'] ?>-600 text-slate-950 rounded-full px-4 py-2 font-bold"><?= $stack['stack'] ?></span>
            <?php endforeach; ?>

        </div>
    </div>

</header>