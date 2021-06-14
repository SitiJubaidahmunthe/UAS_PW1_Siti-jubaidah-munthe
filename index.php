<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">

	<title>Perpustakaan</title>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!-- awal Home -->
	<div id="home">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="index.php"><img src="img/logo3.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>	
			</button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto"> 
                    <!-- meaning margin-left auto -->
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link"  href="#books">Books</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>	
		            <li class="nav-item">
		              <a class="nav-link"  href="registrasi.php">Registrasi</a>
		            </li>
					<li class="nav-item">
						<a class="nav-link"  href=login.php>Login</a>
					</li>
				</ul> 
			</div>
		</nav>

		<!-- Start of Image Slider -->
		<div id="carouselExampleIndicators" class="carousel slide" data-interval="7000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0 " class="active"></li> 
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
			</ol>
			<!-- awal carousel inner -->
			<div class="carousel-inner" role="listbox">
				<!-- slide 1 -->
				<div class="carousel-item active" style="background-image: url(img/perpustakaan.jpeg);">
					<div class="carousel-caption text-center">
						<h1>Welcome to the Library</h1>
						<h3>Have fun</h3>
						<a class="btn btn-outline-light btn-lg" href="#course">Get Started</a>
					</div>
				</div>

				<!-- slide 2 -->
				<div class="carousel-item" style="background-image: url(img/membaca1.jpg);">
					<div class="carousel-caption text-center">
						<h1>Make Reading an Interest</h1>
					</div>	
				</div>

			</div> <!-- akhir carousel inner -->

			<!-- prev dan next button -->
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div> <!-- akhir Image Slider -->
	</div>
	<!-- akhir Home -->

	
	<!-- awal about -->
	<section id="about" class="about">
		<div class="container">
			<div class="row content">
				<div class="col-lg-6">
					<h1>Library Book</h1>
					<h3>Dalam arti tradisional, perpustakaan adalah sebuah koleksi buku dan majalah serta novel. Walaupun dapat diartikan sebagai koleksi pribadi perseorangan, namun perpustakaan lebih umum dikenal sebagai sebuah koleksi besar yang dibiayai dan dioperasikan oleh sebuah kota atau institusi, serta dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli sekian banyak buku dengan biaya sendiri.</h3>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<p>
					Di Perpustakaan tersedia beberapa buku yang dapat dipinjam dan dibaca dan beberapa koleksi novel disediakan untuk masyarakat. Disini menyediakan series buku serta novel dengan pengarang buku dan novel yang terkenal dengan karya-karya nya yang menakjubkan. Berikut beberapa judul buku dan novel yang tersedia untuk masyarakat :
				    </p>
					<ul>
						<li>Laskar Pelangi</li>
						<li>Negeri 5 Menara</li>
						<li>99 Cahaya Di Langit Eropa</li>
						<li>Danur</li>
						<li>5 Cm</li>
						<li>Sherlock Holmes</li>
					</ul>
					<p class="font-italic">
						Silahkan membaca dengan nyaman di Perpustakaan..
					</p>
					
				</div>
			</div>
		</div>
	</section>

	<!-- awal Book section-->
	<div id="books" class="offset">
		<div class="col-12 text-center title">
				<h2>Books</h2>
				<div class="heading-underline"></div>
		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card">
					<img class="card-img-top" src="img/novel1.jpg">
					<div class="card-body">
						<h4 class="text-center">Laskar Pelangi</h4>
						<p class="text-justify">"Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/novel2.jpg">
					<div class="card-body">
						<h4 class="text-center">Negeri 5 Menara</h4>
						<p class="text-justify">"Negeri 5 Menara adalah sebuah film garapan Kompas Gramedia production bersama Million Pictures yang merupakan adaptasi dari novel karya Ahmad Fuadi berjudul Negeri 5 Menara. Skenario ditulis oleh Salman Aristo yang juga penulis naskah film Ayat-Ayat Cinta, Laskar Pelangi, Sang Penari . Disutradarai oleh Affandi Abdul Rachman film ini mengambil lokasi syuting di Pondok Modern Darussalam Gontor Ponorogo Jawa Timur, Sumatra Barat, Bandung, hingga London. Film ini dirilis pada 1 Maret 2012."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/novel3.jpg">
					<div class="card-body">
						<h4 class="text-center">99 Cahaya Di Langit Eropa</h4>
						<p class="text-justify">"99 Cahaya di Langit Eropa adalah film drama religi tahun 2013 dari Indonesia. Film ini adalah film ke-40 yang dirilis oleh Maxima Pictures. Film drama ini diadaptasi dari novel berjudul sama karya Hanum Salsabiela Rais dan Rangga Almahendra dan merupakan film Maxima Pictures yang termahal kala dirilis, dengan anggaran melebihi Rp 15 Miliar. Film ini mendapat pujian dari Presiden Indonesia, Susilo Bambang Yudhoyono saat pemutaran film perdana di Djakarta Theatre pada tanggal 29 November 2013."</p>
					</div>
				</div>
			</div>

		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/novel4.jpg">
					<div class="card-body">
						<h4 class="text-center">Danur</h4>
						<p class="text-justify">"Danur (rilis internasional:Danur: I Can See Ghosts) merupakan film horor Indonesia yang dirilis pada 30 Maret 2017 disutradarai oleh Awi Suryadi. Film ini diangkat dari buku karya Risa Saraswati, Gerbang Dialog Danur yang ditulis berdasarkan pengalamannya sendiri sebagai seorang gadis indigo. Film ini dibintangi oleh Prilly Latuconsina, Sandrinna Michelle, Shareefa Daanish, Indra Brotolaras, dan Kinaryosih serta memiliki jumlah penonton sebanyak 2.736.391 orang."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/novel5.jpg">
					<div class="card-body">
						<h4 class="text-center">5 Cm</h4>
						<p class="text-justify">"5 cm adalah novel karya Donny Dhirgantoro pada tahun 2005 yang diterbitkan oleh Grasindo. Novel ini menceritakan tentang perjalanan 5 sahabat yakni Arial, Riani, Zafran, Ian dan Genta. Novel ini mengajarkan tentang harapan, impian, tekad, cinta dan persahabatan. Novel ini mencetak rekor Bestseller book di Gramedia Bookstore selama 2 tahun berturut-turut. Pada tahun 2012, novel ini diadaptasi menjadi sebuah film dengan judul yang sama 5 cm."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/novel6.jpg">
					<div class="card-body">
						<h4 class="text-center">Sherlock Holmes</h4>
						<p class="text-justify">"Sherlock Holmes adalah tokoh detektif fiksi rekaan Sir Arthur Conan Doyle, seorang pengarang dan dokter berkebangsaan Skotlandia. Holmes yang menyebut dirinya sebagai seorang "detektif konsultan" ini dikenal akan ketajaman penalaran logis, kemampuan menyamar, dan keterampilannya dalam menggunakan ilmu forensik untuk memecahkan berbagai kasus."</p>
					</div>
				</div>
			</div>

		</div>

			
	</div>
	<!-- akhir Book section-->

	<!-- awal footer section-->
	<div id="contact" class="offset">
		<footer>
			<div class="row justify-content-center">
				<div class="col-md-5 text-center">
					<img class="logo" src="img/logo3.png">
					<p>"Pembaca nyaman, Kami pun senang."</p>
					<strong>Contact Info</strong>
					<p>(888) 888-8888 <br> email@library.com</p>

					<a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
					<a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
					<a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
				</div>

				<hr class="socket">
				&copy; Library Books.
			</div> <!-- end of row -->
		</footer>
	</div> <!-- Akhir footer section-->

	<!-- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>