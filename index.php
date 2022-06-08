<?php
require_once __DIR__ . "/db.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src = "script.js"></script>
</head>
<body>
    <input type="button" onclick="SaveContent()" value="Save">
    <input type="button" onclick="ShowContent()" value="Show Saved Content">
    <br>
    <label for="name">Таблица чемпионата выбранной лиги</label>
    <form action="" method="post">
        <input type="number" name="league" value = 1 min = 1 max = 3>
        <input type="submit" value="Найти"><br>
    </form>
    <br>

    <label for="players">Список футболистов указанной команды</label>
    <form action="" method="post">
    <?php
    $statement = getTeams();

    echo "<select name = 'players'>";
    echo "<option value='0'>Выбор</option>";
    foreach ($statement->toArray() as $data) {
        echo $data->name;
        echo "<option value = {$data['name']} > {$data['name']} </option>";
    }
    echo "</select>";
    ?>
    <input type="submit" value="Найти"><br>
</form>
<br>

<label for="games">Список игр, в которых участвовала выбранная команда</label>
<form action="" method="post">
    <?php
    $statement = getTeams();

    echo "<select name = 'games'>";
    echo "<option value='0'>Выбор</option>";
    foreach ($statement->toArray() as $data) {
        echo $data->name;
        echo "<option value = {$data['name']} > {$data['name']} </option>";
    }
    echo "</select>";
    ?>
    <input type="submit" value="Найти"><br>
</form>
<br>
<br>

<?php
if (isset($_POST["league"])) {
    findByLeague($_POST["league"]);
} elseif (isset($_POST["players"])) {
    findPlayers($_POST["players"]);
} elseif (isset($_POST["games"])) {
    findGames($_POST["games"]);
}
?>

<div id="saved_content">
    
</body>
</html>