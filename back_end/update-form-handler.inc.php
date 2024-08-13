<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $itemId = $_POST["item_id"];
    $itemContent = $_POST["content"];
    $confidenceLevel = $_POST["confidence-level"];

    try{
        require_once "data-base-handler.inc.php";

        $sql = " UPDATE items SET confidence_level = ?";

        $parameters = array($confidenceLevel);
        if (!empty($itemContent)){
            $sql .= ", content = ?";
            $parameters[] = $itemContent;
        }
        $parameters[] = $itemId;

        $sql .= " WHERE id = ?;";

        $stmt = $pdo->prepare($sql);

        $stmt->execute($parameters);

        $pdo = null;
        $stmt = null;

        header("Location: ../front_end/markup/edit_page.php");
        
        die();
    }
    catch (PDOException $e){
        die("Query failed:" . $e->getMessage());
    }

    header("Location: ../front_end/markup/edit_page.php");   
}
else{
header("Location: ../front_end/markup/edit_page.php");
}
