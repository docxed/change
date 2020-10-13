<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change.org · เว็บไซต์เพื่อสร้างการเปลี่ยนแปลง</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="./icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Pridi&display=swap" rel="stylesheet">



    <style>
        body {
            background-image: url("bg.png");
            background-repeat: no-repeat;
            background-position: center top;
            background-size: 70%;
        }

        .navactive {
            color: #000000;
        }

        .navactive:hover {
            color: #ff0000;
            text-decoration: none;
        }

        .indexhead {
            color: #ff0000;
        }

        .indexhead:hover {
            color: #000000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 1px solid #ccc;">
        <div class="container">
            <a class="navbar-brand h1 mb-0.1" href="./index.php"
                style="color: #ff0000;">change.org&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?p=create">
                            <div class="navactive">เริ่มเรื่องรณรงค์</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=mypetition">
                            <div class="navactive">แคมเปญรณรงค์ของฉัน</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=petition">
                            <div class="navactive">เรื่องรณรงค์</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=donate">
                            <div class="navactive">สนับสนุน Change.org</div>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?p=search">
                            <div class="navactive"><i class="fas fa-search"></i></div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="./avartar/me.jpg" alt="" class="rounded-circle" width="30" height="30">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?p=mypetition">แคมเปญรณรงค์ของฉัน</a>
                            <a class="dropdown-item" href="?p=profile">การตั้งค่า</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">akira fosterz</a>
                            <a class="dropdown-item" href="./index.php"><u style="color: #ff0000;">ออกจากระบบ</u></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>

    <div class="container">
        <?php
            if (!isset($_GET['p'])){ //home
        ?>
        <br><br>
        <div class="text-center">
            <p class="h1">เว็บไซต์เพื่อสร้างการเปลี่ยนแปลง</p><br>
            <p class="h4">408,044,416 จำนวนผู้ใช้ทั่วโลก <a href="?p=impact"
                    class="indexhead">คลิกดูเรื่องราวรณรงค์ที่สำเร็จทั้งหมด</a></p>
        </div>
        <br><br><br><br><br><br>


        <div id="carouselExampleCaptions" class="carousel slide m-auto" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./home/1.jpg" class="d-block w-100 img-fluid" alt="..." height="300">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><span class="badge badge-danger">ความพยายามครั้งนี้ไม่สูญเปล่า...ขอบคุณ แล้วพบกันใหม่
                                </badge>
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./home/2.jpg" class="d-block w-100 img-fluid" alt="..." height="300">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><span
                                class="badge badge-danger">รณรงค์สิทธิในอัตลักษณ์ทางเพศและการคุ้มครองคนข้ามเพศในโลกของการทำงาน<br>
                                #ให้มันจบที่จูน ปิดฉากอย่างงดงาม</badge>
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./home/3.jpg" class="d-block w-100 img-fluid" alt="..." height="300">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><span class="badge badge-danger">คืนภาพคุณสมเด็จ วิรุฬหผล วีรชน 14 ตุลาคม 2516</badge>
                        </h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <?php
            }
        ?>
    </div>

    <br><br>
    <footer class="page-footer bg-light">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <p class="text-secondary">รู้จักเรา</p>
                    <p><a href="#" class="navactive">เกี่ยวกับ Change.org</a></p>
                    <p><a href="#" class="navactive">ผลการเปลี่ยนแปลง</a></p>
                    <p><a href="#" class="navactive">ร่วมงานกับเรา</a></p>
                    <p><a href="#" class="navactive">ทีมงาน</a></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <p class="text-secondary">ชุมชนบน CHANGE.ORG</p>
                    <p><a href="#" class="navactive">บล็อก</a></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <p class="text-secondary">ความช่วยเหลือ</p>
                    <p><a href="#" class="navactive">ศุนย์ช่วยเหลือ</a></p>
                    <p><a href="#" class="navactive">คำแนะนำ</a></p>
                    <p><a href="#" class="navactive">นโยบายสิทธิส่วนบุคคล</a></p>
                    <p><a href="#" class="navactive">นโยบาย</a></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <p class="text-secondary">ติดตาม CHANGE.ORG</p>
                    <p><a href="#" class="navactive">Twitter</a></p>
                    <p><a href="#" class="navactive">Facebook</a></p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between row">
                <div class="col-sm-12 col-lg-9"><b>© 2020, Change.org, PBC</b> <a href="#"
                        class="navactive">จดทะเบียนประเภท B Corporation</a><br>
                    This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy"
                        style="color: #ff0000; text-decoration: underline;">Privacy Policy</a> and <a
                        href="https://policies.google.com/terms" style="color: #ff0000; text-decoration: underline;">Terms of Service</a> apply.<br><br>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <select class="form-control">
                        <option value="de-DE">Deutsch</option>
                        <option value="en-AU">English (Australia)</option>
                        <option value="en-CA">English (Canada)</option>
                        <option value="en-IN">English (India)</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="en-US">English (United States)</option>
                        <option value="es-AR">Español (Argentina)</option>
                        <option value="es-ES">Español (España)</option>
                        <option value="es-419">Español (Latinoamérica)</option>
                        <option value="fr-FR">Français</option>
                        <option value="hi-IN">हिन्दी</option>
                        <option value="id-ID">Bahasa Indonesia</option>
                        <option value="it-IT">Italiano</option>
                        <option value="ja-JP">日本語</option>
                        <option value="pt-BR">Português (Brasil)</option>
                        <option value="ru-RU">Русский</option>
                        <option value="th-TH" selected>ภาษาไทย</option>
                        <option value="tr-TR">Türkçe</option>
                    </select>
                </div>
            </div>
            <br>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/e581f04cd1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>