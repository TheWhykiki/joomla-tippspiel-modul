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
?>
<div class="slider-item" id="quarterfinals">
    <h2><?= Text::_('QUARTERFINALS') ?></h2>

    <div class="quarterfinals">

        <div class="match" data-matchid="45">
            <div class="match-info">
                <div class="match-teams">45. <input type="text" name="match-45-W37" class="team-input uk-input" placeholder="<?= Text::_('W37') ?>"> vs <input type="text" name="match-45-W39" class="team-input uk-input" placeholder="<?= Text::_('W39') ?>">
                </div>
                <div class="match-date">Fr. 5. Juli 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-45-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-45-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>

        <div class="match" data-matchid="46">
            <div class="match-info">
                <div class="match-teams">46. <input type="text" name="match-46-W41" class="team-input uk-input" placeholder="<?= Text::_('W41') ?>"> vs <input type="text" name="match-46-W42" class="team-input uk-input" placeholder="<?= Text::_('W42') ?>">
                </div>
                <div class="match-date">Fr. 5. Juli 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-46-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-46-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>

        <div class="match" data-matchid="47">
            <div class="match-info">
                <div class="match-teams">47. <input type="text" name="match-47-W43" class="team-input uk-input" placeholder="<?= Text::_('W43') ?>"> vs <input type="text" name="match-47-W44" class="team-input uk-input" placeholder="<?= Text::_('W44') ?>">
                </div>
                <div class="match-date">Sa. 6. Juli 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-47-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-47-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>

        <div class="match" data-matchid="48">
            <div class="match-info">
                <div class="match-teams">48. <input type="text" name="match-48-W40" class="team-input uk-input" placeholder="<?= Text::_('W40') ?>"> vs <input type="text" name="match-48-W38" class="team-input uk-input" placeholder="<?= Text::_('W38') ?>">
                </div>
                <div class="match-date">Sa. 6. Juli 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-48-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-48-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>

    </div>
</div>
