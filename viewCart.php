<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito de compras</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="description" content="">    
    <meta name="author" content="">  
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">    
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"          rel="stylesheet">    <!-- Custom styles for this template-->    
   <link href="sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>

<body class="bg-gradient-primary">
      <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
 <div class="col-xl-10 col-lg-12 col-md-9">
           

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-lg-1.5 d-none d-lg-block"> <img class="img-fluid"    src="assets/img/fondos/carro.jpg"/></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                   <div class="text-center">
                                    </div>
<div class="container">
    <h1>Carro de compras</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Productos</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' MXN'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '$'.$item["subtotal"].' MXN'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu carrito esta vacio.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="Index1.php" class="btn btn-primary"><i class="glyphicon glyphicon-menu-left"></i> Continue comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' MXN'; ?></strong></td>
            <td><div class="form-group"><a href="checkout.php" class="btn btn-info" class="form-control form-control-user" >Comprar. <i class="glyphicon glyphicon-menu-right"></i></a></div></td>
            <?php } ?>
        </tr>
          
    </tfoot>
    </table>
</div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>

        </div>

    </div>
</body>
</html>