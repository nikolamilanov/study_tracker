<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker | Edit</title>
    <link rel="stylesheet" href="../style/edit_page.css">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/navbar.css">
</head>

<body>
    <header>
        <h1>Title</h1>
        <button class="edit-button" onclick="redirect()">Edit</button>
    </header>
    <form class="create-form" method="post" action="../../back_end/create-form-handler.inc.php">
        <label for="content">Add</label><br>
        <input type="text" name="content" id="content"><br>

        <input type="submit">
    </form>
</body>

</html>