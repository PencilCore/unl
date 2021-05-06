<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include "tpl/head.php" ?>
    <?php include "tpl/ua.php" ?>
    <title>主页 | 漫际</title>
</head>

<!-- 21.01.15       V.beta发布，很垃圾的网页！-->
<!-- 21.01.16 00:06 优化了代码结构，我真的不想写了，又臭又长。还没学会怎么模板化html…… -->
<!-- 21.01.16 00:24 原来引用只需要php就行了，include "file"解决。对于样式无法引入的问题，记住被引用的文件也应该是php格式！好顶！ -->
<!-- 21.01.19 20:08 更新了全站代码结构，以后维护更加方便了。更新了捐赠页面，从而有了不稳定的收入来源！-->

<body>
    <!-- 顶部通知栏，发布重要信息 -->
    <?php include "tpl/topnotification.php" ?>

    <div class="up">
        <?php include "tpl/nav.php" ?>
        <!-- 这是每个页面的自定义标题 -->
        <div class="content">
            <?php include "tpl/content_up.php" ?>
            <h1>漫际</h1>
            <h2>很高兴见到你awa</h2>
        </div>
    </div>

    <div class="main">
        <div class="section">
            <h1>welcome</h1>
        </div> 
        <img src="/images/meme/welcome.png">
    </div>



    <div class="down">
        <?php include "tpl/down.php" ?>
    </div>
    
    <!-- 这个页面顶部样式我放在下面了 -->
    <?php include "tpl/totop.php" ?>

</body>
</html>
