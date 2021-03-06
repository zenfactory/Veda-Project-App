<?php

require_once('EditContent.php');

class EditRoleplay extends EditContent
{
    protected $location = null;
    protected $name = null;
    
    public function __construct()
    {
        $bodyTemplates = array();
        $cssFiles = array();
        $scriptFiles = array();
        $ieScriptFiles = array();
        $fullnameScriptFiles = array();
        
        parent::__construct($bodyTemplates, $cssFiles, $scriptFiles, $ieScriptFiles, $fullnameScriptFiles);
        
        $this->appendScriptFiles(array("contentProvider/content/LessonAdditionProvider"));
    }
    
    public function display()
    {
        $GLOBALS['smarty']->assign("location",$this->location);
        parent::display();
    }
    
    public function getData($uri)
    {
        parent::getData($uri);
        $uriArr = explode("/",trim($uri,"/"));
        $this->location = $uri;
        $this->name = preg_replace('/_/',' ',$uriArr[6])." Roleplay";
        
    }
}

?>
