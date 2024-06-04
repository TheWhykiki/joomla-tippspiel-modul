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

	use Joomla\CMS\Factory;
	use Joomla\CMS\HTML\HTMLHelper;
	use Joomla\CMS\Layout\LayoutHelper;
	use Joomla\CMS\WebAsset\WebAssetManager;

	/** @var WebAssetManager $wa */
	$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
	$wa->registerAndUseStyle('mod_tippspiel_form_css', 'media/mod_tippspiel_form/css/form.css');
	$wa->registerAndUseScript('mod_tippspiel_form_js', 'media/mod_tippspiel_form/js/form.js');

	$layoutPath= JPATH_ROOT . '/modules/mod_tippspiel_form/layouts';

	$user = Factory::getApplication()->getIdentity();
	$hideSubmitButton = ($user->id == 69);

    $disabledClass = '';
?>

ababab
<form id="tippspiel-form">
	<div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow>

		<a class="uk-position-medium uk-position-top-left uk-icon uk-slidenav-previous uk-slidenav" href uk-slidenav-previous
		uk-slideshow-item="previous"></a>

		<a class="uk-position-medium uk-position-top-right uk-icon uk-slidenav-next uk-slidenav"" href uk-slidenav-next
		uk-slideshow-item="next"></a>

		<?php if (!$hideSubmitButton) : ?>
        <button type="submit" class="btnFormSubmit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M433.9 129.9l-83.9-83.9A48 48 0 0 0 316.1 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V163.9a48 48 0 0 0 -14.1-33.9zM224 416c-35.3 0-64-28.7-64-64 0-35.3 28.7-64 64-64s64 28.7 64 64c0 35.3-28.7 64-64 64zm96-304.5V212c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12V108c0-6.6 5.4-12 12-12h228.5c3.2 0 6.2 1.3 8.5 3.5l3.5 3.5A12 12 0 0 1 320 111.5z"/>
            </svg>
        </button>
        <?php endif; ?>

		<?php if ($hideSubmitButton) : ?>
        <button type="submit" id="btnFormSubmitResults">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z"/></svg>
        </button>

            <input type="number" name="currentMatchId" value="1">
		<?php endif; ?>

		<ul class="uk-slideshow-items">
			<li>
				<?php echo LayoutHelper::render('group-stage-1', $disabledClass, $layoutPath); ?>
			</li>
			<li>
				<?php echo LayoutHelper::render('group-stage-2', $disabledClass, $layoutPath); ?>
			</li>
			<li>
				<?php echo LayoutHelper::render('round-of-16-3', $disabledClass, $layoutPath); ?>
			</li>
			<li>
				<?php echo LayoutHelper::render('quarter-finals-4', $disabledClass, $layoutPath); ?>
			</li>
			<li>
				<?php echo LayoutHelper::render('semi-finals-5', $disabledClass, $layoutPath); ?>
			</li>
			<li>
				<?php echo LayoutHelper::render('final-6', $disabledClass, $layoutPath); ?>
			</li>
		</ul>
	</div>

	<?php echo HTMLHelper::_('form.token'); ?>
</form>
