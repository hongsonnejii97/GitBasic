<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/service_3_0_0';

	if($check == 0){
		$css_inline .= "
		<style>
			.service_5_0_0 {
				padding: 30px 0
			}
			
			.service_5_0_0__title h2 {
				font-size: 28px;
				text-align: center;
				font-weight: 600;
				padding: 0;
				margin: 0 0 15px;
				line-height: 40px;
				text-transform: uppercase;
				color: #000
			}
			
			.service_5_0_0__line {
				width: 258px;
				margin: 15px auto 10px;
				position: relative;
				border-top: 1px solid #00c6ca
			}
			
			.service_5_0_0__line::before {
				width: 160px;
				margin: 0 auto;
				border-top: 3px solid #00c6ca;
				position: absolute;
				left: 50px;
				top: -2px;
				content: ''
			}
			
			.service_5_0_0__sub {
				text-align: center;
				font-style: italic;
				font-size: 20px;
				margin: 10px 0 30px
			}
			
			.service_5_0_0 .row {
				text-align: center
			}
			
			.service_5_0_0__item {
				display: block;
				margin-bottom: 20px
			}
			
			.service_5_0_0__ct {
				font-size: 14px;
				max-width: 414px;
				margin: -15px auto 0;
				position: relative
			}
			
			.service_5_0_0__tt {
				text-align: center;
				text-transform: uppercase;
				background: #00d9dd;
				color: #fff;
				display: table;
				margin: 0 auto;
				font-weight: 600;
				padding: 5px 20px
			}
			
			.service_5_0_0__desc {
				font-size: 16px;
				margin: 5px 0 2px
			}
			
			.service_5_0_0__more {
				font-style: italic;
				text-decoration: underline;
				font-size: 14px
			}
			
			@media (max-width: 1024px) {
				.service_5_0_0__box {
					max-width: 33%
				}
			}
			
			@media (max-width: 812px) {
				.service_5_0_0__box {
					width: 50%;
					max-width: 100%;
					justify-content: space-around
				}
			}
			
			@media (max-width: 414px) {
				.service_5_0_0 {
					padding: 30px 0 15px
				}
				.service_5_0_0__title h2 {
					font-size: 18px;
					line-height: 25px
				}
				.service_5_0_0__sub {
					font-size: 15px
				}
				.service_5_0_0__item {
					width: 100%;
					margin: 0 auto 10px;
					display: block
				}
				.service_5_0_0__item img {
					width: 100%
				}
				.service_5_0_0__tt {
					font-size: 12px;
					padding: 5px 10px
				}
				.service_5_0_0__more {
					font-size: 12px
				}
				.service_5_0_0__desc {
					font-size: 14px
				}
			}
			
			@media (max-width: 320px) {
				.service_5_0_0__tt {
					font-size: 11px;
					padding: 5px
				}
			}
			/*# sourceMappingURL=../maps/service_5_0_0.css.map */
		</style>

        ";
		add_action('wp_footer', 'service_5_0_0');
			
	}
	
?>
<section class="service_5_0_0">
    <div class="container">
        <div class="service_5_0_0__title">

            <?php
				$data = explode("\n",  $field['service_title']);
				echo'
					<h2>'.$data[0].'</h2>
				';
			?>
        </div>
        <div class="service_5_0_0__line"></div>
        <?php
			$data = explode("\n",  $field['service_title']);
			echo'
				<div class="service_5_0_0__sub">'.$data[1].'</div>
			';
		?>

        <div class="row">
            <?php
				   $rows = $field["sv_info"];
				   foreach($rows as $row):
					echo'
						<div class="col-xl-4 col-md-6 service_5_0_0__box">
							<a href="'.$row['sv_link'].'" class="service_5_0_0__item">
								<div class="service_5_0_0__pic">
									<img src="'.$row['sv_img'].'" alt="'.$row['sv_title'].'">
								</div>
								<div class="service_5_0_0__ct">
									<div class="service_5_0_0__tt">'.$row['sv_title'].'</div>
									<div class="service_5_0_0__desc">'.$row['sv_content'].'</div>
									<div class="service_5_0_0__more">'.$row['sv_text'].' >></i>
									</div>
								</div>
							</a>
						</div>
					';
				endforeach;
			?>
        </div>
    </div>
</section>