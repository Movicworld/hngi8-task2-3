<?php

date_default_timezone_set("Africa/Lagos");

function check_input($data) {
	$data = strip_tags($data);
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function verifymail($data) {
	
	if (!filter_var ($data, FILTER_VALIDATE_EMAIL)){
		return 0;
	} else{
		
		return 1;
	};

};

function sendmail($mail, $message, $name){
	
			
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
$headers .= 'To: '.$name.' <'.$mail.'>' ."\r\n";
$headers .= 'From: Victor O. Morakinyo HNGi8 <morakinyovictor1@gmail.com>' ."\r\n";
	
	mail($mail, 'Hello HNGi 8', $message, $headers);
}
	


$mail_sender = 'davidinyang01@gmail.com';

$lng = [
	'meta-disc' => 'HNGi8 Stage 2 task',
	'site-name' => 'Resume.',
	'name' => 'Victor O. Morakinyo',
	'full-name' => 'Victor Oluwafemi Morakinyo',
	'role' => 'Backend Web Developer',
	'about' => 'About Me',
	'about-me' => "Hi, my name is David Inyang, and i'm passionate about building simplified web based systems that work, are scaleable, fast, efficient and secure, which can optimize business processes. I'm a LAMP Stack web developer, I work well with teams of different sizes and i do take time to enjoy my work process.",
	'bio' => 'Bio. Data',
	'edu' => 'Education',
	'skils' => 'Skills',
	'phone'=> '+234(0) 818 241 2241',
	'email' => 'davidinyang01@gmail.com',
	'in-touch' => 'Get in touch!',
	'in-touch-info' => "Send me a quick message and i'll get back to you ASAP.",
	'send-message' => '<i class="fa fa-envelope"></i> Send Message',
	
];

$bio = [
	'Nationality' => 'Nigeria',
	'State of Origin' => 'AkwaIbom State ',
	'LGA.' => 'Onna'
	
];

$education =[
	'2010' => 'Ogu Community Commercial Secondary School, Itu L.G.A, Akwa Ibom State, Nigeria <br> SSCE',
	'2021' => 'Caritas University, Enugu, Nigeria <br> Bsc. Computer Science and Information Technology (In view)'
];

$skills = [
	 'Html','CSS','Javascript','Php','MySQL', 'Photoshop','Illustrator',
];
?>
