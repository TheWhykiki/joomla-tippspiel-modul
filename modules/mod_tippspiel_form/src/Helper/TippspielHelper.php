<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_tippspiel_form
 *
 * @copyright   (C) 2023 Your Name or Company. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\TippspielForm\Site\Helper;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\Database\DatabaseDriver;
use Joomla\Database\ParameterType;

/**
 * Helper for mod_tippspiel_form
 *
 * @since  1.0.0
 */
class TippspielHelper
{
    /**
     * Get a list of matches
     *
     * @return  array
     *
     * @since   1.0.0
     */
    public function getMatches()
    {
        $db    = $this->getDatabase();
        $query = $db->getQuery(true);

        $query->select($db->quoteName(['id', 'home_team', 'away_team', 'match_date']))
            ->from($db->quoteName('#__tippspiel_matches'))
            ->where($db->quoteName('published') . ' = 1')
            ->order($db->quoteName('match_date') . ' ASC');

        $db->setQuery($query);

        try {
            $matches = $db->loadObjectList();
        } catch (\RuntimeException $e) {
            Factory::getApplication()->enqueueMessage(Text::_('MOD_TIPPSPIEL_FORM_ERROR_MATCHES_NOT_LOADED'), 'error');
            return [];
        }

        return $matches;
    }

    /**
     * Get the database driver
     *
     * @return  DatabaseDriver
     *
     * @since   1.0.0
     */
    private function getDatabase()
    {
        return Factory::getContainer()->get('DatabaseDriver');
    }
}
