<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>چت آنلاین همیار</title>
    <!-- Botstrap CSS -->
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="src/css/style.css" />
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <span>چت آنلاین همیار</span>
                    </div>
                    <!-- ./ card header -->
                    <div class="card-body chat-care">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg ">

                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">
                                        علیرضا مختاری
                                    </span>
                                    <span class="direct-chat-timestamp pull-right">
                                        23 شهریور - 23:55
                                    </span>
                                </div>

                                <img class="direct-chat-img" src="src/img/user1-128x128.jpg" alt="Message User Image" />
                                <div class="massage-list">

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- ./ card body  -->
                    <div class="card-footer">
                        <form method="post" id="formHamyarChat">
                            <div class="input-group">
                                <input id="message" type="text" class="form-control input-sm rounded-pill mx-1" placeholder="یک پیام بنویسید ..." />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary rounded-pill" id="submitMessage">
                                        ارسال
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- ./ card-footer -->
                </div>
                <!-- ./ card -->
                <!-- ./ form Hamyar chat -->
            </div>
            <!-- ./ col -->
        </div>
        <!-- ./ row -->
    </div>
    <!--./ Container -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="position-absolute top-0 start-0 m-3">
                    <div class="toast align-items-center toast-msg" id="ts" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                <i class="bi bi-check"></i>
                            </div>
                            <button type="button" class="btn-close me-2 me-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.min.js"></script>
    <!-- Jquery -->
    <script src="src/js/jquery.min.js"></script>
    <!-- App -->
    <script src="src/js/app.js"></script>
</body>

</html>