<?php include PATH . "partials/header.php" ?>

<!-- CONTENT -->
<div class = "container mt-5">


<div class = "d-flex justify-content-between align-items-center">
  
  <h1>Student's Request</h1>
  <a href = "<?= ROOT ?>/students/studentrequest" class = "btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg> Create Request</a>
</div>

<table class="table table-success table-striped table-hover mt-3">
  <tr>
    <th>Student Id</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Course</th>
    <th>Section</th>
    <th>Year Level</th>
    <th>Document Type</th>
    <th>Semester</th>
    <th>Date</th>
    <th>Status</th>
    <th></th>
    <th></th>
  </tr>

  <?php if ($rows !=null) { ?>
  <?php foreach($rows as $row) { ?>
  <tr>
    <td><?= $row->student_id ?></td>
    <td><?= $row->lname ?></td>
    <td><?= $row->fname ?></td>
    <td><?= $row->course ?></td>
    <td><?= $row->sec ?></td>
    <td><?= $row->year_level ?></td>
    <td><?= $row->doc ?></td>
    <td><?= $row->sem ?></td>
    <td><?= $row->date ?></td>
    <td><?= $row->status ?></td>
    <td>
    <?php if (!empty($_SESSION['ADMIN'])) :?>
      <a href="<?=ROOT?>/students/dashboard/<?=$row->id ?>" class = "btn btn-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
</svg> Edit</a>
    </td>
    <td>
      <a href="<?=ROOT?>/students/dashboard/<?=$row->id ?>" class = "btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg> Delete</a>
    </td>
    <?php endif; ?>
  </tr>
  <?php } ?>
  <?php } else { ?>
    <tr>
        <td colspan= "10">
          <h2>There are no requests yet!</h2>
        </td>
    </tr>
    <?php } ?>
</table>


</div>
<?php include PATH . "partials/footer.php" ?>
<?php include PATH . "partials/script.php" ?>