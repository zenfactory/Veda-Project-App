<?php

require_once("config/main.inc.php");
require_once("lib/PathArray.php");

if(!$userSession->isLoggedIn()||(!$userSession->isContentProvider()&&!$userSession->isAdmin()))
{
    die("Access Denied.");
}

# Retrieve and sanitize data
$field = "";
$subject = "";
$course = "";
$section = "";
$lesson = "";
PathArray::getPathFromRequest($field,$subject,$course,$section,$lesson);


$api = new Api();
$api->setDataType();

$uri = "/data/material/$field/$subject/$course/$section/$lesson/";

$result = $api->delete($uri,json_encode(array("username"=>$userSession->getUsername())));

print_r($result);

?>
