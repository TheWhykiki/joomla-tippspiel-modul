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
<div class="slider-inner-item" id="quarterfinals">
    <h2 class="uk-heading-medium uk-light milky"><?= Text::_('QUARTERFINALS') ?></h2>

    <div class="quarterfinals finals">

        <div class="match" data-matchid="45">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">45. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-45-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W38') ?>"><span class="vs">-</span></span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-45-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W40') ?>">
                    </div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-45-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-45-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">Fr. 5. Juli 2024, 18:00</div>
        </div>

        <div class="match" data-matchid="46">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">46. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-46-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W41') ?>"> <span class="vs">-</span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-46-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W42') ?>">
                    </div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-46-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-46-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">Fr. 5. Juli 2024, 21:00</div>
        </div>

        <div class="match" data-matchid="47">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">47. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-47-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W41') ?>"> <span class="vs">-</span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-47-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W42') ?>">
                    </div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-47-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-47-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">Sa. 6. Juli 2024, 18:00</div>
        </div>

        <div class="match" data-matchid="48">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">48. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-48-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W37') ?>"> <span class="vs">-</span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-48-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W39') ?>">
                    </div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-48-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-48-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">Sa. 6. Juli 2024, 21:00</div>
        </div>

    </div>
</div>
