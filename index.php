<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<title>Тесла</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/jquery.flipster.min.css" />
</head>
<body>
	<input type="hidden" name="prefix" class="prefix" value="">
	<input type="hidden" name="referer" value="<? echo $_SERVER['HTTP_REFERER'] ?>">
	<input type="hidden" name="ref_url" value="<? echo $_SERVER['QUERY_STRING'] ?>">
	<input type="hidden" class="formname" name="formname" value="">

	<div class="popup_overlay" onClick="popup_out();"></div>
	<div class="popup form" id="thx">
		<div class="popup_h1">Спасибо за оставленную заявку</div>
		<div class="popup_h2">Наш менеджер свяжется с вами в ближайшее время</div>
		<button class="btn" onClick="popup_out();">закрыть</button>
	</div>
	<div class="popup form" id="callback">
		<div class="popup_h1">Заказать обратный звонок</div>
		<div class="popup_h2">
			Оставьте заявку, и наш специалист свяжется<br>
			с вами, чтобы ответить на ваши вопросы.
		</div>
		<form>
			<div class="desc">Введите ваше имя</div>
			<label class="name required">
				<input type="text" name="name" placeholder="Иван Иванов">
			</label><br>
			<div class="desc">Введите ваш телефон</div>
			<label class="phone required">
				<input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7">
			</label>
			<label class="phone required">
				<input type="text" name="phone2" maxlength="6" placeholder="123">
			</label>
			<label class="phone required">
				<input type="text" name="phone3" maxlength="10" placeholder="456-78-90">
			</label><br>
			<input data-name="callback" type="button" class="button noselect btn" value="Заказать звонок">
		</form>
	</div>
	<div class="popup form" id="request">
		<div class="popup_h1">Оставьте заявку</div>
		<div class="popup_h2">
			Оставьте заявку, и наш специалист свяжется<br>
			с вами в ближайшее время.
		</div>
		<form>
			<div class="desc">Введите ваше имя</div>
			<label class="name required">
				<input type="text" name="name" placeholder="Иван Иванов">
			</label><br>
			<div class="desc">Введите ваш телефон</div>
			<label class="phone required">
				<input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7">
			</label>
			<label class="phone required">
				<input type="text" name="phone2" maxlength="6" placeholder="123">
			</label>
			<label class="phone required">
				<input type="text" name="phone3" maxlength="10" placeholder="456-78-90">
			</label><br>
			<div class="desc">Введите ваш e-mail</div>
			<label class="email required">
				<input type="text" name="email" placeholder="ivanov@mail.ru">
			</label><br>
			<input data-name="request" type="button" class="button noselect btn" value="Заказать">
		</form>
	</div>
	<div class="popup form" id="question">
		<div class="popup_h1">Задать вопрос</div>
		<div class="popup_h2">
			Заполните форму,<br>
			и&nbsp;мы&nbsp;обязательно свяжемся с&nbsp;вами!
		</div>
		<form>
			<div class="desc">Введите ваше имя</div>
			<label class="name required">
				<input type="text" name="name" placeholder="Иван Иванов">
			</label><br>
			<div class="desc">Введите ваш телефон</div>
			<label class="phone required">
				<input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7">
			</label>
			<label class="phone required">
				<input type="text" name="phone2" maxlength="6" placeholder="123">
			</label>
			<label class="phone required">
				<input type="text" name="phone3" maxlength="10" placeholder="456-78-90">
			</label><br>
			<div class="desc">Введите ваш e-mail</div>
			<label class="email required">
				<input type="text" name="email" placeholder="ivanov@mail.ru">
			</label><br>
			<div class="desc">Введите ваш вопрос</div>
			<textarea class="ques" name="ques" placeholder="Ваш вопрос"></textarea><br>
			<input data-name="question" type="button" class="button noselect btn" value="Задать вопрос">
		</form>
	</div>

	<div id="page">
		<header class="container">
			<video  class="covervid-video" autoplay="autoplay" loop="loop">
				<source src="mov/video.mp4" type="video/mp4" />
				<source src="mov/video.webm" type='video/webm; codecs="vorbis,vp8"' />
				<source src="mov/video.ogv" type="video/ogg" />
				<source src="mov/video.m4v" type="video/mp4" />
			</video>
			<div class="wrapp">
				<div id="logo" class="left cl">
					<div class="left"></div>
					<p class="left">
						продажа автомобилей<br /> <span>tesla в&nbsp;россии и&nbsp;снг</span>
					</p>
				</div>
				<div class="phone right">
					<p>
						8 (495) <strong>77-77-126</strong>
						<button onclick="popup('callback', '| Заказ звонка', 'Заказать звонок', 'Оставьте заявку<br /> и&nbsp;мы&nbsp;вам обязательно перезвоним', 'Заказать звонок');">
							Заказать звонок
						</button>
					</p>
				</div>
				<section id="hgroup" class="clear">
					<h1>
						<span class="black">Первый и&nbsp;единственный в&nbsp;России</span><br /> 
						<span class="red_span">клуб любителей Tesla</span>
					</h1>
					<h2>
						<span class="black">Автомобили Tesla в&nbsp;наличии и&nbsp;под заказ, клубные привилегии на&nbsp;покупку и&nbsp;обслуживание</span>
					</h2>
				</section>
			</div>
		</header>
		
		<div class="container" id="block1">
			<section class="wrapp">
				<h1>
					Станьте обладателем<br /> электромобиля Tesla<br /> <small>уже сегодня</small>
				</h1>
				<div class="red_border left" id="elem1">
					<h2>
						<strong>100</strong>&nbsp;км/ч<br />за&nbsp;<strong>4</strong>&nbsp;<span>с</span>
					</h2>
					<p>
						Бесшумные 4&nbsp;секунды до&nbsp;сотни впечатляют даже искушённого автовладельца...
					</p>
				</div>
				<figure class="left">
					<img src="img/jpg/ilon.jpg" alt="Ilon" />
				</figure>
				<div class="red_border right" id="elem2">
					<h2>
						Комфорт<br /> <span>техники</span>
					</h2>
					<p>
						Почувствуйте престижность и&nbsp;комфорт техники бизнес-класса с&nbsp;отличной управляемостью спортивных моделей
					</p>
				</div>
				<div class="clear">
					<blockquote>
						&laquo;Мне нравится быть причастным<br /> к&nbsp;вещам, которые изменят мир&raquo;
					</blockquote>
					<address>
						<p id="name">Илон Маск</p>
						<p>
							Основатель и&nbsp;генеральный директор компании Tesla Motors
						</p>
					</address>	
				</div>
				<button onclick="popup('request', '| Запись на тест-драйв', 'Запишитесь на тест-драйв', 'Заполните форму заявки, чтобы записаться на&nbsp;бесплатный тест-драйв автомобиля Tesla', 'Записаться');">
					Записаться на тест-драйв
				</button>
			</section>
		</div><!-- /#block1 -->
		
		<div class="container" id="block2">
			<section class="wrapp">
				<h1>
					Будущее уже наступило...
				</h1>
				<h2>
					Выберите свою модель Tesla
				</h2>
				<ul id="models" class="cl">
					<li class="left">
						<h3 id="car1">Tesla Model<br /> S&nbsp;60&nbsp;кВт</h3>
						<ul class="characteristics">
							<li>
								<span class="medium">Запас хода</span> 350 км
							</li>
							<li>
								<span class="medium">Мощность</span> 302 л.с. 
							</li>
							<li>
								<span class="medium">Разгон</span> 5.9 сек.
							</li>
							<li>
								<span class="medium">Гарантия на&nbsp;батарею:</span><br /> 8&nbsp;лет или 200&nbsp;000&nbsp;км
							</li>
						</ul>
						<p>Цена: от <strong>3 524 000 руб.</strong></p>
						<button onclick="popup('request', '| Условия заказа', '', '', 'Узнать условия заказа');">
							Узнать условия заказа
						</button>
					</li>
					<li class="left">
						<h3 id="car2">Tesla Model<br /> S&nbsp;85&nbsp;кВт</h3>
						<ul class="characteristics">
							<li>
								<span class="medium">Запас хода</span> 450 км
							</li>
							<li>
								<span class="medium">Мощность</span> 362 л.с.
							</li>
							<li>
								<span class="medium">Разгон</span> 5.4 сек.
							</li>
							<li>
								<span class="medium">Гарантия на&nbsp;батарею:</span><br /> 8&nbsp;лет, пробег не&nbsp;ограничен
							</li>
						</ul>
						<p>Цена: от <strong>3 992 000 руб.</strong></p>
						<button onclick="popup('request', '| Условия заказа', 'Выгодные условия заказа Tesla', 'Заполните форму заявки, чтобы рассчитать стоимость приобретения и&nbsp;доставки автомобиля Tesla', 'Узнать');">
							Узнать условия заказа
						</button>
					</li>
					<li class="left">
						<h3 id="car3">Tesla Model<br /> S&nbsp;P85 кВт<br /> <strong>performance</strong></h3>
						<ul class="characteristics">
							<li>
								<span class="medium">Запас хода</span> 450 км
							</li>
							<li>
								<span class="medium">Мощность</span> 416 л.с.
							</li>
							<li>
								<span class="medium">Разгон</span> до 100км/ч 4.2 сек.
							</li>
							<li>
								<span class="medium">Гарантия на&nbsp;батарею:</span><br /> 8&nbsp;лет, пробег не&nbsp;ограничен
							</li>
						</ul>
						<p>Цена: от <strong>4 672 000 руб.</strong></p>
						<button onclick="popup('request', '| Условия заказа', 'Выгодные условия заказа Tesla', 'Заполните форму заявки, чтобы рассчитать стоимость приобретения и&nbsp;доставки автомобиля Tesla', 'Узнать');">
							Узнать условия заказа
						</button>
					</li>
				</ul>
			</section>
		</div><!-- /#block2 -->
		
		<section class="container" id="block3">
			<div id="stripes"></div>
			<div id="view_container">
				<div id="view_roof"></div>
				<div id="view_housing"></div>
				<div id="view_wheels"></div>
			</div>
			<h1>Конфигуратор Tesla</h1>
			<div id="options">
				<div class="detail_pane cl" id="colors">
					<div id="solid" class="cl left">
						<span>Solid</span>
						<ul>
							<li class="left" id="black_col"><a class="active" data-color-name="black" href="#"></a></li>
							<li class="left" id="white_col"><a data-color-name="white" href="#"></a></li>
						</ul>
					</div>
					<hr class="bound left" />
					<div id="metallic" class="cl left">
						<span>Metallic</span>
						<ul>
							<li class="left" id="silver_col"><a data-color-name="silver" href="#"></a></li>
							<li class="left" id="gray_col"><a data-color-name="gray" href="#"></a></li>
							<li class="left" id="blue_col"><a data-color-name="blue" href="#"></a></li>
							<li class="left" id="green_col"><a data-color-name="green" href="#"></a></li>
							<li class="left" id="brown_col"><a data-color-name="brown" href="#"></a></li>
						</ul>
					</div>
					<hr class="bound left" />
					<div id="multi_coat" class="cl left">
						<span>Tesla multi-coat</span>
						<ul>
							<li class="left" id="white2_col"><a data-color-name="white_perl" href="#"></a></li>
							<li class="left" id="red_col"><a data-color-name="red" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="detail_pane cl" id="roofs">
					<div id="solid2" class="cl left">
						<span>Solid roof</span>
						<ul>
							<li class="left" id="solid_roof"><a data-roof-name="solid" class="active" href="#"></a></li>
						</ul>
					</div>
					<hr class="bound left" />
					<div id="glass" class="cl left">
						<span>All glass<br /> panoramic roof</span>
						<ul>
							<li class="left" id="panoramic_roof"><a data-roof-name="panoramic" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="detail_pane cl" id="wheels">
					<div id="basic" class="left">
						<span>19&Prime;</span>
						<ul>
							<li class="left" id="basic_wheel"><a data-wheel-name="basic" class="active" href="#"></a></li>
						</ul>
					</div>
					<hr class="bound left" />
					<div id="cyclone" class="left">
						<span>19&Prime; cyclone</span>
						<ul>
							<li class="left" id="cyclone_wheel"><a data-wheel-name="cyclone" href="#"></a></li>
						</ul>
					</div>
					<hr class="bound left" />
					<div id="turbine" class="left cl">
						<span>21&Prime; turbine</span>
						<ul>
							<li class="left" id="turbine_wheel"><a data-wheel-name="turbine_light" href="#"></a></li>
							<li class="left" id="turbine2_wheel"><a data-wheel-name="turbine_dark" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div id="tray" class="cl">
					<a href="#" class="left" id="color"></a>
					<hr class="divider left" />
					<a href="#" class="left" id="roof"></a>
					<hr class="divider left" />
					<a href="#" class="left" id="wheel"></a>
				</div>
				<div id="dash" class="cl">
					<a href="#" class="left">Цвет</a>
					<hr class="divider left" />
					<a href="#" class="left">Крыша</a>
					<hr class="divider left" />
					<a href="#" class="left">Колёса</a>
				</div>
				<div id="config" class="cl">
					<a href="#" class="left active" data-config-name="usa">Американская конфигурация</a>
					<hr class="divider left" />
					<a href="#" class="left" data-config-name="eur">Европейская конфигурация</a>
				</div>
				<a href="javascript:void(0);" id="black_btn" onclick="popup('request', '| Рассчёт стоимости', 'Дополнительные опции конфигурации Tesla', 'Заполните форму заявки, чтобы узнать о&nbsp;дополнительных опциях конфигурации Tesla', 'Узнать');">
					Узнать дополнительные опции
				</a>
				<button onclick="popup('request', '| Рассчёт стоимости', 'Рассчитайте стоимость', 'Заполните форму заявки, чтобы рассчитать стоимость выбранной конфигурации Tesla', 'Рассчитать');">
					Рассчитать стоимость
				</button>
			</div><!-- /#options -->
		</section><!-- /#block3 -->
		
		<div class="conatiner" id="block4">
			<section class="wrapp">
				<h1>
					Автомобили Tesla<br /> <strong>в&nbsp;наличии в&nbsp;Москве</strong>
				</h1>
				<ul class="cl">
					<li>
						<figure>
							<figcaption>Tesla S 85</figcaption>
							<img src="img/jpg/car4.jpg" alt="car">
						</figure>
					</li>
					<li>
						<figure>
							<figcaption>Tesla S 85 Perfomance</figcaption>
							<img src="img/jpg/car5.jpg" alt="car">
						</figure>
					</li>
					<li>
						<figure>
							<figcaption>Tesla S 85 Perfomance Plus</figcaption>
							<img src="img/jpg/car6.jpg" alt="car">
						</figure>
					</li>
					<li>
						<figure>
							<figcaption>Tesla S 85</figcaption>
							<img src="img/jpg/car7.jpg" alt="car">
						</figure>
					</li>
					<li>
						<figure>
							<figcaption>Tesla S 85 Perfomance</figcaption>
							<img src="img/jpg/car8.jpg" alt="car">
						</figure>
					</li>
					<li>
						<figure>
							<figcaption>Tesla S 85 Perfomance Plus</figcaption>
							<img src="img/jpg/car9.jpg" alt="car">
						</figure>
					</li>
				</ul>
				<button onclick="popup('request', '| Узнать о других авто в наличии', 'Автомобили Tesla в&nbsp;наличии в&nbsp;Москве', 'Заполните форму заявки, чтобы узнать о&nbsp;наличии автомобилей Tesla в&nbsp;Москве', 'Узнать');">
					Узнать о других авто в наличии
				</button>
			</section>
		</div><!-- /#block4 -->
		
		<div id="block5" class="container">
			<div class="wrapp">
				<figure class="left">
					<figcaption>
						<address>
							<p id="name2">Бен Шаффер,</p>
							<p>
								Президент компании Unplugged<br /> Performance
							</p>
						</address>
					</figcaption>
				</figure>
				<section class="left">
					<h1>Тюнинг Tesla</h1>
					<blockquote>
						&laquo;Я&nbsp;член сообщества владельцев суперкаров,<br /> и&nbsp;вижу постоянно, что даже самые дорогие<br /> и&nbsp;клёвые машины можно улучшить, нет предела совершенству...&raquo;
					</blockquote>
					<h2>Узнайте о возможных вариантах тюнинга Tesla</h2>
					<button onclick="popup('request', '| Получить консультацию', 'Варианты тюнинга Tesla', 'Заполните форму заявки, чтобы узнать о&nbsp;возможных вариантах тюнинга Tesla', 'Узнать');">
						Получить консультацию
					</button>
				</section>
			</div>
		</div><!-- /#block5 -->
		
		<div class="container" id="block6" data-stellar-background-ratio="0.5">
			<div id="sec_bg">
				<section class="wrapp">
					<h1>
						Станьте одним из&nbsp;первых обладателей<br /> <strong>новой модели Tesla&nbsp;X</strong>
					</h1>
					<div class="form right">
						<div class="popup_h1">Оставьте заявку,</div>
						<div class="popup_h2">
							чтобы оформить предзаказ новой<br /> модели Tesla X
						</div>
						<form>
							<div class="desc">Введите ваше имя</div>
							<label class="name required">
								<input type="text" name="name" placeholder="Иван Иванов">
							</label><br>
							<div class="desc">Введите ваш телефон</div>
							<label class="phone required">
								<input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7">
							</label>
							<label class="phone required">
								<input type="text" name="phone2" maxlength="6" placeholder="123">
							</label>
							<label class="phone required">
								<input type="text" name="phone3" maxlength="10" placeholder="456-78-90">
							</label><br>
							<div class="desc">Введите ваш e-mail</div>
							<label class="email required">
								<input type="text" name="email" placeholder="ivanov@mail.ru">
							</label><br>
							<input data-name="request" type="button" class="button noselect btn" value="Заказать" onclick="formname('| Заявка на предзаказ');">
						</form>
					</div>
				</section>
			</div>
		</div><!-- /#block6 -->
		
		<div class="container" id="block7">
			<section class="wrapp">
				<h1>
					Вступите в&nbsp;клуб любителей Tesla<br /> <strong>и&nbsp;получите клубную карту в&nbsp;подарок</strong>
				</h1>
				<div class="red_border chest">
					<div id="chest"></div>
					<h2>
						<span class="black">Специальные условия</span><br /> <span class="black">по&nbsp;карте:</span>
					</h2>
					<ul id="terms" class="right cl">
						<li id="one">
							<span class="medium">1&nbsp;год бесплатного</span><br /> техобслуживания
						</li>
						<li id="two">
							<span class="medium">Зарядное устройство</span><br /> в&nbsp;подарок
						</li>
						<li id="three">
							<span class="medium">Лизинг от&nbsp;банков<br />-партнёров:</span> ВЭБ-Лизинг
						</li>
						<li id="four">
							<span class="medium">Бесплатное пользование</span><br /> зарядными станциями
						</li>
						<li id="five">
							<span class="medium">Статус избранного<br /> ценителя Tesla</span>
						</li>
						<li id="six">
							<span class="medium">Бесплатная эвакуация</span><br /> круглосуточно
						</li>
						<li id="seven">
							<span class="medium">Специальные цены</span><br /> и&nbsp;скидки на&nbsp;ремонт<br /> и&nbsp;сервис
						</li>
						<li id="eight">
							<span class="medium">Доступ к&nbsp;системе станций<br /> быстрой подзарядки Tesla</span>&nbsp;&mdash;<br />более 20&nbsp;мест
						</li>
						<li id="nine">
							<span class="medium">Посещение закрытых<br /> мероприятий</span> клуба<br /> для владельцев Tesla
						</li>
						<li id="ten">
							<span class="medium">Самые выгодные условия</span><br /> на&nbsp;страховку автомобилей<br /> по&nbsp;&laquo;Каско&raquo;
						</li>
					</ul>
				</div>
				<button onclick="popup('request', '| Заявка на вступление в клуб', 'Вступите в&nbsp;клуб любителей Tesla', 'Заполните форму заявки, чтобы вступить в&nbsp;клуб любителей Tesla и&nbsp;получить клубную карту', 'Вступить');">
					Вступить в клуб
				</button>
			</section>
		</div><!-- /#block7 -->
		
		<div class="container" id="block8">
			<section class="wrapp">
				<h1>
					<span class="medium">Привилегии<br /><strong>клуба любителей Tesla</strong><br />Выгодные условия заказа и&nbsp;доставки автомобиля</span>
				</h1>
				<ul id="list_top" class="cl">
					<li id="time">
						<h3>Время</h3>
					</li>
					<li id="quality">
						<h3>Качество</h3>
					</li>
					<li id="money">
						<h3>Деньги</h3>
					</li>
				</ul>
				<ul id="list_bottom" class="cl">
					<li id="icon1">
						<h4>
							Доставка<br />из&nbsp;США<br />за&nbsp;3&nbsp;недели
						</h4>
					</li>
					<li id="icon2">
						<h4>
							Доставка<br />самолетом:<br />5-7 рабочих<br />дней
						</h4>
						<p>
							Cамый быстрый способ доставить Tesla S&nbsp;из&nbsp;США
						</p>
					</li>
					<li id="icon3">
						<h4>
							Европейский<br />уровень сервиса
						</h4>
						<p>
							Доставим заказанный автомобиль к&nbsp;дверям вашего дома. Опытный менеджер покажет и&nbsp;расскажет обо всех функциях авто, закачает на&nbsp;ваш телефон приложение Tesla
						</p>
					</li>
					<li id="icon4">
						<h4>
							Экономия<br />таможенного<br />сбора
						</h4>
						<p>
							При заказе напрямую частные лица переплачивают около&nbsp;30% за&nbsp;растамо-<br />живание автомобиля. Такми образом, с&nbsp;нами вы&nbsp;экономите от&nbsp;1&nbsp;000&nbsp;000&nbsp;руб.
						</p>
					</li>
					<li id="icon5">
						<h4>
							Зарядка<br />в&nbsp;подарок
						</h4>
						<p>
							Бесплатная установка зарядного устройства Tesla на&nbsp;вашем объекте на&nbsp;выбор: возле дома, офиса, на&nbsp;автомобильной стоянке
						</p>
					</li>
				</ul>
				<fieldset class="red_border">
					<legend>
						Лизинг и кредит Tesla
					</legend>
					<p>
						Вы&nbsp;можете оформить лизинг на&nbsp;автомобиль Tesla S<br />&nbsp;от&nbsp;нашего банка-партнёра &laquo;ВЭБ-Лизинг&raquo;<br /> на&nbsp;выгодных условиях
					</p>
					<button onclick="popup('request', '| Узнать условия', 'Покупка Tesla в&nbsp;лизинг или кредит', 'Заполните форму заявки, чтобы узнать о&nbsp;специальных условиях кредитования или покупки Tesla в&nbsp;лизинг', 'Узнать');">
						Узнать условия
					</button>
				</fieldset>
			</section>
		</div><!-- /#block8 -->
		
		<div class="container" id="block9" data-stellar-background-ratio="0.5">
			<div id="sec_bg2">
				<section class="wrapp">
					<h1>
						<span class="medium">Trade-in вашего автомобиля<br /><small>в&nbsp;день обращения</small></span>
					</h1>
					<h2>
						Мы&nbsp;примем любой ваш автомобиль к&nbsp;зачёту,<br />вам останется только доплатить разницу
					</h2>
					<div class="form right">
						<div class="popup_h1">Оставьте заявку,</div>
						<div class="popup_h2">
							чтобы рассчитать сумму<br />доплаты за&nbsp;автомобиль Tesla&nbsp;S
						</div>
						<form>
							<div class="desc">Введите ваше имя</div>
							<label class="name required">
								<input type="text" name="name" placeholder="Иван Иванов">
							</label><br>
							<div class="desc">Введите ваш телефон</div>
							<label class="phone required">
								<input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7">
							</label>
							<label class="phone required">
								<input type="text" name="phone2" maxlength="6" placeholder="123">
							</label>
							<label class="phone required">
								<input type="text" name="phone3" maxlength="10" placeholder="456-78-90">
							</label><br>
							<div class="desc">Введите ваш e-mail</div>
							<label class="email required">
								<input type="text" name="email" placeholder="ivanov@mail.ru">
							</label><br>
							<input data-name="request" type="button" class="button noselect btn" value="Рассчитать" onclick="formname('| Рассчёт суммы доплаты');">
						</form>
					</div>
				</section>
			</div>
		</div><!-- /#block9 -->
		
		<div class="container" id="block10">
			<section class="wrapp">
				<h1>
					Первый и&nbsp;единственный<br /><span class="medium">showroom Tesla в&nbsp;России</span>
				</h1>
				<div class="flipster">
					<div id="prev" class="arr"></div>
					<ul>
						<li><img src="img/jpg/photo1.jpg" alt="photo"></li>
						<li><img src="img/jpg/photo2.jpg" alt="photo"></li>
						<li><img src="img/jpg/photo3.jpg" alt="photo"></li>
					</ul>
					<div id="next" class="arr"></div>
				</div>
			</section>
		</div><!-- /#block10 -->
		
		<div class="container" id="block11" data-stellar-background-ratio="0.5">
			<div id="sec_bg3">
				<section class="wrapp">
					<h1>
						<span class="red_span">Сервис, техобслуживание и ремонт</span>
					</h1>
					<h2>
						На&nbsp;сегодняшний день только мы&nbsp;располагаем квалифицированным персоналом в&nbsp;РФ<br />для технического обслуживания и&nbsp;ремонта автомобилей Tesla
					</h2>
					<div class="form right">
						<div class="popup_h1">в подарок 1 год<br />техобслуживания</div>
						<div class="popup_h2">
							Запишитесь на&nbsp;тест-драйв<br />и&nbsp;получите 1&nbsp;год бесплатного<br />техобслуживания Tesla
						</div>
						<form>
							<div class="desc">Введите ваше имя</div>
							<label class="name required">
								<input type="text" name="name" placeholder="Иван Иванов">
							</label><br>
							<div class="desc">Введите ваш телефон</div>
							<label class="phone required">
								<input type="text" name="phone1" maxlength="5" placeholder="+7" value="+7">
							</label>
							<label class="phone required">
								<input type="text" name="phone2" maxlength="6" placeholder="123">
							</label>
							<label class="phone required">
								<input type="text" name="phone3" maxlength="10" placeholder="456-78-90">
							</label><br>
							<div class="desc">Введите ваш e-mail</div>
							<label class="email required">
								<input type="text" name="email" placeholder="ivanov@mail.ru">
							</label><br>
							<input data-name="request" type="button" class="button noselect btn" value="Записаться" onclick="formname('| Запись на тест-драйв');">
						</form>
					</div>
					<h3 class="right"><span class="black">Оригинальные запчасти в наличии</span></h3>
				</section>
			</div>
		</div><!-- /#block11 -->
		
		<div class="container" id="block12">
			<section class="wrapp">
				<h1>
					<span class="medium">Почему Tesla признан<br /><strong>лучшим автомобилем года?</strong></span>
				</h1>
				<ul id="logos" class="cl">
					<li id="logo1"></li>
					<li id="logo2"></li>
					<li id="logo3"></li>
					<li id="logo4"></li>
					<li id="logo5" class="clear"></li>
					<li id="logo6"></li>
					<li id="logo7"></li>
					<li id="logo8"></li>
				</ul>
				<div id="winner" class="cl font">
					<figure class="left">
						<img src="img/jpg/stars.jpg" alt="Winner">
						<figcaption>
							<h2 id="eco">
								Самый экологичный и безопасный
							</h2>
							<p>
								Электромобиль не&nbsp;загрязняет окружающую<br /> среду и&nbsp;не&nbsp;нуждается в&nbsp;дорожающем каждый<br /> день бензине
							</p>
						</figcaption>
					</figure>
					<figure class="left">
						<img src="img/jpg/carofyear.jpg" alt="Winner">
						<figcaption>
							<h2>
								Автомобиль года<br /> по&nbsp;версии<br /> Motor Trend
							</h2>
						</figcaption>
					</figure>
				</div>
				<div class="cl" id="benefits">
					<figure class="left">
						<img src="img/jpg/car10.jpg" alt="car">
						<figcaption>
							<h2>
								Космический дизайн
							</h2>
							<p>
								Благодаря особой покраске и&nbsp;полировке автомобиль сияет как зеркало. Шикарно сочетающиеся 19-дюймовые литые диски предают еще больше элегантности и&nbsp;представительности
							</p>
						</figcaption>
					</figure>
					<figure class="left">
						<img src="img/jpg/car11.jpg" alt="car">
						<figcaption>
							<h2>
								Компьютер на колёсах
							</h2>
							<p>
								Вместо привычных приборов на&nbsp;панели, здесь ЖК-монитор, на&nbsp;котором все нужные функциональные кнопки и&nbsp;информация о&nbsp;рабочем состоянии автомобиля. По&nbsp;размеру&nbsp;&mdash; это примерно как 4&nbsp;объединённых iPad. Экран можно настроить под себя, подключить Google Maps для навигации, а&nbsp;также настроить управление телефоном и&nbsp;почтой.
							</p>
						</figcaption>
					</figure>
					<figure class="left">
						<img src="img/jpg/car12.jpg" alt="car">
						<figcaption>
							<h2>
								Удобство подзарядки
							</h2>
							<p>
								Зарядка производится от&nbsp;простой розетки или на&nbsp;специализированной станции. В&nbsp;среднем Tesla S&nbsp;заряжается около 4&nbsp;часов. Ставим на&nbsp;зарядку, как айфон.
							</p>
						</figcaption>
					</figure>
				</div>
				<div id="envelope">
					<h3>
						<span class="medium">Узнайте обо всех<br /> инновационных технологиях,</span> применяемых в&nbsp;автомобилях<br /> Tesla
					</h3>
					<button onclick="popup('request', '| Узнать обо всех технологиях', 'Инновационные технологии, применяемые в&nbsp;автомобилях Tesla', 'Заполните форму заявки, чтобы узнать обо всех инновационных технологиях, применяемых в&nbsp;Tesla, и&nbsp;лично протестировать автомобиль', 'Узнать');">
						Узнать
					</button>
				</div>
			</section>
		</div><!-- /#block12 -->
		
		<div class="container" id="block13">
			<section class="wrapp">
				<h1>Электромобиль Tesla S в аренду</h1>
				<h2 class="left">
					Не&nbsp;готовы<br />выложить 100&nbsp;000&nbsp;$<br />за&nbsp;Tesla Model&nbsp;S?<br />
					<small>Теперь вы&nbsp;можете арендовать автомобиль<br />на&nbsp;сутки.</small>
				</h2>
				<ul class="right">
					<li>
						Для желающих совершить путешествие<br />на&nbsp;электромобиле будущего &#8470;&nbsp;1
					</li>
					<li>
						Для СМИ
					</li>
					<li>
						Для съёмок кино и клипов
					</li>
					<li>
						Для торжества: свадьба, банкет,<br />корпоративная вечеринка
					</li>
				</ul>
				<button class="clear" onclick="popup('request', '| Узнать стоимость аренды', 'Узнайте стоимость аренды Tesla', 'Заполните форму заявки, чтобы узнать стоимость аренда автомобиля Tesla&nbsp;S', 'Узнать стоимость');">
					Узнать стоимость аренды
				</button>
			</section>
		</div><!-- /#block13 -->
		
		<div class="container" id="block14">
			<section class="wrapp">
				<h1>
					Остались вопросы?
				</h1>
				<a href="javascript:void(0);" onclick="popup('question', '| Вопрос', '', '', 'Задайте вопрос')">Задайте их нашему менеджеру</a>
			</section>
		</div><!-- /#block14 -->
		
		<div class="container" id="block15">
			<section class="wrapp" id="contacts">
				<h1>Контакты</h1>
				<h2>Москва, Ленинградское шоссе, д.47&nbsp;А</h2>
			</section>
			<div id="map"></div>
		</div><!-- /#block15 -->
		
		<footer>
			<div class="wrapp">
				<p class="phone left">
					8 (495) <strong>77-77-126</strong><br />
					<a href="javascript:void(0);" onclick="popup('callback', '| Заказ звонка', 'Заказать звонок', 'Оставьте заявку<br /> и&nbsp;мы&nbsp;вам обязательно перезвоним', 'Заказать звонок');">
						Заказать звонок
					</a>
				</p>
				<p id="copyright" class="left">
					Пользовательское соглашение
				</p>
				<p id="mokselle" class="right">
					Разработка сайта
					<a href="http://lp4lp.ru/" target="_blank"></a>
				</p>
			</div>
		</footer>
	</div><!-- /#page -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/validator.js"></script>
	<script type="text/javascript" src="js/jquery.flipster.min.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
</body>
</html>