$(function(){
	//タイトルの座標
	var title = $('#page-title').position();
	//サイドバーの計算
	title.left = $('.main-sidebar').outerWidth(true) + title.left;
	title.top = $('.main-header').outerHeight(true) + title.top;
	//読み込み時に座標が一瞬別の点になる現象の防止
	$("#name-search").height(0);
	$("#name-search div").height(0);
	$("#name-search-input").show();
	$("#name-search-submit").show();
	$("#name-search-reset").show();
	//座標の計算
	var input = title.left + $('#page-title').outerWidth(true) + 5;
	$("#name-search-input").offset({left: input, top: (title.top)});
	var submit = input + $('#name-search-input').outerWidth(true) + 10;
	$("#name-search-submit").offset({left: submit, top: (title.top)});
	var reset = submit + $('#name-search-submit').outerWidth(true);
	$("#name-search-reset").offset({left: reset, top: (title.top)});


	//センタリングをする関数
	function centeringModal(){
		//画面(ウィンドウ)の幅を取得し、変数[w]に格納
		var w = $(window).width();
		//画面(ウィンドウ)の高さを取得し、変数[h]に格納
		var h = $(window).height();
		//コンテンツ(#modal-content)の幅を取得し、変数[cw]に格納
		var cw = $('#modal-content').outerWidth(true);
		//コンテンツ(#modal-content)の高さを取得し、変数[ch]に格納
		var ch = $("#modal-content").outerHeight(true);
		//コンテンツ(#modal-content)を真ん中に配置するのに、左端から何ピクセル離せばいいか？を計算して、変数[pxleft]に格納
		var pxleft = ((w - cw)/2);
		//コンテンツ(#modal-content)を真ん中に配置するのに、上部から何ピクセル離せばいいか？を計算して、変数[pxtop]に格納
		var pxtop = ((h - ch)/2);
		//[#modal-content]のCSSに[left]の値(pxleft)を設定
		$("#modal-content").css({'left': pxleft});
		//[#modal-content]のCSSに[top]の値(pxtop)を設定
		$("#modal-content").css({'top': pxtop});
	}
});