$(function(){
	$('#modal-open').click( function(){
			//キーボード操作などにより、オーバーレイが多重起動するのを防止する
		$(this).blur() ;	//ボタンからフォーカスを外す
		if($("#modal-overlay")[0]) return false ;		//新しくモーダルウィンドウを起動しない
		//オーバーレイ用のHTMLコードを、[body]内の最後に生成する
		$("body").append('<div id="modal-overlay"></div>');

		//[$modal-overlay]をフェードインさせる
		$("#modal-overlay").fadeIn("slow");
		//[$modal-content]をフェードインさせる
		$("#modal-content").fadeIn("slow");
		centeringModal();

		$("#modal-overlay,#modal-close").unbind().click(function(){
			//[#modal-overlay]と[#modal-close]をフェードアウトする
			$("#modal-content,#modal-overlay").fadeOut("slow",function(){
				//フェードアウト後、[#modal-overlay]をHTML(DOM)上から削除
				$("#modal-overlay").remove();
			});
		});
	});

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

	$('#status-id').change(function(){
		$('#status-submit').submit();
	});
});