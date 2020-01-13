// event pada saat link di klik
$('.page-scroll').on('click', function(e){
	//ambil element href
	var tujuan = $(this).attr('href');
	//tangkap elemennya (bagian <section>)
	var elemenTujuan = $(tujuan);
	
	// pindahkan scroll
	$('body').animate({
		scrollTop: elemenTujuan.offset().top - 40
	}, 1250, 'easeInOutExpo');
	//e.preventDefault();
});