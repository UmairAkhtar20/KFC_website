<?php  include("connec.php");?>
<?php include("utility.php");?>
<?php

if(isset($_REQUEST['action'])){
    $action=$_REQUEST['action'];
    if($action=="show"){

            $sql="SELECT * FROM products ";
            $result=mysqli_query($conn,$sql);
            $resultfound=mysqli_num_rows($result);
            $data=array();
            if($resultfound>0){
                while($row=mysqli_fetch_assoc($result)){
                    $data[]=$row;
                }
            }
            $output['data']=$data;
            echo json_encode($output);

            
            



        
    }
}




?>