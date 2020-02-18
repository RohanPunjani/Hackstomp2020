<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "cllg");

// $s_id = $_SESSION['s_id'];
$s_id = 'ucoeb2018101001';

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Title of the document</title>
        <!-- Material Icon CDN -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS CDN -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!-- Your custom styles -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
        <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .name {
            font-size: 3rem;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
        }

        .row p {
            text-decoration: none;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        hr {
            height: 20px;
            background: #39c3b1;
            border: 0;
        }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h1 class="name">ROHAN PUNJANI</h1>
                <p>Bhiwandi, Maharashtra</p>
                <p>+91 7972733358</p>
                <p>rohanpunjani@gmail.com</p>
                <p></p>
                <hr>
            </div>
            <div class="row">
                <div class="col l4 s12">
                    <h3>Result :</h3>
                </div>
                <div class="col l8 s12">
                    <table class="centered highlight">
                        <thead>
                            <th>Year</th>
                            <th>Sem</th>
                            <th>Score</th>
                            <th>Pointer</th>
                            <th>Grade</th>
                            <th>Percentage</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>I</td>
                                <td>785</td>
                                <td>9.0</td>
                                <td>A</td>
                                <td>76%</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>II</td>
                                <td>684</td>
                                <td>8.4</td>
                                <td>B</td>
                                <td>70%</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>III</td>
                                <td>700</td>
                                <td>10.0</td>
                                <td>O</td>
                                <td>86%</td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td><b></b></td>
                                <td></td>
                                <td><b>9.2</b></td>
                                <td><b>A</b></td>
                                <td><b>75%</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col l4 s12">
                    <h3>Suggested Scholarships:</h3>
                </div>
                <div class="col l8 s12 right">
                    <p>Scholarships based on your Annual Income : </p>
                    <?php
                $annual_income = 240000;
                $sql = "SELECT * from sc_name where family_income > $annual_income";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <li><?php echo $row['sc_name']; ?></li>
                    <?php
                }
                ?>
                </div>
            </div>
            <hr>
        </div>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Materialize JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
        $("document").ready(function() {
            $(".button-collapse").sideNav();
        });
        </script>
    </body>

</html>
