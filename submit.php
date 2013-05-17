<script type="text/javascript">
        setTimeout(function() { location.href = 'index.html?login=true'; }, 3000);
    </script>;
<?php
    $con=mysqli_connect("localhost", "root","", "testing");
    if(mysqli_connect_errno($con))
        echo 'Database Error';
    
    
    $user=$_POST['username'];
    $pass=$_POST['password'];
    
    $query="select * from auth where username='$user'and password='$pass'";
    $result=mysqli_query($con, $query);
    $row=  mysqli_num_rows($result);
    if($row===1)
    {
        
        echo '<script>alert("login Successfull")</script>';
    
     $col=  mysqli_fetch_array($result);
     
     
     echo $col['designaion'];
if ($col['designation']=="hr")
{
    header("Location: hr.php");
}
     else if($col['designation']=="ceo")
     {
        header("Location: ceo.php");
     }
          else if($col['designation']=="emp")
     {
        header("Location: emp.php");
     }
 else {
     echo "NO AUTHORITY";    
     }
        
    }
    else {echo '<script>alert("login failed")</script>';
        header("Location: index.html ");
}
        
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
