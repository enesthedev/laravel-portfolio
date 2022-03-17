module.exports = {
    content: [
        "./app/View/Components/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./swal2.config.js"
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
        require('@tailwindcss/forms')
    ],
}
