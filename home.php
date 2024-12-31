<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilau Hijab</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik">
    <style>
   /* General styles */
body {
    font-family: 'Rubik', sans-serif;
    margin: 0;
    padding: 0;
    color: #444;
    background-color: #faf8f4;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: linear-gradient(90deg, #f4efe4, #d4a373);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

header img {
    height: 60px;
}

nav a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    margin: 0 20px;
    transition: color 0.3s, transform 0.3s;
    font-size: 1rem;
}

nav a:hover {
    color: #7a5230;
    transform: scale(1.1);
}

h1, h2, h3 {
    color: #7a5230;
    font-family: 'Spectral', serif;
}

/* Hero section */
#home {
    position: relative;
    text-align: center;
    background: linear-gradient(to bottom right, #d4a373, #f4efe4);
    color: white;
    padding: 0;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}

#home img {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

#home div {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    background-color: rgba(216, 211, 211, 0.5);
    padding: 20px;
    border-radius: 10px;
}

#home h1 {
    font-size: 3rem;
    letter-spacing: 2px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

#home p {
    font-size: 1.3rem;
    margin-top: 15px;
    color: black;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

/* About section */
#about {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    padding: 20px;
}

.about-content {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

#about img {
    width: 150px; /* Memperkecil ukuran gambar */
    height: auto;
    border-radius: 10px;
}

.text-container {
    max-width: 600px;
}

#about h3 {
    font-size: 1.5rem;
    color: #333;
    margin-top: 0;
}

#about p {
    font-size: 1rem;
    color: #666;
}

#about ol {
    font-size: 1rem;
    color: #444;
    margin-top: 10px;
}

#about ol li {
    margin-bottom: 10px;
}

/* Sections */
section {
    padding: 50px 30px;
}

section h2 {
    text-align: center;
    margin-bottom: 30px;
    border-bottom: 3px solid #d4a373;
    display: inline-block;
    padding-bottom: 10px;
    font-size: 2rem;
}

section div {
    margin-bottom: 30px;
}

/* Product cards */
#produk {
    display: flex;
    flex-direction: column;
    gap: 30px;
    align-items: center;
}

#produk div {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    padding: 25px;
    width: 80%;
    transition: transform 0.3s, box-shadow 0.3s;
}

#produk div:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

#produk img {
    max-height: 250px;
    width: auto;
    border-radius: 10px;
    border: 2px solid #d4a373;
}

#produk h3 {
    margin: 20px 0 15px 0;
    text-align: center;
}

#produk p {
    margin: 5px 0;
    text-align: center;
}

#produk button {
    background: linear-gradient(90deg, #d4a373, #7a5230);
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: bold;
    transition: background 0.3s, transform 0.3s;
}

#produk button:hover {
    background: linear-gradient(90deg, #7a5230, #d4a373);
    transform: scale(1.05);
}

#produk > div > div a {
    display: inline-block;
    padding: 12px 24px;
    background-color: #7a5230;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

/* Efek Hover pada Tombol Beli */
#produk > div > div a:hover {
    background-color: #d4a373;
    transform: scale(1.05);
}

/* Info */
/* Styling untuk bagian info */
#info {
    padding: 50px 30px;
    text-align: center;
    background-color: #f9f9f9;
    box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.1);
}

#info h2 {
    font-size: 2.5rem;
    color: #7a5230;
    margin-bottom: 30px;
    border-bottom: 3px solid #d4a373;
    display: inline-block;
    padding-bottom: 10px;
    font-family: 'Spectral', serif;
}

/* Container untuk produk-produk */
.product-container {
    display: flex;
    justify-content: center;
    gap: 30px; /* Jarak antar card */
    align-items: flex-start; /* Sesuaikan posisi vertikal */
    margin-top: 20px;
    flex-wrap: nowrap; /* Jangan biarkan card terbungkus ke baris berikutnya */
    overflow-x: auto; /* Tambahkan scrollbar horizontal jika card melebihi lebar kontainer */
    padding: 10px 0;
}

/* Card produk */
.product-card {
    flex: 0 0 auto; /* Card tetap pada ukuran aslinya */
    width: 300px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    transform: scale(1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

/* Kontainer gambar */
.image-container {
    position: relative;
    overflow: hidden;
    height: 200px;
    background: #f4efe4;
}

.product-card img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Ikon diskon */
.discount-icon {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 50px;
    height: auto;
}

/* Detail produk */
.product-details {
    padding: 20px;
    text-align: left;
    font-family: 'Rubik', sans-serif;
}

.product-details h3 {
    font-size: 1.4rem;
    color: #7a5230;
    margin-bottom: 10px;
    font-weight: bold;
}

.product-details p {
    font-size: 1rem;
    color: #444;
    line-height: 1.6;
    margin-bottom: 10px;
}

/* Harga asli yang dicoret */
.original-price {
    text-decoration: line-through;
    color: #999;
    font-size: 1rem;
}

/* Footer */
footer {
    background-color: #f4efe4; /* Warna latar belakang */
    padding: 30px 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap; /* Agar elemen tetap rapi jika layar lebih kecil */
    font-family: 'Rubik', sans-serif;
    color: #444;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
}

footer div {
    flex: 1; /* Membagi ruang secara merata */
    margin: 10px;
    min-width: 250px; /* Minimum lebar untuk menjaga tata letak */
    text-align: center;
}

footer div:first-child {
    text-align: left; /* Aligment khusus untuk elemen pertama */
}

footer img {
    width: 30px; /* Ukuran ikon */
    height: auto;
    margin-right: 10px; /* Jarak antara ikon dan teks */
    vertical-align: middle;
}

footer a {
    text-decoration: none;
    color: #7a5230;
    font-size: 1rem;
    font-weight: bold;
}

footer a:hover {
    color: #d4a373;
    text-decoration: underline;
}

footer p {
    margin: 5px 0;
    font-size: 1rem;
}

footer li {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left; /* Agar teks list rata kiri */
}

footer ol {
    margin: 5px 0;
    font-size: 0.9rem;
    color: #666;
}

footer div:last-child a {
    display: inline-block;
    margin: 5px 0; /* Spasi antar tautan */
}

footer div:last-child img {
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 8px;
}
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="My Website Logo">
        <nav>
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#produk">PRODUK</a>
            <a href="#info">INFO</a>
            <a href="#contact">CONTACT</a>
        </nav>
    </header>
    <article>
        <section id="home">
            <img src="hijab1.png">
            <div>
                <h1>Kilau Hijab</h1>
                <p>Semakin tertutup seorang wanita maka dia akan semakin mulya, dan Keanggunan dalam setiap langkah,
                kepercayaan dalam setiap hijabku</p>
            </div>
        </section>
        <section id="about">
            <div class="about-content">
                <img src="vm.jpg" alt="Gambar">
                <div class="text-container">
                    <h3>VISI</h3>
                        <p>Menjadi merek hijab terdepan yang menginspirasi wanita untuk mengekspresikan diri dengan gaya dan keanggunan, sambil mempromosikan nilai-nilai modesty dan keberagaman.</p>
                    <h3>MISI</h3>  
                    <ol>
                        <li>Menyediakan berbagai pilihan hijab berkualitas tinggi dengan desain yang menarik dan trendi untuk memenuhi kebutuhan dan preferensi setiap pelanggan.</li>
                        <li>Membangun komunitas yang mendukung wanita untuk merasa percaya diri dan nyaman dalam mengenakan hijab.</li>
                        <li>Berkomitmen untuk menggunakan bahan ramah lingkungan dan mendukung praktik bisnis yang berkelanjutan.</li>
                        <li>Mengedukasi pelanggan tentang cara styling hijab yang beragam dan mempromosikan keberagaman budaya melalui koleksi kami.</li>
                    </ol>  
                </div>
            </div>     
        </section>
        <section id="produk">
            <h2>PRODUK</h2>
                <div>
                    <img src="lozy.png" alt="">
                    <div>
                        <img src="pasmina_kaos.jpg" alt="">   
                    </div>
                    <div>
                        <h3>Tana Shawl (Pashmina Kaos Rayon)</h3>
                        <p>Pasmina berbahan rayon premium, sejuk saat digunakan dan membentuk wajah dengan sempurna</p>
                        <p>Warna: Khaki, Black, Grey, Navy, Stone Grey, Coffee, Chocolate, Ash Grey, Pink Blush, Sand, Natural, Burgundy, Brown Muffin, Wood</p>
                        <p>Size: 180 x 70 cm</p>
                        <p>Rp 89.000 </p>
                        <a href="https://shopee.co.id/Tana-Shawl-(Pashmina-Kaos-Rayon)-i.68269384.27270138546">Beli</a>
                    </div>

                    <div>
                        <img src="paris.jpg" alt="">
                    </div>
                    <div>
                        <h3>Kirana Paris Plain Japan (Hijab Segiempat Paris Japan Premium)</h3>
                        <p>Hijab segiempat paris dengan material yang superlembut akan melengkapi tampilan kamu sehari-hari</p>
                        <p>Warna: Hitam, Burgundy, Soft Purple, Navy, Blue Pansy, Smoke Green, Butter Cream , Natural</p>
                        <p>Size: 110 x 110 cm</p>
                        <p>Rp 99.000</p>
                        <a href="https://shopee.co.id/Segiempat-Paris-i.68269384.29220142034">Beli</a>
                    </div>
                       
                    <div>
                        <img src="square.jpeg" alt="">
                    </div>
                    <div>
                        <h3>LOZY-Polly Cotton</h3>
                        <p>Hijab square bermaterial polly cotton yang terbuat dari campuran serat polyester dan kapas</p>
                        <p>Warna: Dark Choco, Deep Army, Pink Blush, Charcoal, Iron, Grey Green, Soft Nude, Tea Rose</p>
                        <p>Size: 110 x 110 cm</p>
                        <p>Rp 35.000</p>
                        <a href="https://shopee.co.id/Segiempat-i.68269384.26470260805">Beli</a>
                    </div>

                    <img src="klamby.png" alt="">
                    <div>
                        <img src="motif.jpeg" alt="">
                    </div>
                    <div>
                        <h3>Tapis Scarf Extended</h3>
                        <p>Material Voal Premium, Detail Klamby's Silver Plat</p>
                        <p>Warna: Clam Shell, Peanut Butter, White Clay, Classic Gray, Dusty Turquoise, Raisin Black, Persian Plum, Medium Greige, Pink Puce, Storm Cloud</p>
                        <p>Size: 110 x 110 cm</p>
                        <p>Rp 180.000</p>
                        <a href="https://shopee.co.id/Tapis-Scarf-Extended-Segiempat-i.68269384.28570142830">Beli</a>
                    </div>

                    <img src="napocut.png" alt="">
                    <div>
                        <img src="cotton.jpeg" alt="">
                    </div>
                    <div>
                        <h3>Napocut-Plain Paris</h3>
                        <p>Plain paris napocut terbuat dari bahan cotton voil japan yang di proses khusus, dan dengan kualitas baik</p>
                        <p>Warna: Amphora, Caramel Cafe, French Oak, Castle Well, Natural, Chicory Coffee, Trench Coat, Kangaroo, Tea, Incense</p>
                        <p>Size: 115 x 115 cm</p>
                        <p>Rp 90.000</p>
                        <a href="https://shopee.co.id/Plain-Paris-napocut-i.68269384.27370265079">Beli</a>
                    </div>
                    
                    <img src="lafiye.png" alt="">
                    <div>
                        <img src="Viscose.jpeg" alt="">
                    </div>
                    <div>
                        <h3>Lafiye-You Cotton Scarf</h3>
                        <p>Terbuat dari bahan Viscose Rayon Slub yang telah menjadi pasmina sehari hari dengan textur yang lembut dan halus</p>
                        <p>Warna: Mocca, Pink, Ash, Candyfloss, Black, Choco, Green, Cream, Gray, Jade</p>
                        <p>Size: 194 x 32 cm</p>
                        <p>Rp 82.000</p>
                        <a href="https://shopee.co.id/Lafyye-You-Cotton-Scarf-i.68269384.26220249522">Beli</a>
                    </div>
                </div>
        </section>
        <section id="info">
            <h2>DISC %</h2>
                <div class="product-container"> 
                    <div class="product-card">
                        <div class="image-container">
                            <img src="pasmina_kaos.jpg" alt="">   
                        </div>
                        <img class="discount-icon" src="lozy.png" alt="">
                        <div class="product-details">
                            <h3>Tana Shawl (Pashmina Kaos Rayon)</h3>
                            <p>Pasmina berbahan rayon premium, sejuk saat digunakan dan membentuk wajah dengan sempurna</p>
                            <p>Warna: Khaki, Black, Grey, Navy, Stone Grey, Coffee, Chocolate, Ash Grey, Pink Blush, Sand, Natural, Burgundy, Brown Muffin, Wood</p>
                            <p>Size: 180 x 70 cm</p>
                            <p>Rp 89.000 </p>
                            <p class="original-price">Rp 119.000</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="image-container">
                            <img src="paris.jpg" alt="">
                        </div>
                        <img class="discount-icon" src="lozy.png" alt="">
                        <div class="product-details">
                            <h3>Kirana Paris Plain Japan (Hijab Segiempat Paris Japan Premium)</h3>
                            <p>Hijab segiempat paris dengan material yang superlembut akan melengkapi tampilan kamu sehari-hari</p>
                            <p>Warna: Hitam, Burgundy, Soft Purple, Navy, Blue Pansy, Smoke Green, Butter Cream , Natural</p>
                            <p>Size: 110 x 110 cm</p>
                            <p>Rp 99.000</p>
                            <p class="original-price">Rp 129.000</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="image-container">
                            <img src="motif.jpeg" alt="">
                        </div>
                        <img class="discount-icon" src="klamby.png" alt="">
                        <div class="product-details">
                            <h3>Tapis Scarf Extended</h3>
                            <p>Material Voal Premium, Detail Klamby's Silver Plat</p>
                            <p>Warna: Clam Shell, Peanut Butter, White Clay, Classic Gray, Dusty Turquoise, Raisin Black, Persian Plum, Medium Greige, Pink Puce, Storm Cloud</p>
                            <p>Size: 110 x 110 cm</p>
                            <p>Rp 180.000</p>
                            <p class="original-price">Rp 250.000</p>
                        </div>
                    </div>
                </div> 
        </section>
    </article>
    <footer id="contact" >
        <div>
            <img src="logo.png" alt="">
            <p>KILAU HIJAB</p>
            <p>Copyright 2024 Kilau hijab</p>
        </div>
        <div>
            <h4>Merek Hijab</h4>
                <p>Lozy</p>
                <p>Klamby</p>
                <p>Napocut</p>
                <p>Lafiye</p>
        </div>
        <div>
            <img src="wa.jpg" alt="">
            <a href="">085576879805</a><br>
            <img src="ig.jpg" alt="">
            <a href="https://www.instagram.com/kilau_hijab_official/">kilau_hijab_official</a> <br>
            <img src="shoppee.jpg" alt="">
            <a href="https://shopee.co.id/kilauhijaboffice?uls_trackid=51kid0ip0096&utm_content=4Unjxq3BVfCFuJtdceT2A7EaqCpX">Kilau Hijabb</a><br>
        </div>
    </footer>
</body>
</html>