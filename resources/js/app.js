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

document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const agreeButton = document.getElementById("cookie-agree-button");

    if (!banner || !agreeButton) return;

    // Скрываем сразу, если кука уже установлена
    if (document.cookie.includes("cookie_consent=true")) {
        banner.remove(); // Удаляем из DOM
        return;
    }

    agreeButton.addEventListener("click", function () {
        // Устанавливаем cookie на 1 год
        document.cookie = "cookie_consent=true; path=/; max-age=" + 60 * 60 * 24 * 365;

        // Безопасное удаление из DOM
        try {
            banner.remove(); // Самый надёжный способ
        } catch (e) {
            banner.style.display = "none";
        }
    });
});
