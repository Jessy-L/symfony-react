/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.html.twig',
    './assets/**/*.jsx',
    './assets/**/*.js',
    './node_modules/flyonui/dist/js/*.js',
    "./node_modules/flyonui/dist/js/accordion.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("flyonui"),
    require("flyonui/plugin")
  ],
}

