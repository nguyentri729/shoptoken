<center>
	<h2>Add clone vào hệ thống</h2>
	<form id="add_clone">
		<b>* Danh sách clone: </b><br>
		<textarea placeholder="Dan danh sach clone vao day" id="ds_clone" rows="5" style="width: 100%;"></textarea><br>
		<br>
		<b>* Loại thêm: </b><br>
		<select id="loai" style="width: 100%;">
					<option value="1">Veri trắng</option>
					<option value="2">Veri avatar</option>
					<option value="3">NoVeri trắng</option>
					<option value="4">NoVeri avatar</option>
		</select><br><br>
		<button type="submit">Thêm vào hệ thống</button>

	</form>
</center>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript">
 	
 	$('#add_clone').submit(function(e) {
 	    var _ds_clone =  $('#ds_clone').val().split('\n');
 	    $.each(_ds_clone, function(key, a) {
 	    	var _info_clone = a.split('|');
 	    	console.log(_info_clone);
 	    	/*var info_clone = [];

    		info_clone[''] = '';

 	    	$.post('/Hung/Ajax/add_clone', sezzile).done(function(b){
 	    		console.log(b);
 	    	}).fail(function(){
 	    		console.log('error');
 	    	});*/
 	    });

 		e.preventDefault();
 	});
 </script>