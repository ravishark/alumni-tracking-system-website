<?php
include('dbcon.php');
$output="";
if(isset($_POST['search'])){

    $searchq=$_POST['searchVal'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $run="SELECT *FROM admin WHERE  username LIKE '%$searchq%' OR alumniname LIKE '%$searchq%' OR registrationno LIKE '%$searchq%'";
    $query=mysqli_query($con,$run);
    
    if(!$query || mysqli_num_rows($query)==0)
    {
        $output='No search results found....';
    }
    else{
        while($row= mysqli_fetch_array($query)){
            $email=$row['email_id'];
            $aname=$row['alumniname'];
            $regno=$row['registrationno'];
            $add=$row['address'];
            $output .='<div>'.$aname.'</div>';
        }

    }
}
 echo($output);
?>