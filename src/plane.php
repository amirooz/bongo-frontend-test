<?php

class Plane implements Vehicle {

  public function set_num_of_wheels(){
    return 3;
  }

  public function set_num_of_passengers(){
    return 450;
  }

  public function has_gas(){
    return true;
  }

}
