// jQueryのボタン押下の処理
$(function() {
  $('.button76').click(function(e) {
  for(let i = 1;i <= 100;i++){
    $('.button'+ i).addClass('case1');
  }
  });
});