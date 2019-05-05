<?php include_once('header.php') ?>
<div class="dashboard container">
  <div class="row">
    <div class="col s12 m12">
      <ul class="collapsible expandable">
        <li class="active">
          <div class="collapsible-header"><i class="material-icons">filter_1</i>Question 1</div>
          <div class="collapsible-body">
            <span>
              <p>Ques: Write a function that detects if two strings are an anagram e.g. ‘bleat’ and ‘table’ are
anagrams but ‘eat’ and ‘tar’ are not.</p>
              <a href="anagram.php" class="btn blue lithen-1 z-depth-0">Check Answer <i class="material-icons right">send</i></a>
            </span>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">filter_2</i>Question 2</div>
          <div class="collapsible-body">
            <span>
              Ques 2: Explain the design pattern used in following:<br /><br />
              <pre>
                <code>
                  interface Vehicle { <br />
                    int set_num_of_wheels() <br />
                    int set_num_of_passengers() <br />
                    boolean has_gas() <br />
                  }
                </code>
              </pre>
              <br /><br />
              a) Explain how can you use the pattern to create car and plane class? <br />
              b) Use a different design pattern for this solution.<br /><br />
              <a href="designPattern.php" class="btn blue lithen-1 z-depth-0">Check Answer <i class="material-icons right">send</i></a>
            </span>
          </div>
        </li>

        <li>
          <div class="collapsible-header"><i class="material-icons">filter_3</i>Question 3</div>
          <div class="collapsible-body">
            <span>
              Write a video player application with ‘Play’, ‘Forward’ , ‘Rewind’ functionalities. Please
write pseudocode for this program and explain the design pattern you will use to develop
these three functionalities.<br /><br />
              <a href="videoPlayer.php" class="btn blue lithen-1 z-depth-0">Check Answer <i class="material-icons right">send</i></a>
            </span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
</script>
<?php include_once('footer.php') ?>
