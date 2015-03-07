<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
/*
* Main router file
*/

require_once('lib/limonade.php');//Include the mvc limonade framework
require_once('config/config.php');//Include Configuration file

/*Including Controllers and Models*/
require_once('controllers/controller.php');
require_once('models/model.php');

/*Controller Objects*/

$cont_ob=new controller();

function before()
{
	set('title','WomenMentor');
	layout('layout.php');//default layout
}

function not_found()
{
	set('title','WomenMentor');
	layout('layout.php');
	//return html("not_found.php");
}


/*Routes: */

dispatch('/',array($cont_ob,'home'));
dispatch('/login',array($cont_ob,'login'));
dispatch('/logout',array($cont_ob,'logout'));

/*Starting application*/
run();