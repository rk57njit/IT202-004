<?php
require(__DIR__ . "/../../partials/nav.php");
if (has_role("Admin") && has_role("Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "/home.php"));
}

$db = getDB();
$query = "SELECT * FROM Users";
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}
?>



<h3>All Orders</h3>
<?php if ($results == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table padding=5 style="text-align:left;">
        
            <tr><h3>Usernames:</h3>
            <?php foreach ($results as $result) : 
            
                ?>
                
                <td>
                    <a href="userProfile.php?id=<?php se($result, 'id'); ?>"><?php se($result, "username"); ?></a>
                    <?php $user_id = se($result, "user_id", 0, false);
                    $username = se($result, "username", "", false);
                    ?>
                </td>
                <td><?php se($result, "created"); ?> 
                <br>
                </td><td><?php
                if( se($result, "visibility", 1, false)== "1") : 
                    echo se($result, "email");
                endif; 
                ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


<?php endif; ?>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>