<?php require_once('connect.php');
    session_start();
    include('navbar.php');
    if($_SESSION['loggedin']!=1){
        header('Location: login.php');
    }
?>
<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="../css/aboutus.css">
        
    </head>

    <body>
        <div class="loginbox">
            <center><h1 style="color:#00fe00; height:100px;font-family:arial; padding-top:50px; padding-bottom:5px;font-size:40px;">About Tingle</h1></center>
            <h3><font face="arial">Our History</font></h3>
            <p>We initiated intending to reach the climax, and already we have remarked our own identity in the industry 
                as unique achievers reaching the peak of your expectations. 
                With years of experience and exploratory eyes, we are empowering more and more day by day.
            </p>
            
            <h3 ><font face="arial">Our People</font></h2>
            <p>We are a strongly bonded group of people of software engineers and software architectures. We are sophisticated with immense potential and real-time technology with intense supervision of a fully experienced software architect.
                We ensure you a quality output enshrined with your dream in the end.
            </p>
            
            <h3><font face="arial">Our Mission</font></h3>
            <p>We aim to bring the ideality into reality with a production 
                which is centred to your expectation and broadcasted to the infinity in every aspect.
            </p>
            <h3><font face="arial">Our Focus</font></h3>
            <p>We hope to reach the best with your aspirations with the assurance of a
                high-quality product embellished with further developments of customers requirements.
            </p>
            <h3><font face="arial">Our Team </font></h3>
            <p>We are an experienced, passionate, creative team, who are dedicated 
                to providing your business with the best experience.</p>
            <figure>   
            <img src="../images/a1.png" width="12%"><q style="position:absolute; padding-top:60px; padding-left:50px;">As a chief executive determined to lead Tingle to new heights, 
                I am keenly aware of the immense responsibilities on my shoulders.</q>
            <figcaption><b>Chief Executive Officer</b></figcaption><br /> 
            <img src="../images/a3.png" width="12%"><q style="position:absolute; padding-top:60px; padding-left:50px;">Always think about the next horizon.
                Customers own the conversation now. You must play among them to influence them.</q>
            <figcaption><b>Chief Marketing Officer</b></figcaption><br />
            <img src="../images/a4.png" width="12%"><q style="position:absolute; padding-top:60px; padding-left:50px;">When a company seeks a new Technical Officer,
                enormous trouble is taken to find the best person.</q>
            <figcaption><b>Chief Technical Officer</b></figcaption><br />
            </figure>
        </div>
    <body>
</html>