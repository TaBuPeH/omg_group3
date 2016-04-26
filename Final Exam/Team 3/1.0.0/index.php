
<!--Created by Zerzolar-->

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="viewport" content="width=device-width">

    <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.12.0.js"></script>
<!--    <script src="js/jquery-1.9.0.min.js"></script>-->
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="Pictures/transparent-logo.ico">

    <title>Abnormal Graphics</title>


</head>
<body>

<header>

    <div id="video-bg">
        <video controls loop muted autoplay poster="Pictures/tech-blocks.jpg" id="video">
            <source src="videos/tech-blocks.webm" type="video/webm">
            <source src="videos/tech-blocks.mp4" type="video/mp4">
            <source src="videos/tech-blocks.ogv" type="video/ogg">
        </video>
    </div>

    <nav>
        <div class="logo-link">
            <a href="index.php">
                <img src="Pictures/transparent-logo.png" alt="" />
            </a>
            <a href="index.php">
                <p>AbnormalGraphics</p>
            </a>
        </div>

       <div id="nav-menu">
           <div id="sign-in-button">
               Sign in
           </div>
           <div id="login-button">
               Log in
           </div>
       </div>

    </nav>

    <h1 id="main-header">Abnormal Graphics</h1>


</header>


<section>

    <div id="wrapper">

    </div>

</section>

<!--<footer>-->
<!--    <div class="pull-left">-->
<!--        <a href="http://www.facebook.com/" target="_blank">-->
<!--            <img src="picture/transparent-facebook-logo.png" alt="Facebook"  height="30px" width="45px" />-->
<!--        </a>-->
<!--        <a href="https://plus.google.com/" target="_blank">-->
<!--            <img src="picture/transparent-google-logo.png" alt="Google+" height="28px" width="34.5px"/>-->
<!--        </a>-->
<!--        <a href="https://twitter.com/" target="_blank">-->
<!--            <img src="picture/transparent-twitter-logo.png" alt="Twitter" height="28px" width="34.5px"/>-->
<!--        </a>-->
<!--        <a href="https://www.youtube.com/" target="_blank">-->
<!--            <img src="picture/transparent-youtube-logo.png" alt="YouTube" height="30px" width="45px"/>-->
<!--        </a>-->
<!--    </div>-->
<!--    <div class="pull-right">-->
<!--        <p>-->
<!--            Copyright © 1998-2015 Abnormal Graphics Inc. <br />-->
<!--            All trademarks or registered trademarks are property of their respective owners.-->
<!--        </p>-->
<!--    </div>-->
<!--</footer>-->


<div id="darker-bg"> </div>

<form action="php/login.php" method="post" id="login-form">

    <div class="current-form form-links log-in-link">Log In </div>
    <div class="not-current-form form-links sign-in-link">Sign In </div>

    <div class="container">
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Log In" class="submit" >
        <p class="form-comments" id="forgotten-password">Forgot password?</p>
    </div>
</form>

<form action="php/signIn.php" method="post" id="sign-in-form">

    <div class="not-current-form form-links log-in-link">Log In</div>
    <div class="current-form form-links sign-in-link">Sign In</div>

    <div class="container">
        <div class="input">
            <input type="text" name="username" class="username" placeholder="Username">
            <div class="img" style="width: 100% ; height: 10px;">  </div>
        </div>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat password">
        <input type="email" name="email" id="email" placeholder="e-mail">
        <input type="text" name="firstName" id="firstName" placeholder="First name">
        <input type="text" name="lastName" id="lastName" placeholder="Last name">
        <div class="form-select-container">
            <select class="selectForm" name="user-gender" id="gender">
                <option value="" selected>Gender</option>
                <option value="1" >Male</option>
                <option value="2" >Female</option>
                <option value="3" >Other</option>
            </select>
            <select class="selectForm" name="user-born_at_day" id="date_day">
                <option value="">Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select class="selectForm" name="user-born_at_month" id="date_month">
                <option value="">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select class="selectForm" name="user-born_at_year" id="date_year">
                <option value="">Year</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
            </select>
        </div>
        <span class="form-comments"> By clicking up "Sign up" you agree to our <span class="terms-and-policies-link">Terms and Policies</span> </span>
        <input type="submit" value="Sign up" class="submit">

    </div>
</form>



</body>
</html>
