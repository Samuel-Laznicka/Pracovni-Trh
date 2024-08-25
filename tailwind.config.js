/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "black": "#060606"
      },
      fontFamily: {
        "Montserrat": ["Montserrat", "Lato"]
      },
      fontSize: {
        "2xs": ".625rem" //10px
      }
    },
  },
  plugins: [],
}

