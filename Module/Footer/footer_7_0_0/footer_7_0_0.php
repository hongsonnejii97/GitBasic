﻿<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Footer/footer_7_0_0';	
	if($check == 0){
		$css_inline .= '
			<style>
				.footer_7_0_0 h2 {
				font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
				}
			
				.footer_7_0_0 {
				background: #005b59;
				padding-top: 50px;
				}
				.footer_7_0_0__container {
				width: 80%;
				margin: 0 auto;
				padding-bottom: 20px;
				}
				.footer_7_0_0__logo {
				text-align: center;
				}
				.footer_7_0_0__social {
				margin-top: 50px;
				text-align: center;
				}
				.footer_7_0_0__social a {
				margin: 0 10px;
				}
				.footer_7_0_0 h2 {
				color: #fff;
				text-transform: uppercase;
				font-weight: 600;
				font-size: 20px;
				margin-bottom: 20px;
				}
				.footer_7_0_0__info ul {
				margin: 0;
				padding: 0;
				list-style: none;
				}
				.footer_7_0_0__info ul li {
				padding-bottom: 30px;
				}
				.footer_7_0_0__info ul li a {
				color: #fff;
				transition: all 0.4s;
				}
				.footer_7_0_0__info ul li a p {
				margin: 0;
				color: #98B1B0;
				font-weight: 600;
				}
				.footer_7_0_0__info ul li:hover a {
				color: #EF810A;
				transition: all 0.4s;
				}
				.footer_7_0_0__menu ul {
				margin: 0;
				padding: 0;
				list-style: none;
				display: flex;
				flex-wrap: wrap;
				}
				.footer_7_0_0__menu ul li {
				width: 50%;
				padding-bottom: 12px;
				}
				.footer_7_0_0__menu ul li a {
				color: #EF810A;
				font-weight: 600;
				transition: all 0.4s;
				}
				.footer_7_0_0__menu ul li:hover a {
				color: #fff;
				transition: all 0.4s;
				}
				.footer_7_0_0__regist input {
				padding: 15px 20px;
				border: none;
				margin-bottom: 10px;
				width: 100%;
				}
				.footer_7_0_0__regist button {
				background: #EF810A;
				color: #fff;
				text-transform: uppercase;
				font-weight: 600;
				width: 100%;
				border: none;
				text-align: center;
				padding: 15px;
				cursor: pointer;
				transition: all 0.4s;
				}
				.footer_7_0_0__regist button:hover {
				background: #E0C38B;
				transition: all 0.4s;
				color: #333;
				}
				.footer_7_0_0__copyright {
				background: #014D4B;
				text-align: center;
				color: #A6B6B5;
				padding: 10px;
				}
			
				@media (max-width: 1440px) {
				.footer_7_0_0__container {
					width: 90%;
				}
				}
				@media (max-width: 1024px) {
				.footer_7_0_0 {
					padding-top: 30px;
				}
				.footer_7_0_0__container {
					width: 95%;
				}
				.footer_7_0_0 h2 {
					font-size: 16px;
				}
				.footer_7_0_0__social {
					margin-top: 30px;
				}
				.footer_7_0_0__social a {
					margin: 0 5px;
				}
				.footer_7_0_0__info ul li a {
					font-size: 12px;
				}
				.footer_7_0_0__menu ul li a {
					font-size: 12px;
				}
				}
				@media (max-width: 812px) {
				.footer_7_0_0__logo img {
					width: 100%;
				}
				.footer_7_0_0__social a {
					margin: 0 2px;
				}
				.footer_7_0_0__social img {
					width: 20%;
				}
				.footer_7_0_0 h2 {
					font-size: 14px;
				}
				.footer_7_0_0__info ul li {
					padding-bottom: 13px;
				}
				.footer_7_0_0__menu ul li {
					padding-bottom: 3px;
				}
				.footer_7_0_0__regist input {
					padding: 10px;
				}
				.footer_7_0_0__regist button {
					padding: 10px;
					font-size: 14px;
				}
				.footer_7_0_0__copyright {
					font-size: 14px;
				}
				}
				@media (max-width: 414px) {
				.footer_7_0_0 {
					padding-top: 20px;
				}
				.footer_7_0_0__container {
					width: 90%;
				}
				.footer_7_0_0__logo img {
					width: 30%;
				}
				.footer_7_0_0__social {
					width: 50%;
					margin: 20px auto;
				}
				.footer_7_0_0 .col-md-3:nth-child(2), .footer_7_0_0 .col-md-3:nth-child(3) {
					width: 50%;
					margin-bottom: 10px;
				}
				.footer_7_0_0 h2 {
					margin-bottom: 10px;
					margin-top: 0;
				}
				.footer_7_0_0__info ul li {
					padding-bottom: 10px;
				}
				.footer_7_0_0__menu ul li {
					padding-bottom: 2px;
				}
				.footer_7_0_0__menu ul li a {
					font-size: 11px;
				}
				.footer_7_0_0__regist input {
					padding: 5px 10px;
					margin-bottom: 5px;
				}
				.footer_7_0_0__regist button {
					padding: 5px;
				}
				.footer_7_0_0__copyright {
					font-size: 10px;
				}
				}
				@media (max-width: 375px) {
				.footer_7_0_0 h2 {
					font-size: 12px;
				}
				.footer_7_0_0__info ul li a {
					font-size: 11px;
				}
				}
				@media (max-width: 320px) {
				.footer_7_0_0__container {
					width: 95%;
				}
				.footer_7_0_0 h2 {
					font-size: 11px;
				}
				.footer_7_0_0__menu {
					padding-left: 10px;
				}
				.footer_7_0_0__menu ul li a {
					font-size: 10px;
				}
				}	
			</style>
		';
		add_action('wp_footer', 'footer_7_0_0');
	}
	$fields = $field['footer'];
?>

<section class="footer_7_0_0">
	<div class="footer_7_0_0__container">
		<div class="row">
			<div class="col-md-3">
				<div class="footer_7_0_0__logo">
					<img class="img-lazy" data-src="<?php echo $path; ?>/images/logo.png" alt="">
				</div>
				<div class="footer_7_0_0__social">
					<?php
						foreach($fields as $key => $value):
							if( $value['acf_fc_layout'] == 'footer_box1' ):
								$row = $value['social_place'];
								foreach($row as $key1 => $value1):
									$data = explode("\n", $value1['social_detail']); 
									echo '
										<a href="'.$data[1].'"><img class="img-lazy" data-src="'.$data[0].'" alt=""></a>
									';
								endforeach;
							endif;
						endforeach;
					?>
				</div>
			</div>
			<div class="col-md-3">
				<h2>Liên hệ với chúng tôi</h2>
				<div class="footer_7_0_0__info">
					<ul>
						<?php
							foreach($fields as $key => $value):
								if( $value['acf_fc_layout'] == 'footer_box2' ):
									$data = explode("\n", $value['info']); 
									echo '
										<li>
											<a href="tel:'.$data[0].'">
												<p>Hotline 24/7</p>
												<span>'.$data[0].'</span>
											</a>
										</li>
										<li>
											<a href="tel:'.$data[1].'">
												<p>Di động</p>
												<span>'.$data[1].'</span>
											</a>
										</li>
										<li>
											<a href="mailto:'.$data[2].'">
												<p>Email</p>
												<span>'.$data[2].'</span>
											</a>
										</li>
									';
								endif;
							endforeach;
						?>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<h2>Dịch vụ nổi bật</h2>
				<div class="footer_7_0_0__menu">
					<?php
						foreach($fields as $key => $value):
							if( $value['acf_fc_layout'] == 'footer_box3' ):
								$data = $value['dv_nb']; 
								echo '
									'.$data.'
								';
							endif;
						endforeach;
					?>
				</div>
			</div>
			<div class="col-md-3">
				<h2>Địa chỉ</h2>
				<a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+H%C3%A0+N%E1%BB%99i/@21.0318482,105.8223877,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab74bf6e106d:0x52e35f35f12a3742!8m2!3d21.0318432!4d105.8245764?hl=vi-VN" rel="nofollow" target="_blank" class="footer_7_0_0__regist">
					<img class="img-lazy" data-src="<?php echo $path; ?>/images/map.jpg" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="footer_7_0_0__copyright">
		Copyright Ⓒ Hệ thống thẩm mỹ viện Đông Á | All Rights Reserved
	</div>
</section>


