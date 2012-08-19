var $tabs = $('.tab');
var $contents = $('.content');

function changeTab(tabId) {
  var $currentPage = $contents.filter(':visible');
  var $targetPage = $contents.filter('#content' + tabId);
  
  // �R���e���c�̐؂�ւ��i�������A�j���[�V���������Ă��������j
  $currentPage.hide();
  $targetPage.show();

  // �J�����g�̃^�u�ύX
  $tabs.removeClass('current');
  $tabs.filter('#tab' + tabId).addClass('current');
}

$tabs.click(function() {
  changeTab($(this).attr('id').slice(3));
});
