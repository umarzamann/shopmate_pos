<?php
abstract class ParentClass {
  abstract public function someMethod1();
  abstract protected function someMethod2($name, $color);
  abstract public function someMethod3() : string;
  public function my_name(){
    echo "hidwdj";
  }
}

class childclass extends  ParentClass{
 public function someMethod2($a,$b,$c = ''){
    //
 }

}
?>