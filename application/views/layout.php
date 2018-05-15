<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$title?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="#">ShopToken</a>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Trang chủ</a>
					</li>
					<li>
						<a href="#">Link</a>
					</li>
				</ul>

		    <ul class="nav navbar-nav navbar-right">

				<?php

				if($this->session->has_userdata('id_member')){
?>
					<li>
						<a href="#"><strong><?=$info['email']?>(<strong style="color: red;"><?=number_format($info['money'])?> <sup>đ</sup></strong>)</strong> </a>
					</li>
<?php
				}
				?>

		    </ul>				
			</div>
		</nav>
		<div class="container" style="padding-top: 5%;">
			<?php
				$data['csrf_token'] = isset($csrf_token) ? $csrf_token : '';
				$data['data_result'] = isset($data_result) ? $data_result : '';
				$this->load->view($page, $data, FALSE);
			?>

		</div>

		<!-- jQuery -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script>
 			$('#reg_account').click(function(e) {
 				if($('#email').val() == '' || $('#password').val() == ''){
						$('#result_html').html('<div class="alert alert-warning">\
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
									<strong>Điền đầy đủ thông tin vào form.</strong> \
								</div>');
						return false;
 				}
 				$(this).prop({
 					disabled : true,
 				}).html('Đang xử lý...');
 				$.post('Shop/Ajax/r_l_member', $('#login_form').serialize()).done(function(a){
 					$('#result_html').html('<div class="alert alert-'+a.type+'">\
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
									<strong id="html_result_strong">'+a.message+' </strong>\
								</div>');


 				}).fail(function(){
 					$('#result_html').html('<div class="alert alert-warning">\
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
									<strong>Không thể kết nối đến server.</strong> \
								</div>');
 				});
				$(this).prop({
 					disabled : true,
 				}).html('Đăng nhập & Đăng ký');
 				setTimeout(function(){
 					location.reload();

 				}, 2000);
 				e.preventDefault();
 			});
 		</script>
	</body>
</html>