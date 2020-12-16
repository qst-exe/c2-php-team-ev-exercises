<?php
    $app_name = '職業実践2 PHP チーム開発演習';
    $button_num = 100;
    $button_row_num = 5;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php
            echo "<link rel='stylesheet' type='text/css'' href='css/button$button_id.css'>";
        }
    ?>
    <title><?= $app_name ?></title>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <h1 class="text-center text-primary py-3"><?= $app_name ?></h1>

        <div class="text-center mb-5">
        <?php
            for ($button_id = 1; $button_id <= $button_num; $button_id++) {
                if ($button_id%$button_row_num === 1) echo "<p class='mt-5'>";
                echo "<button class='button$button_id ml-5' id='button$button_id'>ボタン$button_id</button>";
                if ($button_id%$button_row_num === 0) echo "</p>";
            }
        ?>
        </div>
        <p class="text-center">
            You can know the app detail by watching <a href="https://github.com/qst-exe/c2-php-team-dev-exercises" target="_blank">https://github.com/qst-exe/c2-php-team-dev-exercises</a>.
        </p>
    </div>
</div>
</body>
<?php
for ($button_id = 1; $button_id <= $button_num; $button_id++) {
    echo "<script type='text/javascript' src='js/button$button_id.js'></script>";
}
?>
</html>