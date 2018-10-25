<!--IT15529732-->
<?php 
$grantType= 'authorization_code';
$clientId = '811dit6wr6nk26';
$clientSecret = 'jKtMaju3Dcgm7OiD';
$redirectUri= "http%3A%2F%2Flocalhost%2Foauth%2Frishibakes%2Fcallback.php";
$code = $_GET['code'];


if($code!= null){
    $url = 'www.linkedin.com/uas/oauth2/accessToken';
    $data = array(
    'grant_type' => $grantType,
    'code' => $code,
    'redirect_uri' => $redirectUri,
    'client_id' => $clientId,
    'client_secret' => $clientSecret
    );
    
    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    //obtaining access token by sending authorization code
    $result = file_get_contents($url, false, $context);
    var_dump($result);

    //assigning the access token to a variable
    $response = json_decode($result, true);
    $accessToken = $response['access_token'];
    var_dump($accessToken);

    //obtaining the basic profile and email information by sending the access token to LinkedIn resource server
    $url2 = 'https://api.linkedin.com/v1/people/~:(email-address,id,first-name,last-name,industry,picture-url,public-profile-url,headline)?format=json';

    $options2 = array(
        'http' => array(
            'header'  => "Authorization: Bearer "+$accessToken+"\r\n",
            'method'  => 'GET'
        )
    );
    $context2  = stream_context_create($options2);
    $response2=file_get_contents($url2,false, $context2);
}
