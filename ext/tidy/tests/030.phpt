--TEST--
getConfig() method - basic test for getConfig()
--CREDITS--
Christian Wenz <wenz@php.net>
--SKIPIF--
<?php
  if (!extension_loaded('tidy')) die ('skip tidy not present');
?>
--FILE--
<?php
$buffer = '<html></html>';
$config = array(
  'indent' => true, // AutoBool
  'indent-attributes' => true, // Boolean
  'indent-spaces' => 3, // Integer
  'language' => 'de'); // String
$tidy = new tidy();
$tidy->parseString($buffer, $config);
$c = $tidy->getConfig();
var_dump($c['indent']);
var_dump($c['indent-attributes']);
var_dump($c['indent-spaces']);
var_dump($c['language']);
?>
--EXPECTF--
int(1)
bool(true)
int(3)
%s(2) "de"
