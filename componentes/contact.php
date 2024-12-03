<?php


$contatos = [
    [
        "nome" => "Linkedin",
        "href" => "https://www.linkedin.com/in/lucas-santos-cabral/",
        "icone" => "<i class='ph ph-linkedin-logo custom-icon group-hover:text-sky-500'></i>",
    ],
    [
        "nome" => "GitHub",
        "href" => "https://github.com/lucasscabral",
        "icone" => "<i class='ph ph-github-logo custom-icon group-hover:text-sky-500'></i>"
    ],
    [
        "nome" => "Instagram",
        "href" => "https://www.instagram.com/cabraldev_/",
        "icone" => "<i class='ph ph-instagram-logo custom-icon group-hover:text-sky-500'></i>",
    ]
]

?>

<style>
    .custom-icon {
        font-size: 30px;
        color: lightblue;
        transition: transform 0.3s, color 0.3s;
    }

    .custom-icon:hover {
        transform: scale(1.2);
    }
</style>
<footer class="bg-[url('./img/Background_Contacts.png')] bg-cover bg-center h-screen w-full flex justify-center items-center">
    <div class="w-full flex flex-col justify-center items-center gap-y-6 ">
        <!-- Cotanto -->
        <?php foreach ($contatos as $contato) : ?>
            <div class="bg-gray-700 w-1/4 h-20 flex justify-between items-center px-4 py-2 rounded-lg hover:border-cyan-500 hover:border hover:rounded-lg max-w-screen-sm group cursor-pointer">
                <a target="_blank" href="<?= $contato['href'] ?>" class="flex justify-between items-center w-full h-full">
                    <div class="flex items-center gap-x-2 ">
                        <?= $contato['icone'] ?>
                        <span class="text-bold text-lg color-gray-300"><?= $contato['nome'] ?></span>
                    </div>
                    <i class="ph ph-arrow-up-right custom-icon group-hover:text-sky-500"></i>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</footer>