<div class="navbar navbar-inverse navbar-fixed-top">  
    <div class="container"> 
        <div class="navbar-header">       
            <div class="navbar-brand " href="#"><div class="logo"></div><div class="logo-write" href="#">Cyborg Room</div></div>  
        </div>  
        <div class="collapse navbar-collapse" id="myNavbar">    
            <ul class="nav navbar-nav navbar-right">    
                <?php
                    if ((isset($_SESSION['email']))) {    
                        ?>                                    
                    <li ><a href = "logout.php" style="color: #d3d3d3; padding-right: 25px;"><span class = "glyphicon glyphicon-off"></span> LogOut</a></li> 
                    <li ><a href = "about_us.php" style="color: #d3d3d3; padding-right: 25px;"><span class = "glyphicon"></span>About Us</a></li>
                    <li style="color: #d3d3d3; padding-top: 15px; padding-left: 7px;"><?php echo 'Hello ',$_SESSION['name'] ;  ?><span class="glyphicon glyphicon-glyphicon glyphicon-chevron-down" style="padding-left: 5px;"></span></li>                       
                <?php 
                } else
                    { 
                    ?> 
                    <li><a href="signup.php" style="color: #d3d3d3;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>          
                    <li><a href="login.php" style="color: #d3d3d3;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                        <?php          
                     } 
                     ?>     
            </ul>        
        </div>    
    </div> 
</div>
