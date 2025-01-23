/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './node_modules/flyonui/dist/js/*.js',
    './node_modules/flyonui/dist/js/accordion.js',
    './templates/**/*.html.twig',
    './assets/**/*.jsx',
    './assets/**/*.js',
  ],
  theme: {
    extend: {
    },
  },
  plugins: [
    require('flyonui'),
    require('flyonui/plugin')
  ],
}

