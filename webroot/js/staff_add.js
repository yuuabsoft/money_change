$(function() {
  var added_user_ids = Pack.added_user_ids;
  // チェックボックスをチェックしたら発動
  $('input[name="check[]"]').on('change', function() {
    var id = $(this).val();
    if ($(this).is(':checked')){
      $('#added_user' + id).show();
    } else {
      $('#added_user' + id).hide();
    }
  });
  //既に追加してある面接官にチェックを入れる
  $('input[name="check[]"]').each(function(){
    var id = Number($(this).val());
    if ($.inArray(id, added_user_ids) >= 0) {
      $(this).attr("checked", true);
      $('#added_user' + id).show();
    }
  });
  //名前検索機能
  $('#users-search').on('input', function() {
    var search = $(this).val();
    $('.custom-user-search').each(function(){
      $(this).hide();
      $(this).children('td').each(function(){
        var text = $(this).text();
        if(text.indexOf(search) != -1){
          $(this).parent().show();
        }
      });
    })
  });
});