// Init QuickBlox application here
QB.init(QBApp.appId, QBApp.authKey, QBApp.authSecret, config);

var currentUser;

$(document).ready(function() {

  $("#loginForm").modal("show");
  $('#loginForm .progress').hide();
  
  // User1 login action
  //
  //$('#user1').click(function() {
	var Credentials = {
      id: 5290121,
      name: 'salma',
      login: 'salma',
      pass: 'salmasalma'
    };
    currentUser = Credentials;
    connectToChat(QBUser1);
  //});
  
  // User2 login action
  //
  
});

function connectToChat(user) {
  $('#loginForm button').hide();
  $('#loginForm .progress').show();

  // Create session and connect to chat
  //
  QB.createSession({login: user.login, password: user.pass}, function(err, res) {
    if (res) {
      // save session token
      token = res.token;

      QB.chat.connect({userId: user.id, password: user.pass}, function(err, roster) {
        if (err) {
          console.log(err);
        } else {
          
          // load chat dialogs
          //
          retrieveChatDialogs();

          // setup message listeners
          //
          setupOnMessageListener()

          // setup 'isTyping' events handler and listener
          //
          setupIsTypingHandler();

          // setup 'on disconnected' listener
          //
          QB.chat.onDisconnectedListener = onDisconnectedListener;
        }
      });
    }
  });
}

function onDisconnectedListener(){
  console.log("onDisconnected");
}