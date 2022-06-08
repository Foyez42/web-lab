<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="asset/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="asset/css/user-registration.css" type="text/css"
	rel="stylesheet" />
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body{
        background-image:url("./asset/alpha.jpg");
        background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
    }
</style>
</HEAD>
<BODY>
	<div class="phppot-container" >
        <div class="col btn btn-danger" style="margin-top:5% !important;"> User Dashboard</div><div class="page-header">
		</div>
		<div class="page-content jumbotron" style="  background-color: red;
  background-image: linear-gradient(to right, darkgoldenrod , purple);">
  <h4 style="color:white; font-weight:bold;">Welcome To Learn Alphabet <?php echo $username;?></h4></div>

  <h1 style="text-align:center;color:white">Learn English Alphabet </h1>
    <div class="">
      <h2 style="text-align:center;color:white" >Press the button to pronounce</h2>
      <form class="" action="alphabet" method="post">
        <input type="submit" name="a" value="A">
        <input type="submit" name="b" value="B">
        <input type="submit" name="c" value="C">
        <input type="submit" name="d" value="D">
        <input type="submit" name="e" value="E">
        <input type="submit" name="f" value="F">
        <input type="submit" name="g" value="G">
        <input type="submit" name="h" value="H">
        <input type="submit" name="i" value="I">
        <input type="submit" name="j" value="J">
        <input type="submit" name="k" value="K">
        <input type="submit" name="l" value="L">
        <input type="submit" name="m" value="M">
        <input type="submit" name="n" value="N">
        <input type="submit" name="o" value="O">
        <input type="submit" name="p" value="P">
        <input type="submit" name="q" value="Q">
        <input type="submit" name="r" value="R">
        <input type="submit" name="s" value="S">
        <input type="submit" name="t" value="T">
        <input type="submit" name="u" value="U">
        <input type="submit" name="v" value="V">
        <input type="submit" name="w" value="W">
        <input type="submit" name="x" value="X">
        <input type="submit" name="y" value="Y">
        <input type="submit" name="z" value="Z">
      

      </form>
      <?php
        if (isset($_POST['a'])) {
          ?>
            <video src="alphabet/a.mp4" type="video/mp4" autoplay controls >

            </video>
          <?php

        }
        if (isset($_POST['b'])) {
          ?>
            <video src="alphabet/b.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
        }
        if (isset($_POST['c'])) {
          ?>
            <video src="alphabet/c.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['d'])) {
          ?>
            <video src="alphabet/d.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['e'])) {
          ?>
            <video src="alphabet/e.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['f'])) {
          ?>
            <video src="alphabet/f.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['g'])) {
          ?>
            <video src="alphabet/g.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['h'])) {
          ?>
            <video src="alphabet/h.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
       
        }
        if (isset($_POST['i'])) {
          ?>
            <video src="alphabet/i.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['j'])) {
          ?>
            <video src="alphabet/j.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['k'])) {
          ?>
            <video src="alphabet/k.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['l'])) {
          ?>
            <video src="alphabet/l.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['m'])) {
          ?>
            <video src="alphabet/m.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['n'])) {
          ?>
            <video src="alphabet/n.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['o'])) {
          ?>
            <video src="alphabet/o.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['p'])) {
          ?>
            <video src="alphabet/p.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['q'])) {
          ?>
            <video src="alphabet/q.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['r'])) {
          ?>
            <video src="alphabet/r.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['s'])) {
          ?>
            <video src="alphabet/s.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['t'])) {
          ?>
            <video src="alphabet/t.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['u'])) {
          ?>
            <video src="alphabet/u.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['v'])) {
          ?>
            <video src="alphabet/v.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['w'])) {
          ?>
            <video src="alphabet/w.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['x'])) {
          ?>
            <video src="alphabet/x.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }
        if (isset($_POST['y'])) {
          ?>
            <video src="alphabet/y.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
         
        }
        if (isset($_POST['z'])) {
          ?>
            <video src="alphabet/z.mp4" type="video/mp4" autoplay controls>

            </video>
          <?php
          
        }

       ?>

    </div>



  <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>
	</div>
</BODY>
</HTML>
