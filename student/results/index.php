<?php

$conn = mysqli_connect("localhost", "root", "", "cllg");
session_start();
//$s_id = $_SESSION['s_id'];

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

        main {
            flex: 1 0 auto;
        }

        </style>
    </head>

    <body>
        <header>
            <header>
                <nav class="cyan">
                    <div class="nav-wrapper">
                        <div class="container">
                            <a href="#" class="brand-logo">Malde Academy</a>
                            <a href="#" data-activates="mobile-menu" class="button-collapse"><i
                                    class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="../forms/">Home</a></li>
                                <li><a href="../forms/resume.php">Profile</a></li>
                                <li><a href="../../login.html">Logout</a></li>
                            </ul>
                            <ul class="side-nav" id="mobile-menu">
                                <li><a href="../forms/">Home</a></li>
                                <li><a href="../forms/resume.php">Profile</a></li>
                                <li><a href="localhost/hackstomp/login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <main>

                <?php

            $sql = "SELECT * FROM personal_info where s_id='$s_id'";
            //            echo $sql;
            $res = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>

                <div class="container">
                    <h4>Result:</h4>
                    <p>
                        <b>Name :</b>
                        <?php echo $row['s_firstName'] . " " . $row['s_middleName'] . " " . $row['s_lastName']; ?>
                    </p>
                    <p>
                        <b>Branch Name :</b>
                        <?php echo $row['s_stream'];  ?>
                    </p>

                    <div class="row">
                        <div class="col s12 l12">
                            <table class="highlight bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Course Title</th>
                                        <th data-field="courseCredits" colspan="2">Course Credits</th>
                                        <th data-field="Grade" colspan="6">Grade</th>
                                        <th data-field="creditsEarned" colspan="2">Credits Earned</th>
                                        <th data-field="gradesPoints" colspan="2">Grades Points</th>
                                        <th data-field="CG" colspan="2">C x G</th>
                                    </tr>
                                    <tr>
                                        <th>TH</th>
                                        <th>TW/P</th>
                                        <!-- <th>TW</th> -->
                                        <th>IA</th>
                                        <th>ESE</th>
                                        <th>THT</th>
                                        <th>TW</th>
                                        <th>OP</th>
                                        <!-- <th>ESE</th> -->
                                        <th>T</th>
                                        <th>TH</th>
                                        <th>TW/P</th>
                                        <th>TH</th>
                                        <th>TW</th>
                                        <th>TH</th>
                                        <th>TW</th>
                                    </tr>
                                </thead>
                                <?php
                                $sql = "SELECT * from `table 3` where s_id='$s_id';";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $sem = $row['sem'];
                                    $stream = $row['stream'];
                                    $inner_sql = "SELECT * FROM `table 4` where sem='$sem' and stream='$stream';";
                                    $inner_res = mysqli_query($conn, $inner_sql);
                                    $count = 0;
                                ?>
                                <tbody>
                                    <tr>
                                        <?php
                                        while ($inner_row = mysqli_fetch_assoc($inner_res)) {
                                            $count = $count + 1;
                                            if ($count % 3 == 1) {
                                                echo "<td>" . $inner_row['subjectName'] . "</td>";
                                                echo "<td>5</td>";
                                                echo "<td>-</td>";
                                                if ($inner_row['subjectCode'][0] == 'l') {
                                                    echo "<td>--</td>";
                                                    echo "<td>--</td>";
                                                    echo "<td>--</td>";
                                                }
                                            }
                                            if ($inner_row['subjectCode'][0] == 'c')
                                                echo "<td>" . $row[$inner_row['subjectCode']] . "</td>";
                                            else {
                                                echo "<td>" . $row[$inner_row['subjectCode']] . "</td>";
                                            }
                                            if ($count % 3 == 0) {

                                                if ($inner_row['subjectCode'][0] == 'c') {
                                                    echo "<td>--</td>";
                                                    echo "<td>--</td>";
                                                    echo "<td>--</td>";
                                                }
                                                echo "
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                        </tr>
                                        <tr>
                                        ";
                                            }
                                        }
                                    }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
            <script>
            $("document").ready(function() {
                $(".button-collapse").sideNav();
            });
            </script>
    </body>

</html>
<?php

            }

?>
