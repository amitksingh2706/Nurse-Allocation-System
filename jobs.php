  <?php include 'config.php' ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="jobs.css" rel="stylesheet">
    <title>PATIENTS DETAILS</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
      <a class="navbar-brand"  href="jobs.php">PATIENTS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="padding-left:80px;" aria-current="page" href="index1.php">HOME</a>
        </li>

        </li>
      </ul>
      </div>
      </div>
      </nav>
    <!-- The sidebar -->
    <div class="sidebar" style="margin-top: 56px;padding: 0;width: 200px;background-color: #f1f1f1;position: fixed;height: 100%;overflow: auto;">
    <a href="dashboard.php">NURSE DESCRIPTION</a>
    <a class="active" href="jobs.php">PATIENTS APPLIED</a>
  </div>
    <div class="content">
    <table class="table">
    <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Issue</th>
      <th scope="col">Availability</th>
      </tr>
    </thead>

    <tbody> 
      
      <?php 
          $sql="SELECT `Name`,`Nurse Description`,`Issue`,`Availability` FROM `patients`";
          $result= mysqli_query($conn,$sql);
          $i=0;
          if($result->num_rows>0){
          // while($row = $result->fetch_assoc()){
          while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo ++$i ?></td>
              <td><?php echo $row['Name'] ?></td>
              <td><?php echo $row['Nurse Description'] ?></td>
              <td><?php echo $row['Availability'] ?></td>
            </tr>

          <?php }
        }
    ?> 
    </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>