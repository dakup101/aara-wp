/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],

  theme: {
    container: {
      center: true,
      padding: "1rem",
    },

    extend: {
      fontFamily: {
        primary: "Jakarta",
      },

      screens: {
        '2xl' : '1520px',
      },

      colors: {
        'theme-blue' : '#007aff', 
        'theme-blue-light' : '#ebf3ff',
        'theme-blue-dark' : '#0048B4',
        'theme-dark' : '#007aff', 
        'theme-rose' : '#e6007e',
        'theme-rose-dark' : '#B10262',
        'theme-yellow': '#ffd124',
        'theme-gray' : '#f4f4f4',
      }, // Extend Tailwind's default colors
    },
  },

  plugins: [],
};

export default config;
