const theme = require('./theme.json');
const falconTailwind = require("@webfalconwordpress/tailwindcss-falcon-tailwind-plugin");

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
          colors: {
            'base-1': '#F9FAFB',       // Base One
            'base-2': '#ECF4FC',       // Base Two
            'base-3': '#DEF7EC',       // Base Three
            contrast: {
                DEFAULT: '#6B7280',       // Contrast
                2: '#1A56DB',       // Contrast / Two
                3: '#0FA8DA',       // Contrast / Three
                4: '#111928'        // Contrast / Four
            },
            accent: {
                DEFAULT: '#111928',       // Accent
                2: '#003D79',       // Accent / Two
                3: '#d8613c',       // Accent / Three
                4: '#0E9F6E',       // Accent / Four
                5: '#12B5EA'        // Accent / Five
            },
            white: '#FFFFFF',          // White
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
                    maxWidth:  '1280px',
                },
                '@screen 2xl': { 
                    paddingLeft: '80px',
                    paddingRight: '80px',
                    maxWidth:  '1440px', // You can redefine max width for 2xl screen here depending on your design needs. Some designers prefer to keep the same max width for all screens.
                }
              }
            })
        }
    ]
};
