<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<header>
    <div class="row">
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 d-xl-flex order-1 order-md-1 order-lg-2 justify-content-xl-center order-xl-2"><img class="img-fluid d-xl-flex" src="img/Emblem.png" style="padding: 2px;height: 153px;" alt="logo" width="156px" height="156px"></div>
        <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4 order-3 order-sm-2 order-md-2 order-lg-2" style="padding-left: 20px;">
            <p class="text-center text-sm-left text-md-left caesar">CAESARI<br></p>
            <p class="text-uppercase text-center text-sm-left turva">TURVATEENISTUSE AS<br></p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 offset-md-3 offset-lg-1 offset-xl-2 text-center text-sm-center order-4 order-sm-4 order-md-4 order-lg-3 telephone" style="padding-right: 2px;padding-left: 2px;">
            <p class="tel1">&nbsp;<i class="icon ion-ios-telephone" style="font-size: 40px;width: 32px;height: 32px;"></i> &nbsp;+372 506 92 34<br></p>
            <p class="tel1">&nbsp;<img src="img/mdi_hours-24.svg" style="width: 40px;">+372 664 48 74<br></p>
        </div>
        <div class="col-2 col-sm-2 col-md-1 col-xl-1 offset-3 offset-sm-0 offset-md-0 text-uppercase text-primary order-2 order-sm-3 order-md-3 order-lg-4 language">
            <p>est</p>
            <p>en</p>
        </div>
    </div>
    <nav class="navbar navbar-light navbar-expand-md text-right d-lg-flex align-items-lg-start navigation-clean" id="top-menu">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="color: #ffffff;"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"
                 style="color: #ffffff;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #ffffff;font-size: 18px;">Частный клиент</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #ffffff;font-size: 18px;">Бизнес клиент</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #ffffff;font-size: 18px;">Технический раздел</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #ffffff;/*font-size: 18px;*/">Инфо</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?= $content ?>

<footer style="background-color: #832020;">
    <div class="row text-white">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 text-white link" style="background-color: #832020;">
            <div class="row text-center d-flex justify-content-xl-center align-items-xl-start">
                <div class="col-lg-6 col-xl-6 text-center text-sm-left"><a class="text-white" href="#">Частный клиент</a></div>
                <div class="col text-center text-sm-left"><a class="text-white" href="#">Технический раздел</a></div>
                <div class="col-lg-6 text-center text-sm-left d-xl-flex"><a class="text-white" href="#">Бизнес клиент</a></div>
                <div class="col-lg-6 col-xl-6 text-center text-sm-left"><a class="text-white" href="#">Инфо</a></div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 text-center telephone">
            <p class="tel1">&nbsp;<i class="icon ion-ios-telephone" style="font-size: 40px;width: 32px;height: 32px;"></i> &nbsp;+372 506 92 34<br></p>
            <p class="tel1">&nbsp;<img src="img/24-hours-support.svg" style="width: 40px;margin-left: 0px;">+372 664 48 74<br></p>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 text-center adress">
            <p id="mail" style="padding-top: 23px;">info@caesar.ee</p>
            <p id="adress">Ehitajate tee 114, 13517, Tallinn</p>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
