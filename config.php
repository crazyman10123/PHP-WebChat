<?php

//Set your configuration here. You can change the name of the bot, the prefix, the plugins, the location of the plugins,
//the admin username, the message of the day file, the rules file, and the chat file.
$systemName = "PHPWebChatBot: ";
$prefix = "/";
$plugins = array("help", "isup", "hello", "prefix", "rules", "version", "motd", "ban");
$pluginDir = "./plugins"; //Default is ./plugins
$admin = "";
$motd = file_get_contents('motd.txt'); //Default is motd.txt
$rules = file_get_contents('rules.txt'); //Default is rules.txt
$file = "chat.txt"; //Default is chat.txt

//DO NOT TOUCH ANY OF THIS.
$version = "Public Beta 1.0.0";

?>
