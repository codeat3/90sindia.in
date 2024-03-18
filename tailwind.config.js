/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
      ],
  theme: {
    extend: {},
    fontFamily: {
        'display': ['Nunito'],
    }

  },

  plugins: [],
}
