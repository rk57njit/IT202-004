<?php
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin") && !has_role("Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}
$name = se($_GET, "name", "", false);
$orders = filterPurchase2();

?>
<html>

<body>
    <h3 align="center">All Orders</h3>
    <?php if ($orders && count($orders) == 0) : ?>
        <p>No Order to Show</p>
    <?php else : ?>
        <form class="row row-cols-auto g-3 align-items-center">
            <div class="col">

            </div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-text">Sort</div>
                    <select class="form-control" name="col" value="<?php se($col); ?>">
                        <option value="created">Date Range</option>
                        <option value="category">Category</option>
                        <option value="total_price">Price</option>
                    </select>
                    <script>
                        document.forms[0].col.value = "<?php se($col); ?>";
                    </script>
                    <select class="form-control" name="order" value="<?php se($order); ?>">
                        <option value="asc">Up</option>
                        <option value="desc">Down</option>
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
        <br>
        <table class="t1" style="width:100%" ;>
            <tr>
                <th style="font-size: 18px; color: black; text-align: center;">ID</th>
                <th style="font-size: 18px; color: black; text-align: center;">User ID</th>
                <th style="font-size: 18px; color: black; text-align: center;">Address</th></b>
                <th style="font-size: 18px; color: black; text-align: center;">Total Price</th></b>
                <th style="font-size: 18px; color: black; text-align: center;">Date Purchased</th></b>
                <th style="font-size: 18px; color: black; text-align: center;">Order Details</th></b>
            </tr> <?php foreach ($orders as $item) : ?>
                <tr>
                    <th><?php se($item, "id") ?></th>
                    <th><?php se($item, "user_id") ?></th>
                    <th><?php se($item, "address") ?></th>
                    <th>$<?php echo se($item, "total_price", "", false) ?></th>
                    <th><?php se($item, "created"); ?></th>
                    <th>
                        <a href="<?php
                                    $url = (string) get_url("orderdetails.php");
                                    $ad = "?id=";
                                    $id = (int) se($item, "id", "", false);
                                    $full = $url . $ad . $id;
                                    echo $full; ?>" class="orderLink">Order Details</a>

                    </th>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <?php
    $db = getDB();
    //generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
    $query2 = "SELECT SUM(total_price) FROM orders"; //TODO change table name and desired columns
    $stmt2 = $db->prepare($query2);
    $results2 = [];
    try {
        $stmt2->execute();
        $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<pre>" . var_export($e, true) . "</pre>";
    }

    ?>
    <table>
        TOTAL PRICE OF RESULTS: $<?php foreach ($results2 as $x) {
                                        echo se($x, "SUM(total_price)");
                                    } ?>
</body>

</html>
<style>
    td,
    th {
        border: 1px solid black;
        padding: 5px 15px;
        justify-items: center;
    }

    .userHistory {
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
    }
</style>
<br>
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
<?php require_once(__DIR__ . "/../../../partials/flash.php"); ?>