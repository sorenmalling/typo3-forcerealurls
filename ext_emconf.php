<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "forcerealurls".
 *
 * Auto generated 11-03-2014 09:35
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Force RealURLs',
	'description' => 'Checks if a page is trying to be accessed by an old style URL, and does a 301 redirect to the appropriate URL if so',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Christian Jul Jensen',
	'author_email' => 'julle(at)typo3.org',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'cms' => '',
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.7.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>