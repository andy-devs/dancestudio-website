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

// Style input based on Studio input

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
			'dancehall 7-11|Dancehall 9-11 лет',
			'dancehall 12+ продолжающие|Dancehall 12+ продолжающие',
			'dancehall 12+ начинающие|Dancehall 12+ начинающие',
			'choreo 14+|Choreo 14+',
			'shuffle 16+|Shuffle 16+',
			'shuffle 6+|Shuffle 6+',
			'ritmika 3-5|Ритмика 3-5 лет',
			'parents|Parents Crew',
		];
	} else if (s1.value == '9-я Ленинская, 5') {
		var optionArray = [
			'hip-hop 8-12|Hip-Hop 8-12 лет',
			'hip-hop 6-10|Hip-Hop 6-10 лет',
			'hip-hop 5-7|Hip-Hop 5-7 лет',
			'dancehall 14+|Dancehall 14+',
			'dancehall 9-13|Dancehall 9-13 лет',
			'choreo 12-15|Choreo 12-15 лет',
			'choreo 14+|Choreo 14+',
			'shuffle 8+|Shuffle 8+',
			'ritmika 3-5|Ритмика 3-5 лет',
			'electro 10+|Electro 10+',
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

// Form Validation and Submition

// const form = document.querySelector('form');
// form.addEventListener('submit', function (e) {
// 	e.preventDefault();
// });
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

const validateForms = function (selector) {
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
			s1.innerHTML = '---';
			s2.innerHTML = '---';
			form.submit();
		},
	});
};
validateForms('.form__body');

// Style Modal Window

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

let modalStyle = document.querySelectorAll('.modal-styles');

let btnStyle = document.querySelectorAll('.info__tab__styles-item');

let spanStyle = document.querySelectorAll('.close-styles');

for (let i = 0; i < modalStyle.length; i++) {
	btnStyle[i].onclick = (e) => {
		modalStyle[i].style.display = 'grid';
	};
	for (let j of spanStyle) {
		j.onclick = (e) => {
			for (let m of modalStyle) {
				m.style.display = 'none';
			}
		};
	}
}

// Teachers Modal Window

let modalTeacher = document.querySelectorAll('.modal-teachers');

let btnTeacher = document.querySelectorAll('.info__tab__teachers-item');

let spanTeacher = document.querySelectorAll('.close-teachers');

for (let i = 0; i < modalTeacher.length; i++) {
	btnTeacher[i].onclick = (e) => {
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
window.onclick = function (e) {
	if (
		e.target.classList.contains('modal-teachers') ||
		e.target.classList.contains('modal-styles')
	) {
		for (let j of modalTeacher) {
			j.style.display = 'none';
		}
		for (let modal of modalStyle) {
			modal.style.display = 'none';
		}
	}
};
