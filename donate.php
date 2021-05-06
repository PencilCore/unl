<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include "tpl/head.php" ?>
    <title>捐赠 | 漫际</title>
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
            <h1>捐赠</h1>
            <h2>用爱发电❤</h2>
        </div>
    </div>
    <div class="main">
        <div class="section">
        <h1>向我们<ruby>捐赠<rt>song qian</rt></ruby></h1>
        <img src="images/meme/好耶.png">
        <p>这里不是某个个人的捐款页，我们所有的捐款保证会全部使用在漫际服务器的维护、升级与周边等处。</p>
        <p><strong>请注意：捐款不会让你在服务器内获得任何好处，所以捐款前请三思。</strong></p>
        <p>我们十分感谢每一位向我们捐款的玩家，是你们让漫际变得更加可靠。每一笔收入通通都会记录在<a href="cashbook.php">记账本</a>中以表感谢。</p>
        <p>下面是我们的捐款地址，支持支付宝/微信。</p>
        <p><strong>请务必备注或告知服主/管理员此笔款项是捐赠给漫际服务器的，不然服主/管理员可能会<ruby>搞混<rt>si  tun</rt></ruby>的呢awa（不会私吞的啦）</strong></p>
        <row >
            <img style="height:400px" src="images/alipay-pay.jpg">
            <img style="height:400px" src="images/wechatpay-pay.jpg">
        </row>
    </div>
    </div>
    <div class="down">
        <?php include "tpl/down.php" ?>
    </div>
    
    <!-- 这个页面顶部样式我放在下面了 -->
    <?php include "tpl/totop.php" ?>
    
    
</body>
</html>