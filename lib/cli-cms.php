<?php

/*

Подключение CMS Bitrix

Использование:
require('lib/cli-cms.php');

*/


require(__DIR__ . '/index.php');
$cli = new \Bitrixcli\BitrixCMS();
$cli->getConfig();
$_SERVER["DOCUMENT_ROOT"] = $cli->getRootDir();

define("LANGUAGE_ID", "ru"); // TODO заполнять из параметров вызова и/или переменной окружения
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");