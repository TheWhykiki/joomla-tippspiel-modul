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
use Joomla\CMS\Response\JsonResponse;
use Joomla\Database\DatabaseDriver;
use Joomla\Database\ParameterType;



class TippspielFormHelper
{

	protected function _saveResults($type, $results)
	{
		$app = Factory::getApplication();
		$userId = $app->getIdentity()->id;

		if (empty($userId)) {
			echo new JsonResponse(['success' => false, 'error' => Text::_('Fehler: Spieler nicht eingelogged')]);
			return;
		}

		$db = $this->getDatabase();
		$query = $db->getQuery(true);

		$userTippsId = $this->_hasUserSubmitted($userId);

		// Konvertiere leere Werte zu null
		foreach ($results as &$result) {
			foreach ($result as $key => &$value) {
				if ($value === '') {
					$value = null;
				}
			}
		}

		if ($userTippsId) {
			// Update existing entry
			$query->update($db->quoteName('#__tippspiel_results'))
				->set($db->quoteName('user_' . $type) . ' = ' . $db->quote(json_encode($results)))
				->where($db->quoteName('id') . ' = ' . (int) $userTippsId);
		} else {
			// Create new entry
			$columns = ['user_id', 'user_' . $type];
			$values = [
				$db->quote($userId, ParameterType::INTEGER),
				$db->quote(json_encode($results), ParameterType::STRING)
			];

			$query->insert($db->quoteName('#__tippspiel_results'))
				->columns($db->quoteName($columns))
				->values(implode(',', $values));
		}

		$db->setQuery($query);

		try {
			$db->execute();
			echo new JsonResponse(['success' => true, 'message' => Text::_('Tipps gespeichert')]);
		} catch (\RuntimeException $e) {
			echo new JsonResponse(['success' => false, 'message' => Text::_('Fehler: Tipps nicht gespeichert')], 500);
		}

		//$app->close();
	}

	public function writeTippsAjax()
	{
		$app = Factory::getApplication();
		$input = $app->input;
		$results = $input->json->get('results', [], 'array');
		$this->_saveResults('tipps', $results);
		$app->close();
	}

	public function writeResultsAjax()
	{
		$app = Factory::getApplication();
		$input = $app->input;
		$form = $input->json->get('results', [], 'array');
		$results = $form[0];
		$this->_saveResults('results', $results);
		$this->_calculateResults($results, $form, $app->getIdentity()->id);
		$app->close();
	}

	public function getResultsAjax()
	{
		$app = Factory::getApplication();
		$userId = $app->getIdentity()->id;

		if (empty($userId)) {
			echo new JsonResponse(['success' => false, 'error' => Text::_('MOD_TIPPSPIEL_FORM_ERROR_USER_NOT_LOGGED_IN')]);
			return;
		}

		$db = $this->getDatabase();
		$query = $db->getQuery(true);

		if($userId == 69)
		{
			$query->select($db->quoteName('user_results'))
				->from($db->quoteName('#__tippspiel_results'))
				->where($db->quoteName('user_id') . ' = ' . (int) $userId);
		}
		if($userId != 69)
		{
			$query->select($db->quoteName('user_tipps'))
				->from($db->quoteName('#__tippspiel_results'))
				->where($db->quoteName('user_id') . ' = ' . (int) $userId);
		}

		$db->setQuery($query);

		try {
			$result = $db->loadResult();
			echo new JsonResponse(['success' => true, 'data' => $result]);
		} catch (\RuntimeException $e) {
			echo new JsonResponse(['success' => false, 'message' => Text::_('MOD_TIPPSPIEL_FORM_ERROR_RESULTS_NOT_LOADED')], 500);
		}



		$app->close();
	}


	protected function _calculateResults($actualResults, $form, $userId)
	{
		$db = $this->getDatabase();
		$query = $db->getQuery(true);

		$query->clear()
			->select($db->quoteName('user_id'))
			->from($db->quoteName('#__tippspiel_results'))
			->where($db->quoteName('user_id') . ' != 69');
		$db->setQuery($query);
		$userIds = $db->loadColumn();

		foreach ($userIds as $userId) {
			// Hole die Tipps (user_tipps) des aktuellen Users
			$query->clear()
				->select($db->quoteName('user_tipps'))
				->from($db->quoteName('#__tippspiel_results'))
				->where($db->quoteName('user_id') . ' = ' . (int) $userId);
			$db->setQuery($query);
			$userTipps = json_decode($db->loadResult(), true);

			$userResults = [];
			$userTotal = 0;

			foreach ($userTipps as $tipp) {
				$matchId = $tipp['matchid'];
				$tippScore1 = $tipp['score-1'] ?? null;
				$tippScore2 = $tipp['score-2'] ?? null;
				$tippTeam1 = $tipp['team-1'] ?? null;
				$tippTeam2 = $tipp['team-2'] ?? null;

				// Finde das tatsächliche Ergebnis für die aktuelle matchid
				$actualResult = array_filter($actualResults, function ($result) use ($matchId) {
					return $result['matchid'] == $matchId;
				});

				if (!empty($actualResult)) {
					$actualResult = reset($actualResult);
					$actualScore1 = $actualResult['score-1'] ?? null;
					$actualScore2 = $actualResult['score-2'] ?? null;
					$actualTeam1 = $actualResult['team-1'] ?? null;
					$actualTeam2 = $actualResult['team-2'] ?? null;

					$points = 0;

					// Überprüfe, ob beide score-input-Werte vorhanden sind
					if ($tippScore1 !== null && $tippScore2 !== null && $tippScore1 !== '' && $tippScore2 !== '' && $actualScore1 !== null && $actualScore2 !== null && $actualScore1 !== '' && $actualScore2 !== '') {
						// Vergleiche die Ergebnisse
						if ($tippScore1 == $actualScore1 && $tippScore2 == $actualScore2) {
							$points += 3; // Richtig getipptes Ergebnis
						} elseif (($tippScore1 - $tippScore2) == ($actualScore1 - $actualScore2)) {
							$points += 2; // Richtig getippte Tordifferenz
						} elseif (
							($tippScore1 > $tippScore2 && $actualScore1 > $actualScore2) ||
							($tippScore1 < $tippScore2 && $actualScore1 < $actualScore2) ||
							($tippScore1 == $tippScore2 && $actualScore1 == $actualScore2)
						) {
							$points += 1; // Richtig getippte Spieltendenz
						}
					}


					if ($tippTeam1 !== null && $this->isTeamNameSimilar($tippTeam1, $actualTeam1)) {
						$points += 5; // Richtig getipptes Team 1
					}
					if ($tippTeam2 !== null && $this->isTeamNameSimilar($tippTeam2, $actualTeam2)) {
						$points += 5; // Richtig getipptes Team 2
					}

					if($matchId == 52){
						if ($tippTeam1 !== null && $this->isTeamNameSimilar($tippTeam1, $actualTeam1)) {
							$points += 5; // Richtig getipptes Team 1
						}
					}


					$userResults[] = [
						'matchid' => $matchId,
						'result' => $points
					];

					$userTotal += $points;
				}
				$this->_calculateCurrentPositions($userId, $form[1], $userTotal);
			}

			// Speichere die Ergebnisse und die Gesamtpunktzahl in der Datenbank
			$query->clear()
				->update($db->quoteName('#__tippspiel_results'))
				->set($db->quoteName('user_results') . ' = ' . $db->quote(json_encode($userResults)))
				->set($db->quoteName('user_total') . ' = ' . (int) $userTotal)
				->where($db->quoteName('user_id') . ' = ' . (int) $userId);
			$db->setQuery($query);
			$db->execute();
		}
	}

	protected function isTeamNameSimilar($name1, $name2)
	{
		// Definiere eine maximale Levenshtein-Distanz, um Tippfehler zu berücksichtigen
		$maxDistance = 2;

		// Berechne die Levenshtein-Distanz zwischen den beiden Namen
		$distance = levenshtein(strtolower($name1), strtolower($name2));

		// Wenn die Distanz kleiner oder gleich der maximalen Distanz ist, gelten die Namen als ähnlich
		return $distance <= $maxDistance;
	}


	protected function _calculateCurrentPositions($userId, $matchId, $userTotal)
	{
		$db = $this->getDatabase();
		$query = $db->getQuery(true);

		// Get the total points and username for all users
		$query->clear()
			->select([
				$db->quoteName('u.id', 'user_id'),
				$db->quoteName('u.username', 'name'),
				$db->quoteName('r.user_total', 'points')
			])
			->from($db->quoteName('#__users', 'u'))
			->join('INNER', $db->quoteName('#__tippspiel_results', 'r') . ' ON ' . $db->quoteName('u.id') . ' = ' . $db->quoteName('r.user_id'))
			->where($db->quoteName('u.id') . ' != 69')
			->order($db->quoteName('r.user_total') . ' DESC');

		$db->setQuery($query);
		$allUsersTable = $db->loadAssocList();

		$currentUserPosition = null;
		$currentUserPoints = $userTotal;

		foreach ($allUsersTable as $index => $result) {
			if ($result['user_id'] == $userId) {
				$currentUserPosition = $index + 1;
				break;
			}
		}

		if ($currentUserPosition === null) {
			return;
		}

		// Get existing positions
		$query->clear()
			->select($db->quoteName('positions'))
			->from($db->quoteName('#__tippspiel_results'))
			->where($db->quoteName('user_id') . ' = ' . (int) $userId);

		$db->setQuery($query);
		$existingPositions = $db->loadResult();

		$positions = [];
		$previousPosition = null;

		if (!empty($existingPositions)) {
			$positions = json_decode($existingPositions, true);

			// Find the previous position
			usort($positions, function($a, $b) {
				return $a['matchid'] <=> $b['matchid'];
			});

			foreach ($positions as $position) {
				if ($position['matchid'] < $matchId) {
					$previousPosition = $position;
				} else {
					break;
				}
			}

			// Remove existing entries for the current matchid
			$positions = array_filter($positions, function($position) use ($matchId) {
				return $position['matchid'] != $matchId;
			});
		}

		// Determine the tendency
		$tendency = 'same';
		if ($previousPosition) {
			if ($currentUserPosition < $previousPosition['pos']) {
				$tendency = 'up';
			} elseif ($currentUserPosition > $previousPosition['pos']) {
				$tendency = 'down';
			}
		}

		$positions[] = [
			'matchid' => $matchId,
			'pos' => $currentUserPosition,
			'points' => $currentUserPoints,
			'tendency' => $tendency
		];

		// Re-sort positions by matchid
		usort($positions, function($a, $b) {
			return $a['matchid'] <=> $b['matchid'];
		});

		$positions = json_encode(array_values($positions)); // Ensure the structure is maintained

		// Update the positions and current_position in the database
		$query->clear()
			->update($db->quoteName('#__tippspiel_results'))
			->set($db->quoteName('positions') . ' = ' . $db->quote($positions))
			->set($db->quoteName('current_position') . ' = ' . (int) $currentUserPosition)
			->set($db->quoteName('match_id') . ' = ' . (int) $matchId)
			->where($db->quoteName('user_id') . ' = ' . (int) $userId);

		$db->setQuery($query);
		$db->execute();

		return $positions;
	}


	private function getDatabase()
    {
        return Factory::getContainer()->get('DatabaseDriver');
    }

    protected function _hasUserSubmitted($userId)
    {
        $db = $this->getDatabase();
        $query = $db->getQuery(true);

        $query->select($db->quoteName('id'))
            ->from($db->quoteName('#__tippspiel_results'))
            ->where($db->quoteName('user_id') . ' = ' . (int) $userId);

        $db->setQuery($query);

        try {
            $result = $db->loadResult();
        } catch (\RuntimeException $e) {
            Factory::getApplication()->enqueueMessage($e->getMessage(), 'error');
            return false;
        }

        return $result ?: false;
    }

}
