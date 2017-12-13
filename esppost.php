<?php
	$Temp=$_GET("temperature");
	$Humidity=$_GET("humidity");
	$Write="<p>Temp=:".$Temp."Celecius</p><br>"."<p>HUmidity:".$Humidity"%</p>";
	file_put_contents('index.html', $Write);
	?>