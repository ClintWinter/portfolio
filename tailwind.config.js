module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
      fontFamily: {
        display: ['JetBrains Mono', 'Segoe UI', 'Helvetica Neue', 'Arial', 'sans-serif'],
        body: ['Inter', 'Segoe UI', 'Helvetica Neue', 'Arial', 'sans-serif'],
      },
      minWidth: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        '16': '4rem',
        '32': '8rem',
        '48': '12rem',
        '64': '16rem',
        '128': '32rem',
        'full': '100%',
      },
      colors: {
        'black': '#000000',
        'darkbg': '#1C1E26',
        'dark': '#4A5568',
        'regular': '#BBBBBB',
        'purple': '#B877DB',
        'teal': '#25B0BC',
        'yellow': '#FAB795',
        'orange': '#F09483',
        'red': '#E95678',
      },
      extend: {
        maxHeight: {
          '128': '32rem',
          '60vh': '60vh',
        },
        height: {
          '128': '32rem',
          '256': '64rem',
        },
        maxWidth: {
          '128': '32rem',
          '1/2': '50%',
          '1/3': '33.333333%',
          '1/4': '25%',
          '1/5': '20%',
          '1/6': '16.666667%',
        },
      }
    },
    variants: {},
    plugins: []
  }
