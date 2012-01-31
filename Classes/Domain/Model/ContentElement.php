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


/**
 * Implements markdown content element
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Mkdwn_Domain_Model_ContentElement extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Holds markdown syntax for content element
	 *
	 * @var string $source
	 */
	protected $source;

	/**
	 * Holds cached version of rendered source
	 *
	 * @var string $renderCache
	 */
	protected $renderCache;

	/**
	 * Setter for source
	 *
	 * @param string $source Holds markdown syntax for content element
	 * @return void
	 */
	public function setSource($source) {
		$this->source = $source;
	}

	/**
	 * Getter for source
	 *
	 * @return string Holds markdown syntax for content element
	 */
	public function getSource() {
		return $this->source;
	}

	/**
	 * Setter for renderCache
	 *
	 * @param string $renderCache Holds cached version of rendered source
	 * @return void
	 */
	public function setRenderCache($renderCache) {
		$this->renderCache = $renderCache;
	}

	/**
	 * Getter for renderCache
	 *
	 * @return string Holds cached version of rendered source
	 */
	public function getRenderCache() {
		return $this->renderCache;
	}

}
?>