<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $response;
    // $isValid = true;
    // if( !isset($_POST['name'])){
    //     $error->msg = 'Proszę wpisać swoje imię.';
    //     $response->errors[] = $error;
    //     $isValid = false;
    //     // echo json_encode($response);
    // }
    // if( !isset($_POST['surname'])){
    //     $error->msg = 'Proszę wpisać swoje nazwisko.';
    //     $response->errors[] = $error;
    //     $isValid = false;
    //     // echo json_encode($response);
    // }
    // if( !isset($_POST['email'])){
    //     $error->msg = 'Proszę wpisać swój email.';
    //     $response->errors[] = $error;
    //     $isValid = false;
    //     // echo json_encode($response);

    // }
    // if( !isset($_POST['message'])){
    //     $error->msg = 'Proszę wpisać wiadomość.';
    //     $response->errors[] = $error;
    //     $isValid = false;
    //     // echo json_encode($response);
    // }

    $error->msg = 'Proszę wpisać wiadomość.';
    $response->errors = [$error];
    $error2->msg = 'Dupsko';
    $response->errors = $error2;


    $isValid = false;

    // $msg->msg = 'Wszystko jest OK';
    // $response->success = [$msg];

    echo json_encode($response);
    exit;



    // Handle AJAX request (start)
    // if( isset($_POST['name'])){
        // $name = $_POST['name'];
        // echo json_encode($name);
    // }
}
?>
