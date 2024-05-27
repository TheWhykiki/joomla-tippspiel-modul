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

	use Joomla\CMS\Language\Text;

	echo $displayData['key1'];
?>

<div class="slider-item" id="semi-finals">
    <h2><?= Text::_('SEMI-FINALS') ?></h2>
    <div class="semi-finals">
        <div class="match" data-matchid="49">
            <div class="match-info">
                <div class="match-teams">49. <input type="text" name="match-49-W45" class="team-input uk-input" placeholder="<?= Text::_('W45') ?>"> vs <input type="text" name="match-49-W46" class="team-input uk-input" placeholder="<?= Text::_('W46') ?>">
                </div>
                <div class="match-date">Di. 9. Juli 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-49-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-49-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="50">
            <div class="match-info">
                <div class="match-teams">50. <input type="text" name="match-50-W47" class="team-input uk-input" placeholder="<?= Text::_('W47') ?>"> vs <input type="text" name="match-50-W48" class="team-input uk-input" placeholder="<?= Text::_('W48') ?>">
                </div>
                <div class="match-date">Mi. 10. Juli 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-50-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-50-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
    </div>

</div>
