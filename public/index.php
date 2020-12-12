<?php
    $app_name = '職業実践2 PHP チーム開発演習';
    $button_num = 50;
    $button_row_num = 5;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title><?= $app_name ?></title>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <h1 class="text-center text-primary py-3"><?= $app_name ?></h1>

        <div class="text-center">
        <?php
            for ($button_id = 1; $button_id <= $button_num; $button_id++) {
                if ($button_id%$button_row_num === 1) echo "<p class='mt-5'>";
                echo "<button class='button$button_id ml-5' id='button$button_id'>ボタン$button_id</button>";
                if ($button_id%$button_row_num === 0) echo "</p>";
            }
        ?>
        </div>
    </div>
</div>
</body>
</html>