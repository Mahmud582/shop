<?php

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body  >
    

<?php

if(isset($_REQUEST["action"])){

    if($_REQUEST["action"]=="true"){

        echo "<font color='green'>Data Insert</font>";
    }



}


?>


    
<form   action="" method="POST" >


    <input type="text" name="search" placeholder="Enter Search Value"  />
    
    <input type="submit" name="search_item"  value="Search"   />


</form>

<br/>
<br/>



<table  border="2px" >	

<tr>
<td><b>S_Num</b></td>
<td><b>DB_ID</b></td>
<td><b>F_Name</b></td>
<td><b>L_Name</b></td>
<td><b>Email</b></td>
<td><b>Password</b></td>
<td><b>Photo</b></td>
<td><b>Action</b></td>

</tr>






<?php


//search

if(isset($_REQUEST["search_item"])){
	
	
 $search= $_REQUEST["search"];
 
 

 


 





$query = "SELECT* from user1 where first_name='$search' ;";
$run = mysqli_query($conn,$query);


if($run==true){

$s_num=1;

while($mydata = mysqli_fetch_array($run)){

    
    echo '<tr>
     
    <td>'.$s_num.'</td>
    <td>'.$mydata["id"].'</td>
    <td>'.$mydata["first_name"].'</td>
    <td>'.$mydata["lname"].'</td>
    <td>'.$mydata["email"].'</td>
    <td>'.$mydata["password"].'</td>
	<td><img width="60" src="tmp/'.$mydata["file_name"].'"/> </td>
	 
    <td> <a href="edit.php?edit_id='.$mydata["id"].'">Edit</a> | <a href="delete.php?id='.$mydata["id"].'">Delete</a>  </td>
    
    
 


</tr>';
$s_num++;


}


}


}

?>

 


</table> 
</body>
</html>


