<!DOCTYPE html>
<html>
<head>

</head>
<body>
<center>
<Input type="Button" id="1"
name="Big_Button"
value="ON" style="background: lime; width: 100px; height: 25px;" class="rtyyu"
onClick="onClickHandler(this,this.id)">
</center>
<script type="text/javascript">
function onClickHandler(elem,id) {
	//alert(class_);
	//alert(elem.value);
	var value=elem.value;
if(elem.style.background == 'lime')
{
	elem.style.background = 'red';
	 elem.value = 'OFF';

	 window.location = "test.php?id=" + id + "&status=" + value;
}
else if(elem.style.background == 'red')
{
	elem.style.background = 'lime';
	elem.value = 'ON';
	window.location = "test.php?id=" + id + "&status=" + value;
}
}
</script>

</body>
</html>

<?php 
/*

<html>
<head>
    <title>Button Fun</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    

   <script type="text/javascript">
    $("button").click(function(){
    if(clicked){
        $(this).css('background-color', 'red');
        clicked  = false;
    } else {
        $(this).css('background-color', 'blue');
        clicked  = true;
    }   
});
</script>
    
</head>
<body>
    <button id="dynamic-button" class="blue" onclick="click_(this.id)">Press</button>
     <button id="dynamic-button_" class="blue" onclick="click_(this.id)">Prfess</button>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
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
        // function to change class
        function changeColor($elm, classes) {                
            var className = $elm.attr('class');                
            var index = $.inArray(className, classes);

            $elm.removeClass(className);
            index++;                
            if (index === classes.length) {
                index = 0;
            }
            $elm.addClass(classes[index]);                
        }        
        // equivalent to $(document).ready
        function click_(id){
        	      
            // cache button element
            //var $button = $("#dynamic-button");
            var $button = $("#"+id);
            var classes = ["red", "green"];
            // attach event with $button
            $button.on("click", function (click_){                
                changeColor($(this), classes);                
            });
        }           
    </script>
<script type="text/javascript">
/*function myfunction()
{
	//document.getElementById("1").style.background-color = blue;
	window.location = "login_submit.php";
	setTimeout(myfunction(),5000);


}
clicked = true;
    $(document).ready(function(){
        $("button").click(function(){
            if(clicked){
                $(this).css('background-color', 'red');
                clicked  = false;
            } else {
                $(this).css('background-color', 'blue');
                clicked  = true;
            }   
        });
    });
set
</script>
<center><button type="submit" name="fan1" id ="1" style="background-color: green; width: 100px; height: 30px;" >ON</button></center>
<?php
parse_str("r1=1&r2=0&r3=1&r4=0&r5=1&r6=0&r7=1&r8=0");
/*echo "r1 is =".$r1."<br>";
echo "r2 is =".$r2."<br>";
echo "r3 is =".$r3."<br>";
echo "r4 is =".$r4."<br>";
echo "r5 is =".$r5."<br>";
echo "r6 is =".$r6."<br>";
echo "r7 is =".$r7."<br>";
echo "r8 is =".$r8."<br>";

<script type="text/javascript">
    function pageRedirect() {
      window.location.href = "https://www.tutorialrepublic.com/";
    }      
</script> 
<script type="text/javascript">
$("#1").click(function(){
      //this will find the selected website from the dropdown
      var go_to_url = $("index.php");
      
      //this will redirect us in same window
      window.location = go_to_url;
   });
</script>

$dt = new DateTime();
$min = $dt->format('H:i:s');
echo $min;

 
</body>
</html>
*/
?>