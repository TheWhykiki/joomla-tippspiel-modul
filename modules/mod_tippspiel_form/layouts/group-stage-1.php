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

<div class="slider-inner-item" id="group-stage">
    <h2><?= Text::_('GROUP_STAGE') ?></h2>
    <div class="group-stage">
        <div class="match" data-matchid="1">
            <div class="match-info">
                <div class="match-teams">1. <?= Text::_('DE') ?> vs <?= Text::_('HU') ?></div>
                <div class="match-date">Fr. 14. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-1-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-1-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="2">
            <div class="match-info">
                <div class="match-teams">2. <?= Text::_('SC') ?> vs <?= Text::_('CH') ?></div>
                <div class="match-date">Sa. 15. Juni 2024, 15:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-2-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-2-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="3">
            <div class="match-info">
                <div class="match-teams">3. <?= Text::_('ES') ?> vs <?= Text::_('IT') ?></div>
                <div class="match-date">Sa. 15. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-3-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-3-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="4">
            <div class="match-info">
                <div class="match-teams">4. <?= Text::_('CR') ?> vs <?= Text::_('AL') ?></div>
                <div class="match-date">So. 16. Juni 2024, 15:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-4-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-4-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="5">
            <div class="match-info">
                <div class="match-teams">5. <?= Text::_('PL') ?> vs <?= Text::_('NL') ?></div>
                <div class="match-date">So. 16. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-5-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-5-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="6">
            <div class="match-info">
                <div class="match-teams">6. <?= Text::_('SVN') ?> vs <?= Text::_('SR') ?></div>
                <div class="match-date">So. 16. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-6-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-6-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="7">
            <div class="match-info">
                <div class="match-teams">7. <?= Text::_('BE') ?> vs <?= Text::_('SVK') ?></div>
                <div class="match-date">Mo. 17. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-7-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-7-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="8">
            <div class="match-info">
                <div class="match-teams">8. <?= Text::_('AT') ?> vs <?= Text::_('FR') ?></div>
                <div class="match-date">Mo. 17. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-8-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-8-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="9">
            <div class="match-info">
                <div class="match-teams">9. <?= Text::_('TR') ?> vs <?= Text::_('PT') ?></div>
                <div class="match-date">Di. 18. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-9-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-9-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="10">
            <div class="match-info">
                <div class="match-teams">10. <?= Text::_('CZ') ?> vs <?= Text::_('GE') ?></div>
                <div class="match-date">Di. 18. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-10-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-10-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="11">
            <div class="match-info">
                <div class="match-teams">11. <?= Text::_('DE') ?> vs <?= Text::_('HU') ?></div>
                <div class="match-date">Mi. 19. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-11-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-11-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="12">
            <div class="match-info">
                <div class="match-teams">12. <?= Text::_('SC') ?> vs <?= Text::_('CH') ?></div>
                <div class="match-date">Mi. 19. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-12-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-12-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="13">
            <div class="match-info">
                <div class="match-teams">13. <?= Text::_('ES') ?> vs <?= Text::_('IT') ?></div>
                <div class="match-date">Do. 20. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-13-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-13-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="14">
            <div class="match-info">
                <div class="match-teams">14. <?= Text::_('CR') ?> vs <?= Text::_('AL') ?></div>
                <div class="match-date">Do. 20. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-14-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-14-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="15">
            <div class="match-info">
                <div class="match-teams">15. <?= Text::_('PL') ?> vs <?= Text::_('NL') ?></div>
                <div class="match-date">Fr. 21. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-15-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-15-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="16">
            <div class="match-info">
                <div class="match-teams">16. <?= Text::_('SVN') ?> vs <?= Text::_('SR') ?></div>
                <div class="match-date">Fr. 21. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-16-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-16-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="17">
            <div class="match-info">
                <div class="match-teams">17. <?= Text::_('BE') ?> vs <?= Text::_('SVK') ?></div>
                <div class="match-date">Sa. 22. Juni 2024, 15:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-17-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-17-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="18">
            <div class="match-info">
                <div class="match-teams">18. <?= Text::_('AT') ?> vs <?= Text::_('FR') ?></div>
                <div class="match-date">Sa. 22. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-18-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-18-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="19">
            <div class="match-info">
                <div class="match-teams">19. <?= Text::_('TR') ?> vs <?= Text::_('PT') ?></div>
                <div class="match-date">Sa. 22. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-19-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-19-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="20">
            <div class="match-info">
                <div class="match-teams">20. <?= Text::_('CZ') ?> vs <?= Text::_('GE') ?></div>
                <div class="match-date">So. 23. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-20-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-20-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="21">
            <div class="match-info">
                <div class="match-teams">21. <?= Text::_('DK') ?> vs <?= Text::_('FI') ?></div>
                <div class="match-date">So. 23. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-21-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-21-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="22">
            <div class="match-info">
                <div class="match-teams">22. <?= Text::_('AT') ?> vs <?= Text::_('SVN') ?></div>
                <div class="match-date">Mo. 24. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-22-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-22-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="23">
            <div class="match-info">
                <div class="match-teams">23. <?= Text::_('HU') ?> vs <?= Text::_('FR') ?></div>
                <div class="match-date">Mo. 24. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-23-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-23-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="24">
            <div class="match-info">
                <div class="match-teams">24. <?= Text::_('IT') ?> vs <?= Text::_('TR') ?></div>
                <div class="match-date">Di. 25. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-24-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-24-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="25">
            <div class="match-info">
                <div class="match-teams">25. <?= Text::_('AL') ?> vs <?= Text::_('RO') ?></div>
                <div class="match-date">Di. 25. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-25-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-25-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="26">
            <div class="match-info">
                <div class="match-teams">26. <?= Text::_('ES') ?> vs <?= Text::_('SW') ?></div>
                <div class="match-date">Mi. 26. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-26-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-26-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="27">
            <div class="match-info">
                <div class="match-teams">27. <?= Text::_('PL') ?> vs <?= Text::_('AT') ?></div>
                <div class="match-date">Mi. 26. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-27-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-27-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="28">
            <div class="match-info">
                <div class="match-teams">28. <?= Text::_('NL') ?> vs <?= Text::_('SVN') ?></div>
                <div class="match-date">Do. 27. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-28-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-28-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="29">
            <div class="match-info">
                <div class="match-teams">29. <?= Text::_('EN') ?> vs <?= Text::_('BE') ?></div>
                <div class="match-date">Do. 27. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-29-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-29-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="30">
            <div class="match-info">
                <div class="match-teams">30. <?= Text::_('SR') ?> vs <?= Text::_('SVK') ?>') ?></div>
                <div class="match-date">Fr. 28. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-30-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-30-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="31">
            <div class="match-info">
                <div class="match-teams">31. <?= Text::_('DE') ?> vs <?= Text::_('SC') ?></div>
                <div class="match-date">Fr. 28. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-31-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-31-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="32">
            <div class="match-info">
                <div class="match-teams">32. <?= Text::_('CH') ?> vs <?= Text::_('HU') ?></div>
                <div class="match-date">Sa. 29. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-32-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-32-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="33">
            <div class="match-info">
                <div class="match-teams">33. <?= Text::_('ES') ?> vs <?= Text::_('CR') ?></div>
                <div class="match-date">Sa. 29. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-33-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-33-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="34">
            <div class="match-info">
                <div class="match-teams">34. <?= Text::_('IT') ?> vs <?= Text::_('AL') ?></div>
                <div class="match-date">So. 30. Juni 2024, 18:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-34-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-34-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="35">
            <div class="match-info">
                <div class="match-teams">35. <?= Text::_('TR') ?> vs <?= Text::_('PT') ?></div>
                <div class="match-date">So. 30. Juni 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-35-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-35-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
        <div class="match" data-matchid="36">
            <div class="match-info">
                <div class="match-teams">36. <?= Text::_('CZ') ?> vs <?= Text::_('GE') ?></div>
                <div class="match-date">Mo. 1. Juli 2024, 21:00</div>
            </div>
            <div class="tips-score">
                <input type="number" name="match-36-1" class="score-input uk-input" placeholder="0">
                <input type="number" name="match-36-2" class="score-input uk-input" placeholder="0">
            </div>
        </div>
    </div>
</div>
