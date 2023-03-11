<body class="bg-blue-100">
  <!-- Navbar Start -->
  <header class="fixed top-0 left-0 z-50 flex w-full items-center bg-primary">
    <div class="container">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex px-4">
          <a href="<?= BASE_URL ?>/Logout">
            <button class="font-semibold text-white">Log Out</button>
          </a>
        </div>
        <div class="flex px-4">
          <span class="font-semibold text-white">Dashboard</span>
        </div>
        <div class="flex px-4">
          <span class="font-semibold text-white"><?= $_SESSION['username'] ?></span>
        </div>
      </div>
    </div>
  </header>
  <!-- Navbar End -->
  <!-- Nav Menu Start -->
  <div
    class="fixed left-0 bottom-0 z-40 flex h-20 w-full items-center justify-between bg-white md:block md:h-full md:w-20 md:items-start md:justify-start md:pt-28">
    <div class="mx-10 w-1/6 md:ml-auto md:mr-auto md:mb-10 md:w-1/2 md:h-auto">
      <a href="<?= BASE_URL ?>/Home" class="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill=""
          class="h-auto md:w-full w-[50px] fill-primary transition duration-300 ease-in-out hover:opacity-80">
          <path
            d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
          <path fill-rule="evenodd"
            d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
            clip-rule="evenodd"/>
        </svg>
      </a>
    </div>
    <div class="mx-10 w-1/6 md:ml-auto md:mr-auto md:mb-10 md:w-1/2 md:h-auto">
      <a href="<?= BASE_URL ?>/Admin" class="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          class="h-auto md:w-full w-[50px] fill-primary transition duration-300 ease-in-out hover:opacity-80">
          <path fill-rule="evenodd"
            d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z"
            clip-rule="evenodd"/>
        </svg>
      </a>
    </div>
    <div class="mx-10 w-1/6 md:ml-auto md:mr-auto md:mb-10 md:w-1/2 md:h-auto">
      <a href="<?= BASE_URL ?>/Pegawai" class="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          class="h-auto md:w-full w-[50px] fill-primary transition duration-300 ease-in-out hover:opacity-80">
          <path
            d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
        </svg>
      </a>
    </div>
  </div>
  <!-- Nav Menu End -->
  <!-- Content Start -->
  <div class="z-0 ml-20 mt-20 w-full">
    <!-- Here -->
  </div>
  <!-- Content End -->
  <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>