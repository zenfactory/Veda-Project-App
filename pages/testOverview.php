<?php

	$title = "The Veda Project";
	$cssfiles = array("reset","main","default","flexcrollstyles-default","jquery-ui","message","contentprovider","quizOverview");
	$iejavascriptfiles = array("http://html5shiv.googlecode.com/svn/trunk/html5.js","http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js");
	$javascriptfiles = array("jquery/jquery","jquery/jquery-ui","jquery/jquery.tools","general/Message","flexcroll/flexcroll","general/main","general/navbar","content/ILOContents","contentProvider/test/testOverview","general/lightbox");
	
	$bodytemplates = array("usernav","navbar","quizOverview","footer");
	#Questions
	$quizPath="/data/material/$field/$subject/$course/$section/$lesson/quizOutline/";
	/*$questions=array(array("id"=>187,"type"=>"Multiple Choice","topic"=>"Circumference of a Circle","topicPath"=>"/data/Mathematics/Mathematics/Geometry/Circumference_of_a_Circle","preview"=>"What is the circumference of","recurrence"=>2),
					 array("id"=>186,"type"=>"Equation","topic"=>"Perimeter of Polygons","topicPath"=>"/data/Mathematics/Mathematics/Geometry/Perimeter_of_Polygons","preview"=>"I'LL CUT YOU","recurrence"=>1));*/
	$quizId=5;
	
	### Assign Smarty Variables ###
	$smarty->assign("questions",$questions);
	$smarty->assign("quizId",$quizId);
	$smarty->assign("quizPath",$quizPath);
?>