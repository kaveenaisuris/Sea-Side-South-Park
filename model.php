<?php 

	Class Model{

		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "hoteldb";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

		public function insert(){

				if (isset($_POST['check_in_date']) && isset($_POST['check_out_date']) && isset($_POST['room_type']) && isset($_POST['room_no']) && isset($_POST['person_no']) && isset($_POST['children_no']) && isset($_POST['name_first']) && isset($_POST['name_last']) && isset($_POST['contact_no']) && isset($_POST['email']) && isset($_POST['address'])) {
					if (!empty($_POST['check_in_date']) && !empty($_POST['check_out_date']) && !empty($_POST['room_type']) && !empty($_POST['room_no']) && !empty($_POST['person_no']) && !empty($_POST['children_no']) && !empty($_POST['name_first']) && !empty($_POST['name_last']) && !empty($_POST['contact_no']) && !empty($_POST['email']) && !empty($_POST['address']) ) {
						
						     $check_in_date=$_POST['check_in_date'];
       						 $check_out_date=$_POST['check_out_date'];
   					         $room_type=$_POST['room_type'];
       						 $room_no=$_POST['room_no'];
     					     $person_no=$_POST['person_no'];
        					 $children_no=$_POST['children_no'];
       						 $name_first=$_POST['name_first'];
       						 $name_last=$_POST['name_last'];
       						 $contact_no=$_POST['contact_no'];
       						 $email=$_POST['email'];
       						 $address=$_POST['address'];

						$q="insert into booking set check_in_date='$check_in_date', check_out_date='$check_out_date', room_type='$room_type', no_room='$room_no', no_person='$person_no',no_children='$children_no', name_first='$name_first', name_last='$name_last', contact_no='$contact_no', email='$email', address='$address'";

						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'index.php';</script>";
					}
				}
			}
			

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM booking";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM booking where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM booking WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM booking WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE booking SET check_in_date='$data[check_in_date]', check_out_date='$data[check_out_date]',room_type='$data[room_type]', room_no='$data[no_room]', person_no='$data[no_person]', children_no='$data[no_children]', name_first='$data[name_first]', name_last='$data[name_last]', contact_no='$data[contact_no]', email='$data[email]', address='$data[address]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>