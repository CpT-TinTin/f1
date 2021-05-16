<style>
<style>
#container {
  width:  100%;
  height: auto;
}

.row {
  position: relative;
  display: block;
  width: 100%;
  height: 100px;
  border-bottom: 1px solid #AFAFAF;
}

.name {
  position: relative;
  display: inline-block;
  width: 75%;
  line-height: 45px;
}

.score {
  position: relative;
  display: inline-block;
  width: 25%;
}
.row1 {
	position: relative;
  display: block;
  width: 100%;
  height: 100px;
  border-bottom: 1px solid #AFAFAF;
  background: gold;
}

.row2 {
	position: relative;
  display: block;
  width: 100%;
  height: 100px;
  border-bottom: 1px solid #AFAFAF;
  background: #c0c0c0;
}

.row3{
	position: relative;
  display: block;
  width: 100%;
  height: 100px;
  border-bottom: 1px solid #AFAFAF;
  background: #cd7f32;
}
</style>
</style>
<link rel="stylesheet" href="style.css">
<div class="topnav">

  <a href="paginaprincipala.php">Home</a>
  <a href="driverstandings.php">Driver Standings</a>
  <a href="constructorstandings.php">Constructor Standings</a>
  <a href="joc.php">Joculet</a>
  <a href="adaugarepunctaje.php">Adaugare Punctaje</a>
</div>

<?php
	$a=mysqli_connect("localhost","root","");
	if(!$a)
		echo "mesaj";
	else
	{
		$b=mysqli_select_db($a,"belciu");
		if(!$b)
			echo "NU";
		else{
			$sql = "SELECT Punctaj, Nume, Poza FROM piloti ORDER BY Punctaj DESC";
		$result = mysqli_query($a, $sql);

if (mysqli_num_rows($result) > 0) {
	echo '<div id="container" align="center">';
	$s=1;
  while($row = mysqli_fetch_assoc($result)) {
	  if ($s=="1")
	  {
		  echo '<div class="row1">';
	echo  '<div class="name">';
	echo '<img src="data:image/png;base64,'.base64_encode($row["Poza"]).'" width="120px" height="100px" align="left""/>'." ";
	echo $row["Nume"];
	echo '</div>';
	echo '<div class="score">';
  echo $row["Punctaj"];
  echo '</div>';
  $s++;
  ;
  
	  }
	else   if ($s=="2"){
		  echo '<div class="row2">';
	echo  '<div class="name">';
	echo '<img src="data:image/png;base64,'.base64_encode($row["Poza"]).'" width="120px" height="100px" align="left""/>'." ";
	echo $row["Nume"];
	echo '</div>';
	echo '<div class="score">';
  echo $row["Punctaj"];
  echo '</div>';
  $s++;
		  
	  
	  }	
	  else 
		  if ($s=="3")
	  {
		  echo '<div class="row3">';
	echo  '<div class="name">';
	echo '<img src="data:image/png;base64,'.base64_encode($row["Poza"]).'" width="120px" height="100px" align="left""/>'." ";
	echo $row["Nume"];
	echo '</div>';
	echo '<div class="score">';
  echo $row["Punctaj"];
  echo '</div>';
$s++;
	  }
	  else 
	  {
		 
	  echo '<div class="row">';
	echo  '<div class="name">';
	echo '<img src="data:image/png;base64,'.base64_encode($row["Poza"]).'" width="120px" height="100px" align="left""/>'." ";
	echo $row["Nume"];
	echo '</div>';
	echo '<div class="score">';
  echo $row["Punctaj"];
  echo '</div>';
	  }
  
  }
  echo '</div>';
 
} else {
echo "0 results";}
  
mysqli_close($a);		
	}
			
			
		}
		?>