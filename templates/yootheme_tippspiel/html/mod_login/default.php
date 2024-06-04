<?php

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;

HTMLHelper::_('behavior.keepalive');

// Disable extra button styling
if (isset($extraButtons)) {
    $assets = Factory::getApplication()->getDocument()->getWebAssetManager();
    if ($assets->assetExists('style', 'plg_system_webauthn.button')) {
        $assets->disableAsset('style', 'plg_system_webauthn.button');
    }
}

?>

<form id="login-form-<?= $module->id; ?>" action="<?= Route::_('index.php', true, $params->get('usesecure')) ?>" method="post">

    <?php if ($params->get('pretext')) : ?>
    <div class="uk-margin">
        <?= $params->get('pretext') ?>werwef
    </div>
    <?php endif ?>

    <div class="uk-margin">
        <input class="uk-input" type="text" name="username" autocomplete="username" size="18" placeholder="<?= Text::_('MOD_LOGIN_VALUE_USERNAME') ?>" aria-label="<?= Text::_('MOD_LOGIN_VALUE_USERNAME') ?>">
    </div>

    <div class="uk-margin">
        <input class="uk-input" type="password" name="password" autocomplete="current-password" size="18" placeholder="<?= Text::_('JGLOBAL_PASSWORD') ?>" aria-label="<?= Text::_('JGLOBAL_PASSWORD') ?>">
    </div>

    <?php if (PluginHelper::isEnabled('system', 'remember')) : ?>
    <div class="uk-margin">
        <label>
            <input type="checkbox" name="remember" value="yes" checked>
            <?= Text::_('MOD_LOGIN_REMEMBER_ME') ?>
        </label>
    </div>
    <?php endif ?>


    <div class="uk-margin">
        <button class="uk-button uk-button-primary uk-width-1-1" value="<?= Text::_('JLOGIN') ?>" name="Submit" type="submit"><?= Text::_('JLOGIN') ?></button>
    </div>

    <ul class="uk-list uk-margin-remove-bottom">
        <li><a href="<?= Route::_('index.php?option=com_users&view=reset') ?>"><?= Text::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD') ?></a></li>
        <li><a href="<?= Route::_('index.php?option=com_users&view=remind') ?>"><?= Text::_('MOD_LOGIN_FORGOT_YOUR_USERNAME') ?></a></li>
        <?php $usersConfig = ComponentHelper::getParams('com_users') ?>
        <?php if ($usersConfig->get('allowUserRegistration')) : ?>
        <li><a href="<?= Route::_('index.php?option=com_users&view=registration') ?>"><?= Text::_('MOD_LOGIN_REGISTER') ?></a></li>
        <?php endif ?>
    </ul>

    <?php if ($params->get('posttext')) : ?>
    <div class="uk-margin">
        <?= $params->get('posttext') ?>
    </div>
    <?php endif ?>

    <input type="hidden" name="option" value="com_users">
    <input type="hidden" name="task" value="user.login">
    <input type="hidden" name="return" value="<?= $return ?>">
    <?= HTMLHelper::_('form.token') ?>

</form>
