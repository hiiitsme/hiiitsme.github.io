<?php
	$Temp=$_POST("temperature");
	$Humidity=$_POST("humidity");
	$Write="<p>Temp=:".$Temp."Celecius</p><br>"."<p>HUmidity:".$Humidity"%</p>";
	file_put_contents('index.html', $Write);
	?>