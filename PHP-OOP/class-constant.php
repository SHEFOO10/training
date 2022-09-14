<?php


class cnst {

  public const SHEFOO = "shefoo";

  static function callconst() {
    echo self::SHEFOO;
  }

}
// three ways to print constant

echo cnst::SHEFOO . "\n"; // this is number one that you can call it before making an object

$obj = new cnst();
echo $obj::SHEFOO . "\n"; // this call it from resolution [ :: ] operator.
$obj->callconst(); // This call it from function with self::[ Constant Name ]
// self indicate to class constants