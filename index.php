<?php require("core/dbConnect.php");require_once("core/functions.php"); $getAdsForIndex = $connect->prepare("SELECT * FROM ads WHERE area = ?"); $getAdsForIndex->execute(array("search")); $par = array_filter(explode("/", @$_GET["par"])); if((empty($par[0])) or (@$par[0] == "index")){ ?>
<!DOCTYPE html><html lang="en"><head><title><?php echo($settings["homeSlogan"]); ?> | Homepage</title><?php  require_once("pages/header.php") ?>
<meta property="og:image" content="<?= $getUrl ?>/assets/img/alice-photo.jpg" alt="icon" loading="lazy"><meta property="og:description" content="<?php echo($settings["description"]); ?>"> <meta property="og:url" content="<?= $getUrl ?>/"> <meta property="og:title" content="<?php echo($settings["homeSlogan"]); ?>"> <meta property="twitter:url" content="<?= $getUrl ?>">
<link rel="canonical" href="https://weareicers.com"><link rel="stylesheet" href="https://vjs.zencdn.net/5-unsafe/video-js.css" disabled><link rel="stylesheet" href="../blog.css?v=<?php echo time(); ?>">
<meta name="description" content="<?php echo($settings["description"]); ?>"><script async src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-Qg00WFl9r0Xr6rUqNLv1ffTSSKEFFCDCKVyHZ+sVt8KuvG99nWw5RNvbhuKgif9z" crossorigin="anonymous"></script>
</head>

<body class="container"><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/2_navbar.php'; ?>
    <header><?php if($getAdsForIndex->rowCount() > 0){ ?> <div class="d-flex justify-content-center gap-4 flex-column align-items-center row-cols-1 row-cols-md-2 mx-auto mt-5" style="max-width:900px"> <?php foreach($getAdsForIndex->fetchAll(PDO::FETCH_ASSOC) as $adSearch){ ?> <div class="text-center"> <a href="<?php echo($adSearch["link"]); ?>"><img class="img-fluid" src="<?php echo(url()); ?>/assets/img/<?php echo($adSearch["image"]); ?>" alt="<?php echo($adSearch["title"]); ?>"></a> </div> <?php } ?> </div> <?php } ?> </div> </header><header><?php if($getAdsForIndex->rowCount() > 0){ ?> <div class="d-flex justify-content-center gap-4 flex-column align-items-center row-cols-1 row-cols-md-2 mx-auto mt-5" style="max-width:900px"> <?php foreach($getAdsForIndex->fetchAll(PDO::FETCH_ASSOC) as $adSearch){ ?> <div class="text-center"> <a href="<?php echo($adSearch["link"]); ?>"><img class="img-fluid" src="<?php echo(url()); ?>/assets/img/<?php echo($adSearch["image"]); ?>" alt="<?php echo($adSearch["title"]); ?>"></a></div><?php } ?></div><?php } ?></div></header>
    <div class="wrapper"style="overflow-y:auto;overflow-x:hidden"><div class="main-container" ><br>
        <h1 class="main-header anim " id="#" style="text-align:center"><?php echo($settings["homeSlogan"]); ?></h1><section id="myCarousel" class="carousel slide d-flex align-items-center" data-ride="carousel" style=" max-height: 600px; padding-top: 0;"><div class="carousel-inner"><div class="carousel-item active"><img src="assets/img/alicele-web-SD.webp" alt="Alice Le web cover" loading="eager" width="426.5" height="320" title="Alice Le"></div></div></section><br><section class="auction"><div id="myCarousel" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#myCarousel" data-slide-to="0" class="active"></li><li data-target="#myCarousel" data-slide-to="1"></li><li data-target="#myCarousel" data-slide-to="2"></li></ol><div class="carousel-inner"><div class="carousel-item active"><div class="row"><div class="col-md-4"><div class="item"><h2 style="font-size:20px;font-weight:bold">FUTURIZE <h3 style="color: var(--pink)">Đồ họa đỉnh cao</h3></h2><p>Tạo ấn tượng cùng video demo & các logo độc đáo</p><a href="work" class="btn btn-primary">WATCH</a></div></div><div class="col-md-4"><div class="item"><h2 style="font-size:20px;font-weight:bold">REVAMP <h3 style="color: var(--pink)">Thương hiệu mạnh</h3></h2><p>Nghiên cứu người dùng và lập kế hoạch chiến lược</p><a href="work/branding-wall-street-english" class="btn btn-primary">LEARN</a></div></div><div class="col-md-4"><div class="item"><h2 style="font-size:20px;font-weight:bold">UPGRADE <h3 style="color: var(--pink)">Tư duy thiết kế</h3></h2><p>Hướng dẫn thiết kế, phát triển phong cách cá nhân</p><a href="blog" class="btn btn-primary">CHANGE</a></div></div></div></div></div></div></section><hr>
        <section class="row"><div class="col-xs-12 col-sm-6"><p class="main-header anim" style="text-align:center;margin:0 0 1em" id="">Nâng Tầm Thiết Kế</p><p class="intro-text" style="text-align:center;margin:0 1.5em">Thương hiệu của bạn đang trở nên nhạt nhẽo? Giải pháp thiết kế nào để kết nối khách hàng với trải nghiệm độc đáo?</p><div class="cta-section" style="justify-content:center;width:100%"><br><a href="contact.php" role="link" aria-label="#" class="btn btn-round pulse-button" style="margin:0em 1em 0 2em">TƯ VẤN NGAY</a><h3 style="margin:1em 2em 1em 0">Săn Ưu Đãi</h3></div></div>
        <div class="col-xs-12 col-sm-6" style="padding:0 0 0 0.7em"><?php $imageNumber = 2; $image = 'work-' . $imageNumber . '.webp'; ?>
            <a href="#" data-toggle="modal" data-target="#myModal"><img id="myImg" src="../work/assets/imgs/<?php echo $image ?>" alt="Alice Le" loading="eager" width="480" height="270" title="Alice Le" class="img-fluid"></a>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-body"><img id="modalImg" src="../work/assets/imgs/<?php echo $image ?>" alt="Alice Le" loading="eager" title="Alice Le" class="img-fluid" style="width:100%"</div><p id="caption">Check out my&nbsp;<a href="./work">&#x2192; gallery of work</a><br>Bộ sưu tập tác phẩm © Alice Le</p></div></div></div></div></section><hr>
 
<p class="testimonial" style="padding:2em 0 1em;text-align:center">Trusted by the world's leading organizations</p>
<section id="client-carousel" class="carousel slide" data-ride="carousel" style="background-color:white">
<?php 
    $client_logos = glob('assets/img/logo client/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
    $chunked_logos = array_chunk($client_logos, 8); // groups of 5
    foreach ($chunked_logos as $key => $chunk) {
      $active = $key == 0 ? 'active' : '';
      echo '<div class="carousel-item ' . $active . '" style="float:none"><div class="row mx-auto" style="align-items:center">';
      $count = 0;
      foreach ($chunk as $logo) {
        if ($count % 4 == 0 && $count !== 0) { //new row every 4 logos
          echo '</div><div class="row mx-auto" style="margin-right:1em!important;align-items:center">';}
        echo '<div class="col"><img src="' . $logo . '" alt="Client Logo" loading="lazy" width="100" height="50"></div>';
        $count++;}
      echo '</div></div>';}
  ?><br>
</section><hr>
<!--CONTACT--><div class="main-header anim" style="--delay:0s" id="service"><b>Service&nbsp;&nbsp;<a href="contact.php" class="btn btn-primary" >Consultation</a></b></div>
  <div class="row"><div style="text-align:center"><h4>A broad selection of services</h4></div><br><br>
    <div class="col-md-4" onclick="window.location.href='work/web-design';">
      <div class="card">
        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M207,50.25A87.46,87.46,0,0,0,144.6,24h-.33A87.48,87.48,0,0,0,82,49.81L20.61,112a16,16,0,0,0,.06,22.56l28.66,28.66a15.92,15.92,0,0,0,11.32,4.69h.09a16,16,0,0,0,11.36-4.82L133,100.69a16.08,16.08,0,0,1,22.41-.21,15.6,15.6,0,0,1,4.73,11.19,16.89,16.89,0,0,1-4.85,12L93,183.88a16,16,0,0,0-.17,22.79l28.66,28.66a16.06,16.06,0,0,0,22.52.12L205.81,175C240.26,140.5,240.79,84.56,207,50.25ZM60.65,151.89,32,123.24,55.8,99.12l28.52,28.52ZM132.79,224l-28.68-28.65,24.38-23.57L157,200.32Zm61.76-60.44-26.11,25.54L140,160.68l26.44-25.57.1-.09a33,33,0,0,0,9.57-23.5A31.44,31.44,0,0,0,166.47,89a32.2,32.2,0,0,0-44.9.5L95.49,116.18,67,87.74,93.35,61.09A71.51,71.51,0,0,1,144.27,40h.27a71.55,71.55,0,0,1,51.05,21.48C223.25,89.55,222.75,135.38,194.55,163.58Z"></path></svg>
          <h5 class="card-title">Web Development</h5>
          <p class="card-text">Design a website that draws users in like a magnet</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M96,104a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H104A8,8,0,0,1,96,104Zm8,40h64a8,8,0,0,0,0-16H104a8,8,0,0,0,0,16Zm128,48a32,32,0,0,1-32,32H88a32,32,0,0,1-32-32V64a16,16,0,0,0-32,0c0,5.74,4.83,9.62,4.88,9.66h0A8,8,0,0,1,24,88a7.89,7.89,0,0,1-4.79-1.61h0C18.05,85.54,8,77.61,8,64A32,32,0,0,1,40,32H176a32,32,0,0,1,32,32V168h8a8,8,0,0,1,4.8,1.6C222,170.46,232,178.39,232,192ZM96.26,173.48A8.07,8.07,0,0,1,104,168h88V64a16,16,0,0,0-16-16H67.69A31.71,31.71,0,0,1,72,64V192a16,16,0,0,0,32,0c0-5.74-4.83-9.62-4.88-9.66A7.82,7.82,0,0,1,96.26,173.48ZM216,192a12.58,12.58,0,0,0-3.23-8h-94a26.92,26.92,0,0,1,1.21,8,31.82,31.82,0,0,1-4.29,16H200A16,16,0,0,0,216,192Z"></path></svg>
          <h5 class="card-title">Script Writing</h5>
          <p class="card-text">Craft stories that hook your audience from start to finish</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M200.77,53.89A103.27,103.27,0,0,0,128,24h-1.07A104,104,0,0,0,24,128c0,43,26.58,79.06,69.36,94.17A32,32,0,0,0,136,192a16,16,0,0,1,16-16h46.21a31.81,31.81,0,0,0,31.2-24.88,104.43,104.43,0,0,0,2.59-24A103.28,103.28,0,0,0,200.77,53.89Zm13,93.71A15.89,15.89,0,0,1,198.21,160H152a32,32,0,0,0-32,32,16,16,0,0,1-21.31,15.07C62.49,194.3,40,164,40,128a88,88,0,0,1,87.09-88h.9a88.35,88.35,0,0,1,88,87.25A88.86,88.86,0,0,1,213.81,147.6ZM140,76a12,12,0,1,1-12-12A12,12,0,0,1,140,76ZM96,100A12,12,0,1,1,84,88,12,12,0,0,1,96,100Zm0,56a12,12,0,1,1-12-12A12,12,0,0,1,96,156Zm88-56a12,12,0,1,1-12-12A12,12,0,0,1,184,100Z"></path></svg>
          <h5 class="card-title">Design Services</h5>
          <p class="card-text">Remove blurry photos and build an eye-catching brand</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,216H183.36A103.95,103.95,0,1,0,128,232h96a8,8,0,0,0,0-16ZM40,128a88,88,0,1,1,88,88A88.1,88.1,0,0,1,40,128Zm88-24a24,24,0,1,0-24-24A24,24,0,0,0,128,104Zm0-32a8,8,0,1,1-8,8A8,8,0,0,1,128,72Zm24,104a24,24,0,1,0-24,24A24,24,0,0,0,152,176Zm-32,0a8,8,0,1,1,8,8A8,8,0,0,1,120,176Zm56-24a24,24,0,1,0-24-24A24,24,0,0,0,176,152Zm0-32a8,8,0,1,1-8,8A8,8,0,0,1,176,120ZM80,104a24,24,0,1,0,24,24A24,24,0,0,0,80,104Zm0,32a8,8,0,1,1,8-8A8,8,0,0,1,80,136Z"></path></svg>
          <h5 class="card-title">Video Production</h5>
          <p class="card-text">Bring your concept to life with on-target content</p>
        </div>
      </div>
    </div>
    <div class="col-md-4" onclick="window.location.href='work/branding-wall-street-english';">
      <div class="card">
        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M68,152a36,36,0,1,0,36,36A36,36,0,0,0,68,152Zm0,56a20,20,0,1,1,20-20A20,20,0,0,1,68,208ZM34.34,106.34,48.69,92,34.34,77.66A8,8,0,0,1,45.66,66.34L60,80.69,74.34,66.34A8,8,0,0,1,85.66,77.66L71.31,92l14.35,14.34a8,8,0,0,1-11.32,11.32L60,103.31,45.66,117.66a8,8,0,0,1-11.32-11.32Zm187.32,96a8,8,0,0,1-11.32,11.32L196,199.31l-14.34,14.35a8,8,0,0,1-11.32-11.32L184.69,188l-14.35-14.34a8,8,0,0,1,11.32-11.32L196,176.69l14.34-14.35a8,8,0,0,1,11.32,11.32L207.31,188Zm-45.19-89.51c-6.18,22.33-25.32,41.63-46.53,46.93a8.13,8.13,0,0,1-2,.24,8,8,0,0,1-1.93-15.76c15.63-3.91,30.35-18.91,35-35.68,3.19-11.5,3.22-29-14.71-46.9L144,59.31V80a8,8,0,0,1-16,0V40a8,8,0,0,1,8-8h40a8,8,0,0,1,0,16H155.31l2.35,2.34C175.9,68.59,182.58,90.78,176.47,112.83Z"></path></svg>
          <h5 class="card-title">Brand Strategy</h5>
          <p class="card-text">Make every moment count for long-term success</p>
        </div>
      </div>
    </div>
    <div class="col-md-4" onclick="window.location.href='contact.php';">
      <div class="card">
        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M212,152a12,12,0,1,1-12-12A12,12,0,0,1,212,152Zm-4.55,39.29A48.08,48.08,0,0,1,160,232H136a48.05,48.05,0,0,1-48-48V143.49A64,64,0,0,1,32,80V40A16,16,0,0,1,48,24H64a8,8,0,0,1,0,16H48V80a48,48,0,0,0,48.64,48c26.11-.34,47.36-22.25,47.36-48.83V40H128a8,8,0,0,1,0-16h16a16,16,0,0,1,16,16V79.17c0,32.84-24.53,60.29-56,64.31V184a32,32,0,0,0,32,32h24a32.06,32.06,0,0,0,31.22-25,40,40,0,1,1,16.23.27ZM224,152a24,24,0,1,0-24,24A24,24,0,0,0,224,152Z"></path></svg>
          <h5 class="card-title">Consultation</h5>
          <p class="card-text">Get expert advice & save time, money, and headaches</p>
        </div>
      </div>
    </div>
  </div>
<br><br>
<div class="row extrapad" style="display:flex;flex-wrap:wrap"><div class="col-sm-6 col-md-3 fixheight"><div class="listitem bluebox h1" style="font-size:30px;color:#b68756">Get<br> started</div></div><div class="col-sm-6 col-md-3 fixheight" onclick='location.href="register.php"' style="cursor:pointer" target="_blank"><div class="listitem"><div class="num">1</div><div class="title">Subscribe</div><p>get latest design news to your email</p></div></div><div class="col-sm-6 col-md-3 fixheight" onclick='location.href="signin.php"' target="_blank"><div class="listitem"><div class="num">2</div><div class="title">Sign in</div><p>access blog and exchange thoughts</p></div></div><div class="col-sm-6 col-md-3 fixheight" onclick='location.href="contact.php"'><div class="listitem"><div class="num">3</div><div class="title">Consult</div><p>connect and discuss your needs</p></div></div></div><br>

<section class="row"><div class="col-xs-12 col-sm-6" style="padding:0 1em"><?php require("core/dbConnect.php");try {$stmt = $connect->prepare("SELECT * FROM work WHERE id = 22 AND status = '1'");$stmt->execute();$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);if (!empty($posts)) {foreach ($posts as $post) {    ?>
<div class="video anim" style="--delay:.5s;max-width:500px">
<div class="video-time"><?php echo date('Y', strtotime($post['date'])); ?></div>
<div class="video-wrapper" onclick='location.href="work/<?php echo($post["sef"]); ?>"' style="cursor:pointer">
<?php if(isset($post["yt"]) && !empty($post["yt"]) && strpos($post["yt"], 'youtube') === false && strpos($post["yt"], '//') === false){ ?><video unmuted="" src="<?php echo($post["yt"]); ?>" loading="eager" style="max-height:220px;"></video>
<?php } else { ?> <img src="assets/imgs/work-<?php echo $post['id'];?>.webp" alt="article" loading="eager" style="width:100%" width="688" height="384" title="showreel" /><?php } ?>
</div><div class="video-name" style=""><p><?php echo($post["title"]); ?></p></div>
<div class="video-view"><?php echo($post["content"]); ?></div></div>
<?php } } else {echo "No posts found";  }   } catch(PDOException $e) {die("Connection failed: " . $e->getMessage()); }  ?></div>
    <div class="col-xs-12 col-sm-6" style="padding:0 1em">
        <!-- FORM--><?php  require_once("core/dbConnect.php"); if(isset($_POST['signup'])){ $email = $_POST['email']; $password = $_POST['password']; $hashed_password = password_hash($password, PASSWORD_DEFAULT); $date = date('Y-m-d H:i:s'); $sql = "SELECT * FROM users WHERE email = ?"; $stmt = $connect->prepare($sql); $stmt->execute([$email]); if($stmt->rowCount() > 0){ $error_msg = "This email address is already registered. Please use a different email to sign up."; } else { $sql = "INSERT INTO users (email, password, hashed_password, date, status) VALUES (?, ?, ?, ?, '1')"; $stmt = $connect->prepare($sql); $stmt->execute([$email, $password, $hashed_password, $date]); } } ?>
<form id="signup-form" class="modal-content align-center" style="margin: 0 auto; text-align: center;" method="post" name="signup-form"><div class="modal-header" style="display:block;text-align:center;color:black"><h5>Ready to Join?</h5>Get new-member offer</div>
<div class="modal-body"><div class="input-group-prepend"><input type="email" class="form-control" placeholder="Business Email" name="email" required=""></div><br><div class="input-group-prepend"><input type="password" class="form-control" placeholder="Password" name="password" required=""></div>
<!-- <br><div class="row align-items-center remember"><p><input type="checkbox">&nbsp;Remember Me</p></div>--><br>
<div class="form-group" style="text-align:center"><button type="submit" class="btn btn-round" name="signup">SIGN UP</button></div></div>
<p style="font-size:small;color:black">Old User ?&nbsp;<b href="signin.php" style="color:black">Sign In</b><br><b style="color:black" href="reset.php">Forgot your password ?</b></p></form>
</div></div></section><hr>  
<?php include './pages/footer.php'; ?></div><br><br>

<style>/* index.php MAIN CAROUSEL */.card{background-color:transparent}.card:hover { transform: scale(1.05); transition: transform 0.3s ease-in-out}.card-body{align-items:center}.card-text{text-align:center;padding:0 2.2em}
#client-carousel{display:block;padding:1em 0 1em;height:100px}.carousel-inner{padding:.2em}.search{display:none!important}.row{justify-content:center;--bs-gutter-x:0}
.item h2{padding:0!important;font-size:20px}.item h3{font-size:12px;margin:.5rem 0 1rem}.item p{padding:0;//margin-left:0}.item a{transform:scale(.5);font-size:1.6em}.modal-content{color:var(--header)}.carousel-item img{max-height:100%;display:block;position:relative;left:50%;transform:translateX(-50%);z-index:1}
@media (max-width:768px){#client-carousel{height:auto}.carousel-item{transition:none!important}span{display:none}}.dark-mode svg{fill:#fff}.col img{width:90%;display:block;margin:0!important;max-height:87px!important;max-width:80px}.col,.item p{text-align:center}
@media (max-width:576px){h5{font-size:smaller}.carousel-item{display:block!important;width:100%!important;float:none!important}.carousel-item .row{display:flex!important;flex-wrap:nowrap!important;overflow-x:hidden;-webkit-overflow-scrolling:touch;scroll-snap-type:x mandatory}.carousel-item .row::-webkit-scrollbar{display:none}
.carousel-item .col{width:auto!important;margin:0 4px;scroll-snap-align:center;//flex:0 0 auto}}
@media (min-width:992px){.carousel-item img{width:60%;//max-height:480px}.carousel-item .col{max-width:20%}.carousel-item{transition:transform 0.3s ease-in-out;padding-right:2em}.carousel-item-next.carousel-item-left,.carousel-item-prev.carousel-item-right,.carousel-item.active{transform:translateX(0)}.active.carousel-item-right,.carousel-item-next{transform:translateX(100%)}.active.carousel-item-left,.carousel-item-prev{transform:translateX(-100%)}a{text-decoration:none!important}}
</style>
<script>//portfolio carousel 2e3=2sec
$(document).ready(function() {var imageNumber = 2;var imagePrefix = 'work-';var imageExtensions = ['webp'];var imageSrc = '';
var updateImageSrc = function() {var extension = imageExtensions[Math.floor(Math.random() * imageExtensions.length)];
 imageSrc = '../work/assets/imgs/' + imagePrefix + imageNumber + '.' + extension;
 $("#myImg").attr("src", imageSrc);$("#modalImg").attr("src", imageSrc);
  };
updateImageSrc();
setInterval(function() {imageNumber = (imageNumber % 20) + 1;updateImageSrc(); }, 2000);
  });</script>
<!--<script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script async src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js'></script>
<script async src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js'></script>
<script async src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script defer src='assets/js/video.js'></script>
<script defer src='blog.js'></script>
</body></html>
<?php }else{ if(file_exists("main/{$par[0]}.php")){ require("main/{$par[0]}.php"); }else{ $connect = null; header("Location: ./"); } } $connect = null; ?>