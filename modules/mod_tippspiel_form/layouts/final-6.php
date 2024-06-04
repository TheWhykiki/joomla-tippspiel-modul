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

<div class="slider-inner-item" id="final">
    <h2 class="uk-heading-medium uk-light milky"><?= Text::_('FINAL') ?></h2>
    <div class="final finals">
        <div class="match" data-matchid="51">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">51. <input <?= $disabledClass ?>  type="text" minlength="3" name="team-51-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W49') ?>"> <span class="vs">-</span> <input <?= $disabledClass ?>  type="text" minlength="3" name="team-51-2" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('W50') ?>"></div>
                </div>
                <div class="tips-score">
                    <input <?= $disabledClass ?>  type="number" name="score-51-1" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                    <input <?= $disabledClass ?>  type="number" name="score-51-2" class="score-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="0">
                </div>
            </div>
            <div class="match-date">So. 14. Juli 2024, 21:00</div>
        </div>
    </div>

    <div class="winner finals">
        <div class="winner match" data-matchid="52">
            <div class="finalsContainer">
                <div class="match-info">
                    <div class="match-teams">
                        <h3 class="uk-heading-h3 uk-dark"><?= Text::_('WINNER') ?></h3>
                        <input <?= $disabledClass ?>  type="text" minlength="3" name="team-52-1" class="team-input <?= $disabledClass ?>  <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('WINNER') ?>">
                        <input <?= $disabledClass ?>  type="hidden" name="score-52-1" class="hidden <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('WINNER') ?>">
                        <input <?= $disabledClass ?>  type="hidden" name="score-52-2" class="hidden <?= $disabledClass ?>  uk-input <?= $disabledClass ?> " placeholder="<?= Text::_('WINNER') ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
