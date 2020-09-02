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
<script>
    $(document).ready(function(){
        $("#btnupload").on('click',function(){
            save();
        });
        function save(){


            var fname=$("#txtname").val();
            var price=$("#txtprice").val();
            var data=new FormData();
            var files=$("#txtfile").get(0).files;
            if(files.length > 0){
                    data.append("file",files[0]);
                           
                        }
             data.append("fname",fname);
             data.append("price",price);
             data.append("action","save");           
            var settings={
                type:'post',
                url:"api.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(r){
                    alert(r);

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
        
        
       <h3 class="text-center position-center">make it your meal</h3>
           
  
  
  

  

    
       
        
        
    
</body>
</html>