const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/admin.js', 'public/js')
   .js('resources/js/blog.js', 'public/js')
   .js('resources/js/helper.js', 'public/js')
   .js('resources/js/library.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .tailwind();
