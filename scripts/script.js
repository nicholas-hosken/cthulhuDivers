// Toggle #burger animation & #nav-click display
// ======================================================
const burger = document.querySelector('#burger');
const navClick = document.querySelector('#nav-click');
const navOverlay = document.querySelector('#nav-overlay');
const sardineRun = document.querySelector('#sardine-run');
burger.addEventListener('click', () => { 
	burger.classList.toggle('cross');
	if (navClick.style.display !== 'block') {
		navClick.style.display = 'block';
		navOverlay.style.display = 'block';
		sardineRun.style.display = 'none'
	} else {
		navClick.style.display = 'none';
		navOverlay.style.display = 'none';
		sardineRun.style.display = 'block'		
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
navClickCourses.addEventListener('mouseover', () => {
	document.getElementById('#padi-tiny').src='../img/padi-logo-tiny-black.webp'
})
navClickCourses.addEventListener('mouseout', () => {
	document.getElementById('padi-tiny').src='../img/padi-logo-tiny.webp'
})


// 	#hoskentron-social image swaps
// 	======================================================
const hoskentronTripadvisor = document.querySelector('#hoskentron-tripadvisor');
const hoskentronInstagram = document.querySelector('#hoskentron-instagram');
const hoskentronFacebook = document.querySelector('#hoskentron-facebook');
const hoskentronTwitter = document.querySelector('#hoskentron-twitter');

hoskentronTripadvisor.addEventListener('mouseover', () => { hoskentronTripadvisor.src="img/layout/social-tripadvisor.webp"; });
hoskentronTripadvisor.addEventListener('mouseout', () => { hoskentronTripadvisor.src="img/layout/social-tripadvisor-white.webp"; });
hoskentronInstagram.addEventListener('mouseover', () => { hoskentronInstagram.src="img/layout/social-instagram.webp"; });
hoskentronInstagram.addEventListener('mouseout', () => { hoskentronInstagram.src="img/layout/social-instagram-white.webp"; });
hoskentronFacebook.addEventListener('mouseover', () => { hoskentronFacebook.src="img/layout/social-fb.webp"; });
hoskentronFacebook.addEventListener('mouseout', () => { hoskentronFacebook.src="img/layout/social-fb-white.webp"; });
hoskentronTwitter.addEventListener('mouseover', () => { hoskentronTwitter.src="img/layout/social-twitter.webp"; });
hoskentronTwitter.addEventListener('mouseout', () => { hoskentronTwitter.src="img/layout/social-twitter-white.webp"; });

const hoskentronTripadvisorLang = document.querySelector('#hoskentron-tripadvisor-lang');
const hoskentronInstagramLang = document.querySelector('#hoskentron-instagram-lang');
const hoskentronFacebookLang = document.querySelector('#hoskentron-facebook-lang');
const hoskentronTwitterLang = document.querySelector('#hoskentron-twitter-lang');

hoskentronTripadvisorLang.addEventListener('mouseover', () => { hoskentronTripadvisorLang.src="../img/layout/social-tripadvisor.webp"; });
hoskentronTripadvisorLang.addEventListener('mouseout', () => { hoskentronTripadvisorLang.src="../img/layout/social-tripadvisor-white.webp"; });
hoskentronInstagramLang.addEventListener('mouseover', () => { hoskentronInstagramLang.src="../img/layout/social-instagram.webp"; });
hoskentronInstagramLang.addEventListener('mouseout', () => { hoskentronInstagramLang.src="../img/layout/social-instagram-white.webp"; });
hoskentronFacebookLang.addEventListener('mouseover', () => { hoskentronFacebookLang.src="../img/layout/social-fb.webp"; });
hoskentronFacebookLang.addEventListener('mouseout', () => { hoskentronFacebookLang.src="../img/layout/social-fb-white.webp"; });
hoskentronTwitterLang.addEventListener('mouseover', () => { hoskentronTwitterLang.src="../img/layout/social-twitter.webp"; });
hoskentronTwitterLang.addEventListener('mouseout', () => { hoskentronTwitterLang.src="../img/layout/social-twitter-white.webp"; });


// 	Stop the contact page redirecting to the formspree.com thank you page.
// 	======================================================
window.addEventListener("DOMContentLoaded", function () {

	// get the form elements defined in your form HTML above
	var form = document.getElementById("my-form");
	
	// var button = document.getElementById("my-form-button");
	var status = document.getElementById("status");

	// Success and Error functions for after the form is submitted
	function success() {
		form.reset();
		status.classList.add("success");
		status.innerHTML = "Thanks!";
	}

	function error() {
		status.classList.add("error");
		status.innerHTML = "Oops! There was a problem.";
	}

	// handle the form submission event
	form.addEventListener("submit", function (ev) {
		ev.preventDefault();
		var data = new FormData(form);
		ajax(form.method, form.action, data, success, error);
	});
});



//  Helper function for sending an AJAX request
// 	======================================================

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}