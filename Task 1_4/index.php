<?php
$filename = __DIR__ . "/data.json";
$result = [];
if (file_exists($filename))
    $result = json_decode(file_get_contents($filename), true);


if(isset($_GET['set_viewed'])){
    foreach ($result as &$item){
        $viewedId = $_GET['set_viewed'];
        if($item['id'] == $viewedId){
            $item['viewed']++;
        }
    }

    file_put_contents($filename, json_encode($result));
}



?>

<? foreach ($result as $task): ?>
    <div>
        <b><?= $task['name'] ?></b><br>
        <small>Viewed: <?= $task['viewed'] ?></small><br>
        <?= $task['text'] ?><br><br>
        <a href="?set_viewed=<?= $task['id'] ?>">I watched</a>
        <hr>
    </div>

<? endforeach;?>

