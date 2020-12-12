<?php
$button_num = $argv[1];
if (empty($button_num)) {
    echo "ボタンの数が引数に指定されていません。";
    exit;
}

for ($button_id = 1; $button_id <= $button_num; $button_id++) {
    $css_contents = <<< CSS
.button${button_id} {
    color: black;
    background-color: white;
    width: 120px;
    height: 30px;
}
CSS;
    file_put_contents("public/css/button$button_id.css", $css_contents);
}