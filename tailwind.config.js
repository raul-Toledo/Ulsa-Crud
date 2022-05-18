module.exports = {
    purge: [

        './resources/**/*.blade.php',

        './resources/**/*.js',

        './resources/**/*.vue',

    ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
        backgroundImage: theme => ({
            'body-pattern': "url('/img/prism.png')"
        }),
        colors:{
            "deepskyblue":"#00bfff",
            "lightskyblue":"#87cefa",
            "lightblue":"#add8e6"
        }
    },
  },
  variants: {
    extend: {

    },
  },
  plugins: [],
}
