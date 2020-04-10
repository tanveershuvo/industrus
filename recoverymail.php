<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Mail </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

  <script type="text/javascript">

  function myAlert(){
    swal({
      title: "Mail Sent Successfully",
      type: "success",
      timer: 3000,
      showCancelButton: false,
      showConfirmButton: false,
      closeOnClickOutside: false,
    }, function() {
      window.location.href = "login";
    });
  }

  function erAlert(){
    swal({
      title: "Mail cannot be sent",
      type: "error",
      timer: 3000,
      showCancelButton: false,
      showConfirmButton: false,
      closeOnClickOutside: false,
    }, function() {
      window.location.href = "forgotpassword";
    });
  }

  </script>
</head>
<body>
  <?php
  include_once 'dbCon.php';
  $conn = connect();
  if (isset($_GET['email'])){
    function generateRandomString()  {
        $characters = '123456789abcdefghijklmnopqrstuvwxyz';
        $length = 15;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
                                     }
	  $token = generateRandomString();
    $usermail = $_GET['email'];
    //echo $usermail;exit;
    $mailto = $usermail;
    $mailSub 	= "Account Set Up";
    $message ='
    <html>
    <head>
    <title>Reset Password</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
          @font-face {
            font-family: &#x27;Postmates Std&#x27;;
            font-weight: 600;
            font-style: normal;
            src: local(&#x27;Postmates Std Bold&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-bold.woff) format(&#x27;woff&#x27;);
          }

          @font-face {
            font-family: &#x27;Postmates Std&#x27;;
            font-weight: 500;
            font-style: normal;
            src: local(&#x27;Postmates Std Medium&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-medium.woff) format(&#x27;woff&#x27;);
          }

          @font-face {
            font-family: &#x27;Postmates Std&#x27;;
            font-weight: 400;
            font-style: normal;
            src: local(&#x27;Postmates Std Regular&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-regular.woff) format(&#x27;woff&#x27;);
          }
      </style>
<style media="screen and (max-width: 680px)">
          @media screen and (max-width: 680px) {
              .page-center {
                padding-left: 0 !important;
                padding-right: 0 !important;
              }

              .footer-center {
                padding-left: 20px !important;
                padding-right: 20px !important;
              }
          }
      </style>
</head>
<body style="background-color: #f4f4f5;">
<table cellpadding="0" cellspacing="0" style="width: 100%; height: 100%; background-color: #f4f4f5; text-align: center;">
<tbody><tr>
<td style="text-align: center;">
<table align="center" cellpadding="0" cellspacing="0" id="body" style="background-color: #fff; width: 100%; max-width: 680px; height: 100%;">
<tbody><tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 88px; width: 100%; padding-left: 120px; padding-right: 120px;">
<tbody><tr>
<td style="padding-top: 24px;">
<img src="https://d1pgqke3goo8l6.cloudfront.net/wRMe5oiRRqYamUFBvXEw_logo.png" style="width: 56px;">
</td>
</tr>
<tr>
<td colspan="2" style="padding-top: 72px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: "Postmates Std", "Helvetica", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-size: 48px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -2.6px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;">Reset your password</td>
</tr>
<tr>
<td style="padding-top: 48px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #d9dbe0; opacity: 0.81"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095a2; font-family: "Postmates Std", "Helvetica", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.18px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                    You"re receiving this e-mail because you requested a password reset for your Industrus account.
                                  </td>
</tr>
<tr>
<td style="padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095a2; font-family: "Postmates Std", "Helvetica", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.18px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                    Please tap the button below to choose a new password.
                                  </td>
</tr>
<tr>
<td>
<a data-click-track-id="37" href="http://localhost/industrus/resetpassword?email='.$usermail.'&&token='.$token.'" style="margin-top: 36px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #ffffff; font-family: "Postmates Std", "Helvetica", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-size: 12px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: 0.7px; line-height: 48px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 220px; background-color: #00cc99; border-radius: 28px; display: block; text-align: center; text-transform: uppercase" target="_blank">
                                      Reset Password
                                    </a>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table align="center" cellpadding="0" cellspacing="0" id="footer" style="background-color: #000; width: 100%; max-width: 680px; height: 100%;">
<tbody><tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" class="footer-center" style="text-align: left; width: 100%; padding-left: 120px; padding-right: 120px;">
<tbody><tr>
<td colspan="2" style="padding-top: 72px; padding-bottom: 24px; width: 100%;">
<img src="https://d1pgqke3goo8l6.cloudfront.net/DFcmHWqyT2CXk2cfz1QB_wordmark.png" style="width: 124px; height: 20px">
</td>
</tr>
<tr>
<td colspan="2" style="padding-top: 24px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #EAECF2; opacity: 0.19"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095A2; font-family: "Postmates Std", "Helvetica", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif; font-size: 15px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: 0; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                        If you have any questions or concerns, we"re here to help. Contact us via our <a data-click-track-id="1053" href="https://support.postmates.com/buyer" style="font-weight: 500; color: #ffffff" target="_blank">Help Center</a>.
                                      </td>
</tr>
<tr>
<td style="height: 72px;"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</body>
</html>

    ';
    $messag	='
    <html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
    /* FONTS */
    @media screen {
      @font-face {
        font-family: "Lato";
        font-style: normal;
        font-weight: 400;
        src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
      }
      @font-face {
        font-family: "Lato";
        font-style: normal;
        font-weight: 700;
        src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
      }
      @font-face {
        font-family: "Lato";
        font-style: italic;
        font-weight: 400;
        src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
      }
      @font-face {
        font-family: "Lato";
        font-style: italic;
        font-weight: 700;
        src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
      }
    }
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }
    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }
    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
    </style>
    </head>
    <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- LOGO -->
    <tr>
    <td bgcolor="#7c72dc" align="center">
    <table border="0" cellpadding="0" cellspacing="0" width="480" >
    <tr>
    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <!-- HERO -->
    <tr>
    <td bgcolor="#7c72dc" align="center" style="padding: 0px 10px 0px 10px;">
    <table border="0" cellpadding="0" cellspacing="0" width="480" >
    <tr>
    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
    <h1 style="font-size: 32px; font-weight: 400; margin: 0;">Your Account Is Ready</h1>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
    <table border="0" cellpadding="0" cellspacing="0" width="480" >
    <!-- COPY -->
    <tr>
    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
    <p style="margin: 0;">Click the below link to login into account.</p>
    </td>
    </tr>
    <!-- BULLETPROOF BUTTON -->
    <tr>
    <td bgcolor="#ffffff" align="left">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
    <h1 bgcolor="#ffffff" style="font-size: 16px; font-weight: 400; margin: 0;"></h3>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <!-- COPY CALLOUT -->
    <!-- SUPPORT CALLOUT -->
    <tr>
    <td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
    <table border="0" cellpadding="0" cellspacing="0" width="480" >
    <!-- HEADLINE -->
    <tr>
    <td bgcolor="#C6C2ED" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
    <h2 style="font-size: 20px; font-weight: 400; color: #111111; margin: 0;">Industrus</h2>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <!-- FOOTER -->
    <tr>
    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
    <table border="0" cellpadding="0" cellspacing="0" width="480" >
    <!-- PERMISSION REMINDER -->
    <tr>
    <td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;" >
    <p style="margin: 0;">You received this email because you requested a new account.</p>
    </td>
    </tr>
    <!-- ADDRESS -->
    <tr>
    <td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;" >
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </body>
    </html>
    ';
    $mailMsg 	= $message;
    //echo $message;exit;
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail 		= new PHPMailer();
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' 		=> false,
        'verify_peer_name' 	=> false,
        'allow_self_signed' => true
      )
    );
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    // $mail ->Port = 465; // or 587
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "testruhana@gmail.com";
    $mail ->Password = "test@123456";
    $mail->setFrom('Metrorail', 'BD');
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($mailto);
    if(!$mail->Send())
    {
      echo '<script>erAlert()</script>';
    }
    else
    {
      $sql = "UPDATE user_login SET token = '$token' WHERE email= '$usermail'";
      $conn->query($sql);
    //  echo $sql;exit;
      echo '<script>myAlert()</script>';
    }
  }


  ?>
</body>
</html>
