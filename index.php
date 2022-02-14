<?php
if (!str_contains($_SERVER["HTTP_USER_AGENT"], "Chrom")) {
    ?>
    <pre id="Get">
        <?= print_r($_GET) ?>
    </pre>
    <pre id="Post">
        <?= print_r($_POST) ?>
    </pre>
    <pre id="Request">
        <?= print_r($_REQUEST) ?>
    </pre>
    <?php
    return;
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Spit-back</title>
</head>
<body>
<div class="container">
    <h1 class="display-4">PHP Spit-back</h1>
    <div class="accordion" id="accordionPhpSpitBack">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGET"
                        aria-expanded="true" aria-controls="collapseGET">
                    $_GET
                </button>
            </h2>
        </div>
        <div id="collapseGET" class="accordion-collapse collapse show" aria-labelledby="headingOne">
            <div class="accordion-body">
                <pre><?= print_r($_GET) ?></pre>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsePOST" aria-expanded="true" aria-controls="collapsePOST">
                    $_POST
                </button>
            </h2>
            <div id="collapsePOST" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                <div class="accordion-body">
                    <pre><?= print_r($_POST) ?></pre>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingReq">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseReq" aria-expanded="true" aria-controls="collapseReq">
                    $_REQUEST
                </button>
            </h2>
            <div id="collapseReq" class="accordion-collapse collapse show" aria-labelledby="headingReq">
                <div class="accordion-body">
                    <pre><?= print_r($_REQUEST) ?></pre>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingENV">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEnv" aria-expanded="false" aria-controls="collapseEnv">
                    $_ENV
                </button>
            </h2>
            <div id="collapseEnv" class="accordion-collapse collapse" aria-labelledby="headingENV">
                <div class="accordion-body">
                    <pre><?= print_r($_ENV) ?></pre>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingServ">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseServ" aria-expanded="false" aria-controls="collapseServ">
                    $_SERVER
                </button>
            </h2>
            <div id="collapseServ" class="accordion-collapse collapse" aria-labelledby="headingServ">
                <div class="accordion-body">
                    <pre><?= print_r($_SERVER) ?></pre>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingPhpInfo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsePhpInfo" aria-expanded="false" aria-controls="collapsePhpInfo">
                    PHP Info
                </button>
            </h2>
            <div id="collapsePhpInfo" class="accordion-collapse collapse" aria-labelledby="headingPhpInfo">
                <div class="accordion-body">
                    <pre><?= phpinfo() ?></pre>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
