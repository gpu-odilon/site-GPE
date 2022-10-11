<?php
$response = [
    'contact_top_err' => '',
    'contact_top_success' =>'',
    'contact_name_err' => '',
    'contact_email_err' => '',
    'contact_tel_err' => '',
    'contact_subject_err' => '',
    'contact_message_err' => '',
    'contact_nickname_blk' => ''
];

$contentType = isset($_SERVER['CONTENT_TYPE']) ? trim($_SERVER['CONTENT_TYPE']) : '';

if($contentType == 'application/json'){
    $content = trim(file_get_contents(('php://input')));
    $decoded = json_decode($content, true);
    if (is_array($decoded)){
        foreach($decoded as $name => $value){
            $decoded[$name] = trim(filter_var($value, FILTER_SANITIZE_STRING));
        }

        if(!empty($decoded['contactNickname'])){
            $response['contact_nickname_blk'] = 'Tratra.';
        }

        if(empty($decoded['contactName'])){
            $response['contact_name_err'] = 'Error. This input cannot be empty.';
        }

        if(empty($decoded['contactEmail'])){
            $response['contact_email_err'] = 'Error. This input cannot be empty.';
        }else if (!filter_var($decoded['contactEmail'], FILTER_VALIDATE_EMAIL)){
            $response['contact_email_err'] = 'Error. Input must be Email.';
        }

        if(empty($decoded['contactTel'])){
            $response['contact_tel_err'] = 'Error. This input cannot be empty.';
        }else if (!filter_var($decoded['contactTel'], FILTER_SANITIZE_NUMBER_INT)){
            $response['contact_tel_err'] = 'Error. Input must be Phone number.';
        }

        if(empty($decoded['contactSubject'])){
            $response['contact_subject_err'] = 'Error. This input cannot be empty.';
        }

        if(empty($decoded['contactMessage'])){
            $response['contact_message_err'] = 'Error. This input cannot be empty.';
        }

        foreach($response as $type => $message){
            if(!empty($response[$type])){
                exit(json_encode($response));
            }
        }

        try{
            $config = require_once __DIR__ . '/config/config.php';
            $recipient_email = $config['mail']['to_email'];

            $subject = 'Groupe Externalisation - Page <Contact> ';

            $message_body = 'Nom: '.$decoded['contactName'].'<br>';
            $message_body .= 'Email: '.$decoded['contactEmail'].'<br>';
            $message_body .= 'Téléphone: '.$decoded['contactTel'].'<br>';
            $message_body .= 'Subject: '.$decoded['contactSubject'].'<br>';
            $message_body .= 'Message:<br>'.$decoded['contactMessage'];

            $headers = array(
                'MIME-Version' => '1.0',
                'Content-type' => 'text/html; charset=utf-8',
                'From' => $decoded['contactName'].'<'.$decoded['contactEmail'].'>',
                'X-Mailer' => 'PHP/' . phpversion()
            );

            mail($recipient_email, $subject, $message_body, $headers);


        }catch(Exception $e){
            $response['contact_top_err'] = 'Sorry. There was a problem sending your message';
            exit(json_encode($response));
        }

        $response['contact_top_success'] = 'Success. Message has been sent.';
        exit(json_encode($response));
    }
}

$response['contact_top_err'] = 'Sorry. There was a problem sending your message';
exit(json_encode($response));