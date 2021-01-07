$(function() {
	var slider = new MasterSlider();
	slider.setup('masterslider' , {
		loop: true,
		width: 230,
		height: 230,
		speed: 20,
		view: 'fadeBasic',
		preload: 0,
		space: 0,
		wheel: false
	});
	slider.control('arrows');
	slider.control('slideinfo',{insertTo:'#staff-info'});
});
