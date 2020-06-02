<?php
$conn = mysqli_connect('localhost','root',"",'admin');

if(isset($_POST['submit']))
{
$class = $_POST['class'];

$divi = $_POST['divi'];


$q= " SELECT * from `utimetable` where class='$class' AND division ='$divi'";
$result = mysqli_query($conn,$q);
 if(mysqli_num_rows($result))
 {
	 while($row= mysqli_fetch_array($result))
	 {
		 $time = $row['timetable'];

	 }
	 header('location:studentprofile.php?file='.$time);
	 echo $time;
 }
else
{
	echo " file not selected";
}
 

}

?>