<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Control LED with Raspberry Pi using Apache Webserver </title>
</head>
	<style>
	body 
	{
		background-color: rgb(212,250,252);
		font-family: 'Arial';
		
	}
	.red {
		background-color: red;
		width: 10em; height: 4em;
		font-size: 20px;
	}
	.yellow {
		background-color: yellow;
		width: 10em; height: 4em;
		font-size: 20px;
	}
	.green { 
		background-color: green;
		width: 10em; height: 4em;
		font-size: 20px;
	}
	.blue{
		background-color: blue;
		width: 10em; height: 4em;
		font-size: 20px;
	</style>

       <body>
       <center><h1>Truk!!!!</h1>
         <form method="get" action="index.php">
            <input class ="red" type="submit"  value="Center" name="ron">
	    <input class=" red" type="submit"  value="Right" name="roff">
	    <br /> <br />
	    <input class="yellow" type="submit" value="Center" name="yon">
	    <input class="yellow" type="submit" value="Left" name="yoff">
      	    <br /> <br />
	    <input class="green" type="submit" value="Stop" name="gon">
	    <input class="green" type="submit" value="Backward" name="goff">
	    <br /> <br />  
	    <input class="blue" type="submit" value="Stop" name="bon">
	    <input class="blue" type="submit" value="Forward" name="boff">
	    <br /> <br />

</form>

                         </center>
<?php
	shell_exec("gpio -g mode 14 out");
	shell_exec("gpio -g mode 15 out");
	shell_exec("gpio -g mode 18 out");
	shell_exec("gpio -g mode 23 out");
	
  if(isset($_GET['roff']))
  {
		shell_exec("gpio -g write 14 0");
  }
  else if(isset($_GET['ron']))
  {
    shell_exec("gpio -g write 14 1");
	}
	else if(isset($_GET['yon']))
	{
		shell_exec("gpio -g write 15 1");
	}
	else if(isset($_GET['yoff']))
	{
		shell_exec("gpio -g write 15 0");
	}
	else if(isset($_GET['gon']))
	{
		shell_exec("gpio -g write 18 1");
	}
	else if(isset($_GET['goff']))
	{
		shell_exec("gpio -g write 18 0");
	}
	else if(isset($_GET['bon']))
	{
		shell_exec("gpio -g write 23 1");
	}
	else if(isset($_GET['boff']))
	{
		shell_exec("gpio -g write 23 0");
	}
	
	
?>
   </body>
</html>