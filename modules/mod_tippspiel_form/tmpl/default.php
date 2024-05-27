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

	use Joomla\CMS\Layout\LayoutHelper;

	$values1 = array('key1' => 'value1', 'key2' => 'value2');
	$values2 = array('key3' => 'value3', 'key4' => 'value4');
	$layoutPath= JPATH_ROOT . '/modules/mod_tippspiel_form/layouts';
?>

<div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow>
    <ul class="uk-slideshow-items">
        <li>
		    <?php echo LayoutHelper::render('group-stage-1', $values1, $layoutPath); ?>
        </li>
        <li>
		    <?php echo LayoutHelper::render('round-of-16-2', $values1, $layoutPath); ?>
        </li>
        <li>
		    <?php echo LayoutHelper::render('quarter-finals-3', $values1, $layoutPath); ?>
        </li>
        <li>
		    <?php echo LayoutHelper::render('semi-finals-4', $values1, $layoutPath); ?>
        </li>
        <li>
		    <?php echo LayoutHelper::render('final-5', $values1, $layoutPath); ?>
        </li>
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
       uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
       uk-slideshow-item="next"></a>
</div>
