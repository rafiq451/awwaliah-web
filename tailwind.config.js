/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#00933F',
        secondry: '#111827',
        kuns: '#FFF500',
        tex: '#475569',
        bg: '#0f172a',
      },
      spacing: {
        '128': '32rem',
      },
      screens: {
        '2xl': '1320px',
      },
      rotate: {
        '360': '360deg',
      },
    },
  },
  plugins: [],
};
