<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css" />
</head>

<body class="bg-blue-100">
    <?php
    $url = explode('/', $_SERVER['REQUEST_URI']);
    ?>

    <!-- Update Start -->
    <div class="container h-[100vh] flex items-start md:items-center justify-center">
        <div class="md:w-[600px] w-4/5 rounded-lg bg-white p-10 my-10 md:my-0 shadow-lg">
            <form action="<?= BASE_URL; ?>/Admin/modifyPassword/<?= $url[5] ?>" method="post"
                enctype="multipart/form-data">
                <h1 class="mb-10 text-center text-3xl font-bold text-secondary">
                    Edit Password
                </h1>
                <div class="md:flex block w-full">
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <input type="password" placeholder="Password" name="password" id="password"
                            class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary" />
                    </div>
                </div>
                <button type="submit" name="submit" type="submit" class="btn-primary w-4">
                    Edit Password
                </button>
            </form>
        </div>
    </div>
    <!-- Update End -->
    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>

</html>