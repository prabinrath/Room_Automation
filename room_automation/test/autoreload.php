//Autorefresh page
<!DOCTYPE html>
<html>
<head>
	<title>Page Reload after 10 seconds</title>
</head>
<body>


<h2>Hi, I am Itsolutionstuff.com</h2>


</body>


<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },10000);
</script>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Page Reload after 10 seconds</title>
</head>
<body>


<h2>Hi, I am Itsolutionstuff.com</h2>


</body>


<script type="text/javascript">
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 3000);
</script>
</html>