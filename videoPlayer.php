<?php include_once('header.php') ?>
<div class="dashboard container">
  <div class="row">
    <div class="col s12 m6">
      <div id="controls">
          <ul>
              <li>

                  <h5>Player Initialization</h5>

                  <pre>
                      <code class="js">
                          var player;

                          function onYouTubeIframeAPIReady() {
                              player = new YT.Player('video-placeholder', {
                                  width: 600,
                                  height: 400,
                                  videoId: 'Xa0Q0J5tOP0',
                                  playerVars: {
                                      color: 'white',
                                      playlist: 'taJ60kskkns,FG0fTKAqZ5g'
                                  },
                                  events: {
                                      onReady: initialize
                                  }
                              });
                          }

                          function initialize(){

                              // Update the controls on load
                              updateTimerDisplay();
                              updateProgressBar();

                              // Clear any old interval.
                              clearInterval(time_update_interval);

                              // Start interval to update elapsed time display and
                              // the elapsed part of the progress bar every second.
                              time_update_interval = setInterval(function () {
                                  updateTimerDisplay();
                                  updateProgressBar();
                              }, 1000)

                          }
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Duration</h5>

                  <p><span id="current-time">0:00</span> / <span id="duration">0:00</span></p>

                  <pre>
                      <code class="js">
                          // This function is called by initialize()
                          function updateTimerDisplay(){
                              // Update current time text display.
                              $('#current-time').text(formatTime( player.getCurrentTime() ));
                              $('#duration').text(formatTime( player.getDuration() ));
                          }

                          function formatTime(time){
                              time = Math.round(time);

                              var minutes = Math.floor(time / 60),
                              seconds = time - minutes * 60;

                              seconds = seconds < 10 ? '0' + seconds : seconds;

                              return minutes + ":" + seconds;
                          }
                      </code>
                  </pre>

              </li>
              <li>

                  <h5>Progress Bar</h5>

                  <input type="range" id="progress-bar" value="0">

                  <pre>
                      <code class="js">
                          $('#progress-bar').on('mouseup touchend', function (e) {

                              // Calculate the new time for the video.
                              // new time in seconds = total duration in seconds * ( value of range input / 100 )
                              var newTime = player.getDuration() * (e.target.value / 100);

                              // Skip video to new time.
                              player.seekTo(newTime);

                          });

                          // This function is called by initialize()
                          function updateProgressBar(){
                              // Update the value of our progress bar accordingly.
                              $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
                          }
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Play</h5>
                  <i id="play" class="material-icons">play_arrow</i>

                  <pre>
                      <code class="js">
                          $('#play').on('click', function () {

                              player.playVideo();

                          });
                      </code>
                  </pre>

              </li>
              <li>

                  <h5>Pause</h5>
                  <i id="pause" class="material-icons">pause</i>

                  <pre>
                      <code class="js">
                          $('#pause').on('click', function () {

                              player.pauseVideo();

                          });
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Mute / Unmute</h5>
                  <i id="mute-toggle" class="material-icons">volume_up</i>

                  <pre>
                      <code class="js">
                          $('#mute-toggle').on('click', function() {
                              var mute_toggle = $(this);

                              if(player.isMuted()){
                                  player.unMute();
                                  mute_toggle.text('volume_up');
                              }
                              else{
                                  player.mute();
                                  mute_toggle.text('volume_off');
                              }
                          });
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Set volume</h5>
                  <input id="volume-input" type="number" max="100" min="0">

                  <pre>
                      <code class="js">
                          $('#volume-input').on('change', function () {
                              player.setVolume($(this).val());
                          });

                          // To get the current volume of the player use this method:
                          // player.getVolume()
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Speed</h5>
                  <select id="speed">
                      <option>0.25</option>
                      <option>0.5</option>
                      <option selected="selected">1</option>
                      <option>1.5</option>
                  <option>2</option>
                  </select>

                  <pre>
                      <code class="js">
                          $('#speed').on('change', function () {
                              player.setPlaybackRate($(this).val());
                          });

                          // To get the current playback rate for a video use this method:
                          // player.getPlaybackRate()

                          // To get all available playback rates for the current video use:
                          // player.getAvailablePlaybackRates()
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Quality</h5>
                  <select id="quality">
                      <option>small</option>
                      <option>medium</option>
                      <option selected="selected">large</option>
                      <option>hd720</option>
                      <option>hd1080</option>
                  <option>highres</option>
                  </select>

                  <pre>
                      <code class="js">
                          $('#quality').on('change', function () {
                              player.setPlaybackQuality($(this).val());
                          });

                          // To get the actual video quality of the running video use this method:
                          // player.getPlaybackQuality()

                          // To get a list of the available quality formats for a video use:
                          // player.getAvailableQualityLevels()
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Playlist Next</h5>
                  <i id="next" class="material-icons">fast_forward</i>

                  <pre>
                      <code class="js">
                          $('#next').on('click', function () {
                              player.nextVideo()
                          });
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Playlist Previous</h5>
                  <i id="prev" class="material-icons">fast_rewind</i>

                  <pre>
                      <code class="js">
                          $('#prev').on('click', function () {
                              player.previousVideo()
                          });
                      </code>
                  </pre>
              </li>
              <li>

                  <h5>Dynamically Queue Video</h5>
                  <img class="thumbnail" src="assets/img/cat_video_1.jpg" data-video-id="h14wr4pXZFk">
                  <img class="thumbnail" src="assets/img/cat_video_2.jpg" data-video-id="KkFnm-7jzOA">
                  <img class="thumbnail" src="assets/img/cat_video_3.jpg" data-video-id="Ph77yOQFihc">

                  <pre>
                      <code class="js">
                          $('.thumbnail').on('click', function () {

                              var url = $(this).attr('data-video-id');

                              player.cueVideoById(url);

                          });
                      </code>
                  </pre>

              </li>
          </ul>
      </div>
    </div>
    <div class="col s12 m5 offset-m1">
      <div id="video-placeholder"></div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m12">
      <ul class="pagination center">
        <li class="waves-effect"><a href="designPattern.php"><i class="material-icons">chevron_left</i></a></li>
        <li class="waves-effect"><a href="anagram.php">1</a></li>
        <li class="waves-effect"><a href="designPattern.php">2</a></li>
        <li class="active blue"><a href="#!">3</a></li>
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>
  </div>
</div>
<?php include_once('footer.php') ?>
