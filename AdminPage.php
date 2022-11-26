<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Harry.css" >
    <link rel="stylesheet" href="">
    <title>Choice</title>
    <script>
      function myfunction()
      {
        var un=document.forms["myforms"]["email"].value;
        var loc=document.forms["myforms"]["psw"].value;
         if (un == "KaranAdmin" && loc== "KaranAdmin") {
           window.location.href="admin.php";
      } 
     }
    </script>
</head>
<body>
  
    <div class="bg-img">
        <form name="myforms" class="container">
          <h1>Admin Login</h1>
          <label for="email"><b>Admin User-Name</b></label>
          <input type="text" placeholder="Enter Email" id="email" name="email" required>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password"  id="psw" name="psw" required>
          <input type="button" id="logbutton" value="Proceed" onclick= myfunction() class="btn">
        </form>
      </div>

</div>
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
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct</title>
    <link rel="stylesheet" href="menustyle.css">
    <link rel="stylesheet" href="harry1.css">
    <link rel="stylesheet" href="List.html">
   
    <script>
      function myfunction()
      {
       var un=document.forms["myforms"]["Rank"].value;
       var loc=document.forms["myforms"]["location"].value;
      if (un== "KaranAdmin" && loc=="KaranAdmin") {
        window.location.href="admin.php";
      } 
       }
    </script>
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
       <li><a class="active" href="index1.php">Home</a></li>
       <li><a href="login.php">Login</a></li>
       <li><a href="register.php">Sign-Up</a></li>
       <li><a href="#">About Us</a></li>
       <li><a href="#">Feedback</a></li>
    </ul>
 </nav>
 <div class="content">
    <div>
       
    </div>
    <div>

    </div>
 </div>
  <div class="Direct">
    <form class="Direct1" name="myforms" method="POST">
    <h1>Admin Login</h1>
    <br>
            <label for="location"><b>Admin User-Name</b></label>
            <input type="text" placeholder="Enter User-Name" name="location" required>
            <label for="Rank"><b>Password</b></label>
            <input type="text" placeholder="Enter Password" name="Rank" required>
            <input type="button" id="logbutton" value="Proceed" onclick= myfunction() class="btn">
    </form>
  </div>
<!-- Code injec