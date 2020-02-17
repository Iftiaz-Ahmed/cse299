<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center;">

	<img src="pic2.jpg">

	<div>
		<p id="ans1"></p>
		<p id="ans2"></p>
		<p id="path"></p>
	</div>



	<script type="text/javascript">

		var route1 = [
						[1,1],
		      			[1,5], 
		      			[2,8], 
		      			[3,12], 
		      			[4,6]
		      		 ];

		var x = 0;
		var y = 1;
		var latitude1;
		var latitude2;
		var longitude1;
		var longitude2;
		var total=0;

		for(x=0; x<4; x++,y++){
		  latitude1=route1[x][0];
		  longitude1=route1[x][1];
		  latitude2=route1[y][0];
		  longitude2=route1[y][1];
		  distance=Math.sqrt(Math.pow((latitude1-latitude2),2)+Math.pow((longitude1-longitude2),2));
		  console.log(distance);
		  total = total + distance;
		  
		}
		console.log(total);
		document.getElementById('ans1').innerHTML = "Route 1: " + total;


		var route2 = [
						[1,1],
		      			[2,3], 
		      			[2,4], 
		      			[3,4], 
		      			[4,6]
					 ];

		x = 0;
		y = 1;
		latitude1;
		latitude2;
		longitude1;
		longitude2;
		var total1=0;

		for(x=0; x<4; x++,y++){
		  latitude1=route2[x][0];
		  longitude1=route2[x][1];
		  latitude2=route2[y][0];
		  longitude2=route2[y][1];
		  distance=Math.sqrt(Math.pow((latitude1-latitude2),2)+Math.pow((longitude1-longitude2),2));
		  console.log(distance);
		  total1 = total1 + distance;
		}
		console.log(total1);
		document.getElementById('ans2').innerHTML = "Route 2: " + total1;

		if (total<total1){
			document.getElementById('path').innerHTML = "Route 1 is the shortest path!";
		}else {
			document.getElementById('path').innerHTML = "Route 2 is the shortest path!";
		}
	</script>


</body>
</html>