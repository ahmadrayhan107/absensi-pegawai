<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body class="bg-blue-100">
    <!-- Content Start -->
    <div class="flex h-[100vh] flex-wrap items-center justify-center">
      <div
        class="relative block h-auto w-4/5 rounded-lg bg-white p-5 shadow-lg md:w-[480px] md:p-10"
      >
        <form action="<?= BASE_URL; ?>/Login/prosesLogin" method="post">
          <h1 class="mb-10 text-center text-3xl font-bold text-secondary">
            Login
          </h1>
          <div class="relative rounded-md shadow-sm">
            <div
              class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
            >
              <span class="text-slate-400"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </div>
            <input
              type="text"
              placeholder="Username"
              name="username"
              id="username"
              class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
            />
          </div>

          <div class="relative mt-1 mb-10 rounded-md shadow-sm">
            <div
              class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
            >
              <span class="text-slate-400"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </div>
            <input
              type="password"
              placeholder="Password"
              name="password"
              id="password"
              class="text-md text-md z-10 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
            />
            <div
              class="pointer-events-auto absolute inset-y-0 right-0 z-10 flex items-center pr-3"
              name="passwordVisibility"
              id="passwordVisibility"
              onclick="toggleVisibility()"
            >
              <span class="text-slate-400"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="z-10 h-6 w-6"
                  name="visibible"
                  id="visible"
                >
                  <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                  <path
                    fill-rule="evenodd"
                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                    clip-rule="evenodd"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="hidden h-6 w-6"
                  name="unvisible"
                  id="unvisible"
                >
                  <path
                    d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z"
                  />
                  <path
                    d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z"
                  />
                  <path
                    d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z"
                  />
                </svg>
              </span>
            </div>
          </div>
          <button
            type="submit"
            name="login"
            id="login"
            class="btn-primary w-full"
          >
            Login
          </button>
        </form>
      </div>
    </div>
    <!-- Content End -->
    <script src="js/script.js"></script>
  </body>
</html>
