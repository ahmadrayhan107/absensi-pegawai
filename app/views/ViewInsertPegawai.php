<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Admin</title>
    <link rel="stylesheet" href="<?=BASE_URL?> /css/style.css">
  </head>

  <body class="bg-blue-100">
    
    <!-- Update Start -->
    <div class="container h-[100vh] flex items-start md:items-center justify-center">
      <div
        class="md:w-[600px] w-4/5 rounded-lg bg-white p-10 my-10 md:my-0 shadow-lg"
      >
        <form action="<?=BASE_URL?>/pegawai/tambah" method="post" enctype="multipart/form-data">
          <h1 class="mb-10 text-center text-3xl font-bold text-secondary">
            Insert Karyawan
          </h1>
            <div class="block w-full">
              <!-- <div class="relative rounded-md shadow-sm">
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
                        d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </div>
                <input
                  type="text"
                  placeholder="Id Karyawan"
                  name="id_pegawai"
                  id="name"
                  class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
                />
              </div> -->
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
                        d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </div>
                <input
                  type="text"
                  placeholder="Nama Karyawan"
                  name="nama_pegawai"
                  id="name"
                  class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
                />
              </div>
              <div class="relative rounded-md shadow-sm">
                <div
                  class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                >
                  <span class="text-slate-400"
                    ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                      <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                  </span>
                </div>
                <input
                  type="email"
                  placeholder="Email"
                  name="email"
                  id="email"
                  class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
                />
              </div>
              <div class="relative rounded-md shadow-sm">
                <div
                  class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                >
                  <span class="text-slate-400"
                    ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                    </svg>
                    
                  </span>
                </div>
                <input
                  type="text"
                  placeholder="No. Telepon"
                  name="telepon"
                  id="phone"
                  class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
                  onKeyPress="return goodchars(event,'0123456789',this)""
                />
              </div>
              
              <div class="relative mb-5 rounded-md shadow-sm">
                <div
                  class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                >
                  <span class="text-slate-400"
                    ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd" d="M4.5 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5h-.75V3.75a.75.75 0 000-1.5h-15zM9 6a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm-.75 3.75A.75.75 0 019 9h1.5a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM9 12a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm3.75-5.25A.75.75 0 0113.5 6H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM13.5 9a.75.75 0 000 1.5H15A.75.75 0 0015 9h-1.5zm-.75 3.75a.75.75 0 01.75-.75H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM9 19.5v-2.25a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-4.5A.75.75 0 019 19.5z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </div>
                <select
                  name="department"
                  id="department"
                  class="text-md block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
                  onmousedown="hideSelection('department')"
                >
                  <option  class="text-md text-secondary">
                    Department
                  </option>
                  <option value="IT">IT</option>
                  <option value="Business">Business</option>
                  <option value="Administration">Administration</option>
                  <option value="Event">Event</option>
                  <option value="Public Relationship">Public Relationship</option>
                </select>
              </div>
            </div>
            <div class="relative rounded-md shadow-sm">
              <div
                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
              >
              <span class="text-slate-400">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-6 w-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
              </div>
              <input
                type="text"
                placeholder="Kode Akses"
                name="kode_akses"
                id="name"
                class="text-md text-md z-10 mb-5 block w-full rounded-md border-2 border-slate-400 p-2 px-12 text-center text-secondary shadow-sm focus:outline-primary"
              />
            </div>
          <button
            name="submit"
            id="login"
            type="submit"
            class="btn-primary w-full mt-5"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
    <!-- Update End -->
    <script src="<?=BASE_URL?>/js/script.js"></script>
  </body>
</html>
