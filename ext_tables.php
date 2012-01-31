<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');


Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Markdown'
);

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');





t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Markdown');




t3lib_extMgm::addLLrefForTCAdescr('tx_mkdwn_domain_model_contentelement', 'EXT:mkdwn/Resources/Private/Language/locallang_csh_tx_mkdwn_domain_model_contentelement.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_mkdwn_domain_model_contentelement');
$TCA['tx_mkdwn_domain_model_contentelement'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:mkdwn/Resources/Private/Language/locallang_db.xml:tx_mkdwn_domain_model_contentelement',
		'label' 			=> 'source',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ContentElement.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mkdwn_domain_model_contentelement.gif'
	)
);


?>