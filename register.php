<?php include 'config.php' ?>
  <!doctype html>
  <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta name="keyword" content="job,employment">
    <meta name="description" content="In this website you can apply for the job and search for the jobs available  ">
    <title>REGISTRATION</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-image:url(doctor_register.jpg);background-size:cover;background-repeat:no-repeat;">
    <form method="POST" style="background-color: #fff;margin-top: 3em;margin-right: 5em;margin-left: 36em;padding: 20px;box-shadow: 10px 10px 8px 10px #888888;border-radius: 12px;border:0;">
      <div class="details mb-3">   
      <h2 style="font-weight:bold;font-family: Georgia, 'Times New Roman', Times, serif; padding-left:350px;font-size:50px;">REGISTER</h2><br>
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Hospital Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="Hospital_name" required>
      </div>
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Hospital Email Address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Hospital_email" required>
      </div>
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Hospital Phone Number</label>
      <input type="phone" class="form-control" id="phone" aria-describedby="Help" name="Hospital_phone" required>
      </div>
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Hospital Password</label>
      <input type="password" class="form-control" id="examplePassword" aria-describedby="emailHelp" name="Hospital_Password" required>
      </div>
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="ConfirmPassword" aria-describedby="emailHelp" name="Con_Pass" required>
      </div>
      <div class="mb-3">
      <label for="exampleInput" class="form-label" >Hospital City</label>
      <input type="text" class="form-control" id="InputCity" name="Hospital_city" required>
      </div>
      <button type="submit" class="btn btn-primary" name="Staff_submit">Submit</button><br><br>
      Back To Home Page ? <a href="index.php">Home Page</a>
    </form>
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>