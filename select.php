<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>SELECT Statement</title>
	</head>
	
	<body>
		<nav>
			<a class="logo" href="index.php"><img src="img/logo.png"></a>
			<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
			<ul>
				<li><a href="sandbox.php">SQL Sandbox</a></li>
			</ul>
		</nav>
		<main>
			<div class="row">
				<aside class="col-20">
					<ul>
						<li><a href="index.php">Halaman Utama</a></li>
						<li class="active">SELECT Statement</li>
						<li><a href="where.php">Kondisi WHERE</a></li>
						<li><a href="distinct.php">Distinct</a></li>
						<li><a href="andornot.php">And, Or, Not</a></li>
						<li><a href="orderby.php">Order By</a></li>
						<li><a href="like.php">Like</a></li>
						<li><a href="in.php">In</a></li>
						<li><a href="between.php">Between</a></li>
						<li><a href="alias.php">Alias</a></li>
						<li><a href="sandbox.php">SQL Sandbox</a></li>
					</ul>
				</aside>
				<div id="content" class="col-80">
					<h1>SELECT Statement</h1>
					<div class="btn-ctr">
						<a href="index.php" class="btn left"><i class="fa fa-chevron-left"></i>Halaman Utama</a>
						<a href="where.php" class="btn right">Materi Selanjutnya<i class="fa fa-chevron-right"></i></a>
					</div>
					<div class="line"></div>
					<section>
						<h2>SELECT Statement</h2>
						<p>SELECT digunakan untuk memilih data yang ada di dalam database.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT * FROM nama_tabel</p>
							</div>
						</div>
					</section>
					<div class="line"></div>
					<section>
						<h2>SELECT Kolom</h2>
						<p>SELECT kolom digunakan untuk memilih kolom tertentu yang ada di dalam database.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT kolom1, kolom2, ... FROM nama_tabel</p>
							</div>
						</div>
					</section>
					<div class="line"></div>
					<section>
						<h2>SELECT All</h2>
						<p>SELECT all digunakan untuk mengambil semua data dari semua kolom dalam database.</p>
						<h3>Sintax dasar</h3>
						<div class="syntax">
							<div class="syntax-inner">
								<p>SELECT * FROM nama_tabel</p>
							</div>
						</div>
					</section>
					<div class="line"></div>
					<section id="example">
						<h2>Contoh Query</h2>
						<p>Tabel contoh merupakan tabel barang dengan struktur dan isi di bawah ini</p>
						<table>
							<tr>
								<th>ID</th>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Stok</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Teh Botol X</td>
								<td>Minuman</td>
								<td>50</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Wafer Y</td>
								<td>Makanan</td>
								<td>40</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Air Mineral Z</td>
								<td>Minuman</td>
								<td>100</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Roti Tawar D</td>
								<td>Makanan</td>
								<td>25</td>
							</tr>
						</table>
						<p>Di bawah ini merupakan contoh query SELECT, silahkan ubah query jika anda ingin mencoba sendiri</p>
						<div id="sandbox">
							<textarea id="theQuery"rows="5" cols="33" required>select * from barang</textarea>
							<button id="exec" class="btn">EKSEKUSI</button>
						</div>
						<h2>Hasil Query</h2>
					</section>
					<div class="btn-ctr">
						<a href="index.php" class="btn left"><i class="fa fa-chevron-left"></i>Halaman Utama</a>
						<a href="where.php" class="btn right">Materi Selanjutnya<i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>