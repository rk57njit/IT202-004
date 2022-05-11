<?php
require(__DIR__ . "/../../partials/nav.php");
$results = [];
$db = getDB();
$col = se($_GET, "col", "unit_price", false);

if (!in_array($col, ["unit_price", "stock", "name", "category", "avg_rating"])) {
    $col = "unit_price";
}
$order = se($_GET, "order", "asc", false);

if (!in_array($order, ["asc", "desc"])) {
    $order = "asc";
}
$name = se($_GET, "name", "", false);
$query = "SELECT * FROM Products WHERE stock > 0 and visibility > 0";
$params = []; 
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}

if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order";
}
$stmt = $db->prepare($query); 
try {
    $stmt->execute($params);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}




?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $document.ready(function() {
        $('#add_to_cart').submit(function(e) {

            $.ajax({
                type: "POST",
                url: "cart.php",
                data: $("#add_to_cart").serialize(),
                success: function(data) {
                    flash("Successfully Added To Cart!")
                }
            })

            e.preventDefault();
        })
    })
</script>
<div class="container-fluid">
    <h1>Shop</h1>

    <div class="sort" style="float:right;">
        <form class="row row-cols-auto g-3 align-items-center">
            <div class="col">
                <div class="input-group">
                    <div class="input-group-text">Name</div>
                    <input class="form-control" name="name" value="<?php se($name); ?>" />
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-text">Sort</div>
                  
                    <select class="form-control" id="sort" onChange="update()" name="col" value="<?php se($col); ?>">
                        <option value="unit_price">Price</option>
                        <option value="stock">Stock</option>
                        <option value="name">Name</option>
                        <option value="category">Category</option>
                        <option value="avg_rating">Average Rating</option>
                    </select>
                    <script type="text/javascript">
                        function update() {
                            var select = document.getElementById('sort');
                            var option = select.options[select.selectedIndex];

                        }

                        update();
                    </script>
                    <script>
                        
                        document.forms[0].col.value = "<?php se($col); ?>";
                    </script>
                    <select class="form-control" name="order" value="<?php se($order); ?>">
                        <option value="asc">ASC</option>
                        <option value="desc">DESC</option>
                    </select>
                    <script>
                    
                        document.forms[0].order.value = "<?php se($order); ?>";
                    </script>
                </div>
            </div>

            <div class="col">
                <div class="input-group">
                    <input type="submit" class="btn btn-primary" value="Apply" />
                </div>
            </div>
        </form>
    </div><br><br><br>
    <div class="row row-cols-1">
        <?php foreach ($results as $item) : ?>
            <form id="add_to_cart" action="cart.php?" method="POST">
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header">
                            <?php if (has_role("Owner")) : ?><a href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name"); ?></a><?php endif; ?>
                            <?php if (has_role("Admin")) : ?><a href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name"); ?></a><?php endif; ?>

                            <a href="product_details.php?id=<?php se($item, "id"); ?>"><?php se($item, "name"); ?></a>
                        </div>
                        <div class="card-body">
                           
                            </div>
                            <h5 class="card-title"> <?php se($item, "name"); ?></h5>
                            <p class="card-text"><?php se($item, "description"); ?>...</p>
                        </div>
                        <div class="card-footer">
                            Cost: $<?php se($item, "unit_price"); ?>
                            <a href="cart.php?action=add&id=<?php se($item, "id"); ?>" > ADD TO CART </a>
                        </div>

                    </div><br>
                </div>
            <?php endforeach; ?>
    </div>
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>

<?php
if (!isset($total_pages)) {
    $total_pages = 1;
}
if (!isset($page)) {
    $page = 1;
}
?>
<nav aria-label="Generic Pagination">
    <ul class="pagination">
        <li class="page-item <?php echo ($page - 1) < 1 ? "disabled" : ""; ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
        </li>
        <?php for ($i = 0; $i < $total_pages; $i++) : ?>
            <li class="page-item <?php echo ($page - 1) == $i ? "active" : ""; ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
        <?php endfor; ?>
        <li class="page-item <?php echo ($page) >= $total_pages ? "disabled" : ""; ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
        </li>
    </ul>
</nav>