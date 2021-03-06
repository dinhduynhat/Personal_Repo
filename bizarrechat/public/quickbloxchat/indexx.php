
  <link rel="shortcut icon" href="http://quickblox.com/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-cog"></span>
          </button>
          
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Chat</a></li>
            <li><a href="#" onclick="showNewDialogPopup()">Create dialog</a></li>
<!--             <li><a href="#settings">Settings</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <!-- Main block -->
  <div class="container"> 
    <div id="main_block">

        <div class="panel panel-primary">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4">
                <div class="list-header">
                  <h4 class="list-header-title">History</h4>
                </div>
                <div class="list-group pre-scrollable" id="dialogs-list">
                <!-- list of chat dialogs will be here -->
                </div>
              </div>
              <div class="col-md-8">
                <div class="list-group pre-scrollable" id="messages-list">
                  <!-- list of chat messages will be here -->
                </div>
                <p id="no-messages-label" class="hide">No messages</p>
                <form class="form-inline" role="form" method="POST" action="" onsubmit="return submit_handler(this)">
                  <div class="form-group">
                    <input id="load-img" type="file">
                    <button type="button" id="attach_btn" class="btn btn-default" onclick="">Attach</button>
                    <input type="text" class="form-control" id="message_text" placeholder="Enter message">
                    <button  type="submit" id="send_btn" class="btn btn-default" onclick="clickSendMessage()">Send</button>
                  </div>
                  <img src="images/ajax-loader.gif" id="progress">
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Modal (login to chat)-->
    <div id="loginForm" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Loading Chat..</h3>
          </div>
          <div class="modal-body">
            <button type="button" value="Quick" id="user1" class="btn btn-primary btn-lg btn-block">Sign in with Quick</button>
            <button type="button" value="Blox" id="user2" class="btn btn-success btn-lg btn-block">Sign in with Blox</button>
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal (new dialog)-->
    <div id="add_new_dialog" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Choose users to create dialog with</h3>
          </div>
          <div class="modal-body">
            <div class="list-group pre-scrollable for-scroll">
              <div id="users_list" class="clearfix"></div><!-- list of chat dialogs will be here -->
            </div>
            <div class="img-place"><img src="images/ajax-loader.gif" id="load-users"></div>
              <input type="text" class="form-control" id="dlg_name" placeholder="Enter dialog name">
            <button id="add-dialog" type="button" value="Confirm" id="" class="btn btn-success btn-lg btn-block" onclick="createNewDialog()">Create dialog</button>
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.1/jquery.timeago.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/quickblox/1.9.3/quickblox.min.js" type="text/javascript"></script> -->

  <script src="js/quickblox.js"></script>
  <script src="js/config.js"></script>
  <script src="js/connection.js"></script>
  <script src="js/messaging.js"></script>
  <script src="js/ui_helpers.js"></script>
  <script src="js/new_dialog.js"></script>