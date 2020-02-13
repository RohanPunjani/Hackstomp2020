<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "cllg");

// $s_id = $_SESSION['s_id'];
$s_id = 'ucoeb2018101001';
$sql = "SELECT * from personal_info where s_id='$s_id';";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
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
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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

        .form-heading {
            padding: 30px;
        }

        body {
            background-image: url('../../assets/images/bgGIF.gif');
            background-size: cover;

        }

        main {
            background: rgba(0, 0, 0, .5);
            color: white;

        }

        .form-form {
            background: rgba(255, 255, 255, 0.09);
            border-radius: 60px 0 0;
        }

        </style>
    </head>

    <body>
        <header>

        </header>
        <main>
            <!-- Your content here -->
            <?php include('./personal_info_form.php'); ?>
        </main>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Materialize JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
        $("document").ready(function() {
            $(".button-collapse").sideNav();

            $('.datepicker').pickadate({
                // onSet: function() {
                //     this.close();
                // }
                format: 'yyyy-mm-dd',
                formatSubmitted: 'yyyy-mm-dd',
                selectYears: 48,
                selectMonth: true,
            });
            $('.arrow').click(function() {
                $(this).toggleClass("fa-angle-up").addClass("fa-angle-down");
                $class = $(this).attr("for");
                $($class).animate({
                    height: "toggle",
                });
            });

        });
        </script>
    </body>

</html>


<?php

}
$_SESSION['s_id'] = $s_id;

?>
