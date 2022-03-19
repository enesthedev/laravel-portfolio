module.exports = {
    content: [
        "./app/View/Components/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./swal2.config.js",
        "./node_modules/flowbite/**/*.js"
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                'inter': ['Inter', 'sans-serif']
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
}
