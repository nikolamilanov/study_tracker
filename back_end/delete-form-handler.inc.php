<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $itemId = $_POST["item_id"];

    try{
        require_once "data-base-handler.inc.php";

        $sql = "DELETE FROM items WHERE id = ?;";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$itemId]);

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
