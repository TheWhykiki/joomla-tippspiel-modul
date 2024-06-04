<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_tippspiel_form
 *
 * @copyright   (C) 2023 Your Name or Company. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\TippspielForm\Site\Dispatcher;

use Joomla\CMS\Application\CMSApplicationInterface;
use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Input\Input;
use Joomla\Registry\Registry;

/**
 * Dispatcher class for mod_tippspiel_form
 *
 * @since  1.0.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

	protected $module;

	protected $app;

	public function __construct(\stdClass $module, CMSApplicationInterface $app, Input $input)
	{
		$this->module = $module;
		$this->app = $app;
	}

	public function dispatch()
	{
		$language = $this->app->getLanguage();
		$language->load('mod_tippspiel_form');
		$params = new Registry($this->module->params);

		require ModuleHelper::getLayoutPath('mod_tippspiel_form');
	}

}
