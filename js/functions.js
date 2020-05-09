'use strict';


// 	nav link decoration
// 	======================================================
const navDecoration = function () {
	const linkHome = document.querySelector('#link-home');
	const linkAbout = document.querySelector('#link-about');
	const linkCertifiedDivers = document.querySelector('#link-certified-divers');
	const linkCourses = document.querySelector('#link-courses');
	const linkBubbleBlog = document.querySelector('#link-bubble-blog');
	const linkContact = document.querySelector('#link-contact');
	
	let line = document.createElement('div'); 
	line.style.backgroundColor = '#fff';
	line.style.height = '2px';
	line.style.width = '100px';
	line.style.marginTop = '-35px';
	line.style.marginLeft = '15px';
	
	linkHome.addEventListener('mouseenter', () => { linkHome.appendChild(line); });
	linkHome.addEventListener('mouseleave', () => { linkHome.removeChild(line); });
	
	linkAbout.addEventListener('mouseenter', () => { linkAbout.appendChild(line); });
	linkAbout.addEventListener('mouseleave', () => { linkAbout.removeChild(line); });
	
	linkCertifiedDivers.addEventListener('mouseenter', () => { linkCertifiedDivers.appendChild(line); });
	linkCertifiedDivers.addEventListener('mouseleave', () => { linkCertifiedDivers.removeChild(line); });
	
	linkCourses.addEventListener('mouseenter', () => { linkCourses.appendChild(line); });
	linkCourses.addEventListener('mouseleave', () => { linkCourses.removeChild(line); });
	
	linkBubbleBlog.addEventListener('mouseenter', () => { linkBubbleBlog.appendChild(line); });
	linkBubbleBlog.addEventListener('mouseleave', () => { linkBubbleBlog.removeChild(line); });
	
	linkContact.addEventListener('mouseenter', () => { linkContact.appendChild(line); });
	linkContact.addEventListener('mouseleave', () => { linkContact.removeChild(line); });

};


// #nav-click menu displayed || hidden
// ======================================================
const navClickDisplay = function () {
	const navBurger = document.querySelector('#nav-burger');
	const navClick = document.querySelector('#nav-click');
	
	navBurger.addEventListener('click', function () {
		if (navClick.style.display !== 'inline') {
			navClick.style.display = 'inline';
		} else {
			navClick.style.display = 'none';
		}
	});
	
};

	window.addEventListener('resize', function () {
		const navClick = document.querySelector('#nav-click');
	
		if (window.innerWidth > 1570) {
			navClick.style.display = 'none';
		}		
	});



// 	PADI logo color inversions
// 	======================================================
const padiTiny = document.querySelector('#padi-tiny');
document.querySelector('#nav-click-courses').addEventListener('mouseover', () => { padiTiny.src="../img/padi-logo-tiny-black.png"; });
document.querySelector('#nav-click-courses').addEventListener('mouseout', () => { padiTiny.src="../img/padi-logo-tiny.png"; });

const padiSmall = document.querySelector('#padi-small');
document.querySelector('#tron-padi-courses').addEventListener('mouseover', () => { padiSmall.src="../img/padi-logo-small-black.png"; });
document.querySelector('#tron-padi-courses').addEventListener('mouseout', () => { padiSmall.src="../img/padi-logo-small.png"; });


// 	#hoskentron-social image swaps
// 	======================================================
const hoskentronTripadvisor = document.querySelector('#hoskentron-tripadvisor');
document.querySelector('#hoskentron-tripadvisor').addEventListener('mouseover', () => { hoskentronTripadvisor.src="../img/layout/social-tripadvisor.png"; });
document.querySelector('#hoskentron-tripadvisor').addEventListener('mouseout', () => { hoskentronTripadvisor.src="../img/layout/social-tripadvisor-white.png"; });

const hoskentronInstagram = document.querySelector('#hoskentron-instagram');
document.querySelector('#hoskentron-instagram').addEventListener('mouseover', () => { hoskentronInstagram.src="../img/layout/social-instagram.png"; });
document.querySelector('#hoskentron-instagram').addEventListener('mouseout', () => { hoskentronInstagram.src="../img/layout/social-instagram-white.png"; });

const hoskentronFacebook = document.querySelector('#hoskentron-facebook');
document.querySelector('#hoskentron-facebook').addEventListener('mouseover', () => { hoskentronFacebook.src="../img/layout/social-fb.png"; });
document.querySelector('#hoskentron-facebook').addEventListener('mouseout', () => { hoskentronFacebook.src="../img/layout/social-fb-white.png"; });

