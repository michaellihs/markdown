<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Michael Knoll <mimi@kaktusteam.de>, MKLV GbR
*  	
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once t3lib_extMgm::extPath('mkdwn') . 'Classes/Markdown/markdown.php';

/**
 * Controller for the ContentElement object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Mkdwn_Controller_ContentElementController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Displays a single ContentElement
	 *
	 * @return string The rendered view
	 */
	public function showAction(Tx_Mkdwn_Domain_Model_ContentElement $contentElement=null) {
        if ($contentElement === null) {
            $contentElement = t3lib_div::makeInstance('Tx_Mkdwn_Domain_Repository_ContentElementRepository')->findByUid(1);
        }

		$this->view->assign('contentElement', $contentElement);
        $this->view->assign('renderedSource', Markdown($contentElement->getSource()));
        $this->view->assign('source', $contentElement->getSource());
	}

}
?>