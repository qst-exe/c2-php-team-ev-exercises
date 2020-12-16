// jQueryのボタン押下の処理
$(function() {
  $('.button81').click(function(e) {
    alert('Done by Yuka!');
  });
  $("div").on('click', function(){
    $(this).addClass('pikapika');
  });
});