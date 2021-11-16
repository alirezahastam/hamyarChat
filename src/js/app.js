$(document).ready(function () {
  // # Connection
  var conn = new WebSocket("ws://localhost:8080");
  //   # variables
  var chatForm = $("#formHamyarChat");
  var userMessage = $("#message");
  var msgList = $(".massage-list");

  //   This class is added by default
  $(".direct-chat-msg").addClass("d-none");

  chatForm.on("submit", function (e) {
    //   Avoid the default mode
    e.preventDefault();
    // This Class Removed
    $(".direct-chat-msg").removeClass("d-none");
    // Get Input Value
    var message = userMessage.val();
    // empty msg
    if (!message == "") {
      conn.send(message);
      msgList.prepend("<div class='direct-chat-text'>" + message + "</div>");
    } else {
      var toastLiveExample = document.getElementById("ts");
      var toast = new bootstrap.Toast(toastLiveExample);
      $(".toast-body").text("پیام نمیتواند خالی باشد");
      toast.show();
    }
    // send Msg
    // Show Msg
    // Empty input
    document.getElementById("message").value = "";
  });

  // Check connection
  conn.onopen = function (e) {
    var toastLiveExample = document.getElementById("ts");
    var toast = new bootstrap.Toast(toastLiveExample);

    toast.show();
    $(".toast-body").text("اتصال برقرار است");
  };
  if (!conn.onopen) {
    return false;
  }
  conn.onmessage = function (e) {
    console.log(e.data);
    msgList.prepend("<div class='direct-chat-text'>" + e.data + "</div>");
    document.getElementById("message").value = "";
  };
  // toast
});
