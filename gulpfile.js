var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.copy('resources/assets/js/app/views', 'public/js/app/views');
    mix.sass('metro.scss')
        .scripts(['jquery.js', 'metro.js'])
        .browserify(['app/app.js'], 'public/js/app/bundle.js');
});
