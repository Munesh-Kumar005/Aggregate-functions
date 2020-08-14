<?php
include 'db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Aggregate</title>
  </head>
  <body>
    
<div class="container">

	<form method="post" action="">

<input type="submit" name="sum" class="btn btn-primary" value="Sum">

<input type="submit" name="min" class="btn btn-secondary" value="Min">

<input type="submit" name="max" class="btn btn-danger" value="Max">

<input type="submit" name="avg" class="btn btn-warning" value="Avg">

<input type="submit" name="count" class="btn btn-success" value="Count">


		
	</form>
	
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


<?php
if (isset($_POST['sum'])) {
	    
$query = "SELECT NAME, SUM(SALARY) FROM employees GROUP BY NAME";        

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

       echo "Total ". $row['NAME']. " = ". $row['SUM(SALARY)'];
  

       echo "<br />";
   }
}
?>


<?php
if (isset($_POST['min'])) {
	    
$query = "SELECT  MIN(AGE) FROM employees ";        

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

       echo "Total ". $row['MIN(AGE)'];
  

       echo "<br />";
   }
}
?>

<?php
if (isset($_POST['max'])) {
	    
$query = "SELECT  MAX(AGE) FROM employees ";        

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

       echo "Total ". $row['MAX(AGE)'];
  

       echo "<br />";
   }
}
?>

<?php
if (isset($_POST['avg'])) {
	    
$query = "SELECT  AVG(SALARY) FROM employees ";        

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

       echo "Total ". $row['AVG(SALARY)'];
  

       echo "<br />";
   }
}
?>


<?php
if (isset($_POST['count'])) {
	    
$query = "SELECT  COUNT(*) FROM employees ";        

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

       echo "Total ". $row['COUNT(*)'];
  

       echo "<br />";
   }
}
?>