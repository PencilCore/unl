<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include "tpl/head.php" ?>
    <title>欢迎 | 漫际</title>
</head>

<!-- 21.01.15       V.beta发布，很垃圾的网页！-->
<!-- 21.01.16 00:06 优化了代码结构，我真的不想写了，又臭又长。还没学会怎么模板化html…… -->
<!-- 21.01.16 00:24 原来引用只需要php就行了，include "file"解决。对于样式无法引入的问题，记住被引用的文件也应该是php格式！好顶！ -->

<body>
    <!-- 顶部通知栏，发布重要信息 -->
    <?php include "tpl/topnotification.php" ?>

    <div class="up">
        <?php include "tpl/nav.php" ?>
        <!-- 这是每个页面的自定义标题 -->
        <div class="content">
            <?php include "tpl/content_up.php" ?>
            <h1>欢迎</h1>
            <h2>进服指南</h2>
        </div>
    </div>
    <div class="main">
        <div class="section">
        <h1>欢迎！</h1>
        <p>我们超级快乐，超级开心滴能拥有你这么一位新玩家。漫际服务器的成员们都是这么来的。在和小伙伴们一起快乐游玩之前，请先根据以下的操作步骤设置你的客户端吧。</p>
        <p>你先需要在<a href="http://skin.unl.world">皮肤站</a>注册你的账号（关于邀请码，请去论坛看看），这将会与你在<a href="http://forum.unl.world">漫际小站</a>上的账号相同，这将是你在漫际的唯一身份凭证。（<strong>建议：密码应设置成独一无二的，且应该在妥当的位置保管好。）</strong></p>
        <h2>对于已经拥有启动器的玩家，且已经知晓他们用法的新玩家们</h2>
        <p>请直接在启动器内安装1.14.4游戏版本并创建新账户，选择<strong>外置登录模式</strong>，认证服务器输入<code>https://skin.unl.world/api/yggdrasil</code>，然后输入你在<a href="http://skin.unl.world">皮肤站</a>注册的账号，你应该会看到类似下图的画面。</p>
        <p>下面使用HMCL来做演示，其他启动器（PCL、BakaXL等的步骤基本相似）</p>
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-1.png">
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-2.png">
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-3.png">
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-4.png">
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-5.png">
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-6.png">
        <img class="welcome-introduction" style="max-height:450px;width:80vw;object-fit:contain;" src="images/welcome/welcome-introduction-7.png">
        <p>进入游戏后，单击<strong>多人游戏</strong>，单击<strong>添加服务器</strong>按钮。</p>
        <p>在地址一栏输入<strong><a>minecraft.unl.world</a></strong>，名称请随意填写。</p>
        <p>接下来，快乐滴游戏吧！</p>
        <!-- <p>然后进入服务器，按照要求在聊天框内输入<code>/register [你的密码] [你的密码]</code>，然后再输入<code>/login [你的密码]</code>就可以进行游戏了。</p> -->
        <h2>对于未拥有启动器的玩家，且不知晓他们用法的新玩家们</h2>
        <p>我们建议你在群内（群号在底部）下载我们的整合包，这里面包含了几个mod，还有许多光影，比较适合使用。配置方法大可参照上面。</p>
        <p>当然，你也可以使用别人的整合包，可能会比我们的更加好用。</p>
        </div>
    <div class="section">
        <h1>要干什么</h1>
        <p>你可以划水，砍树，建房。</p>
        <p>啥都可以干，别偷窃就好了，之后我们会有更多的计划出来的，现在只要慢慢潜水（bushi</p>
    </div>
    <h2>星之队|PE漫际服务器（不对外开放）</h2>
    <p>ip: mcpe.unl.world</p>
    <p>PE安卓下载：<a href="https://share.weiyun.com/QSovulwl">https://share.weiyun.com/QSovulwl</a></p>
    </div>
    <div class="down">
        <?php include "tpl/down.php" ?>
    </div>
    
    <!-- 这个页面顶部样式我放在下面了 -->
    <?php include "tpl/totop.php" ?>
    
    
</body>
</html>