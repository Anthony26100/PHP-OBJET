<?php


interface Test {

  public function method1();
  public function method2();
  public function method3();

}

class Cci implements Test { 

  public function method1() {
    echo "appel method1".'<br>';
  }
  public function method2() {
    echo "appel method2".'<br>';
  }
  public function method3() {
    echo "appel method3".'<br>';
  }
}


$cci = new Cci();
echo $cci->method1();
echo $cci->method2();
echo $cci->method3();



