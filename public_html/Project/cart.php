<script>
    
</script>
<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("You must be logged in to see this!");
    die(header("Location: login.php"));
}
?>
<?php
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
        
            $db = getDB();
            $query = "SELECT * FROM Products WHERE stock > 0 && visibility > 0";
            $item_id = $_GET['id'];
            $user = get_user_id();
            $stmt = $db->prepare($query);
            $results = [];
            try {
                $stmt->execute();
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($r) {
                    $results = $r;
                }
            } catch (PDOException $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
            foreach ($results as $item) :
                if (se($item, "id", "", false) == $item_id) {
                    $cost = se($item, "unit_price", "", false);
                    $query2 = "INSERT INTO cart (product_id, user_id, quantity, unit_cost) VALUES ('$item_id', '$user', '1','$cost') on duplicate key update quantity = quantity + 1";

                    $stmt2 = $db->prepare($query2);
                    try {
                        $stmt2->execute();
                    } catch (PDOException $e) {
                        flash("<pre>" . var_export($e, true) . "</pre>");
                    }
                }
            endforeach;
            flash("Successfully Added To Cart");
            break;
        case "remove":
            $db = getDB();
            $item_id = $_GET['id'];
            $user = get_user_id();
            $query = "UPDATE cart SET quantity = quantity - 1 WHERE id= :id and quantity > 0"; 
            $stmt = $db->prepare($query);
            try {
                $stmt->execute([":id" => $item_id]);
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($r) {
                    $results = $r;
                }
            } catch (PDOException $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }

            flash("Remove Successful");
            break;
        
        case "empty":
            $db = getDB();
            $userid = get_user_id();
            $query = "DELETE FROM cart WHERE user_id = $userid";
            $stmt = $db->prepare($query);
            $results = [];
            try {
                $stmt->execute();
            } catch (PDOException $e) {
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
            flash("Your Cart is Now Empty");
            break;
             

    }   
}

?>
<?php
$db = getDB();
$userId = get_user_id();
$query = "SELECT * FROM Products JOIN cart on cart.product_id = Products.id and user_id = $userId and quantity > 0";
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<div class="container-fluid">
    <h1>CART</h1>
    <div>
        <a href="cart.php?action=empty"> Empty Cart
            </br>
        </a> <a href="shop.php"> Shop </a>
    </div>
    <div class="row row-cols-1 row-cols-md-5 g-4">

        <?php foreach ($results as $item) : ?>

            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        <a href="admin/edit_item.php?id=<?php se($item, "product_id"); ?>"> EDIT: <?php se($item, "name"); ?></a>
                        <a href="product_details.php?id=<?php se($item, "product_id"); ?>"><?php se($item, "name"); ?></a>
                    </div>
                    <div class="card-body">
                        
                        <h5 class="card-title"> <?php se($item, "name"); ?></h5>
                        <p class="card-text"><?php se($item, "description"); ?></p>
                        <a href="cart.php?action=remove&id=<?php se($item, "id"); ?>">REMOVE ITEM</a><br>
                        <a href="cart.php?action=add&id=<?php se($item, "product_id"); ?>">ADD ONE MORE</a>
                    </div>
                    <div class="card-footer">
                        Cost: $<?php se($item, "unit_price"); ?>
                        Quantity: <?php se($item, "quantity"); 
                        ?>
                        <div style="background-color:red;"><?php if($item['quantity'] > $item['stock']){
                            echo "NOT ENOUGH INVENTORY FOR ", $item['name'];
                        }?>
                        

                    </div>


                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
    </form>
    <br>
    <div class="col-5" style="background-color:white; padding: .5em; text-align:center;">
        <div>
            <table>
                <tr>
                    <h2>BAG:</h2>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php $total= 0;?>
                <?php foreach ($results as $item) : ?>

                    <tr>
                        <?php 
                        
                        $x = $item['unit_price'];
                        $y = $item['quantity'];
                        $subtotal = $x * $y;
                        
                        ?>
                        <td><?php se($item, 'name'); ?></td>
                        <td><?php se($item, 'quantity'); ?></td>
                        <td><?php echo $subtotal;?></td>
                        <?php 
                        $total = $total + $subtotal;
                        ?>
                    </tr>
                    
                <?php endforeach; ?>
                <td></td><td></td>
                <td style="text-align:center;">FINAL: <?php echo $total; ?> </td>

            </table>
           
            <form action="checkout.php" method="post">
                
                <input type="submit" value="CHECKOUT" class="btn">
            </form>
            
        </div>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>