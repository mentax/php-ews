<?php

require_once "vendor/autoload.php";

use jamesiarmes\PEWS\API\Type;
use jamesiarmes\PEWS\Mail\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mail = $api->getMailItems();
