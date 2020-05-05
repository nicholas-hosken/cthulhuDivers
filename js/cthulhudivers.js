const navHot = function () {
	'use strict';
	
	const linkHome = document.querySelector('#link-home');
	const linkAbout = document.querySelector('#link-about');
	const linkCertifiedDivers = document.querySelector('#link-certified-divers');
	const linkCourses = document.querySelector('#link-courses');
	const linkBubbleBlog = document.querySelector('#link-bubble-blog');
	const linkContact = document.querySelector('#link-contact');
	let line = document.createElement('div'); 
	let lineTarp = document.createElement('div');
	
	line.style.backgroundColor = '#fff';
	line.style.height = '2px';
	line.style.width = '130px';
	line.style.marginTop = '-20px';
	
	linkHome.addEventListener('mouseenter', () => { linkHome.appendChild(line); });
	linkHome.addEventListener('mouseleave', () => { linkHome.removeChild(line).removeChild(lineTarp); });
	
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

navHot();