
   $(document).ready(function(){

      loadData();
    
     $("#edit-user").on("click",function(){
      console.log($(this));
    });
   });

    function loadData(){
    var data_url = "http://localhost:8080/TestController/getUsers/"
    $("#datat").empty();
    $.ajax({
        url: data_url,
        type: 'post',
        dataType: 'JSON',
        success: function(response) {
              var no = 1;
             for(i=0;i<response.length;i++)
             {
               var r = "<tr id=" + response[i]['id'] + ">" ;
               r += "<td>" + no++ + "</td>";
               r += "<td>" + response[i]['fname'] + "</td>";
               r += "<td>" + response[i]['lname'] + "</td>";
               r += "<td>" + response[i]['dept'] + "</td>";
               r += "<td>" + response[i]['uname'] + "</td>";
               r += "<td>" + response[i]['password'] + "</td>";
               r += "<td>" +
             
             
             "<button type='button'  id='edit-user'  onclick=" + "editUser("+response[i]['id']+")" + " class='btn btn-success'> edit</button> " +
             " <button type='button' id='delete-user' class='btn btn-danger'>delete</button> "  +
             "</td>";
              r += "</tr>" ;
               $("#datat").append(r);
                
             }  
         }
    });
   }

   function addUser(){

      var fields = ['#fname','#lname','#dept','#username','#password'] ;
      var isEnteredEveryField = false ;
     
      fields.forEach(element => {
         var value = $(element).val();
         if(value=="")
         {  
            isEnteredEveryField = false ;
            $(element).addClass("border-danger");

         }
         else{
          
          isEnteredEveryField = true ;
          $(element).removeClass("border-danger");

         }
    });

    if(isEnteredEveryField)
    { 
       var userData = $('.registor-form').serializeArray() ;
       $.ajax(
        {
              url : "http://localhost:8080/TestController/addUser" ,
              method: "post" ,
              data : { user : userData} , 
              success:
              function(response,status){

                  if(response == 1)
                  {
                    $('.registor-form').trigger('reset');
                    $("#close-form").click();
                    alert('user added successfully') ;
                    loadData();
                  }

              },
          }
        );
      }
   }



   function editUser(id)
   {
      var url = "http://localhost:8080/TestController/getUser?id="+id ;
      var fields = ['#fname','#lname','#dept','#username','#password'] ;

      $.ajax(
        {
          url : url ,
          method : 'get' ,
          datatype : 'JSON' ,
          success : function(response)
          {
              var obj = JSON.parse(response);
              console.table(obj);
              var userId = obj['id'];
              $(".add-open-btn").click();
              console.log(userId);
              $(fields[0]).val(obj['fname']);
              $(fields[1]).val(obj['lname']);
              $(fields[2]).val(obj['department']);
              $(fields[3]).val(obj['username']);
              $(fields[4]).val(obj['password']);
              $("#add-user").attr("onclick",`updateUser(${id})`);
          
          }
        }
      )
    }



    function updateUser(userId)
    {
      var fields = ['#fname','#lname','#dept','#username','#password'] ;
      var isEnteredEveryField = false ;
     
      fields.forEach(element => {
         var value = $(element).val();
         if(value=="")
         {  
            isEnteredEveryField = false ;
            $(element).addClass("border-danger");

         }
         else{
          
          isEnteredEveryField = true ;
          $(element).removeClass("border-danger");

         }
      });

      if(isEnteredEveryField)
      { 
        
         var userData = $('.registor-form').serializeArray() ;
        $.ajax(
          {
            
              url : "http://localhost:8080/TestController/updateUser" ,
              method: "post" ,
              data : { id : userId , user : userData } , 
              success:
              function(response,status){

                  if(response == 1)
                  {

                    $('.registor-form').trigger('reset');
                    $("#add-user").attr("onclick","addUser()");
                    $("#close-form").click();
                    alert('user updated successfully')  ;
                    loadData();
                   
                  }

              },
          }
        );
      }
    }
   //on_click

   
 
