<?php include PATH . "partials/header.php" ?>

<!-- CONTENT -->

<div class = "container mt-5 ">


<form action = "" method = "POST" class = "w-50 mx-auto">

   

  <h2>Student's Information</h2>

  <div id="message" class="form-text">
  Please fill-out the required information
  </div>
  <fieldset disabled>
  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="lname" value ="<?=$student->lname ?>" >
  <label>Last Name</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="fname" value ="<?=$student->fname ?>" placeholder="First Name">
  <label>First Name</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="fname" value ="<?=$student->gender ?>" placeholder="Gender">
  <label>Gender</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="address" value ="<?=$student->address ?>"placeholder="Address">
  <label>Address</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="phone_number" value ="<?=$student->phone_number ?>"placeholder="Phone Number">
  <label>Phone Number</label>
  </div>

  <div class="form-floating mb-3">
  <input type="email" class="form-control" name="email" value ="<?=$student->email ?>"placeholder="Email">
  <label>Email</label>
  </div>

  
  <!-- ACADEMIC INFO -->
  <h1>Academic Information</h1>

  <div class="form-floating mb-3 ">
  <input type="text" class="form-control" name="student_id" value ="<?=$student->student_id ?>"placeholder="Student Id">
  <label>Student Id</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="course" value ="<?=$student->course ?>"placeholder="Course">
  <label>Course</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="sec" value ="<?=$student->sec ?>"placeholder="Section">
  <label>Section</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="year_level" value ="<?=$student->year_level ?>"placeholder="Year Level">
  <label>Year Level</label>
  </div>

  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="doc" value ="<?=$student->doc?>"placeholder="Document Type">
  <label>Document Type</label>
  </div>
  
  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="sem" value ="<?=$student->sem?>"placeholder="Semester">
  <label>Semester</label>
  </div>
  
<div class="form-floating mb-3">
  <input type="date" class="form-control" name="date" value ="<?=$student->date ?>" placeholder="Pick Up Date">
  <label>Pick Up Date</label>
  </div>

</fieldset>
  <div class = "mb-3">
  <label for = "">Status</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="status"value ="Pending"  >
  <label>Pending</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value ="Approved">
  <label>Approved</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="status"value ="Declined">
  <label>Declined</label>
</div>
<?php if (!empty($_SESSION['ADMIN'])) :?>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    
  <button type="submit" name = "update" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
</svg> Update</button>

<button type="submit" name = "delete" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg> Delete</button>
  </div>
  <?php endif; ?>
  
</div>
  </div>




</form>

</div>

<?php include PATH . "partials/footer.php" ?>
<?php include PATH . "partials/script.php" ?>

