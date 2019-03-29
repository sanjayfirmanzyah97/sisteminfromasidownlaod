<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="styelsheet" type="css" href="main.css">
    <script src="main.js"></script>
</head>
<body class="align">
	
	<br/>
	<!-- cek pesan notifikasi -->
	<br/>
	<br/>
 

<div class="grid">

  <div id="login">

    <h2><span class="fontawesome-lock"></span>Sign In</h2>

    <form action="cek_login.php" method="POST"  onSubmit="return validasi()">

      <fieldset>

        <p><label for="usernmae">Username</label></p>
        <p><input type="username" type="text" id="username"  name="username" placeholder="Masukan Username"></p>

        <p><label for="password">Password</label></p>
        <p><input type="password" id="password" name="password" placeholder="Masukan Password"></p>

        <p><input type="submit" value="Sign In" id="submit"></p>

      </fieldset>

    </form>

  </div> <!-- end login -->

</div>

</body>	
<script type="text/javascript">
function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;		
    if (username != "" && password!="") {
        return true;
    }else{
        alert('Username dan Password harus di isi !');
        return false;
    }
}

</script>
</html>
