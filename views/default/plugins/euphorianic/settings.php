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
$hometext = $vars['entity']->hometext;
if (!$hometext) {
    $hometext = "<h1>Edit this home text in your admin panel.</h1>";
}
$nivo_theme = $vars['entity']->nivo_theme;
if (!$nivo_theme) {
    $nivo_theme = "theme-default";
}
$slide1 = $vars['entity']->slide1;
if (!$slide1) {
    $slide1 = elgg_get_site_url() . "mod/euphorianic/graphics/slide1.png";
}
$slide2 = $vars['entity']->slide2;
if (!$slide2) {
    $slide2 = elgg_get_site_url() . "mod/euphorianic/graphics/slide2.png";
}
$slide3 = $vars['entity']->slide3;
if (!$slide3) {
    $slide3 = elgg_get_site_url() . "mod/euphorianic/graphics/slide3.png";
}
$slide4 = $vars['entity']->slide4;
if (!$slide4) {
    $slide4 = elgg_get_site_url() . "mod/euphorianic/graphics/slide4.png";
}
$videos = $vars['entity']->videos;
if (!$videos) { $videos = 'no'; }		
$photos = $vars['entity']->photos;
if (!$photos) { $photos = 'no'; }		
$blogs = $vars['entity']->blogs;
if (!$blogs) { $blogs = 'no'; }		
$bookmarks = $vars['entity']->bookmarks;
if (!$bookmarks) { $bookmarks = 'no'; }		
$newsletter = $vars['entity']->newsletter;
if (!$newsletter) { $newsletter = 'no'; }		

echo "<label>Home text</label><br/>";
echo elgg_view("input/longtext", array(
    "name" => "params[hometext]",
    "value" => $hometext,
));
echo "<br/>";
echo "<label>Nivo Slider Theme</label><br/>";
echo elgg_view("input/dropdown", array(
    "name" => "params[nivo_theme]",
    "value" => $nivo_theme,
    "options_values" => array(
        "theme-default" => "Default",
        "theme-light" => "Light",
        "theme-dark" => "Dark",
        "theme-bar" => "Bar"
    )
));
echo "<br/>";
echo "<label>Link to slide 1 image</label><br/>";
echo elgg_view("input/text", array(
    "name" => "params[slide1]",
    "value" => $slide1
));
echo "<br/>";
echo "<label>Link to slide 2 image</label><br/>";
echo elgg_view("input/text", array(
    "name" => "params[slide2]",
    "value" => $slide2
));
echo "<br/>";
echo "<label>Link to slide 3 image</label><br/>";
echo elgg_view("input/text", array(
    "name" => "params[slide3]",
    "value" => $slide3
));
echo "<br/>";
echo "<label>Link to slide 4 image</label><br/>";
echo elgg_view("input/text", array(
    "name" => "params[slide4]",
    "value" => $slide4
));
echo "<br/>";
echo "<br/>";
echo "<label>" . elgg_echo('euphorianic:menu:select') . "</label><br/>";
echo "<div>";
	echo elgg_echo('euphorianic:blogs') . ' ';
	echo elgg_view('input/dropdown', array(
		'name' => 'params[blogs]',
		'options_values' => array(
			'no' => elgg_echo('euphorianic:menu:no'),
			'yes' => elgg_echo('euphorianic:menu:yes'),
		),
		'value' => $blogs,
	));
echo "</div>";
echo "<div>";
	echo elgg_echo('euphorianic:videos') . ' ';
	echo elgg_view('input/dropdown', array(
		'name' => 'params[videos]',
		'options_values' => array(
			'no' => elgg_echo('euphorianic:menu:no'),
			'yes' => elgg_echo('euphorianic:menu:yes'),
		),
		'value' => $videos,
	));
echo "</div>";
echo "<div>";
	echo elgg_echo('euphorianic:photos') . ' ';
	echo elgg_view('input/dropdown', array(
		'name' => 'params[photos]',
		'options_values' => array(
			'no' => elgg_echo('euphorianic:menu:no'),
			'yes' => elgg_echo('euphorianic:menu:yes'),
		),
		'value' => $photos,
	));
echo "</div>";
echo "<div>";
	echo elgg_echo('euphorianic:bookmarks') . ' ';
	echo elgg_view('input/dropdown', array(
		'name' => 'params[bookmarks]',
		'options_values' => array(
			'no' => elgg_echo('euphorianic:menu:no'),
			'yes' => elgg_echo('euphorianic:menu:yes'),
		),
		'value' => $bookmarks,
	));
echo "</div>";
echo "<div>";
	echo elgg_echo('euphorianic:newsletter') . ' ';
	echo elgg_view('input/dropdown', array(
		'name' => 'params[newsletter]',
		'options_values' => array(
			'no' => elgg_echo('euphorianic:menu:no'),
			'yes' => elgg_echo('euphorianic:menu:yes'),
		),
		'value' => $newsletter,
	));
echo "</div>";
?>
