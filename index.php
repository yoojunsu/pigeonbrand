<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <title>피죤브랜드사이트</title>
    <?php @include "./_include/head-resources.php" ?>
    <!-- Global css -->
    <link src="./src/default.css?<?=time()?>" type="text/css" rel="stylesheet" />
    <link src="./src/default-narrow.css<?=time()?>" media="screen and (max-width: 800px)" type="text/css" rel="stylesheet" />
    <!-- /Global css -->
    <!-- Global JS -->
    <script src="/src/common.js<?=time()?>" type="text/javascript"></script>
    <!-- /Global Js -->
    <!-- layout-narrow css -->
    <?php if (empty($_GET['sub'])) { ?>
        <link href="./src/main.css<?=time()?>" type="text/css" rel="stylesheet" />
        <link href="./src/main-narrow.css<?=time()?>" media="screen and (max-width: 800px)" type="text/css" rel="stylesheet" />
    <?php } else { ?>
        <link href="./src<?=$_GET['sub']?>.css<?=time()?>" type="text/css" rel="stylesheet" />
        <link href="./src<?=$_GET['sub']?>.css<?=time()?>" media="screen and (max-width: 800px)" type="text/css" rel=stylesheet />
    <?php } ?>
</head>
<body>
    <!------ 헤더 영역 ---------->
    <div class="header">
        <?php @include "./_include/header.php" ?>
    </div>
    <!------ /헤더 영역 --------->
    <!------ 메인 영역 ---------->
    <div class="main-wrap">
        <div class="main">
            <?php
            if (isset($_GET['sub'])) {
                @include "./sub/{$_GET['sub']}.php"
            } else {
                @include "./main.php"
            }
            ?>
        </div>
    </div>
    <!------ /메인 영역 ---------->
    <!------ 풋터 영역 ---------->
    <div class="footer">
        <? @include "./_include/footer.php" ?>
    </div>
</body>
</html>