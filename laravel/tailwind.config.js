/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  plugins: [
    require('flowbite/plugin')
],
  theme: {
    extend: {},
  },
  plugins: [],
}
