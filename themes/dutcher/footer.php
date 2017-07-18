	</div>
	</div>
	<div id="w_f">
		<div class="footer">
			<div class="inline middle content-footer relative">
				<div class="centrar_total">
					<a href="<?php echo get_home_url(); ?>" class="logo-button centrar_total">
		                <object data="<?php echo assets(); ?>/images/logo2.svg" type="image/svg+xml" class="logo"></object>
		            </a>
				</div>
			</div><!--
		 --><div class="inline middle content-footer">
		 		<div class="centrar_total content-suscription">
		 			<?php echo do_shortcode('[mc4wp_form id="43"]'); ?>
		 		</div>
		 	</div><!--
	  	 --><div class="inline middle content-footer relative">
		 		<div class="centrar_total">
					<div class="content-redes text-center">
						<a href="#" class="red redfb"></a>
						<a href="#" class="red redtw"></a>
						<a href="#" class="red redinsta"></a>
					</div>
					<a href="mailto:hello@dutcher.rocks" class="ls3 avenir-normal big mail-dutcher">hello@dutcher.rocks</a>
		 		</div>
			</div>
		</div>
		<div class="footer-dos text-center big avenir-normal ls2">
			©Dutcher México 2017 todos los derechos reservados
		</div>
        <?php wp_footer();?>
    </div>
	<!--suppress HtmlUnknownTarget -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php assets(); ?>/js/script.js"></script>
	<?php require_once("assets/js/gafaCore.php"); ?>
	<script src="<?php assets(); ?>/js/build.js"></script>
    </body>
</html>
