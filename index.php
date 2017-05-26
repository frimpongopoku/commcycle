<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COMM-CYCLE</title>

    <!-- Bootstrap Core CSS -->
    <link href="Creatve Hookups/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Creatve Hookups/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="Creatve Hookups/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="Creatve Hookups/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script> 


  var hide = function(){

    var uploadForm = document.getElementById('about');
    uploadForm.style.display = "none"; 


};

 var unHide = function(){

    var uploadForm = document.getElementById('about');
    uploadForm.style.display = "block"; 


};
</script>

</head>


<body id="page-top">


    <nav id="mainNav" class="topnavbar navbar-primary topnav navbar-fixed-top" style="background-color: black; opacity:0.7; ">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php" style="color:gray;">COMM-CYCLE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a class="page-scroll" href="shop.php" style="color:gray;">SHOP</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="commcycle.php" style="color:gray;">COMM-CYCLE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" style="color:gray;">ABOUT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

     <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" align="right">Help yourself and others.</h1>
                <hr>
                <p align="right"><b>HELLO THERE,</b><br>Do you have any item you do not use anymore? Does it still do its job. Can another person use it. Help another out by uploading an image of that item and filling the upload form.</p>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-info btn-file" >
                            <span class="fileupload-new">Upload</span>
                            <span class="fileupload-exists">File Selected</span>         
                            <input type="file" />
                            </span>
                            <span class="fileupload-preview"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            <a class="btn btn-warning" onclick = "unHide()" style="width:70px;">Post</a>
                    </div>
            
                              
            </div>
        </div>
    </header>
 <section class="bg-primary" id="about" style="border: solid 2px black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Guys we need content here</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    
                </div>
            </div>
        </div>
    </section>

<!-- ########################################################### UPLOAD FORM ##############################################-->
      <section class="bg-primary" id="about" style="display:none; background-color: black;opacity:0.95; border:solid 2px gray; margin-top:5px;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Upload Form</h2>
                    <hr class="light">
                    <p class="text-faded">By uploading this image you certify that the item exists and you have no other plans for that item. You are uploading the item unto the Comm-Sector which indicates that your item is totally free and there are no strings attached. You shall not come back for your item after it has already been given out and been used. <br><input style="color:green;" type="checkbox" >I agree with these terms and conditions.
                            </p>
                   <div class="row">
                    <div class="col-lg-12 text-center">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                            <!--name Box-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="width:350px;" class="form-control" placeholder="Your Name *" id="name" rows="10" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!--Email Box-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" style="width:350px; " class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <!--Item name-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="width:350px;" class="form-control" placeholder="Item Name" id="name" rows="10" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!--Item brand-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" style="width:350px; " class="form-control" placeholder="Item Brand*" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <!--Item category-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" style="width:350px;" class="form-control" placeholder="Item Category, whether clothing male, or female, or others *" id="name" rows="10" required="" data-validation-required-message="Please enter  category">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                
                            
                            

                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" style=" height:120px;width:740px; margin-left:15px;" placeholder="Any additional information about the product. Optional " id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        
                                
                                    
                                    <button type="submit" class="btn btn-danger" style="margin-left:420px;">Cancel upload</button>
                                    <button type="submit" class="btn btn-success">Finalise Post</button>
                                    
                            
                        
                        </form>
            </div>







        </div>
    </section>
<!-- ########################################### STATUS SIDE ######################################### -->
     <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Is anything wrong, do you need to report something? contact us</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">leroymwasaru@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>



















    <!-- jQuery -->
    <script src="Creatve Hookups/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Creatve Hookups/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="Creatve Hookups/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="Creatve Hookups/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="Creatve Hookups/js/creative.min.js"></script>
  


</body>

</html>


<style>
.hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.btn-file{overflow:hidden;position:relative;vertical-align:middle;}.btn-file>input{position:absolute;top:0;right:0;margin:0;opacity:0;filter:alpha(opacity=0);transform:translate(-300px, 0) scale(4);font-size:23px;direction:ltr;cursor:pointer;}
.fileupload{margin-bottom:9px;}.fileupload .uneditable-input{display:inline-block;margin-bottom:0px;vertical-align:middle;cursor:text;}
.fileupload .thumbnail{overflow:hidden;display:inline-block;margin-bottom:5px;vertical-align:middle;text-align:center;}.fileupload .thumbnail>img{display:inline-block;vertical-align:middle;max-height:100%;}
.fileupload .btn{vertical-align:middle;}
.fileupload-exists .fileupload-new,.fileupload-new .fileupload-exists{display:none;}
.fileupload-inline .fileupload-controls{display:inline;}
.fileupload-new .input-append .btn-file{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0;}
.thumbnail-borderless .thumbnail{border:none;padding:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.fileupload-new.thumbnail-borderless .thumbnail{border:1px solid #ddd;}
</style>


  