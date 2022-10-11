<?php
$response = [
    'top_err' => '',
    'top_success' =>'',
    'name_err' => '',
    'email_err' => '',
    'tel_err' => '',
    'poste_err' => '',
    'message_err' => '',
    'nickname_blk' => ''
];

$contentType = isset($_SERVER['CONTENT_TYPE']) ? trim($_SERVER['CONTENT_TYPE']) : '';

if($contentType == 'application/json'){
    $content = trim(file_get_contents(('php://input')));
    $decoded = json_decode($content, true);
    if (is_array($decoded)){
        foreach($decoded as $name => $value){
            $decoded[$name] = trim(filter_var($value, FILTER_SANITIZE_STRING));
        }

        if(!empty($decoded['nickname'])){
            $response['nickname_blk'] = 'Tratra.';
        }

        if(empty($decoded['name'])){
            $response['name_err'] = 'Error. This input cannot be empty.';
        }

        if(empty($decoded['email'])){
            $response['email_err'] = 'Error. This input cannot be empty.';
        }else if (!filter_var($decoded['email'], FILTER_VALIDATE_EMAIL)){
            $response['email_err'] = 'Error. Input must be Email.';
        }

        if(empty($decoded['tel'])){
            $response['tel_err'] = 'Error. This input cannot be empty.';
        }else if (!filter_var($decoded['tel'], FILTER_SANITIZE_NUMBER_INT)){
            $response['tel_err'] = 'Error. Input must be Phone number.';
        }

        if(empty($decoded['poste'])){
            $response['poste_err'] = 'Error. This input cannot be empty.';
        }

        if(empty($decoded['message'])){
            $response['message_err'] = 'Error. This input cannot be empty.';
        }

        foreach($response as $type => $message){
            if(!empty($response[$type])){
                exit(json_encode($response));
            }
        }

        try{
            $config = require_once __DIR__ . '/config/config.php';
            $recipient_email = $config['mail']['to_email'];

            $subject = 'Groupe Externalisation - Page <Nous recrutons> ';

            $message_body = 'Nom: '.$decoded['name'].'<br>';
            $message_body .= 'Email: '.$decoded['email'].'<br>';
            $message_body .= 'Téléphone: '.$decoded['tel'].'<br>';
            $message_body .= 'Poste: '.$decoded['poste'].'<br>';
            $message_body .= 'Parcours et lettre de motivation:<br>'.$decoded['message'];

            $headers = array(
                'MIME-Version' => '1.0',
                'Content-type' => 'text/html; charset=utf-8',
                'From' => $decoded['name'].'<'.$decoded['email'].'>',
                'X-Mailer' => 'PHP/' . phpversion()
            );

            mail($recipient_email, $subject, $message_body, $headers);


        }catch(Exception $e){
            $response['top_err'] = 'Sorry. There was a problem sending your message';
            exit(json_encode($response));
        }

        $response['top_success'] = 'Success. Message has been sent.';
        exit(json_encode($response));
    }
}

$response['top_err'] = 'Sorry. There was a problem sending your message';
exit(json_encode($response));