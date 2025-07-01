<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent='<html>

<head>
  <title> Scantool-group Email Template </title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      color: #373737;
    }
  </style>
</head>

<body>

  <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#f5f5f5">
    <tbody>
      <tr>
        <td align="center">
          <table border="0" cellpadding="0" cellspacing="0"
            style="width:640px;max-width:640px;padding-right:20px;padding-left:20px; background-color: #fff !important; padding-top:20px;padding-bottom:20px;margin: 20px 0;">
            <tbody>
              <tr>
                <td>

                  <table class="table"
                    style="width:600px!important; margin:0 auto; padding-bottom: 15px; background: #fbfbfb;">
                    <tbody>
                      <tr style="width:100% !important; border-spacing: 0;">
                        <td>
                          <img class="logo" src="https://www.bigleap.ae/assets/images/resources/logo-1.png" alt="Logo" style="max-width:130;">
                        </td>
                        <td style="text-align:right;padding: 10px 10px 10px 0;font-size:14px;">
                          <a href="mailto:info@bigleap.ae" style="margin:0 0 5px;text-decoration: none; color: #333; ">
                            <img src="https://www.bigleap.ae/assets/images/mail.png" alt="mail"
                              style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px;" alt="mail">
                            info@bigleap.ae </a>
                          <p style="margin:0 0 5px; ">
                            <img src="https://www.bigleap.ae/assets/images/phoe.png" alt="phone"
                              style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px;" alt="phone">
                            <b>
                              <a href="tel:971502109305" style="text-decoration: none; color: #333;">  +971 50 210 93 05 
                              </a>
                            </b>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>


                  <!-- Content Start -->
                  <table class="table" style="width:600px!important;margin:0 auto;">
                    <tbody>
                      <tr>
                        <td>
                          <div>&nbsp; &nbsp;</div>
                          <table border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td>
                                  <h1>Hi Bigleap Team</h1>


                                  <p>You recieved an enquiry from website:</p>
                                  <table style="width:100%">

                                    <tbody>
                                      <tr>
                                        <td><strong>Name</strong></td>
                                        <td>'.$name.'</td>
                                      </tr>
                                      <tr>
                                        <td><strong>Phone<strong></strong></strong></td>
                                        <td>'.$phone.'</td>
                                      </tr>
                                      <tr>
                                        <td><strong>Email</strong></td>
                                        <td><a href="mailto:'.$email.'"
                                            target="_blank">'.$email.'</a></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Subject</strong></td>
                                        <td>'.$subject.'</td>
                                      </tr>
                                     
                                      <tr>
                                        <td><strong>Message</strong></td>
                                        <td>'.$message.'</td>
                                      </tr>
                                    </tbody>
                                  </table><br>

                                  <p>
                                    <a>Thanks &amp; Regards</a>
                                  </p>
                                  <p>'.$name.'</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div>&nbsp;</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--// Content End -->

                  <!-- footer start -->

                  <!-- connect with us start -->
                  <table style="width: 100%; border-spacing: 0;">
                    <tr>
                      <td style="width: 100%;   padding: 15px; text-align: center; background: #252525; color: #fff;">
                        <p> Connect With US </p>
                        <a href="https://www.facebook.com/bigleap.ae" target="
                       "> <img src="https://www.bigleap.ae/img/facebook.png" style="width: 25px;" alt=""> </a>
                        <a href="https://www.instagram.com/bigleap.ae/" target="b
                      "> <img src="https://www.bigleap.ae/img/instagram.png" style="width: 25px;" alt=""> </a>
                        <a href="https://www.linkedin.com/company/bigleapae-2" target="
                      "> <img src="https://www.bigleap.ae/img/linked.png" style="width: 25px;" alt=""> </a>
                      </td>
                    </tr>
                  </table>
                  <!--// connect with us end -->


                  <!-- footer logo start -->
                  <table style="width: 100%; border-spacing: 0;">
                    <tr>
                      <td style="width:100%; text-align: center;">
                        <img src="https://www.bigleap.ae/assets/images/resources/footer-logo.png" alt="logo"
                          style="width: 50px; max-width: 50px; margin-top: 30px; margin-bottom: 20px;">
                      </td>
                    </tr>
                  </table>
                  <!--// footer logo end -->


                  <!-- footer address start -->
                  <table style="width: 100%; border-spacing: 0;">
                    <tr>
                      <td style="width:100%; text-align: center;">
                        <p> Big Leap </p>
                        <a> LV36 A, </a>
                        <a> -- </a> 
                        <p>
                          <a> HAMRIYAH FREE ZONE, PHASE 2, </a>
                          <a> -- </a>
                          <a> SHARJAH - UAE </a>
                        </p>
                      </td>
                    </tr>
                  </table>


                  <table style="width: 100%; border-spacing: 0; padding: 15px  0;">
                    <tr>
                      <td style="text-align: center; width: 100%;">
                        <p>
                          <a href="tel:971502109305" style=" text-decoration: none; color: #333;"> Tel: +971 50 210 93 05 </a>
                          <a> -- </a>
                          <a href="#" style=" text-decoration: none; color: #333;"> Fax: +971 65 21 66 25</a>
                        </p>


                      </td>
                    </tr>

                  </table>



                  <table
                    style="width: 100%; border-spacing: 0; padding: 6px 0; background: #ED2124; letter-spacing: 2px; font-size: 13px;">
                    <tr>
                      <td style="width: 100%; text-align: center;">
                        <a href="https://www.bigleap.ae/" target="_
                        " style="text-decoration: none; color: #fff; margin: 0;"> www.bigleap.com </a>
                      </td>
                    </tr>
                  </table>
                  <!--// footer address end -->

                  <!--// footer End -->



                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
// Set content-type header for sending HTML email 
$recipient = 'info@bigleap.ae';
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$name.'<'.$email.'>' . "\r\n"; 
$headers .= 'Cc: info@bigleap.ae' . "\r\n"; 
$headers .= 'Bcc: info@bigleap.ae' . "\r\n"; 
mail($recipient, $subject, $formcontent, $headers) or die("Error!");
header("Location: http://bigleap.ae/index.html");
