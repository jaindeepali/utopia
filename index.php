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
	return html("not_found.php");
}


/*Routes: */

dispatch('/',array($cont_ob,'home'));
dispatch('/login',array($cont_ob,'login'));
dispatch_post('/validate',array($cont_ob,'validate_user'));
dispatch('/logout',array($cont_ob,'logout'));
dispatch('/myprofile',array($cont_ob,'view_profile'));
dispatch('/edit_profile',array($cont_ob,'edit_profile'));
dispatch('/goals',array($cont_ob,'view_goals'));
dispatch('/goal/:id',array($cont_ob,'view_goal'));
dispatch('/new_goal',array($cont_ob,'new_goal'));
dispatch_post('/add_goal',array($cont_ob,'add_goal'));
dispatch_post('/update_user',array($cont_ob,'update_user'));
dispatch('/questionnaire/:id',array($cont_ob,'questionnaire'));

/*Starting application*/
run();