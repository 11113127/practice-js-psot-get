<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <form>
    <div>
      <input type="text" id="username"><br>
      <input type="password" id="pwd"><br>
      <input id="Button1" type="button" value="POST按鈕" onclick="PostAction();" />
      <input id="Button2" type="button" value="GET按鈕" onclick="GetAction();" />
    </div>
  </form>

  <script>
  function PostAction() {
    var keys = [];
    var values = [];
    keys[0] = "username";
    keys[1] = "pwd";
    values[0] = document.getElementById("username").value;
    values[1] = document.getElementById("pwd").value;
    openWindowWithPost("result.php", "web", keys, values);
  }

  function GetAction() {
    window.open("result.php?username=" + document.getElementById("username").value + "&pwd=" + document.getElementById("pwd").value, "web");
  }

  function openWindowWithPost(url, name, keys, values) {
    var newWindow = window.open(url, name);

    var html = "";

    html += "<form id='hidden_form' method='post' action='" + url + "'>";

    for (var i = 0; i < keys.length; i++){
      html += "<input type='hidden' name='" + keys[i] + "' value='" + values[i] + "'>";
    }
    html += "</form>";
    html += "<script>document.getElementById('hidden_form').submit()<\/script>";
    newWindow.document.write(html);
    return newWindow;
  }
  </script>
</body>
</html>
