<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php
		$color = 'black';
	?>
<center>
<Input type="Button" id="1"
name="Big_Button"
value="ON" style="background: <?php echo $color ?>; width: 100px; height: 25px;" class="rtyyu"
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