<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}


/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 20px;
  text-align: center;
  background-color: #f1f1f1;
  border-radius: 5px; /* 5px rounded corners */
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


 
/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 0 0;
}

.button {
  border-radius: 5px;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 200px;
  transition: all 0.5s;
}

.button5 {background-color: #555555;} /* Black */


.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

a {
  color: white;
}

</style>
</head>


<head><script>

</script>

</head>




<div class="container">


    <div class="row">
        <div class="col-md-10">
          
            <h1>OUR OBJECTIVE</h1>
            <p id="About">
                Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.
            </p>
            <hr id="line_1">

        
            <h1  class="display-3">BENEFITS OF BLOOD DONATION</h1>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/Stress2.jpg" alt="Avatar" style="width:100%">
      <h4>reduce stress</h4>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/emo.jpg" alt="Avatar" style="width:75%">
      <h4>improve your emotional well-being</h4>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/workout2.jpg" alt="Avatar" style="width:85%">
      <h4>Benefit your physical health</h4>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/feelings.jpg" alt="Avatar" style="width:90%">
      <h4>help get rid of negative feelings</h4>
    </div><br>
  </div>
</div><br>

<button class="button button5"><a href="details.php"><span>more details</span></a></button>



            <hr id="line_1">




           <h1>FEATURES</h1>

            <p>
            <ul class="a">
               
               <li>Donor Management: Donor Registration, Managing donor database, recording their physical and medical statistics.</li><br>
               <li>Inventory management in blood bank for storage and issuance of blood.</li><br>
               <li>Blood requisition and issuance of blood.</li><br>
               <li>Online transfer of blood from one blood bank to another.</li><br>
               <li>Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).</li><br>
               <li>Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.</li><br>
               <li>Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.</li><br>
               <li>Fridge Wise Stock Position and Printing of Fridge Stickers.</li><br>
               <li>List of Donors who are eligible for donation on a particular date with contact Number.</li><br>
               
            </p>
        </div>
        <div class="col-md-2">
            <img src="../assets/donate_blood_right.jpg" class="img img-responsive img-thumbnail" style="width:200px ;">
             <img src="assets/blood.jpg" class="img img-responsive img-thumbnail">
        </div>



    </div>
</div>

<?php include 'layout/_footer.php'; ?>
