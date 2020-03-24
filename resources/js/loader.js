
window.$ = window.jQuery = require('jquery');

function showLoader(){
    $('.loader').addClass('show');
}

function hideLoader(){
    $('.loader').removeClass('show');
}

module.exports = {
    showLoader,
    hideLoader
};