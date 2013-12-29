<?php
/*
 * Project Name:            Euphoria Theme
 * Project Description:     Theme for Elgg 1.8
 * Author:                  Shane Barron - SocialApparatus
 * License:                 GNU General Public License (GPL) version 2
 * Website:                 http://socia.us
 * Contact:                 sales@socia.us
 * 
 * File Version:            1.0
 * Last Updated:            5/11/2013
 */
$default_items = elgg_extract('default', $vars['menu'], array());
$videos=elgg_get_plugin_setting('videos','euphorianic');
$blogs=elgg_get_plugin_setting('blogs','euphorianic');
$fotos=elgg_get_plugin_setting('fotos','euphorianic');
$bookmarks=elgg_get_plugin_setting('bookmarks','euphorianic');
$newsletter=elgg_get_plugin_setting('newsletter','euphorianic');

echo '<ul>';
foreach ($default_items as $menu_item) {
    echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}
if ($blogs == 'yes') {
 echo "<li><a href='" . elgg_get_site_url() . "blog/all" . "'>" . elgg_echo('euphorianic:blogs') . "</a></li>";
}
if ($fotos == 'yes') {
 echo "<li><a href='" . elgg_get_site_url() . "photos/siteimagesall" . "'>" . elgg_echo('euphorianic:fotos') . "</a></li>";
}
if ($videos == 'yes') {
 echo "<li><a href='" . elgg_get_site_url() . "videolist/all" . "'>" . elgg_echo('euphorianic:videos') . "</a></li>";
}
if ($bookmarks == 'yes') {
 echo "<li><a href='" . elgg_get_site_url() . "bookmarks/all" . "'>" . elgg_echo('euphorianic:bookmarks') . "</a></li>";
}
if ($newsletter == 'yes') {
 echo "<li><a href='" . elgg_get_site_url() . "newsletter/all" . "'>" . elgg_echo('euphorianic:newsletter') . "</a></li>";
}
echo '</ul>';
