<?php

$conn = mysqli_connect('localhost','root',"",'admin');
 if($_POST['submit'])
 {
  echo $name = $_POST['question'];

$keywords="";
$keyword=[];
$index=1;
$sql = " select * from question";
$matching=[];

$result  = $conn->query($sql);

 $num = $result->num_rows;
  echo $num;
		 
		 
		 while($row = mysqli_fetch_array($result))
		 {
			 $count=0;
			 $keywords=$row['keyword'];
			 
			 $keyword=explode(",",$keywords);
			 
			 foreach($keyword as $key){
				
				 if(strpos($name, $key) !== false){
				   
					 $count++;
				 }
				 
			 }
			 $matching[$index]=$count;
			 $index++;
		 }
		 
   $largest=$matching[1];
    $ans=0;
for($i=1; $i<=61; $i++){
	if($matching[$i]>$largest){
		$largest=$matching[$i];
		$ans=$i;
	}
}
	
$sql="select * from question where sr_no=$ans";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
	    echo $ans=$row['answers'];
	//echo "Answer=".$row['answers'];
}
 }
	
// header('location:admin.php?ans='.$ans);

 


?>