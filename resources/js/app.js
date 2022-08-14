import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.data('main', () => ({
        open: false,
        isDark: false,

        toggle() {
            this.open = ! this.open
        },

        toggleDarkMode() {
            if (localStorage.theme === 'dark') {
                this.isDark = false;
                localStorage.theme = 'light';
                document.documentElement.classList.remove('dark');
            } else {
                this.isDark = true;
                localStorage.theme = 'dark';
                document.documentElement.classList.add('dark');
            }
        },

        init() {
            this.$nextTick(() => {
                if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    document.documentElement.classList.add('dark')
                  } else {
                    document.documentElement.classList.remove('dark')
                  }
            })
        }
    }))
})

Alpine.start();
