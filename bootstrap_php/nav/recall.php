<?php require_once "../header_and_footer/head.php" ?>
<title> Отзывы</title>
<link rel="stylesheet" href="../css/style_js.css">
<script src="../js/go_top.js"></script>
</head>
<body>
<?php require_once "../header_and_footer/header.php" ?>
<br>

<h3 id="recall">Здесь вы можете оставить отзыв о нашем портале, поделиться своими впечатлениями и найти собеседников на
    интересуэщие вас теми</h3>

<div class="row justify-content-center align-items-center">
    <form class="form-signin" action="infa.php" metod="POST">
        <h3 class="text-center login-title">Введите данные чтобы оставить сообщение</h3>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email">
        <label for="inputName" class="sr-only">Имя</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Имя">
        <textarea class="form-control" placeholder="Ваше сообщение"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
    </form>
</div>
<div class="d-flex flex-wrap">
    <?php for ($i = 1; $i <= 9; $i++) : ?>
        <div class="card mt-4 shadow-sm">
            <div class="card-header">
                <img src="../img/recall/user.svg" class="personage_story">
                <h6 class="my-0 font-weight-normal">Пользователь <?php echo "$i"; ?></h6>
            </div>
            <div class="card-body_1">
                <img src="../img/recall/coments.svg" class="personage_story">
                <h6 class="card-title pricing-card-title">Коментарий пользователя</h6>
            </div>
        </div>
    <?php endfor; ?>
</div>


<br>

<?php require_once "../header_and_footer/footer.php" ?>
</body>
</html>