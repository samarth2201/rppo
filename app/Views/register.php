<div class="register-wrapper">
<div class="m-4">
<center><button class="btn btn-lg btn-primary add-open-btn " data-toggle="modal" data-target="#register_form"> Add</button></center> 
</div>
    <table class="table table-striped " id="datat">
          <tr>
              <th>First name</th>
            <th>Last name</th>
            <th>Department</th>
            <th>Username</th>
            <th>Password</th>
            <th>actions</th>
        </tr>
    
    
    
    </table>

</div>

<div class="modal fade" id="register_form" >
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
  
      <h4 class="modal-title">Add user</h4>
      
      
      </div>
      <div class="modal-body" >
        <form class="registor-form" method="post">
          <div class="form-group">
            <label for="first-name">First name</label>
            <input type="text" class="form-control" id="fname" name='fname'>
          </div>
        
          <div class="form-group">
            <label for="last-name">Last name</label>
            <input type="text" class="form-control" id="lname" name='lname'>
          </div>
        
          <div class="form-group">
                <label for="department">Department:</label>
                <select class="form-control" id="dept" name="department"> 
                <option>PPO</option>
                <option>RPPO</option>
                </select>
          </div>
        
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name='username'>
          </div>
        
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" id="password" name='password'>
          </div>
  
        </form>
      </div>
  
  
      <div class="modal-footer">
    <button type="button" class="btn btn-primary" id="add-user" onclick="addUser()">Add</button>
    <button type="button" class="btn btn-danger" id="close-form" data-dismiss="modal">Close</button>  
    </div>
  
    </div>
  </div>
</div>
 
</body>
</html>
