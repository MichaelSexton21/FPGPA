<!––Created by Michael Sexton-->

<html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">

    <ul class="dir">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="gpa.php">GPA Calculation</a></li>
        <li><a href="FinalGrade.php">Final Grade</a></li>
    </ul>
    <title>Fordham Prep</title>
  
  <style>

body{
    font-weight: bold;
        font-size: 20px;

    }
    .dir{
        font-weight: bold;
        font-size: 20px;
    }
    .form {
      	max-height: 10%;
        background-color: #4A0001;
        color: #ffffff;
        line-height: 1.5;
        border-radius: 20px;
        text-align: center;
      	border: 5px solid #ffffff;  
      	width: 500px;
        height: 300px;
		border-spacing: 50px;
      	margin-right: auto;
        margin-left: auto;
      display: table;
      font-size: 250%
    }
    .footer{
    position: fixed; bottom: 0;
        font-weight: bold;
        
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4A0001;
}

</style>
</head>

<body>
    <h1>
        <center>Fordham Prep</center>
    </h1>

    <div class="form">
        <?php

   class Site{
     public function main(){
  function distribute($q){
        switch(true){
            case($q==0):
            break;
            case ($q == 1):
                return 4.00;
                break;
            case ($q == 2):
                return 3.50;
                break;
            case ($q == 3):
                return 3.00;
                break;
            case ($q == 4):
                return 2.50;
                break;
            case ($q == 5):
                return 2.00;
                break;
            case ($q == 6):
                return 1.00;
                break;
            case ($q == 7):
                return 0.0;
                break;
        }
    }
function selection($fg){
         switch(true){
         case($fg>=3.75):
			echo 'Final Grade: A'. "</br>";
             break;
		case(3.25 <= $fg && $fg < 3.75):
			echo 'Final Grade: B+'. "</br>";
             break;
		case(2.75 <= $fg && $fg < 3.25):
			echo 'Final Grade: B'. "</br>";
             break;
		case(2.25 <= $fg && $fg < 2.75):
			echo 'Final Grade: C+'. "</br>";
             break;
		case(1.25 <= $fg && $fg < 2.25):
			echo 'Final Grade: C'. "</br>";
             break;
		case(2.25 >= $fg && $fg != 0):
			echo 'Final Grade: D'. "</br>";
             break;
		case($fg==0):
			echo 'Final Grade: F'. "</br>";
             break;
         }
       }
function display($grade){
    switch(true){
            case($grade==1):
            return 'A';
            break;
            case($grade==2):
            return 'B+';
            break;
            case($grade==3):
            return 'B';
            break;
            case($grade==4):
            return 'C+';
            break;
            case($grade==5):
            return 'C';
            break;
            case($grade==6):
            return 'D';
            break;
            case($grade==7):
            return 'F';
            break;
    }
}
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
         
         $g1=display($q1);
         $g2=display($q2);
         $g3=display($q3);
         $g4=display($q4);
         
    $q11 = distribute($q1);
    $q22 = distribute($q2);
    $q33 = distribute($q3);    
    $q44 = distribute($q4);
       
       $fg=($q11*.2)+($q22*.3)+($q33*.2)+($q44*.3);
     	selection($fg);
         
         echo "<div style='text-align:right; font-size:20px;' class='col-xs-7'>Quarter 1:</div>";
         echo "<div style='text-align:left; font-size:20px;' class='col-xs-5'>$g1</div>";
         echo "<div style='text-align:right; font-size:20px;' class='col-xs-7'>Quarter 2:</div>";
         echo "<div style='text-align:left; font-size:20px;' class='col-xs-5'>$g2</div>";
         echo "<div style='text-align:right; font-size:20px;' class='col-xs-7'>Quarter 3:</div>";
         echo "<div style='text-align:left; font-size:20px;' class='col-xs-5'>$g3</div>";
         echo "<div style='text-align:right; font-size:20px;' class='col-xs-7'>Quarter 4:</div>";
         echo "<div style='text-align:left; font-size:20px;' class='col-xs-5'>$g4</div>";
     }
     
   }
  Site::main();
?>
            <button class="btn btn-primary" onclick="history.go(-1);">Back </button>
    </div>

    <div style="text-align:center;"><img class="center" src="fplogo.png" align="middle" style="width:180px; height:180px;"></div>

    <div class="footer">Updated June 2, 2017</div>

</body>

</html>
