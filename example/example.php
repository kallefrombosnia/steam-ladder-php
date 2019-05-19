<?php

include_once('../src/Client.php');

// Init our Client object, also write your API key here
$client = new Client('your api key');


// function getProfile returns all info about steam profile
// param.  steamid64 - required
$client->getProfile('76561198190625269');

// function refreshProfile updates profile info and returns new info about profile
// param.  steamid64 - required
$client->refreshProfile('76561198190625269');

// function getLadder returns ladder info, also you can filter by using country codes or regions
// param.  type - required
// param.  region or country code - optional
$client->getLadder('xp');

$client->getLadder('xp', 'BA');

$client->getLadder('xp', 'europe');
