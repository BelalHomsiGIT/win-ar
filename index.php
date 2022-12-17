<?php
    include './incs/dbconn.php';
    include './incs/selectall.php';
    include './incs/selectwinner.php';
    include './incs/form.php';
    include './incs/dbclose.php';

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"> -->
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">تجربة عداد زمني</h1>
                <p class="lead fw-normal">تبقى من الزمن المعتمد للعداد</p>
                <h3 id="count-down">time</h3>
                <p class="lead fw-normal">لاستكمال بعض المهام بعد انقضاء هذا الزمن</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">توصيف في القائمة عن العرض المقدم </li>
            <li class="list-group-item">بعد التسجيل سيدخل المستخدم في عملية سحب عشوائية</li>
            <li class="list-group-item">فديو نور حمصي عن هذا التطبيق فيه الكثير من المغالطات</li>
            <li class="list-group-item">واضح انه غير متمرس في الباك اند</li>
            <li class="list-group-item"> اصبحت اجده غير مقبول واداءه فيه شيء من البلادة</li>

        </ul>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <form class="mt-5" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h3>أدخل معلوماتك</h3>
                    
                    <div class="mb-3">
                        <label for="firstName" class="form-label" style="text-align: right;">الاسم الأول</label>
                        <input type="text" name="firstName" id="firstName" class="form-control" value="<?= $firstName ?>" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text error"><?= $errorsArr['fnameError'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">الاسم الثاني</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" value="<?= $lastName ?>" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text error"><?= $errorsArr['lnameError'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الالكتروني</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= $email ?>" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text error"><?= $errorsArr['emailError'] ?></div>
                    </div>
                    
                    <button type="submit"  name="sendData" value="Send" class="btn btn-primary">ارسال</button>
                </form>
            </div>
        </div>
    </div>


    <div class="container px-5">

    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 my-5 mx-auto">
        <button type="button" id="winner"  class="btn btn-primary">
        اختيار الرابح
        </button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="winnerModal" tabindex="-1" aria-labelledby="winnerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="winnerModalLabel">الرابح</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h2> <?php echo htmlspecialchars($winnerUser['firstname']) ?> </h2>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <div id="cards" class="row mx-2 px-2">
        <?php foreach($allUsers as $user): ?>
                <div class="col-sm-6">
                    <div class="card my-2 bg-light">
                        <div class="card-body">
                            <div class="card-title"><?php echo htmlspecialchars($user['firstname']) ?> </div>
                            <div class="card-text"><?php echo htmlspecialchars($user['email']) ?> </div>
                        </div>
                        <!-- htmlspecialchars($user['lastname']) . " | " . 
                        htmlspecialchars($user['email']); -->
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
    </div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>