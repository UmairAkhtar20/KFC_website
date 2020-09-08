function showOrderproducts(){
    //  var pid=$_SESSION['pid'];
      var data={'action':'cart'};
      var settings={
          Type:"post",
          url:"api.php",
          dataType:"json",
          data:data,
          success:function(response){
              for (var i=0;i<response.data.length;i++){
                  var data=response.data[i];
                  //var tbl=$("<table>");
               //   tbl.append("<tbody>");
               //   tbl.append("<tr>");
               //   tbl.append("<th style='text-align:left;'>Name</th>");
               //   tbl.append("<th style='text-align:left; width=5%'>Quantity</th>");
               //   tbl.append("<th style='text-align:left; width=10%'>price</th>");
               //   tbl.append("</tr>");
                 var tbl=$("<tr class='line_items'>");
                  tbl.append("<td> <img src='img/"+data.picture+"' style='height:25%;width:25%;'></td>");
                  tbl.append("<td> '"+data.productname+"'");
                  tbl.append("<td> <input type='text' name='qty' value='1' class='form-control form-control-sm'/> </td>");
                  tbl.append("<td> <input type='text' name='price' value='"+data.Price+"' class='form-control form-control-sm'/> </td>");
                  tbl.append("<td> <input type='text' name='item_total' jAutoCalc='{qty} * {price}' class='form-control form-control-sm'/> </td>");

                 // tbl.append(btn);
                  tbl.append("</tr>");
           //      
                  $(".tr").append(tbl);
                  }
                  

                  



          },
          error:function(){
              alert("arror");
          }

      };
      $.ajax(settings);

  }

  function showAllproducts(){
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
                div.append("<img pid='"+data.ID+"' src='img/"+data.picture+"' >");
               var $overlaydiv = $("<div class='overlay-right'>");
               div.append($overlaydiv);
               $overlaydiv.append("<button type='button'  class='minus' ><i class='fa fa-minus'></i></button>");
               $overlaydiv.append("<input type='text' class='val'  id='txtadd' style='width:45px' value='1'/>");
               $overlaydiv.append("<button type='button'  class='plus' ><i class='fa fa-plus'></i></button>");
                $overlaydiv.append("<span class='price' style='font-weight:bold;color:white' pp='"+data.Price+"'>'PKR'"+data.Price+"</span>");
                $overlaydiv.append("<button type='button'  class='add'><i class='fa fa-plus-circle'></i></button>");
                
                $(".row").append(div);
       
                
            }
            $('.plus').on('click',function(){
                    
                var v=$(this).closest(".overlay-right").find("input").val();
             var currentVal = parseInt(v);
             if (!isNaN(currentVal)) {
             
                  quantity=$(this).closest(".overlay-right").find("input").val(currentVal + 1);

             } else {
                quantity=$(this).closest(".overlay-right").find("input").val(0);
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

            $(".add").on('click',function(){
                debugger;
                p=$(this).closest(".overlay-right").find(".price").attr("pp");
               // p=$(".price").attr("pid");
                quantity=$(this).closest(".overlay-right").find("input").val();
              //  pid=$(this).closest(".row").find("img").attr("pid");
              

               
                var totalp=p*quantity;
                
                 newp=totalp+oldp;
                var a=$("<a href='#'>"+newp+"</a>");
                 oldp=newp;
                 $(".span").empty();
                $(".span").append(a);
                $_SESSION['pid']=pid;
             $_SESSION['quantity']=quantity;





            });
                
            

        },
        error:function(r){
            alert("error");
        }
    };
    $.ajax(settings);
}  