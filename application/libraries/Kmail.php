<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/*
	* Library send mail
	* Created By: PHPMailer
	* 
	* Modify By : Kang cahya
	*
	*/
	
	class Kmail
	{
		public function smtp_basic($param = array())
		{
			$message = '';
			require_once(APPPATH.'libraries/mailer/PHPMailerAutoload.php');

			$CI =& get_instance();

			$mail_config = $CI->config->item('kang_mail');

			$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->Host = $mail_config['smtp']['host'];
			$mail->SMTPAuth = $mail_config['smtp']['auth'];
			$mail->Username = $mail_config['smtp']['username'];
			$mail->Password = $mail_config['smtp']['password'];

			$mail->SMTPSecure = $mail_config['smtp']['secure']; 
			$mail->Port = $mail_config['smtp']['port'];

			$mail->setFrom($mail_config['smtp']['setFrom'], $mail_config['smtp']['setFrom']);
			$mail->addAddress($param['to']);
			$mail->isHTML(true);

			
			$mail->Subject = $param['subject'];
			$mail->Body    = $param['body'];
			$mail->AltBody = $param['altbody'];

			if(!$mail->send())
			{
				$message .= 'Message could not be sent.';
				$message .= 'Mailer Error: ' . $mail->ErrorInfo;

				return $message;
			}
			else
			{
				$message .= '';

				return $message;
			}
		}

		/*public function smtp_( $params = array() )
		{

			$param = array(
				'setFrom' 		=> array('sys@kangbaseon.com','kang_baseon'),
				'addAddress'	=> array(
					'aa1'	=> array('cahyadyazin@yahoo.com','address 1'),
					'aa2'	=> array('dyazincahya@gmail.com','address 2'),
					'aa3'	=> array('sungguhterlalukamu@yahoo.fr','address 3')
				),
				'addReplayTo'	=> array(
					'art1'	=> array('dyazincahya.cd@gmail.com','dy CD')
				),
				'addCC'			=> array(
					'ac1'	=> array()
				),
				'addBCC'		=> array(
					'ab1'	=> array()
				),
				'addAttachment'	=> array(
					'atch1'	=> array('dir_path','name_atch'),
					'atch2'	=> array('dir_path','name_atch')
				),
				'subject'		=> '',
				'body'			=> '',
				'altBody'		=> ''
			)

			require_once(APPPATH.'libraries/mailer/PHPMailerAutoload.php');
			$CI =& get_instance();

			$mail_config = $CI->config->item('kang_mail');

			$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->Host = $mail_config['smtp']['host'];
			$mail->SMTPAuth = $mail_config['smtp']['auth'];
			$mail->Username = $mail_config['smtp']['username'];
			$mail->Password = $mail_config['smtp']['password'];

			$mail->SMTPSecure = $mail_config['smtp']['secure']; 
			$mail->Port = $mail_config['smtp']['port'];

			$mail->setFrom('from@example.com', 'Mailer');

			$aa = 1;
			while ($aa < count($params['addAddress'])) {
				$aa_name = (!empty($param['addAddress']['aa'.$aa][1]) ? ", ".$param['addAddress']['aa'.$aa][1] : "");
				$mail->addAddress($param['addAddress']['aa'.$aa][0] $aa_name);
				$aa++;
			}

			$art = 1;
			while ($art < 10) {
				# code...
			}
			$mail->addReplyTo('info@example.com', 'Information');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');

			$mail->addAttachment('/var/tmp/file.tar.gz');
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
			$mail->isHTML(true);

			
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body in bold!';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send())
			{
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
			else
			{
				echo 'Message has been sent';
			}
		}*/
	}
