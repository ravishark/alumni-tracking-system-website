<?php
include('dbcon.php');
$output="";
if(isset($_POST['search'])){

    $searchq=$_POST['search'];
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

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title>Search</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    function searchq(){
        var searchTxt=$("input[name='search']").val();
        $.post("search1.php",{searchVal: searchTxt},function(output){
        $("#output").html(output)
        });
    }
    </script>
  </head>
  <body>
    <form action="search.php" method="post" >
      <input type="text" name="search" placeholder="Search for alumni....." onkeydown="searchq();" />
      <input type="submit" value="Go" />
    </form>
  <?php print("$output");?>
  </body>
</html>