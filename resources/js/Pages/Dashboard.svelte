<script>
    import Layout from '../Layouts/Layout.svelte';
    // export let name = '';
</script>
<Layout>
<!-- Hero Section -->
<div class="flex flex-col md:flex-row items-center justify-between px-4 sm:px-6 lg:px-8 md:py-8 min-h-[calc(100vh-88px)]">
  <div class="md:w-1/2 mb-2 md:mb-0">
      <h1 class="text-4xl md:text-4xl font-bold mb-4">Hello, I'm Andri Rosandi</h1>
      <h2 class="md:text-xl text-sm text-gray-600 mb-4">
          IT & Fullstack Developer based in Jakarta, specializing in 
          ERP Implementations and Software Development.
      </h2>
      <p class="md:text-sm text-xs text-gray-700 mb-6">
          Bringing ideas to life with clean code and innovative solutions. Let's 
          build something great together.
      </p>
      <div class="flex space-x-4 mb-8">
        <a href="#portfolio" 
  class="relative md:text-sm text-xs px-6 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-lg shadow-lg transition before:absolute before:inset-0 before:rounded-lg before:border-2 before:border-transparent before:bg-gradient-to-r before:from-orange-500/40 before:to-pink-500/40 before:opacity-0 before:transition-opacity hover:before:opacity-100 hover:before:inset-[-4px] hover:before:rounded-[12px] active:scale-95 active:opacity-90">
  <span class="relative z-10">Explore My Work</span>
</a>




        <a href="#contact" class=" md:text-sm text-xs px-6 py-3 bg-white text-black rounded-lg shadow-lg hover:bg-gray-200 transition active:scale-95 active:opacity-90">
          Get in Touch
        </a>
      </div>
  </div>
  <div class="md:w-3/4 
  w-full
  ">
      <img src="/hero.png" alt="Robot working on laptop" class="w-full h-auto">
  </div>
</div>
</Layout>