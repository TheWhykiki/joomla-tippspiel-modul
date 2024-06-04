<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_tippspiel_form
 *
 * @copyright   (C) 2023 Your Name or Company. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\Module as ModuleServiceProvider;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory as ModuleDispatcherFactoryServiceProvider;
use Joomla\CMS\Extension\Service\Provider\HelperFactory as HelperFactoryServiceProvider;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;


/**
 * The module service provider.
 *
 * @since  1.0.0
 */
return new class implements ServiceProviderInterface
{
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function register(Container $container)
    {

	    $container->registerServiceProvider(new ModuleDispatcherFactoryServiceProvider('\\Joomla\\Module\\TippspielForm'));
	    $container->registerServiceProvider(new HelperFactoryServiceProvider('\\Joomla\\Module\\TippspielForm\\Site\\Helper'));
	    $container->registerServiceProvider(new ModuleServiceProvider());

    }
};
