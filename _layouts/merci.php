<!DOCTYPE html>
<!-- Camera is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html lang="fr"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>S-17</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'>
    <style>
                html,body {
                        height: 100%;
                        margin: 0;
                        padding: 0;
                }
                #back_to_camera {
                        background: rgba(255,255,255,.9);
                        clear: both;
                        display: block;
                        height: 40px;
                        line-height: 40px;
                        padding: 20px;
                        position: relative;
                        z-index: 1;
                }
                #camera_wrap_4 {
                        bottom: 0;
                        height: 90%;
                        left: 0;
                        margin-bottom: 0!important;
                        position: relative;
                        right: 0;
                        top: 1;
                }
                .camera_bar {
                        z-index: 2;
                }
                .camera_thumbs {
                        margin-top: -100px;
                        position: relative;
                        z-index: 1;
                }
                .camera_thumbs_cont {
                        border-radius: 0;
                        -moz-border-radius: 0;
                        -webkit-border-radius: 0;
                }
                .camera_overlayer {
                        opacity: .1;
                }
        </style>
      <style type="text/css">
        body {
          background-color: #2B2B2B;
        }
        .namelogo h1 {
          color: #FF4500;
        }
        .nav-bar {
          padding-top: 10px;
        }
        .button {
          background-color: #FF4500;
        }
        .test:hover {
            background-color: yellow;
        }
        .appsec {
          padding-top: 80px;
          background-color: #900000;
        }
        .appsec h1, .appsec p, .appsec h3 {
          color: white;
        }
        .rech h1, .rech p, .rech h3 {
          color: white;
        }
        .rech {
            padding-bottom: 50px;
        }
        hr.style-seven {
            height: 30px;
            border-style: solid;
            border-color: black;
            width: 50%;
            margin:auto;
            border-width: 1px 0 0 0;
            border-radius: 20px;
        }
        hr.style-seven:before { /* Not really supposed to work, but does */
            display: block;
            content: "";
            height: 30px;
            margin-top: -31px;
            border-style: solid;
            border-color: black;
            border-width: 0 0 1px 0;
            border-radius: 20px;
        }
        .contact {
              background-color: #2B2B2B;
              padding-bottom: 30px;
        }
        .contact h1, .contact p, .contact h3 {
          color: white;
        }
        .white {
          color: white;
        }
        </style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{{content}}


        <?php
                $from .= "email : ";
                $from .= $_POST["email"];
                $msg = "Client : ";
                $msg .= "\n";
                $msg .= "\n";
                $msg .= "nom : ";
                $msg .= $_POST["lastname"];
                $msg .= "\n";
                $msg .= "prenom : ";
                $msg .= $_POST["firstname"];
                $msg .= "\n";
                $msg .= "telephone : ";
                $msg .= $_POST["phone"];
                $msg .= "\n";
                $msg .= "commentaire : ";
                $msg .= $_POST["comment"];
                $msg .= "\n";
                $msg .= "\n";
                $msg .= "Recherche : ";
                $msg .= "\n";
                $msg .= "\n";
                $msg .= "email : ";
                $msg .= $_POST["email"];
                $msg .= "\n";
                $msg .= "cp : ";
                $msg .= $_POST["cp"];
                $msg .= "\n";
                $msg .= "type : ";
                $msg .= $_POST["type"];
                $msg .= "\n";
                $msg .= "marque : ";
                $msg .= $_POST["marque"];
                $msg .= "\n";
                $msg .= "prix max : ";
                $msg .= $_POST["prix"];
                $msg .= "\n";
                $msg .= "energie : ";
                $msg .= $_POST["energie"];
                $msg .= "\n";
                $msg .= "km max: ";
                $msg .= $_POST["km"];
                $msg .= "\n";
                $msg .= "année max: ";
                $msg .= $_POST["anne"];
                $msg .= "\n";
                $msg .= "conso max: ";
                $msg .= $_POST["conso"];
                $msg .= "\n";
                $msg .= "transmission: ";
                $msg .= $_POST["transmission"];
                $msg .= "\n";
                $msg .= "nbportes: ";
                $msg .= $_POST["nbportes"];
                $msg .= "\n";
                $msg = wordwrap($msg, 70);
                mail("rl.stand17@gmail.com", "Site : S-17", $msg, $from);
        ?>
    <script type='text/javascript' src='../js/vendor/jquery.min.js'></script>
    <script type='text/javascript' src='../js/jquery-ui.js'></script> 
    <script type='text/javascript' src='../js/vendor/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../js/vendor/camera.min.js'></script> 
    <script src="../js/slider.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/foundation/foundation.clearing.js"></script>
    <script src="../js/foundation/foundation.slider.js"></script>
    <script src="../js/vendor/modernizr.js"></script>
    <script>
      $(document).foundation();
      $(document).foundation('magellan', 'reflow');
    </script>
    <script>
      $("#lcontact").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 2000);
      });
    </script>

</body> 
</html>