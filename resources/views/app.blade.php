<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link
      rel="stylesheet"
      type="text/css"
      href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap');
      .qwitcher-grypen-regular {
        font-family: "Qwitcher Grypen", cursive;
        font-weight: 400;
        font-style: normal;
      }
      
      .qwitcher-grypen-bold {
        font-family: "Qwitcher Grypen", cursive;
        font-weight: 700;
        font-style: normal;
      }
      </style>
      
      
    @inertiaHead
  </head>
  <body class="
  overflow-x-hidden max-w-full
  bg-gradient-to-tr from-[#FBFBFF] to-[#F8F8FF] h-screen
  {{-- bg-gradient-to-tr from-[#ff7e5f] to-[#feb47b] h-screen --}}


  ">
    @inertia
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>