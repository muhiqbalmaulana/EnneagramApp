<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Tes Kepribadian Enneagram</title>
    <link rel="stylesheet" href="bin/css/w3.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="bin/js/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body class="w3-sand">
<?php
include "php/koneksi.php";
?>
    <div class="w3-container w3-red">
        <h1>Tes Kepribadian Enneagram</h1>
    </div>
    <div class="w3-container soal prolog">
        <h2>Apa itu <em>enneagram</em>?</h2>
        <p class="w3-justify"> Adalah salah satu metode yang bisa digunakan untuk mengetahui kepribadian seseorang. Enneagram diartikan sebagai “sebuah gambar bertitik sembilan”. Metode ini dikabarkan telah ada sejak ratusan tahun yang lalu dan diajarkan secara lisan dalam suatu kelompok sufi di Timur Tengah, hingga akhirnya mulai berkembang di Amerika Serikat sekitar tahun 1960-an. Kepribadian manusia dalam sistem enneagram, terbagi menjadi 9 tipe. Kesembilan tipe kepribadian tersebut adalah :</p>
        <img src="gambar/enneagram.gif" />
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-prolog">MASUK</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-blue jawab jawab-chart">STATISTIK</button>
        </div>
    </div>
    <div class="w3-container soal chart">
        <h2>Statistik Enneagram</h2>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <div class="w3-section">
            <button class="w3-btn-block w3-red jawab jawab-backhome">KEMBALI</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-blue jawab jawab-print">DOWNLOAD</button>
        </div>
    </div>
    <div class="w3-container soal identitas">
        <h2>Isi Data Diri</h2>
        <form>
            <div class="w3-section">
                Nama Lengkap : <input type="text" name="nama" class="w3-input nama" id="nama">
            </div>
            <div class="w3-section">
            Kelas : 
            <select name="kelas" class="w3-select kelas" id="kelas">
                <option value="1">X APAT</option>
                <option value="2">XI APAT</option>
                <option value="3">XII APAT</option>
                <option value="4">X APHPI</option>
                <option value="5">XI APHPI</option>
                <option value="6">XII APHPI</option>
                <option value="7">X MM</option>
                <option value="8">XI MM</option>
                <option value="9">XII MM</option>
                <option value="10">X NKPI</option>
                <option value="11">XI NKPI</option>
                <option value="12">XII NKPI</option>
                <option value="13">X TKJ 1</option>
                <option value="14">XI TKJ 1</option>
                <option value="15">XII TKJ 1</option>
                <option value="16">X TKJ 2</option>
                <option value="17">XI TKJ 2</option>
                <option value="18">XII TKJ 2</option>
                <option value="19">X TKPI</option>
                <option value="20">XI TKPI</option>
                <option value="21">XII TKPI</option>
                <option value="22">X TKR</option>
                <option value="23">XI TKR</option>
                <option value="24">XII TKR</option>
            </select>
            </div>
            <div class="w3-section">
                No Absen : <input type="number" name="absen" class="w3-input absen" id="absen">
            </div>
        </form>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-identitas">MULAI TES</button>
        </div>
    </div>
    <div class="w3-container soal soal-a1">
        <p>Apakah yang paling kamu inginkan dari orang lain?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">hormat dan kepatuhan</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">kasih sayang dan penerimaan</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">jarak dan privasi</button>
        </div>
    </div>
    <div class="w3-container  soal soal-a2">
        <p>Mana yang terbaik bagi kamu?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">memimpin orang lain</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">ditolong dan dilindungi</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">bertindak menurut cara saya sendiri</button>
        </div>
    </div>
    <div class="w3-container  soal soal-a3">
        <p>Mana yang kamu anggap paling penting?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">orang lain bertindak sesuai keinginan saya</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">berbuat sesuai harapan orang lain</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">menuruti kehendak saya sendiri</button>
        </div>
    </div>
    <div class="w3-container  soal soal-a4">
        <p>Apa yang kamu harapkan bila bertemu orang baru?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">berguna bagi saya</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">semoga menyukai saya</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">tidak akan mengganggu atau mencampuri urusan saya</button>
        </div>
    </div>
    <div class="w3-container soal soal-a5">
        <p>Sifat mana yang tidak kamu sukai?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">cengeng</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">intelektual</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">agresif dan lugas</button>
        </div>
    </div>
    <div class="w3-container soal soal-a6">
        <p>Apabila ada orang mengganggu, apa yang kamu lakukan?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">pamer kekuatan sehingga dia takut</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">berusaha</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">menghindar</button>
        </div>
    </div>
    <div class="w3-container soal soal-a7">
        <p>Apa yang paling menjadi perhatian dalam hidup kamu?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-a">cita-cita dan karir</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-b">membina hubungan dengan orang lain</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-c">menjaga kehidupan pribadi</button>
        </div>
    </div>
    <div class="w3-container soal soal-b1">
        <p>Pilih yang cocok dengan sikap kamu dalam menghadapi kehidupan</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">saya berani menghadapi hidup</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">saya bisa menyesuaikan diri</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">hidup ini terkadang menakutkan</button>
        </div>
    </div>
    <div class="w3-container soal soal-b2">
        <p>Bagaimana cara kamu dalam membuat suatu keputusan?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">saya lakukan sendiri</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">terlebih dahulu merundingkan dengan orang lain</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">seringkali orang lain yang memutuskan</button>
        </div>
    </div>
    <div class="w3-container soal soal-b3">
        <p>Bagaimana cara mengontrol perasaan kamu?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">menghadapi hidup dengan tegar</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">menyesuaikan diri terhadap tuntutan hidup</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">ikut arus kehidupan</button>
        </div>
    </div>
    <div class="w3-container soal soal-b4">
        <p>Mana yang terpenting bagi kamu?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">mengatasi persoalan sesuai cara saya</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">menyesuaikan kebutuhan pribadi dengan kebutuhan orang lain</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">menjaga segala sesuatu agar tetap terkendali</button>
        </div>
    </div>
    <div class="w3-container  soal soal-b5">
        <p>Kehidupan kamu akan lebih mudah bila</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">tantangan mudah diatasi</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">segala sesuatu bisa dikompromikan</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">komplikasi yang muncul hanya sedikit</button>
        </div>
    </div>
    <div class="w3-container  soal soal-b6">
        <p>Bila muncul masalah baru</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">biasanya sanggup menghadapinya</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">melakukan kompromi dan menyesuaikan</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">seringkali kewalahan</button>
        </div>
    </div>
    <div class="w3-container soal soal-b7">
        <p>Ketika merenungkan kembali tindakan yang sudah dilakukan, gagasan apa yang sering muncul?</p>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-d">sebenarnya saya mampu melakukannya dengan mudah, tapi ternyata usaha saya berlebihan</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-e">sering terpaksa kompromi meski sebenarnya tidak perlu</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn-block w3-teal jawab jawab-f">ternyata masalahnya tidak sesulit yang saya duga</button>
        </div>
    </div>
    <div class="w3-container soal hasil-1">
        <h2> Tipe Pembaharu (Reformer / Perfeksionis)</h2>
        <img src="gambar/9.png" />
        <p>Hai, kamu termasuk kedalam Tipe Pembaharu</p>
        <p>Kekuatan energinya adalah ingin menjadi benar dan bersifat perfeksionis dalam melakukan tugasnya. Mulai dari menyusun perencanaan dan persiapan yang baik sebelum melakukan sesuatu, sangat teliti, hati hati dan ingin tampil sempurna dalam seluruh pekerjaan dan tugas yang dimandatkan kepadanya.</p>
        <p>Namun biasanya orang dalam tipe ini sering kali menuntut orang lain harus tampil sempurna seperti dirinya, dan cenderung tidak fleksibel dan terlalu dogmatis kepada anak buah. Kelemahannya, sering kali beranggapan bahwa banyak orang yang tidak tahu apa yang harus diperbuat, sehingga menuntut setiap orang berbuat seperti dia.</p>
    </div>
    <div class="w3-container soal hasil-2">
        <h2>Tipe Penolong (Giver / Helper)</h2>
        <img src="gambar/8.png" />
        <p>Hai, kamu termasuk kedalam Tipe Penolong</p>
        <p>Mereka yang masuk tipe ini adalah orang yang energinya tercurah untuk kepentingan orang lain. Ia sangat bersahabat, penuh perhatian kepada orang lain dan rela untuk melayani kebutuhan sesama.</p>
        <p>Karunia terbesar yang dimiliki tipe penolong adalah empati yang sangat besar ditujukan kepada orang lain. Tetapi bila dirinya dikritik, karena terlalu mau campur dengan urusan orang lain sering kali, atau bantuannya ditolak dia akan marah.</p>
        <p>Kelemahannya orang ini sulit mengatakan tidak kepada orang lain, dan tidak dapat bersikap asertif untuk dirinya. Dalam organisasi tipe ini sangat disukai.</p>
    </div>
    <div class="w3-container soal hasil-3">
        <h2> Tipe Motivator (Achiever/ Motivator/ Performer)</h2>
        <img src="gambar/7.png" />
        <p>Hai, kamu termasuk kedalam Tipe Motivator</p>
        <p>Biasanya orang ini penuh dengan energi positif untuk mencapai suatu keberhasilan. Orang ini biasanya punya suatu ambisi keras untuk mencapai suatu goal atau target dengan arah sasaran yang sangat jelas.</p>
        <p>Sering dalam bekerja tergolong orang yang amat gila kerja dan cenderung kecanduan kerja yang amat terobsesi dengan efisiensi, menentukan target yang tinggi dan bekerja efisien untuk mencapai sukses, kalau perlu memaksa rekannya yang hanya bisa melangkah selangkah, dipacu menjadi dua langkah seperti dirinya. Kalau perlu dia akan mengesampingkan kebutuhan diri dan keluarganya untuk mencapai hasil.</p>
        <p>Bagi para bawahan yang tidak terbiasa dengan cara kerja ini, tuntutannya terkadang terasa amat menyiksa, yang menuntut orang lain mempunyai kadar komitmen seperti dirinya. Kelebihan tipe ini adalah rasa optimistis dan keyakinan diri yang besar.</p>
    </div>
    <div class="w3-container soal hasil-4">
        <h2>
 Tipe Individualis (Romantic / Artist/ Individualist)</h2>
        <img src="gambar/6.png" />
        <p>Hai, kamu termasuk kedalam Tipe Individualis</p>
        <p>Mereka adalah orang yang menempatkan keunikan diri dan ingin menonjolkan kreativitas dirinya yang tidak sama dengan orang lain. Dirinya dilihat sebagai insan yang sangat unik dan berbeda dengan yang lainnya.</p>
        <p>Dia tidak senang dengan pekerjaan yang sangat rutin dan bersifat biasa saja. Baginya tiap orang harus mempunyai keunikan tersendiri yang menonjol. Dia sering bekerja dengan caranya sendiri yang berbeda dengan orang lain, dan sering kali digolongkan gaya seniman.</p>
        <p>Kelebihannya adalah kreatif, intuitif dan punya kepekaan estetis. Kekurangan tipe ini sering menarik diri dengan orang lain, keras kepala dan tenggelam pada pikirannya sendiri.</p>
    </div>
    <div class="w3-container soal hasil-5">
        <h2>Tipe Pemikir (Observer / Thinker / Investigator)</h2>
        <img src="gambar/5.png" />
        <p>Hai, kamu termasuk kedalam Tipe Pemikir</p>
        <p>Orang dengan tipe ini biasanya banyak berpikir, selalu menggunakan analisis dalam melakukan tindakan, sikap tegas dalam pengambilan, keputusan, namun sangat miskin dalam pergaulan sosial.</p>
        <p>Namun, orang ini bisa menjelaskan dengan logika yang teratur dan baik pengamatannya lebih tajam dibandingkan orang lain, terbuka dan visioner. Kelebihan orang ini berpendirian teguh, mandiri dengan logika yang kuat. Sedangkan kelemahannya sulit diyakinkan, keras kepala, merasa benar dengan pendapatnya.</p>
    </div>
    <div class="w3-container soal hasil-6">
        <h2>Tipe Loyalis (Loyalist / Pessimist)</h2>
        <img src="gambar/4.png" />
        <p>Hai, kamu termasuk kedalam Tipe Loyalis</p>
        <p>Orang ini amat loyal pada organisasinya, melakukan apa yang seharusnya dengan komitmen yang kuat, pekerjaan dilakukan dengan penuh dedikasi tinggi. Orang seperti ini cenderung taat pada aturan organisasi, bisa dipercaya dalam melakukan tugas, dan jujur.</p>
        <p>Kesulitan terbesar adalah jika diajak untuk demonstrasi menentang kebijakan. Orang dalam tipe ini amat loyal terhadap pimpinannya, sehingga ia tidak senang bila ada orang lain yang tidak loyal.</p>
        <p>Kelebihannya tipe ini adalah setia, suka membantu, mengerjakan tugas dengan baik, menjaga aturan dan bertanggung jawab, Kelemahan dari tipe ini ialah rasa cemas, khususnya di lingkungan yang baru. Pertanyaan yang selalu timbul dalam dirinya: apakah aku merasa aman?</p>
    </div>
    <div class="w3-container soal hasil-7">
        <h2>Tipe Antusias (Generalist / Optimist / Adventure)</h2>
        <img src="gambar/3.png" />
        <p>Hai, kamu termasuk kedalam Tipe Antusias</p>
        <p>Orang ini yang cenderung bersifat optimistik meskipun menghadapi keadaan yang buruk sekalipun, masih bisa menujukkan canda dan cerianya. Tipe ini dimotivasi oleh kebutuhan merasa gembira dan optimistis dalam hidup.</p>
        <p>Menghindari penderitaan dan kesedihan, sehingga merasakan seluruh hidupnya adalah rangkaian pesta yang sangat menggembirakan. Disebut si pemimpi, karena mengabaikan keberadaan masa kini dan asyik merencanakan masa depan.</p>
        <p>Dalam pekerjaan dan pelayanan orang tipe ini memotivasi dan menyatu dengan orang lain dengan sudut pandang yang menggairahkan. Orang seperti ini harus dilatih untuk menerima kegagalan sebagai bagian dari hidup yang mesti dihadapi, tiap orang sehingga tidak jatuh pada obsesi keberhasilan terus menerus.</p>
        <p>Kelebihannya adalah menyenangkan, spontan, antusias, sedangkan kekurangannya tidak fokus pada satu tujuan, kurang disiplin pada satu bidang.</p>
    </div>
    <div class="w3-container soal hasil-8">
        <h2>Tipe Pemimpin (Challenger/ Leader / Boss/ Protector/ Intimidator)</h2>
        <img src="gambar/2.png" />
        <p>Hai, kamu termasuk kedalam Tipe Antusias</p>
        <p>Orang ini biasanya dikaruniai kekuatan dan kemampuan untuk mempengaruhi orang lain dan memegang teguh keyakinan. Kalau memegang kekuasaan bisa terjatuh dalam sikap otoriter.</p>
        <p>Pada satu sisi adalah pejuang keadilan yang membela orang kecil dengan konsisten. Kelebihannya energik, penuh percaya diri, protektif. Sedangkan kekurangannya adalah menguasai dan bisa menjadi agresif dalam perilakunya.</p>
    </div>
    <div class="w3-container soal hasil-9">
        <h2>Tipe Pembawa Damai (Peacemaker / Mediator/ Accomodator)</h2>
        <img src="gambar/1.png" />
        <p>Hai, kamu termasuk kedalam Tipe Pembawa Damai</p>
        <p>Orangnya yang kelihatan selalu tampil tenang, tidak menyukai adanya persaingan, berusaha keras mewujudkan agar lingkungannya tetang dan damai. Dan selalu menghindarti konflik sehingga tampak kadang kadang sikapnya yang kurang tegas.</p>
        <p>Ketika kita menyadari siapa diri kita dan dicerahkan oleh sebuah kesadaran, maka kita dapat menerima diri kita secara utuh dan menerima orang lain dengan kaca mata yang positif.</p>
    </div>
    <div id="tes">
        
    </div>
</body>

<script>
        var xValues = ["Pembaharu", "Penolong", "Motivator", "Individualis", "Pemikir", "Loyalis", "Antusias", "Pemimpin", "Pembawa Damai"];
        var yValues = [
        <?php 
        $jumlah_1 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='1'");
        echo mysqli_num_rows($jumlah_1);
        ?>, 
        <?php 
        $jumlah_2 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='2'");
        echo mysqli_num_rows($jumlah_2);
        ?>, 
        <?php 
        $jumlah_3 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='3'");
        echo mysqli_num_rows($jumlah_3);
        ?>, 
        <?php 
        $jumlah_4 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='4'");
        echo mysqli_num_rows($jumlah_4);
        ?>,
        <?php 
        $jumlah_5 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='5'");
        echo mysqli_num_rows($jumlah_5);
        ?>,
        <?php 
        $jumlah_6 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='6'");
        echo mysqli_num_rows($jumlah_6);
        ?>,
        <?php 
        $jumlah_7 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='7'");
        echo mysqli_num_rows($jumlah_7);
        ?>,
        <?php 
        $jumlah_8 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='8'");
        echo mysqli_num_rows($jumlah_8);
        ?>,
        <?php 
        $jumlah_9 = mysqli_query($koneksi,"select * from tb_siswa where id_personalitiy='9'");
        echo mysqli_num_rows($jumlah_9);
        ?>
        ];
        var barColors = ["red", "green","blue","orange","brown","teal","purple","yellow","black"];

        var myChart = new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Statistik Enneagram SMKN 2 Turen"
            }
          }
        });

        $(".jawab-print").click(function() {
            window.print()
        })
    </script>

</html>
