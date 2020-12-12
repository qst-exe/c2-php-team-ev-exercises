<?php
$button_num = $argv[1];
if (empty($button_num)) {
    echo "ボタンの数が引数に指定されていません。";
    exit;
}

for ($button_id = 1; $button_id <= $button_num; $button_id++) {
    $js_contents = <<<JSC
// jQueryのボタン押下の処理
$(function() {
  $('.button${button_id}').click(function(e) {
    alert('ボタン${button_id}が押されました。');
  });
});
JSC;
    file_put_contents("public/js/button$button_id.js", $js_contents);
}