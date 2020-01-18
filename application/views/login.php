<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo WEBSITE_NAME; ?></title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</head>
<style>
.container{
	padding: 80px;
	text-align: center;
}

.signin-form {
    width: 100%;
    max-width: 500px;
    padding: 15px;
    margin: auto;
}
.form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}

</style>
<body>
<div class="signin-form" id="signin-form">
	<div class="container">

		<form action="<?php echo base_url('panel/login/authentication'); ?>" method="POST">
			<img class="sign-logo" src="<?php echo base_url('assets/image/signin_logo.png'); ?>" alt="" width="100" height="100">
			<h2>Please Sign In</h2>
			<input type="text" class="form-control" placeholder="Enter username" name="username">
			<input type="password" class="form-control" placeholder="Enter Password" name="password"><br>
            <?php echo @$this->session->flashdata('msg'); ?>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>
</body>
</html>