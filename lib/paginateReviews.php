<?php
function paginateReviews(){
    $results = [];
    $db = getDB();
    //Sort and Filters
    $col = se($_GET, "col", "created", false);
    //allowed list
    if (!in_array($col, ["created", "rating"])) {
        $col = "rating"; //default value, prevent sql injection
    }
    $order = se($_GET, "order", "asc", false);
    //allowed list
    if (!in_array($order, ["asc", "desc"])) {
        $order = "asc"; //default value, prevent sql injection
    }
    $item_id = $_GET['id'];
    
    $base_query = "SELECT rating, comment FROM ratings where $item_id = ratings.product_id";
    $total_query = "SELECT rating, comment FROM ratings";
    $params = [];
    if (!empty($col) && !empty($order)) {
        $base_query .= " ORDER BY $col $order"; 
    }
    $per_page = 10;
    paginate($total_query);
    $page = se($_GET, "page", 1, false); 
    $offset = ($page - 1) * $per_page;
    $base_query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    //get the records
    $stmt = $db->prepare($base_query);
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null; 

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
