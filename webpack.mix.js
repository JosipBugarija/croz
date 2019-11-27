let mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copyDirectory(
    "node_modules/font-awesome/fonts",
    "public/fonts/vendor/font-awesome"
);

if (mix.config.production) {
    mix.setResourceRoot("/");
} else {
    mix.setResourceRoot("/croz/public/");

    mix.browserSync({
        proxy: "localhost/croz/public",
        open: true
    });
}

mix.version();

mix.js("resources/assets/js/app.js", "public/js")
    .sass("resources/assets/sass/app.scss", "public/css")
    .options({
        postCss: [
            require("autoprefixer")({
                browsers: ["last 30 versions"]
            })
        ]
    });

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery",
                "window.jQuery": "jquery"
            })
        ]
    };
});
