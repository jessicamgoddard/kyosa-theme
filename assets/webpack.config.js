const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const UglifyJSPlugin = require( 'uglifyjs-webpack-plugin' );
const OptimizeCssAssetsPlugin = require( 'optimize-css-assets-webpack-plugin' );
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );
// const StyleLintPlugin = require( 'stylelint-webpack-plugin' );

module.exports = {
  context: __dirname,
  entry: {
    main: ['./src/js/main.js', './src/scss/main.scss' ],
    editor: ['./src/js/editor.js', './src/scss/editor.scss']
  },
  output: {
    path: path.resolve( __dirname, 'dist' ),
    filename: '[name].min.js'
  },
  mode: 'development',
  devtool: 'eval-cheap-source-map',
  module: {
    rules: [
      {
        enforce: 'pre',
        exclude: /node_modules/,
        test: /\.jsx$/,
        loader: 'eslint-loader'
      },
      {
        test: /\.jsx?$/,
        loader: 'babel-loader'
      },
      {
        test: /\.s?css$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      },
      {
        test: /\.(jpe?g|png|gif)\$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'images/',
              name: '[name].[ext]'
            }
          },
          'img-loader'
        ]
      }
    ]
  },
  plugins: [
    // new StyleLintPlugin(),
    new MiniCssExtractPlugin({
      filename: './[name].min.css'
    }),
    new BrowserSyncPlugin({
      files: '**/*.php',
      host: 'localhost',
      port: 3000,
      proxy: 'http://kyosa-site.test/'
    })
  ],
  optimization: {
    minimizer: [
      new UglifyJSPlugin(),
      new OptimizeCssAssetsPlugin()
    ]
  }
};
