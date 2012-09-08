<?php
//Easiest part of the system. This includes any listed plugin in the configuration file. Plugins must be in the plugin
//directory to work properly.
foreach($plugins as &$plugin) {
	include $pluginDir."/".$plugin.".php";
}
?>
