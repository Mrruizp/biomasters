<script src="../util/Medishop/html/assets/js/jquery.min.js"></script>
<script src="../util/Medishop/html/assets/js/bootstrap.bundle.min.js"></script>
<script src="../util/Medishop/html/assets/js/magnific-popup.min.js"></script>
<script src="../util/Medishop/html/assets/js/owl.carousel.min.js"></script>
<script src="../util/Medishop/html/assets/js/owl.carousel2.thumbs.min.js"></script>
<script src="../util/Medishop/html/assets/js/meanmenu.min.js"></script>
<script src="../util/Medishop/html/assets/js/nice-select.min.js"></script>
<script src="../util/Medishop/html/assets/js/rangeSlider.min.js"></script>
<script src="../util/Medishop/html/assets/js/wow.min.js"></script>
<script src="../util/Medishop/html/assets/js/form-validator.min.js"></script>
<script src="../util/Medishop/html/assets/js/contact-form-script.js"></script>
<script src="../util/Medishop/html/assets/js/ajaxchimp.min.js"></script>
<script src="../util/Medishop/html/assets/js/main.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="../util/nivo-slider/js/jquery.nivo.slider.js"></script>

	<script type="text/javascript">
		$(window).on('load', function() {
		    $('#slider').nivoSlider();
		});
	</script>

<script type="text/javascript">
	$(document).on('click','.btn-analizar_veterinaria', function(){
    let _tipo = $(this).data('tipo');
    let _categoria = $(this).data('categoria');
    window.location.replace('producto.php?tipo='+_tipo+'?categoria='+_categoria);

});
</script>
