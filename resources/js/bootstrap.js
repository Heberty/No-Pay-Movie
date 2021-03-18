try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('bigslide');
    require('owl.carousel');
    require('jquery-mask-plugin');
} catch (e) {}
