<?php
/*!
 * Featured Calendar Maker v1.0
 * Copyright 2020 ToolsMakers
 * Docs & License: https://www.toolsmakers.com/
 */

namespace ToolsMakers;
require realpath(dirname(__FILE__)) . '/../../assets/vendors/calendarmaker/class/calendarMaker.php';

$cats       = filter_input(INPUT_POST, "categories", FILTER_SANITIZE_STRING);
$cust       = filter_input(INPUT_POST, "custom", FILTER_SANITIZE_STRING);
$lang       = filter_input(INPUT_POST, "calendarLang", FILTER_SANITIZE_STRING);
$name       = filter_input(INPUT_POST, "calendarName", FILTER_SANITIZE_STRING);
$desc       = filter_input(INPUT_POST, "calendarDesc", FILTER_SANITIZE_STRING);
$txcl       = filter_input(INPUT_POST, "colorTx", FILTER_SANITIZE_STRING);
$bgcl       = filter_input(INPUT_POST, "colorBg", FILTER_SANITIZE_STRING);

use \ToolsMakers;
$cA = new ToolsMakers\calendarMaker();

$arr = [];
$arr['cats']        = $cats;
$arr['cust']        = $cust;
$arr['lang']        = $lang;
$arr['name']        = $name;
$arr['desc']        = $desc;
$arr['textColor']   = $txcl;
$arr['bgColor']     = $bgcl;

echo json_encode( $cA->newCalendar($arr) );