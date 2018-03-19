<?php
   include("config.php");
   session_start();
   $error=" ";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM account WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //    $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['myusername']="Xaxa";
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="connexion.css">


    <title></title>
  </head>
  <header>
    <h1 class="siteTitle">SmALL TaLK - Connection</h1>
  </header>
  <body>

    <form class="connectSpace" action = "" method = "post">
      <p class="connect">
       <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
       <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
       <input type = "submit" value = " Submit "/><br />
     </p>

    </form>

       <div class="error" ><?php echo $error; ?></div>

  <!--  <form class="connectSpace"action="welcome.php" method="post" >
    <p class="connect">

        <label for="">Pseudo</label>
        <input class="case" type="text" name="prenom" />


        <label for="">Password</label>
        <input class="case" type="password" password="password" />


        <input class="case" type="submit" value="Valider" />
    </p>
  </form> -->
  </body>
</html>
