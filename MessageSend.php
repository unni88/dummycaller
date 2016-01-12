<?php

require "twilio-php/Services/Twilio.php";

// Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = $_REQUEST['AccountSid'];//"AC49449984a95a99aa8945dc55a520ec0d";
$AuthToken = $_REQUEST['AuthToken'];//"d36659f607f9b002b0055a8025a5d596";
$client = new Services_Twilio($AccountSid, $AuthToken);
$SendNumber  = $_REQUEST['SendNumber'];//"+18722405268";
$version = "2010-04-01";
$clientForCalling = new Services_Twilio($AccountSid, $AuthToken, $version);




    if (isset($_REQUEST['sendText'])) {
        $enteredPhoneNumber  = $_REQUEST['phoneNumber'];
        $messageToSend = $_REQUEST['textMessageToSend'];
        if( (is_null($messageToSend)) || empty($messageToSend)  ){
            $messageToSend = "This is a Test Message send to this Number";
        }


        $people = array();
        $people[$enteredPhoneNumber] = "User";
        foreach ($people as $number => $name) {

            $sms = $client->account->messages->sendMessage(
            // Step 6: Change the 'From' number below to be a valid Twilio number
            // that you've purchased, or the (deprecated) Sandbox number
                $SendNumber,
                // the number we are sending to - Any phone number
                $number,
                // the sms body
                $messageToSend
            );
        }

        echo "Message Successfully Send to ".$number;
    }
else  if(isset($_REQUEST['call'])){
    $numberToCall = $_REQUEST['phoneNumberToCall'];

    try {
        $clientForCalling = $clientForCalling->account->calls->create(
            $SendNumber, // The number of the phone initiating the call
            $numberToCall, // The number of the phone receiving call
            'http://demo.twilio.com/welcome/voice/' // The URL Twilio will request when the call is answered
        );
        echo 'Started call: ' . $clientForCalling->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

}

?>

