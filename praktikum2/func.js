function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function php(){
	$.get({
		url: 'vers.php',
		success: function(data){
			$('#php').html(data);
		}
	});
}
