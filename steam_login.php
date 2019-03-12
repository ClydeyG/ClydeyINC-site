<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
    <title>Steam</title>
</head>
<body>
<?php
    require ' openid.php';

    $_STEAMAPI = "0AFE8696D2B01F4ADC359518A7C9D8A6";
    try {
        $openid = LightOpenID('');
        if(!$openid->mode) {
            if(isset($_GET['login'])) {
                $openid->identity = 'http://steamcommunity.com/openid/?l=english';
                header('Location: ' . $openid->authUrl());
            } elseif($openid->mode == 'cancel') {
                echo 'User has canceled authentication!';
            } else {
                if($openid->validate()) {
                    $id = $openid->identity;
                    $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                    preg_match($ptn, $id, $matches);

                    $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
                    $json_object= file_get_contents($url);
                    $json_decoded = json_decode($json_object);

                    foreach ($json_decoded->response->players as $player)
                    {

                    }
                } else {
                    echo "User is not logged in.\n";
                }
            }
        }
        } catch(ErrorException $e) {
            echo $e->getMessage();
    }
?>
</body>
</html>