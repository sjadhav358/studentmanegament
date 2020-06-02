<?php
$conn = mysqli_connect('localhost','root',"",'itcorner');

echo " vedio backend";
echo $class = $_POST['class'];

echo $divi = $_POST['divi'];


$q= " SELECT * from `vedio` where class='$class' AND division ='$divi'";
$result = mysqli_query($conn,$q);
 if(mysqli_num_rows($result))
 {
	 while($row= mysqli_fetch_array($result))
	 {
		 $vedio = $row['vediolecture'];

	 }
	 header('location:studentprofile.php?vedio='.$vedio);
	 echo $vedio;
 }
else
{
	echo " file not selected";
}
 



?>