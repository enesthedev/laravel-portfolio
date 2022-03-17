module.exports = {
    toast: {
        classes: {
            general: {
                popup: '!shadow-none !flex',
                container: '!w-full sm:!w-auto',
                title: '!text-sm !font-inter !font-bold',
            }
        },
        icons: {
            error: `<svg class="w-8 h-8 text-red-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>`,
            success: `<svg class="w-8 h-8 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>`,
        },
        functions: {
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', window.swal.stopTimer)
                toast.addEventListener('mouseleave', window.swal.resumeTimer)
            }
        }
    }
}
