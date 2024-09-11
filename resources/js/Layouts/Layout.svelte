<script>
    import Navbar from '../Components/Navbar.svelte';
    import Hero from '../Components/Hero.svelte';

    const links = [
        { label: 'Home', href: '/' },
        { label: 'About', href: '/about' },
        { label: 'Contact', href: '/contact' }
    ];
</script>


<Navbar {links} />
<!-- <Hero /> -->

<main class="p-4 container mx-auto">
    <slot />
</main>
