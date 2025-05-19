<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Artikel</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <nav class="bg-white flex justify-between py-10 px-10 shadow-xl">
      <div class="font-bold text-3xl">
        <h1>TimeLineMHS</h1>
      </div>
      <div class="flex gap-10">
        <a href="profil.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2 ">Profil</a>
        <a href="timeline.php" class="bg-blue-400 rounded-2xl flex justify-center items-center p-2">TimeLine</a>
      </div>
    </nav>
  
    <div class="px-10 py-10">
      <div class="font-bold text-2xl">
        <h1>DAFTAR ARTIKEL</h1>
      </div>
      <?php
    $kutipan = [
      "Allah mengetahui, sedang kamu tidak mengetahui - Al-Baqarah (2:126)",
      "dan janganlah kedua matamu berpaling dari mereka (karena) mengharapkan perhiasan kehidupan dunia. (QS. Al-Kahfi: 28)",
      "Dan sesungguhnya yang demikian itu sungguh berat kecuali bagi orang-orang yang khusyu'. (QS. Al-Baqarah: 45)" 
      ];

    $artikel = [
      ["id" => 1, "judul" => "Jadikan kegagalanmu sebagai batu loncatan menuju kesuksesan", "tanggal" => "2024-02-15", "deskripsi" => "Setelah lulus SMA, dunia perkuliahan membawa kebebasan yang lebih luas dan pergaulan yang beragam, tetapi tidak semua yang terlihat menyenangkan itu baik. Godaan untuk mengikuti tren pergaulan yang kurang baik selalu ada, namun penting untuk tetap berpegang teguh pada nilai-nilai kebaikan. Allah memperingatkan dalam Al-Qur'an agar berhati-hati dalam memilih teman dan lingkungan, karena lingkungan yang buruk bisa menjauhkan seseorang dari-Nya tanpa disadari. Teman yang baik akan selalu mengingatkan kita pada kebaikan, sementara pergaulan yang salah dapat membuat hati semakin lalai. Oleh karena itu, berhati-hatilah dalam memilih pergaulan, agar kebebasan yang didapat tidak membuat kita lupa pada tujuan hidup yang sebenarnya.", "gambar" => "img/1.jfif"],
      ["id" => 2, "judul" => "Hindari pergaulan yang bisa membawamu jauh dari Allah", "tanggal" => "2024-02-15", "deskripsi" => "Setelah lulus SMA dan memasuki dunia perkuliahan, kebebasan dan lingkungan pergaulan yang lebih luas menjadi tantangan tersendiri. Banyak godaan untuk mengikuti tren yang kurang baik, tetapi penting untuk tetap berpegang teguh pada nilai-nilai kebaikan yang telah diajarkan sejak dulu. Allah telah memperingatkan dalam Al-Qur'an agar berhati-hati dalam memilih teman dan lingkungan, karena lingkungan yang buruk dapat perlahan menjauhkan seseorang dari-Nya tanpa disadari. Teman yang baik akan selalu mengingatkan pada kebaikan dan mendekatkan diri kepada Allah, sementara pergaulan yang salah bisa membuat hati semakin lalai. Oleh karena itu, berhati-hatilah dalam memilih pergaulan, agar kebebasan yang didapat tidak membuat kita lupa pada tujuan hidup yang sebenarnya.", "gambar" => "img/2.jfif"],
      ["id" => 3, "judul" => "Apapun keadaannya, sholat harus tetap dijaga", "tanggal" => "2024-02-15", "deskripsi" => "Saat mendaki gunung bersama teman dan ayahnya, aku belajar bahwa sholat tetap harus menjadi prioritas, bahkan dalam situasi yang mungkin terasa mendesak. Setelah melaksanakan sholat Dzuhur di puncak gunung, aku bertanya bagaimana jika ada hal penting yang harus dilakukan saat waktu sholat tiba. Ayah temanku berbagi pengalaman saat ia hampir ketinggalan kereta tetapi tetap memilih untuk sholat terlebih dahulu, dan akhirnya Allah memudahkan urusannya. Kisah ini mengingatkanku pada firman Allah dalam Al-Qur'an: 'Dan mintalah pertolongan (kepada Allah) dengan sabar dan sholat. Dan sesungguhnya yang demikian itu sungguh berat kecuali bagi orang-orang yang khusyu'.' (QS. Al-Baqarah: 45). Sholat adalah kunci kemudahan dalam segala urusan, karena Allah selalu memberikan jalan bagi hamba-Nya yang mengutamakan ibadah.", "gambar" => "img/3.jfif"],
      ];
    
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($artikel as $a) {
          if ($a['id'] == $id) {
            echo "
            <div class='flex justify-between py-5'>
              <h1 class='font-bold text-2xl'>{$a['judul']}</h1>
              <div class='flex gap-5'>
                <p class='bg-green-400 p-2 rounded-2xl'>{$a['tanggal']}</p>
                <a href='?' class='bg-green-400 p-2 rounded-2xl'>Kembali ke daftar artikel</a>
              </div>
            </div>

            <div class='border-2 p-2 text-justify'>
              <div class='flex justify-center'>
                <img src='{$a['gambar']}' alt='Gambar Artikel' class='max-w-full h-auto rounded-lg'>
              </div>
              <p class='mt-4'>{$a['deskripsi']}</p>
              <blockquote class='text-xl py-5 font-semibold italic text-center'>
                \"" . $kutipan[rand(0, count($kutipan) - 1)] . "\"
              </blockquote>
            </div>
            ";
          }
        }
      } else {
        foreach ($artikel as $a) {
          echo '
          <div class="flex flex-col">
            <ol>
              <li class="border-2 my-2 py-5 px-2 text-lg">
                <a href="?id=' . $a['id'] . '">' . $a['judul'] . ' (' . $a['tanggal'] . ')</a>
              </li>
            </ol>
          </div>';
        }
      }
      
    ?>
    </div>

    
  </body>
</html>
