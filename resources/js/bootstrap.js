/**
 *
 */
window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 *  Swal means SweetAlert2. Its need for alerts and toasts.
 */
window.swal = require('sweetalert2/dist/sweetalert2');
window.swal.config = require('../../swal2.config.js')

/**
 * Toast
 */
window.toast = {
    error: window.swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        customClass: window.swal.config.toast.classes.general,
        iconHtml: window.swal.config.toast.icons.error,
        ...window.swal.config.toast.functions
    }),
    success: window.swal.mixin({
        toast: true,
        position: 'bottom-end',
        timer: 5000,
        timerProgressBar: true,
        showConfirmButton: false,
        customClass: window.swal.config.toast.classes.general,
        iconHtml: window.swal.config.toast.icons.success,
        ...window.swal.config.toast.functions
    })
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

/**
 * Flowbite Javascript library for usefully Tailwind components.
 */
require('flowbite/dist/flowbite');
