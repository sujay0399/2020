<?php
if (!$_COOKIE["zeroten"]) {
    setcookie("zeroten", base64_encode(json_encode(["page"=>"main","role" => "12dea96fec20593566ab75692c9949596833adc9"])), time() + (86400 * 30), "/", "10.adventofctf.com", true);
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Advent of CTF 10</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <style>
         .row-margin-05 { margin-top: 0.5em; }
         .row-margin-10 { margin-top: 1.0em; }
         .row-margin-20 { margin-top: 2.0em; }
         .row-margin-30 { margin-top: 3.0em; }
        </style>
    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="http://browsehappy.com/">upgrade your browser</a> to improve
            your experience.
            </p>
        <![endif]-->
        <div class="jumbotron bg-transparent mb-0 radius-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <h1 class="display-2">Advent of CTF <span class="vim-caret">10</span></h1>
                        <div class="lead mb-3 text-mono text-warning">Your daily dose of CTF for December</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="card text-center">
                            <div class="card-header">
                               Pages in Santa's big book
                            </div>
                            <div class="card-body">
                                <?php

                                $role = "direct";

                                if ($_COOKIE["zeroten"]) {
                                    $data = json_decode(base64_decode($_COOKIE["zeroten"]), true);
                                    $role = $data["role"];
                                }
                                if (!$data) {
                                    $data["page"] = "main";
                                }

                                $target = $data["page"] . ".php";
                                if (strpos($target, "index") !== false) {
                                    $target = "main.php";
                                }
                                include($target);
                                ?>
                            </div>
                            <div class="card-footer">
                                Who has been most naughty?
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-margin-30">
                    <div class="col-xl-6 mx-auto">
                        <div class="card mb-3 text-center bg-dark text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="/logo.png">
                                    </div>
                                    <div class="col-md-9 offset-md-1 align-middle">
                                        <p class="text-center">
                                            <span class="align-middle">
                                                The Advent of CTF is brought to you by <a href="http://www.novi.nl">NOVI Hogeschool</a>. It is built by <a href="https://twitter.com/credmp/" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i> @credmp</a>. If you are looking for a Dutch Cyber Security Bachelor degree or bootcamp, <a href="https://www.novi.nl">check us out</a>. (Dutch follows) Als je al weet dat je een opleiding wilt volgen, neem dan <a href="https://app.hubspot.com/meetings/novi/hbo-cs">contact op met Valerie
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
