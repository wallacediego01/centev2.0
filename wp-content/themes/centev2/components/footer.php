<?php

/**
 * Footer
 *
 * The website footer section
 *
 */
$midias = get_field('option_midias', 'option');
$fields = get_field('option_header', 'option');
$header = new stdClass;
$header->logo_url = $fields['option_logo'];
?>

<footer class="_footer py-10  ">
		
	<div class="fot-bottom  text-white position-relative">
		<div class='container'>
			<div class='row align-items-center justify-content-center'>
				<div class=' col-lg-12 text-center mb-lg-6'>
					<p class="mb-3"> Inova © 2021 por Wallace Diego </p>
				</div>
				<div class='col-12 col-lg-12  text-center'>
					<a href="#page" class="link-topo text-white">
						<i class="icon-up-open"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</footer>


