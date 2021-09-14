
$(document).ready(function(){
    
    var dataTable = $("#user_data").DataTable({  
        "processing":true,  
        "serverSide":true,
        searching: true,  
        "order":[],  
        "ajax":{  
             url:BASE_URL+'admin/fetch_user',  
             type:"POST",  
        },  
        "columnDefs":[  
             {  
                  "targets":[0, 3, 4],  
                  "orderable":false,  
             },  
        ], 
    }); 
    
    $(document).on('click','#userdetail',function(){
      $.ajax({
          url:BASE_URL+'admin/fetch_user',
        
      })
    });



    $(document).on('click', '.update', function(){  
        var user_id = $(this).attr("id");  
        $.ajax({  
            url:BASE_URL + 'admin/fetch_single_user',
             method:"POST",  
             data:{user_id:user_id},  
             dataType:"json",  
             success:function(data)  
             {  
                  $('#update').modal('show');  
                  $('#itemName').val(data.itemName);  
                  $('#categorys').val(data.category); 
                  $('#subcategorys').val(data.subcategory); 
                  $('#disc').val(data.disc); 
                  $('#image').val(data.image); 
                  $('#prices').val(data.price); 
                  $('.modal-title').text("update data");  
                  $('#user_ids').val(user_id);  
                  $('#action').val("Edit");  
                  
             }  
        })  
   });  
   $(document).on('submit', '#user_update', function(event){  
    event.preventDefault();
    var firstName = $('#itemName').val();  
    var lastName = $('#categorys').val();  
    var email = $('#subcategorys').val();
    var disc = $('#disc').val();  
    var image = $('#images').val();  
    var price = $('#prices').val();  

    if(firstName != '' && lastName != '' && email!=''  && disc!='' && image!='' && price!='')  
    {  
         $.ajax({  
              url:BASE_URL + 'admin/updatedata',  
              method:'POST',  
              data: $("#user_form").serialize(),
              data:new FormData(this),  
              contentType:false,  
              processData:false,  
              dataType: 'json',
              success:function(data)  
              {  
                  if(data==true)
                  { 
                     swal("congrat!", "user update successfully!", "success");
                            $('#user_update')[0].reset();  
                            $('#update').modal('hide'); 
                            setTimeout(function() {
                                window.location='';
                            },1000);
                  }
                 
              }  
         });  
    }  
    else  
    {  
         alert("Bother Fields are Required");  
    }   
});
$(document).on('click', '.delete', function(){  
    var user_id = $(this).attr("id"); 
    swal({
      title: "Are you sure ??",
      text: "delete", 
      icon: "warning",
      buttons: true,
      dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal(" user has been deleted!", {
        icon: "success",
      });
         $.ajax({  
            url:BASE_URL + 'admin/delete',  
              method:"post",  
              data:{user_id:user_id},  
              success:function(data)  
              {  
                window.location = "";
               }  
         });
      }
 });
  });     
  
});