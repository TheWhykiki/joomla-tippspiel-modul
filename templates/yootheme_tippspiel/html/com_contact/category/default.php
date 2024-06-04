<?php

/**
 * @package         Joomla.Site
 * @subpackage      com_contact
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license         GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\Database\DatabaseInterface;

$items = $this->items;
// Database connection
$db = Factory::getContainer()->get(DatabaseInterface::class);

// Define the query
$query = $db->getQuery(true)
	->select([
		$db->quoteName('u.id', 'user_id'),
		$db->quoteName('u.username', 'username'),
		$db->quoteName('c.id', 'contact_id'),
		$db->quoteName('c.alias', 'alias'),
		$db->quoteName('c.name', 'name'),
		$db->quoteName('c.catid', 'catid'),
		$db->quoteName('t.user_tipps', 'user_tipps'),
		$db->quoteName('t.user_results', 'user_results'),
		$db->quoteName('t.positions', 'positions'),
		$db->quoteName('t.user_total', 'user_total'),
	])
	->from($db->quoteName('#__users', 'u'))
	->join('INNER', $db->quoteName('#__contact_details', 'c') . ' ON ' . $db->quoteName('u.id') . ' = ' . $db->quoteName('c.user_id'))
	->join('INNER', $db->quoteName('#__tippspiel_results', 't') . ' ON ' . $db->quoteName('u.id') . ' = ' . $db->quoteName('t.user_id'))
    ->order('t.user_total DESC');

// Execute the query
$db->setQuery($query);
$results = $db->loadObjectList();

$userData = [];

foreach ($results as $result)
{
	$query = $db->getQuery(true)
		->select('*')
		->from($db->quoteName('#__fields_values'))
		->where($db->quoteName('item_id') . ' = ' . $result->user_id);
	$db->setQuery($query);
	$fields           = $db->loadObjectList();
	$kurzbeschreibung = $fields[0]->value;
	$avatar           = $fields[1]->value;

	$userData[$result->user_id] = [
		'user_id'          => $result->user_id,
		'contact_id'       => $result->contact_id,
		'name'             => $result->name,
		'username'             => $result->username,
		'kurzbeschreibung' => $kurzbeschreibung,
		'avatar'           => $avatar,
		'user_tipps'       => $result->user_tipps,
		'user_results'     => $result->user_results,
		'positions'        => $result->positions,
		'user_total'       => $result->user_total,
		'alias'            => $result->alias,
		'catid'            => $result->catid,
		'slug'             => $result->contact_id . ':' . $result->alias,
	];
}

$this->items = json_decode(json_encode($userData));
?>

<div class="com-contact-category">
	<?php
	$this->subtemplatename = 'items';
	echo LayoutHelper::render('joomla.content.category_default', $this);
	?>
</div>
