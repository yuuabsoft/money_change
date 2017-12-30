$(function() {
	var evaluations = Pack.evaluations;
	//評点のカウント用の配列作成
	var cData = [0,0,0,0,0];
	var aData = [0,0,0,0,0];
	$.each(evaluations, function(i, val){
		cData[val.culture_evaluation-1]++;
		aData[val.ability_evaluation-1]++;
	});
	//chartに渡すデータ作成
	var cultureData = {
		labels: ["1点", "2点", "3点", "4点", "5点"],
		datasets: [
		{
		fillColor: "rgba(255,0,0,0.5)",//塗りつぶす色
		strokeColor: "rgba(220,220,220,0.8)",//枠線の色
		highlightFill: "rgba(255,0,0,0.75)",//マウスオーバー時塗りつぶす色
		highlightStroke: "rgba(220,220,220,1)",//マウスオーバー時枠線の色
		data: cData,//値
		}],
	};
	var abilityData = {
		labels: ["1点", "2点", "3点", "4点", "5点"],
		datasets: [
		{
		fillColor: "rgba(0,0,255,0.5)",//塗りつぶす色
		strokeColor: "rgba(220,220,220,0.8)",//枠線の色
		highlightFill: "rgba(0,0,255,0.75)",//マウスオーバー時塗りつぶす色
		highlightStroke: "rgba(220,220,220,1)",//マウスオーバー時枠線の色
		data: aData//値
		}]
	};
    var options = {
    	responsive: true,
    }
	var ctxCulture = $('#cultureChart')[0].getContext("2d");
	var culture = new Chart(ctxCulture).Bar(cultureData,options);
	var ctxAbility = $('#abilityChart')[0].getContext("2d");
	var ability = new Chart(ctxAbility).Bar(abilityData,options);
});