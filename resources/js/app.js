import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.data('typeEffect', (text, speed = 50) => ({
    full: text,
    output: '',
    index: 0,
    startTyping() {
        this.output = '';
        this.index = 0;
        const step = () => {
            if (this.index < this.full.length) {
                this.output += this.full[this.index++];
                setTimeout(step, speed);
            }
        };
        step();
    }
}));

Alpine.start()
window.Swiper = Swiper;

window.axios.defaults.headers.common['X-CSRF-TOKEN'] =
    document.querySelector('meta[name="csrf-token"]').getAttribute('content');

document.addEventListener('DOMContentLoaded', function() {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieAcceptBtn = document.getElementById('cookie-accept');

    if(localStorage.getItem('cookieAccepted')) {
        cookieBanner.style.display = 'none';
    }

    cookieAcceptBtn.addEventListener('click', function() {
        localStorage.setItem('cookieAccepted', 'true');
        cookieBanner.style.display = 'none';
    });
});
