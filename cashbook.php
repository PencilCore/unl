<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include "tpl/head.php" ?>
    <title>账本 | 漫际</title>
    <style>
    .up{
    background-image:linear-gradient( #cc0000,#000747fd);
    position: relative;
    top: 0;
    height: 500px;
    width: 100%;
    overflow: hidden;

}
    </style>
</head>

<body>
    <!-- 顶部通知栏，发布重要信息 -->
    <?php include "tpl/topnotification.php" ?>

    <div class="up">
        <?php include "tpl/nav.php" ?>
        <!-- 这是每个页面的自定义标题 -->
        <div class="content">
            <?php include "tpl/content_up.php" ?>
            <h1>账本</h1>
            <h2>记录收支和用途</h2>
        </div>
    </div>

    <div class="main">
        <div class="section">
            <h1>记账本</h1>
            <p>我会把所有收入与开支记录下来。（数据更新会有延迟）</p>
        </div>

        <style>
            .summary{
                font-style: italic;
                color: rgb(0, 33, 104);
                text-decoration: underline;
            }    
        </style>
        
        <div class="section">
            <h3>2020年2-4月</h3>
            <p>Pencil：27元 [忘了]</p>
            <p class="summary">选择了<a href="https://akkocloud.com">Akkocloud</a>的季付27元套餐作为服务器。（人少，最实惠的选择）</p>
            <p class="summary">交了三个月服务器租金，结余：0元</p>
        </div>
        <div class="section">
            <h3>2020年5-7月</h3>
            <p>Pencil：27元 [20.05.23]</p>
            <p class="summary">交了三个月服务器租金，结余：0元</p>
        </div>
        <div class="section">
            <h3>2020年8-10月</h3>
            <p>Pencil：27元 [20.08.14]</p>
            <p class="summary">交了三个月服务器租金，结余：0元</p>
        </div>
        <div class="section">
            <h3>2020年11-12月</h3>
            <p class="summary">没有活动，服务器休眠</p>
        </div>
        <div class="section">
            <h3>2021年1-3月</h3>
            <p>Pencil：37元 [21.01.01]</p>
            <p>棠铃（星之队）：8.8元 [21.02.08]</p>
            <p>CocaColase：2.46元 [21.02.08]</p>
            <p>三五推: 11.91元 [21.02.08]</p>
            <p>海岛：0.11元 [21.02.08]</p>
            <p>遗迹（星之队）：0.24元 [21.02.08]</p>
            <p>YAN浩（像素群）：5.17元 [21.02.08]</p>
            <p>雷鬼（像素群）：0.16元 [21.02.08]</p>
            <p>Pencil：35元 [21.02.08]</p>
            <p>苏打：8.41元 [21.02.08]</p>
            <p>奶咖（星之队）：10元 [21.02.08]</p>
            <p>晓白：1.11元 [21.02.08]</p>
        <p class="summary">交了三个月服务器租金，网站服务器一个月（？）租金。为星之队开了PE服。买了漫际娘人设-30r总计：110.57元，结余：-26.57元</p>
        </div>
        <div class="section">
            <h3>2021年4-6月</h3>
            <p class="summary">没有活动，服务器休眠</p>
        </div>
    </div>
    <div class="down">
        <?php include "tpl/down.php" ?>
    </div>
    
    <!-- 这个页面顶部样式我放在下面了 -->
    <?php include "tpl/totop.php" ?>
    
    
</body>
</html>