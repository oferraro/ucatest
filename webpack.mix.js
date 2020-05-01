const mix = require('laravel-mix');

mix
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps()
    .copy("resources/images", "public/images")
    .options({
        processCssUrls: false
    })
    .copy('node_modules/@fortawesome/fontawesome-free-webfonts/webfonts', 'public/webfonts')
    .version()
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.tsx?$/,
                    loader: "ts-loader",
                    exclude: /node_modules/
                }
            ]
        },
        resolve: {
            extensions: ["*", ".js", ".jsx", ".vue", ".ts", ".tsx"]
        }
    });
