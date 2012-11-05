<?php

use \Config;

Route::any('(:bundle)/(:any)?', function ($page = '')
{
	return Controller::call('cello::pages@index', array($page));
});
Route::any('/', function() {
	//only take over the root uri if cello is set for that
	if (Bundle::handles('/') == 'cello') {
		return Controller::call('cello::pages@index', array(''));	
	}
});