<?php
	if (!empty($_POST)) {
		$to      = '2373727@mail.ru';
		$subject = 'Заявка на обратный звонок';
		$message = 'Имя: '.$_POST['name'].' . Number: '.$_POST['phone'].' . E-Mail: '.$_POST['email'];
		$headers = 'From: press@daktrans.com' . "\r\n" .
			'Reply-To: press@daktrans.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	} 
?>
<html>
<head>
	<title>ООО "Дак-Транс"</title>
	<link rel="icon" href="666.ico" type="image/x-icon">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="lightSlider/js/jquery.lightSlider.js"></script> 
	<link rel="stylesheet"  href="lightSlider/css/lightSlider.css"/>
	<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
</head>
<body>
	<div class="wrapper-header">
		<div class="header">
			<div class="logo"></div>
			<div class="call">
				<p class="number">
					Телефоны для консультации
				</p>
				<p class="number_phone">
					+38(050)4571832
				</p>
				<a href="#modal_call" class="coll_but" style='display: block;'><div ></div></a>
			</div>
		</div>
	</div>
	<div class="modal_call" id='modal_call' style='display: none;'>
		<form id='form_button' method='post'>
			<input type='text' name='name' class="input_madal" placeholder='ФИО'>
			<input type='text' name='phone' class="input_madal" placeholder='Номер телефона'>
			<input type='text' name='email' class="input_madal" placeholder='E-Mail'>
			<input type="submit" class='buton_submit' value='Заказать звонок'>
			<!-- <a class="btn btn-calculate" href="#">Рассчитать</a> -->
		</form>
	</div>
	<div class="slider">
		<ul id="slider" class="slider">
			<li class='slider daks'>
			</li>
			<li class='slider dak1'>
			</li>
			<li class='slider dak2'>
			</li>
			<li class='slider dak3'>
			</li>
		</ul>
	</div>
	<div class="wrpaer_block_hz">
		<div class="wrapper_container_1">
			<div class="info_company">
				<div class="image_company"></div>
			</div>
			<div class="info_company_text">
				Компания основана в 1996 году и с тех пор уверенно занимает свои позиции на рынке грузоперевозок.
				На сегодняшний день ООО “DAK-TRANS” один из ведущих перевозчиков в центральном регионе Украины. Этому способствует широкий выбор перевозимых грузов и многолетний опыт компании.
			</div>
		</div>
		<div class="wrapper_container_2">
			<div class="info_company_2">
				<div class="image_company_2"></div>
			</div>
			<div class="info_company_text_2">
				Мы предлогаем полный комплекс качественных транспортно-логистических решений для доставки грузов внутри Украины, а так же за её пределами. 
				Компания экспедирует грузы таких типов как: стандартнрые, негабаритные, сборные грузы, контейнерные и опасные грузы по типу ADR.
			</div>
		</div>
		<div class="wrapper_container_3">
			<div class="info_company_3">
				<div class="image_company_3"></div>
			</div>
			<div class="info_company_text_3">
					Многолетний опыт компании позволяет гарантировать качественную доставку в срок, а главное целостность и сохранность груза. Вы можете полностью положиться на нас!
					Компания “DAK-TRANS” признаный эксперт на рынке транспортно-логистических услуг.
			</div>
		</div>
	</div>
	<div class="wrapper_image"></div>
	<div class="wrapper_infoblock">
		
		<div class="container_road">
			<div class="header_road">
				<div class="center_width">
					Расчитать растояние
				</div>
			</div>
			<div class="down_road">
				<input type="text" class="input_option" placeholder="Откуда" id="from">
				<div class="img_input"></div>
				<input type="text" class="input_option2" placeholder="Куда" id="to">
				<div class="img_input"></div>
				<input type="text" class="input_option3" placeholder="Расстояние" id="result">
			</div>
			<a class="btn btn-calculate" href="#">Рассчитать</a>
			<!-- <div class="button_calculate"></div> -->
		</div>
		<div class="coments_block">
			<div class="header_coments_block">
				<div class="comment_text_header">
					Отзывы наших клиентов
				</div>
				<div class="coment_men">
					<div class="sdfgerger">
						<img src="images/vasya.png" class='border_img' alt="">
					</div>
					<div class="name_meen">
						Василий Владимирович
					</div>
					<div class="addres_contact">
						Украина, г. Киев
					</div>
					<div class="text_balda">
						Работаю с DAK-TRANS около семи лет. Никаких проблем не возникало. Диспетчеры всегда на связи. 
					</div>
				</div>
				<div class="coment_men">
					<div class="sdfgerger">
						<img src="images/marishka.png" class='border_img' alt="">
					</div>
					<div class="name_meen">
						Елена Александровна
					</div>
					<div class="addres_contact">
						Россия, г. Москва
					</div>
					<div class="text_balda">
						Работала с многими логистическими компаниями и посредниками. В 2010 году впервые обратилась в DAK-TRANS, с тех пор работаем на постоянной основе
					</div>
				</div>
				<div class="coment_men">
					<div class="sdfgerger">
						<img src="images/muden.png" class='border_img' alt="">
					</div>
					<div class="name_meen">
						Дмитрий Сергеевич
					</div>
					<div class="addres_contact">
						Россия, г.Белгород
					</div>
					<div class="text_balda">
						Директора знаю лично, очень ответственный человек. Работаем в этой сфере ещё с конца 90-х. Ни разу  не подвел.
					</div>
				</div>
			</div>
		</div>
		<div class="contacts">
			<div class="header_contacts height">
				<div class="comment_text_header white height">
					Контактная информация
				</div>
				<div class="footer_bottom">
					<div class="footer_bottom1" id="footer_bottom_margin"><span>Мы находимся:</span></br>ул. Автолюбителей 3д</br></div>
					<div class="footer_bottom3" id="footer_bottom_margin"><span>Skype:</span></br>dak-trans2</div>
					<div class="footer_bottom4" id="footer_bottom_margin"><span>Email:</span></br>daktrans@mail.ru</div>
				</div>
				<div class="footer_bottom" style='margin-top: 26px;'>
					<div class="footer_bottom1" id="footer_bottom_margin"><span>Контактные номера:</span></br>Сергей (директор): +38(050)2373727</div>
					<div class="footer_bottom3" id="footer_bottom_margin"><span></span></br>Василий (диспетчер): +38(050)4571832</div>
					<div class="footer_bottom4" id="footer_bottom_margin"><span></span></br>Александр (диспетчер): +38(050)6614637</div>
				</div>
			</div>
		</div>
		<div class="map_wrapper">
			<div id="map2" style='width: 1280px; height: 400px;'></div>
		</div>
		<div class="daktrqans">
			2014 - 2015 Транспортная компания «ДАК-ТРАНС»
		</div>

	</div>
	<div id="map" style="display: none;"></div>
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			ymaps.ready(function () {
				var myMap = new ymaps.Map("map2", {
					center: [48.490617, 32.222450],
					zoom: 16
				});

				 myGeoObject = new ymaps.GeoObject({
				// Описание геометрии.
				geometry: {
					type: "Point",
					coordinates: [48.490617, 32.222450]
				},
				// Свойства.
				properties: {
					// Контент метки.
					// iconContent: 'Я тащусь',
					hintContent: 'DAK-TRANS'
				}
				}, {
				// Опции.
				// Иконка метки будет растягиваться под размер ее содержимого.
				preset: 'islands#blackStretchyIcon',
				// Метку можно перемещать.
				draggable: false
				});

				myMap.geoObjects.add(myGeoObject);
			});

			ymaps.ready(init);
		});

		function init() {
			var myMap = new ymaps.Map("map", {
				center: [48.490617, 32.222450],
				zoom: 18
			});


			$(document).on('click', '.btn-calculate', function(event) {
				event.preventDefault();

				var from 	= $('#from').val(),
					to 		= $('#to').val(),
					result 	= $('#result');
				if (from && to) {
					$('#from, #to').removeClass('errors');
					ymaps.route([
						from,
						to
					]).then(function (route) {
						myMap.geoObjects.add(route);

						var moveList = 0,
							way,
							segments;
						for (var i = 0; i < route.getPaths().getLength(); i++) {
							way = route.getPaths().get(i);
							segments = way.getSegments();
							for (var j = 0; j < segments.length; j++) {
								moveList = moveList + segments[j].getLength();
							}
						}
						var distance = Math.ceil(moveList/1000);
						result.val(distance + ' км');
					}, function (error) {
						$('#from, #to').addClass('errors');
						$('#from, #to').val('');
						result.val('Неверный адрес');
					});
				} else {
					$('#from, #to').addClass('errors');
					result.val('Неверный адрес');
				}
			});
		}
		$(document).ready(function() {
			$(".coll_but").fancybox();
		});
		$(document).ready(function() {
			$("#slider").lightSlider({
				loop:true,
				keyPress:true,
				item: 1,
				auto:true,
				speed: 1500,
				pause: 3500
			});
		});
	</script>	
</body>
</html>