<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pof Estimate Calculator!</title>
    <style type="text/css">
    #ui{
        background-color: silver;
        padding:30px;
        border-radius:10px;
        opacity: 1.2;
        margin-top: 30px
        
    }</style>
  </head>
  <body>
    <div  class="text-center mt-5" >
        <form id="ui"  action="sitee.php" method="get" style="max-width: 480px;margin:auto">
            
            <h1 class="h3 mb-3 font-eight-normal">Pof Estimate Calculator!</h1> <br> <br> <br>
          <p>  Enter your School Fees £ <input type="text" id="numbers"  name="fees" placeholder="Enter School Fees" required autofocus>£
          </p>  
         

            <p>  Deposit Paid £ <input type="text" name="deposit" placeholder="Enter Deposit">£
            </p> <p>
                Select Campus Location <select name="campus" >
                <option value="LONDON">LONDON</option>
                <OPTion    value="OUTSIDELONDON">OUTSIDE LONDON</OPTion>
                
                </select>
                </p>
               <p> How Many Dependant Are you Traveling With 
                <select name="dependant" >
                    <option> NONE </option>
                    <option> ONE  </option>
                    <option> TWO  </option>
                    <option>  THREE </option>
                    <option>  FOUR </option>
                    <option> FIVE  </option>
                    
                </select></p>
                <div class="mt-3">
                    <p> <button class="btn btn-lg btn-primary btn-block">CALCULATE</button> </p>
                </div>
                <BR></BR><div class="h1"> £:
        </form>   
        <?php

$fees=$_GET["fees"];
$deposit= $_GET["deposit"];
$campus=$_GET["campus"];
$dependant=$_GET["dependant"];
$LONDON=$_GET["LONDON"];
$OUTSIDELONDON=$_GET["OUTSIDELONDON"];
$dependant=$_GET["dependant"];


$LONDON = array("12006");
$OUTSIDELONDON = array("9207");
$joinbody= array("7605", "15210", "22815", "30420",
"38025", "6120", "12240", "18360", "24480", "30600");


if ($campus == "LONDON" && $dependant == "NONE") {
    echo $LONDON[0] + $fees - $deposit;
}
elseif ($campus == "LONDON" && $dependant == "ONE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[0];
}
elseif ($campus == "LONDON" && $dependant == "TWO") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[1];
}
elseif ($campus == "LONDON" && $dependant == "THREE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[2];
}
elseif ($campus == "LONDON" && $dependant == "FOUR") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[3];
}
elseif ($campus == "LONDON" && $dependant == "FIVE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[4];
}
elseif ($campus == "OUTSIDELONDON" && $dependant == "NONE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit;
}
elseif ($campus == "OUTSIDELONDON" && $dependant == "ONE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[5];
}
elseif ($campus == "OUTSIDELONDON" && $dependant == "TWO") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[6];
}
elseif ($campus == "OUTSIDELONDON" && $dependant == "THREE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[7];
}
elseif ($campus == "OUTSIDELONDON" && $dependant == "FOUR") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[8];
}
elseif ($campus == "OUTSIDELONDON" && $dependant == "FIVE") {
    echo $OUTSIDELONDON[0] + $fees - $deposit + $joinbody[9];
}


//  echo $fees - $deposit + $campus + $dependant;




?></div>
    </div>

    
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>