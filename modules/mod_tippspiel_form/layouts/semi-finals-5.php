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
    $disabledClass = $displayData;
?>

<div class="slider-inner-item" id="semi-finals">
    <h2 class="uk-heading-medium uk-light milky"><?= Text::_('SEMI-FINALS') ?></h2>
    <div class="semi-finals finals">

        <div class="match" data-matchid="49">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">49. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-49-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W45') ?>"> <span class="vs">-</span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-49-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W46') ?>">
                    </div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-49-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-49-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">Di. 9. Juli 2024, 21:00</div>
        </div>

        <div class="match" data-matchid="50">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">50. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-50-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W47') ?>"> <span class="vs">-</span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-50-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W48') ?>">
                    </div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-50-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-50-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">Mi. 10. Juli 2024, 21:00</div>
        </div>
    </div>

</div>
