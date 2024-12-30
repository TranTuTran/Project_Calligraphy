import $ from 'jquery';
window.$ = window.jQuery = $;
import 'datatables.net-bs5/css/dataTables.bootstrap5.css';
import DataTable from 'datatables.net-bs5';

export default (function () {
  $('#dataTable').DataTable();
}());
