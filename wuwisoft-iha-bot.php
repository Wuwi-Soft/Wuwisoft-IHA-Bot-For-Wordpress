<?php

/*
Plugin Name: Wuwisoft Iha Bot
Plugin URI: https://wuwisoft.com/wordpress/plugins/wuwisoft-iha-bot
Description: Iha Haber ajansı rss otomasyon bot
Version: 1.0
Author: Eren Küçük
Author URI: https://wuwisoft.com/teams/eren-kucuk
License: A "Slug" license name e.g. GPL2
*/

include('lib/wuwisoft-functions.php');
include('wuwi.loader.php');


$IHAUrl = $wuwisoft->urlGenerator();

var_dump($IHAUrl);

wuwisoft_getIhaCurl($IHAUrl);

?>
