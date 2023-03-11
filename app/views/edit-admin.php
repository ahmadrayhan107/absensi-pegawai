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
            <form action="<?= BASE_URL; ?>/Admin/modify/<?= $url[5] ?>" method="post" enctype="multipart/form-data">
                <h1 class="mb-10 text-center text-3xl font-bold text-secondary">
                    Edit Admin
                </h1>
                <div class="md:flex block w-full">
                    <div class="block md:w-1/2 w-full">
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="h-6 w-6">
                                        <path fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" placeholder="Username" name="username" id="username"
                                value="<?= $data['username'] ?>"
                                class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary" />
                        </div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="h-6 w-6">
                                        <path fill-rule="evenodd"
                                            d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" placeholder="Nama Petugas" name="nama_petugas" id="name"
                                value="<?= $data['nama_petugas'] ?>"
                                class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary" />
                        </div>
                        <div class="relative mb-10 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="h-6 w-6">
                                        <path fill-rule="evenodd"
                                            d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <select name="level_akses" id="levelakses"
                                class="text-md block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
                                onmousedown="hideSelection('levelakses')">
                                <?php
                                $lvl_akses = ($data['level_akses'] == "1") ? "1" : "2";
                                ?>
                                <option value="<?= $lvl_akses ?>" class="text-md text-secondary">
                                    <?= $lvl_akses ?>
                                </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" type="submit" class="btn-primary w-4">
                    Edit
                </button>
                <?php
                $url = explode('/', $_SERVER['REQUEST_URI']);
                ?>
                <a href="<?= BASE_URL; ?>/Admin/editPassword/<?= $url[5] ?>">
                    <button type="button" name="password" class="btn-primary w-4">
                        Change Password
                    </button>
                </a>
            </form>
        </div>
    </div>
    <!-- Update End -->
    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>

</html>