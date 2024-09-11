<!-- Hero Section -->
<section id="home" class="relative h-[calc(100vh-60px)] flex items-center lg:px-16">
    <!-- Background Image -->
    <!-- svelte-ignore a11y-img-redundant-alt -->
    <img src="/hero.png" alt="Hero Image" class="absolute right-0 top-0 w-auto 
    h-[calc(100vh-60px)] object-contain opacity-100 z-0" /> <!-- Gambar 80% dari lebar layar, menempel ke kanan -->

    <!-- Text Content -->
    <div class="relative z-10 max-w-lg lg:w-4/5">
      <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-gray-900">
        Hello, I'm Andri Rosandi
      </h1>
      <h2 class="text-xl lg:text-2xl mb-6 text-gray-700">
        IT & Fullstack Developer based in Jakarta, specializing in ERP Implementations and Software Development.
      </h2>
      <p class="text-gray-600 mb-8">
        Bringing ideas to life with clean code and innovative solutions. Let's build something great together.
      </p>
      <div class="flex space-x-4 mb-8">
        <a href="#portfolio" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-lg shadow-lg hover:from-pink-500 hover:to-orange-500 transition">
          Explore My Work
        </a>
        <a href="#contact" class="px-6 py-3 bg-white text-black rounded-lg shadow-lg hover:bg-gray-200 transition">
          Get in Touch
        </a>
      </div>
      <div class="flex space-x-4">
        <a href="#/" aria-label="GitHub" class="text-gray-900 hover:text-gray-600">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path d="...GitHub Icon SVG Path..."></path>
          </svg>
        </a>
        <a href="#/" aria-label="LinkedIn" class="text-gray-900 hover:text-gray-600">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path d="...LinkedIn Icon SVG Path..."></path>
          </svg>
        </a>
        <a href="#/" aria-label="Instagram" class="text-gray-900 hover:text-gray-600">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path d="...Instagram Icon SVG Path..."></path>
          </svg>
        </a>
      </div>
    </div>
</section>
