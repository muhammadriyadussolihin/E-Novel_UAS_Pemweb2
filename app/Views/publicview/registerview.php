<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=base_url() ?>assets/image/img-01.png" alt="IMG">
				</div>
                <?= form_open('/hidden/register/proses_register') ?>
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Register Akun
					</span>
                    <?php if (session()->getFlashdata('error_register')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert">
                            <?= session()->getFlashdata('error_register') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="UserName" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Pergi Ke Halaman
						</span>
						<a class="txt2" href="<?= base_url('/login') ?>">
							Login
						</a>
					</div>

					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?=base_url() ?>assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url() ?>assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url() ?>assets_loginvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url() ?>assets_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url() ?>assets_login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
        var closeBtn = document.querySelector('#error-alert .close');
        closeBtn.addEventListener('click', function () {
            document.querySelector('#error-alert').style.display = 'none';
        });
	</script>
<!--===============================================================================================-->
	<script src="<?=base_url() ?>assets_login/js/main.js"></script>

</body>
</html>