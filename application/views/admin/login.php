<form action="" method="POST">
	<input type="text" name="password">
	<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
	<button type="submit">Login</button>
</form>