window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    global.$ = global.jQuery = require('jquery');
    console.log('k')

    require('bootstrap');
} catch (e) {
    console.log('an error accure')
}

window.AOS = require("AOS");

window.axios = require('axios');


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
