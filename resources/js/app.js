import './bootstrap';
import $ from 'jquery';

import 'select2';
import 'select2/dist/css/select2.css';



// Configure Select2 to use jQuery
$.fn.select2.defaults.set('theme', 'bootstrap4'); // Replace with your desired theme

$(document).ready(function() {
    $('.multiple-select2').select2({
        placeholder: 'Select Services',
        tags: true,
    });
});
