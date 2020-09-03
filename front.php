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
    $(document).ready(function(){
       show();
       
        function show(){
            var data={"action":"show"};

         
            var settings={
                Type:'post',
                url:"api.php",
                dataType:"json",
                data:data,
                success:function(response){
                    for (var i=0;i<response.data.length;i++){
                        var data=response.data[i];
                        var div=$("<div class='col-md-3'>");
                        div.append("<div class='product-top text-center'");
                        div.append("<h3>"+data.productname+"</h3>");
                        div.append("</div>");
                        div.append("<div class='product-bottom'");
                        div.append("<img src='img/"+data.picture+"' >");
                       var $overlaydiv = $("<div class='overlay-right'>");
                       div.append($overlaydiv);
                       $overlaydiv.append("<button type='button'  class='minus' ><i class='fa fa-minus'></i></button>");
                       $overlaydiv.append("<input type='text' class='val'  id='txtadd' style='width:45px' value='1'/>");
                       $overlaydiv.append("<button type='button'  class='plus' ><i class='fa fa-plus'></i></button>");
                        $overlaydiv.append("<span style='font-weight:bold;color:white'>'PKR'"+data.Price+"</span>");
                        $overlaydiv.append("<button type='button' title='add'><i class='fa fa-plus-circle'></i></button>");
                        
                        $(".row").append(div);
               
                        
                    }
                    $('.plus').on('click',function(){
                            
                        var v=$(this).closest(".overlay-right").find("input").val();
                     var currentVal = parseInt(v);
                     if (!isNaN(currentVal)) {
                        $(this).closest(".overlay-right").find("input").val(currentVal + 1);
                     } else {
                        $(this).closest(".overlay-right").find("input").val(0);
                         }
                            });

                    $(".minus").on('click',function(){
                        var v=$(this).closest(".row").find("input").val();
                     var currentVal = parseInt(v);
                     if (!isNaN(currentVal)) {
                        $(this).closest(".overlay-right").find("input").val(currentVal - 1);
                     } else {
                        $(this).closest(".overlay-right").find("input").val(0);
                         }
                            });
                        
                    

                },
                error:function(r){
                    alert("error");
                }
            };
            $.ajax(settings);
        }  







    });



</script>





<body>
        
    <div class="top-nav-bar">
    <div class="menu-bar">
    <ul>
    <li><a href="#" id='cart'><i class="fa fa-shopping-basket"></i>cart</a></li>
    <li><a href="#">Total Price</a></li>
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