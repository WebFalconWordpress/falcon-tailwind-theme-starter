const theme = require('./theme.json');
const falconTailwind = require("@webfalconwordpress/tailwindcss-falcon-tailwind-plugin");

// https://github.com/tailwindlabs/tailwindcss/discussions/6256
// ...(process.env.NODE_ENV == 'development') && { safelist: [ { pattern: /.*/ },

/** @type {import('tailwindcss').Config} */
module.exports = {
    corePlugins: {
        preflight: false,
    },
    content: [
        './*.php',
        './**/*.php',
        './*.html',
        './**/*.html',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        extend: {
            colors: falconTailwind.colorMapper(falconTailwind.theme('settings.color.palette', theme)), 
            fontSize: falconTailwind.fontSizeMapper(falconTailwind.theme('settings.typography.fontSizes', theme))
        },

        // Those are the breakpoints for all screens. They are following Tailwind's default breakpoints except for xs screen which is added here.
        screens: {
            'xs': '0px',
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px'
        }
    },
    plugins: [
        falconTailwind.tailwind,
        require('flowbite/plugin'),

        // This custom plugin adds a container class. Content width inside the containers are following bootstrap's breakpoints. Designer should use these breakpoints when designing the site.
        function ({ addComponents }) {
            addComponents({
              '.container': {
                maxWidth: '100%',
                width: '100%',
                '@screen xs': {
                  paddingLeft: '32px',
                  paddingRight: '32px',
                },
                '@screen sm': {
                    paddingLeft: '32px',
                    paddingRight: '32px',
                },
                '@screen md': {
                    paddingLeft: '32px',
                    paddingRight: '32px',
                },
                '@screen lg': {
                  paddingLeft: '32px',
                  paddingRight: '32px',
                },
                '@screen xl': { 
                    paddingLeft: '40px',
                    paddingRight: '40px',
                    maxWidth:  '1200px',
                },
                '@screen 2xl': { 
                    paddingLeft: '68px',
                    paddingRight: '68px',
                    maxWidth:  '1400px', // You can redefine max width for 2xl screen here depending on your design needs. Some designers prefer to keep the same max width for all screens.
                }
              }
            })
        }
    ]
};
