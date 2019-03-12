<?php
//Version 4.0
$steamauth['apikey'] = "0AFE8696D2B01F4ADC359518A7C9D8A6"; // Your Steam WebAPI-Key found at https://steamcommunity.com/dev/apikey
$steamauth['domainname'] = "http://localhost/ClydeyINC/"; // The main URL of your website displayed in the login page
$steamauth['logoutpage'] = "http://localhost/ClydeyINC/"; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$steamauth['loginpage'] = "http://localhost/ClydeyINC/"; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!

// System stuff
if (empty($steamauth['apikey'])) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply an API-Key!<br>Find this in steamauth/SteamConfig.php, Find the '<b>\$steamauth['apikey']</b>' Array. </div>");}
if (empty($steamauth['domainname'])) {$steamauth['domainname'] = $_SERVER['SERVER_NAME'];}
if (empty($steamauth['logoutpage'])) {$steamauth['logoutpage'] = $_SERVER['PHP_SELF'];}
if (empty($steamauth['loginpage'])) {$steamauth['loginpage'] = $_SERVER['PHP_SELF'];}
?>
