module.exports = {
    devtool: 'eval-source-map',
    entry:  {
        top: "./js/top/top.js"
    },

    output: {
        path: `${__dirname}/../webroot/js/bundle`,
        filename: "[name].js"
    },

    devServer: {
        contentBase: "../View",
        historyApiFallback: true,
        inline: true
    },

    watchOptions:{
        poll:1000,
        aggregateTimeout:500,
        ignored:/node_modules/,
    },

    module: {
        rules: [
            {
                test: /(\.js)$/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["env"]
                    }
                },
                exclude: /node_modules/
            },
            {
                test: /\.css$/,
                use: [
                    { loader: "style-loader" },
                    { loader: "css-loader" },
                    { loader: "postcss-loader" }
                ]
            },
            {
                test: /\.js$/,
                enforce: "pre",
                exclude: /node_modules/,
                use: [
                    { loader: "eslint-loader" }
                ]
            }
        ]
    }
}