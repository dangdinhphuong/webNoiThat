

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Quangdiep">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="http://localhost/webNoiThat/templace/css/font-face.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="http://localhost/webNoiThat/templace/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="http://localhost/webNoiThat/templace/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="http://localhost/webNoiThat/templace/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Main CSS-->
    <link href="http://localhost/webNoiThat/templace/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">


        <!-- MENU SIDEBAR-->
        <?php include "../layout/sidebar.php" ?>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include "../layout/header.php" ?>
            <div class="main-content" style="padding-top:50px">
            <!-- VIEW_NAME là màn hình nội cần show -->
            <div class="content">
            <div class="container p-5" style="background-color: #fff ;">
            <?php require $VIEW_NAME;?>
            </div>
            </div>

            <?php include "../layout/fooder.php" ?>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="http://localhost/webNoiThat/templace/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="http://localhost/webNoiThat/templace/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="http://localhost/webNoiThat/templace/vendor/slick/slick.min.js">
    </script>
    <script src="http://localhost/webNoiThat/templace/vendor/wow/wow.min.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/animsition/animsition.min.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="http://localhost/webNoiThat/templace/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="http://localhost/webNoiThat/templace/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="http://localhost/webNoiThat/templace/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="http://localhost/webNoiThat/templace/js/main.js"></script>

    <script>
        function deleteProducts(MASP) {
            alert("Bạn thật sự muốn Xóa sản phẩm " + MASP);

        }
    </script>

</body>

</html>
<!-- end document-->