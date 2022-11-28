  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Trying')</title>
    <link rel= "stylesheet" href="css/new2.css">
    

</head>
<body>
	</div>
    <div class="container m">
        <ul>
        <li><a href="/uts2/public/syntax"><h3>Code</h3></a></li>
            <li><a href="/uts2/public/alat"><h3>Komponent</h3></a></li>
            <li><a href="/uts2/public/project"><h3>Project</h3></a></li>
            <li><a href="/uts2/public"><h3>Beranda</h3></a></li>
            <div class="logo">
                <h1>Sensor and Transduser</h1>
            </div>
        </ul>
    </div>

    <div class="container w">
        <h2> @yield('Konten')</h2>
   
        
    </div>
    <div class="container s">
        <large> @yield('isi')</large>
       
        
    </div>
    
    </div>
    <div class="container footer">
    <small>Copyright &copy; 2022 - DEKKRISNA.COM. All Rights Reserved.</small>
    
    </div>


</body>
<div class="wrapper">
        <project id="home">
            <div class="prjt">
                <h6>Sensor Pendeteksi Suhu Rumah</h6>
                <div class="gambar">
                    <img src="GAMBAR/gambar 7 color hidup.jpg" style="width :650px;height: 450px;">
                </div>
                <p>Cara kerja dari sensor pendeteksi suhu rumah yang dimana pada saat suhu rumah dalam keadaan panas
                    disini kita menggunakan sensor pendeteksi suhu dengn DHT11 sebagi input dari sinilah kita tau suhu dalam rumuh panas, dingin dan normal dan Len 7 color
                    sebagai output.cara kerjanya DHT11 mendeteksi suhu dalam rumah apa bila suhu dalam rumah panas maka 
                    len 7 color akan hidup atau mengeluarkan banyak warna, bila suhu dalam rumah keadan dalaman rumah normal makan len 7 color mati 
                    dan jika normal juga lampu dalam rumah mati 
                    </p>    
            </div>
        </project>
</html>