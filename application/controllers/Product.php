<?php
class Product extends CI_Controller {

	private $produk_nutrisi = [];
	private $produk_kosmetik = [];

	public function Nutrisi()
	{

				/* assets untuk header data */
		$data['produk_nutrisi'] = ['1.png','2.png', '3.png', '4.png', '5.png','6.png', '7.png'];
		$data['title_nutrisi'] = ['TWA Voira', 'GCS Revivar', 'SPK Banelo', 'ACB Cardiavas', 'MED Virginia', 'RCC Coffee', 'MPA Propolis'];
		$data['modal_nutrisi'] = ['twa', 'gcs', 'spk', 'acb', 'med', 'rcc', 'mpa'];

	$data['twa'] = '<h2 class="display-5">TWA VOIRA</h2>
					<blockquote class="blockquote">
					<p class="mb-0">Minuman Serbuk Rasa Tomat Wortel Apel</p>
					<footer class="font-weight-bold text-primary blockquote-footer">POM NO: MD 867013058071</footer>
					<small>
					1 Box @10 sachet @20 gram<br/>
					HARGA NON-MEMBER 720,000 � MEMBER 600,000<br/>
					</small>
					</blockquote>
					<h4 class="display-5">INGREDIENTS:</h4>
					<small>
					Ekstrak Buah Tomat. Ekstrak Wortel.<br/>
					Ekstrak Buah Apel. Ekstrak Biji Anggur. Ekstrak Buah<br/>
					Strawberry. L Glutathione.<br/>
					</small>

					<h4 class="display-5">CARA MINUM:</h4>

					<p>Campurkan 1 sachet dengan 200ml air biasa, aduk.</p>

					<p>Lalu minum 1 jam sebelum tidur.</p>';

	$data['gcs'] = '<h2 class="display-5">GCS REVIVAR</h2>

					<blockquote class="blockquote">
					<p class="mb-0">Minuman Serbuk Rasa Anggur Dan Susu</p>

					<footer class="font-weight-bold text-primary blockquote-footer">POM NO: MD 867013071071</footer>

					<small>
					1 Box @10 sachet @20 gram<br/>
					HARGA NON-MEMBER 720,000 � MEMBER 600,000<br/>
					</small>

					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>

					<small>
					L Glutathione. Fish Collagen. Spirulina.
					Extrak Buah Apel. Ekstrak Buah Anggur.
					EkstrakBuah Strawberry. Fibersol.
					</small>

					<h4 class="display-5">CARA MINUM: </h4>
					<small>
					Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>
					Lalu minum 1 jam sebelum tidur.<br/>
					</small>';

	$data['spk'] = '<h2 class="display-3">SPK BANELO</h2>

					<blockquote class="blockquote">
					<p class="mb-0">Minuman Serbuk Rasa PISANG MANIS</p>
					<footer class="font-weight-bold text-primary blockquote-footer">DINKES PIRT NO: 5133515700746 � 23</footer>
					<small>
					1 Box @10 sachet @20 gram<br/>
					HARGA NON-MEMBER 720,000 � MEMBER 600,000
					</small></blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Ekstrak buah pisang, Vit A, Vit B1, B2, B6 . B12, Vit C, Vit D, Kalium,<br/>
					Kalsium, Fosfor, Besi, Sodium, Zinc, Magneisum, Serat,<br/>
					Resistant Strach (Pati Resisten), Serat Gandum. Ekstrak<br/>
					Kopi Hijau. Psilium Husk. Serat Jagung. Rumput laut.,<br/>
					L Carnitin. L Glutathione. Citosan. Laktobasilus Parasasae.<br/>
					Ekstrak Buah Lemon. Ekstrak Kunyit.
					</small>
					<h4 class="display-5">CARA MINUM: </h5>
					<small>
					Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>
					Lalu minum 1 jam sebelum makan terakhir.<br/>
					</small>';

	$data['acb'] = '<h2 class="display-3">ACB CARDIAVAS</h2>
					<blockquote class="blockquote">
					<p class="mb-0">Minuman Serbuk Rasa Apel Merah</p>
					<footer class="font-weight-bold text-primary blockquote-footer">POM NO: MD 867013189071</footer>

					<small>
					1 Box @10 sachet @20 gram<br/>
					HARGA NON-MEMBER 720,000 � MEMBER 600,000
					</small>

					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>

					<small>
					Ekstrak Buah Apel. Co-Enzim Q 10. Beta Glukan.<br/>
					Serat Jagung. Serat Gandum. Serat Jeruk.<br/>
					A A   D H A  E P A . Ekstrak Hati Ikan Hiu.<br/>
					74 Mineral Tumbuhan. Vitamin C. Omega 3,6,9.<br/>
					Citosan. Vitamin E. Kayu Manis.<br/>
					</small>

					<h4 class="display-5">CARA MINUM: <h4>
					<small>
					Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>
					Lalu minum. 1 jam sebelum tidur.<br/>
					</small>';

	$data['med'] = '<h2 class="display-3">MED VIRGINIA</h2>

					<blockquote class="blockquote">
					<p class="mb-0">Minuman Serbuk Rasa Cokelat</p>
					<footer class="font-weight-bold text-primary blockquote-footer">POM NO. MD 867013185071</footer>
					<small>
					1 Box @10 sachet @20 gram<br/>
					HARGA NON-MEMBER 720,000 � MEMBER 600,000<br/>
					</small>
					<blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Ekstrak semangka. Ekstrak delima putih. Ekstrak cokelat.<br/>
					Rumput Fatimah. Kayu rapet. Asam jawa.<br/>
					L-Arginin. Dan Ekstrak buah lainnya.<br/.
					</small>

					<h4 class="display-5">CARA MINUM: </h4>
					<small>
					Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>
					Lalu minum 1 jam sebelum tidur.<br/>
					</small>';

	$data['rcc'] = '<h2 class="display-3">RCC COFFEE</h2>
					<blockquote class="blockquote">
					<p class="mb-0">Minuman Serbuk Kopi Karamel</p>
					<footer class="font-weight-bold text-primary blockquote-footer">DINKES P-IRT NO. 5133515900746-24 </footer>
					<small>
					1 Box @12 sachet @20 gram<br/>
					HARGA NON-MEMBER 456,000 � MEMBER 380,000<br/>
					</small>
					</blockquote>

					<h4 class="display-5">INGREDIENTS:</h4>
					<small>
					Ekstrak Kopi & Karamel. L Arginin. Ekstrak Buah Semangka.<br/>
					Ekstrak Buah Manggis. Ekstrak Serat Jeruk. Ekstrak Buah Kurma.<br/>
					Ekstrak Kayu Manis. Ekstrak Tebu.<br/>
					</small>

					<h4 class="display-5">CARA MINUM: </h4>
					<small>
					Campurkan 1 sachet dengan 200ml air panas, aduk.<br/>
					Lalu minum.<br/>
					</small>';

	$data['mpa'] = '<h2 class="display-3">MPA PROPOLIS</h2>
					<blockquote class="blockquote">
					<p class="mb-0">Nutrisi Tetes Lebah Madu Propolis Anise</p>
					<footer class="font-weight-bold text-primary blockquote-footer">DINKES P-IRT NO. 8093515910746-24</footer>
					<small>
					1 Box @3 BOTOL @10 ML<br/>
					HARGA NON-MEMBER 720,000 � MEMBER 600,000<br/>
					</small></blockquote>

					<h4 class="display-5">INGREDIENTS:</h4>
					<small>
					Madu Trigona,  Propolis, Anise <br/>
					</small>

					<h4 class="display-5">CARA MINUM: </h4>
					<small>
					Campurkan 5/10 tetes kedalam 150ml air biasa/hangat,<br/>
					aduk dengan sendok plastik. Lalu minum.<br/>
					</small>';

		$data['img_fluid'] = [
								'1' => 'WEB 2020 4',
								'2' => 'WEB 2020 A',
								'3' => 'WEB 2020 4A'
							];
		$data['smooth_page'] = '';
		$data['nutrisi_page'] = 'nutrisi';
		$data['nutrisi'] = 'Nutrisi';
		$data['title']="Product Nutrisi";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');


		$this->load->view('front-end/work/header.php', $data);
		$this->load->view('front-end/work/product/nutrisi/index.php');
		$this->load->view('front-end/chat.php');
		$this->load->view('front-end/chat2.php');
		$this->load->view('front-end/whatsapp.php');
    $this->load->view('front-end/work/footer.php');
	}

	public function kosmetik()
	{
					/* assets untuk header data */
		$data['produk_kosmetik'] = ['8.png','9.png', '10.png', '11.png', '12.png', '13.png', '14.png', '15.png', '16.png'];
		$data['title_kosmetik'] = ['FIXUP Series', 'Lipmate Cantik', 'First Sight', 'Smoth & Shine', 'Bea Ultimate', 'Sweet Escape', 'Aquafire', 'Divinity', 'Bio Essence'];
		$data['modal_kosmetik'] = ['fixup', 'cantik', 'firstsight', 'smothshine', 'beaultimate','sweetescape','aquafire','divinity','bioessence'];

		$data['fixup'] = '<h4 class="display-4">FIXUP SERIES</h4>
					<blockquote class="blockquote">
					<footer class="font-weight-bold text-primary blockquote-footer">Whitening Body Series</footer>
					<small>Day Body Serum � Body Wash � Night Body Serum</small><br/>
					<b>DAY BODY SERUM:</b> POM NA 18160104069 � 175 ML<br/>
					<b>BODY WASH : </b> POM NA 18160701459 � 200 ML<br/>
					<b>NIGHT BODY SERUM: </b> POM NA 18160104068 � 175 ML<br/>
					HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600.000
					</blockquote>

					<h4 class="display-5">INGREDIENTS:</h4>

					<small>
					Ekstrak Bengkoang, Ekstrak Apel, Ekstrak Lidah Buaya,<br/>
					Glutathione, Collagen,  Vitamin C, UV Filter.<br/>
					</small>

					<h4 class="display-5">CARA PAKAI:</h4>
					<small>
					Aplikasikan keseluruh kulit tubuh secara merata.<br/>
					</small>';

		$data['cantik'] = '<h4 class="display-4">NEW CANTIK GLOW LIPMATTE SERIES</h4>

					<blockquote class="blockquote">
					<footer class="font-weight-bold text-primary blockquote-footer">
						Color: Plum � Nude � Honey � Barbie � Rose<br/>
					</footer>

					<small>
						PLUM POM NA 1818130263802<br/>

						NUDE POM NA 1818130263703<br/>

						HONEY POM NA 1818130264104<br/>

						BARBIE POM NA 1818130263905<br/>

						ROSE POM NA 18181302640<br/>


					HARGA PAKET NON MEMBER IDR 720.000 - MEMBER IDR 600.000.<br/>

					HARGA SATUAN NON MEMBER @IDR 144.000 - MEMBER @IDR 120.000.<br/>
					</small>

					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Isododocane. Stearakonium Bntonite. Beeswax. Silica.<br/>
					Irvingia Gabonensis kernel Butter. <br/>
					Hydrogen Dimethicone. Food grade color. <br/>
					</small>

					<h4 class="display-5">CARA PAKAI: </h4>
					<small>
					Aplikasikan kuas lipcream ke bibir secara merata.
					</small>';

		$data['firstsight'] = '<h4 class="display-4">NEW OURCITRUS BEA ULTIMATE FIRST SIGHT LIPCREAM SERIES</h4>

					<blockquote class="blockquote">

					<small>Color: Isabel Red - Safron Red - Xantre Beige - Bianca Natural</small>
					<footer class="font-weight-bold text-primary blockquote-footer">
					ISABEL RED POM NA 18181303648<br/>
					SAFRON RED POM NA 18181303647<br/>
					XANTRE BEIGE POM NA 18181303646<br/>
					BIANCA NATURAL POM NA 18181303645
					</footer>
					HARGA PAKET NON MEMBER IDR 720,000 - MEMBER IDR 600,000.<br/>
					HARGA SATUAN NON MEMBER @IDR 180,000. MEMBER IDR150,000
					</p>
					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Isododocane. Stearakonium Bntonite.<br/>
					Beeswax. Silica.<br/>
					Irvingia Gabonensis kernel Butter.<br/>
					Kopi Hijau. Psilium Husk. Serat Jagung. Rumput laut.,<br/>
					Hydrogen Dimethicone. Food grade color.<br/>
					</small>

					<h4 class="display-5">CARA PAKAI: </h5>
					<small>
					Aplikasikan kuas lipcream ke bibir secara merata.
					</small>';

		$data['smothshine'] = '<h4 class="display-4">OURCITRUS BEA ULTIMATE HAIR CARE SERIES SMOOTH & SHINE</h4>
					<blockquote class="blockquote">
					<small>Hair Shampoo - Hair Conditioner - Hair Serum</small>
					<footer class="font-weight-bold text-primary blockquote-footer">POM NO: MD 867013189071</footer>
					<small>
					SHAMPOO POM NA 18171002247 @250ML<br/>
					CONDITIONER POM NA 18171002282 @250ML<br/>
					HAIR SERUM POM NA 18171002255 @30ML<br/><br/>

					HARGA NON-MEMBER 720,000 � MEMBER 600,000<br/>
					HARGA SHAMPOO NON MEMBER IDR 120,000 - MEMBER IDR 100,000<br/>
					HARGA CONDITIONER NON MEMBER IDR 180,000 - MEMBER IDR 150,000<br/>
					HARGA HAIR SERUM NON MEMBER IDR 120,000 - MEMBER IDR 100,000<br/>
					</small>
					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Sodium Methyl Cocoyl Taurate, Hydroxyetil Urea,<br/>
					Polyquaternium-71, Biscatearyl Amodimethicone,<br/>
					Panthenyl Triacetate, Retinyl Palmitate, Tocopherol, Inositol. Biotin.<br/>
					Citosan. Vitamin E. Kayu Manis.<br/>
					</small>

					<h4 class="display-5">CARA PAKAI: <h4>
					<small>
					Bilas rambut dengan air hangat untuk membuka pori-pori rambut. Tuangkan shampoo di telapak tangan secukupnya. lalu oleskan merata di kulit kepala saja. sambil memijatnya perlahan dengan menggunakan ujung jari.<br/>
					Bilas rambut sampai bersih, hingga tidak ada busa yang tertinggal.<br/>
					Gunakan kondisioner dari bagian tengah hingga ujung rambut. Diamkan selama beberapa menit. untuk memberi waktu kepada kutikula rambut, menyerap kandungan yang ada dalam kondisioner. kemudian bilas dengan air<br/>
					dingin, untuk menutup pori-pori, sehingga rambut tetap terjaga kelembabannya.<br/>
					Usap rambut dengan handuk sampai setengah kering. Dan aplikasikan Serum rambut. mulai dari   tengah hingga ke ujung rambut. sambil menyisirnya dengan tangan agar rambut ternutrisi. dan menjadi rambut menjadi<br/> lebih lembut. biarkan mengering secara alami.<br/>
					</small';

		$data['beaultimate'] = '<h4 class="display-4">OURCITRUS BEA ULTIMATE BODY TREATMENT</h4>
					<blockquote class="blockquote">
					<small>Body Scrub- Body Wash - Body Serum</small>
					<footer class="font-weight-bold text-primary blockquote-footer">POM NO: MD 867013189071</footer>
					<small>
					BODY SCRUB POM NA 18170701139  @180GR<br/>
					BODY WASH POM NA 18170701140  @250ML<br/>
					BODY SERUM POM NA 18170103800 @120GR<br/><br/>

					HARGA BODY SCRUB NON MEMBER IDR 180,000 - MEMBER IDR 150,000<br/>
					HARGA BODY WASH NON MEMBER IDR 120,000 - MEMBER IDR 100,000<br/>
					HARGA BODY SERUM NON MEMBER IDR 120,000 - MEMBER IDR 100,000<br/>
					</small>
					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Oriza Sativa Starch. Corn Starch. Aloe Barbadensis Leaf Juice. Niacinamid. Collagen.<br/>
					Glutathione.
					</small

					<h4 class="display-5">CARA PAKAI: <h4>

					<small>
					Basahi sabun dengan air dan usapkan di tubuh hingga berbusa lalu bilas hingga bersih. Gunakan sabun setiap kali mandi.<br/>
					Bilas kulit dengan air hangat untuk melembutkan kulit dan kemudian usapkan scrub dengan gerakan melingkar. Sangat penting untuk menjaga tekanan yang lembut sehingga tidak akan merusak kulit. <br/>
					Anda dapat mulai di area mana pun yang paling nyaman dan menyenangkan. Tapi. jangan lupa untuk fokus pada area yang kering. Seperti. siku dan tumit. Lalu bilas kembali dengan air hangat hingga bersih. <br/>
					Setelah mandi. usap dan ratakan body serum di seluruh kulit tubuh yang masih segar. Kondisi kulit yang baru dibersihkan, membuat formulanya bisa meresap dan bekerja lebih baik.<br/>
					</small>';

		$data['sweetescape'] = '<h4 class="display-4">LADIES EAU DE TOILETTE NATURAL SWEET ESCAPE</h4>
					<blockquote class="blockquote">

					<small>Body Scrub- Body Wash - Body Serum</small>

					<footer class="font-weight-bold text-primary blockquote-footer">POM NA15170601731 � 80 ML.</footer>

					HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600,000<br/>

					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>

					<small>
					Ekstrak Bunga Freesia, Ekstrak Bunga Hutan Eropa dan Ekstrak Mentimun.
					</small>

					<h4 class="display-5">CARA PAKAI: <h4>
					<small>
					Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan<br/>
					tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu<br/>
					yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan<br/>
					terbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak<br/>
					15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata.<br/>
					</small>';

		$data['aquafire'] = '<h4 class="display-4">GENTLEMEN EAU DE TOILETTE NATURAL AQUAFIRE</h4>
					<blockquote class="blockquote">

					<footer class="font-weight-bold text-primary blockquote-footer">POM NO: NA18170601728 � 100 ML</footer>

					<small>
					HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600,000<br/>
					</small>
					</blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Ekstrak Buah Jeruk Nipis, Ekstrak Buah Jeruk Mandarin,<br/>Ekstrak Buah Lemon, Embun Dedaunan dan Embun Laut.<br/>
					</small>

					<h4 class="display-5">CARA PAKAI: <h4>
					<small>
					Semprotkan dibagian-bagian panas tubuh, seperti: leher,<br/>
					pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu<br/>
					yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan<br/>
					terbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak<br/>
					15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata.<br/>
					</small>';

		$data['divinity'] = '<h4 class="display-4">GENTLEMEN EAU DE TOILETTE NATURAL DIVINITY</h4>
					<blockquote class="blockquote">

					<footer class="font-weight-bold text-primary blockquote-footer">POM NA18170601730 � 100 ML.</footer>
					<small>
					HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600,000<br/>
					</small>
					</blockquote>
					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Ekstrak Bunga Teratai, Ekstrak  Buah Bergamot,<br/> Ekstrak Daun Violet dan Ekstrak Buah Pear Putih.<br/>
					</small>

					<h4 class="display-5">CARA PAKAI: <h4>
					<small>
					Semprotkan dibagian-bagian panas tubuh, seperti: <br/>
					leher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu<br/>
					yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan<br/>
					terbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak<br/>
					</small>';

		$data['bioessence'] = '<h4 class="display-4">OURCITRUS  EXE PROFESSIONAL BIO ESSENCE  DAY AND NIGHT</h4>
					<blockquote class="blockquote">

					<footer class="font-weight-bold text-primary blockquote-footer">
						DAY SPRAY POM NA 18171205595 @60ML<br/>
						NIGHT SPRAY POM NA 18171205596 @110ML<br/>
					</footer>
					<small>
					HARGA DAY SPRAY NON MEMBER IDR 576,000 - MEMBER IDR 480,000<br/>
					HARGA NIGHT SPRAY NON MEMBER IDR 864,000 - MEMBER IDR 720,000<br/>

					</small></blockquote>

					<h4 class="display-5">INGREDIENTS: </h4>
					<small>
					Ekstrak Daun Zaitun, Ekstrak Buah Tin, Ekstrak Panax Ginseng, Ekstrak Daun Sirih.<br/>

					<h4 class="display-5">CARA PAKAI: <h4>
					<small>
					Botol dikocok terlebih dahulu. Semprotkan kebagian kulit yang bermasalah:<br/>
					Untuk keperluan peremajaan kulit, setelah disemprotkan, kulit dipijat halus sampai kesat.<br/>
					Untuk menghilangkan jerawat, sebaiknya muka dibersihkan dengan air hangat, agar pori-pori kulit terbuka dan spray bisa meresap.<br/>
					Untuk membantu mengatasi luka, bagian luka dibersihkan dengan air terlebih dahulu agar<br/>
					kotoran tidak menempel dibagian luka. Lalu semprotkan spray secara merata.
					</small>';


		$data['img_fluid'] = [
								'1' => 'WEB 2020 4',
								'2' => 'WEB 2020 A',
								'3' => 'WEB 2020 4A'
							];

		$data['smooth_page'] = '';
		$data['kosmetik_page'] = 'kosmetik';
		$data['kosmetik'] = 'Produk Kosmetik';
		$data['title']="Product Kosmetik";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');


		$this->load->view('front-end/work/header.php', $data);
		$this->load->view('front-end/work/product/kosmetik/index.php');
		$this->load->view('front-end/chat2.php');
		$this->load->view('front-end/whatsapp.php');
    $this->load->view('front-end/work/footer.php');
	}

}
