/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,js,php}",
    "./includes/**/*.{html,js,php}",
    "./services/**/*.{html,js,php}",
    "./pages/**/*.{html,js,php}",
    "./components/**/*.{html,js,php}",
    "./assets/**/*.{html,js,php}",
    "./src/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#eff6ff',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
        },
        secondary: {
          50: '#f0fdf4',
          500: '#10b981',
          600: '#059669',
          700: '#047857',
        }
      },
      fontFamily: {
        'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
      },
    },
  },
  plugins: [],
}