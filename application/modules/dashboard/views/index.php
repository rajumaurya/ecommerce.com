




    
    <div id="searchs" class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="text-center">
        <?php foreach($fetch_data as $data):?>
           <div class="col-sm-4">
          
             <div class="card">
                        <img class="card-img-top img-responsive"  style="width:360px;height:233px" src="<?php  echo base_url();?>assets/img/<?php  echo $data->image; ?>" alt="Card image cap">
                        <div class="card-body" style="color:white">
                            <h5 class="card-title"><?php  echo $data->itemName; ?></h5>
                            <p class="card-text"><?php  echo $data->disc; ?></p>
                            <p class="card-text"><?php  echo "Rs ". $data->price; ?></p>
                            <input type="text" name="quantity" class="form-control quantity" id='<?php echo $data->id ;?>' /><br />
                            <button type="button" name="add_cart" class="btn btn-success add_cart" data-itemname='<?php echo $data->itemName ;?>' data-category='<?php echo $data->category ;?>' data-id='<?php echo $data->id ;?>'data-price='<?php echo $data->price ;?>' data-subcategory='<?php echo $data->subcategory ;?>'>Add to Cart</button>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            <!-- <?php echo $data->itemName;?> -->
                        </div>
                        </div>
                        </div>
                  
                <?php endforeach; ?>   
                                </div>
                </div>
               
                      
               
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    

    <!--Footer -->
    <div class="col-md-12 footer-box">


        <div class="row small-box ">
            <strong>suits :</strong> <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> | 
            <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |
              <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |  <a href="#">t-shart</a> | 
            <a href="#">shart</a> |<a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |
            <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |  
            <a href="#">t-shart</a> | <a href="#">shart</a> | view all items
         
        </div>
        <div class="row small-box ">
            <strong>shart :</strong> <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart Laptops</a> | 
            <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |
              <a href="#">t-shart Laptops</a> | <a href="#">shart</a> |<a href="#">suits</a> |  <a href="#">t-shart</a> | 
            <a href="#">shart</a> |<a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |
            <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |  
            <a href="#">t-shart</a> | <a href="#">shart</a> | view all items
        </div>
        <div class="row small-box ">
            <strong><t-shart></t-shart> : </strong><a href="#">suits</a> |  <a href="#">t-shart Tablets</a> | <a href="#">shart</a> | 
            <a href="#">suits </a>|  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |
              <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits Tablets</a> |  <a href="#">t-shart</a> | 
            <a href="#">shart</a> |<a href="#">suits Tablets</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |
            <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |  
            <a href="#">t-shart</a> | <a href="#">shart Tablets</a> | view all items
            
        </div>
        <div class="row small-box pad-botom ">
            <strong>Computers :</strong> <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> | 
            <a href="#">suits Computers</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |
              <a href="#">t-shart</a> | <a href="#">shart</a> |<a href="#">suits</a> |  <a href="#">t-shart</a> | 
            <a href="#">shart Computers</a> |<a href="#">suits Computers</a> |  <a href="#">t-shart</a> | <a href="#">shart</a> |
            <a href="#">suits</a> |  <a href="#">t-shart</a> | <a href="#">shart Computers</a> |<a href="#">suits</a> |  
            <a href="#">t-shart</a> | <a href="#">shart</a> | view all items
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <p>
                     E32/2 noida sec-8<br />
                                    Just Location, Delhi<br />
                    Call: +91 8004895247<br>
                    Email: rajumaurya8081@gmail.com.com<br>
                </p>

                2014 www.yourdomain.com | All Right Reserved
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. 
                </p>
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; www.yourdomain.com | &nbsp; 24x7 support | &nbsp; Email us: info@yourdomain.com
    </div>
    
   