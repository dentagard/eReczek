<?php
add_action('phpmailer_init', 'mailerConfig', 10, 1);
add_action( 'wp_ajax_nopriv_sendEmail', 'sendEmail' );
add_action( 'wp_ajax_sendEmail', 'sendEmail' );


function validate()
{
    if (empty($_POST['name'])) {
        $error['msg'] = 'Proszę wpisać swoje imię.';
        $errors[] = $error;
    }
    if (empty($_POST['surname'])) {
        $error['msg'] = 'Proszę wpisać swoje nazwisko.';
        $errors[] = $error;
    }
    if (empty($_POST['email'])) {
        $error['msg'] = 'Proszę wpisać swój email.';
        $errors[] = $error;
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error['msg'] = 'Podany adres email nie jest właściwy.';
            $errors[] = $error;
        }
    }
    if (empty($_POST['message'])) {
        $error['msg'] = 'Proszę wpisać wiadomość.';
        $errors[] = $error;
    }

    return $errors;
}

function mailerConfig(PHPMailer $mailer)
{
    // $mailer->SMTPDebug = SMTP::DEBUG_SERVER;
    $mailer->isSMTP();
    $mailer->Host       = SMTP_HOST;
    $mailer->SMTPAuth   = SMTP_AUTH;
    $mailer->SMTPSecure = SMTP_SECURE;
    $mailer->Username   = SMTP_USERNAME;
    $mailer->Password   = SMTP_PASSWORD;
    $mailer->Port       = SMTP_PORT;
    $mailer->From       = SMTP_FROM;
    $mailer->FromName   = SMTP_FROM_NAME;
}


function sendEmailToMe($message, $name, $surname, $sender_email)
{
    $to = 'reczek.piotr@gmail.com';
    $subject = 'Wiadomość z portalu eReczek';
    $body = 'Otrzymałeś nową wiadomość od:' . PHP_EOL . $name . ' ' . $surname . PHP_EOL
        . 'Treść wiadomości:' . PHP_EOL . $message . PHP_EOL
        . 'Odpowiedz na adres: ' . $sender_email;
    $headers = array('From: kontakt@ereczek.pl');

    return wp_mail($to, $subject, $body, $headers);
}

function sendEmailToClient($message, $name, $surname, $to)
{
    $subject = 'Wiadomość z portalu eReczek';
    $body = 'Witaj ' . $name . ' ' . $surname . PHP_EOL
        . 'Otrzymałem Twoją wiadomość o treści:' . PHP_EOL
        . '------------------------------------------------------' . PHP_EOL
        . $message . PHP_EOL
        . '------------------------------------------------------' . PHP_EOL
        . 'Niedługo się z Tobą skontaktuje.' . PHP_EOL . PHP_EOL
        . 'Pozdrawiam';
    $headers = array('From: kontakt@ereczek.pl');

    return wp_mail($to, $subject, $body, $headers);
}


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
function sendEmail() {
    $response['errors'] =  validate();

    if (count($response['errors']) === 0) {
        if (sendEmailToMe($_POST['message'], $_POST['name'], $_POST['surname'], $_POST['email'])) {
            $msg['msg'] = 'Twoja wiadomość została wysłana';
            $success[] = $msg;
            $response['success'] = $success;
        } else {
            $error['msg'] = 'Nie udało się wysłać Twojej wiadomości.';
            $errors[] = $error;
            $response['errors'] = $errors;
        }

        if (sendEmailToClient($_POST['message'], $_POST['name'], $_POST['surname'], $_POST['email'])) {
            $msg['msg'] = 'Kopia wiadomości została wysłana do Ciebie.';
            $success[] = $msg;
            $response['success'] = $success;
        } else {
            $error['msg'] = 'Nie udało się wysłać kopii Twojej wiadomości.';
            $errors[] = $error;
            $response['errors'] = $errors;
        }
    }

    echo json_encode($response);
    // exit;
    die();
}
