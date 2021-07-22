<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pasakay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">    
</head>
<body>

    <header>
            <img src="123.jpeg" alt="">



<nav>
  <div id= ="nav>
    <ul>
    <li><a style="color: white" href="#section3">Contact</a></li>
    <li><a style="color: white" href="login.php">Log-in</a></li>
    <li><a style="color: white" href="#section2">About Us</a></li>
    <li><a style="color: white" href="maproute.php">Map Routes</a></li>
    <li><a style="color: white" href="#section1">Home</a></li>
    <div class="nav-left">
    <a style="color: white">PASAKAY</a>
    </div>
    </ul>
  </div>
</nav>

    <div id ="section1">
    <h1>
    <span>PASAKAY</span>
    </h1>
    </div>
</header>

    <div id ="section2">
    <h2>
        PASAKAY: AN ONLINE LAND VEHICLE POOLING AND RENTAL SERVICES WITH GPS TECHNOLOGY
    </h2>
    <p style="margin-left: 30px, margin-right30px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;An Online Land Vehicle Pooling and Rental Services with GPS Technology to facilitate advancement of the transportation services to acquire effectual transport for the citizens. The &emsp;&emsp;&emsp;&emsp;system supports quality services to reduce consumptions of manual work though in a much efficient way. To deliver a quality services for people to travel comfortably and safety. This &emsp;&emsp;&emsp;&emsp;innovation could help people who alter physical activities acquiring an available ride to share and to integrate technologies like GPS to help people track more easier. This services help &emsp;&emsp;&emsp;&emsp;people to save more time and energy. It will bring happiness and conveniences as it has integration of GPS naviagtion and SMS Notificationin acquiring available ride to share and rent with &emsp;&emsp;&emsp;&emsp;instant response, which will make people life easier.</p>

    <div class="row">
  <div class="columna">
    <img src="Images\car1.jpg" style="width:95%">
  </div>
  <div class="columna">
    <img src="Images\car3.png" style="width:110%">
  </div>
  <div class="columna">
    <img src="Images\car2.jpg" style="width:100%">
  </div>
</div>

    </div>

    <div id ="section3">
    <h2>
        Contact Us!<br><br>
        <div class="row">
  <div class="column">
    <div class="card">
      <img src="Images\en.jpg" alt="Enrico" style="width:30%">
      <div class="container">
        <h3>Enrico Rosano Jr</h3>
        <p class="title"><br>Founder</p>
        <p style="color:blue"><br>Facebook: </p><a href="https://web.facebook.com/erica.rosano.9/">Enrico Rosano Jr</a>
        <p style="color:red"><br>Email: </p><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSKjDcwBFMtNqGrrtZJbWMxvzdZVZFLhkVbGtZscfRpClvJmbmnHGBGDmCbGmzrGCgpBCnWS">Enrico Rosano Jr</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Images\aila.jpg" alt="Aila" style="width:30%">
      <div class="container">
        <h3>Aila Mei Atienza</h3>
        <p class="title"><br>Founder</p>
        <p style="color:blue"><br>Facebook: </p><a href="https://web.facebook.com/ailamei.atienza">Aila Mei Atienza</a>
        <p style="color:red"><br>Email: </p><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGLdqKQbVXfmLwnvwsfLfKrqvschZdpRJqrvqWCJVRWwClTrMrBLgMWtsGDPPDLDmJSmCJC">Aila Mei Atienza</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Images\paul.jpeg" alt="Paul" style="width:36%">
      <div class="container">
        <h3>Paul Vincent Arellano</h3>
        <p class="title"><br>Founder</p>
        <p style="color:blue"><br>Facebook: </p><a href="https://web.facebook.com/paulvincentarellano.15">Paul Vincent Arellano</a>
        <p style="color:red"><br>Email: </p><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCFTDJFQwzBxbZJVnDVRsDsRjvmgxZQhnrTJlwjVDXWsjPKhPlvnPpXKdbwkkMDZPtmBLq">Paul Vincent Arellano</a>
      </div>
    </div>
  </div>
</div>
    </h2>
    </div>

    <div style="color: white" class="footer">
        <p align="center" style="background-color: brown">&copy; PASAKAY
        <?php
            getdate();
            $mydate=getdate(date("U"));
            echo "$mydate[month] $mydate[mday], $mydate[year]";
            ?>
            </p>
    </div


</body>
</html>
