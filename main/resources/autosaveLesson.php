<?php

# Includes
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

if(!PathArray::isNameValid($section)||!PathArray::isNameValid($lesson))
{
    die("Section or lesson contains invalid characters");
}

if (isset($_REQUEST['content']) && !empty($_REQUEST['content']))
{
	$lessonContent = htmlentities(trim($_REQUEST['content']));
}
if (isset($_REQUEST['ilos']) && !empty($_REQUEST['ilos']))
{
	$ilos = json_encode($_REQUEST['ilos']);
}
else
{
	$ilos = json_encode(array());
}

$payload = json_encode(array("content"=>$lessonContent,"ilos"=>$ilos));

$api = new Api();


$uri = "/data/material/$field/$subject/$course/$section/$lesson/content/autosave/{$userSession->getUsername()}";

$result = $api->post($uri, $payload);

echo $result;

?>
