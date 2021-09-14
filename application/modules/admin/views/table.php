<div class="container box">  
           <h3 style="text-align:center;">Add product  <?php echo $this->session->userdata('email');?> <br></h3><br />  
           <button type="button"   class="btn btn-info btn-lg add" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> Add item</button>

           <div class="table-responsive">  
                <br />
                
                <table id="user_data" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                               <th width="10%">id</th>  
                               <th width="35%">itemName</th>  
                               <th width="35%">category</th>
                               <th  width="10%">subcategory</th>  
                               <th  width="10%">disc</th> 
                               <th  width="10%">image</th> 
                               <th  width="10%">price</th> 
                               <th  width="10%">status</th> 
                               <th  width="10%">update</th> 
                               <th  width="10%">delete</th> 
                               
                          </tr>  
                     </thead>  
                </table> 
           </div>  
      </div>  


      <div id="update" class="modal fade">  
      <div class="modal-dialog">  
           <form  id="user_update">  
                <div class="modal-content">  
                     <div class="modal-header">  
                          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                          <h4 class="modal-title">Update product detail</h4>  
                     </div>  
                     <div class="modal-body">  
                          <label>update itemName</label>  
                          <input type="text" name="itemName" id="itemName" class="form-control" />  
                          <br />  
                          <label>update category</label>  
                          <input type="text" name="category" id="categorys" class="form-control" />  
                          <br />  
                          <label>update supcategory</label>  
                          <input type="text" name="subcategory" id="subcategorys" class="form-control" />  
                          <br>
                          <label>update image</label>  
                          <input type="file" name="image" id="images" class="form-control" />  
                          <br />  
                          <label>update disc</label>  
                          <input type="text" name="disc" id="disc" class="form-control" />  
                          <br />  
                          <label>update price</label>  
                          <input type="text" name="price" id="prices" class="form-control" />  
                     </div>  
                     <div class="modal-footer"> 
                         <input type="hidden" id="user_ids" name="user_id"> 
                          <input type="submit" name="action" class="btn btn-success" value="update" />  
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                </div>  
           </form>  
      </div>  
 </div>


<br><br>

<div id="signup" class="modal fade">  
      <div class="modal-dialog">  
           <form  id="user_signup">  
                <div class="modal-content">  
                     <div class="modal-header">  
                          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                          <h4 class="modal-title">signup</h4>  
                     </div>  
                     <div class="modal-body">  
                          <label>Enter fname</label>  
                          <input type="text" name="fname" id="sfname" class="form-control"  maxlength="10" required />  
                          <br />  
                          <label>Enter lname</label>  
                          <input type="text" name="lname" id="slname" class="form-control"  maxlength="10" required/>  
                          <br />  
                          <label>Enter email</label>  
                          <input type="email" name="email" id="semail" class="form-control"  maxlength="20" required/>  
                          <br>
                          <label>Enter phone</label>  
                          <input type="number" name="phone" id="sphone" class="form-control"  maxlength="12" required /> 
                          <label>Create password</label>  
                          <input type="password" name="pass" id="pass" class="form-control"  maxlength="15" required />  
                     </div>  
                     <div class="modal-footer">  
                          <input type="submit" name="action" class="btn btn-success" value="submit" />  
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                </div>  
           </form>  
      </div>  
      </div>
      <br>

      <div id="make" class="modal fade">  
      <div class="modal-dialog">  
           <form  id="make_subadmin">  
                <div class="modal-content">  
                     <div class="modal-header">  
                          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                          <h4 class="modal-title">subadmin</h4>  
                     </div>  
                     <div class="modal-body">  
                     <label>user_type</label>  <br>
                     <select name="sub"  id="sub">
                        <option value="default">select</option>
                         <option value="1">subadmin</option>
                         <option value="3">users</option>
                         </select>
                     <div class="modal-footer"> 
                         <input type="hidden" id="muser_id" name="user_id"> 
                          <input type="submit" name="action" class="btn btn-success" value="make" />  
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                </div>  
           </form>  
      </div>  
 </div>



<div id="myModal"  role="dialog" class="modal fade" >  
      <div class="modal-dialog">  
           <form  id="add_items" enctype="multipart/form-data">  
                <div class="modal-content">  
                     <div class="modal-header">  
                          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                          <h4 class="modal-title">Add item</h4>  
                     </div>  
                     <div class="modal-body">  
                          <label>Item Name</label>  
                          <input type="text" name="item" id="item" class="form-control" />  
                          <br />
                          <label>category</label>  
                          <input type="text" name="category" id="category" class="form-control" />  
                          <br>  
                          <label>subcategory</label>  
                          <input type="text" name="subcategory" id="subcategory" class="form-control" />                            
                          <label>desc</label>  
                          <input type="text" name="desc" id="desc" class="form-control" />  
                          <br> 
                          <label>price</label>  
                          <input type="text" name="price" id="price" class="form-control" />  
                          <br>  
                          <label>Item-Image</label>  
                          <input type="file" name="file" id="file" class="form-control" />  
                          <br> 
                                                  
                     </div>  
                     <div class="modal-footer"> 
                         <!-- <input type="hidden" id="user_ids" name="user_id">  -->
                          <input type="submit" name="action" class="btn btn-success" value="add" />  
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                </div>  
           </form>  
      </div>  
      </div>