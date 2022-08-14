import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.data('main', () => ({
        open: false,

        toggle() {
            this.open = ! this.open
        },

        init() {
            this.$nextTick(() => {
                console.log('init alpine js')
            })
        }
    }))
})

Alpine.start();
