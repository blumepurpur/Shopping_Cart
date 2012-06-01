<?php
session_start();
// include function files for this application
require_once('book_sc_fns.php');

  do_html_header("List of Customers");
  echo customers_list();
  do_html_footer();
?>