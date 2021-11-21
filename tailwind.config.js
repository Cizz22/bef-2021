module.exports = {
  purge: {
      content: [
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
        './storage/framework/views/*.php',
      ],
      option: {
        safelist: [
            'sm:max-w-2xl'
        ]
      }
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
],
}
