<?php
/* dateTime VAR*/
$date = date_default_timezone_set('EST');

?>

<!-- ********************************************************* -->
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Self-Directing Guidebook  to Building an Application Using PHP">
    <meta name="keywords" content="Mister Moody, Web Design, PHP, CSS, HTML">
    <meta name="author" content="Ray Moody">
    <meta name="twitter:title" content="@Mister_Moody" />        
    <meta name="twitter:site" content="http://mistermoody.com" />
    <!-- Browser Tab Icon -->
    <!--<link rel="shortcut icon" href="img/me.jpg" type="img/m" class="rounded">--> 
    <!-- TITLE -->
    <title>PHP 101</title>
    <!-- *********** CSS Implementations ************ -->
    <!-- BOOTSTRAP *CDN* Compiled & Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- CUSTOM Styles -->   
    <link rel="stylesheet" href="styles.css">        
    <!-- Font Awesome ICONS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONTS -->       
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
	  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
  </head>
  
  <body>
    <!-- ********************************************************* -->
    <!-- *************** <NAVIGATION> CONTAINER[S] *************** -->
    <!-- ********************************************************* -->
    <nav class="navbar sticky-top navbar-expand-md navbar-toggleable-sm navbar-light"> 
      <a class="navbar-brand"><span class="font-weight-bold navPhone pl-1">PHP 101</span>
        <!--<span class="font-weight-bold navPhone pl-1"><i class="fa fa-phone d-lg-inline-block"></i> +1.502.558.9240 </span>-->
        <!--<img src="..." width="30" height="30" class="d-inline-block align-top" alt="">-->
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto"> <!-- Use "ml-auto" for Right Side Alignment-->
          <li class="nav-item active text-right">
            <a class="nav-link" href="../index.php"><i class="fa fa-home d-none d-lg-inline-block"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Syntax</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="syntax.php">Basics</a>
              <a class="dropdown-item" href="control_structures.php">Control Structures</a>
              <a class="dropdown-item" href="arrays.php">Arrays</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Examples</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" src="#" href="../scripts.php" alt="PHP Scripts">Scripts</a>
          </li>
        </ul>
      </div>
     </nav>
    <!-- ********************************************************* -->
    <!-- ********************************************************* -->
         
    
    <!-- ********************************************************* -->
    <!-- *************** <MAIN> CONTAINER ************************ -->
    <!-- ********************************************************* -->
    <div class="container">
    
      
      <!-- ************* <SECTION 1> ***************************** -->
      <!-- ******************************************************* -->
      <div class="row">
        <!-- ************************************** -->
        <!-- ********* <FIXED-SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Arrays 101</h4>
          <ul>
            <li id=""><a id="fade" href="#">Intro</a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        

        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          <!-- *********** <SECTION 1> ************ -->
          <h1>Introduction to Arrays</h1>
          <p>In PHP, an <b>Array</b> is <i>a Compound Variable-type that Stores multiple pieces of related, yet, complex Data in a single variable</i>, like an ordered map that associates Values to Keys.  This type of variable allows us to manipulate data &#40;ie user input&#41; and is especially useful when building Lists, Hash-Tables, Queues, Dictionaries, Collections, etc.
          <br>In essence, an Array is a simple list of <i>Values</i> that can be other Arrays, Associative Arrays and Multidimensional Arrays.</p>
          <div class="row mb-4">
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
          </div>
          <!-- ************************************ -->
          
          <!-- ************************************ -->
          <!-- *********** <SECTION 2> ************ -->
          <h1>Arrays 2</h1>
          <p>qmlsdkjmqlsdkjfmlq djfpoqds joqdj fmlqdj fmlqdj fmlqdj foqidjs fpoq djisfpoq idfjpo qdjsp ofijqsdpo fjqdpos fiqdpos fjqds qdmlsfjqdpsofi jqdposfji qdosifjmqlds fjqoims fjmlq dkjsf qsdjf omq fjiq dsfjfmlqdksjfoqdsfjpoafjpaoi fjqmds fjeoqidjs foiazje fdqisfoqi djfoqisdjfpo ajezfzjfp fjpoqjiz fe qsdjfpom fjpoa fjepoazi fjepoaz jefpo jfqojifpoajiz efpoafjezaomlqp fjopdfjoqsj dfpofj qposd fjpaoz fjiapoz fjiaz
                ef mjqsdfi jofi japzfji apoz fja fjpo a</p>
          <div class="row mb-4">
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
          </div>
          <!-- ************************************ -->
          
          <!-- ************************************ -->
          <!-- *********** <SECTION 3> ************ -->
          <h1>Arrays 3</h1>
          <p>qmlsdkjmqlsdkjfmlq djfpoqds joqdj fmlqdj fmlqdj fmlqdj foqidjs fpoq djisfpoq idfjpo qdjsp ofijqsdpo fjqdpos fiqdpos fjqds qdmlsfjqdpsofi jqdposfji qdosifjmqlds fjqoims fjmlq dkjsf qsdjf omq fjiq dsfjfmlqdksjfoqdsfjpoafjpaoi fjqmds fjeoqidjs foiazje fdqisfoqi djfoqisdjfpo ajezfzjfp fjpoqjiz fe qsdjfpom fjpoa fjepoazi fjepoaz jefpo jfqojifpoajiz efpoafjezaomlqp fjopdfjoqsj dfpofj qposd fjpaoz fjiapoz fjiaz
                ef mjqsdfi jofi japzfji apoz fja fjpo a</p>
          <div class="row mb-4">
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
          </div>
          <!-- ************************************ -->
          
          <!-- ************************************ -->
          <!-- *********** <SECTION 4> ************ -->
          <h1>Arrays 4</h1>
          <p>qmlsdkjmqlsdkjfmlq djfpoqds joqdj fmlqdj fmlqdj fmlqdj foqidjs fpoq djisfpoq idfjpo qdjsp ofijqsdpo fjqdpos fiqdpos fjqds qdmlsfjqdpsofi jqdposfji qdosifjmqlds fjqoims fjmlq dkjsf qsdjf omq fjiq dsfjfmlqdksjfoqdsfjpoafjpaoi fjqmds fjeoqidjs foiazje fdqisfoqi djfoqisdjfpo ajezfzjfp fjpoqjiz fe qsdjfpom fjpoa fjepoazi fjepoaz jefpo jfqojifpoajiz efpoafjezaomlqp fjopdfjoqsj dfpofj qposd fjpaoz fjiapoz fjiaz
                ef mjqsdfi jofi japzfji apoz fja fjpo a</p>
          <div class="row mb-4">
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
          </div>
          <!-- ************************************ -->
          
          <!-- ************************************ -->
          <!-- *********** <SECTION 5> ************ -->
          <h1>Arrays 5</h1>
          <p>qmlsdkjmqlsdkjfmlq djfpoqds joqdj fmlqdj fmlqdj fmlqdj foqidjs fpoq djisfpoq idfjpo qdjsp ofijqsdpo fjqdpos fiqdpos fjqds qdmlsfjqdpsofi jqdposfji qdosifjmqlds fjqoims fjmlq dkjsf qsdjf omq fjiq dsfjfmlqdksjfoqdsfjpoafjpaoi fjqmds fjeoqidjs foiazje fdqisfoqi djfoqisdjfpo ajezfzjfp fjpoqjiz fe qsdjfpom fjpoa fjepoazi fjepoaz jefpo jfqojifpoajiz efpoafjezaomlqp fjopdfjoqsj dfpofj qposd fjpaoz fjiapoz fjiaz
                ef mjqsdfi jofi japzfji apoz fja fjpo a</p>
          <div class="row mb-4">
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
          </div>
          <!-- ************************************ -->
          
          
          
        </div>
        <!-- \End of MAIN-CONTENT -->
      </div>
      <!-- \End of ROW-->
    </div>
    <!-- \End of CONTAINER-->
    <!-- ******************************************************* -->
    <!-- ******************************************************* -->
    <!-- -->
    <!-- -->

    <!-- ************ --> <!-- Use a Font-Awesome heart 'fa fa-heart' -->
    <!-- ** FOOTER ** -->
    <div class="container">
      <div class="row no-gutters clearfix">
        <div class="col-6">
          <h6 class="text-left"><small>&#169;<?php echo date('Y'); ?></small> Made with <span>&#9829;</span> by Mister Moody.</h6>
        </div>
        <div class="col-6">
          <h6 class="text-right"><?php echo date("D d M "); echo date(" g:i a T"); ?></h6>
        </div>
      </div>
    </div>
    <!-- END of FOOTER --> 
    <!-- ************ -->
    
    <!-- *********************************************************************** -->
    <!-- *********************************************************************** -->
    <!-- ** jQuery, Popper & BOOTSTRAP *CDN* Compiled and Minified JavaScript ************ -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- ********************************************************************************* -->
    
  </body>
</html>