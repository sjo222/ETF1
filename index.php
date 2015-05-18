<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
//$pageData->css = "<link href='css/layout.css' rel='stylesheet' />";
$pageData->title = "ETF1";
$pageData->content = include_once "views/form.php";

$submitIsClicked = isset($_GET['page']);
if ( $submitIsClicked ) {
    $pageData->content .= include_once "increment.php";
}
$page = include_once "templates/page.php";
echo $page;