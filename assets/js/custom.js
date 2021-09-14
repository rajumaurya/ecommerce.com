
$(document).ready(function(){
 $('#login').on('submit',function(){
    // alert('hello');

     $.ajax({
         url:'auth/login_check',
         type:'post',
         datatype:'json',
         data:$(this).serialize(),
         success:function(data){
             if(data==1){
                //  alert("success");
                 swal("login!", "Successfully.", "success");
                 setTimeout(function() {
                     window.location.href='http://localhost/ecommerce/admin';
                 },);

             }else if(data==1){
                //  alert("success");
                 swal("login!", "Successfully.", "success");
                 setTimeout(function() {
                     window.location.href='http://localhost/ecommerce/';
                 },);

             }
             else{
                 alert('failed to login');
             }
         }
     });
 });
});
      



$(document).on('submit','#user_login',function(e){
    e.preventDefault();
    // alert('hello');

     $.ajax({
         url:'auth/user_check',
         type:'post',
         datatype:'json',
         data:$(this).serialize(),
         success:function(data){
             if(data==1){
                //  alert("success");
                 swal("login!", "Successfully.", "success");
                 setTimeout(function() {
                     window.location.href='http://localhost/theme5/';
                 },1000);

             }
             else{
                 alert('failed to login');
             }
         }
     });
 });



$(document).on('submit','#signup_form',function(e){
    // alert("helll");
    e.preventDefault();
    $.ajax({
        url: 'check',
        type:'post',
        datatype:'json',
        data:$(this).serialize(),
        success:function(data){
            if(data==true){
               //  alert("success");
               
               swal("sorry!","email already created","warning");
            }
            else{
                swal("signup", "user created successfully", "success");
                setTimeout(function() {
                    window.location.href='http://localhost/theme5/auth/user_login';
                },2000);
            }
        }
    });

});

$(document).ready(function(){
 
    $('.add_cart').click(function(){
        var id=$(this).data('id');
     var product_id = $(this).data("itemname");
     var product_name = $(this).data("category");
     var product_price = $(this).data("price");
     var quantity = $('#' + id).val();
     if(quantity != '' && quantity > 0)
     {
      $.ajax({
       url:'./dashboard/add',
       method:"POST",
       data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
       success:function(data)
       {
        alert("Product Added into Cart");
        $('#cart_details').html(data);
        $('#' + id).val('');
       }
      });
     }
     else
     {
      alert("Please Enter quantity");
     }
    });
   
    $('#cart_details').load("dashboard/load");
    $('#cart_details').hide();
        jQuery('#cart-popover').hover(function() {
            $('#cart_details').toggle();
        });
   
    $(document).on('click', '.remove_inventory ', function(){
     var row_id = $(this).attr('id');
     if(confirm("Are you sure you want to remove this?"))
     {
      $.ajax({
       url:'dashboard/remove',
       method:'POST',
       data:{row_id:row_id},
       success:function(data)
       {
        alert("Product removed from Cart");
        $('#cart_details').html(data);
        // location.reload(); 
       }
      });
     }
     else
     {
      return false;
     }
    });
   
    $(document).on('click', '#clear_cart', function(){
     if(confirm("Are you sure you want to clear cart?"))
     {
      $.ajax({
       url:"dashboard/clear",
       success:function(data)
       {
        alert("Your cart has been clear...");
        $('#cart_details').html(data);
       }
      });
     }
     else
     {
      return false;
     }
    });
   
   });

   $("#checkout").on('click',function(){
       window.location.href="ckeckout";
   })

   $("#goadmin").on('click',function(){
       window.location.href="admin";
   })


   $(document).on('submit','#checkout_form',function(e){
       e.preventDefault();
       $.ajax({
           url:'checkout/savecheckout',
           method:'post',
           datatype:'json',
           data:$(this).serialize(),
           success:function(data){
               if(data==true){
                swal("success"," detail added successfully","success");
                redirect('/payment');
               }
               else{
                   swal("failed","failed to added your detail","warning");
            }
           }
           
          
       });
   });





   $("#searchproduct").on("keyup",function(){
       var value=$(this).val().toLowerCase();
       $("#searchs *").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
   });