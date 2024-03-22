<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker</title>
    <link rel="stylesheet" href="../style/main_page.css">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <script>
    function redirect(){window.location.href = "edit_page.php";}
    </script>
</head>

<body>
    <header>
        <h1>Title</h1>
        <button class="edit-button" onclick="redirect()">Edit</button>
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
            $confidence_class = '';
            switch ($display['confidence_level']) {
                case 'very_high':
                    $confidence_class = 'very-high-confidance';
                    break;
                case 'high':
                    $confidence_class = 'high-confidence';
                    break;
                case 'medium':
                    $confidence_class = 'medium-confidence';
                    break;
                case 'low':
                    $confidence_class = 'low-confidence';
                    break;
                case 'very_low':
                    $confidence_class = 'very-low-confidance';
                default:
                    $confidence_class = ''; 
            }
            echo "<div class='item-wrapper $confidence_class'><p class='item-content'>" .$display['content'] . "</p></div>";
        }
        ?>

    </main>

</body>

</html>