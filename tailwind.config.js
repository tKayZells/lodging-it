module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
        zIndex : {
          '-10' : '-10'
        }
      },
    },
    variants: {
      extend: {
        zIndex: ['hover', 'group-hover'],
        opacity: ['disabled']
      },
    },
    plugins: [
      require('@tailwindcss/forms'),
    ],
  }