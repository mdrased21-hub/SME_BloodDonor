<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/*for the flip card part*/
body {
  font-family: Arial, Helvetica, sans-serif;;
}

.flip-card {
  background-color: transparent;
  width: 60%;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  display: flex;
  align-items: center;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: white;
  color: black;
}

.flip-card-back {
  background-color: ivory;
  color: white;
  transform: rotateY(180deg);
}

ul.a {
  list-style-type: square;
}

li,h3{
  color:black;
  text-align: left;
}

h2{
  color:black;
  text-align: center;
}

.containers {
  display: flex;
  justify-content: center;
  flex-direction: row;
}

/*for card for the reason people cant donate*/
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
.cards {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: grey;
}

</style>
</head>
<body>

<h2>More benefit on blood donation?</h2>
<div class="containers">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/benefit3.jpg" alt="Avatar" style="width:100%;height:300px;object-fit: contain;">
    </div>
    <div class="flip-card-back">
       <ul class="a">
             <li>You can check your basic health stats for <strong>FREE.</strong></li>
             <li>Donating blood can reduce the risk of heart and liver diseases.</li>
             <li>Weight loss; Each donation burns around 650 calories</li>
             <li>Free medical benefits.</li>
             <li>Lesser risk of developing cancer</li>
             <li>Free Hepatitis B vaccination.</li>
             <li>Replenished blood cells.</li>
             <li>The honour of saving lives and bringing us all together.</li>
       </ul> 
    </div>
  </div>
</div>
</div><br>

 <hr id="line_1">


<h2>What to know before you donate?</h2>

<div class="containers">

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/know.jpg" alt="Avatar" style="width:100%;height:300px;object-fit: cover;">
    </div>
    <div class="flip-card-back">
       <ul class="a">
             <li>A person must be within the age of 18 to 60 years old for first-time donors, while the age limit extends to 65 years old for those who have donated blood previously.</li>
             <li>Body weight of at least 45 kg.</li>
             <li>In good physical and mental health with no chronic medical illness.</li>
             <li>Not on long-term medications and has not been intoxicated by alcohol within 24 hours prior to donation.</li>
             <li>Should not be fasting and have had enough sleep (minimum 5 hours) the night before donating.</li>
       </ul> 
    </div>
  </div>
</div>
</div><br>

 <hr id="line_1">


<h2>Common Reasons People Can't Donate</h2>

<div class="containers">

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/cannot.jpg" alt="Avatar" style="width:100%;height:300px;object-fit: cover;">
    </div>
    <div class="flip-card-back">
     <ul class="a">
               <h3>Cannot donate temporarily:</h3>
             <li>Pregnancy</li>
             <li>Acute fever.</li>
             <li>Recent alcoholic intake.</li>
             <li>Surgery.</li>
             <li>Ear or body piercing and tattooing</li>
       </ul> 
       
     <ul class="a">
                <h3>Cannot donate permanently:</h3>
             <li>Cancer</li>
             <li>Cardiac and sever lung disease.</li>
             <li>Hepatitis B and C</li>
             <li>HIV infection, AIDS or Sexually Transmitted Diseases (STD).</li>
             <li>High risk occupation (e.g. prostitution).</li>
             <li>Unexplained weight loss of more than 5 kg over 6 months.</li>
             <li>Chronic alcoholism.</li>
             <li>Other conditions or disease stated in the Guide to Medical Assessment of Blood Donors.</li>

     </ul> 

    </div>
  </div>
</div>
</div><br>


</body>



<?php include 'layout/_footer.php'; ?>
