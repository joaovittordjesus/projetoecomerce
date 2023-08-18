document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('scroll-nav');
        } else {
            navbar.classList.remove('scroll-nav');
        }
    });
});
