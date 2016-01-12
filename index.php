<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dummy Caller</title>
    </head>

    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



        <br>
        <br>
        <br>




        <div class="container">
            <form class="form-signin" action="MessageSend.php" id="dummyServiceForm">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Twilio Authentication Parameters</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="AccountSid">Account SID</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="AccountSid"  name = "AccountSid" class="form-control"  required="true"  value="AC49449984a95a99aa8945dc55a520ec0d"   title="Account SID for your Twilio Account">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="AuthToken" data-toggle="tooltip" title="Account Tocken for your Twilio Account">Account SID</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="AuthToken"  name = "AuthToken" class="form-control"  required="true"  value="d36659f607f9b002b0055a8025a5d596">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="SendNumber" data-toggle="tooltip" title="From Phone Number(Must be a Valid Twilio Number)">From(Must be a Valid Twilio Number)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="SendNumber"  name = "SendNumber"  class="form-control"  required="true"  value="+18722405268">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-link" onclick="resetToDefaultValues('dummyServiceForm')">Reset to Default Values</button>
                            </div>
                        </div>
                    </div>
                </div>

            <!--   Logic to Send SMS Message-->

            <footer>
                <p>The Calling and SMS Service is implemented using TWILIO Api Services.The Default Settings given above are for a trial Account created in Twilio.To Customize and create an account in your own name please visit <a href="https://www.twilio.com/user/account/">Twilio Account
                        page</a>.</p>
                <p>
                    This Application is to be used for testing purposes only.The owner bears no responsibility for how a user uses this service and consequences of any illegal activity done with this service would be upon the user of this service.
                </p>
            </footer>

        </div>

        <div class="container">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Send Dummy Message to Any Cell Phone</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phoneNumber" class="sr-only">Enter the Phone Number</label>
                                <input type="phone" id="phoneNumber" name = "phoneNumber"  class="form-control" placeholder="Enter the Phone Number(+XXXXXXXXXXX  eg:+13333333333)" required="true" autofocus value="+13129520618">

                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" value="sendText" name="sendText">Send Text Message!</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Call Any Cell Phone with a recorded Dummy Message</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phoneNumberToCall" class="sr-only">Enter the Phone Number</label>
                                <input type="phone" id="phoneNumberToCall" name = "phoneNumberToCall"  class="form-control" placeholder="Enter the Phone Number(+XXXXXXXXXXX  eg:+13333333333)" required="true" autofocus value="+13129520618">
                            </div>

                            <div class = "col-md-6">
                                <button type="submit" class="btn btn-primary" value="call" name="call">Call !!</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </body>







</html>

<script>
    function resetToDefaultValues(defaultFormId){
        document.forms[defaultFormId].reset();
    }

</script>

