<!-- 该文件用于皮肤站邀请码的传递 -->

<!DOCTYPE html>
<?php 
$passwd = isset($_GET['p']) ? $_GET['p'] : '';
if ($passwd != 'xxxxxxxxxxxxxxx') {
    echo "在链接后加上?p=xxx，把xxx替换成一串22字的的英文字母（提示：漫际服务器的口号）";
exit;}
// header("Content-type:text/html;charset=utf-8");//字符编码设置 
$servername = ""; 
$username = ""; 
$password = ""; 
$dbname = ""; 

// 创建连接 
$link =mysqli_connect($servername, $username, $password, $dbname); 
// 故障后处理
if (!$link) {
    echo "现在可能出故障了，联系管理员吧。";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//sql表单
$sql="SELECT id,code FROM invitation_codes ORDER BY RAND() LIMIT 1";
mysqli_select_db($link,'');
//返回的表单值
$retval = mysqli_query( $link, $sql );
if(! $retval ) {
    die('Could not get data: ' . mysqli_error($link));
}
mysqli_close($link);
?>
<html>
    <body>
        <div class="content">
    <p><?php echo "好的，现在请查看您的邀请码（每次刷新都能有一条新的）"; ?></p>
    <p><strong><?php echo "邀请码:"; ?></strong>
    <?php while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
        echo $row['code'];}?></p>
        <p>前往<a href="https://skin.unl.world">UNL SKIN STATION</a>注册吧！</p>
        </div>
    </body>

</html>
<style>
body{
    background-color: black;
    color: white;
    margin: 0;
    padding: 0;
    font-size:18px;
    line-height: 22px;
}
.content{
    margin: 0 0 0 10px;}
strong{
      color:#0099ff; }
      a{
          color:white;
          text-decoration: underline;
      }
      a:hover{
        color:#0099ff;
      }
</style>