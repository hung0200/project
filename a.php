<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="maine.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="js/jquery.min.js">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.1-web/css/all.min.css">
  
  </head>
 
</div>
 
      <!-- nav -->
      <nav class="navbar navbar-expand-md navbar-light sticky-top ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav nav-fill nav-tabs ">
        <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#skill">SKILLS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#education">EDUCATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#portfolio">PORTFOLIO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#testimony">TESTIMONY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#experience">EXPENRIENCE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#achiverment">ACHIEVEMENT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACT</a>
        </li>
        </ul>
    </div>
    </nav>

<!-- about -->
    <div id="about" class="container shadow p-3 mb-5 bg-white rounded mt-3">
        <div class="container" >
            <div class="row">
                <div class="col-md-4 ">
                    <div class="py-2">
                        <img alt="" src="121820155_2779832892291163_5027139127195995414_o.jpg" class="img-fluid"/>
                    </div>
                    <div>
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p> $data[6]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                    </div>
                </div>

                <div class="col-md-7 d-flex flex-column justify-content-center px-5 border-left">
                    <div class="py-2">
                        <h2 class="pb-3">ABOUT ME</h2>
                        <div class="i_c"></div>  
                    </div>
                    <div class="info">
                        <div class="row pt-3">
                            <p class=" col-md-4 col-lg-4">Name</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                           
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\">$data[1]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">address</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\">$data[2]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Date_of_bỉth</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\">$data[5]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Email</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\">$data[3]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="row">
                            <p class=" col-md-4 col-lg-4">Phone</p>
                            <p class=" col-md-1 col-lg-1">:</p>
                            <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from member where id='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\" col-md-6 col-lg-7  last_if\">$data[4]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                    </div>

                </div>

                <div class="col-md-1 ">
                    <div class="h-100">
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-github-square" style="color: #482aff"></i>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-instagram-square " style="color: #482aff"></i>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-twitter-square" style="color: #482aff"></i>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 h-25 w-25">
                            <a href="">
                                <i class="fab fa-facebook-square" style="color: #482aff"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- skills -->
<div id="skill" class="container shadow p-3 mb-5 bg-white rounded mt-3">
<div class="container">
        <div class="row px-3">
            <div class="col-md-4">
                <div class="py-2">
                    <h2 class="pb-3">SKILL</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT NAME_skill from programming_skills where id='1' and NAME_skill='Application Development'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"last_if\">+$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                
                <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT NAME_skill from programming_skills where id='1' and NAME_skill='Service-Oriented Architecture'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"last_if\">+$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT NAME_skill from programming_skills where id='1' and NAME_skill='Enterprise Implementations'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"last_if\">+$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                 <?php
                            ob_start() ;
                        require 'connect.php';
                         $sql="SELECT NAME_skill from programming_skills where id='1' and NAME_skill='Software Development Lifecycle'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"last_if\">+$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center px-5 border-left">  
                    <div class="row pt-3">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT skill from SKILL where ID='1' AND skill='HTML'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"col-md-4 col-lg-4 \">$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        <div class="progress col-md-8 col-lg-8 p-0" >
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='HTML'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:$data[2]% ; height:20px\">$data[2]%</div> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                            
                        </div>
                    </div>
                    <div class="row pt-3">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT skill from SKILL where ID='1' AND skill='CSS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"col-md-4 col-lg-4 \">$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        <div class="progress col-md-8 col-lg-8 p-0">
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='CSS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:$data[2]% ; height:20px\">$data[2]%</div> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                    </div>
                    <div class="row pt-3">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT skill from SKILL where ID='1' AND skill='JS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"col-md-4 col-lg-4 \">$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        <div class="progress col-md-8 col-lg-8 p-0">
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='JS'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:$data[2]% ; height:20px\">$data[2]%</div> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                    </div>
                    <div class="row pt-3">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT skill from SKILL where ID='1' AND skill='SQL'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"col-md-4 col-lg-4 \">$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        <div class="progress col-md-8 col-lg-8 p-0">
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='SQL'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:$data[2]% ; height:20px\">$data[2]%</div> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                    </div>
                    <div class="row pt-3">
                    <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT skill from SKILL where ID='1' AND skill='Team work'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"col-md-4 col-lg-4 \">$data[0]</p>";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        <div class="progress col-md-8 col-lg-8 p-0">
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from SKILL where ID='1' AND skill='Team work'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:$data[2]% ; height:20px\">$data[2]%</div> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>

<!-- ACHIEVEMENT -->
<div id="ACHIEVEMENT" class="container-fluid shadow p-3 mb-5 rounded mt-3 bg-dark text-light">
    <div class="container">
        <div class="row px-3">
            <div class="col-md-4 ">
                <div class="py-2">
                    <h2 class="pb-3">ACHIEVEMENT</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p>mota</p>
                
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center ">
                <div id="demo" class="carousel slide border container shadow rounded row" data-ride="carousel">
                    <a class="carousel-control-prev  bg-dark col-2" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon "></span>

                    </a>
                    <div class="carousel-inner bg-dark " >
                        <div class="carousel-item active" >
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from ACHIEVEMENT where ID='1' ";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"m-0\">$data[1] <br></p> ";
                        echo"<p class=\"m-0\">$data[2] <br></p> ";
                        echo"<p class=\"m-0\">$data[3] <br></p> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                            
                        </div>
                        <div class="carousel-item"> 
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from ACHIEVEMENT where ID='1' ";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"m-0\">$data[1] <br></p> ";
                        echo"<p class=\"m-0\">$data[2] <br></p> ";
                        echo"<p class=\"m-0\">$data[3] <br></p> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                        <div class="carousel-item">
                        <?php
                    ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from ACHIEVEMENT where ID='1' ";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"<p class=\"m-0\">$data[1] <br></p> ";
                        echo"<p class=\"m-0\">$data[2] <br></p> ";
                        echo"<p class=\"m-0\">$data[3] <br></p> ";
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                        </div>
                    </div>

                    
                    <a class="carousel-control-next  bg-dark  col-2" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
                        
            </div>
        </div>
    </div>
</div>

<!-- education -->
<div id="education" class="container shadow mb-5 bg-white rounded mt-3">
<div class="container">
        <div class="row">
            <div class="col-md-4 pt-3 pb-3">
                <div class="py-2 px-3">
                    <h2 class="pb-3">EDUCATION</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p class="px-3"> </p>
            </div> 
            <div class="col-md-8 d-flex flex-column justify-content-center px-5 py-5 border-left " style="background-color: #ebebeb">
                <div class=" shadow  bg-white rounded " >
                    <div id="accordion1" >
                        <div class="card "  >
                            <div class="card-header "  >
                            
                                <a class="card-link" data-toggle="collapse" href="#collapseOne1" >
                                    <i class="fas fa-pen ">&emsp;</i>
                                    <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from educaton where ID='1' and date='2010-05-07'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"$data[1]";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                                </a>
                            </div>
                            <div id="collapseOne1" class="collapse" data-parent="#accordion1">
                                <div class="card-body">
                                <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from educaton where ID='1' and date='2010-05-07'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"$data[4]";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header" >
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo1">
                                    <i class="fas fa-pen ">&emsp;</i>
                                    <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from educaton where ID='1' and date='2015-06-06'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"$data[1]";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                                </a>
                            </div>
                            <div id="collapseTwo1" class="collapse" data-parent="#accordion1">
                                <div class="card-body">
                                <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from educaton where ID='1' and date='2010-05-07'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"$data[4]";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree1">
                                    <i class="fas fa-pen ">&emsp;</i>
                                    <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from educaton where ID='1' and date='2015-06-06'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"$data[1]";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                                </a>
                            </div>
                            <div id="collapseThree1" class="collapse" data-parent="#accordion1">
                                <div class="card-body">
                                <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from educaton where ID='1' and date='2010-05-07'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo"$data[4]";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

   
<!-- PORTFOLIO -->
<div id="portfolio" class="container shadow p-3 mb-5 bg-white rounded mt-3">
<div class="container">
        <div class="row px-3">
            <div class="col-md-4 border-right">
                <div class="py-2">
                    <h2 class="pb-3">PORTFOLIO</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p></p>
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center">

            
                <div class="row">
                    <div class="col-md-6 ">
                        <a id="modal-318613" href="#modal-container-318613"  data-toggle="modal">
                            <img src="121820155_2779832892291163_5027139127195995414_o.jpg" alt="" class="img-fluid">
                        </a>
                        <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from projects where ID='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo" <p class=\"text-center\">$data[1]</p>";
                      
      
                        echo"</tr>";
                        }
                        ob_flush();
                        ?>
                      
                        <div class="modal fade" id="modal-container-318613" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        
                                            <img src="20926222957-xu-huong-marketing-ky-thuat-so.jpg" alt="" class="img-fluid">
                                            <?php
                        ob_start() ;
                        require 'connect.php';
                         $sql="SELECT * from projects where ID='1'";
    
                        $result=mysqli_query($conn,$sql);
                        $data_list=mysqli_fetch_all($result);
                        foreach($data_list as $data){
                        echo "<tr>";
                        echo" <p class=\"text-center\">$data[3]</p>";
                      
      
                        echo"</tr>";
                        }?>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <a id="modal-318613" href="#modal-container-318613"  data-toggle="modal">
                                <img src="image/2.jpg" alt="" class="img-fluid">
                            </a>
                            <p class="text-center"></p>
                            <div class="modal fade" id="modal-container-318613" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            
                                                <img src="image/2.jpg" alt="" class="img-fluid">
                                            
                                            <p class="text-center"></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>


                
            </div>
        </div>
    </div>
</div>
</div>

<!--tes-->
<div id="TESTIMONIALS" class="container-fluid shadow p-3 mb-5 rounded mt-3 bg-dark text-light">
    <div class="container">
        <div class="row px-3">
            <div class="col-md-4 ">
                <div class="py-2">
                    <h2 class="pb-3">TESTIMONIALS</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p></p>
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center ">
                <div id="demo1" class="carousel slide border container shadow rounded row" data-ride="carousel">
                    <a class="carousel-control-prev  bg-dark col-2" href="#demo1" data-slide="prev">
                        <span class="carousel-control-prev-icon "></span>
                    </a>
                    <div class="carousel-inner bg-dark " >
                        <div class="carousel-item active" >
                            <p class="m-0"></p>
                        </div>
                        <div class="carousel-item"> 
                            <p class="m-0"></p>
                        </div>
                        <div class="carousel-item">
                            <p class="m-0"></p>
                        </div>
                    </div>

                    
                    <a class="carousel-control-next  bg-dark  col-2" href="#demo1" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
                        
            </div>
        </div>
    </div>
</div>

<!-- experience -->
<div id="experience" class="container shadow mb-5 bg-white rounded mt-3">
<div class="container">
        <div class="row">
            <div class="col-md-4 pt-3 pb-3">
                <div class="py-2 px-3">
                    <h2 class="pb-3">EXPERIENCE</h2>
                    <div class="i_c"></div>  
                </div> <br>
                <p class="px-3"></p>
            </div> 

            <div class="col-md-8 d-flex flex-column justify-content-center px-5 py-5 border-left " style="background-color: #ebebeb">
                <div class=" shadow  bg-white rounded " >
                    <div id="accordion" >
                        <div class="card "  >
                            <div class="card-header "  >
                                <a class="card-link" data-toggle="collapse" href="#collapseOne" >
                                    <i class="fab fa-readme">&emsp;</i>
                                    
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header" >
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <i class="fab fa-readme">&emsp;</i>
                                   
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                   
                                </div>
                            </div>
                        </div>

                        <div class="card" >
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <i class="fab fa-readme">&emsp;</i>
                                    
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    /div>


<!-- contact -->
    <div id="contact" class="container shadow p-3 mb-5 bg-white rounded mt-3">
    <div class="container padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<p></p>
		</div>
	</div>
</div>	

<form action="" class="form">
	<div class="contaienr padding">	
		<div class="row text-center">
			<div class="col-md-4">
				
				<hr class="light">
				<div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" name="name" class="form-control" id="usr">
                </div>

			</div>
			    <div class="col-md-4">				
				<hr class="light">
				<div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" name="email" class="form-control" id="eml">
                </div>
			</div>
			<div class="col-md-4">				
				<hr class="light">
			
                <div class="form-group">
                <label for="usr">Number phone:</label>
                <input type="text" name="number_phone" class="form-control" id="nph">
                </div>

			</div>
			
		</div>
	</div>

<div class="row text-center padding">
		<div class="col-12">
        <div class="form-group">
            <label for="comment">Comment:</label>
           
            <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
            
            <button type="submit" class="btn btn-primary">send</button>

          
        </div>
<div class="col-12">
				<hr class="light-100">
				<h5>&copy; 306no.1</h5>
			</div>
          
    
    </form>
    <?php
    require 'connect.php';
    if(isset($_GET['name'])){
        $na=$_GET['name'];
    }
    if(isset($_GET['email'])){
        $em=$_GET['email'];
    }
    if(isset($_GET['number_phone'])){
        $np=$_GET['number_phone'];
    }
    if(isset($_GET['comment'])){
        $cm=$_GET['comment'];
    }
    if(isset($na) or isset($em) or isset($np)or isset($cm)){
        $sql="INSERT INTO contact(name,email,phone,comment) values ('$na','$em','$np','$cm')";     
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            include('class.smtp.php');
            include "class.phpmailer.php"; 
            $nFrom = "Quàng dUY hưng";    //mail duoc gui tu dau, thuong de ten cong ty ban
            $mFrom = 'hung321chiengden@gmail.com';  //dia chi email cua ban 
            $mPass = '09450117350';       //mat khau email cua ban
            $nTo = $na; //Ten nguoi nhan
            $mTo = $em;   //dia chi nhan mail
            $mail             = new PHPMailer();
            $body             = '
            Thank you for sending me lazy, I will respond as soon as possible.ddd';   // Noi dung email
            $title = 'thank you';   //Tieu de gui mail
            $mail->IsSMTP();             
            $mail->CharSet  = "utf-8";
            $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;    // enable SMTP authentication
            $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";    // sever gui mail.
            $mail->Port       = 465;         // cong gui mail de nguyen
            // xong phan cau hinh bat dau phan gui mail
            $mail->Username   = $mFrom;  // khai bao dia chi email
            $mail->Password   = $mPass;              // khai bao mat khau
            $mail->SetFrom($mFrom, $nFrom);
            $mail->AddReplyTo('hung321chiengden@gmail.com', 'Freetuts.net'); //khi nguoi dung phan hoi se duoc gui den email nay
            $mail->Subject    = $title;// tieu de email 
            $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
            $mail->AddAddress( $em, $nTo);
            // thuc thi lenh gui mail 
            if(!$mail->Send()) {
                echo 'Co loi!';
                 
            } 
            header("Location:contact.php");
        }
        else{
            echo "Không thêm được";
        }
        }

   
?>
 



 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
