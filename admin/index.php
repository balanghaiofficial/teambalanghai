<?php require_once ('./admin_includes/header.php'); ?>

<body>

    <div id="wrapper">

    <?php require_once ('./admin_includes/nav.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">

                        <h1 class="page-header">
                
                            User

                            <small>

                            <?php if (isset($_SESSION['db_user_name'])) {
                                
                                echo $_SESSION['db_user_name'];

                            }
                            
                            ?>

                            </small>

                        </h1>

                    </div>


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            </div>
        <!-- /#page-wrapper -->

            <?php require_once ('./admin_includes/footer.php'); ?>