/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./php/**/*.php",       // untuk memindai semua file PHP di dalam folder php
    "./admin-dashboard/*.php",       // untuk memindai semua file PHP di dalam folder php
    "./dist/**/*.css",       // jika ada file CSS yang ingin kamu pakai di dist
  ],
  theme: {
    extend: {
      fontFamily: {
        bebas: ['"Bebas Neue"', 'cursive'],
        bona: ['Bona Nova SC', 'serif'],
      },
      screens: {
        xs: { max: '640px' },
        xxs: { max: '375px' },
      },
    },
  },
  plugins: [],
};
