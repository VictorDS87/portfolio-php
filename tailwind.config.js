module.exports = {
    content: [
      './*.php',           // Para arquivos PHP na raiz
      './includes/**/*.php', // Para arquivos PHP dentro da pasta 'includes'
      './pages/**/*.php',    // Para arquivos PHP dentro da pasta 'pages'
    ],
    theme: {
      extend: {
        fontFamily: {
          agdasima: ['"Agdasima"', 'sans-serif'],
        },
      },
    },
    plugins: [],
  }
  