<?php require_once "header_and_footer/head.php" ?>
<title> Сайтец на Bootstrap 4 </title>
<link rel="stylesheet" href="css/style_js.css">
<script src="js/go_top.js"></script>
</head>
<body>
<?php require_once "header_and_footer/header.php" ?>
<div class="carousel slide" data-ride="carousel" id="slides">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slider/slider_1.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Новости игр</h1>
                <a href="https://www.igromania.ru/news/">
                    <button type="button" class="btn btn-outline-light btn-lg">Посмотреть</button>
                </a>
                <a href="http://gmt-max.net/hot-news/">
                    <button type="button" class="btn btn-warning btn-lg">Новинки</button>
                </a>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="img/slider/slider_2.jpg">
        </div>
        <div class="carousel-item ">
            <img src="img/slider/slider_3.jpg">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">Пайк начинал, как многие в Билджвотере: в Кровавых доках. Каждый день в бойнях на берегу
                разделывали огромные туши морских чудовищ. Пайк нанялся на бойню в так называемой Кровавой гавани,
                которую даже волны прилива не могли очистить от красной жижи, постоянно стекавшей в море по деревянным
                желобам.Пайк познал все прелести своего кровавого ремесла: работа была каторжной, а оплата – мизерной. В
                то же время капитаны и их команды получали немало золота за те устрашающие туши, которые они привозили,
                а бригада Пайка затем разделывала. И Пайку захотелось иметь больше, чем пару медяков в кармане. Он
                упросил знакомого боцмана взять его на корабль... </p>
        </div>
        <div class="container-fluid">
            <a href="https://universe.leagueoflegends.com/ru_RU/story/champion/pyke/">
                <button class="btn btn-success btn-lg" type="button">Далее</button>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row text-center alert">
        <div class="col-12">
            <h1 class="display-4">История персонажей</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="card-text">Давным-давно в центральной ионийской провинции Барл среди живописных горных пейзажей
                стояла деревушка под названием Вуджу. Здесь мечтавший стать непревзойденным воином мальчик по имени Йи
                учился владеть мечом, еще не подозревая о том, какой путь уготован ему судьбой. Как и все его
                сверстники, Йи восхищался мечниками в шелковых одеяниях, о которых сочиняли поэмы. Его родители были
                оружейниками, и все посещавшие кузню воины говорили, что у их сына большое будущее. По утрам Йи фехтовал
                с матерью, а по вечерам при свечах наизусть читал стихи отцу. А когда по достижении нужного возраста он
                поступил в обучение к мастерам фехтования вуджу, радости и гордости родителей не было предела...</p>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div>
                <a href="#"><img src="img/personage_story/personage_story_1.jpg" class="personage_story"></a>
                <div class="card-body">
                    <h3 class="card-title">Мастер</h3>
                    <p class="card-text">Его родители были оружейниками, и все посещавшие кузню воины говорили...</p>
                    <a href="https://universe.leagueoflegends.com/ru_RU/story/champion/masteryi/" class="btn btn-info">Дальше</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a href="#"><img src="img/personage_story/personage_story_2.jpg" class="personage_story"></a>
                <div class="card-body">
                    <h3 class="card-title">Ирелия</h3>
                    <p class="card-text">Почти всю жизнь, с самого раннего детства, Ирелию Зан пленила красота и грация
                        движений тела...</p>
                    <a href="https://universe.leagueoflegends.com/ru_RU/story/champion/irelia/" class="btn btn-info">Дальше</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a href="#"><img src="img/personage_story/personage_story_3.jpg" class="personage_story"></a>
                <div class="card-body">
                    <h3 class="card-title">Ноктюрн</h3>
                    <p class="card-text">Его родители были оружейниками, и все посещавшие кузню воины говорили...</p>
                    <a href="https://universe.leagueoflegends.com/ru_RU/story/champion/nocturne/" class="btn btn-info">Дальше</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-4">
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2> История событий в League of Legends</h2>
            <p>
                Талант и самодисциплина не изменили мальчику и на тренировках, и он превзошел все ожидания своих
                учителей. Вскоре вся деревня заговорила о "юном мастере Йи".
                <br><br>
                Однако смиренный ученик не мог не думать об остальной Ионии. С самых высоких пагод открывался вид на
                далекие поселения, о которых никто никогда не говорил. Когда же Йи вознамерился спуститься с горы со
                своим верным мечом, наставники его не пустили. Основатели деревни Вуджу считали одноименное искусство
                величайшей ценностью, которой не стоит делиться с чужаками, священнодействием, с помощью которого нельзя
                проливать кровь. Веками вуджу развивалось в горной деревне вдали от посторонних глаз.
                <br><br>
                Все изменилось в тот день, когда Йи увидел огромные клубы дыма над далекими городами. Ноксианские отряды
                пришли с моря, как волна – и волна эта стала красной, когда они начали покорять ионийские поселения одно
                за другим. Для Йи судьба ионийского народа оказалась важнее священных традиций Вуджу, и он отправился на
                защиту Исконной земли. Он произвел настоящий фурор, когда подобно вихрю ворвался в ряды противника и
                обратил его в бегство блистательной и прежде невиданной техникой владения мечом.</p>
            <br>
            <a href="https://ru.leagueoflegends.com/ru/news/" class="btn btn-danger"> Читать далее</a>
        </div>
        <div class="col-lg-6">
            <br>
            <img src="img/secsia1_img.jpg" class="img-fluid">
        </div>
    </div>
</div>
<figure>
    <div class="fixed-wrap">
        <div id="fixed">

        </div>
    </div>
</figure>
<div class="text-center">
    <button type="button" id="gifsBtn" class="btn btn-success" data-toggle="collapse" data-target="#gifs">Просмотр
        анимации
    </button>
</div>
<div id="gifs" class="collapse">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <img src="img/animation/gif_1.gif" class="gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/animation/gif_2.gif" class="gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/animation/gif_3.gif" class="gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="img/animation/gif_4.gif" class="gif">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row alert text-center">
        <div class="col-12">
            <h1 class="display-4">Обновление персонажей</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img src="img/updates/updates_1.jpeg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Kаин</h4>
                    <p class="card-text">Ноксианец по рождению, Шида Каин еще ребенком вместе с другими детьми попал в
                        армию – к этой жестокой хитрости прибегали самые подлые из командиров империи Борама Дарквилла.
                        Потерпев сокрушительное поражение при Пласидиуме в Навори, ноксианцы в корне изменили стратегию
                        и повели войну на изнурение.
                    </p>
                    <a href="https://ru.leagueoflegends.com/ru/featured/champion-reveal-kayn" class="btn btn-warning">Посмотреть</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/updates/updates_2.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Акали</h4>
                    <p class="card-text">Иония издревле была известна как край дикой магии, где могущественные духи и
                        самобытные народы мирно сосуществовали друг с другом. Однако порой эта идиллия нарушалась, и
                        требовались недюжинные усилия для восстановления гармонии.</p>
                    <a href="https://ru.leagueoflegends.com/ru/featured/champion-reveal-akali" class="btn btn-warning">Посмотреть</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/updates/updates_3.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Насус</h4>
                    <p class="card-text">Насус – существо с головой шакала родом из древней Шуримы. Жителями пустыни он
                        почитался как полубог. Насус был одним из вознесшихся, он обладал острейшим умом, был хранителем
                        знаний и несравненным стратегом, мудрость которого на протяжении многих веков вела древнюю
                        империю к величию.</p>
                    <a href="https://universe.leagueoflegends.com/ru_RU/champion/nasus/" class="btn btn-warning">Посмотреть</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "header_and_footer/footer.php" ?>
</body>
</html>