<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css" defer type="text/css">
    <link rel="stylesheet" href="src/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="src/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="src/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="src/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="src/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="src/css/jquery-ui.min.css" type="text/css">

    <link href="plugin/smart-wizard/css/smart_wizard.css" rel="stylesheet" type="text/css" />
    <link href="plugin/smart-wizard/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="src/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="src/css/style.css" type="text/css">

    <link rel="stylesheet" href="src/css/custom.css" type="text/css">

    <style>
    @font-face {
  /* font-family: Helvetica; */
  font-display: swap;
}
    .error{
      color: #c30000;
      font-weight: bold;
    }
    .err_2{
      color: RED;
      font-weight: bold;
    }
    .error-block{
      color: RED;
      font-weight: bold;
    }
    .borderch{
      border: 1px solid red;
    }

    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

    </style>
    <script type="text/javascript">


      function message(str){
        let newstr = str.split(/(?=[A-Z])/).join(" ");
        let upperstr = newstr.charAt(0).toUpperCase() + newstr.slice(1);
        return upperstr;
      }


    </script>
