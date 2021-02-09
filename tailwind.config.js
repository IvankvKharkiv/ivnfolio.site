const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            width: {
                '150px': '150px',
                '350px': '350px',
                '70px': '70px',
                '54px': '54px',
                '35px': '35px',
                '28px': '28px',
            },
            height:{
                '150px': '150px',
                '350px': '350px',
                '70px': '70px',
                '54px': '54px',
                '35px': '35px',
                '28px': '28px',
            },

            minWidth:{
                '150px': '150px',
            },

            maxWidth:{
                '350px': '350px',
            },

            boxShadow: {
                '0-0-1-0-black': '0 0 1em 0 #000000',
                'i-0-0-1-0-black': 'inset 0 0 1em 0 #000000',
            },

            margin: {
                '-40px': '-40px',
                '-27px': '-27px',
                '-14px': '-14px',
            },

            fontSize:{
                'xxs': '.65rem',
            },



            // textShadow: {
            //     '0-0-05-0-black': '0 0 0.5em 0 #000000',
            // },

            // colors: {
            //     orange: {
            //         50: 'rgba(0, 0, 0, 1)',
            //         100: 'rgba(0, 0, 0, 1)',
            //         200: 'rgba(0, 0, 0, 1)',
            //         300: 'rgba(0, 0, 0, 1)',
            //         400: 'rgba(0, 0, 0, 1)',
            //         500: 'rgba(0, 0, 0, 1)',
            //         600: 'rgba(0, 0, 0, 1)',
            //         700: 'rgba(0, 0, 0, 1)',
            //         800: 'rgba(0, 0, 0, 1)',
            //         900: 'rgba(0, 0, 0, 1)',
            //     },
            // },


        // colors: {
        //     smoke: {
        //         darkest: 'rgba(0, 0, 0, 0.9)',
        //         darker: 'rgba(0, 0, 0, 0.75)',
        //         dark: 'rgba(0, 0, 0, 0.6)',
        //         DEFAULT: 'rgba(0, 0, 0, 0.5)',
        //         light: 'rgba(0, 0, 0, 0.4)',
        //         lighter: 'rgba(0, 0, 0, 0.25)',
        //         lightest: 'rgba(0, 0, 0, 0.1)',
        //     },
        // },


        // colors: {
        //     'smoke-darkest': 'rgba(0, 0, 0, 0.9)',
        //     'smoke-darker': 'rgba(0, 0, 0, 0.75)',
        //     'smoke-dark': 'rgba(0, 0, 0, 0.6)',
        //     'smoke': 'rgba(0, 0, 0, 0.5)',
        //     'smoke-light': 'rgba(0, 0, 0, 0.4)',
        //     'smoke-lighter': 'rgba(0, 0, 0, 0.25)',
        //     'smoke-lightest': 'rgba(0, 0, 0, 0.1)',
        // },


        },



    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')], 

};
