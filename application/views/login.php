<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/mdb.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
    <title><?= $title; ?></title>
</head>

<body style="background-color:#ffe300">
    <div class="container-fluid">
        <!--Grid row-->
        <div class="row d-flex justify-content-center mt-5">
            <!--Grid column-->
            <div class="col-md-5">
                <form id="loginform" method="post" class="border border-light p-5 bg-white">
                    <div class="text-center"><img src="<?= base_url(); ?>assets/img/logo.png" height="100" alt="mdb logo" /></div>
                    <p class="h4 mb-4 text-center">Sign in</p>
                    <div id="validateerror" class="alert alert-danger alert-dismissible" style="display:none" role="alert">
                        Username atau Password salah
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="text" id="login_username" name="login_username" class="form-control mb-4" placeholder="Username">

                    <input type="password" id="login_password" name="login_password" class="form-control mb-4" placeholder="Password">

                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>


                </form>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>

    <script>
        $('#validateerror').alert();
        $('.close').click(function() {
            $('#validateerror').hide();
        });

        $(document).ready(function() {
            // Form Validation
            $("form#loginform").validate({
                rules: {
                    login_username: "required",
                    login_password: "required"
                },
                messages: {
                    login_username: "Username tidak boleh kosong",
                    login_password: "Password tidak boleh kosong"
                },
                errorPlacement: function(label, element) {
                    label.addClass('err');
                    label.insertBefore(element);
                },
                wrapper: 'span',
                submitHandler: function(form) {
                    var $inputs = $('#loginform').find("input, select, button, textarea");
                    var serializedData = $('#loginform').serialize();
                    $inputs.prop("disabled", true);

                    request = $.ajax({
                        url: "<?= base_url()?>/login/cek",
                        type: "post",
                        data: serializedData
                    });
                    request.done(function(response, textStatus, jqXHR) {
                        if (response == "Gagal") {
                            $('#validateerror').fadeIn();
                            console.log("Bukan sukses");
                        } else {
                            window.location.replace('<?= base_url();?>');
                        }
                    });
                    request.fail(function(jqXHR, textStatus, errorThrown) {
                        // Log the error to the console
                        console.error(
                            "The following error occurred: " +
                            textStatus, errorThrown
                        );
                    });
                    request.always(function() {
                        // Reenable the inputs
                        $inputs.prop("disabled", false);
                    });
                }
            });
            // Ajax Login Check
            // function logz() {
            //     var request;
            //     $("#loginform").submit(function(e) {
            //         e.preventDefault();
            //         if (request) {
            //             request.abort();
            //         }
            //         var $inputs = $(this).find("input, select, button, textarea");
            //         var serializedData = $(this).serialize();
            //         $inputs.prop("disabled", true);

            //         request = $.ajax({
            //             url: "login/cek",
            //             type: "post",
            //             data: serializedData
            //         });
            //         request.done(function(response, textStatus, jqXHR) {
            //             if (response != "Sukses") {
            //                 $('#validateerror').fadeIn();
            //                 console.log("Bukan sukses");
            //             } else {
            //                 console.log("Sukses");
            //             }
            //         });
            //         request.fail(function(jqXHR, textStatus, errorThrown) {
            //             // Log the error to the console
            //             console.error(
            //                 "The following error occurred: " +
            //                 textStatus, errorThrown
            //             );
            //         });
            //         request.always(function() {
            //             // Reenable the inputs
            //             $inputs.prop("disabled", false);
            //         });
            //     });
            // }
        });
    </script>
    <!-- <script>
        $(document).ready(function() {
            $("#loginform").submit(function(e){
                e.preventDefault();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                var data = $(this).serialize();

                $.ajax({
                    url:url,
                    type:method,
                    data:data
                }).done(function(data){
                    if(data !=='') {
                        $('#response').show('fast');
                        $('#loginform')[0].reset();
                    } else {
                        window.location.href='/';
                        throw new Error('go');
                    }
                });
            });
            $("div").each(function(index) {
                var cl = $(this).attr('class');
                if(cl=='') {
                    $(this).hide();
                }
            })
        });
    </script> -->
</body>

</html>
