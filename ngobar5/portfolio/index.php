<?php 

function get_CURL($url){
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCiBxvQpqIejHp2lq6B4MR0w&key=AIzaSyD-BSaq4kQ7PFw9YdrNTwslqFqlr5-1f7M');


$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyD-BSaq4kQ7PFw9YdrNTwslqFqlr5-1f7M&channelId=UCiBxvQpqIejHp2lq6B4MR0w&maxResults=1&order=date&part=snippet';

$result= get_CURL($urlLatestVideo);
// $latestVideoId = $result['items'][0]['id']['videoId'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <title>My Portfolio</title>
  </head>
  <body class="mt-5">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Slackie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">About</a>
      <a class="nav-link" href="#">Portfolio</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
      </div>
    </div>
    </div>
  </nav>

    <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="./img/profile1.png" width="25%" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Slackie</h1>
      <p class="lead">Selamat datang semua</p>
    </div>
    </div>
    <section id="about" class="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center"><h2>About</h2></div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis minus hic mollitia, perferendis enim perspiciatis saepe deleniti omnis dolorem magni, neque iusto officiis quidem. Unde tempore eligendi dolore
            omnis odio!
          </p>
        </div>
        <div class="col-md-5">
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, atque officia blanditiis minima eveniet consequatur molestias sapiente omnis dolores, perspiciatis aliquid ex impedit, nostrum provident id modi
            nam cum. Iste.
          </p>
        </div>
      </div>
    </div>
    </section>
    <!-- youtube & instagram -->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-4">
                  <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail" >
                </div>
                <div class="col-md-8">
                  <h5><?= $channelName; ?></h5>
                  <p><?= $subscriber; ?> Subscribers.</p>
                  <div class="g-ytsubscribe" data-channelid="UCiBxvQpqIejHp2lq6B4MR0w" data-layout="default" data-count="default"></div>
                </div>
              </div>
              <div class="row mt-3 pb-3">
                <div class="col">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B0-i9H17FqU?rel=0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-4">
                    <img src="./img/nobita (1).jpg" width="200" class="rounded-circle img-thumbnail" >
                  </div>
                  <div class="col-md-8">
                    <h5>Nobita</h5>
                    <p>7000 Followers.</p>
                  </div>
                <div class="row mt-3 pb-3">
                  <div class="col">
                    <div class="ig-thumbnail">
                      <img src="./img/thumbs/1.png" alt="" >
                    </div>
                    <div class="ig-thumbnail">
                      <img src="./img/thumbs/2.png" alt="" >
                    </div>
                    <div class="ig-thumbnail">
                      <img src="./img/thumbs/3.png" alt="" >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- portfolio -->
    <section id="portfolio" class="portfolio  pb-4">
      <div class="container">
        <div class="row mb-4 pt-4">
          <div class="col text-center"><h2>Portfolio</h2></div>
        </div>
        <div class="row mb-4">
          <div class="col-md">
            <div class="card">
              <img src="./img/thumbs/1.png" class="card-img-top" alt="Card image" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="./img/thumbs/2.png" class="card-img-top" alt="Card image" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="./img/thumbs/3.png" class="card-img-top" alt="Card image" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-md">
            <div class="card">
              <img src="./img/thumbs/4.png" class="card-img-top" alt="Card image" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="./img/thumbs/5.png" class="card-img-top" alt="Card image" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="./img/thumbs/6.png" class="card-img-top" alt="Card image" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact mb-5 bg-light">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact US</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, illo.</p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item"><h1>Location</h1></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Duren Tiga selatan</li>
              <li class="list-group-item">Jakarta, Indonesia</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama ..." />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" />
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea name="pesan" id="pesan" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Kirim Pesan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row text-center pt-3">
          <div class="col">
            <p>Copyright 2021</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>
