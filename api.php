<?php  include("connec.php");?>
<?php include("utility.php");?>
<?php

if(isset($_REQUEST['action'])){
    $action=$_REQUEST['action'];
    if($action=="save"){
        if(isset($_FILES['file'])){
            $fname=$_REQUEST['fname'];
            $price=$_REQUEST['price'];
            echo "$price";
            $file=$_FILES['file'];
            $src_path=$file['tmp_name'];
            $name=$file['name'];
            $picurl=SaveFile($src_path,$name);
            $sql="INSERT INTO  products(productname,picture,Price) VALUES('$fname','$picurl','$price')";
            if(mysqli_query($conn,$sql)===TRUE){
                $msg="pic uploaded";
            }
            else{
                $msg="Error:".mysqli_error($conn);
            }
            echo json_encode($msg);



        }
    }
}




?>