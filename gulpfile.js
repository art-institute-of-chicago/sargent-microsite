process.env.DISABLE_NOTIFIER = true;

var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

var httpServer = require('http-server');
var open = require('open');

require('laravel-elixir-remove');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';
elixir.config.sourcemaps = false;

elixir(function(mix) {

    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    // @imports all the other SCSS partials
    mix.sass('main.scss');

    // Standardize baseline styles across browsers
    mix.sass('reset.scss');

    // Combine all scripts into main.js
    // Jigsaw will take care of copying it to build_*
    mix.scripts(
        [
            'header.js',
            'lightbox.js',
            'slideshow.js',
        ],
        './source/js/main.js'
    );

    // Remove any emacs backup files
    mix.remove('source/**/*~');

    // Run Jigsaw
    mix.exec(bin.path() + ' build ' + env, [
        './source/*',
        './source/**/*',
        '!./source/_assets/**/*'
    ]);

    // Don't run the server in production
    if (env != 'production') {

        // Run a simple HTTP server on `port`
        var server = httpServer.createServer({
            root: './build_' + env
        });

        server.listen(port);

        // Open the site in browser
        open('http://localhost:' + port);

    }


    // TODO: Add LiveReload?
    // https://github.com/napcs/node-livereload

    // For now, go download it manually:
    // http://livereload.com/

    // Regardless, you'll need the Chrome extension:
    // https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei

});

