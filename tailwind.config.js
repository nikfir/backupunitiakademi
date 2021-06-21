const defaultTheme = require('tailwindcss/defaultTheme');

const plugin = require("tailwindcss/plugin");

const focusedSiblingPlugin = plugin(function ({ addVariant, e }) {
    addVariant("focused-sibling", ({ container }) => {
      container.walkRules((rule) => {
        rule.selector = `:focus + .focused-sibling\\:${rule.selector.slice(1)}`;
      });
    });
  });

  const checkboxSiblingPlugin = plugin(({ addVariant, e }) => {
    addVariant('checkbox-sibling', ({ modifySelectors, separator }) => {
        modifySelectors(
            ({ className }) => {
                const eClassName = e(`checkbox-sibling${separator}${className}`); // escape class
                const yourSelector = 'input[type="checkbox"]'; // your input selector. Could be any
                return `${yourSelector}:checked ~ .${eClassName}`; // ~ - CSS selector for siblings
            }
          );
      });
  });


module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class', // or 'media' or 'class'

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                firasans: ['Fira Sans'],
                firacode: ['Fira Code'],
                roboto: ['Roboto'],
                mont:['Montserrat'],

            },
            spacing: {
                '13': '3.25rem',
                '18': '4.5rem',
                '19': '4.75rem',
                '70': '18.5rem',
                '100': '25rem',
            },
            colors: {

                'accent': '#d4a57a',
                'accent-h': '#cc9869',

                //Front-End
                'body-l': '#f2f2f2',
                'body-d': '#3b3b41',
                'nav-l': '#f9f9f9',
                'nav-d': '#232326',
                'nav-sm-l': '#ffffff',
                'nav-sm-d': '#141416',
                'nav-sm-border-l': '#efefef',
                'nav-sm-border-d': '#232327',
                'subnav-l': '#ffffff',
                'subnav-d': '#2f2f33',
                'subnav-sm-border-l': '#e1e1e1',
                'subnav-sm-border-d': '#29292d', 
                'subnav-sm-l': '#ffffff',
                'subnav-sm-d': '#27272a',
                'auth-card-l': '#ffffff',
                'auth-card-d': '#19191b',

                'icon-l': "#999999",
                'icon-d': "#d4d4d4",

                'txt-h-l': "#283252",
                'txt-h-d': "#a9a9b2",

                'txt-p-l': "#a2a5b9",
                'txt-p-d': "#a2a5b9",

                'input-l': '#ffffff',
                'input-d': '#28282b',
                'input-border-l': '#dbdbdb',
                'input-border-d': '#2d2d31',
                'input-border-hov-l': '#b5b5b5',
                'input-border-hov-d': '#404046',
                'input-border-foc-l': '#e3e3e3',
                'input-border-foc-d': '#37373b',
                'input-placeholder-l': '#cecece',
                'input-placeholder-d': '#7e7e7e',
                'input-text-l': '#283252',
                'input-text-d': '#9e9ea7',

                //Button Colour
                'plain-l': '#ffffff',
                'plain-d': '#3b3b41',
                'btn-border-l': '#dbdbdb',
                'btn-border-d': '#404046',
                'btn-border-h-l': '#9f9f9f',
                'btn-border-h-d': '#494950',
                'btn-txt-l': '#363636',
                'btn-txt-d': '#a9a9b2',
                'primary': '#41b883',
                'btn-border-f': '#e8e8e8',
                'info': '#039be5',
                'success': '#06d6a0',
                'warning': '#faae42',
                'danger': '#e62965',
                'white-l': '#ffffff',
                'white-d': '#323236',
                'primary-h': '#3eaf7c',
                'info-h': '#0392d8',
                'success-h': '#06ca97',
                'warning-h': '#faa936',
                'danger-h': '#e51e5d',
                'white-h-l': '#f9f9f9',
                'white-h-d': '#323236',
                'white-border-d': '#999999',
                'btn-txt-c': '#0a0a0a',
                'primary-light': '#f0faf5',
                'primary-light-h': '#e7f6ef',
                'info-light': '#ebf8ff',
                'info-light-h': '#def4ff',
                'success-light': '#ebfef9',
                'success-light-h': '#dffef6',
                'warning-light': '#fef6eb',
                'warning-light-h': '#fef1df',
                'danger-light': '#fdedf2',
                'danger-light-h': '#fce1ea',
                'white-light': '#f5f5f5',
                'white-light-h': '#eeeeee',

                'facebook': '#1877F2',
                'outlook': '#0072c6',
                'google': '#4285f4',
                'apple': '#ffffff',
                'microsoft-border': '#8c8c8c',
                'microsoft-font': '#5e5e5e',
                'microsoft-bg': '#2f2f2f',
            
            },
            maxWidth: {
                '60': '15rem',
                '96': '24rem',
            },
        },
  
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px'
        },
        

    },

    variants: {
        extend: {
            opacity: ['disabled'],
            textColor: ['focused-sibling'],
            backgroundColor: ['checked', 'checkbox-sibling'],
            borderColor: ['checkbox-sibling'],
            width: ['checkbox-sibling'],
            height: ['checkbox-sibling'],

            
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), (focusedSiblingPlugin), (checkboxSiblingPlugin)],
};
