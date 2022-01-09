<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Certificate</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        width: 100%;

        text-align: center;
        margin-left: 1%;
        position:relative;

    }
    .image_logo{
        width: 22%;
        margin-top: 12px;
        margin-left: 88px;
    }
   .container h3{
        font-family: sans-serif;

    }
    .header{
        display: inline-block;
        /* margin-left: 150%; */


    }
    .float-right{
        float: right;
        margin-top: 42px;
    }
    h1{
        text-decoration: underline;
    }
    .sans-serif{
        font-family: sans-serif;
    }

     #stamp{
        position: absolute;
        bottom: 10px;
        left: 500px;

    }
    .details{
        /* text-align: center; */
        display: inline-block;
        left: 40px;
    }
</style>
<body>
    <div class="container">
        <div class="header">
            <img src="images/coat_of_arm.png" alt="" class="image_logo" style="">

            <div class="float-right">
                <h3>Form B.2</h3>
                <h2>ORIGINAL</h2>
            </div>

            <h3>FEDRAL REPUBLIC OF NIGERIA</h3>
            <h2>NATIONAL POPULATION COMMISSION</h2><br>
            <h1 id="heading">CERTIFICATE OF BIRTH</h1>
        </div>


        <br><br><br>


        <div class="sans-serif">
        <p>Issued under the Birth and Death Etc. (Compulsory Registration) Decree 69 of 1992</p><br>

    <div class="details">
    <p style="text-align: left;"> Registration Centre: <?php echo"_______________________ "; ?></p><br>

<p style="text-align: left;"> Town/Village: <?php echo"_______________________ "; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Certificate Number:__________________" ;?></p><br>

<p style="text-align: left;"> L.G.A: <?php echo"_______________________ "; ?></p>
<br><p style="text-align:left;">Volume&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;Entry No.<?php echo"_______________________" ?></p><br>
<p style="text-align: left;"> State: <?php echo"_______________________ "; ?></p><br>
<p style="text-align: left;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that birth, details which are recorded herein, has been registered on</p><br>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _______________________  </p>
<p style="text-align: left;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day Month Year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo "at this registration centre." ;?></p><br>
<p style="text-align: left;">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Full Name: <?php echo"__________________________________________________________ "; ?></p><br>
<p style="text-align: left;">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex: <?php echo" ______________"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Date of Birth:<?php echo"______________________ ";?></p><br>
<p style="text-align: left;">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Place of Birth: <?php echo" ______________"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Town/Village:<?php echo"______________________ ";?></p><br>
<p style="text-align: left;">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Full Name of Father(Surname first): <?php echo" ______________________________________"; ?></p><br>
<p style="text-align: left;">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Full Name of Mother(Surname first): <?php echo" ______________________________________"; ?></p><br>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Place of Issue: <?php echo" ______________"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name of Registrar:<?php echo"______________________ ";?></p><br>
<p style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date: <?php echo" ______________"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Stamp:<?php echo"______________________ ";?></p><br>
<img src="images/stamps.png" alt="stamp" width="12%" id="stamp">
<br><p style="text-align: center; font-weight: bold;">NATIONAL REGISTRATION PROGRAMME</p>

    </div>
        

        
        </div>
    </div>
</body>
</html>