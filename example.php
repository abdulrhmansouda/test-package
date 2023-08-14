<?php

require_once('src/RandomString/RandomString.php');

use RandomString\RandomString;

$random_string = RandomString::generateRandomString();
echo $random_string;