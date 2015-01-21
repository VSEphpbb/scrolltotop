<?php
/**
 *
 * Scroll To Top
 *
 * @copyright (c) 2015 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace vse\scrolltotop;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/** @var string Require 3.1.2 due to updated INCLUDECSS syntax */
	const PHPBB_VERSION = '3.1.2';

	/**
	 * Enable extension if phpBB minimum version requirement is met
	 *
	 * @return bool
	 */
	function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], self::PHPBB_VERSION, '>=');
	}
}
