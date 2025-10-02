/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        // Logo primary colors
        primary: '#F4811F',
        'primary-dark': '#D66E1B',
        black: '#000000',
        'black-light': '#1A1A1A',
        grey: '#666666',
        'grey-light': '#CCCCCC',
        white: '#FFFFFF',
      },
      fontFamily: {
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      gradientColorStops: theme => ({
        'logo-gradient': ['#F4811F', '#000000'], // for custom gradient
      }),
      boxShadow: {
        'outline-primary': '0 0 0 3px rgba(244, 129, 31, 0.5)',
      },
    },
  },
  plugins: [],
};
