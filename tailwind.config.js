/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        poppins : ['Poppins'],
        sahara : ['Sahara', 'Sans']
      },

      colors:{
        primary : ['rgba(28,19,6,.9)'],
        bg : ['rgba(120, 53, 15,.4);'],
        blueCustom: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}

      },

      borderWidth:{
        3 : ['2.5px']
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

