import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js';
import 'bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css';

export default (function () {
  $('.start-date').datepicker();
  $('.end-date').datepicker();
}())
