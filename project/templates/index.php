<html>
<head>
<title>Welcome to ansible</title>
</head>
<body>
<h1>Simple web static page powered by Apache server.<br> Configured with help of Ansible</h1>
<br>
<p>If you can see this, Ansible successfully configured everything.</p>
<center>
<img src="success.jpg" width="400pt" height="400pt"  alt="image of Tux and Ansible logo">
</center>
<br>
<?php
            $dbname = 'data1';
            $dbuser = 'root';
            $dbpass = 'vagrant';
            $dbhost = 'location';
                
            $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
            mysql_select_db($dbname) or die("Could not open the database '$dbname'");
            $result = mysql_query("SELECT id, name FROM users");
             while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		     printf("ID: %s  Name: %s <br>", $row[0], $row[1]);
	     }
?>
</body>
</html>
