<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table With Database</title>
    <link rel="stylesheet" href="menustyle.css">
    <style type ="text/css">
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width:100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
} 
.button-27 {
  appearance: none;
  background-color: linear-gradient(135deg, #71b7e6, #9b59b6);
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 30px;
  min-width: 15px;
  outline: none;
  padding: 15px 10px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 70%;
  will-change: transform;
}

.button-27:disabled {
  pointer-events: none;
}

.button-27:hover {
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-27:active {
  box-shadow: none;
  transform: translateY(0);
}  
}

    </style>
</head>
<body>
<nav>
    <div class="logo">
       College Predictor
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
    </label>
    <ul>
       <li><a class="active" href="index1.html">Home</a></li>
       <li><a href="http://localhost/login/login.php">Login</a></li>
       <li><a href="http://localhost/login/register.php">Sign-Up</a></li>
       <li><a href="#">About Us</a></li>
       <li><a href="#">Feedback</a></li>
    </ul>
 </nav>
    <table class="content-table">
     <tr>
        <thead>
        <th>ID</th>
        <th>UserName</th>
        <th>Password</th>
        <th> &nbsp &nbsp Edit</th>
        <th>  &nbsp &nbsp Delete</th>
        </thead>
     </tr>
     <?php
     $conn = mysqli_connect("localhost","root","","login");
     if ($conn-> connect_error) {
         die("Connection Failed :". $conn-> connect_error);
     }

     $sql = "SELECT id, username, password from users";
     $result = $conn-> query($sql);

     if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()) {
          ?>
          <td ><?php echo $row["id"]; ?></td>
          <td ><?php echo $row["username"]; ?></td>
          <td ><?php echo $row["password"]; ?></td>
          <td >
          <button class="button-27 "><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></button>
          </td>
          <td>
          <button class="button-27 "><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
          </td>
          </tr>
          <?php
         }
        echo "</table>";
     }
     else {
         echo " 0 result";

     }

     $conn-> close();
?>
</table>    
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>
