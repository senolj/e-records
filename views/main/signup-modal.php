
<div class="modal fade" id="signupModal" role="dialog"> 
    <div class="modal-dialog modal-sm modal-sm-signup">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center">E-Records for Parents</h3>
                <h4 class="text-center">Join to see your student's progress</h4>
            </div>

            <div class="modal-body">
                <div class="row ">
                    <div  class="col-xs-12 col-sm-12 col-md-12 ">
                        <form class="form-signin" method="post" id="register-form">
                            <div id="error">
                         
                            </div>

                            <div class="form-group">
                               <label>First Name:</label>
                              <input type="text" class="form-control" name="first_name" id="first_name" />
                            </div>

                            <div class="form-group">
                              <label>Last Name:</label>
                              <input type="text" class="form-control" name="last_name" id="last_name" />
                            </div>

                            <div class="form-group" > 
                              <label>Parent Code:</label>
                              <input type="text" class="form-control" name="parentcode" id="parentcode" />
                            </div>

                            <div class="form-group">
                              <label for="contact">Contact:</label>
                              <input type="text" maxlength="11" class="form-control" id="tcontact" name="tcontact">
                            </div>
                            
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control"  name="emp_email" id="emp_email" />
                              <span id="check-e"></span>
                            </div>
                            
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password" id="password" />
                            </div>
                            
                            <div class="form-group">
                              <label>Confirm Password</label>
                              <input type="password" class="form-control"  name="cpassword" id="cpassword" />
                            </div>

                             <div class="form-group">
                                <label for="gender">Gender:</label><br>
                                <select name="tgender" id="tgender" class=" btn btn-default dropdown-toggle class-route-select">
                                    <option selected disabled>Select Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                                
                              </div>
                            
                            
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-reset class-route-select" name="btn-save" id="btn-save">
                                    Submit
                                </button> 
                            </div> 

                      </form>
                      </div>
                 </div>
             </div>  
        </div>
    </div>
</div>
