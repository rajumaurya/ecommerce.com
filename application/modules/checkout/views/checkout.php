<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="assets/js/custom.js"></script>

</head>
<body> 
<div class="container">
    <form id="" action="<?php echo base_url();?>checkout/savecheckout" method="post">
    <?php foreach($data as $row):?>
        <div class="form-group">
    <label for="Quantity">Quantity</label><br>
        <input type="text"  name="quantity[]" value='<?php echo $row['qty'];?>'><br>
        </div>
        <div class="form-group">
        <label for="productname">Productname</label><br>
    <input type="text" name="productname[]" value='<?php echo $row['name'];?>'><br>
    </div>
    <div class="form-group">
    <label for="price">Product price</label><br>
    <input type="text" name="price[]" value='<?php echo $row['price'];?>'><br>
    </div>
    <?php endforeach;?> 
    <label for="totalprice">your total price </label><br>

    <input type="text" name="total_price" value='<?php echo $this->cart->total();?>'><br><br>
    <button type="submit" class="btn btn-success">Checkout</button>
    
    </form>
    </div>
</body>
</html>