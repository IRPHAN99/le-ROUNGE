<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?>
  <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Chat</li>
      </ol>
      <ul class="app-actions">
        <li>
          <a href="#" id="reportrange">
            <span class="range-text"></span>
            <i class="icon-chevron-down"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="icon-export"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- Page header end -->
    <!-- Main container start -->
    <div class="main-container">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="chat-section">
            <!-- Row start -->
            <div class="row no-gutters">
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-3">
                <div class="users-container">
                  <div class="chat-search-box">
                    <div class="input-group">
                      <input class="form-control" placeholder="Search" />
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-primary">
                          <i class="icon-magnifying-glass"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="usersContainerScroll">
                    <ul class="users">
                      <li class="person" data-chat="person4">
                        <div class="user">
                          <img src="img/user.png" alt="Le Rouge Admin" />
                          <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Amy Hood</span>
                          <span class="time">4 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person1">
                        <div class="user">
                          <img src="img/user6.png" alt="Le Rouge Admin" />
                          <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Den Klenkov</span>
                          <span class="time">1 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person1">
                        <div class="user">
                          <img src="img/user22.png" alt="Le Rouge Admin" />
                          <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Zhenya Rynzhuk</span>
                          <span class="time">2 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person2">
                        <div class="user">
                          <img src="img/user24.png" alt="Le Rouge Admin" />
                          <span class="status away"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Andrea Hock</span>
                          <span class="time">2 hours ago</span>
                        </p>
                      </li>
                      <li class="person active-user" data-chat="person3">
                        <div class="user">
                          <img src="img/user9.png" alt="Le Rouge Admin" />
                          <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Zuairia Zaman</span>
                          <span class="time">3 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person4">
                        <div class="user">
                          <img src="img/user14.png" alt="Le Rouge Admin" />
                          <span class="status offline"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Mohamed Chahin</span>
                          <span class="time">4 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person5">
                        <div class="user">
                          <img src="img/user7.png" alt="Le Rouge Admin" />
                          <span class="status away"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Haley Bridges</span>
                          <span class="time">5 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person3">
                        <div class="user">
                          <img src="img/user9.png" alt="Le Rouge Admin" />
                          <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Meg Lewis</span>
                          <span class="time">3 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person5">
                        <div class="user">
                          <img src="img/user18.png" alt="Le Rouge Admin" />
                          <span class="status away"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Ali Sayed</span>
                          <span class="time">5 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person3">
                        <div class="user">
                          <img src="img/user3.png" alt="Le Rouge Admin" />
                          <span class="status busy"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Jessica Larson</span>
                          <span class="time">3 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person4">
                        <div class="user">
                          <img src="img/user20.png" alt="Le Rouge Admin" />
                          <span class="status offline"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Lisa Guerrero</span>
                          <span class="time">4 hours ago</span>
                        </p>
                      </li>
                      <li class="person" data-chat="person5">
                        <div class="user">
                          <img src="img/user10.png" alt="Le Rouge Admin" />
                          <span class="status away"></span>
                        </div>
                        <p class="name-time">
                          <span class="name">Lily Jordan</span>
                          <span class="time">5 hours ago</span>
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 col-9">
                <div class="active-user-chatting">
                  <div class="active-user-info">
                    <img src="img/user20.png" class="avatar" alt="avatar" />
                    <div class="avatar-info">
                      <h5>Zuairia Zaman</h5>
                      <div class="typing">Typing ...</div>
                    </div>
                  </div>
                  <div class="chat-actions">
                    <a href="#" data-toggle="modal" data-target="#videoCall">
                      <i class="icon-video"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#audioCall">
                      <i class="icon-phone1"></i>
                    </a>
                  </div>
                  <!-- Audio Call Modal -->
                  <div class="modal fade" id="audioCall" tabindex="-1" role="dialog" aria-labelledby="audioCallLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="call-container">
                            <div class="current-user">
                              <img src="img/user21.png" alt="Avatar">
                            </div>
                            <h5 class="calling-user-name"> Amy Hood <span class="calling">Calling...</span>
                            </h5>
                            <div class="calling-btns">
                              <button class="btn btn-secondary" data-dismiss="modal">
                                <i class="icon-x"></i>
                              </button>
                              <button class="btn btn-primary">
                                <i class="icon-phone1"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Video Call Modal -->
                  <div class="modal fade" id="videoCall" tabindex="-1" role="dialog" aria-labelledby="videoCallLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="call-container">
                            <div class="current-user">
                              <img src="img/user22.png" alt="Avatar">
                            </div>
                            <h5 class="calling-user-name"> Zhenya Rynzhuk <span class="calling">Calling...</span>
                            </h5>
                            <div class="calling-btns">
                              <button class="btn btn-secondary" data-dismiss="modal">
                                <i class="icon-x"></i>
                              </button>
                              <button class="btn btn-primary">
                                <i class="icon-video"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="chat-container">
                  <div class="chatContainerScroll">
                    <ul class="chat-box">
                      <li class='chat-left'>
                        <div class='chat-avatar'>
                          <img src="img/user16.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Den</div>
                        </div>
                        <div class='chat-text'>
                          <p>Hello, I'm Den Klenkov. <br />How can I help you today? <br />The basic setup requires targetting an input element and invoking the picker: </p>
                          <div class='chat-hour'>08:55 <span class='icon-done_all'></span>
                          </div>
                        </div>
                      </li>
                      <li class='chat-right'>
                        <div class='chat-text'>
                          <p>Hi, Den <br /> I need more information about Developer Plan. </p>
                          <div class='chat-hour'>08:56 <span class='icon-done_all'></span>
                          </div>
                        </div>
                        <div class='chat-avatar'>
                          <img src="img/user8.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Amy</div>
                        </div>
                      </li>
                      <li class="divider">Dec 18, 2019</li>
                      <li class='chat-left'>
                        <div class='chat-avatar'>
                          <img src="img/user18.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Ali</div>
                        </div>
                        <div class='chat-text'>
                          <p>Are we meeting today? <br />Project has been already finished and I have results to show you. </p>
                          <div class='chat-hour'>08:57 <span class='icon-done_all'></span>
                          </div>
                        </div>
                      </li>
                      <li class='chat-right'>
                        <div class='chat-text'>
                          <p>Well I am not sure. <br />I have results to show you. </p>
                          <div class='chat-hour'>08:59 <span class='icon-done_all'></span>
                          </div>
                        </div>
                        <div class='chat-avatar'>
                          <img src="img/user10.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Lily</div>
                        </div>
                      </li>
                      <li class="divider">Dec 21, 2019</li>
                      <li class='chat-left'>
                        <div class='chat-avatar'>
                          <img src="img/user22.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Zhenya</div>
                        </div>
                        <div class='chat-text'>
                          <p>The rest of the team is not here yet. <br />Maybe in an hour or so? </p>
                          <div class='chat-hour'>08:57 <span class='icon-done_all'></span>
                          </div>
                        </div>
                      </li>
                      <li class='chat-right'>
                        <div class='chat-text'>
                          <p>Have you faced any problems at the last phase of the project?</p>
                          <div class='chat-hour'>08:59 <span class='icon-done_all'></span>
                          </div>
                        </div>
                        <div class='chat-avatar'>
                          <img src="img/user24.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Andrea</div>
                        </div>
                      </li>
                      <li class="divider">Dec 25, 2019</li>
                      <li class='chat-left'>
                        <div class='chat-avatar'>
                          <img src="img/user20.png" alt="Le Rouge Admin" />
                          <div class='chat-name'>Lisa</div>
                        </div>
                        <div class='chat-text'>
                          <p>Actually everything was fine. <br />I'm very excited to show this to our team. <br />From next week I am going to work on new and exiting project. Thanks. </p>
                          <div class='chat-hour'>07:00 <span class='icon-done_all'></span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="chat-form">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Type your message here..."></textarea>
                      <button class="btn btn-primary">
                        <i class="icon-send"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
  <!-- Page content end -->
</div> <?php include("./footer.php"); ?>