/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
<<<<<<< HEAD
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
=======
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
>>>>>>> cabd853ab4176bbe9554626a63289200413b031f
  ],
}

