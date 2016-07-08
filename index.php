<?php include_once 'core/core.php';?>
<?php $diseno->SetTitulo('Inicio :: Bloque Marcial'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $diseno->GetTitulo();?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<!--header-->
	<?php include_once 'header.php'; ?>
	<!--/header-->

	<!--slider-->
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Z</span>apatillas</h1>
									<h2>Poder y comodidad</h2>
									<p>Innovador material anti transpirante.
										Asegura que a temperaturas elevadas los pies permanezcan fríos. </p>
									<button type="button" class="btn btn-default get">Comprar ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/Zapatillas.png" class="girl img-responsive" alt="Zapatillas convencional" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>P</span>aletas dobles</h1>
									<h2>Se el mejor</h2>
									<p>Efectos de sonido contra golpe, blanco fácil de agarrar, seguro y flexible.
									Polipiel de alta resistencia acolchado de alto grado de la PU de acero EVA.</p>
									<button type="button" class="btn btn-default get">Comprar ahora</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/Paletas.png" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/Precios.png"  class="pricing" alt="" /> -->
								</div>
							</div>

							<!-- <div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div> -->

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<!-- Filtros -->
				<?php include_once 'filtros.php';?>
				<!-- /Filtros -->

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Artículos destacados</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.png" alt="" />
											<h2>$ 9.000</h2>
											<p>Paleta doble</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$ 9.000</h2>
												<p>Paleta doble</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a lista de deseos</a></li>
										<li><a href="detalle.php?IDPRODUCTO=1"><i class="fa fa-eye"></i>Ver detalle</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product2.png" alt="" />
										<h2>$ 13.000</h2>
										<p>Zapatillas clasicas</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$13.000</h2>
											<p>Zapatillas clasicas</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a lista de deseos</a></li>
										<li><a href="detalle.php?IDPRODUCTO=2"><i class="fa fa-eye"></i>Ver detalle</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product3.png" alt="" />
										<h2>$ 14.000</h2>
										<p>Dobok adulto acanalado</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$ 14.000</h2>
											<p>Dobok adulto acanalado</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a lista de deseos</a></li>
										<li><a href="detalle.php?IDPRODUCTO=3"><i class="fa fa-eye"></i>Ver detalle</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product4.png" alt="" />
										<h2>$ 10.000</h2>
										<p>Escudo de entrenamiento</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$ 10.000</h2>
											<p>Escudo de entrenamiento</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a lista de deseos</a></li>
										<li><a href="detalle.php?IDPRODUCTO=4"><i class="fa fa-eye"></i>Ver detalle</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product5.png" alt="" />
										<h2>$ 14.000</h2>
										<p>Tatami</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$ 14.000</h2>
											<p>Tatami</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a lista de deseos</a></li>
										<li><a href="detalle.php?IDPRODUCTO=5"><i class="fa fa-eye"></i>Ver detalle</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product6.png" alt="" />
										<h2>$ 16.000</h2>
										<p>Petos WTF</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$ 16.000</h2>
											<p>Petos WTF</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Agregar a lista de deseos</a></li>
										<li><a href="detalle.php?IDPRODUCTO=6"><i class="fa fa-eye"></i>Ver detalle</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div><!--features_items-->

					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#economicaccesorios" data-toggle="tab">Accesorios</a></li>
								<li><a href="#economicindumentaria" data-toggle="tab">Indumentaria</a></li>
							</ul>
						</div>
						<div class="tab-content">

							<div class="tab-pane fade active in" id="economicaccesorios" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.png" alt="" />
												<h2>$ 8.000</h2>
												<p>Antebracera linea economica</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.png" alt="" />
												<h2>$ 1.500</h2>
												<p>Bucales linea economica</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.png" alt="" />
												<h2>$ 8.000</h2>
												<p>Canillera linea economica</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="economicindumentaria" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.png" alt="" />
												<h2>$ 9.000</h2>
												<p>Cabezales linea economica</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
											</div>

										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery5.png" alt="" />
												<h2>$ 11.000</h2>
												<p>Petos linea economica</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carro</a>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
					</div><!--/category-tab-->

					<?php
						include 'recomendados.php';
					?>

				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php include_once 'footer.php';?>
	<!--/Footer-->



    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
	<script type="text/javascript" src="js/price-range.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
	    $(".productPriceWrapRight a img").click(function() {
			var productIDValSplitter 	= (this.id).split("_");
			var productIDVal 			= productIDValSplitter[1];

			var productX 		= $("#productImageWrapID_" + productIDVal).offset().left;
			var productY 		= $("#productImageWrapID_" + productIDVal).offset().top;

			if( $("#productID_" + productIDVal).length > 0){
				var basketX 		= $("#productID_" + productIDVal).offset().left;
				var basketY 		= $("#productID_" + productIDVal).offset().top;
			} else {
				var basketX 		= $("#basketTitleWrap").offset().left;
				var basketY 		= $("#basketTitleWrap").offset().top;
			}

			var gotoX 			= basketX - productX;
			var gotoY 			= basketY - productY;

			var newImageWidth 	= $("#productImageWrapID_" + productIDVal).width() / 3;
			var newImageHeight	= $("#productImageWrapID_" + productIDVal).height() / 3;

			$("#productImageWrapID_" + productIDVal + " img")
			.clone()
			.prependTo("#productImageWrapID_" + productIDVal)
			.css({'position' : 'absolute'})
			.animate({opacity: 0.4}, 100 )
			.animate({opacity: 0.1, marginLeft: gotoX, marginTop: gotoY, width: newImageWidth, height: newImageHeight}, 1200, function() {
				$("#notificationsLoader").html('<img src="images/loader.gif">');
				$.ajax({
					type: "POST",
					url: "inc/functions.php",
					data: { productID: productIDVal, action: "addToBasket"},
					success: function(theResponse) {
						if( $("#productID_" + productIDVal).length > 0){
							$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
							$("#productID_" + productIDVal).before(theResponse).remove();
							$("#productID_" + productIDVal).animate({ opacity: 0 }, 500);
							$("#productID_" + productIDVal).animate({ opacity: 1 }, 500);
							$("#notificationsLoader").empty();

						} else {
							$("#basketItemsWrap li:first").before(theResponse);
							$("#basketItemsWrap li:first").hide();
							$("#basketItemsWrap li:first").show("slow");
							$("#notificationsLoader").empty();
						}

					}
				});

			});
		});
	});
    </script>
</body>
</html>