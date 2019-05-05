<?php

class CarTest extends PHPUnit_Framework_TestCase {

  public function test_set_num_of_wheels(){

    $result = (new Plane)->set_num_of_wheels();
    var_dump($result);

  }

  public function test_set_num_of_passengers(){

    $result = (new Plane)->set_num_of_passengers();
    var_dump($result);

  }

}
