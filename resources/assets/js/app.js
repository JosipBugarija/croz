/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$('select').selectpicker();

$(document).on('submit', function () {
    $('.modal').modal('hide');
});

//Loading effect            
setTimeout(function() {
    $('#pageloader').fadeOut(500);
}, 15000);

$(window).on("load", function() {
    $("#pageloader").fadeOut(500);
});