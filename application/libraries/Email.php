<?php
 // defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'third_party/phpmailer/PHPMailerAutoload.php');
class email
{

  public function test_mail()
  {
    // $data['isi'] = '<h1>BERHASIL kirim SIAKAD</h1>';
    // $data['subjek'] = "Kirim Email Lewat function";
    // $data['penerima'] = 'geaayu16@gmail.com';
    // $this->send_mail($data);
    echo "string";
  }

  public function coba()
  {
    // code...
    echo "string";
  }

  public function send_mail($data)
  {
    $re = false;
    $mail = new PHPMailer;
    // $mail->isSMTP();
    $mail->Host = 'localhost';
    // $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';


    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Username = 'grassetya@gmail.com';
    $mail->Password = 'gucialit';

    $mail->setFrom('grassetya@gmail.com', 'AKBID JEMBER');
    $mail->addAddress($data['penerima']);
    $mail->addReplyTo('grassetya@gmail.com');

    $mail->isHTML(true);
    $mail->Subject=$data['subjek'];
    $mail->Body=$data['isi'];

    if (!$mail->send()) {
      $return = false;
      echo "gagal";
    } else {
      $return = true;
      echo "berhasil";
    }
    return $return;
  }
}
 ?>
