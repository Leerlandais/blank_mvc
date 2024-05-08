<?php
session_start();    

require_once("../config.php");
require_once("../controller/dbConnectController.php");
require_once("../model/laundryModel.php");
require_once("../model/loginModel.php");


if (isset($_SESSION["id"]) && ($_SESSION["id"]) === session_id()) {
    require_once('../controller/privateController.php');
}else {
    require_once("../controller/publicController.php");
}

$db = null;