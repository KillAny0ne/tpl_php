<?php

require('libs/Smarty.class.php');

$smarty = new Smarty();

#$smarty->setTemplateDir('/var/www/html/tpl/templates');
#$smarty->setCompileDir('/var/www/html/tpl/templates_c');

$name = 'hacker';
if(isset($_GET['name'])){
	$name = $_GET['name'];
}

$smarty->assign('name',$name);

$smarty->display('string:'.'Which can be inject:'.$name."\n");
#$smarty->testInstall();
$smarty->display('index.tpl');
#$smarty->assign("name","hacker");
#$smarty->display("index.tpl");


