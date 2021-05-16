<!DOCTYPE html>
<html>
<style>
.select-css {
  display: block;
  font-size: 16px;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  width: 25%;
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
 
  appearance: none;
  background-color: #fff;
 
}
.select-css::-ms-expand {
  display: none;
}
/* Hover style */
.select-css:hover {
  border-color: #888;
}
/* Focus style */
.select-css:focus {
  border-color: #aaa;
  box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
  box-shadow: 0 0 0 3px -moz-mac-focusring;
  color: #222; 
  outline: none;
}

.select-css option {
  font-weight:normal;
}

.select-css:disabled, .select-css[aria-disabled=true] {
  color: graytext;
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22graytext%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
}

.select-css:disabled:hover, .select-css[aria-disabled=true] {
  border-color: #aaa;
}


body {
  margin: 2rem;
}
.button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
  opacity: 0.6;
  transition: 0.3s;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
.button:hover {opacity: 1}
</style>
<head>
  <title>
  </title>
</head>

<body>
<link rel="stylesheet" href="style.css">
<div class="topnav">

  <a href="paginaprincipala.php">Home</a>
  <a href="driverstandings.php">Driver Standings</a>
  <a href="constructorstandings.php">Constructor Standings</a>
  <a href="joc.php">Joculet</a>
  <a href="adaugarepunctaje.php">Adaugare Punctaje</a>
</div>

<form method="POST" action="alta.php">
  City:
  <select name="cursa" id="cursa" class="select-css">
    <option align=center disabled selected >     --Select City --          </option>
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
		$r = mysqli_query($a,"SELECT Nume FROM curse ");
		while($data = mysqli_fetch_array($r))
        {
            echo "<option value='". $data[0] ."'>" .$data[0] ."</option>"; 
		} } 
	mysqli_close($a);		
	}
?></select>
Piloti:
  <select name="piloti" id="piloti " class="select-css">
    <option disabled selected>-- Select Pilot --</option>
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
		$r = mysqli_query($a,"SELECT Nume FROM piloti ");
		while($data = mysqli_fetch_array($r))
        {
            echo "<option value='". $data[0] ."'>" .$data[0] ."</option>"; 
		} } 
mysqli_close($a);		
	}
?></select>

Pozitie:
  <select name="locul" id="locul" class="select-css">
    <option disabled selected>-- Pozitie --</option>
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
		$r = mysqli_query($a,"SELECT Locul FROM locul ");
		while($data = mysqli_fetch_array($r))
        {
            echo "<option value='". $data[0] ."'>" .$data[0] ."</option>"; 
		} } 
mysqli_close($a);		
	}
?></select><br>
 
<input class="button" type="submit" value="Trimite"> 
</form>
<?php
	$a=mysqli_connect("localhost","root");
	if(!$a)
		echo "mesaj";
	else
	{	
	$b=mysqli_select_db($a,"belciu");
		if( isset($_POST['piloti']) && !empty($_POST['piloti']))
		{	
				$cursa=$_POST['cursa'];
				$piloti=$_POST['piloti'];
				$locul=$_POST['locul'];
				if( isset($_POST['locul']))
				{
							$r = mysqli_query($a,"SELECT Punctaj FROM locul where Locul=$locul");
							$data = mysqli_fetch_array($r);
							$query1="UPDATE piloti SET Punctaj=Punctaj+'$data[0]' WHERE Nume='$piloti'";
							
								if (!mysqli_query($a,$query1)) 
								
							echo mysqli_error($a);
							$s=mysqli_query($a,"select idMasina from piloti where Nume='$piloti'");
							$data1 = mysqli_fetch_array($s);
							$query2="UPDATE masini set Punctaj=Punctaj+'$data[0]' where idMasina=$data1[0]";
							if (!mysqli_query($a,$query2)) 
								echo mysqli_error($a);
							
									
									
							}
					
						
									
						mysqli_close($a);
			
					}
					
				}
			
				
			
	
?>
</body>
</html>
