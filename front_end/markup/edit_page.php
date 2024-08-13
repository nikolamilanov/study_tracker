<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker | Edit</title>
    <link rel="stylesheet" href="../style/edit_page.css">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
    function redirect() {
        window.location.href = "index.php";
    }
    </script>
    <script src="../script/form_dropdown.js" defer></script>
</head>

<body>
    <header>
        <h1>Study Tracker</h1>
        <button class="edit-button" onclick="redirect()">Home</button>
    </header>
    <?php
        //fetch content to be displayed form DB
        require_once "../../back_end/data-base-handler.inc.php";
        
        $sql1 = "SELECT * FROM items";
        $stmt1 = $pdo->prepare($sql1);
        $stmt1->execute();
        
        $result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
        
        
        $sql2 = "SELECT * FROM items";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute();
        
        $result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
    ?>

    <!-- CREATE FORM -->
    <form id="create-form" class="create-form" method="post" action="../../back_end/create-form-handler.inc.php">

        <h2 id="create-form-heading">Create <i class="bi bi-chevron-down"></i></h2>
        <div id="create-form-display">

            <label for="content">New Content</label><br>
            <input type="text" name="content" id="content"><br>

            <label for="confidence-level">Confidence level</label><br>
            <select name="confidence-level" id="confidence-level">
                <option value="very_high">Very High</option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
                <option value="very_low">Very Low</option>
            </select>

            <input type="submit" value="Confirm">

        </div>

    </form>

    <!-- UPDATE FORM -->
    <form id="update-form" class="update-form" method="post" action="../../back_end/update-form-handler.inc.php">

        <h2 id="update-form-heading">Update <i class="bi bi-chevron-down"></i></h2>

        <div id="update-form-display">

            <label for="item_id">Content to Update</label><br>
            <select name="item_id" id="item_id">
                <?php
                //dynamically dispaly content to be updated in option
                foreach(new RecursiveArrayIterator($stmt1->fetchAll()) as $k=>$v) {
                    echo "<option value='" . $v['id'] . "'>" . $v['content'] ."</option>";
                }
                ?>
            </select><br>
            <label for="confidence-level">Confidence level</label><br>
            <select name="confidence-level" id="confidence-level">
                <option value="very_high">Very High</option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
                <option value="very_low">Very Low</option>
            </select> <br>

            <label for="content">Replacing Content</label><br>
            <input type="text" name="content" id="content"><br>

            <input type="submit" value="Confirm">

        </div>
    </form>

    <!-- DELETE FORM -->
    <form id="delete-form" class="delete-form" method="post" action="../../back_end/delete-form-handler.inc.php">

        <h2 id="delete-form-heading">Delete <i class="bi bi-chevron-down"></i></h2>

        <div id="delete-form-display">

            <label for="item_id">Content to Delete</label><br>
            <select name="item_id" id="item_id">
                <?php
                //dynamically dispaly content to be deleted in option
                foreach(new RecursiveArrayIterator($stmt2->fetchAll()) as $k=>$v) {
                    echo "<option value='" . $v['id'] . "'>" . $v['content'] ."</option>";
                }
                ?>
            </select><br>
            <input type="submit" value="Confirm">

        </div>
    </form>

</body>

</html>