<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $itemContent = $_POST["content"];
    $confidenceLevel = $_POST["confidence-level"];

    try{
        require_once "data-base-handler.inc.php";

        $sql = " INSERT INTO items (content, confidence_level) VALUES(?,?);";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$itemContent, $confidenceLevel]);

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