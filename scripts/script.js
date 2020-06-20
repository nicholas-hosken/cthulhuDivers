// Toggle #burger animation & #nav-click display
// ======================================================
const burger = document.querySelector('#burger');
const navClick = document.querySelector('#nav-click');
const navOverlay = document.querySelector('#nav-overlay');
burger.addEventListener('click', () => { 
	burger.classList.toggle('cross');
	if (navClick.style.display !== 'block') {
		navClick.style.display = 'block';
		navOverlay.style.display = 'block';
	} else {
		navClick.style.display = 'none';
		navOverlay.style.display = 'none';		
	}
});
navOverlay.addEventListener('click', function () {
	if (navClick.style.display === 'block') {
		burger.classList.remove('cross');
		navClick.style.display = 'none';
		navOverlay.style.display = 'none';
	}
})
window.addEventListener('resize', function () {
	if (window.innerWidth > 800) {
		burger.classList.remove('cross');
		navClick.style.display = 'none';
		navOverlay.style.display = 'none';
	}		
});

//  Swap PADI image in #nav-click
// ======================================================
const navClickCourses = document.querySelector('#nav-click-courses');
const padiTiny = document.querySelector('#padi-tiny');
navClickCourses.addEventListener('mouseover', () => {
	document.getElementById('padi-tiny').src='../img/padi-logo-tiny-black.png'
})
navClickCourses.addEventListener('mouseout', () => {
	document.getElementById('padi-tiny').src='../img/padi-logo-tiny.png'
})

// 	#hoskentron-social image swaps
// 	======================================================
const hoskentronTripadvisor = document.querySelector('#hoskentron-tripadvisor');
const hoskentronInstagram = document.querySelector('#hoskentron-instagram');
const hoskentronFacebook = document.querySelector('#hoskentron-facebook');
const hoskentronTwitter = document.querySelector('#hoskentron-twitter');

hoskentronTripadvisor.addEventListener('mouseover', () => { hoskentronTripadvisor.src="img/layout/social-tripadvisor.png"; });
hoskentronTripadvisor.addEventListener('mouseout', () => { hoskentronTripadvisor.src="img/layout/social-tripadvisor-white.png"; });
hoskentronInstagram.addEventListener('mouseover', () => { hoskentronInstagram.src="img/layout/social-instagram.png"; });
hoskentronInstagram.addEventListener('mouseout', () => { hoskentronInstagram.src="img/layout/social-instagram-white.png"; });
hoskentronFacebook.addEventListener('mouseover', () => { hoskentronFacebook.src="img/layout/social-fb.png"; });
hoskentronFacebook.addEventListener('mouseout', () => { hoskentronFacebook.src="img/layout/social-fb-white.png"; });
hoskentronTwitter.addEventListener('mouseover', () => { hoskentronTwitter.src="img/layout/social-twitter.png"; });
hoskentronTwitter.addEventListener('mouseout', () => { hoskentronTwitter.src="img/layout/social-twitter-white.png"; });