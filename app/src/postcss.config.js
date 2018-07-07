module.exports = {
    plugins: [
        require('postcss-cssnext')(),
        require('postcss-import')(),
        require('postcss-simple-vars')(),
        require('postcss-extend')(),
        require('postcss-nested')(),
        require('postcss-mixins')(),
    ]
}