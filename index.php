$?php
//index.php


$error='';
$username='';
$email='';
$phone='';
$message='';

if(isset($_POST["submit"])

if($error=='')
{
    $servername="localhost";
    $username="root";
    $email="root";
    $phone="root";
    $message="root";
    $dbname="myDB";

}

//create connection
$conn= msqli_connect($servername,#username,$email,$phone,$message,$dbname);

//check connection

if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}
$sql="INSERT INTO users(name, email, phone, message)
VALUES('$name','$email','$phone', '$message')"

if (mysqli_query($conn,$sql)) {
    //echo "new record created successfully";
}else{
    echo "error: ".$sql ."<br>" .mysqli_error($conn);
}


mysqli_close($conn);
$error='<label class="text-success">New record created successfully </label>';
$name='';
$email='';
$phone='';
$message='';
}
}
?>