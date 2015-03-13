<?php
    if (!defined('CONSTRUCTOR')) return '';

    require_once 'includes/theme.php';
    require_once 'includes/plugin.php';

    $plugins = get_plugins();
    error_reporting(E_ALL);
?>
    
<div id="debug">
    <div class="updated">
    <h4>Debug Information</h4>
    <hr/>
    OS: <strong><?php echo PHP_OS?></strong><br />
    PHP: <strong><?php echo phpversion()?></strong><br />
    Safe Mode: <strong><?php echo ini_get('safe_mode')?'yes':'no'; ?></strong><br />
    
    Wordpress: <strong><?php echo $wp_version?></strong><br />
    <?php if (defined('WPLANG'))
        echo 'localization: <strong>'. WPLANG .'</strong><br/>';
    ?>
    Theme: <?php echo wp_get_theme()->get('Name') ?> - <strong><?php echo wp_get_theme()->get('Version') ?></strong><br />
    Plugins (active):
    <ol>
    <?php foreach ($plugins as $file => $plugin) : ?>
    <?php if (is_plugin_active($file)) : ?>
        <li><?php echo $plugin['Name'] .' - '.$plugin['Version'];?></li>
    <?php endif; ?>
    <?php endforeach; ?>
    </ol>
    </div>
</div>