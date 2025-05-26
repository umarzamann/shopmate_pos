<?php
class greeting {
  public static function welcome() {
    $a = "Hello World!";
    return $a;
  }

  public function myfun() {
   return self::welcome();
  }
}
$a = new greeting();
$b = $a->myfun();
echo $b;


?>