<!doctype html>
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
          <h1 class="text-center">Book For ReservationL - INSERT RECORD</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>
          <form action="" method="post">
             <div class="form-group">
              <label for="">Check In Date</label>
              <input type="date" name="check_in_date" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Check Out Date</label>
              <input type="date" name="check_out_date" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Room Type</label>
            <select name="room_type" required>
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
              <input type="number" name="room_no" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Number Of Person</label>
              <input type="number" name="person_no" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Number Of Children</label>
              <input type="number" name="children_no" class="form-control">
            </div>
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" name="name_first" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="name_last" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Contact No</label>
              <input type="text" name="contact_no" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name="book_button" class="btn btn-primary">Submit</button>
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