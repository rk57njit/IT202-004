<?php
function filterPurchase()
{
    $results = [];
    $db = getDB();
    //Sort and Filters
    $col = se($_GET, "col", "created", false);
    //allowed list
    if (!in_array($col, ["created", "total_price"])) {
        $col = "total_price"; //default value, prevent sql injection
    }
    $order = se($_GET, "order", "asc", false);
    //allowed list
    if (!in_array($order, ["asc", "desc"])) {
        $order = "asc"; //default value, prevent sql injection
    }
    $name = se($_GET, "name", "", false);
    $userId = get_user_id();
    $base_query = "SELECT * FROM orders ";
    $total_query = "SELECT count(1) as total FROM orders";
    $query = " WHERE `user_id` = $userId";
    $params = [];
    if (!empty($name)) {
        $query .= " AND name like :name";
        $params[":name"] = "%$name%";
    }
    if (!empty($col) && !empty($order)) {
        $query .= " ORDER BY $col $order"; 
    }
    $per_page = 10;
    paginate($total_query . $query, $params, $per_page);
    $page = se($_GET, "page", 1, false); 
    $offset = ($page - 1) * $per_page;
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    //get the records
    $stmt = $db->prepare($base_query . $query);
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = NULL; 

    try {
        $stmt->execute($params);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
    return $results;
}
