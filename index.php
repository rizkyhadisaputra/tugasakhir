
<?php
session_start();
    include 'cek.php';
    include 'koneksi.php';
    include 'navbar.php';
    ?>


    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading">Kamu Login Sebagai <?php echo $_SESSION['ases']; ?></span>
            <span class="d-block subheading">Covid-19 Awareness</span>
            <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
            
            <!-- <p class="mb-4"><a href="#" class="btn btn-primary">How to prevent</a></p> -->
          </div>
          <div class="col-lg-6">
            <figure class="illustration">
              <img src="images/illustration.png" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>


    <!-- MAIN -->
    
    <?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$profile = http_request("https://api.kawalcorona.com/positif/");
$profile2 = http_request("https://api.kawalcorona.com/meninggal/");
$profile3 = http_request("https://api.kawalcorona.com/sembuh/");
$profile4 = http_request("https://api.kawalcorona.com/indonesia/");



// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);
$profile2 = json_decode($profile2, TRUE);
$profile3 = json_decode($profile3, TRUE);
$profile4 = json_decode($profile4, TRUE);

?>

    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Coronavirus Statistics</h2>
            <p>Coronavirus Global & Indonesia Live Data</p>
          </div>
        </div>
        <div class="row"> 
          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number"><?php echo $profile ["value"] ?></strong>
              <span class="label">Active Cases</span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number"><?php echo $profile2 ["value"] ?></strong>
              <span class="label">Deaths</span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number"><?php echo $profile3 ["value"] ?></strong>
              <span class="label">Recovered Cases</span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number"><?php echo $profile4 ["sembuh"] ?></strong>
              <span class="label">Indonesia</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <figure class="img-play-vid">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              <div class="absolute-block d-flex">
                <span class="text">Watch the Video</span>
                <a href="https://youtu.be/D9tTi-CDjDU" data-fancybox class="btn-play">
                  <span class="icon-play"></span>
                </a>
              </div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
            <p>kumpulan virus yang menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, 
              virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).
              Secara umum, ada tiga gejala umum yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:</p>
            <ul class="list-check list-unstyled mb-5">
              <li>Demam (suhu tubuh di atas 38 derajat Celsius</li>
              <li>Batuk kering</li>
              <li>Sesak napas</li>
            </ul>
            <p><a href="https://www.alodokter.com/virus-corona" class="btn btn-primary">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-protection"></span>
            </div>
            <div>
              <h3>Protection</h3>
              <span class="d-block">Lorem ipsum dolor sit.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-patient"></span>
            </div>
            <div>
              <h3>Prevention</h3>
              <span class="d-block">Lorem ipsum dolor sit.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-hand-sanitizer"></span>
            </div>
            <div>
              <h3>Treatments</h3>
              <span class="d-block">Lorem ipsum dolor sit.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-virus"></span>
            </div>
            <div>
              <h3>Symptoms</h3>
              <span class="d-block">Lorem ipsum dolor sit.</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">

            <div class="row">
              <div class="col-6 col-lg-6 mt-lg-5">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-stay-at-home"></span>
                  </div>
                  <div class="body">
                    <h3>Stay at home</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-patient"></span>
                  </div>
                  <div class="body">
                    <h3>Wear facemask</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-6">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-social-distancing"></span>
                  </div>
                  <div class="body">
                    <h3>Keep social distancing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-hand-washing"></span>
                  </div>
                  <div class="body">
                    <h3>Wash your hands</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis doloribus consequatur fugit voluptatum ex rerum perspiciatis cupiditate, esse hic!</p>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, error!</p>

            <ul class="list-check list-unstyled mb-5">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipisicing elit</li>
              <li>Unde doloremque</li>
            </ul>

            <p><a href="#" class="btn btn-primary">Read more about prevention</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">What you need to do</span>
            <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <div class="row mt-5 pt-5">
              <div class="col-lg-6 do ">
                <h3>You should do</h3>
                <ul class="list-unstyled check">
                  <li>Stay at home</li>
                  <li>Wear mask</li>
                  <li>Use Sanitizer</li>
                  <li>Disinfect your home</li>
                  <li>Wash your hands</li>
                  <li>Frequent self-isolation</li>
                </ul>
              </div>
              <div class="col-lg-6 dont ">
                <h3>You should avoid</h3>
                <ul class="list-unstyled cross">
                  <li>Avoid infected people</li>
                  <li>Avoid animals</li>
                  <li>Avoid handshaking</li>
                  <li>Aviod infected surfaces</li>
                  <li>Don't touch your face</li>
                  <li>Avoid droplets</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="images/protect.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_high-fever.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>High Fever</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ipsum repellendus animi modi iure provident, cupiditate perferendis voluptatem!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_cough.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Cough</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ullam illo laborum repellendus vel esse dolor, sunt exercitationem.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_sore-troath.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Sore Troath</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum esse voluptatum, vel inventore at! Ullam, libero reiciendis amet?</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_headache.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Headache</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem voluptatem ratione veniam rerum qui quibusdam reprehenderit quis.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-10">
            <div class="note row">

              <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, eaque.</div>
              <div class="col-lg-4 text-lg-right">
                <a href="https://www.halodoc.com/" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">News &amp; Articles</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">30 Jul, 2020</span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="#">How Coronavirus Very Contigous</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
            <div class="my-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Symptoms</a></li>
                  <li><a href="#">Prevention</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">About Coronavirus</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Helpful Link</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Helathcare Professional</a></li>
                  <li><a href="#">LGU Facilities</a></li>
                  <li><a href="#">Protect Your Family</a></li>
                  <li><a href="#">World Health</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Resources</h2>
                <ul class="list-unstyled">
                  <li><a href="#">WHO Website</a></li>
                  <li><a href="#">CDC Website</a></li>
                  <li><a href="#">Gov Website</a></li>
                  <li><a href="#">DOH Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>


</body>
</html>