const mix = require('laravel-mix');

// require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/admin.js', 'public/js')
   .js('resources/js/blog.js', 'public/js')
   .js('resources/js/helper.js', 'public/js')
   .js('resources/js/library.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nested'),
   ]);
//    .sass('resources/sass/app.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
