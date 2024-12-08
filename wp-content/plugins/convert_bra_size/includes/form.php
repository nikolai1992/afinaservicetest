<div class="offset-md-2 col-md-8 main-text-div">
	<h1>Введите размер бюстгалстера для его конвертации</h1>
	<div class="form-div">
		<form id='changeBraSizeForm'>
			<div class="">
				<label>Введите латинскую букву</label>
				<input type='text' class='form-control convert-input' name='braSize'>
			</div>
			<br class="br">
			<div class='form-group text-center'>
				<input type='submit' value='Конвертировать' class='btn convert-btn'>
			</div>
		</form>
	</div>

</div>
<div class="slider_container">
	<img class="mySlides" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/slide1_image.webp' ); ?>" style="width:100%">
	<img class="mySlides" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/slide2_image.webp' ); ?>" style="width:100%">
	<img class="mySlides" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/slide3_image.webp' ); ?>" style="width:100%">
</div>
<div class="result-div text-center">
    <p class="result-label">Конвертированный размер</p>
    <p id='result'></p>
</div>