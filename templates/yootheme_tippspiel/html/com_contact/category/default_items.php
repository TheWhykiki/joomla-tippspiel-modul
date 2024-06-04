<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Contact\Administrator\Helper\ContactHelper;
use Joomla\Component\Contact\Site\Helper\RouteHelper;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->document->getWebAssetManager();
$wa->useScript('com_contact.contacts-list')
    ->useScript('core');

$canDo   = ContactHelper::getActions('com_contact', 'category', $this->category->id);
$canEdit = $canDo->get('core.edit');
$userId  = $this->getCurrentUser()->id;

$showEditColumn = false;
if ($canEdit) {
    $showEditColumn = true;
} elseif ($canDo->get('core.edit.own') && !empty($this->items)) {
    foreach ($this->items as $item) {
        if ($item->created_by == $userId) {
            $showEditColumn = true;
            break;
        }
    }
}

$listOrder  = $this->escape($this->state->get('list.ordering'));
$listDirn   = $this->escape($this->state->get('list.direction'));
?>
<div class="com-contact-category__items uk-card uk-card-secondary">
    <form action="<?php echo htmlspecialchars(Uri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">


            <table class="uk-table uk-table-striped uk-table-responsive" id="contactList">
                <caption class="visually-hidden">
                    <?php echo Text::_('COM_CONTACT_TABLE_CAPTION'); ?>,
                </caption>
                <thead<?php echo $this->params->get('show_headings', '1') ? '' : ' class="visually-hidden"'; ?>>
                    <tr>
                        <th scope="col" id="categorylist_header_title">
                            <?php echo Text::_('Pos.'); ?>
                        </th>
                        <th scope="col">
                            <?php echo Text::_('Spielername'); ?>
                        </th>
                        <th scope="col">
                            <?php echo Text::_('Punkte'); ?>
                        </th>
                        <th scope="col">
                            Tendenz
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 0; ?>
                    <?php foreach ($this->items as $i => $item) : ?>
                    <?php $counter++; ?>

                        <?php
                            if($item->positions != null)
                            {
                                $tendenz = json_decode($item->positions, true);
                                $lastTendency = end($tendenz);
                                $lastTendency = $lastTendency['tendency'];

                                switch ($lastTendency) {
                                    case 'same':
                                        $tendenz = '<svg class="tendencySVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="yellowgreen" d="M284.3 11.7c-15.6-15.6-40.9-15.6-56.6 0l-216 216c-15.6 15.6-15.6 40.9 0 56.6l216 216c15.6 15.6 40.9 15.6 56.6 0l216-216c15.6-15.6 15.6-40.9 0-56.6l-216-216z"/></svg>';
                                        break;
                                    case 'up':
                                        $tendenz = '<svg class="tendencySVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="green" d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>';
                                        break;
                                    case 'down':
                                        $tendenz = '<svg class="tendencySVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="red" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>';
                                        break;
                                    default:
                                        $tendenz = '<svg class="tendencySVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="yellowgreen" d="M284.3 11.7c-15.6-15.6-40.9-15.6-56.6 0l-216 216c-15.6 15.6-15.6 40.9 0 56.6l216 216c15.6 15.6 40.9 15.6 56.6 0l216-216c15.6-15.6 15.6-40.9 0-56.6l-216-216z"/></svg>';
                                        break;
                                }
                            }
                        ?>

                    <tr>
                        <td>
                           <?= $counter; ?>
                        </td>
                        <td>
                            <a href="<?php echo Route::_(RouteHelper::getContactRoute($item->slug, $item->catid, 'de-DE')); ?>">
                                <?php echo $this->escape($item->username); ?>
                            </a>
                        </td>
                        <td>
                            <?php echo $this->escape($item->user_total); ?>
                        </td>
                        <td>
                            <?php echo $tendenz; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>



        <?php if ($this->params->get('show_pagination', 2)) : ?>
            <div class="com-contact-category__pagination w-100">
                <?php if ($this->params->def('show_pagination_results', 1)) : ?>
                    <p class="com-contact-category__counter counter float-end pt-3 pe-2">
                        <?php echo $this->pagination->getPagesCounter(); ?>
                    </p>
                <?php endif; ?>

                <?php echo $this->pagination->getPagesLinks(); ?>
            </div>
        <?php endif; ?>
    </form>
</div>
