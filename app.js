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

let category = document.getElementById('style');
document.getElementById('studio').onchange = function () {
	let optionSelected = this.options[this.selectedIndex];
	if (optionSelected.textContent != '') {
		if (optionSelected.dataset.val === '6-я Линия, 97') {
			category.value = 'Choreo';
		} else if (optionSelected.dataset.val === 'Степанца 10/2') {
			category.value = 'Shuffle';
		} else if (optionSelected.dataset.val === '9-я Ленинская, 5') {
			category.value = 'Hip-Hop';
		} else {
			category.value = '-';
		}
	} else {
		category.value = '';
	}
};
