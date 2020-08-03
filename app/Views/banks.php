<div class="register-wrapper">
<div class="m-4">
<center><button class="btn btn-lg btn-primary add-user-btn " data-toggle="modal" data-target="#bank_form">ADD BANK</button></center> 
</div>
    <table class="table table-striped " id="bankdata">
        <tr>
            <th>अनु क्रं.</th>
            <th>बँकेचे नाव</th>
            <th>शाखेचे नाव</th>
	    <th>कर्मचारी</th>
	    <th>क्रिया</th>
	    
        </tr>
    
    
    
    </table>

</div>

<div class="modal fade" id="bank_form" >
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
  
      <h4 class="modal-title">BANK FORM</h4>
      
      
      </div>
      <div class="modal-body" >
        <form class="registor-form" method="post">
          <div class="form-group">
            <label for="बँकेचे नाव">बँकेचे नाव</label>
            <input type="text" class="form-control" id="bname" name='bname'>
          </div>
        
          <div class="form-group">
            <label for="शाखेचे नाव">शाखेचे नाव</label>
            <input type="text" class="form-control" id="bncname" name='bncname'>
          </div>

	 

          <div class="form-group">
                <label for="department">कर्मचारी</label>
                <select class="form-control" id="dept" name="department"> 
                <option>1</option>
                <option>2</option>
		<option>3</option>
                </select>
          </div>
        
         
        
         
  
  
      <div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="addBank()">Add</button>
    <button type="button" class="btn btn-danger" id="close-form" data-dismiss="modal">Close</button>  
    </div>
  
    </div>
  </div>
</div>