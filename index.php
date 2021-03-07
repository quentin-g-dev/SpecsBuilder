<?php
$contentDir = 'content';
include './app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpecsBuilder</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body class="bg-light" id="top">
    <!--TOOLBAR-->
    <section id="toolbar" class="my-1 mx-3 my-md-2 mx-md-5 d-flex justify-content-center">
        <button class="btn btn-dark m-2" onclick="copyAsHTML();">Copy as HTML</button>
        <button class="btn btn-dark m-2" onclick="copyAsPlainText();">Copy as plain text</button>
        <button class="btn btn-dark m-2" id="doc"><a href="#">Export as .DOC</a></button>
        <button class="btn btn-dark m-2" onclick="printSpecs();">Print</button>
    </section>
    <section id="specs" class="bg-white w-75 m-auto my-1 mx-3  p-1 p-md-2 d-flex flex-column">
        <!--"TOP BUTTON"-->
        <a href="#top"><button id="topBox" class="btn bg-info text-light p-4 rounded">&#8593;</button></a>

        <!--SPECS TITLE-->
        <h1  id="specsTitle" class="text-center mb-3"><?= $specs['name'] ?></h1>

        <!--TOP MENU-->
        <div  class="border border-grey my-3 py-3 px-5 w-100 m-auto d-flex ">
            <ul class="p-2"><?=  menu($specs['hierarchy'],2); ?></ul>
        </div>
        <!--CONTENTS-->
        <div id="specsContent" class="my-3">            
            <?= display($specs['hierarchy'],2);?>
        </div>
    </section>  
    <script src="./assets/js/jquery-3.5.1.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>