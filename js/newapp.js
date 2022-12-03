window.disableVideo = function () {
	let check = false;
	(function (a) {
		if (
			/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
				a
			) ||
			/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
				a.substr(0, 4)
			)
		)
			check = true;
	})(navigator.userAgent || navigator.vendor || window.opera);
	if (check == true) {
		const video = document.querySelector('video');
		video.setAttribute('preload', 'none');
		video.removeAttribute('autoplay');
		video.setAttribute('src', '');
		video.setAttribute('poster', '');
	}
};
disableVideo();

// Burger menu

const headerLogo = document.querySelector('.header__logo');
const headerNav = document.querySelector('.header__nav');
const headerIcon = document.querySelector('.header__icon');
const headerNavItem = document.querySelectorAll('.header__nav-item');

for (let i = 0; i < headerNavItem.length; i++) {
	headerNavItem[i].addEventListener('click', (e) => {
		headerLogo.classList.toggle('_active');
		headerNav.classList.toggle('_active');
		headerIcon.classList.toggle('_active');
	});
}

headerIcon.addEventListener('click', (e) => {
	headerLogo.classList.toggle('_active');
	headerNav.classList.toggle('_active');
	headerIcon.classList.toggle('_active');
});

// Tabs for Styles and Teachers

function removeActive(items) {
	for (let i of items) {
		i.classList.remove('_active');
	}
}

const tabNavItems = document.querySelectorAll('.info__tabs__nav-item');
const tabBodyItems = document.querySelectorAll('.info__tabs__body-item');

for (let i = 0; i < tabNavItems.length; i++) {
	tabNavItems[i].addEventListener('click', (e) => {
		if (!tabNavItems[i].classList.contains('_active')) {
			removeActive(tabNavItems);
			tabNavItems[i].classList.add('_active');
			removeActive(tabBodyItems);
			tabBodyItems[i].classList.add('_active');
		}
	});
}
const headerStyleItem = document.querySelectorAll(
	'.header__nav-item[href="#info"]'
);
headerStyleItem[0].addEventListener('click', (e) => {
	removeActive(tabNavItems);
	tabNavItems[0].classList.add('_active');
	removeActive(tabBodyItems);
	tabBodyItems[0].classList.add('_active');
});
const footerStyleItem = document.querySelectorAll(
	'.footer__col-item[href="#info"]'
);
footerStyleItem[0].addEventListener('click', (e) => {
	removeActive(tabNavItems);
	tabNavItems[0].classList.add('_active');
	removeActive(tabBodyItems);
	tabBodyItems[0].classList.add('_active');
});
const headerTeachersItem = document.querySelectorAll(
	'.header__nav-item[href="#info"]'
);

headerTeachersItem[1].addEventListener('click', (e) => {
	removeActive(tabNavItems);
	tabNavItems[1].classList.add('_active');
	removeActive(tabBodyItems);
	tabBodyItems[1].classList.add('_active');
});
const footerTeachersItem = document.querySelectorAll(
	'.footer__col-item[href="#info"]'
);
footerTeachersItem[1].addEventListener('click', (e) => {
	removeActive(tabNavItems);
	tabNavItems[1].classList.add('_active');
	removeActive(tabBodyItems);
	tabBodyItems[1].classList.add('_active');
});

// Schedule Double Dropdown

const accBtn = document.querySelectorAll('.schedule__accordion__body-btn');
const accBlock = document.querySelectorAll('.schedule__accordion__body-panel');

for (let i = 0; i < accBtn.length; i++) {
	accBtn[i].addEventListener('click', (e) => {
		if (!accBtn[i].classList.contains('_active')) {
			removeActive(accBtn);
			accBtn[i].classList.toggle('_active');
			removeActive(accBlock);
			accBlock[i].classList.toggle('_active');
		} else {
			removeActive(accBtn);
			removeActive(accBlock);
		}
	});
}
const scheduleBtn = document.querySelectorAll('.schedule__column-divider');
const scheduleBlock = document.querySelectorAll('.schedule__column-content');

for (let i = 0; i < scheduleBtn.length; i++) {
	scheduleBtn[i].addEventListener('click', (e) => {
		if (!scheduleBtn[i].classList.contains('_active')) {
			removeActive(scheduleBtn);
			scheduleBtn[i].classList.add('_active');
			removeActive(scheduleBlock);
			scheduleBlock[i].classList.add('_active');
		} else {
			removeActive(accBtn);
			removeActive(accBlock);
			removeActive(scheduleBtn);
			removeActive(scheduleBlock);
		}
	});
}

// Slider for Studios

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
	showSlides((slideIndex = n));
}

function showSlides(n) {
	let i;
	const slides = document.querySelectorAll('.studios-slider__container-item');
	const dots = document.querySelectorAll('.dot');
	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = 'none';
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(' active', '');
	}
	slides[slideIndex - 1].style.display = 'block';
	dots[slideIndex - 1].className += ' active';
}

// Style input based on Studio input

function populate(s1, s2) {
	var s1 = document.querySelector('#studio');
	var s2 = document.querySelector('#style');
	s2.innerHTML = '---';
	if (s1.value == '6-я Линия, 97') {
		var optionArray = [
			'hip-hop 12-15 - Настя|Hip-Hop 12-15 лет - Настя',
			'hip-hop 6-10 - Настя|Hip-Hop 6-10 лет - Настя',
			'shuffle 6+|Shuffle 6+',
			'hip-hop 10-15 - Настя|Hip-hop 10-15 лет - Настя',
			'dancehall 10+ - Рената|Dancehall 10+ - Рената',
			'shuffle 6+ - Женя|Shuffle 6+ - Женя',
			'ritmika 3-5 - Карина|Ритмика 3-5 лет - Карина',
			'k-pop 14+ - Аня|K-pop 14+ - Аня',
			'vogue 10+ - Настя|Vogue 10+ - Настя',
			'choreo girls 13+ - Катя|Choreo Girls 13+ - Катя',
		];
	} else if (s1.value == 'Лукашевича, 8/3') {
		var optionArray = [
			'hip-hop 12+ - Вика|Hip-Hop 12+ - Вика',
			'hip-hop 10-13 - Егор|Hip-Hop 10-13 лет - Егор',
			'hip-hop 7-11 - Настя|Hip-Hop 7-11 лет - Настя',
			'hip-hop 6-8 - Катя|Hip-Hop 6-8 лет - Катя',
			'hip-hop 8-13 - Дарья|Hip-Hop 8-13 - Дарья',
			'breakdance 6+ - Тимофей|Break Dance 6+ - Тимофей',
			'dancehall 7-11 - Даша|Dancehall 7-11 лет - Даша',
			'experimental 14+ - Марина|Experimental 14+ - Марина',
			'dancehall 12+ начинающие - Даша|Dancehall 12+ начин. - Даша',
			'choreo 14+ - Никита|Choreo 14+ - Никита',
			'strip 16+ - Лера|Strip 16+ - Лера',
			'shuffle 6+ - Женя|Shuffle 6+ - Женя',
			'ritmika 3-5 - Яна|Ритмика 3-5 лет - Яна',
			'vogue 12+ - Настя|Vogue 12+ - Настя',
			'parents - Егор|Parents Crew - Егор',
			'современная хореография - Яна|Современная хореография - Яна',
		];
	} else if (s1.value == '9-я Ленинская, 5') {
		var optionArray = [
			'hip-hop 9-13 - Миша|Hip-Hop 9-13 лет - Миша',
			'hip-hop 6-10 - Настя|Hip-Hop 6-10 лет - Настя',
			'hip-hop 6-8 - Кристина|Hip-Hop 6-8 лет - Кристина',
			'breakdance 6+ - Аслан|Break Dance 6+ - Аслан',
			'dancehall 14+ - Рената|Dancehall 14+ - Рената',
			'contemporary 14+ - Стас|Contemporary 14+ - Стас',
			'choreo 13+ - Настя|Choreo 13+ - Настя',
			'choreo 14+ - Миша|Choreo 14+ - Миша',
			'shuffle 8+ - Женя|Shuffle 8+ - Женя',
			'vogue 12+ - Лиза|Vogue 12+ - Лиза',
			'ritmika 3-5 - Парыгина|Ритмика 3-5 лет - Парыгина',
			'high heels - Кристина|High heels - Кристина',
			'hip-hop 12+ - Саша|Hip-hop 12+ - Саша',
			'hip-hop 10+ - Сабина|Hip-hop 10+ - Сабина',
		];
	} else {
		var optionArray = ['none|---'];
	}
	for (let i in optionArray) {
		var pair = optionArray[i].split('|');
		var newoption = document.createElement('option');

		newoption.value = pair[0];
		newoption.innerHTML = pair[1];
		s2.options.add(newoption);
	}
}

// Form Validation and Submition

const selector = document.getElementById('phone');

const im = new Inputmask('+7 (999) 999-99-99');
im.mask(selector);

var userDevice = '';
window.mobileCheck = function () {
	let check = false;
	(function (a) {
		if (
			/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
				a
			) ||
			/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
				a.substr(0, 4)
			)
		)
			check = true;
	})(navigator.userAgent || navigator.vendor || window.opera);

	if (check === false) {
		userDevice = 'pc';
	} else if (check === true) {
		userDevice = 'mobile';
	}
};
mobileCheck();

const validateForms = function (selector) {
	new JustValidate(selector, {
		colorWrong: 'hsl(0, 56%, 51%)',
		rules: {
			name: {
				required: true,
				minLength: 1,
				maxLength: 30,
				name: true,
			},
			phone: {
				required: true,
			},
			studio: {
				required: true,
				minLength: 5,
			},
			style: {
				required: true,
				minLength: 5,
			},
		},
		messages: {
			name: 'Неправильно введено имя и фамилия',
			phone: 'Неправильно введён телефон',
			studio: 'Не выбрана студия',
			style: 'Не выбрано направление',
		},
		submitHandler: function (form) {
			Swal.fire({
				title: 'Запись принята',
				text: 'Вы успешно записались на занятие',
				icon: 'success',
				confirmButtonColor: 'hsl(0, 56%, 51%)',
				confirmButtonText: 'OK',
			});
			form.submit();
		},
	});
};
validateForms('.form__body');

// Smooth Scroll

let anchors = document.querySelectorAll('a[href*="#"]');
anchors = [...anchors];
anchors = anchors.filter((anchor) => anchor.getAttribute('href') != '#tab-1');
anchors = anchors.filter((anchor) => anchor.getAttribute('href') != '#tab-2');

for (let anchor of anchors) {
	anchor.addEventListener('click', (e) => {
		e.preventDefault();
		const blockID = anchor.getAttribute('href');
		document.querySelector('' + blockID).scrollIntoView({
			behavior: 'smooth',
			block: 'start',
		});
	});
}

// Style Modal Window

const body = document.querySelector('body');

const modalStyle = document.querySelectorAll('.modal-styles');

const modalStyleItem = document.querySelectorAll('.modal-content-styles');

const btnStyle = document.querySelectorAll('.info__tab__styles-item');

const spanStyle = document.querySelectorAll('.close-styles');

for (let i = 0; i < modalStyle.length; i++) {
	btnStyle[i].onclick = (e) => {
		if (userDevice == 'mobile') {
			body.style.overflow = 'hidden';
		}
		modalStyle[i].classList.remove('fadeOut');
		modalStyleItem[i].classList.remove('fadeOut');
		modalStyleItem[i].classList.add('fadeIn');
		modalStyle[i].classList.add('fadeIn');
		modalStyle[i].style.display = 'grid';
		setTimeout(() => {
			modalStyleItem[i].classList.remove('fadeIn');
			modalStyle[i].onclick = (e) => {
				if (e.target.classList.contains('modal-styles')) {
					if (userDevice == 'mobile') {
						body.style.overflow = 'visible';
					}
					modalStyleItem[i].classList.add('fadeOut');
					modalStyle[i].classList.add('fadeOut');
					setTimeout(() => {
						modalStyle[i].style.display = 'none';
					}, 200);
				}
			};
		}, 500);
	};
	spanStyle[i].onclick = (e) => {
		if (userDevice == 'mobile') {
			body.style.overflow = 'visible';
		}
		modalStyleItem[i].classList.add('fadeOut');
		modalStyle[i].classList.add('fadeOut');
		setTimeout(() => {
			modalStyle[i].style.display = 'none';
		}, 200);
	};
}

// Teachers Modal Window

const modalTeacher = document.querySelectorAll('.modal-teachers');

const modalTeacherItem = document.querySelectorAll('.modal-content-teachers');

const btnTeacher = document.querySelectorAll('.info__tab__teachers-item');

const spanTeacher = document.querySelectorAll('.close-teachers');

for (let i = 0; i < modalTeacher.length; i++) {
	btnTeacher[i].onclick = (e) => {
		modalTeacherItem[i].classList.add('fadeIn');
		modalTeacher[i].style.display = 'grid';
	};
	for (let j of spanTeacher) {
		j.onclick = (e) => {
			for (let m of modalTeacher) {
				m.style.display = 'none';
			}
		};
	}
}
for (let i = 0; i < modalTeacher.length; i++) {
	btnTeacher[i].onclick = (e) => {
		if (userDevice == 'mobile') {
			body.style.overflow = 'hidden';
		}
		modalTeacher[i].classList.remove('fadeOut');
		modalTeacherItem[i].classList.remove('fadeOut');
		modalTeacherItem[i].classList.add('fadeIn');
		modalTeacher[i].classList.add('fadeIn');
		modalTeacher[i].style.display = 'grid';
		setTimeout(() => {
			modalTeacherItem[i].classList.remove('fadeIn');
			modalTeacher[i].onclick = (e) => {
				if (e.target.classList.contains('modal-teachers')) {
					if (userDevice == 'mobile') {
						body.style.overflow = 'visible';
					}
					modalTeacherItem[i].classList.add('fadeOut');
					modalTeacher[i].classList.add('fadeOut');
					setTimeout(() => {
						modalTeacher[i].style.display = 'none';
					}, 200);
				}
			};
		}, 500);
	};
	spanTeacher[i].onclick = (e) => {
		if (userDevice == 'mobile') {
			body.style.overflow = 'visible';
		}
		modalTeacherItem[i].classList.add('fadeOut');
		modalTeacher[i].classList.add('fadeOut');
		setTimeout(() => {
			modalTeacher[i].style.display = 'none';
		}, 200);
	};
}
