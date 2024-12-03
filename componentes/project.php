<?php

$projetos = [
    [
        "titulo" => "Meu Primeiro Projeto PHP",
        "descricao" => "um portifolio feito em php",
        "stack" => ["PHP", "Laravel", "ReactJs"],
        "image" => "./img/meu_primeiro_projeto_php.png"
    ],
    [
        "titulo" => "TOPAM",
        "descricao" => "PROJETO GERENCIAMENTO DE PESCA",
        "stack" => ["PHP", "Laravel", "ReactJs"],
        "image" => "./img/topam.png"
    ],
    [
        "titulo" => "CADASTRO DE ELEITORES",
        "descricao" => "PROJETO DE CADASTRO DE ELEITORES",
        "stack" => ["PHP", "Laravel", "ReactJs"],
        "image" => "./img/cabraldev.png"
    ]
];



?>


<div class="flex flex-wrap justify-center gap-8 mt-10 mb-20">
    <?php foreach ($projetos as $projeto) : ?>
        <!-- Cards -->
        <div class="px-2 flex items-center justify-center gap-x-4 hover:border boder-slate-800 hover:rounded-lg max-w-screen-sm">
            <div class="rounded-lg shadow-md w-2/3 bg-gray-800">
                <img src="<?= $projeto['image'] ?>" alt="<?= $projeto['titulo'] ?>" class="w-full h-40 rounded-lg" />
            </div>
            <div class=" w-3/3 flex flex-col justify-between h-full py-4 gap-y-2">
                <h3 class="text-xl font-semibold text-white"><?= $projeto['titulo'] ?></h3>
                <p class="text-gray-400 max-w-screen-lg"><?= $projeto['descricao'] ?></p>
                <div class="flex items-center gap-x-2">
                    <?php foreach ($projeto['stack'] as $stack) : ?>
                        <span class="hover:translate-y-0.5 bg-cyan-600 text-slate-950 rounded-full px-2 py-1 font-bold"><?= $stack ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>