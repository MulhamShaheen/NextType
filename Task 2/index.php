<?php


include_once(__DIR__ . "/classes/autoload.php");

echo CBase::getParam('message');
$links = CBase::getLinks('https://edu.susu.ru/mod/assign/view.php?id=6109878');

foreach ($links as $link):?>
    <div>
        <pre>
            <b><?= $link ?></b><br>
        </pre>

    </div>

<?php
endforeach;
?>

