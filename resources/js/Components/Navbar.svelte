<script>
  import { onMount } from 'svelte';

  let isMenuOpen = false;
  let mobileMenuHeight = 0;

  function toggleMenu() {
    isMenuOpen = !isMenuOpen;
  }

  onMount(() => {
    const mobileMenu = document.querySelector('.mobile-menu');
    if (mobileMenu) {
      mobileMenuHeight = mobileMenu.offsetHeight;
    }
  });

  $: menuTransform = isMenuOpen ? '0' : `calc(-${mobileMenuHeight}px - 55px)`;
</script>

<nav class="bg-transparent py-2 px-4 sm:px-6 lg:px-8 h-14 lg:h-auto lg:static fixed bottom-0 inset-x-0 lg:top-0 z-50 md:border-b border-t backdrop-blur-lg bg-white/30">
  <div class="container mx-auto h-full">
    <div class="flex justify-between items-center h-full">
      <!-- Logo -->
      <div class="flex items-center space-x-1 h-full">
        <a href="#/" class="flex items-center space-x-1 h-full">
          <span class="text-lg text-gray-400">https</span>
          <img src="/favicon.svg" alt="" class="mt-1 w-7">
          <span class="text-lg text-slate-800 font-semibold">andrirosandi</span>
          <span class="text-lg text-gray-400">.my.id</span>
        </a>
      </div>

      <!-- Navigation Menu and CTA Buttons -->
      <div class="flex items-center space-x-4 h-full">
        <!-- Navigation Menu -->
        <div class="hidden lg:block h-full">
          <ul class="flex flex-wrap justify-center items-center space-x-8 h-full">
            <li>
              <a href="#home" class="text-gray-600 hover:text-orange-500 font-medium transition duration-150 ease-in-out border-b-2 border-orange-500">Home</a>
            </li>
            <li>
              <a href="#about" class="text-gray-600 hover:text-orange-500 font-medium transition duration-150 ease-in-out">About</a>
            </li>
            <li>
              <a href="#portfolio" class="text-gray-600 hover:text-orange-500 font-medium transition duration-150 ease-in-out">Portfolio</a>
            </li>
            <li>
              <a href="#contact" class="text-gray-600 hover:text-orange-500 font-medium transition duration-150 ease-in-out">Contact</a>
            </li>
          </ul>
        </div>

        <!-- Divider -->
        <div class="hidden lg:block h-6 border-l border-gray-200"></div>

        <!-- CTA Buttons -->
        <div class="hidden lg:flex items-center space-x-4 h-full">
          <a href="#/" class="flex items-center text-gray-600 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="GitHub">
            <ion-icon name="logo-github" class="mt-0.5 h-4 w-4 hover:text-blue-500"></ion-icon>
          </a>
          <a href="#/" class="flex items-center text-gray-600 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="Instagram">
            <ion-icon name="logo-instagram" class="mt-0.5 h-4 w-4 hover:text-blue-500"></ion-icon>
          </a>
          <a href="#/" class="flex items-center text-gray-600 hover:text-blue-500 transition duration-150 ease-in-out" aria-label="LinkedIn">
            <ion-icon name="logo-linkedin" class="mt-0.5 h-4 w-4 hover:text-blue-500"></ion-icon>
          </a>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <div class="lg:hidden flex items-center">
        <button
          class="text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800"
          aria-label="Toggle menu"
          on:click={toggleMenu}
        >
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

 <!-- Mobile Menu -->
{#if isMenuOpen}
<div class="absolute top-0 inset-x-0 bg-white shadow-lg py-4 z-40 pb-14 transform translate-y-[calc(-300px)] transition-menu">
  <div class="flex flex-col space-y-4 px-4">
    <a href="#home" class="text-gray-600 hover:text-orange-500 font-medium">Home</a>
    <a href="#about" class="text-gray-600 hover:text-orange-500 font-medium">About</a>
    <a href="#portfolio" class="text-gray-600 hover:text-orange-500 font-medium">Portfolio</a>
    <a href="#contact" class="text-gray-600 hover:text-orange-500 font-medium">Contact</a>
  </div>
</div>
{/if}


</nav>
