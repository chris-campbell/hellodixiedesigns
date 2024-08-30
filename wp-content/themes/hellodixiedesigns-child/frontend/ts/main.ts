
(function(global) {
    function toggle() {
        const navToggle = document.querySelector('[data-id="nav-toggle"]');
        const navMobile = document.querySelector('[data-id="nav-mobile"]');
        const maxWidth = 600;

        if (navToggle) {
            if (navToggle.classList.contains('hidden')) {
                navToggle.classList.remove('hidden');
                if (window.innerWidth <= maxWidth) {
                    navMobile.classList.add('mb-8');
                }
            } else {
                navToggle.classList.add('hidden');
                navMobile.classList.remove('mb-8');
            }
        }
    }

    global.toggle = toggle;
})(window);


