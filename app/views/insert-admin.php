<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Insert Admin</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css" />
</head>

<body class="bg-blue-100">

  <!-- Update Start -->
  <div class="container h-[100vh] flex items-start md:items-center justify-center">
    <div class="md:w-[600px] w-4/5 rounded-lg bg-white p-10 my-10 md:my-0 shadow-lg">
      <form action="<?= BASE_URL; ?>/Admin/insert" method="post" enctype="multipart/form-data">
        <h1 class="mb-10 text-center text-3xl font-bold text-secondary">
          Insert Admin
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
                class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"/>
            </div>
            <div class="relative mt-1 rounded-md shadow-sm">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <span class="text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor" class="h-6 w-6">
                    <path fill-rule="evenodd"
                      d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
              </div>
              <input type="password" placeholder="Password" name="password" id="password"
                class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"/>
              <div class="pointer-events-auto absolute inset-y-0 right-0 z-10 flex items-center pr-3"
                name="passwordVisibility" id="passwordVisibility" onclick="toggleVisibility()">
                <span class="text-slate-400"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor" class="z-10 h-6 w-6" name="visibible" id="visible">
                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd"
                      d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                      clip-rule="evenodd" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hidden h-6 w-6"
                    name="unvisible" id="unvisible">
                    <path
                      d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                    <path
                      d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                    <path
                      d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                  </svg>
                </span>
              </div>
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
                class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"/>
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
                <option value="" class="text-md text-secondary">
                  Level Akses
                </option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" name="submit" id="login" type="submit" class="btn-primary w-full">
          Submit
        </button>
      </form>
    </div>
  </div>
  <!-- Update End -->
  <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>

</html>