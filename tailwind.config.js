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
           colors: {
            base : "var(--wp--preset--color--base)",
            contrast : "var(--wp--preset--color--contrast)",
            contrast2 : "var(--wp--preset--color--contrast-2)", 
            contrast3 : "var(--wp--preset--color--contrast-3)",
            black: {
              50: '#FFFFFF',
              100: '#FAFAFF',
              200: '#F3F4F6',
              300: '#E5E7EB',
              400: '#979CA5',
              500: '#6B7280',
              600: '#2F3B52',
              700: '#1F2A37',
              800: '#111928',
              900: '#100D06',
            },
            PrplBlue: {
              50: '#F0EFFF',
              100: '#E5E3FF',
              200: '#D9D6FF',
              300: '#C7C3FF',
              400: '#B5AEFF',
              500: '#9D95FA',
              600: '#776BFF',
              700: '#5E52E8',
              800: '#4F44D1',
              900: '#443AB9',
            },
            blue: {
              50: '#EBF5FF',
              100: '#E1EFFE',
              200: '#C3DDFD',
              500: '#3F83F8',
              600: '#1064F2',
              700: '#1A56DB',
              800: '#1E429F',
              900: '#233876',
            },
            purple: {
              50: '#F9EDFF',
              100: '#F3DCFF',
              200: '#EFD2FF',
              400: '#E2B5F9',
              500: '#D8A5F2',
              700: '#CC69FF',
              800: '#BC41FB',
            },
            cyan: {
              50: '#E7FAFF',
              900: '#20809B',
            },
          },
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
