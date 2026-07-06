import Dropdown from 'bootstrap/js/dist/dropdown';

window.addEventListener('load', function() {
    const loadingScreen = document.getElementById('loading-screen');
    const pageContent = document.getElementById('page-content');

    // Start fading out loading screen
    loadingScreen.style.opacity = '0';

    // After fade-out transition finishes (1s), fully hide loading screen
    setTimeout(() => {
      loadingScreen.style.display = 'none';
      pageContent.style.opacity = '1';
  }, 600); // slight delay after loader is gone
});


 // Enable hover for dropdowns on desktop only
        document.addEventListener('DOMContentLoaded', function () {
          const dropdowns = document.querySelectorAll('.navbar .dropdown');

          dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', function () {
              const menu = this.querySelector('.dropdown-menu');
              const toggle = this.querySelector('[data-bs-toggle="dropdown"]');
              if (window.innerWidth >= 768) {
                const bsDropdown = Dropdown.getOrCreateInstance(toggle);
                bsDropdown.show();
              }
            });
            

            dropdown.addEventListener('mouseleave', function () {
              const menu = this.querySelector('.dropdown-menu');
              const toggle = this.querySelector('[data-bs-toggle="dropdown"]');
              if (window.innerWidth >= 768) {
                const bsDropdown = Dropdown.getOrCreateInstance(toggle);
                bsDropdown.hide();
              }
            });
          });
        });
