<!DOCTYPE html>
<html>
<body>

<?php
session_start();

 if(isset($_SESSION['string']) && $_SESSION['string']=="r1=0&r2=1&r3=0" && $_SESSION['control']==1)
    {
        $result=$_SESSION['string'];
         parse_str($result);
 if($r1==0)
 {
 	echo'right';
 }   
echo "r1 is =".$r1."<br>";
echo "r2 is =".$r2."<br>";
echo "r3 is =".$r3."<br>";
echo "r4 is =".$r4."<br>";
echo "r5 is =".$r5."<br>";
echo "r6 is =".$r6."<br>";
echo "r7 is =".$r7."<br>";
echo "r8 is =".$r8."<br>";

$_SESSION['control']= $_SESSION['control']+1;
}

$dt = new DateTime();
$min = $dt->format('H:i:s');
echo $min;
?>
<script type="text/javascript">
            $(document).ready(function()
            {
                $(".switch_control").click(function()
                    {
                        var on = $(this).attr('id');
                        $.get("http://192.168.43.42:80/",{switch_number=on});
                    });
            });
        </script>
        <?php
        	if(isset($result))
        	{
        		echo 'available';
        	}
        ?>
 
</body>
</html>