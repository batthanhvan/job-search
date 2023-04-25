<?php
require_once("../include/initialize.php");
if (!isset($_SESSION['ADMIN_USERID'])) {
  redirect(web_root . "admin/login.php");
}

$title = "Home";
$content = 'home.php';

switch ($_SESSION['ADMIN_ROLE']) {
  case 'Administrator':
    require_once("theme/templates.php");

    break;
  case 'Recruiter':
    require_once("theme/recruiter.php");
    break;
  default:
}

