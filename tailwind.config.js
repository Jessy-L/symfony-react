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
    extend: {},
  },
  flyonui: {
    themes: [
      "light",
      "dark",
      {
        trobo: {
          primary: "#a991f7",
          secondary: "#f6d860",
          accent: "#37cdbe",
          neutral: "#3d4451",
          "base-100": "#ffffff",
        }
      }
    ]
  },
  plugins: [
    require('flyonui'),
    require('flyonui/plugin')
  ],
}

