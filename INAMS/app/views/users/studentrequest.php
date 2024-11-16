<?php include PATH . "partials/header.php" ?>

<!-- CONTENT -->
<div class = "cstd">
<div class = "container mt-10 ">




<form action = "" method = "POST" class = "studentrequest-cont rounded-top w-50 mx-auto bg-success p-2 text-dark">
  <h1 class = "studinfo d-flex justify-content-center">Student's Information</h1>

  <?php if  (!empty($errors)) :?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  
    <?php foreach($errors as $error) : ?>

      <?=$error . "<br>" ?>

    <?php endforeach; ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif; ?>

  <div id="message" class="req-text form-text">
  Please fill-out the required information
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="lname" value = "<?=get_var('lname') ?>"placeholder="Last Name">
  <label>Last Name</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="fname"  value = "<?=get_var('fname') ?>"placeholder="First Name">
  <label>First Name</label>
  </div>

<div class = "mb-2">
  <label for = "" class = "gender">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value = "Female">
  <label class = "gender">Female</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name ="gender" value = "Male" >
  <label class = "gender">Male</label>
</div>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="address"  value = "<?=get_var('address') ?>" placeholder="Address">
  <label>Address</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="phone_number"  value = "<?=get_var('phone_number') ?>"placeholder="Phone Number">
  <label>Phone Number</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="email"  value = "<?=get_var('email') ?>"placeholder="Email">
  <label>Email</label>
  </div>

  
  <!-- ACADEMIC INFO -->
  <h1 class = "acadinfo d-flex justify-content-center">Academic Information</h1>

  <div class="form-floating mb-3 ">
  <input type="text" class="form-control" name="student_id"  value = "<?=get_var('student_id') ?>"placeholder="Student Id">
  <label>Student Id</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="course"  value = "<?=get_var('course') ?>"placeholder="Course">
  <label>Course</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="sec" value = "<?=get_var('sec') ?>" placeholder="Section">
  <label>Section</label>
  </div>

  <div class = "mb-2">
  <label for = "" class = "gender">Year Level</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="year_level" value = "1st Year">
  <label class= "gender">1st Year</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio"  name="year_level" value = "2nd Year" >
  <label class = "gender">2nd Year</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="year_level" value = "3rd Year" >
  <label class = "gender">3rd Year</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="year_level" value = "4th Year">
  <label class = "gender">4th Year</label>
</div>
  </div>

  <div class = "mb-2">
  <label for = "" class= "gender">Document</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="doc" value = "Certificate of Grades">
  <label class= "gender">Certificate of Grades</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="doc" value = "Certificate of Enrollment" >
  <label class= "gender">Certificate of Enrollment
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="doc" value = "Certificate of Registration" >
  <label class= "gender">Certificate of Registration
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio"  name="doc" value = "Transcript of Records" >
  <label class= "gender">Transcript of Records</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio"  name="doc" value = "Certified True Copy" >
  <label class= "gender">Certified True Copy</label>
</div>

  </div>
  
<div class = "mb-2">
  <label for = "" class= "gender">Semester</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="sem" value = "1st Semester">
  <label class= "gender">1st Semester</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="sem" value = "2nd Semester">
  <label class= "gender">2nd Semester</label>
</div>


<div class="form-floating mb-3">
  <input type="date" class="form-control" name="date" id = "date" value = "<?=get_var('date') ?>"placeholder="Pick Up Date">
  <label>Pick Up Date</label>
  </div>
<div id="message" class="req-text form-text">
  Note: Registrar's office is not available every sunday
  </div>
 
  <script>
    var date = new Date();
    var tdate = date.getDate();
    var month = date.getMonth() + 1;
    if(tdate < 10)
    {
      tdate = "0" + tdate;
    }
    if(month < 10)
    {
      month = "0" + month;
    }
    var year = date.getUTCFullYear();
    var minDate = year + "-" + month + "-" + tdate;
    document.getElementById("date").setAttribute('min',minDate)
    
      
    </script>
<br>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  
  <button type="submit"  class="send-button btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
</svg> Send Request</button>

  <!-- </div>
  <button type="submit" name = "cancel" class="cancel-button btn btn-danger">Cancel</button>
</div> -->

</form>

</div>
  </div>

<?php include PATH . "partials/footer.php" ?>
<?php include PATH . "partials/script.php" ?>
