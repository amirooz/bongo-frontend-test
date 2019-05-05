<?php include_once('header.php') ?>
<?php include_once('src/vehicle.php') ?>
<?php include_once('src/car.php') ?>
<?php include_once('src/plane.php') ?>
<div class="dashboard container">
  <div class="row">
    <div class="col s12 m6">
      <fieldset>
        <legend><h5 class="blue-text">Interface Q2</h5></legend>
        <form action="" method="post">
          <div class="row">
            <div class="input-field col s6">
              <button type="submit" name="carsubmit" class="btn blue lithen-1 z-depth-0">Car <i class="material-icons right">directions_car</i></button>
            </div>
            <div class="input-field col s6">
              <button type="submit" name="planesubmit" class="btn blue lithen-1 z-depth-0">Plane <i class="material-icons right">flight</i></button>
            </div>
          </div>
        </form>
      </fieldset>

    </div>
    <div class="col s12 m5 offset-m1">
      <fieldset>
        <legend><h5 class="blue-text">Result</h5></legend>
        <?php

          if(isset($_POST['carsubmit'])){
            $car = new Car();
            echo '<b>Number of wheels: '.$car->set_num_of_wheels().'</b><br/>';
            echo '<b>Number of passengers: '.$car->set_num_of_passengers().'</b><br/>';
            $gas = $car->has_gas();
            if($gas == 1){ echo '<b>Gas: Yes</b>';} else {echo '<b>Gas: No</b>';}
          }

          if(isset($_POST['planesubmit'])){
            $plane = new Plane();
            echo '<b>Number of wheels: '.$plane->set_num_of_wheels().'</b><br/>';
            echo '<b>Number of passengers: '.$plane->set_num_of_passengers().'</b><br/>';
            $gas = $plane->has_gas();
            if($gas == 1){ echo '<b>Gas: Yes</b>';} else {echo '<b>Gas: No</b>';}
          }

        ?>
      </fieldset>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m12">
      <ul class="collapsible expandable">
        <li>
          <div class="collapsible-header"><i class="material-icons">description</i>Explanation</div>
          <div class="collapsible-body">
            <span>
              <p>The given interface is a Java interface. But, I solved the task using PHP. An interface is used to specify what is to be done but not how it is to be done. For example, a Vehicle should have several components such as wheels, seats, fule(gas/oil). All types of vehicles, be it a car or a plane should have these components. In such a case, we can define an interface Vehicle where these various methods are specified but the definition of these methods are given in the classes like Car and Plane which implements the interface. A Java interface consists of only final static variables and abstract methods. No implementation is provided for the methods.</p>
              <p>The preceding example shows the interface Vehicle with three abstract methods. The set_num_of_wheels() and set_num_of_passengers() methods returns int type value and has_gas() returns boolean type. I have created two classes Car and Plane accordingly and implemented the Vehicle interface. </p>
              <pre>
                <code>
                  interface Vehicle {
                    public function set_num_of_wheels();
                    public function set_num_of_passengers();
                    public function has_gas();
                  }

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

                  if(isset($_POST['carsubmit'])){
                    $car = new Car();
                    echo 'Number of wheels: '.$car->set_num_of_wheels();
                    echo 'Number of passengers: '.$car->set_num_of_passengers();
                    $gas = $car->has_gas();
                    if($gas == 1){ echo 'Gas: Yes';} else {echo 'Gas: No';}
                  }

                  if(isset($_POST['planesubmit'])){
                    $plane = new Plane();
                    echo 'Number of wheels: '.$plane->set_num_of_wheels();
                    echo 'Number of passengers: '.$plane->set_num_of_passengers();
                    $gas = $plane->has_gas();
                    if($gas == 1){ echo 'Gas: Yes';} else {echo 'Gas: No';}
                  }
                </code>
              </pre>
            </span>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m12">
      <ul class="pagination center">
        <li class="waves-effect"><a href="anagram.php"><i class="material-icons">chevron_left</i></a></li>
        <li class="waves-effect"><a href="anagram.php">1</a></li>
        <li class="active blue"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="videoPlayer.php">3</a></li>
        <li class="waves-effect"><a href="videoPlayer.php"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>
  </div>
</div>

<?php include_once('footer.php') ?>
