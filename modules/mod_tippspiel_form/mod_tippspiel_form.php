<?php
/**
 *       W   W      H   H     Y   Y     K   K       I      K   K      I
 *       W   W      H   H      Y Y      K  K        I      K  K       I
 *       W W W      HHHHH       Y       KKK         I      KKK        I
 *       W W W      H   H       Y       K  K        I      K  K       I
 *        W W       H   H       Y       K   K       I      K   K      I
 *
 * @package     Joomla.Site
 * @subpackage  mod_tippspiel_form
 *
 * @author      Whykiki
 * @website     https://villaester.de
 * @contact     info@whykiki.de
 * @created     May 2024
 * @note        Nix Copyright, snack it... und mach was eigenes draus ;-)
 *
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */



defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\TippspielForm\Site\Helper\TippspielFormHelper;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');
$showLabel       = $params->get('show_label', 1);

require ModuleHelper::getLayoutPath('mod_tippspiel_form', $params->get('layout', 'default'));
