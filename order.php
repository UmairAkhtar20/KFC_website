<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.css">
<script src="script.js"></script>
<script>
        var p=0;
        var quantity=0;
        var newp=0;
        var oldp=0;
        $(document).ready(function(){
            showOrderproducts();          

        });

</script>



<body>
<div class="top-nav-bar">
<div class="menu-bar">
</div>
</div>
<div class="container">
<div class="title-box text-center">
<h3>YOUR ORDER</h3>

</div>
<table class="table-striped" cellpadding=10 cellspacing=1>
<thead>
<tr>
<th>Name</th>
  <th >Quantity</th>
  <th>price</th>
</tr>
</thead>
  <tbody class="tbl1">

  
  </tbody>
        
        
  </table>
    


</div>
 
</body>
</html>