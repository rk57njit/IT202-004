
<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin") && !has_role("Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}


$db = getDB();
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT id, name, description, stock, unit_price, visibility FROM Products LIMIT 20"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}
?>
<h3>All Items</h3>
<?php if ($results && count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table padding=5>
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                    <th>Image</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>

                <td>
                    <a href="edit_item.php?id=<?php se($record, "id"); ?>">Edit</a>
                </td>
                <td>
                    
                    <img src="<?php echo get_url(se($record, "img", "pics/test.png", false));?>" height=auto width=100>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

   
<?php endif; ?>
<style>
    td, th{
        border: 1px solid black;
        padding: 3px 10px;
        justify-items: center;
    }

</style>
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