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
function removeActive(items) {
	for (let i of items) {
		i.classList.remove('_active');
	}
}

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

let slideIndex = 1;
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
	let slides = document.querySelectorAll('.studios-slider__container-item');
	let dots = document.querySelectorAll('.dot');
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

function populate(s1, s2) {
	var s1 = document.querySelector('#studio');
	var s2 = document.querySelector('#style');
	s2.innerHTML = '---';
	if (s1.value == '6-я Линия, 97') {
		var optionArray = [
			'hip-hop 12-15|Hip-Hop 12-15 лет',
			'hip-hop 9-11|Hip-Hop 9-11 лет',
			'hip-hop 6-8|Hip-Hop 6-8 лет',
			'choreo girls 14+|Choreo girls 14+',
			'vogue 10+|Vogue 10+',
			'dancehall 10+|Dancehall 10+',
			'shuffle 6+|Shuffle 6+',
			'ritmika 3-5|Ритмика 3-5 лет',
		];
	} else if (s1.value == 'Степанца 10/2') {
		var optionArray = [
			'hip-hop 12-15|Hip-Hop 12-15 лет',
			'hip-hop 9-11|Hip-Hop 9-11 лет',
			'hip-hop 7-11|Hip-Hop 7-11 лет',
			'hip-hop 6-8|Hip-Hop 6-8 лет',
			'dancehall 12+|Dancehall 12+',
			'choreo 14+|Choreo 14+',
			'shuffle 16+|Shuffle 16+',
			'shuffle 6+|Shuffle 6+',
			'ritmika 3-5|Ритмика 3-5 лет',
			'parents|Parents Crew',
		];
	} else if (s1.value == '9-я Ленинская, 5') {
		var optionArray = [
			'hip-hop 9-12|Hip-Hop 9-12 лет',
			'hip-hop 6-8|Hip-Hop 6-8 лет',
			'hip-hop 5-7|Hip-Hop 5-7 лет',
			'dancehall 14+|Dancehall 14+',
			'choreo 12-15|Choreo 12-15 лет',
			'dancehall 9-13|Dancehall 9-13 лет',
			'choreo 14+|Choreo 14+',
			'ritmika 3-5|Ритмика 3-5 лет',
			'parents|Родители',
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
const form = document.querySelector('form');
form.addEventListener('submit', function (e) {
	e.preventDefault();
});
let selector = document.getElementById('phone');

let im = new Inputmask('+7 (999) 999-99-99');
im.mask(selector);
// form.addEventListener('submit', function (e) {
// 	Swal.fire({
// 		title: 'Запись принята',
// 		text: 'Вы успешно записались на занятие',
// 		icon: 'success',
// 		confirmButtonColor: 'hsl(0, 56%, 51%)',
// 		confirmButtonText: 'OK',
// 	});
// 	Swal.fire({
// 		title: 'Упс.. Что-то пошло не так!',
// 		text: 'Проверьте данные и повторите запись',
// 		icon: 'error',
// 		confirmButtonColor: 'hsl(0, 56%, 51%)',
// 		confirmButtonText: 'OK',
// 	});
// });
let validateForms = function (selector) {
	new JustValidate(selector, {
		colorWrong: 'hsl(0, 56%, 51%)',
		rules: {
			name: {
				required: true,
				minLength: 5,
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
		},
	});
};
validateForms('.form');

const anchors = document.querySelectorAll('a[href*="#"]');

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

var modalStyle = document.querySelectorAll('.modal-styles');

var btnStyle = document.querySelectorAll('.info__tab__styles-item');

var spanStyle = document.querySelectorAll('.close-styles');

for (let i = 0; i < modalStyle.length; i++) {
	btnStyle[i].onclick = (e) => {
		modalStyle[i].style.display = 'block';
	};
	for (let j of spanStyle) {
		j.onclick = (e) => {
			for (let i of modalStyle) {
				i.style.display = 'none';
			}
		};
	}
	window.onclick = function (e) {
		if (e.target == modalStyle[i]) {
			modalStyle[i].style.display = 'none';
		}
	};
}
