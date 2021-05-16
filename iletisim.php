<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYZA ERKAN</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
	<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark  static-top" style="background-color:#0f2f4e;">
	<div class="container">
	  <a class="navbar-brand" href="index.html">
		Beyza Erkan
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
		aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item ">
			<a class="nav-link" href="../index.html">Hakkımda</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../ozgecmis.html">Özgeçmiş</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../ilgialanlarım.html">İlgi Alanlarım</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../sehrim.html">Şehrim
			</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../mirasımız.html">Mirasımız</a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link" href="../iletisim.html">İletişim</a>
			<span class="sr-only">(current)</span>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="../login.html">Login</a>
		  </li>
		</ul>
	  </div>
	</div>
  </nav>

  <table class="table container " id="form">
		<thead>
			<tr>
				<th scope="col">Bilgiler</th>
				<th scope="col">Kişi</th>   
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">İsim</th>
				<td><?php echo $_POST["isim"]?></td>
			</tr>
			<tr>
				<th scope="row">Soyisim</th>
				<td><?php echo $_POST["soyisim"]?></td>
			</tr>
			<tr>
				<th scope="row">Email</th>
				<td><?php echo $_POST["email"]?></td>
			</tr>
			<tr>
				<th scope="row">Cinsiyet</th>
				<td><?php echo $_POST["cinsiyet"]?></td>
			</tr>
			<tr>
				<th scope="row">Mesaj Gönderilme Sebebi</th>
				<td><?php echo $_POST["sebep"]?></td>
			</tr>
      <tr>
				<th scope="row">Bizi Nereden Buldunuz?</th>
				<td><?php $secimler=$_POST['secim']; foreach($secimler as $secim){echo" ".$secim;}?></td>
			</tr>
			<tr>
				<th scope="row">Mesaj</th>
				<td><?php echo $_POST["mesaj"]?></td>
			</tr>
		</tbody>
	</table>



  <footer class="footer-basic">
    <div class="social">
      <a href="https://www.instagram.com/beyza_erkann/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.youtube.com/channel/UC6Ld2lO7ly46NhSVXVFvONQ/featured" target="_blank"><i class="fab fa-youtube"></i></i></a>
      <a href="https://github.com/beyzaerkan" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/in/beyza-erkan-0006171b6/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="index.html">Hakkımda</a></li>
      <li class="list-inline-item"><a href="ozgecmis.html">Özgeçmiş</a></li>
      <li class="list-inline-item"><a href="ilgialanlarım.html">İlgi Alanlarım</a></li>
      <li class="list-inline-item"><a href="sehrim.html">Şehrim</a></li>
      <li class="list-inline-item"><a href="mirasımız.html">Mirasımız</a></li>
      <li class="list-inline-item"><a href="iletisim.html">İletişim</a></li>
      <li class="list-inline-item"><a href="login.html">Login</a></li>
    </ul>
    <p class="copyright">Beyza Erkan © 2021</p>
</footer>
</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
