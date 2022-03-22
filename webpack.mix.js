const mix = require('laravel-mix');

mix.postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
   ]);

mix.version();

const webpackConfig = {
    stats: {
        children: true,
    },
};

mix.webpackConfig(webpackConfig);
