<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker</title>
    <link rel="stylesheet" href="../style/main_page.css">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/navbar.css">
</head>

<body>
    <header>
        <h1>Title</h1>
        <button class="edit-button">Edit</button>
    </header>
    <?php
     require_once "../../back_end/data-base-handler.inc.php";

     $sql = "SELECT * FROM items;";
     $stmt = $pdo->prepare($sql);

     $stmt->execute();

     $data = $stmt->fetchAll();
    ?>
    <main>
        <?php
        foreach ($data as $display){
            echo "<div class='item-wrapper'><p class='item-content'>" .$display['content'] . "</p></div>";
        }
        ?>

    </main>

</body>

</html>