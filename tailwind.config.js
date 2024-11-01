/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html", // Add this line to include the root index.html
    "./.{html, js}",
  ],
  theme: {
    extend: {
      fontFamily: {
        bebas: ['"Bebas Neue"', 'cursive'],
        bona: ['Bona Nova SC', 'serif'],

      },

    },
  },
  plugins: [],
};