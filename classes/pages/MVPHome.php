<?php

require_once("MVPMaterialList.php");

class MVPHome extends MVPMaterialList
{
    public function __construct()
    {
        $bodyTemplates = array();
        $cssFiles = array();
        $scriptFiles = array("MVP/MVPHome");
        $ieScriptFiles = array();
        $fullnameScriptFiles = array();
        
        parent::__construct($bodyTemplates,$cssFiles,$scriptFiles,$ieScriptFiles,$fullnameScriptFiles);
        
        $this->materialHeader = "Courses";
    }
}

?>