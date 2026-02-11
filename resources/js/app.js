import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css'

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import Swal from 'sweetalert2'
window.Swal = Swal

import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();
