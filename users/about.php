<?php
$title="About Us";$setAboutActive="active";
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
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: #171616;
    align-content: center;
    min-height: 100vh;
	background-image: url();
}

section{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 90vh;
    width: 85vw;
    margin: 0 auto;
}

.content{
    background: #bfbaba;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
	text-align: justify;
    margin: 0 auto;
    line-height: 1.7;
}
.links{
    margin: 15px 0;
}
.links li{
    border: 0.5px solid #777;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
}
.links li a{
    text-transform: uppercase;
    color: #777;
    text-decoration: none;
}
.links li:hover{
    border-color: #06d6a0;
}
.links li:hover a{
    color :#06d6a0;
}
.vertical-line{
    height: 30px;
    width: 0.5px;
    background: #777;
    margin: 0 auto;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: #06d6a0;
}


/*****************/

@media(max-width: 992px){
    section{
        grid-template-columns: 1fr;
        width: 100%;
    }
    .content{
        height: 100vh;
    }
    .content h2{
        font-size: 20px;
        margin-top: 50px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}
</style>

<body>
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<section>
<div class="container">
    <div class="row">
        <div class="content">
            <a href="#" id="Heading">About Us</a>
            <p>We are a non-profitable organization. This Blood Bank aims at maintaining all the information pertaining to blood donors, 
			different blood groups available in each blood bank and help them manage in a better way. </p>
			 <ul class = "links">
                    <li><a href = "ourServices.php">Our Services</a></li>

                    <div class = "vertical-line"></div>

                    <li><a href = "ContactOffice.php">Contact Office</a></li>

                    <div class = "vertical-line"></div>
                    
                    <li><a href = "ourTeam.php">Our Team</a></li>
                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-github"></i>
                    </li>
                    <li>
                        <i class = "fa fa-pinterest"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
</body>
<?php include 'layout/_footer.php'; ?>

