<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker | Edit</title>
    <link rel="stylesheet" href="../style/edit_page.css">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <script>
    function redirect() {
        window.location.href = "index.php";
    }
    </script>
</head>

<body>
    <header>
        <h1>Title</h1>
        <button class="edit-button" onclick="redirect()">Home</button>
    </header>
    <?php 
require_once "../../back_end/data-base-handler.inc.php";

$sql1 = "SELECT * FROM items";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();

// set the resulting array to associative
$result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM items";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();

$result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
    ?>
    <form class="create-form" method="post" action="../../back_end/create-form-handler.inc.php">
        <h2>Create</h2>

        <label for="content">Content</label><br>
        <input type="text" name="content" id="content"><br>

        <label for="confidence-level">Confidence level</label><br>
        <select name="confidence-level" id="confidence-level">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>

        <label for=""></label><br>
        <input type="submit">
    </form>
    <form class="update-form" method="post" action="../../back_end/update-form-handler.inc.php">
        <h2>Update</h2>

        <label for="item_id">ID</label><br>
        <select name="item_id" id="item_id">
            <?php
        foreach(new RecursiveArrayIterator($stmt1->fetchAll()) as $k=>$v) {
            echo "<option value='" . $v['id'] . "'>" . $v['id'] ."</option>";
        }
        ?>
        </select><br>
        <label for="confidence-level">Confidence level</label><br>
        <select name="confidence-level" id="confidence-level">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select> <br>

        <label for="content">Content</label><br>
        <input type="text" name="content" id="content"><br>

        <input type="submit">
    </form>
    <form class="delete-form" method="post" action="../../back_end/delete-form-handler.inc.php">
        <h2>Delete</h2>

        <label for="item_id">ID</label><br>
        <select name="item_id" id="item_id">
            <?php
        foreach(new RecursiveArrayIterator($stmt2->fetchAll()) as $k=>$v) {
            echo "<option value='" . $v['id'] . "'>" . $v['id'] ."</option>";
        }
        ?>
        </select><br>

        <input type="submit">
    </form>
</body>

</html>