const theme = require('./theme.json');
const falconTailwind = require("@webfalconwordpress/tailwindcss-falcon-tailwind-plugin");

/** @type {import('tailwindcss').Config} */
module.exports = {
    corePlugins: {
        preflight: false,
    },
    content: [
        './assets/js/editor-variations.js',
        './blocks/**/*.{php,js,css,json}',
        './includes/**/*.php',
        './functions.php',
        './patterns/**/*.{html,php}',
        './parts/**/*.html',
        './templates/**/*.{html,php}',
        './resources/**/*.{js,css,json}',
        './styles/**/*.json',
        './safelist.txt',
        './postcss.config.js',
        './tailwind.config.js',
        './theme.json',
      ],
      theme: {
        extend: {
          colors: {
            "base-1": "#F9FAFB", // Base
            "base-2": "#ECF4FC", // Base Two
            "base-3": "#DEF7EC", // Base Three
            contrast: {
              DEFAULT: "#6B7280", // Contrast
              2: "#1A56DB", // Contrast / Two 
              3: "#0FA8DA", // Contrast / Three
              4: "#111928", // Contrast / Four
            },
            white: "#FFFFFF",
            black: "#000000",
            accent: {
              1: "#FFEE58", // Accent 1
              2: "#F6CFF4", // Accent 2
              3: "#503AA8", // Accent 3
              4: "#686868", // Accent 4
              5: "#FF0000", // Accent 5
            },
            body: "#292929",
          },
    
          fontSize: {
            body: "1rem", // 16px
    
            "title-xs": "1.5rem", // 24px (formerly '3xl')
            "title-sm": "1.75rem", // 28px (formerly '4xl')
            "title-md": "1.875rem", // 30px (formerly '5xl')
            "title-lg": "2rem", // 32px
            "title-xl": "2.625rem", // 42px
            "display-md": "3rem", // 48px
            "display-lg": "4.25rem", // 68px
            "display-xl": "5.25rem", // 84px
            "display-2xl": "6.25rem", // 100px
    
            12: "0.75rem", // 12px
            14: "0.875rem", // 14px
            16: "1rem", // 16px
            18: "1.125rem", // 18px
            20: "1.25rem", // 20px
            22: "1.375rem", // 22px
            24: "1.5rem", // 24px
            28: "1.75rem", // 28px
            30: "1.875rem", // 30px
            32: "2rem", // 32px
            36: "2.25rem", // 36px
            40: "2.5rem", // 40px
            42: "2.625rem", // 42px
          },
    
          lineHeight: {
            100: "1",
            105: "1.05",
            115: "1.15",
            120: "1.2",
            125: "1.25",
            130: "1.3",
            140: "1.4",
            144: "1.44",
            164: "1.64",
          },
          width: {
            // Fractional widths based on 24 (non-standard)
            '1/24': '4.166667%',
            '2/24': '8.333333%',
            '3/24': '12.5%',
            '4/24': '16.666667%',
            '5/24': '20.833333%',
            '7/24': '29.166667%',
            '9/24': '37.5%',
            '10/24': '41.666667%',
            '11/24': '45.833333%',
            '13/24': '54.1%',
            '12/24': '50%',
            '14/24': '58.333333%',
            '15/24': '62.5%',
            '17/24': '70.833333%',
            '18/24': '75%',
            '19/24': '79.166667%',
            '21/24': '87.5%',
            '23/24': '95.833333%',
          },
          height: {
            // Custom heights not included in Tailwind's default spacing scale
            '2px': '2px',
            'half': '50%', // for h-half (non-standard)
          },
          minWidth: {
            // Custom minimum widths
            '18': '4.5rem',    // min-w-18 (not in default scale)
            '30': '7.5rem',    // min-w-30
          },
          maxWidth: {
            // Custom maximum widths
            '18': '4.5rem',    // max-w-18
            '20': '5rem',      // max-w-20
            '30': '7.5rem',    // max-w-30
            'half': '50%',     // max-w-half (non-standard)
            '1/2vh': '50vh',   // max-w-1/2 (non-standard)
            'max': '1920px',   // max-w-max (custom)
          },
          minHeight: {
            '3/4': '75vh',     // min-h-3/4 (non-standard)
          },
          margin: {
            // Fractional margins based on 24 (non-standard)
            '1/24': '4.166667%',
            '2/24': '8.333333%',
            '3/24': '12.5%',
            '4/24': '16.666667%',
            '6/24': '25%',
            '7/24': '29.166667%',
            // Custom negative margins
            '-2px': '-2px',
            '-8': '-2rem', // Negative margin not in default scale
            '-mt-2px': '-2px', // For negative top margin of 2px
            '-mt-px': '-1px',  // For negative top margin of 1px
          },
          padding: {
            // Fractional paddings based on 24 (non-standard)
            '1/24': '4.166667%',
            '2/24': '8.333333%',
            '3/24': '12.5%',
            '4/24': '16.666667%',
            '5/24': '20.833333%',
            '7/24': '29.166667%',
            '9/24': '37.5%',
            '10/24': '41.666667%',
            '11/24': '45.833333%',
            '12/24': '50%',
            '13/24': '54.1%',
            '14/24': '58.333333%',
            '15/24': '62.5%',
            '17/24': '70.833333%',
            '18/24': '75%',
            '19/24': '79.166667%',
            '21/24': '87.5%',
            '23/24': '95.833333%',
          },    
        },
        // Those are the breakpoints for all screens. They are following Tailwind's default breakpoints except for xs screen which is added here.
        screens: {
          xs: "0px",
          sm: "640px",
          md: "768px",
          lg: "1024px",
          xl: "1280px",
          "2xl": "1536px",
        }
    

      },
    plugins: [
        falconTailwind.tailwind,

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
