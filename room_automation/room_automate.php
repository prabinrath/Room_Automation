<?php
    session_start();
	if (empty(isset($_SESSION['email'])))
	{
		header('location:index.php?login_error=You have not logged in');
	}   
    if(isset($_SESSION['result']))
    {
        $result=$_SESSION['result'];
        parse_str($result);
    }
    elseif($_SESSION['result']=='unreachable')
    {
        echo "Reconnecting";        
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ROOM AUTOMATE</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
        <script type="text/javascript">
           setTimeout(function(){
               location.reload();
               window.location = "status_for_switch.php";
           },20000);//time in milliseconds
           function onClickHandler(elem,id)
            {                  
                    var value=elem.value;
                    alert(value);
                if(elem.value='ON')
                {
                    elem.style.background = 'red';
                    elem.value='Wait...';
                     window.location = "switchingreq_to_esp.php?index=" + id + "&status=" + value;
                }
                else if(elem.value='OFF')
                {
                    elem.style.background = 'lime';
                    elem.value='Wait...';
                    window.location = "switchingreq_to_esp.php?index=" + id + "&status=" + value;
                }
            }                            
        </script>
		<?php include'headers.php';?><br>
		<div class="container-fluid">
            <div class="banner-image">
            	<div class="row">
	                <div class= "col-md-6 col-sm-12 banner-content_">	                	
                        <center><h1 style="color: #fffdd0; font-weight: bold; font-family: serif;  font-size: 78px; flex-wrap: wrap;">ROBOREX</h1></center><br>
	                    <center><h1 style="color: #fffdd0; font-weight: bold; font-family: serif;  font-size: 78px; flex-wrap: wrap;">Room Automation</h1></center>	                    
	                </div>
	                <div class="col-md-6 col-sm-12 banner-content_"><br><br><br>						
	                </div>
            	</div>
            	<br><br><br><br>
            	<div class="row">
            		<div class="col-md-4"><div class="test"></div>
                        <center>
                			<div class="switch">
                    			<h1 style="font-size: 25px; font-family: serif; font-weight: bold;">FAN 1 &nbsp &nbsp &nbsp &nbsp                                    
                                        <input type="Button" class="btn switch_control" id="1" name="fan1" value="<?php
                                           if(isset($r1))
                                            {   // from status_for_switch.php (asking status to esp module)
                                                if($r1==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r1==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }
                                            }                                               
                                            else
                                            {// when connection is not available, at that time it can be controlled by bluetooth, ir remote etc.
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color;?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">
                                  
                    			</h1>
                                <h1 style="font-size: 25px; font-family: serif; font-weight: bold;">FAN 2 &nbsp &nbsp &nbsp &nbsp                                    
                                        <input type="Button" class="btn switch_control" id="2" name="fan2" value="<?php
                                             if(isset($r2))
                                            {   // from status_for_switch.php
                                                if($r2==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r2==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }                                                 
                                            }
                                            else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">
                                    
                                </h1>
                                <h1 style="font-size: 25px;  font-family: serif; font-weight: bold;">FAN 3 &nbsp &nbsp &nbsp &nbsp                                    
                                        <input type="Button" class="btn switch_control" id="3" name="fan3" value="<?php
                                            if(isset($r3))
                                            {   // from status_for_switch.php
                                                if($r3==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r3==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }   
                                            }                                        
                                           else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">                      
                                </h1>
                			</div>
                        </center>
            		</div>         
            		<div class="col-md-4">
                        <center>
                			<div class="switch">
                				<h1 style="font-size: 25px;  font-family: serif; font-weight: bold; ">LIGHT 1 &nbsp &nbsp &nbsp &nbsp 				                				    
                                        <input type="Button" class="btn switch_control" id="4" name="light1" value="<?php
                                             if(isset($r4))
                                            {   // from status_for_switch.php
                                                if($r4==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r4==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }
                                            }                                            
                                            else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">
                                    
                                </h1>
                                <h1 style="font-size: 25px;  font-family: serif; font-weight: bold; ">LIGHT 2 &nbsp &nbsp &nbsp &nbsp                                    
                                        <input type="Button" class="btn switch_control" id="5" name="light2" value="<?php
                                             if(isset($r5))
                                                {   // from status_for_switch.php
                                                if($r5==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r5==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }                                                                              
                                            }
                                            else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">
                                    
                                </h1>
                                <h1 style="font-size: 25px; font-family: serif; font-weight: bold; ">LIGHT 3 &nbsp &nbsp &nbsp &nbsp  
                                        <input type="Button" class="btn switch_control" id="6" name="light3" value="<?php
                                           if(isset($r6))
                                            {   // from status_for_switch.php
                                                if($r6==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r6==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }
                                            }
                                             else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">                       
                                </h1>
                			</div>
                        </center>
            		</div> 
            		<div class="col-md-4 ">
                        <center>
                			<div class="switch">
                				<h1 style="font-size: 25px; font-family: serif; font-weight: bold; ">SWITCH 1 &nbsp &nbsp &nbsp &nbsp                                      
                                        <input type="Button" class="btn switch_control" id="7" name="switch1" value="<?php
                                            if(isset($r7))
                                            {   // from status_for_switch.php
                                                if($r7==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r7==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }                                
                                            }   
                                            else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">
                                    
                                </h1>
                                <h1 style="font-size: 25px;  font-family: serif; font-weight: bold; ">SWITCH 2 &nbsp &nbsp &nbsp &nbsp              
                                    
                                        <input type="Button" class="btn switch_control" id="8" name="switch2" value="<?php
                                            if(isset($r8))
                                            {   // from status_for_switch.php
                                                if($r8==0)
                                                {
                                                    echo "OFF";     //off means status is (0)
                                                    $color = 'red';
                                                }
                                                else if ($r8==1) // 1 refers to on
                                                {
                                                    echo "ON";
                                                    $color = 'lime';
                                                }                                      
                                            } 
                                            else
                                            {
                                                echo "unreachable";
                                                $color = 'yellow';
                                            }
                                            ?>" style="background: <?php echo $color ?>; width: 120px; font-size: 18px;  font-weight: bold;" onClick="onClickHandler(this,this.id)">                      
                                </h1>
                			</div>
                        </center>
            		</div>
            	</div>
            	<br><br><br><br>
            	<center><p style="color: #fff111; font-size:35px; font-family: serif; font-weight: bold; ">
            		To know the details of Last 5 hours <br><center><form action = "data_fetch.php" target="_blank"><button type="submit" style="width: 350px; height: 50px;"><a  href="data_fetch.php" target="_blank" style="color: black; font-weight: bold; font-size: 30px;">Click Here.</a></button></form></center>
            	</p></center><br><br>
            <form action="video.php" target="_blank">
            	<center><button class="btn btn-info" type="submit" style="font-size: 15px; font-weight:bold; color: black;">Watch Live Video  </a><span class="glyphicon glyphicon-play-circle" style="color: black"></span></button></center> <br><br><br><br>
            </form>
                <br><br><br><br><br><br><br><br>
            </div>            
        </div>        
        <?php include'footer.php';?>
	</body>
</html>