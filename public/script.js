
   $(document).ready(function(){
  
    loadData(1);
   });


   function loadData(id){
    
    var data_url = id ? "http://localhost:8080/TestController/getUsers/"+id : "http://localhost:8080/TestController/getUsers/"
    $.ajax({
        url: data_url,
        type: 'post',
        dataType: 'JSON',
        success: function(response) {
             for(i=0;i<response.length;i++)
             {
               var r = "<tr id=" + response[i]['id'] + ">" ;
               r += "<td>" + response[i]['fname'] + "</td>";
               r += "<td>" + response[i]['lname'] + "</td>";
               r += "<td>" + response[i]['dept'] + "</td>";
               r += "<td>" + response[i]['uname'] + "</td>";
               r += "<td>" + response[i]['password'] + "</td>";
               r += "<td>" + "response[i]['password']" + "</td>";
               r += "</tr>" ;
               $("#datat").append(r);
                
             }  
         }
    });


   }