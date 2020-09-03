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
img {
  width: 100%;
  height: 100%;
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
                        var div=$("<div class='box'>");
                        div.append("<span class='text-center'>");
                        div.append("<a href='#' class='text-center'>"+data.productname+"</a>");
                        div.append("</a>");
                        div.append("</span>");
                        div.append("<img src='img/"+data.picture+"'/>");
                        div.append("<button type='submit' id='btnbutton' value=''/> ");
                        div.append("</div>");
                        $("#show").append(div);

                        
                        
                        
                    }

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
         <div class="col-md-3">
             <div class="product-top text-center">
                 <h3>twister</h3>
             </div>
             <div class="product-bottom">
                 <img src="img/BCA95717-CC99-4E2B-970A-E84F5AFE6FC3.jpg" >
                 <div class="overlay-right">
                     <button type="button" title="addition"><i class="fa fa-minus"></i></button>
                     <input type="text" name="txtadd" id="txtadd" style="width:45px"/>
                     <button type="button" title="addition"><i class="fa fa-plus"></i>
                    </button>
                    <span style='font-weight: bold;color:white'>PKR 200</span>


                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="product-top text-center">
                 <h3>Might ZINGER</h3>
             </div>
             <div class="product-bottom">
                 <img src="img/D498163D-8091-469E-99B1-696E0DB8B2F2.jpg" >
                 <div class="overlay-right">
                     <button type="button" title="addition"><i class="fa fa-minus"></i></button>
                     <input type="text" name="txtadd" id="txtadd" style="width:45px"/>
                     <button type="button" title="addition"><i class="fa fa-plus"></i>
                    </button>
                    <span style='font-weight: bold;color:white'>PKR 500</span>


                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="product-top text-center">
                 <h3>Zinger Stacker</h3>
             </div>
             <div class="product-bottom">
                 <img src="img/E0C910A2-E55F-480A-AE81-0DE2A0093CA6.jpg" >
                 <div class="overlay-right">
                     <button type="button" title="addition"><i class="fa fa-minus"></i></button>
                     <input type="text" name="txtadd" id="txtadd" style="width:45px"/>
                     <button type="button" title="addition"><i class="fa fa-plus"></i>
                    </button>
                    <span style='font-weight: bold;color:white'>PKR 700</span>


                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="product-top text-center">
                 <h3>Zinger</h3>
             </div>
             <div class="product-bottom">
                 <img src="img/E4E2C76C-9D4F-4993-BB25-D1DE35FC26C2.jpg" >
                 <div class="overlay-right">
                     <button type="button" title="addition"><i class="fa fa-minus"></i></button>
                     <input type="text" name="txtadd" id="txtadd" style="width:45px"/>
                     <button type="button" title="addition"><i class="fa fa-plus"></i>
                    </button>
                    <span style='font-weight: bold;color:white'>PKR 300</span>


                 </div>
             </div>
         </div>
     </div>   
    </div>
    </section>
    
</body>
</html>