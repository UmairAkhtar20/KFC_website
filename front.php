<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make IT your meal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
<style>
.box{
    padding:50px;

    width: 30%;
  height: 200px;
  
float:left;
margin: 75px;
}
.overlay-right
{
    background-color: red;
}
img {
  width: 100%;
  
}


</style>
<script>
       var p=0;
       var quantity=0;
       var oldp=0;
       var newp=0;
       var pid=0;
    $(document).ready(function(){
       
        showAllproducts();
       
        

    });



</script>





<body>
        
    <div class="top-nav-bar">
    <div class="menu-bar">
    <ul>
    <li><a href="New folder/order.php" id='cart'><i class="fa fa-shopping-basket"></i>cart</a></li>
    <li class='li'><a href='#'>Total Price : <span class='span'></span></a></li>
    </ul>    
    
    </div>   
    </div>
    <section class='make-meal'>
    <div class="container">
     <div class="title-box text-center">
         <h2>MAKE IT YOUR MEAL</h2>
     </div>
     <div class="row">
         
     </div>   
    </div>
    </section>
    
</body>
</html>