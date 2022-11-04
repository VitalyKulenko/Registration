/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/*.php", "./app/views/partials/*.php"],
  theme: {
    screens: {
      'lg' : {'max': '992px'},
      'md' : {'max': '768px'},
      'sm' : {'max': '480px'}
    },
    container: {
      padding: '20px',
      center: true
    },
    extend: {
      colors: {
        white: '#ffffff',
        red: '#dd3e3e',
        darkRed: '#b01717'
      }
    }
  },
  plugins: [],
}
