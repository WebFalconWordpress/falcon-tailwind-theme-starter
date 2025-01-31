module.exports = {
    plugins: [
        require('postcss-import'),
        require('postcss-mixins'), // Enable mixins
        require('tailwindcss/nesting'),
        require('tailwindcss'),
        require('autoprefixer'), // Autoprefixer
    ]
}