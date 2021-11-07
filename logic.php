<?php require "db.php"?>
<?php
session_start();


if(isset($_GET['file'])){
    $id=$_GET['file'];
    $query2="SELECT * FROM institution WHERE id=$id";
    $res1=mysqli_query($conn,$query2);
    $it=mysqli_fetch_assoc($res1);
   }

#fetching from database
$query="SELECT * FROM institution ORDER BY head DESC";
$res=mysqli_query($conn,$query);
$paste=mysqli_fetch_all($res,MYSQLI_ASSOC);

#validating for admins
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM validating where names='$username' and password='$password'";
$result=mysqli_query($conn,$query);
$check=mysqli_fetch_assoc($result);

if($check['names']===$username && $check['password']===$password){
   echo "<script>window.location.href='admin.php'</script>";
 $_SESSION['name']=$username;
 $GLOBALS['z']=$GLOBALS['username'];
}else if($check['names']!==$username || $check['password']!==$password){
    echo"<h2>wrong username or password<h2";
}
$z;
}
#putting data into database
if(isset($_POST['send'])){
    $heading=$_POST['heading'];
    $place=$_POST['place'];
    $username=$_SESSION['name'];
    $content=$_POST['content'];
    $query="INSERT INTO institution(head,content,uid,poster)  values('$heading','$content','$place','$username')";
    mysqli_query($conn,$query);
    }

    if(isset($_GET['file2'])){
        $id=$_GET['file2'];
        $query="DELETE FROM institution WHERE id='$id'";
        mysqli_query($conn,$query);
      }
?>