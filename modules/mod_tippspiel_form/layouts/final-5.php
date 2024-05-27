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

<div class="slider-inner-item" id="final">
    <h2><?= Text::_('FINAL') ?></h2>
    <div class="final">
        <div class="match" data-matchid="51">
            <div class="match-info">
                <div class="match-teams">51. <input type="text" name="match-51-W49" class="team-input" placeholder="<?= Text::_('W49') ?>"> vs <input type="text" name="match-51-W50" class="team-input" placeholder="<?= Text::_('W50') ?>"></div>
                <div class="match-date">So. 14. Juli 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-51-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-51-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
    </div>
</div>
