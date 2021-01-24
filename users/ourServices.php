<?php
$title="services";$setAboutActive="active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<style>

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
	background:white;
}

.header {
	height: 20vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(image/contact-bg.jpg);
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.head{
	text: bold;
	text-align: center;
}
.q2{
	text-align: justify;
	justify-content: center;
}
.services-1{
	height: 55vh;
	background-color:#b4b8ae;
	background-repeat: no-repeat;
	background-attachment: fixed;
}

.list{
	padding: 5px;
	text-align:justify;
	text-size: 12px;
}



</style>
<body> 
<div class = "header">
<h2  class = "head" > Services </h2> 
<span> Donate your blood for a reason, let the reason to be life. <span>

</div>

<div class = "Q1" >
<p class = "q2" > 
Blood Bank is a non-profitable company for collecting, testing, preparing and storing blood and blood components. Donors are most commonly unpaid volunteers but
they may also be paid by commercial enterprices. For a donators, need to be sign up in our BloodBank system by their personal details. After then, they will able 
to donate blood.
</p>
</div>

<div class = "services-1"> 
<ol class = "list"> 
    <li> 
	 1.User can donate the blood and we are take it for future needed.
	</li>
	<li> 
	2.If user need any blood for saving a life, we provide the blood a minimum charge.
	</li>
	<li> 
	 3.We save the user data in our database in case we need emergency so that we can make call the user or make a request for donate the blood 
	</li>
	<li> 
	 4.We inform the users the benefit of donating blood
	</li>
	<li>  
	5.User must able to know the what type of blood group is available in our BloodBank
	</li>
	<li>
	6.We provide the blood donation rules for the users
	</li>
	<li> 
	 7.Before we take the blood from the donar we must have a check-up process 
	</li>
	<li> 
	8.User can communicate with our BloodBank staff by 'whatsapp' 
	</li>
	<li> 
	 9.BloodBank system will show the users blood group with the contact details
	</li>
</ol>


</div>

</body>
<?php include 'layout/_footer.php'; ?>