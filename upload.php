<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Upload</title>
</head>
<body> 


    <body class="bg-light">
        <div class="container-lg">
      <div class="py-5 text-center">
        <h2>Upload a file</h2>
      </div>
  	 <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Lecture name</label>
                <input type="text" class="form-control" id="firstName" >
              </div>
              
            </div>
    
    
            <div class="mb-3">
              <label for="address2">Lecture Description <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Write about lecture note.">
            </div>
    
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="department">Course</label>
                <select class="custom-select d-block w-100" id="department" required>
                  <option value="">Choose...</option>
                  <option>Civil Engineering</option>
                  <option>Computer Engineering</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Semester</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>1st</option>
                  <option>2nd</option>
                  <option>3rd</option>
                  <option>4th</option>
                  <option>5th</option>
                  <option>6th</option>
                  <option>7th</option>
                  <option>8th</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid semester.
                </div>
              </div>
              
              </div>
            </div>
            
            <hr class="mb-4">
            <form method="POST" enctype="multipart/form-data" action="upload1.php">
            <input type="file" name="file">
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="upload">Upload a file</button>
            </form>
          </form>
        </div>
      </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>