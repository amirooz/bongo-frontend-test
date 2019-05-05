<?php include_once('header.php') ?>
    <div class="dashboard container">
      <div class="row">
        <div class="col s12 m6">
          <fieldset>
            <legend><h5 class="blue-text">Anagram Test Q1</h5></legend>
            <form action="" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Enter a word..." id="str_one" name="str_one" type="text" class="validate" required>
                  <label for="str_one">First String</label>
                </div>
                <div class="input-field col s6">
                  <input placeholder="Enter a word..." id="str_two" name="str_two" type="text" class="validate" required>
                  <label for="str_two">Second String</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button type="submit" name="submit" class="btn blue lithen-1 z-depth-0">Check Anagram <i class="material-icons right">send</i></button>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m8">
                  <span class="grey-text">The Test is Case Sensitive.</span>
                </div>
              </div>
            </form>
          </fieldset>
        </div>
        <div class="col s12 m5 offset-m1">
          <fieldset>
            <legend><h5 class="blue-text">Result</h5></legend>
              <?php
                $str_one = ''; $str_two = '';
                if(isset($_POST['submit'])){
                  $str_one = $_POST['str_one'];
                  $str_two = $_POST['str_two'];

                  if (count_chars($str_one, 1) == count_chars($str_two, 1))
                        echo '<h4 class="green-text">Yes</h4>';
                    else
                        echo '<h4 class="red-text">No</h4>';
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
                  <p>I use the below inbuilt function to solve this problem:<br/><br/>
                  <b>count_chars():</b> this function generally has syntax count_chars(string, return_mode) is use to perform several operations related to string. This parameter is optional. It takes value to 0, 1, 2, 3, 4.</p>
                  <p>The idea to solve this problem using the above mentioned function is, to use value 1 i.e. in this chosen mode the above function will return an array with key value pairs, where keys are ASCII values and corresponding values will be the number of occurrences of that ASCII value. The array possess only those keys as ASCII values whose frequency is more than 0.</p>
                  <pre>
                    <code>
                        $str_one = ''; $str_two = '';
                        if(isset($_POST['submit'])){
                          $str_one = $_POST['str_one'];
                          $str_two = $_POST['str_two'];

                          if (count_chars($str_one, 1) == count_chars($str_two, 1))
                                echo 'Yes';
                            else
                                echo 'No';
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
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active blue"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="designPattern.php">2</a></li>
            <li class="waves-effect"><a href="videoPlayer.php">3</a></li>
            <li class="waves-effect"><a href="designPattern.php"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
      </div>
    </div>

<?php include_once('footer.php'); ?>
