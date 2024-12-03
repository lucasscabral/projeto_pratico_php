<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Prático PHP</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>


</head>

<body class="text-gray-400">

    <!-- Header -->
    <?php include("./componentes/header.php") ?>

    <!-- Meus Projetos -->
    <main class="mx-auto bg-zinc-900 flex flex-col justify-center items-center p-10">
        <!-- Titulo dos Projetos -->
        <div class="flex flex-col items-center gap-y-2 mt-20">
            <span class="text-lg text-red-400 text-semibold">Meu Trabalho</span>
            <h2 class="text-center text-3xl font-bold text-white">Veja os Projetos em destaque</h2>
        </div>
        <!-- Cards dos Projetos -->
        <?php include("./componentes/project.php") ?>
        <div class="mt-20 flex flex-col items-center gap-y-2 max-w-screen-lg">
            <p class="text-xl text-purple-500">Contato</p>
            <h1 class="text-5xl font-bold text-white">Gostou do meu trabalho?</h1>
            <p class="text-center">Entre em contato ou acompanhe as minhas redes socias!</p>
        </div>

    </main>

    <!-- Footer -->
    <!-- Contatos -->
    <?php include("./componentes/contact.php") ?>


</body>

</html>