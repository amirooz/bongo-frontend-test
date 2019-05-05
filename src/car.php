<?php

class Car implements Vehicle {

    public function set_num_of_wheels(){
      return 4;
    }

    public function set_num_of_passengers(){
      return 4;
    }

    public function has_gas(){
      return true;
    }

}
