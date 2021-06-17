<?php 
class Booking{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="hoteldb";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function booking($data){
        $check_in_date=$data['check_in_date'];
        $check_out_date=$data['check_out_date'];
        $room_type=$data['room_type'];
        $room_no=$data['room_no'];
        $person_no=$data['person_no'];
        $children_no=$data['children_no'];
        $name_first=$data['name_first'];
        $name_last=$data['name_last'];
        $contact_no=$data['contact_no'];
        $email=$data['email'];
        $address=$data['address'];
         $q="insert into booking set check_in_date='$check_in_date', check_out_date='$check_out_date', room_type='$room_type', no_room='$room_no', no_person='$person_no',no_children='$children_no', name_first='$name_first', name_last='$name_last', contact_no='$contact_no', email='$email', address='$address'";
        $data= $this->mysqli->query($q);
       if($data==true){
           $body="One message received from hubbunch contact us. details are below..<br> check_in_date='$check_in_date', check_out_date='$check_out_date', room_type='$room_type', no_room='$room_no', no_person='$person_no',no_children='$children_no', name_first='$name_first', name_last='$name_last', contact_no='$contact_no', email='$email', address='$address'";
        //   return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
           return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
       }
    }
    
    public function sent_mail($to,$subject,$body){
$mailFromName="HubBunch";
$mailFrom="info@hubbunch.com";
/////////////////////////////////////////////////////////////
//Mail Header
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
//$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin
//if(mail($to, $subject, $body, $mailHeader)){
 //return true;
 //}else{
//return false;
 }
    }
//}


?>