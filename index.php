<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Cache-control" content="public" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta property="og:image" content="./images/nako-logo-n.png" />
		<meta
			property="og:description"
			content="Сайт танцевальной студии Nako"
		/>
		<meta property="og:url" content="https://dancestudionako.ru" />
		<meta property="og:title" content="Dance Studio Nako" />

		<link rel="icon" href="./favicon.ico" size="120x120" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600&display=swap"
			rel="stylesheet"
		/>
		<script
			src="https://kit.fontawesome.com/c2be873b9d.js"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="./css/style.css?v=1.3" />
		<title>Танцы в Омске - Nako</title>
		<meta
			name="description"
			content="Танцевальная студия Nako - это современные стили и направления, качественные преподаватели и суперпрокач в любое время года"
		/>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
			(function (m, e, t, r, i, k, a) {
				m[i] =
					m[i] ||
					function () {
						(m[i].a = m[i].a || []).push(arguments);
					};
				m[i].l = 1 * new Date();
				(k = e.createElement(t)),
					(a = e.getElementsByTagName(t)[0]),
					(k.async = 1),
					(k.src = r),
					a.parentNode.insertBefore(k, a);
			})(
				window,
				document,
				'script',
				'https://mc.yandex.ru/metrika/tag.js',
				'ym'
			);

			ym(86566607, 'init', {
				clickmap: true,
				trackLinks: true,
				accurateTrackBounce: true,
				webvisor: true,
			});
		</script>
		<noscript
			><div>
				<img
					src="https://mc.yandex.ru/watch/86566607"
					style="position: absolute; left: -9999px"
					alt=""
				/></div
		></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
	<body>
		<div class="first-wrapper">
			<video
				loop
				muted
				autoplay
				preload="auto"
				poster="./images/first-screen-load-image.jpg"
				class="first-wrapper__video"
			>
				<source src="/video/bg-reduced.mp4" type="video/mp4" />
			</video>
			<header class="header">
				<div class="header__container">
					<div class="header__logo">
						<img
							src="./images/nako-logo.png"
							alt="Логотип студии"
						/>
					</div>
					<div class="header__icon"><span></span></div>
					<div class="header__nav">
						<ul class="header__nav-links">
							<li>
								<a class="header__nav-item" href="#first-screen"
									>ГЛАВНАЯ</a
								>
							</li>
							<li>
								<a class="header__nav-item" href="#info"
									>СТИЛИ</a
								>
							</li>
							<li>
								<a class="header__nav-item" href="#info"
									>ПЕДАГОГИ</a
								>
							</li>
							<li>
								<a class="header__nav-item" href="#price"
									>ЦЕНЫ</a
								>
							</li>
							<li>
								<a class="header__nav-item" href="#schedule"
									>РАСПИСАНИЕ</a
								>
							</li>
							<li>
								<a class="header__nav-item" href="#contacts"
									>КОНТАКТЫ</a
								>
							</li>
							<li>
								<a
									class="header__nav-item header-btn"
									href="#form"
									>ЗАПИСАТЬСЯ</a
								>
							</li>
						</ul>
						<div class="header__nav__social">
							<a
								class="contacts__info-content__social-item"
								href="https://www.instagram.com/dancestudionako/"
								><i class="fab fa-instagram"></i
							></a>
							<a
								class="contacts__info-content__social-item"
								href="https://vk.com/nakodancefamily/"
								><i class="fab fa-vk"></i
							></a>
						</div>
					</div>
					<div class="header__nav-btn">
						<a class="header__nav-item header-btn" href="#form"
							>ЗАПИСАТЬСЯ</a
						>
					</div>
				</div>
			</header>
			<section id="first-screen">
				<div class="first-screen__content">
					<h1 class="first-screen__head">
						Танцевальная студия в Омске
					</h1>
					<p class="first-screen__text">
						Выбирай направление для себя и танцуй вместе с нами
					</p>
					<div class="first-screen__buttons">
						<a
							class="first-screen__buttons-item reg-btn"
							href="#form"
							>Записаться</a
						>
					</div>
					<div class="first-screen__social">
						<a
							class="first-screen__social-item"
							href="https://www.instagram.com/dancestudionako/"
							><i class="fab fa-instagram"></i
						></a>
						<a
							class="first-screen__social-item"
							href="https://vk.com/nakodancefamily/"
							><i class="fab fa-vk"></i
						></a>
					</div>
				</div>
			</section>
		</div>
		<section id="about">
			<div class="about">
				<ul class="about-list">
					<li class="about-item">
						<i class="fas fa-user about-item__icon"></i>
						<p class="about-item__text">
							Постоянное разностороннее развитие
						</p>
					</li>
					<li class="about-item">
						<i class="fas fa-map-marked-alt about-item__icon"></i>
						<p class="about-item__text">
							3 студии в разных частях города
						</p>
					</li>
					<li class="about-item">
						<i class="fas fa-globe-americas about-item__icon"></i>
						<p class="about-item__text">
							Организация мероприятий и съёмки видео
						</p>
					</li>
					<li class="about-item">
						<i class="far fa-heart about-item__icon"></i>
						<p class="about-item__text">
							Танцевальная семья и новые знакомства
						</p>
					</li>
				</ul>
			</div>
		</section>
		<section id="info">
			<h2 class="info__head">Стили и Педагоги</h2>
			<p class="info__text">
				Здесь Вы можете посмотреть информацию о стилях и педагогах по
				всем нашим студиям.
			</p>
			<p class="info__text">
				Нажмите на стиль или педагога для дополнительной информации.
			</p>
			<div class="info__tabs">
				<div class="info__tabs__nav">
					<a class="info__tabs__nav-item _active">Стили</a>
					<a class="info__tabs__nav-item">Педагоги</a>
				</div>
				<div class="info__tabs__body">
					<div
						class="info__tabs__body-item info__tab__styles _active"
					>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								HIP-HOP
							</h3>
							<p class="info__tab__styles-item__text">
								5-7|6-8|7-12|12-15 лет
							</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											HIP-HOP
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Взрывная энергетика, стиль и
											непередаваемая атмосфера - всё это
											можно сказать про данное
											направление, которое подойдёт для
											танцоров с любым уровнем подготовки
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											5-7|6-8|7-12|12-15 лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Степанца 10/2 | 9-я Ленинская, 5 |
											6-я Линия, 97
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Костя Квашнин, Егор Слизков, Вика
											Черноморова, Миша Малышев, Катя
											Хопрянинова, Полина Ледовских,
											Кристина Парыгина, Сабина Боктикова,
											Анастасия Каменова
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								DANCEHALL
							</h3>
							<p class="info__tab__styles-item__text">
								7-11|12+|9-13|14+ лет
							</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											DANCEHALL
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Dancehall - яркое направление родом
											из Ямайки, которое связало в себе
											множество танцевальных стилей и
											техник
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											7-11|12+|9-13|14+ лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Степанца 10/2 | 9-я Ленинская, 5 |
											6-я Линия, 97
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Даша Игнатова, Рената Аскарова,
											Элина Нидерквелль
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">CHOREO</h3>
							<p class="info__tab__styles-item__text">
								12-15|14+ лет
							</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											CHOREO
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Авторские хореографии,
											разностороннее развитие и
											невороятные эмоции на каждой
											тренировке
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											12-15|14+ лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Степанца 10/2 | 9-я Ленинская, 5
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Миша Малышев, Никита Котомцев,
											Анастасия Зингер
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								РИТМИКА
							</h3>
							<p class="info__tab__styles-item__text">3-5 лет</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											РИТМИКА
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Направление подойдёт для ребят,
											которые в столь раннем возрасте
											горят желанием танцевать
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											3-5 лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Степанца 10/2 | 9-я Ленинская, 5 |
											6-я Линия, 97
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Алина Ярощук, Яна Заборовская,
											Кристина Парыгина, Вероника Петрова
										</p>
									</div>
								</div>
							</div>
						</div>

						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								CHOREO GIRLS
							</h3>
							<p class="info__tab__styles-item__text">14+ лет</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											CHOREO GIRLS
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Изучение женственных хореографий для
											начинающих и продолжающих танцоров
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											14+ лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											6-я Линия, 97
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Ольга Герцева
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								SHUFFLE
							</h3>
							<p class="info__tab__styles-item__text">
								6+|8+|16+ лет
							</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											SHUFFLE
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Современный стиль танцев под
											разнообразные стили электронной
											музыки, основанный на технике
											движения ногами
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											6+|8+|16+ лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Степанца 10/2 | 9-я Ленинская, 5 |
											6-я Линия, 97
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Алёна Карабанова, Женя Локтев
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								ELECTRO
							</h3>
							<p class="info__tab__styles-item__text">10+ лет</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											ELECTRO
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Стиль Electro — это активный баунс
											телом, большая скорость и высокая
											амплитуда движений
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											10+ лет
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											9-я Ленинская, 5
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Стас Плотников
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__styles-item">
							<h3 class="info__tab__styles-item__head">
								PARENTS
							</h3>
							<p class="info__tab__styles-item__text">
								для родителей и взрослых
							</p>
						</a>
						<div class="modal-styles">
							<div class="modal-content-styles">
								<span class="close-styles">&times;</span>
								<div class="modal-styles__block">
									<div class="modal-styles__block-info">
										<h4
											class="
												modal-styles__block-info__name
											"
										>
											PARENTS
										</h4>
										<p
											class="
												modal-styles__block-info__desc
											"
										>
											Кто сказал, что танцы только для
											молодых? Если вы уже взрослый, но
											очень хотите начать танцевать, то
											это направление идеально для вас
											подходит
										</p>
									</div>
									<div class="modal-styles__block-charts">
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Возрастные категории:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											для родителей и взрослых
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные филиалы:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Степанца 10/2 | 9-я Ленинская, 5
										</p>
										<h4
											class="
												modal-styles__block-charts__item-head
											"
										>
											Доступные преподаватели:
										</h4>
										<p
											class="
												modal-styles__block-charts__item-text
											"
										>
											Егор Слизков, Миша Малышев
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Copy new style here -->
					</div>
					<div class="info__tab__teachers info__tabs__body-item">
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/kvashnin-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Костя Квашнин
							</h3>
							<p class="info__tab__teachers-item__group">
								Директор студии | Bootlace Crew | Hip-Hop 12-15
								лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/kvashnin-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Костя Квашнин
										</h4>
										<a
											href="https://www.instagram.com/kvashnink/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											kvashnink
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Bootlace Crew</p>
												<p>ПН/СР/ПТ 19:00-20:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 12-15 лет</p>
												<p>ВТ/ЧТ/СБ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											Директор танцевальной студии NAKO.
											Организатор Best Champ Omsk, Art
											Story и других мероприятий в Омске
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											21 год
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											15 лет
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/malyshev-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Миша Малышев
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 8-12 лет | Choreo 14+ | Родители
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/malyshev-f.jpg"
											alt=""
										/>
									</div>

									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Миша Малышев
										</h4>
										<a
											href="https://www.instagram.com/malyshev_mikhail/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											malyshev_mikhail
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 8-12 лет</p>
												<p>ВТ/ЧТ/СБ 19:00-20:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Choreo 14+</p>
												<p>ВТ/ЧТ/СБ 20:00-21:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Родители</p>
												<p>ПН/СР/ПТ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											12 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											3 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Jalen Tyre, Dom Lashawn, Jason
											Rodelo, Baiba Klints, Franklin Yu,
											Bru Vidal, Greg Chapkis, Даян,
											Кирилл Зуб, Decki, Максим Bon, Женя
											Baybik, Алексей Мечетный, Agness,
											Michelle Beats, Кирилл Цыганов,
											Вадим Whip-head, Марк Куклин, Dam’
											en, Алексей Арапов и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в BEST CHAMP OMSK, Art
											story, Танцы Улиц, World of dance,
											Жажда Танца, Energy, Choreo-герои
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/hopra-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Катя Хопрянинова
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 6-8 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/hopra-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Катя Хопрянинова
										</h4>
										<a
											href="https://www.instagram.com/_ekaaterinaaa__/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											_ekaaterinaaa__
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 6-8 лет</p>
												<p>ВТ/ЧТ/СБ 19:00-20:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											13 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1 год
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Аgness, Brian Puspos, Кирилл Зуб,
											Maksim Bon, Michelle Beatz, Decki,
											Алексей Мечетный, Whiphead, Алексей
											Симба, Кирилл Захаров и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											Art Story 2021 (1 место "Five Crew",
											TOP 5 "SOLO", "COACH&STUDENT"), Art
											Story 2020 (TOP 5 "DUET"), участие в
											Volga champ, Best Champ Omsk
										</p>
									</div>
								</div>
							</div>
						</div>

						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/sli-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Егор Слизков
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 9-11 лет | Parents Crew
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img src="./images/sli-f.jpg" alt="" />
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Егор Слизков
										</h4>
										<a
											href="https://www.instagram.com/egor.sli/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											egor.sli
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 9-11 лет</p>
												<p>ПН/СР/ПТ 20:00-21:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Parents Crew</p>
												<p>ВТ/ЧТ/СБ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											13 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											3 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Кирилл Захаров, Агнесс, Алексей
											Мечетный, Алексей Бахтин, Артём
											Васенин, Michelle Beatz, Саша Царёв,
											Алина Барилова, Ксюша Горячева,
											Franklin Yu, Bru Vidal, Яна Дон,
											Катя Реймерс, Максим Бон, Кирилл
											Зуб, Алексей Арапов, Евгений Байбик
											и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											Новые танцы на тнт, Best Champ Omsk,
											Art Story, Project818, Volga Champ,
											Танцы улиц, World of dance
										</p>
									</div>
								</div>
							</div>
						</div>

						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/askarova-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Рената Аскарова
							</h3>
							<p class="info__tab__teachers-item__group">
								Dancehall 10+ | Dancehall 14+
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/askarova-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Рената Аскарова
										</h4>
										<a
											href="https://www.instagram.com/onlyy_ri_/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											onlyy_ri_
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												6-я Линия, 97:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Dancehall 10+</p>
												<p>ПН/СР/ПТ 18:00-19:00</p>
											</div>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Dancehall 14+</p>
												<p>ПН/СР/ПТ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											7 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											5 месяцев
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Дмитрий Черкозьянов, Катя Троицкая,
											Андрей Бойко, Яна Дон, Лена
											Алексеенко, jrblackeagle, Артем
											Нефедов и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Best Champ Omsk, Art Story
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/litva-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Даша Игнатова
							</h3>
							<p class="info__tab__teachers-item__group">
								Dancehall 12+ | Dancehall 7-11 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/litva-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Даша Игнатова
										</h4>
										<a
											href="https://www.instagram.com/litva_48/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											litva_48
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Dancehall 12+</p>
												<p>Продолжающие</p>
												<p>ПН/СР/ПТ 17:00-18:00</p>
												<p>Начинающие</p>
												<p>ВТ/ЧТ/СБ 18:00-19:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Dancehall 7-11 лет</p>
												<p>ПН/СР/ПТ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											7 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											2 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Екатерина Троицкая, Rafa, Алексей
											Мечетный, Brian Puspos, Joseph
											Tsosh, Agness, Андрей Бойко, Кирилл
											Зуб, Decki, Ксения Горячева, Аня
											Тарасенко, Dhq Tasmania и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Art story, Best champ Omsk
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/loktev-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Женя Локтев
							</h3>
							<p class="info__tab__teachers-item__group">
								Shuffle 16+ | Shuffle 8+
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/loktev-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Женя Локтев
										</h4>
										<a
											href="https://www.instagram.com/evgeniy_loktev/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											evgeniy_loktev
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Shuffle 16+</p>
												<p>ПН/СР/ПТ 20:30-21:30</p>
											</div>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Shuffle 8+</p>
												<p>ПН/СР/ПТ 18:00-19:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											8 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											4 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Дмитрий Черкозьянов, Carl
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Art Story, Best Champ Omsk
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/karabanova-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Алёна Карабанова
							</h3>
							<p class="info__tab__teachers-item__group">
								Shuffle 6+
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/karabanova-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Алёна Карабанова
										</h4>
										<a
											href="https://www.instagram.com/karabanova02/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											karabanova02
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Shuffle 6+ начинающие</p>
												<p>ПН/СР/ПТ 15:00-16:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Shuffle 6+</p>
												<p>ПН/СР/ПТ 19:00-20:00</p>
											</div>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												6-я Линия, 97:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Shuffle 6+</p>
												<p>ВТ/ЧТ/СБ 19:00-20:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											15 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											3 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Jason rodelo, Дмитрий Черкозьянов,
											Michelle beats, Юля Акулина, Артём
											Nef, Артём Тарасов, Полина
											хритинина, Яна Дон, Decki и др.
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/parygina-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Кристина Парыгина
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 5-7 лет | Ритмика 3-5 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/parygina-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Кристина Парыгина
										</h4>
										<a
											href="https://www.instagram.com/kristina_parygina/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											kristina_parygina
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Ритмика 3-5 лет</p>
												<p>ПН/СР/ПТ 19:00-20:00</p>
											</div>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 5-7 лет</p>
												<p>ПН/СР/ПТ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											11 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											6 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Дмитрий Черкозьянов, Lil Whiphead,
											Катя Троицкая, Franklyn Yu, Алексей
											Simba, Евгений Байбик, Michelle
											Beatz и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Art Story, Best Champ
											Omsk, Сибпрокач, World of dance,
											Танцы улиц, Frame up dance festival
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/petrova-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Вероника Петрова
							</h3>
							<p class="info__tab__teachers-item__group">
								Ритмика 3-5 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/petrova-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Вероника Петрова
										</h4>
										<a
											href="https://www.instagram.com/99_veronika_99_/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											99_veronika_99_
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Ритмика 3-5 лет</p>
												<p>ПН/СР/ПТ 19:00-20:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											1 год
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											2 года
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/ice-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Полина Ледовских
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 6-10 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img src="./images/ice-f.jpg" alt="" />
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Полина Ледовских
										</h4>
										<a
											href="https://www.instagram.com/ice_pollyy_/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											ice_pollyy_
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 6-10 лет</p>
												<p>ПН/СР/ПТ 19:00-20:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											10 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1 год
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Michelle Beatz, Agness, Артём
											Нефедов, Decki, Женя Байбик, Кирилл
											Захаров, Амир Низамов, Рустам Лукин,
											Черкозьянов, Whiphead, Maksim Bon,
											Нюта, Егор Сли и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Omsk Dance Festival
										</p>
									</div>
								</div>
							</div>
						</div>

						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/chernomorova-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Вика Черноморова
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 7-11 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/chernomor-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Вика Черноморова
										</h4>
										<a
											href="https://www.instagram.com/chrnmrva/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											chrnmrva
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 7-11 лет</p>
												<p>ПН/СР/ПТ 17:00-18:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											9 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1 год
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Dylan Mayoral, Scott Forsyth, Brian
											Puspos, Joseph Tsosh, Agness, Даян,
											Кирилл Цыганов, Дамьен, Анастасия
											Чередникова, Женя Байбик, Алексей
											Мечетный, Кирилл Зуб и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											Art story 2019 Juniors solo 1st
											place, Art story 2020 Juniors solo
											1st place, Art story 2021 Abults
											duet 2nd place, участие в Project
											818, Volga Champ, Best Champ Omsk
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/kotomasev-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Никита Котомцев
							</h3>
							<p class="info__tab__teachers-item__group">
								Choreo 14+
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/kotomasev-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Никита Котомцев
										</h4>
										<a
											href="https://www.instagram.com/kotomasev/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											kotomasev
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Choreo 14+</p>
												<p>ВТ/ЧТ/СБ 19:00-20:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											5 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											2 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Кирилл Зуб, Decki, Whiphead, Виктор
											Смараков, Michelle Beatz, Артём
											Нефёдов, Franklin Yu, Дмитрий
											Черкозьянов, Евгений Байбик, Алексей
											Симба, Maksim Bon и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Project 818 (2-е место),
											Best Champ Omsk, Volga Сhamp, Танцы
											Улиц, World of Dance
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/zinger-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Анастасия Зингер
							</h3>
							<p class="info__tab__teachers-item__group">
								Choreo 12-15 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/zinger-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Анастасия Зингер
										</h4>
										<a
											href="https://www.instagram.com/zng.na/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											zng.na
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Choreo 12-15 лет</p>
												<p>ПН/СР/ПТ 18:00-19:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											8 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1 год
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Рустам Лукин, Лера Зубрилова, Ксения
											Горячева, Кирилл Зуб, Decki, Maksim
											Bon, Амир Низамов, Кирилл Захаров,
											Michelle Beatz, Agness, Женя Байбик
											и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в XXII всероссийский
											фестиваль визуальных искусств ВДЦ
											"Орлёнок", II закрытый международный
											гранатовый конкурс среди лучших
											хореографических коллективов "Кубок
											Победителей"
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/gertseva-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Оля Герцева
							</h3>
							<p class="info__tab__teachers-item__group">
								Choreo Girls 14+
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/gertseva-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Оля Герцева
										</h4>
										<a
											href="https://www.instagram.com/gertseva_olga_/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											gertseva_olga_
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												6-я Линия, 97:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Choreo Girls 14+</p>
												<p>ПН/СР/ПТ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											12 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											3 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Agness, Michelle beatz, Decki, Игорь
											Чебаненко и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Сибпрокач, Art story, U-13
											ANNIVERSARY, INSIDE Dance Festival,
											Best Champ Omsk
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/plotnikov-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Стас Плотников
							</h3>
							<p class="info__tab__teachers-item__group">
								Electro 10+
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/plotnikov-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Стас Плотников
										</h4>
										<a
											href="https://www.instagram.com/p.l.o.t_n.i.k.k.o/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											p.l.o.t_n.i.k.k.o
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Electro 10+</p>
												<p>ВТ/ЧТ 16:30-17:30</p>
												<p>СБ 17:00-18:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											3 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1 месяц
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Ксения Горячева, Миша Малышев,
											Никита Котомцев, Егор Слизков,
											Евсей, Загородников, STK
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Art story, Best Сhamp Omsk
										</p>
									</div>
								</div>
							</div>
						</div>

						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/kamenova-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Анастасия Каменова
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 12-15 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/kamenova-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Анастасия Каменова
										</h4>
										<a
											href="https://www.instagram.com/ly_lu1/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											ly_lu1
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												6-я Линия, 97:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 12-15 лет</p>
												<p>ВТ/ЧТ/СБ 20:00-21:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											5 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											2 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Brian Puspos, Joseph Tsosh, Женя
											Байбик, Агнесс, Кирилл Зуб, Яна Дон,
											Decki, Maksim Bon, Michelle Beatz,
											Алексей Мечетный, Кирилл Захаров и
											др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Art story, Best Сhamp
											Omsk, Танцы улиц, WOD, Project 818,
											Volga champ
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/boktikova-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Сабина Боктикова
							</h3>
							<p class="info__tab__teachers-item__group">
								Hip-Hop 6-8 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/boktikova-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Сабина Боктикова
										</h4>
										<a
											href="https://www.instagram.com/sabinaboktikova/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											sabinaboktikova
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												6-я Линия, 97:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Hip-Hop 6-8 лет</p>
												<p>ВТ/ЧТ/СБ 17:00-18:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											4,5 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											5 месяцев
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Joseph Tsosh, Brian Puspos, Рамон,
											Мечетный, Мишель, Agness, Whiphead,
											Кирилл Зуб, Maksim Bon, Decki, Женя
											Байбик, Наргиз, Franklin Yu и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Art story, Best Сhamp
											Omsk, Танцы улиц, WOD, Project 818,
											Volga champ
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/niderkvel-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Элина Нидерквелль
							</h3>
							<p class="info__tab__teachers-item__group">
								Dancehall 9-13 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/niderkvel-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Элина Нидерквелль
										</h4>
										<a
											href="https://www.instagram.com/el_nider/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											el_nider
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												9-я Ленинская, 5:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Dancehall 9-13 лет</p>
												<p>ВТ/ЧТ/СБ 18:00-19:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											3,5 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1,5 месяца
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Екатерина Троицкая, Тарасенко Аня,
											Полина Хритинина, Алена Прокоданова,
											Hellen mur, Nyuta, Agness, Michelle
											beats, Tim .ua, Nargiz rads и др.
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Best Champ Omsk, Art Story
										</p>
									</div>
								</div>
							</div>
						</div>

						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/yana-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Яна Заборовская
							</h3>
							<p class="info__tab__teachers-item__group">
								Ритмика 3-5 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img src="./images/yana-f.jpg" alt="" />
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Яна Заборовская
										</h4>
										<a
											href="https://www.instagram.com/z_yan_g/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											z_yan_g
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												Степанца 10/2:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Ритмика 3-5 лет</p>
												<p>ПН/СР/ПТ 19:30-20:30</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											8 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											1,5 года
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/alina-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Алина Ярощук
							</h3>
							<p class="info__tab__teachers-item__group">
								Ритмика 3-5 лет
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/alina-p.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Алина Ярощук
										</h4>
										<a
											href="https://www.instagram.com/_d.r.e.a.m_2/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											_d.r.e.a.m_2
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p
												class="
													modal-teachers__block-info__groups-studio
												"
											>
												6-я Линия, 97:
											</p>
											<div
												class="
													modal-teachers__block-info__groups-block
												"
											>
												<p>Ритмика 3-5 лет</p>
												<p>ПН/СР/ПТ 19:00-20:00</p>
											</div>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Танцевальный стаж:</span
											>
											13 лет
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Преподавательский стаж:</span
											>
											3 года
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Посещение мастер-классов:</span
											>
											Полина Хритинина, Анастасия Полищук
										</p>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											<span
												class="
													modal-teachers__block-info__desc-span
												"
												>Достижения:</span
											>
											участие в Сибпрокач
										</p>
									</div>
								</div>
							</div>
						</div>
						<a class="info__tab__teachers-item">
							<img
								class="info__tab__teachers-item__photo"
								src="./images/ksenia-p.jpg"
								alt=""
							/>
							<h3 class="info__tab__teachers-item__name">
								Ксюша Николайчук
							</h3>
							<p class="info__tab__teachers-item__group">
								Организация Nako
							</p>
						</a>
						<div class="modal-teachers">
							<div class="modal-content-teachers">
								<span class="close-teachers">&times;</span>
								<div class="modal-teachers__block">
									<div class="modal-teachers__block-photo">
										<img
											src="./images/ksenia-f.jpg"
											alt=""
										/>
									</div>
									<div class="modal-teachers__block-info">
										<h4
											class="
												modal-teachers__block-info__name
											"
										>
											Ксюша Николайчук
										</h4>
										<a
											href="https://www.instagram.com/kksenisphere/"
											class="
												modal-teachers__block-info__social
											"
										>
											<i class="fab fa-instagram"></i>
											kksenisphere
										</a>
										<div
											class="
												modal-teachers__block-info__groups
											"
										>
											<p>Организация Nako</p>
										</div>
										<p
											class="
												modal-teachers__block-info__desc
											"
										>
											Помогает с организацией,
											администрацией и развивает Омское
											танцевальное сообщество
										</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Pass new teachers here -->
					</div>
				</div>
			</div>
		</section>

		<section id="schedule">
			<div class="schedule">
				<h2 class="schedule__head">Расписание</h2>
				<div class="schedule__row">
					<div class="schedule__column">
						<h3 class="schedule__column-head">6-я Линия, 97</h3>
						<button class="schedule__column-divider">
							ПН/СР/ПТ <i class="fas fa-plus divider-plus"></i>
						</button>
						<div class="schedule__column-content">
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									DANCEHALL 10+
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									18:00-19:00 Рената Аскарова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									РИТМИКА 3-5 ЛЕТ
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Алина Ярощук
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									CHOREO GIRLS 14+
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Ольга Герцева
								</div>
							</div>
						</div>
						<button class="schedule__column-divider">
							ВТ/ЧТ/СБ <i class="fas fa-plus divider-plus"></i>
						</button>
						<div class="schedule__column-content">
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 6-8 ЛЕТ
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									17:00-18:00 Сабина Боктикова
								</div>
							</div>

							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									SHUFFLE 6+
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Алёна Карабанова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 12-15 ЛЕТ
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Анастасия Каменова
								</div>
							</div>
						</div>
					</div>
					<div class="schedule__column">
						<h3 class="schedule__column-head">Степанца 10/2</h3>
						<button class="schedule__column-divider">
							ПН/СР/ПТ <i class="fas fa-plus divider-plus"></i>
						</button>
						<div class="schedule__column-content">
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									SHUFFLE 6+ начинающие
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									15:00-16:00 Алёна Карабанова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									DANCEHALL 12+ продолжающие
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									17:00-18:00 Дарья Игнатова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									SHUFFLE 6+
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Алёна Карабанова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 9-11 лет
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Егор Слизков
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 7-11 лет
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									17:00-18:00 Вика Черноморова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									РИТМИКА 3-5 лет
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:30-20:30 Яна Заборовская
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									SHUFFLE 16+
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:30-21:30 Женя Локтев
								</div>
							</div>
						</div>
						<button class="schedule__column-divider">
							ВТ/ЧТ/СБ <i class="fas fa-plus divider-plus"></i>
						</button>
						<div class="schedule__column-content">
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 6-8 лет
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Катя Хопрянинова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 12-15 лет
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Костя Квашнин
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									DANCEHALL 7-11 лет
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									17:00-18:00 Дарья Игнатова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									DANCEHALL 12+ начинающие
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									18:00-19:00 Дарья Игнатова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									CHOREO 14+
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Никита Котомцев
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									PARENTS CREW
									<i
										class="
											fas
											fa-chevron-down
											accordion-icon
										"
									></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Егор Слизков
								</div>
							</div>
						</div>
					</div>
					<div class="schedule__column">
						<h3 class="schedule__column-head">9-я Ленинская, 5</h3>
						<button class="schedule__column-divider">
							ПН/СР/ПТ <i class="fas fa-plus divider-plus"></i>
						</button>
						<div class="schedule__column-content">
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									SHUFFLE 8+
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									18:00-19:00 Женя Локтев
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 6-10 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Полина Ледовских
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									DANCEHALL 14+
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Рената Аскарова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									CHOREO 12-15 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									18:00-19:00 Анастасия Зингер
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									РИТМИКА 3-5 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Вероника Петрова
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									РОДИТЕЛИ
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Михаил Малышев
								</div>
							</div>
						</div>
						<button class="schedule__column-divider">
							ВТ/ЧТ/СБ <i class="fas fa-plus divider-plus"></i>
						</button>
						<div class="schedule__column-content">
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									ELECTRO 10+
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									Стас Плотников
									<p>ВТ/ЧТ 16:30-17:30</p>
									<p>СБ 17:00-18:00</p>
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									DANCEHALL 9-13 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									18:00-19:00 Элина Нидерквелль
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									РИТМИКА 3-5 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Кристина Парыгина
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 5-7 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Кристина Парыгина
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									HIP-HOP 8-12 лет
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									19:00-20:00 Миша Малышев
								</div>
							</div>
							<div class="schedule__accordion__body-item">
								<button class="schedule__accordion__body-btn">
									CHOREO 14+
									<i class="fas fa-chevron-down"></i>
								</button>
								<div class="schedule__accordion__body-panel">
									20:00-21:00 Миша Малышев
								</div>
							</div>
						</div>
					</div>
					<!-- Pass new studios here -->
				</div>
			</div>
		</section>
		<section id="price">
			<div class="price">
				<h2 class="price__head">Цены</h2>
				<div class="price__block">
					<div class="price__block-item">
						<h3 class="price__block-item__head">
							Первое пробное занятие
						</h3>
						<p class="price__block-item__text pulse-animation">
							БЕСПЛАТНО
						</p>
					</div>
					<div class="price__block-item">
						<h3 class="price__block-item__head">Разовое занятие</h3>
						<p class="price__block-item__text">от 250 руб</p>
					</div>
					<div class="price__block-item">
						<h3 class="price__block-item__head">
							Абонемент на месяц
						</h3>
						<p class="price__block-item__text">от 2190 руб</p>
					</div>
					<div class="price__block-item">
						<h3 class="price__block-item__head">Аренда зала</h3>
						<p class="price__block-item__text">400 руб/час</p>
					</div>
					<p class="price__block-addition">
						*Подробности уточняйте у администратора при записи
					</p>
					<a href="#form" class="price__block-button reg-btn"
						>Записаться</a
					>
				</div>
			</div>
		</section>
		<section id="studios">
			<div class="studios">
				<h2 class="studios-head">Залы</h2>
				<div class="studios-slider__container">
					<div class="studios-slider__container-item fade">
						<div class="studios-slider__container-item__number">
							1 / 5
						</div>
						<img
							src="./images/leninsk-white.jpg"
							alt="Белый зал студии 9-я Ленинская, 5"
							style="width: 100%"
						/>
						<div class="studios-slider__container-item__text">
							9-я Ленинская, 5 - Белый зал
						</div>
					</div>
					<div class="studios-slider__container-item fade">
						<div class="studios-slider__container-item__number">
							2 / 5
						</div>
						<img
							src="./images/leninsk-blue.jpg"
							alt="Синий зал студии 9-я Ленинская, 5"
							style="width: 100%"
						/>
						<div class="studios-slider__container-item__text">
							9-я Ленинская, 5 - Синий зал
						</div>
					</div>
					<div class="studios-slider__container-item fade">
						<div class="studios-slider__container-item__number">
							3 / 5
						</div>
						<img
							src="./images/stepantsa-red.jpg"
							alt="Красный зал студии Степанца 10/2"
							style="width: 100%"
						/>
						<div class="studios-slider__container-item__text">
							Степанца 10/2 - Красный зал
						</div>
					</div>
					<div class="studios-slider__container-item fade">
						<div class="studios-slider__container-item__number">
							4 / 5
						</div>
						<img
							src="./images/stepantsa-black.jpg"
							alt="Чёрный зал студии Степанца 10/2"
							style="width: 100%"
						/>
						<div class="studios-slider__container-item__text">
							Степанца 10/2 - Чёрный зал
						</div>
					</div>
					<div class="studios-slider__container-item fade">
						<div class="studios-slider__container-item__number">
							5 / 5
						</div>
						<img
							src="./images/linia-black-new.jpg"
							alt="Чёрный зал 6-я Линия, 97"
							style="width: 100%"
						/>
						<div class="studios-slider__container-item__text">
							6-я Линия, 97
						</div>
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<div style="text-align: center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
				</div>
			</div>
		</section>
		<section id="form">
			<div class="form">
				<h2 class="form__head">Запишись на занятие</h2>
				<p class="form__text">Первое - бесплатно</p>
				<form action="send.php" method="POST" class="form__body">
					<label class="form__body-label" for="name"
						>Имя и Фамилия</label
					>
					<input
						data-validate-field="name"
						class="form__body-input"
						type="text"
						id="name"
						name="name"
						placeholder="Имя Фамилия"
					/>
					<label class="form__body-label" for="phone"
						>Номер телефона</label
					>
					<input
						data-validate-field="phone"
						class="form__body-input"
						type="tel"
						id="phone"
						name="phone"
						placeholder="+7 (999) 999-99-99"
					/>
					<label class="form__body-label" for="studio"
						>Выберите студию:
					</label>
					<select
						data-validate-field="studio"
						class="form__body-input"
						id="studio"
						name="studio"
						onchange="populate(this.id, 'style')"
					>
						<option value="none">---</option>
						<option value="Степанца 10/2">Степанца 10/2</option>
						<option value="6-я Линия, 97">6-я Линия, 97</option>
						<option value="9-я Ленинская, 5">
							9-я Ленинская, 5
						</option>
					</select>
					<label class="form__body-label" for="style"
						>Выберите направление:
					</label>
					<select
						data-validate-field="style"
						class="form__body-input"
						id="style"
						name="style"
					>
						<option value="none">---</option>
					</select>
					<label class="form__body-label" for="comment"
						>Ваши вопросы и уточнения</label
					>
					<textarea
						class="form__body-textarea"
						name="comment"
						id="comment"
						cols="10"
						rows="5"
						style="resize: none"
					></textarea>
					<button class="form__body-button reg-btn">
						Записаться
					</button>
				</form>
			</div>
		</section>
		<section id="contacts">
			<div class="contacts">
				<h2 class="contacts__head">У нас три студии</h2>
				<p class="contacts__text">Приходите в какую удобно</p>
				<div class="contacts__info">
					<div class="contacts__info-content">
						<a
							class="contacts__info-content__number"
							href="tel:+79620587357"
							><i class="fas fa-phone"></i>63-73-57</a
						>
						<p class="contacts__info-content__city">
							<i class="fas fa-city"></i> г. Омск
						</p>
						<p class="contacts__info-content__studio">
							<i class="fas fa-map-pin"></i> Степанца 10/2
						</p>
						<p class="contacts__info-content__studio">
							<i class="fas fa-map-pin"></i> 9-я Ленинская, 5
						</p>
						<p class="contacts__info-content__studio">
							<i class="fas fa-map-pin"></i> 6-я Линия, 97
						</p>
						<div class="contacts__info-content__social">
							<a
								class="contacts__info-content__social-item"
								href="https://www.instagram.com/dancestudionako/"
								><i class="fab fa-instagram"></i
							></a>
							<a
								class="contacts__info-content__social-item"
								href="https://vk.com/nakodancefamily/"
								><i class="fab fa-vk"></i
							></a>
						</div>
					</div>
					<div class="contacts__info-map">
						<iframe
							src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa9cba94e2be8f7f57103cac18a7aba6844905abeb98b3b30087014aabd813267&amp;source=constructor"
							width="100%"
							height="300"
							frameborder="0"
						></iframe>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer">
			<div class="footer">
				<div class="footer__logo">
					<img
						class="footer__logo-image"
						src="./images/nako-logo.png"
						alt=""
					/>
					<p class="footer__tag">
						made by
						<a
							class="footer__tag-anchor"
							href="https://github.com/andy-devs"
							>@andy-devs</a
						>
					</p>
				</div>
				<div class="footer__col">
					<h3 class="footer__col-head">ТАНЦЫ</h3>
					<a href="#info" class="footer__col-item">Стили</a>
					<a href="#info" class="footer__col-item">Педагоги</a>
					<a href="#schedule" class="footer__col-item">Расписание</a>
				</div>
				<div class="footer__col">
					<h3 class="footer__col-head">СТУДИЯ</h3>
					<a href="#studios" class="footer__col-item">Залы</a>
					<a href="#contacts" class="footer__col-item"
						>Расположение</a
					>
				</div>
				<div class="footer__col">
					<h3 class="footer__col-head">ИНФОРМАЦИЯ</h3>
					<a href="#contacts" class="footer__col-item">Контакты</a>
					<a href="#form" class="footer__col-item"
						>Запись на занятие</a
					>
				</div>
			</div>
		</footer>
		<script
			type="text/javascript"
			src="./libs/inputmask/dist/inputmask.min.js"
		></script>
		<script
			type="text/javascript"
			src="./libs/just-validate/dist/js/just-validate.min.js"
		></script>
		<script
			type="text/javascript"
			src="./libs/sweetalert2/dist/sweetalert2.all.min.js"
		></script>

		<script type="text/javascript" src="/js/newapp.js?v=1.6"></script>
	</body>
</html>
