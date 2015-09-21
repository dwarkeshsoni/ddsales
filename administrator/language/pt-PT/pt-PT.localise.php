<?php
/**
 @package Joomla.Language
 @copyright  Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 @license GNU General Public License version 2 or later; see LICENSE.txt
  */

defined('_JEXEC') or die;

/**
 * pt-BR localise class
 *
 * @package		Joomla.Language
 * @since		1.6
 */
abstract class pt_PTLocalise {
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param	int $count  The number of items.
	 * @return	array  An array of potential suffixes.
	 * @since	1.6
	 */
	public static function getPluralSuffixes($count) {
		if ($count == 0) {
			$return = array('0');
		}
		elseif($count == 1) {
			$return = array('1');
		}
		else {
			$return = array('MORE');
		}
		return $return;
	}
	/**
	 * Returns the ignored search words
	 *
	 * @return	array  An array of ignored search words.
	 * @since	1.6
	 */
	public static function getIgnoredSearchWords() {
		$search_ignore = array();
		$search_ignore[] = "e";
		$search_ignore[] = "em";
		$search_ignore[] = "ou";
		$search_ignore[] = "mas";
		$search_ignore[] = "de";
    $search_ignore[] = "se";
    $search_ignore[] = "por";
    $search_ignore[] = "nem";
		return $search_ignore;
	}
	/**
	 * Returns the lower length limit of search words
	 *
	 * @return	integer  The lower length limit of search words.
	 * @since	1.6
	 */
	public static function getLowerLimitSearchWord() {
		return 3;
	}
	/**
	 * Returns the upper length limit of search words
	 *
	 * @return	integer  The upper length limit of search words.
	 * @since	1.6
	 */
	public static function getUpperLimitSearchWord() {
		return 20;
	}
	/**
	 * Returns the number of chars to display when searching
	 *
	 * @return	integer  The number of chars to display when searching.
	 * @since	1.6
	 */
	public static function getSearchDisplayedCharactersNumber() {
		return 200;
	}
}