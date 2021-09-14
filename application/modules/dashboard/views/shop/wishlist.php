

<section class="section pt-4 pb-5 products-listing">
         <div class="container">
               <div class="row pt-5">
                    <div class="col-md-12">
                       <h5 class="font-weight-bold mt-0 mb-4">My Wishlist <span style="color: #ccc; font-weight: 400;"><?php echo @count($prod);?> items</span></h5>
                    </div>
                    <?php
                    if(@count($prod)!=0){
                    foreach($prod as $val){ ?>
                    <div class="col-md-6 item-<?= $val->id;?>">
                       <div class="card offer-card-horizontal border-0 shadow-sm" data-toggle="modal" data-target="#myModal">
                          <div class="row d-flex align-items-center no-gutters getproductdetails" data-vendor_id="12" data-product_id="18">
                             <div class="col-md-3 col-3">
                                <img src="<?php echo base_url().'/attachments/shop_images/'.$val->image;?>" class="card-img" alt="Fashion Women's Plain Regular Fit Top">
                             </div>
                             <div class="col-md-9 col-9">
                                <div class="card-body">
                                <input type="hidden" id="product_id" name="product_id" value="<?= $val->id;?>">
                                   <h5 class="card-title" style="padding-right: 40px;"><?php ?><?=  $val->itemName;?></h5>
                                   <p class="card-text"></p><p><?=  substr($val->disc,0,100);?></p>
                                   <p class="card-text"><small class="text-info">Rs.<?=  $val->price;?>                                    </small>
                                   </p>
                                </div>
                             </div>
                          </div>
                           <a href="#" class="hs" ><i class="fa fa-heart" id="rlist"></i></a>
                              <!-- <a href="#" class="ts"><i class="fa fa-trash"></i></a> -->
                       </div>
                    </div> 
                     <?php   }}else{ echo 'No item found';}?>
                  </div>
             </div>
      </section>
												  
  								  
<style>
.hs{position: absolute;
    right: 0;
    margin-top: 8px;
    margin-right: 25px;
    color: #0056b3 !important;
    font-size: 10px
}
.ts{position: absolute;
    right: 0;
    margin-top: 8px;
    margin-right: 8px;
    color: #999 !important;
    font-size: 10px
}
</style>												  