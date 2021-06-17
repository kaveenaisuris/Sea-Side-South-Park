
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book For Reservation</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Book For Reservation - EDIT RECORD</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);

                 if (isset($_POST['check_in_date']) && isset($_POST['check_out_date']) && isset($_POST['room_type']) && isset($_POST['no_room'])&& isset($_POST['no_person'])&& isset($_POST['no_children'])&& isset($_POST['name_first'])&& isset($_POST['name_last'])&& isset($_POST['contact_no'])&& isset($_POST['email'])&& isset($_POST['address'])) {
                  if (!empty($_POST['check_in_date']) && !empty($_POST['check_out_date']) && !empty($_POST['room_type']) && !empty($_POST['no_room']) && !empty($_POST['no_person']) && !empty($_POST['no_children']) && !empty($_POST['name_first']) && !empty($_POST['name_last'])&& !empty($_POST['contact_no'])&& !empty($_POST['email']) && !empty($_POST['address']) ) {
        
        
                $data['id'] = $id;
                $data['check_in_date']=$_POST['check_in_date'];
                $data['check_out_date']=$_POST['check_out_date'];
                $data['room_type']=$_POST['room_type'];
                $data['no_room']=$_POST['no_room'];
                $data['no_person']=$_POST['no_person'];
                $data['no_children']=$_POST['no_children'];
                $data['name_first']=$_POST['name_first'];
                $data['name_last']=$_POST['name_last'];
                $data['contact_no']=$_POST['contact_no'];
                $data['email']=$_POST['email'];
                $data['address']=$_POST['address'];
                    $update = $model->update($data);

                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
             

          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Check In Date</label>
              <input type="date" name="check_in_date" value="<?php echo $row['check_in_date']; ?>"class="form-control">
            </div>
            <div class="form-group">
              <label for="">Check Out Date</label>
              <input type="date" name="check_out_date" value="<?php echo $row['check_out_date']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Room Type</label>
            <select name="room_type" value="<?php echo $row['room_type']; ?>" required>
                        <option value="null">-----Select-----</option>
                        <option value="KD">King Deluxe</option>
                        <option value="QD">Queen Deluxe</option>
                        <option value="RSS">Royal Suite Superior</option>
                        <option value="RSD">Royal Suite Deluxe</option>
                        <option value="ESK">Executive Super King</option>
                        <option value="ESQ">Executive Super Queen</option>
                        <option value="TD">Tripal Deluxe</option>
                        <option value="PD">Presidential Deluxe</option>
                        
                                    
                                  </select><br>
            </div>
            <div class="form-group">
              <label for="">Number Of Room</label>
              <input type="number" name="room_no" value="<?php echo $row['no_room']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Number Of Person</label>
              <input type="number" name="person_no" value="<?php echo $row['no_person']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Number Of Children</label>
              <input type="number" name="children_no" value="<?php echo $row['no_children']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" name="name_first" value="<?php echo $row['name_first']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="name_last" value="<?php echo $row['name_last']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Contact No</label>
              <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name="update"  class="btn btn-primary">Submit</button>
            </div>
          </form>
  </div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>