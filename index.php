<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Execption;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$emailSent = false;

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);
        $kode = $_POST['kode'];

        if ($kode === 'sudah_dicek_dosen') {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'knowledgemanagementwilly@gmail.com'; //email yang dipakai
        $mail->Password = 'ptsqrrzbqdsxqeoi'; // password dari app pass
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $notif_email = 'knowledgemanagementwilly@gmail.com'; //input emailmu nanti kirim notif ke email sendiri
        $notif_dosen = 'hanya.untuk.absen@gmail.com'; //input email dosen nanti kirim notif ke dosen
        $manualSubject = "211103728_Willy Saputra"; // langsung ganti jadi nim_nama untuk subjectnya

        $mail->setFrom('knowledgemanagementwilly@gmail.com');
        $mail->addAddress($notif_email);
        $mail->addAddress($notif_dosen);

        $mail->isHtml(true);

        $mail->Subject = $manualSubject;
        $mail->Body = "Kode: $kode ";
        
        $emailSent = $mail->send();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Travel</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    form {
            background-color: #343a40;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 50px;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            
        }

            .box{
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: #0056b3;
        }

        span {
          color:white;
        }

        .box-success {
          color:white;
          margin-left:5px;
          font-size:20px;
          
        }

        .sub-judul {
          text-align: center;
        }
    </style>
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/logo-white.png" class="putih" /></a>
          <a href=""><img src="asset/logo-black.png" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">About</a></li>
            <li><a href="#support">Support</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#team">Food</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/video-indonesia.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Visit Indonesian & Yogyakarya City</h3>
          <p><br>
            go, find, explore          
          </p>
        </div>
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>About</h3>
            <p class="ringkasan">           
            This website is intended to introduce Yogyakarta, one of the cities in Indonesia that is rich in culture and tradition. The website displays various information about Yogyakarta, from culture, culinary to tourism. Information about Yogyakarta's culinary is presented in the form of articles, photos, and videos. Visitors can learn about the various types of traditional Yogyakarta food, from gudeg, bakpia, to charcoal coffee/joss coffee. In addition, visitors can also find out about tourist attractions in Yogyakarta that offer various traditional food. Visitors can also learn about the various tourist attractions in Yogyakarta, from the tombs of the Mataram kings, the Yogyakarta Palace, to the Gembira Loka Monument.
            <div class="konten-isi">
              </p>
            </div>
          </div>
        </section>
        <section class="abuabu" id="support">
          <div class="layar-dalam support">
            <div>
              <img src="asset/matahari.png" />
              <h6>In Every Condition</h6>
              <p>
                We are ready to serve and prepare your best trip in all conditions
              </p>
            </div>
            <div>
              <img src="asset/tas.png" />
              <h6>Professional Team</h6>
              <p>
                We select excellent English-speaking local tour guides, and professional drivers who have a good and clear attitude at work, who are not only working to make money but also working with their hearts, loving their jobs.
              </p>
            </div>
            <div>
              <img src="asset/kompas.png" />
              <h6>Flight</h6>
              <p>
                We Make People Fly Comfortably With The Facilities We Provide
              </p>
            </div>
          </div>
        </section>
        <section id="gallery">
          <div><p class="sub-judul">Monument <br> Serangan Umum <br> 1 Maret (Soekarno)</p><img src="asset/monumen1.jpg" /></div>
          <div><p class="sub-judul">Monument <br> Tugu Yogyakarta  <br> <br> </p><img src="asset/monumen2.jpeg" /></div>
          <div><p class="sub-judul">Monument <br> Makam Raja-Raja Mataram <br> <br> </p><img src="asset/monumen3.jpg" /></div>
          <div><p class="sub-judul">Monument <br> Makam Ratu Kidul <br> Pantai Parangtritis</p><img src="asset/monumen4.jpg" /></div>
          <div><p class="sub-judul">Monument <br> Gembira Loka <br> <br> </p><img src="asset/monumen5.jpg" /></div>
          <div><p class="sub-judul">Monument <br> Pancasila Karya Bhakti <br> <br></p><img src="asset/monumen6.jpg" /></div>
          <div><p class="sub-judul">Monument <br> Keraton Ngayogyakarta <br> Hadiningrat <br> </p><img src="asset/monumen7.jpg" /></div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>Jogja terbuat dari rindu, angkringan dan pulang.</p>
          </div>
        </section>
        <section id="team">
          <div class="layar-dalam">
            <h3>Typical Yogyakarta food</h3>
            <p class="ringkasan">
            Menyelami Kekayaan Kuliner Yogyakarta: Rasakan Kelezatan Tradisi dalam Setiap Gigitan 
            </p>
            <div class="tim">
              <div>
                <img src="asset/kopiarang.png" height="200px"/>
                <h6>Kopi Arang</h6>
                <p>Kopi Arang atau kopi joss adalah minuman kopi khas Yogyakarta yang disajikan bersama arang panas. Arang panas dimasukkan ke dalam seduhan kopi hitam dan gula untuk kemudian dihidangkan.</p>
              </div>
              <div>
                <img src="asset/gudeg.png" height="200px"/>
                <h6>Gudeg</h6>
                <p>Gudeg adalah hidangan khas Provinsi Daerah Istimewa Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan</p>
              </div>
              <div>
                <img src="asset/bakpia.png" height="200px"/>
                <h6>Bakpia</h6>
                <p>Bakpia adalah kue pastri asal Fujian gulungan tepung panggang dengan berbagai isi. Kulit bakpia dibuat dari campuran gula dan garam yang diaduk dalam air hingga larut, lalu dibentuk menjadi adonan dengan menambahkan tepung terigu</p>
              </div>
            </div>
          </div>
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Lastest Blog</h3>
            <p class="ringkasan">
                We provide the latest information about the city of Yogyakarta with a tourist destination or icon known as Bromo
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog1.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">What About Bromo?</a></h4>
                    <p>
                        Mount Bromo is an active volcano which has a height of 2,329 meters above sea level. The specialty of Bromo is the active crater which emits white smoke with a sea of sand that stretches widely around the Bromo crater. Located in the middle of a sea of sand and close to Mount Batok.
                    </p>
                  </article>
                </div>
              </div>
              <div class="overlay"></div> 
              <video autoplay muted loop>
              <source src="asset/video2.mp4" type="video/mp4"/>
              </video>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog3.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">What About Sekatenan?</a></h4>
                    <p>
                      Sekaten is a series of annual activities to commemorate the birthday of the Prophet Muhammad which is held by two palaces in Java, namely the Surakarta Palace and the Yogyakarta Palace. The series of celebrations officially takes place from the 5th and ends on the 12th of the Javanese calendar.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Contact</h5>
            Customer Service : 08576975479 <br> Email : kelilingindonesia@gmail.com <br> PT. Keliling Indonesia
          </div>
          <div>
            <h5>Help</h5>
            If there are problems, contact our customer service by calling the telephone number listed or sending an email
          </div>
          <div>
            <h5>Sitemap</h5>
            help maximize SEO strategy. Like search engines using crawlers to search websites and index them at the same time so they can understand the content better.
          </div>
        </div>

    <?php if (!$emailSent): ?>
    <form id="notificationForm" action="index.php" method="post">
            <label for="kode"><span>Kode:</span></label>
            <input type="text" name="kode" id="kode" required class="box" placeholder="Inputkan kode">
            <button type="submit" name="send" class="box">Kirim</button>
        <script>
            document.getElementById('notificationForm').addEventListener('submit', function(event) {
                var kodeInput = document.getElementById('kode').value;
                if (kodeInput !== 'sudah_dicek_dosen') {
                    event.preventDefault(); 
                    alert('Kode yang dimasukkan tidak sesuai, silahkan Coba lagi.');
                }
            });
        </script>
    </form>
    <?php else: ?>

          <p><input type="checkbox" disabled checked>Notifikasi Email berhasil<a href="./read_email.php" target="_blank" class="box-success">dikirim</a></p>
    <?php endif; ?>

        <!-- <div id="emailForm" align="center"> -->
          <!-- Input box for entering the code -->
          <!-- <input type="text" id="kode" placeholder="Enter Code" />
          <button onclick="sendEmail()">Send Email</button> -->
        <!-- </div> -->
        <div class="layar-dalam">
          <div class="copyright">&copy; 2024 Travelling Indonesia</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>