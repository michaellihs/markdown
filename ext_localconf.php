<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'ContentElement' => 'list, show, new, create, edit, update, delete',
	),
	array(
		'ContentElement' => 'create, update, delete',
	)
);

?>