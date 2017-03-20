<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
* Moodle's guxdi theme, an example of how to make a Bootstrap theme
*
* DO NOT MODIFY THIS THEME!
* COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
*
* For full information about creating Moodle themes, see:
* http://docs.moodle.org/dev/Themes_2.0
*
* @package    theme_guxdi
* @copyright  2017 Cooperativa Geneos - geneos.com.ar
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

//$settings = null;
defined('MOODLE_INTERNAL') || die;
$settings = null;
$ADMIN->add('themes', new admin_category('theme_guxdi', 'guxdi'));

// General setting page.
$temp = new admin_settingpage('theme_guxdi_general',  get_string('generalsettings', 'theme_guxdi'));

// Logo file setting.
$name = 'theme_guxdi/logo';
$title = get_string('logo', 'theme_guxdi');
$description = get_string('logodesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Site color.
$name = 'theme_guxdi/sitecolor';
$title = get_string('sitecolor', 'theme_guxdi');
$description = get_string('sitecolordesc', 'theme_guxdi');
$default = '#3e65a0';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$temp->add($setting);

// Custom CSS file.
$name = 'theme_guxdi/customcss';
$title = get_string('customcss', 'theme_guxdi');
$description = get_string('customcssdesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Back to top button.
$name = 'theme_guxdi/backtotop';
$title = get_string('backtotop', 'theme_guxdi');
$description = get_string('backtotopdesc', 'theme_guxdi');
$default = '1';
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);

// Read-me.
$readme = new moodle_url('/theme/guxdi/README.txt');
$readme = html_writer::link($readme, get_string('readme_click', 'theme_guxdi'), array('target' => '_blank'));
$temp->add(new admin_setting_heading('theme_guxdi_generalreadme', get_string('readme_title', 'theme_guxdi'),
get_string('readme_desc', 'theme_guxdi', array('url' => $readme))));
$ADMIN->add('theme_guxdi', $temp);
// Frontpage Banner setting page.
$temp = new admin_settingpage('theme_guxdi_frontpagebanner',  get_string('frontpagebanner', 'theme_guxdi'));

// Headerimg file setting.
$name = 'theme_guxdi/headerimg';
$title = get_string('headerimg', 'theme_guxdi');
$description = get_string('headerimgdesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerimg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Bannerheading.
$name = 'theme_guxdi/bannerheading';
$title = get_string('bannerheading', 'theme_guxdi');
$description = get_string('bannerheadingdesc', 'theme_guxdi');
$default = 'Perfect Learning System';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Bannercontent.
$name = 'theme_guxdi/bannercontent';
$title = get_string('bannercontent', 'theme_guxdi');
$description = get_string('bannercontentdesc', 'theme_guxdi');
$default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Banner Font color.
$name = 'theme_guxdi/bannerfontcolor';
$title = get_string('bannerfontcolor', 'theme_guxdi');
$description = get_string('bannerfontcolordesc', 'theme_guxdi');
$default = '#ffffff';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$temp->add($setting);


// Read-me.
$readme = new moodle_url('/theme/guxdi/README.txt');
$readme = html_writer::link($readme, get_string('readme_click', 'theme_guxdi'), array('target' => '_blank'));

$temp->add(new admin_setting_heading('theme_guxdi_generalreadme', get_string('readme_title', 'theme_guxdi'),
get_string('readme_desc', 'theme_guxdi', array('url' => $readme))));
$ADMIN->add('theme_guxdi', $temp);

// Marketing Box setting page.
$temp = new admin_settingpage('theme_guxdi_marketingbox',  get_string('marketingbox', 'theme_guxdi'));
$name = 'theme_guxdi/displaymarketingbox';
$title = get_string('displaymarketingbox', 'theme_guxdi');
$description = get_string('displaymarketingboxdesc', 'theme_guxdi');
$default = 1;
$choices = array(0 => 'No', 1 => 'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Marketing1icon.
$name = 'theme_guxdi/marketing1icon';
$title = get_string('marketing1icon', 'theme_guxdi');
$description = get_string('marketing1icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1heading.
$name = 'theme_guxdi/marketing1heading';
$title = get_string('marketing1heading', 'theme_guxdi');
$description = get_string('marketing1headingdesc', 'theme_guxdi');
$default = 'We Provide';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1subheading.
$name = 'theme_guxdi/marketing1subheading';
$title = get_string('marketing1subheading', 'theme_guxdi');
$description = get_string('marketing1subheadingdesc', 'theme_guxdi');
$default = 'Forum And Chat';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1content.
$name = 'theme_guxdi/marketing1content';
$title = get_string('marketing1content', 'theme_guxdi');
$description = get_string('marketing1contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1url.
$name = 'theme_guxdi/marketing1url';
$title = get_string('marketing1url', 'theme_guxdi');
$description = get_string('marketing1urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2icon.
$name = 'theme_guxdi/marketing2icon';
$title = get_string('marketing2icon', 'theme_guxdi');
$description = get_string('marketing2icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2heading.
$name = 'theme_guxdi/marketing2heading';
$title = get_string('marketing2heading', 'theme_guxdi');
$description = get_string('marketing2headingdesc', 'theme_guxdi');
$default = 'We serve';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2subheading.
$name = 'theme_guxdi/marketing2subheading';
$title = get_string('marketing2subheading', 'theme_guxdi');
$description = get_string('marketing2subheadingdesc', 'theme_guxdi');
$default = 'online courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2content.
$name = 'theme_guxdi/marketing2content';
$title = get_string('marketing2content', 'theme_guxdi');
$description = get_string('marketing2contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2url.
$name = 'theme_guxdi/marketing2url';
$title = get_string('marketing2url', 'theme_guxdi');
$description = get_string('marketing2urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3icon.
$name = 'theme_guxdi/marketing3icon';
$title = get_string('marketing3icon', 'theme_guxdi');
$description = get_string('marketing3icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3heading.
$name = 'theme_guxdi/marketing3heading';
$title = get_string('marketing3heading', 'theme_guxdi');
$description = get_string('marketing3headingdesc', 'theme_guxdi');
$default = 'Fast online';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3subheading.
$name = 'theme_guxdi/marketing3subheading';
$title = get_string('marketing3subheading', 'theme_guxdi');
$description = get_string('marketing3subheadingdesc', 'theme_guxdi');
$default = 'support';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3content.
$name = 'theme_guxdi/marketing3content';
$title = get_string('marketing3content', 'theme_guxdi');
$description = get_string('marketing3contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3url.
$name = 'theme_guxdi/marketing3url';
$title = get_string('marketing3url', 'theme_guxdi');
$description = get_string('marketing3urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4icon.
$name = 'theme_guxdi/marketing4icon';
$title = get_string('marketing4icon', 'theme_guxdi');
$description = get_string('marketing4icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing4icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4heading.
$name = 'theme_guxdi/marketing4heading';
$title = get_string('marketing4heading', 'theme_guxdi');
$description = get_string('marketing4headingdesc', 'theme_guxdi');
$default = 'Ask que';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4subheading.
$name = 'theme_guxdi/marketing4subheading';
$title = get_string('marketing4subheading', 'theme_guxdi');
$description = get_string('marketing4subheadingdesc', 'theme_guxdi');
$default = 'we give you answere';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4content.
$name = 'theme_guxdi/marketing4content';
$title = get_string('marketing4content', 'theme_guxdi');
$description = get_string('marketing4contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4url.
$name = 'theme_guxdi/marketing4url';
$title = get_string('marketing4url', 'theme_guxdi');
$description = get_string('marketing4urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Read-me.
$readme = new moodle_url('/theme/guxdi/README.txt');
$readme = html_writer::link($readme, get_string('readme_click', 'theme_guxdi'), array('target' => '_blank'));

$temp->add(new admin_setting_heading('theme_guxdi_generalreadme', get_string('readme_title', 'theme_guxdi'),
get_string('readme_desc', 'theme_guxdi', array('url' => $readme))));
$ADMIN->add('theme_guxdi', $temp);

// Main Box setting page.
$temp = new admin_settingpage('theme_guxdi_mainbox',  get_string('mainbox', 'theme_guxdi'));
$name = 'theme_guxdi/displaymainbox';
$title = get_string('displaymainbox', 'theme_guxdi');
$description = get_string('displaymainboxdesc', 'theme_guxdi');
$default = 1;
$choices = array(0 => 'No', 1 => 'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Mainheading.
$name = 'theme_guxdi/mainheading';
$title = get_string('mainheading', 'theme_guxdi');
$description = get_string('mainheadingdesc', 'theme_guxdi');
$default = 'Reviews for MDLMS';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Maincontent.
$name = 'theme_guxdi/maincontent';
$title = get_string('maincontent', 'theme_guxdi');
$description = get_string('maincontentdesc', 'theme_guxdi');
$default = 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox1icon.
$name = 'theme_guxdi/mainbox1icon';
$title = get_string('mainbox1icon', 'theme_guxdi');
$description = get_string('mainbox1icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox1icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox1heading.
$name = 'theme_guxdi/mainbox1heading';
$title = get_string('mainbox1heading', 'theme_guxdi');
$description = get_string('mainbox1headingdesc', 'theme_guxdi');
$default = 'All Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox1content.
$name = 'theme_guxdi/mainbox1content';
$title = get_string('mainbox1content', 'theme_guxdi');
$description = get_string('mainbox1contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox1url.
$name = 'theme_guxdi/mainbox1url';
$title = get_string('mainbox1url', 'theme_guxdi');
$description = get_string('mainbox1urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox2icon.
$name = 'theme_guxdi/mainbox2icon';
$title = get_string('mainbox2icon', 'theme_guxdi');
$description = get_string('mainbox2icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox2icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox2heading.
$name = 'theme_guxdi/mainbox2heading';
$title = get_string('mainbox2heading', 'theme_guxdi');
$description = get_string('mainbox2headingdesc', 'theme_guxdi');
$default = 'Messages';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox2content.
$name = 'theme_guxdi/mainbox2content';
$title = get_string('mainbox2content', 'theme_guxdi');
$description = get_string('mainbox2contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox2url.
$name = 'theme_guxdi/mainbox2url';
$title = get_string('mainbox2url', 'theme_guxdi');
$description = get_string('mainbox2urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox3icon.
$name = 'theme_guxdi/mainbox3icon';
$title = get_string('mainbox3icon', 'theme_guxdi');
$description = get_string('mainbox3icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox3icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox3heading.
$name = 'theme_guxdi/mainbox3heading';
$title = get_string('mainbox3heading', 'theme_guxdi');
$description = get_string('mainbox3headingdesc', 'theme_guxdi');
$default = 'Forum';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox3content.
$name = 'theme_guxdi/mainbox3content';
$title = get_string('mainbox3content', 'theme_guxdi');
$description = get_string('mainbox3contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox3url.
$name = 'theme_guxdi/mainbox3url';
$title = get_string('mainbox3url', 'theme_guxdi');
$description = get_string('mainbox3urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox4icon.
$name = 'theme_guxdi/mainbox4icon';
$title = get_string('mainbox4icon', 'theme_guxdi');
$description = get_string('mainbox4icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox4icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox4heading.
$name = 'theme_guxdi/mainbox4heading';
$title = get_string('mainbox4heading', 'theme_guxdi');
$description = get_string('mainbox4headingdesc', 'theme_guxdi');
$default = 'Help';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox4content.
$name = 'theme_guxdi/mainbox4content';
$title = get_string('mainbox4content', 'theme_guxdi');
$description = get_string('mainbox4contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mainbox4url.
$name = 'theme_guxdi/mainbox4url';
$title = get_string('mainbox4url', 'theme_guxdi');
$description = get_string('mainbox4urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

/* START ADDED MAINBOXES */
// mainbox5icon.
$name = 'theme_guxdi/mainbox5icon';
$title = get_string('mainbox5icon', 'theme_guxdi');
$description = get_string('mainbox5icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox5icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox5heading.
$name = 'theme_guxdi/mainbox5heading';
$title = get_string('mainbox5heading', 'theme_guxdi');
$description = get_string('mainbox5headingdesc', 'theme_guxdi');
$default = 'All Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox5content.
$name = 'theme_guxdi/mainbox5content';
$title = get_string('mainbox5content', 'theme_guxdi');
$description = get_string('mainbox5contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox5url.
$name = 'theme_guxdi/mainbox5url';
$title = get_string('mainbox5url', 'theme_guxdi');
$description = get_string('mainbox5urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox6icon.
$name = 'theme_guxdi/mainbox6icon';
$title = get_string('mainbox6icon', 'theme_guxdi');
$description = get_string('mainbox6icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox6icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox6heading.
$name = 'theme_guxdi/mainbox6heading';
$title = get_string('mainbox6heading', 'theme_guxdi');
$description = get_string('mainbox6headingdesc', 'theme_guxdi');
$default = 'All Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox6content.
$name = 'theme_guxdi/mainbox6content';
$title = get_string('mainbox6content', 'theme_guxdi');
$description = get_string('mainbox6contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox6url.
$name = 'theme_guxdi/mainbox6url';
$title = get_string('mainbox6url', 'theme_guxdi');
$description = get_string('mainbox6urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox7icon.
$name = 'theme_guxdi/mainbox7icon';
$title = get_string('mainbox7icon', 'theme_guxdi');
$description = get_string('mainbox7icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox7icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox7heading.
$name = 'theme_guxdi/mainbox7heading';
$title = get_string('mainbox7heading', 'theme_guxdi');
$description = get_string('mainbox7headingdesc', 'theme_guxdi');
$default = 'All Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox7content.
$name = 'theme_guxdi/mainbox7content';
$title = get_string('mainbox7content', 'theme_guxdi');
$description = get_string('mainbox7contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox7url.
$name = 'theme_guxdi/mainbox7url';
$title = get_string('mainbox7url', 'theme_guxdi');
$description = get_string('mainbox7urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox8icon.
$name = 'theme_guxdi/mainbox8icon';
$title = get_string('mainbox8icon', 'theme_guxdi');
$description = get_string('mainbox8icondesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox8icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox8heading.
$name = 'theme_guxdi/mainbox8heading';
$title = get_string('mainbox8heading', 'theme_guxdi');
$description = get_string('mainbox8headingdesc', 'theme_guxdi');
$default = 'All Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox8content.
$name = 'theme_guxdi/mainbox8content';
$title = get_string('mainbox8content', 'theme_guxdi');
$description = get_string('mainbox8contentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mainbox8url.
$name = 'theme_guxdi/mainbox8url';
$title = get_string('mainbox8url', 'theme_guxdi');
$description = get_string('mainbox8urldesc', 'theme_guxdi');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

/* END ADDED MAINBOXES */

// Read-me.
$readme = new moodle_url('/theme/guxdi/README.txt');
$readme = html_writer::link($readme, get_string('readme_click', 'theme_guxdi'), array('target' => '_blank'));

$temp->add(new admin_setting_heading('theme_guxdi_generalreadme', get_string('readme_title', 'theme_guxdi'),
get_string('readme_desc', 'theme_guxdi', array('url' => $readme))));
$ADMIN->add('theme_guxdi', $temp);

// Footer setting page.
$temp = new admin_settingpage('theme_guxdi_footersettings',  get_string('footersettings', 'theme_guxdi'));

// Getintouch.
$name = 'theme_guxdi/getintouch';
$title = get_string('getintouch', 'theme_guxdi');
$description = get_string('getintouchdesc', 'theme_guxdi');
$default = 'get in touch with us';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Getintouchcontent.
$name = 'theme_guxdi/getintouchcontent';
$title = get_string('getintouchcontent', 'theme_guxdi');
$description = get_string('getintouchcontentdesc', 'theme_guxdi');
$default = 'Lorem Ipsum is simply dummy text of the printing.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Address.
$name = 'theme_guxdi/address';
$title = get_string('address', 'theme_guxdi');
$description = get_string('addressdesc', 'theme_guxdi');
$default = 'Address : Jst, Usrp 123, London UK';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mobile.
$name = 'theme_guxdi/mobile';
$title = get_string('mobile', 'theme_guxdi');
$description = get_string('mobiledesc', 'theme_guxdi');
$default = 'Mobile : 0012345678';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Mail.
$name = 'theme_guxdi/mail';
$title = get_string('mail', 'theme_guxdi');
$description = get_string('maildesc', 'theme_guxdi');
$default = 'Email : info@guxdi.com';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Phone.
$name = 'theme_guxdi/phone';
$title = get_string('phone', 'theme_guxdi');
$description = get_string('phonedesc', 'theme_guxdi');
$default = 'Phone : 011-1234567';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Siteheading.
$name = 'theme_guxdi/siteheading';
$title = get_string('siteheading', 'theme_guxdi');
$description = get_string('siteheadingdesc', 'theme_guxdi');
$default = 'edu hub';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Sitecontent.
$name = 'theme_guxdi/sitecontent';
$title = get_string('sitecontent', 'theme_guxdi');
$description = get_string('sitecontentdesc', 'theme_guxdi');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply random text.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Facebook url setting.
$name = 'theme_guxdi/facebook';
$title = get_string('facebook', 'theme_guxdi');
$description = get_string('facebookdesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Twitter url setting.
$name = 'theme_guxdi/twitter';
$title = get_string('twitter', 'theme_guxdi');
$description = get_string('twitterdesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Pintirest url setting.
$name = 'theme_guxdi/pintirest';
$title = get_string('pintirest', 'theme_guxdi');
$description = get_string('pintirestdesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Googleplus url setting.
$name = 'theme_guxdi/googleplus';
$title = get_string('googleplus', 'theme_guxdi');
$description = get_string('googleplusdesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Linkdin url setting.
$name = 'theme_guxdi/linkdin';
$title = get_string('linkdin', 'theme_guxdi');
$description = get_string('linkdindesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Copyright setting.
$name = 'theme_guxdi/copyright';
$title = get_string('copyright', 'theme_guxdi');
$description = get_string('copyrightdesc', 'theme_guxdi');
$default = 'ThemeCaters';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);

// Footerimg file setting.
$name = 'theme_guxdi/footerimg';
$title = get_string('footerimg', 'theme_guxdi');
$description = get_string('footerimgdesc', 'theme_guxdi');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'footerimg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Footnote setting.
$name = 'theme_guxdi/footnote';
$title = get_string('footnote', 'theme_guxdi');
$description = get_string('footnotedesc', 'theme_guxdi');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Read-me.
$readme = new moodle_url('/theme/guxdi/README.txt');
$readme = html_writer::link($readme, get_string('readme_click', 'theme_guxdi'), array('target' => '_blank'));
$temp->add(new admin_setting_heading('theme_guxdi_generalreadme', get_string('readme_title', 'theme_guxdi'),
get_string('readme_desc', 'theme_guxdi', array('url' => $readme))));
$ADMIN->add('theme_guxdi', $temp);
