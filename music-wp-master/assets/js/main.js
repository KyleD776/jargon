window.addEventListener('load', function () {
	const mobile_open_btn = document.querySelector('.mobile-open-btn');
	const mobile_close_btn = document.querySelector('.mobile-close-btn');
	const mobile_nav = document.querySelectorAll('.mobile-nav');

	mobile_open_btn.addEventListener('click', () => {
		console.log('clicked');
		mobile_nav.forEach(nav_el => { nav_el.classList.add('visible') });
	});
	
	mobile_close_btn.addEventListener('click', () => {
		mobile_nav.forEach(nav_el => { nav_el.classList.remove('visible') });
	});
  });



