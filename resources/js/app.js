document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('button[data-collapse-toggle="navbar-cta"]');
    const navMenu = document.getElementById('navbar-cta');
    toggleButton.addEventListener('click', function () {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        navMenu.classList.toggle('hidden');
    });
});
