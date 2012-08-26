var $tabs = $('.tab');
var $contents = $('.content');

function changeTab(tabId) {
  var $currentPage = $contents.filter(':visible');
  var $targetPage = $contents.filter('#content' + tabId);
  
  // コンテンツの切り替え（ここをアニメーションさせてください）
  $currentPage.hide();
  $targetPage.show();

  // カレントのタブ変更
  $tabs.removeClass('current');
  $tabs.filter('#tab' + tabId).addClass('current');
}

$tabs.click(function() {
  changeTab($(this).attr('id').slice(3));
});
