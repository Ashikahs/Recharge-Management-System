<?php
if(isset($_POST['username'])){
    $username=$_POST['username'];
}  
if(isset($_POST['email'])){  
    $email=$_POST['email'];
}
if(isset($_POST['pwd1'])){    
    $pwd1=$_POST['pwd1'];
}
if(isset($_POST['pwd2'])){    
    $pwd2=$_POST['pwd2'];
}
if(isset($_POST['tel'])){    
    $tel=$_POST['tel'];
}
if(!empty($username)|| !empty($email) || !empty($pwd1) || !empty($pwd2)|| !empty($tel)){
    $db=new PDO('mysql:host=localhost;dbname=registration','root','');
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT email From login1 where email= ? Limit=1";
        $INSERT="INSERT Into login1(username,email,pwd1,pwd2,tel) values(?,?,?,?,?)";

        $stmt=$db->prepare($SELECT);
        $stmt->bind_param("s",$_POST['email']);
        $stmt->execute();
        $stmt->bind_result($_POST['email']);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        
        if($rnum==0)
        {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssii",$username,$email,$pwd1,$pwd2,$tel);
            $stmt->execute();
            echo "You are registered successfully";


        }
        else{
            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
    }
}
else{
    echo "All field are required";
    die();
}