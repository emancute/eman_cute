<?php include PATH . "partials/header.php" ?>

<!-- CONTENT -->

<div class = "container_bpc">
  <img src="<?=ROOT ?>/assets/images/bpc_front.png" alt ="" class = "bpc_img">
  <div class="content caption">
    <h1 class = "heading">Request Document</h1>
  </div>

</div>

<div class="accordion w-75 mx-auto mt-5"  id="accordionPanelsStayOpenExample ">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <strong class = "home">Reminders Before You Request For Document</strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
       <li><strong>TAKE NOTE</strong> Only one COR per semester will be released. If it will be used  as requirements for scholarship program ensure that you have a photocopy. The photocopy will be verified and certified as true copy of the original document at registrar's office.To do so you can walk-in or submit a request.</li>
       <li><strong>PAYMENT</strong> Ensure an amount of ₱50.00 for payment at the registrar.</li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        <strong class = "home">How to sumbit a request?</strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Fill up the form</strong>
        <li><a class = "linkhome" href="http://localhost/mvc-sdss/public/students/studentrequest">Send a Request Now</a></li>
        <li>Once submitted check the status of your request here.<a class = "linkhome" href="http://localhost/mvc-sdss/public/students">Check Status</a></li>
        <li>Upon approval, pick-up your document at registrar's office on the chosen date</li>
    </div>
  </div>

</div>
<?php include PATH . "partials/footer.php" ?>


