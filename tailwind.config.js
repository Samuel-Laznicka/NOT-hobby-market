/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "Montserrat": ["Montserrat", "Lato"]
      },
      colors: {
        "green": "#04aa6d",
        "blue": "#1d2a35",
        "gray": "#4c4e5e"

      }
    },
  },
  plugins: [],

}
