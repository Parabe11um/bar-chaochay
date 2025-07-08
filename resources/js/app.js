import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()
window.Swiper = Swiper;

window.axios.defaults.headers.common['X-CSRF-TOKEN'] =
    document.querySelector('meta[name="csrf-token"]').getAttribute('content');
