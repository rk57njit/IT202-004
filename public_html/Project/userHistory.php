<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to view this page!", "warning");
    die(header("Location: $BASE_PATH" . "login.php"));
}
$orders = filterPurchase();
$name = se($_GET, "name", "", false);

?>
<h3 align = "center"> User Orders</h3>
<?php if ($orders && count($orders) == 0) : ?>
    <p>No orders</p>
<?php else : ?>
    <form class="row row-cols-auto g-3 align-items-center">
        <div class="col">
            
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <select class="form-control" id="sort" onChange="update()" name="col" value="<?php se($col); ?>">
                    <option value="created">Date</option>
                    <option value="category">Category</option>
                    <option value="total_price">Price</option>
                </select>
                <script>
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" id="sort" onChange="update()" name="order" value="<?php se($order); ?>">
                    <option value="asc">ASC</option>
                    <option value="desc">DESC</option>
                </select>
                <script type="text/javascript">
                        function update() {
                            var select = document.getElementById('sort');
                            var option = select.options[select.selectedIndex];

                        }

                        update();
                    </script>
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
    <br> 
    <table class = "userHistory" style="width:100%";>
        <tr>
            <th style="font-size: 18px; color: black; text-align: center;">ID</th>
            <th style="font-size: 18px; color: black; text-align: center;">User ID</th>
            <th style="font-size: 18px; color: black; text-align: center;">Address</th></b>
            <th style="font-size: 18px; color: black; text-align: center;">Total Price</th></b>
            <th style="font-size: 18px; color: black; text-align: center;">Date Purchased</th></b>
            <th style="font-size: 18px; color: black; text-align: center;">Order Details</th></b>
        </tr>
        <?php foreach ($orders as $item) : ?>
            <tr>
                <th><?php se($item, "id") ?></th>
                <th><?php se($item, "user_id") ?></th>
                <th><?php se($item, "address") ?></th>
                <th>$<?php echo se($item,"total_price","",false) ?></th>
                
                <th><?php se($item,"created");?></th>
                <th>
                    <a href="<?php 
                    $url = (string) get_url("orderdetails.php"); 
                    $ad = "?id=";
                    $id = (int) se($item, "id","",false);
                    $full = $url . $ad . $id;
                    echo $full;?>" class = "orderLink">Order Details</a>
                    
                </th>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<style>
    td, th{
        border: 1px solid black;
        padding: 5px 15px;
        justify-items: center;
    }
        .userHistory{
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;

    }

</style>
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
<?php require_once(__DIR__ . "/../../partials/flash.php"); ?>