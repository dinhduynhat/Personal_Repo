var uploadPages = 1;
    users_ids   = [];
    users_names = [];
    finished    = false;
    usersCount = 0;

//
function setupUsersScrollHandler(){
  // uploading users scroll event
  $('.list-group.pre-scrollable.for-scroll').scroll(function() {
    if  ($('.list-group.pre-scrollable.for-scroll').scrollTop() == $('#users_list').height() - $('.list-group.pre-scrollable.for-scroll').height()){
      retrieveUsers();
    }
  });
}

//
function retrieveUsers() {
  if (!finished) {

    $("#load-users").show(0);
    uploadPages = uploadPages + 1;

    // Load users, 10 per request
    //
    QB.users.listUsers({page: uploadPages, per_page: '3'}, function(err, result) {
      if (err) {
        console.log(err);
      } else {
        $.each(result.items, function(index, item){
          showUsers(this.user.login, this.user.id);
        });

        $("#load-users").delay(100).fadeOut(500);

        var totalEntries = result.total_entries;
            entries      = result.items.length;
            usersCount   = usersCount + entries;

        if (usersCount >= totalEntries) {
          finished = true;
        }
      }
    });
  }
}

//
function showUsers(userLogin, userId) {
  var userHtml = buildUserHtml(userLogin, userId);
  $('#users_list').append(userHtml);
}

// show modal window with users
function showNewDialogPopup() {
  $("#add_new_dialog").modal("show");
  $('#add_new_dialog .progress').hide();

  retrieveUsers();

  setupUsersScrollHandler();
}

// select users from users list
function clickToAdd(forFocus) {
  if ($('#'+forFocus).hasClass("active")) {
    $('#'+forFocus).removeClass("active");
  } else {
    $('#'+forFocus).addClass("active");
  }
}

// create new dialog
function createNewDialog() {
  $('.users_form.active').each(function(index) {
    users_ids[index] = $(this).attr('id');
    users_names[index] = $(this).text();
  });

  $("#add_new_dialog").modal("hide");
  $('#add_new_dialog .progress').show();

  var dialogName;
  var dialogOccupants;
  var dialogType;

  if (users_ids.length > 1) {
    dialogName = currentUser.login+', '+users_names.join(', ');
    dialogOccupants = users_ids.join(',');
    dialogType = 2;
  } else {
    dialogOccupants = users_ids.join(',');
    dialogType = 3;
  }

  var params = {
    type: dialogType,
    occupants_ids: dialogOccupants,
    name: dialogName
  };

  // create a dialog
  //
  QB.chat.dialog.create(params, function(err, createdDialog) {
    if (err) {
      console.log(err);
    } else {
      joinToNewDialogAndShow(createdDialog);

      notifyOccupants(createdDialog.occupants_ids, createdDialog._id);

      triggerDialog($('#dialogs-list').children()[0], createdDialog._id);

      users_ids = [];
      $('a.users_form').removeClass('active');
    }
  });
}

//
function joinToNewDialogAndShow(itemDialog) {
  var dialogId = itemDialog._id;
  var dialogName = itemDialog.name;
  var dialogLastMessage = itemDialog.last_message;
  var dialogUnreadMessagesCount = itemDialog.unread_messages_count;
  var dialogIcon = getDialogIcon(itemDialog.type, itemDialog.photo);
      
  // save dialog to local storage 
  dialogs[dialogId] = itemDialog;

  // join if it's a group dialog
  if (itemDialog.type != 3) {
    QB.chat.muc.join(itemDialog.xmpp_room_jid, function() {
       console.log("Joined dialog " + dialogId);
       
    });
    opponentId = null;
  } else {
    opponentId = QB.chat.helpers.getRecipientId(itemDialog.occupants_ids, currentUser.id);
    dialogName = chatName = 'Dialog with ' + opponentId;
  }

  // show it
  var dialogHtml = buildDialogHtml(dialogId, dialogUnreadMessagesCount, dialogIcon, dialogName, dialogLastMessage);
  $('#dialogs-list').prepend(dialogHtml);
}

//
function notifyOccupants(dialogOccupants, newDialogId) {
  dialogOccupants.forEach(function(itemOccupanId, i, arr) {
    if (itemOccupanId != currentUser.id) {
      var msg = {
        type: 'chat',
        extension: {
          notification_type: 1,
          _id: newDialogId,
        }, 
      };

      QB.chat.send(itemOccupanId, msg);
    }
  });
}

//
function getAndShowNewDialog(newDialogId) {
  QB.chat.dialog.list({_id: newDialogId}, function(err, res) {
    if (err) {
      console.log(err);
    } else {
      joinToNewDialogAndShow(res.items[0])
    }
  });
}