module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {
      display: ['group-hover', 'active', 'hover'],
    },
  },
  plugins: [],
}
