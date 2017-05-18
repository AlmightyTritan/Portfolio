var webpack = require('webpack');
var path = require('path');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: [
        './src/js/main.js',
        './src/scss/main.scss',
    ],
    output: {
        path: path.resolve(__dirname, './assets/js'),
        publicPath: './js/',
        filename: 'build.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            },
            {
                test: /\.ttf$/,
                loader: 'file-loader',
                options: {
                    name: './../fonts/[name].[ext]'
                }
            }
        ]
    },
    devtool: '#eval-source-map',
    plugins: [
        new ExtractTextPlugin('./../css/build.css')
    ]
}
