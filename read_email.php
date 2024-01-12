<?php
use PhpImap\Mailbox as ImapMailbox;
$server = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'knowledgemanagementwilly@gmail.com'; // email kau wil
$password = 'ptsqrrzbqdsxqeoi'; //app password

$mailbox = imap_open($server, $username, $password);

if ($mailbox) {
    $count = imap_num_msg($mailbox);
    echo "Number of messages: $count<br><br>";

    for ($i = 1; $i <= $count; $i++) {
        try {
            $header = imap_headerinfo($mailbox, $i);
            
            echo "Message $i:<br>";
            echo "Subject: " . $header->subject . "<br>";
            echo "From: " . $header->fromaddress . "<br>";
            
            $mail = imap_body($mailbox, $i);
            
            echo "Message:<br>" . nl2br($mail) . "<br><br>";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    imap_close($mailbox);
} else {
    echo "Gagal terhubung ke mailbox.";
}
?>
