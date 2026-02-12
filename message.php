<?php
    
    $resend = Resend::client('re_xxxxxxxxx');

    $resend->emails->send([
    'from' => 'thythearo05@gmail.com',
    'to' => 'thythearo200621@gmail.com',
    'subject' => 'Hello World',
    'html' => '<strong>it works!</strong>',
    ]);
?>