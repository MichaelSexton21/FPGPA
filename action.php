<!––Created by Michael Sexton-->

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <ul class="dir">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="gpa.php">GPA Calculation</a></li>
        <li><a href="FinalGrade.php">Final Grade</a></li>
    </ul>
  
  <style>
  body{
      font-weight: bold;
     
    }
    .form {
        font-weight: bold;
        background-color: #4A0001;
        color: #ffffff;
        line-height: 1.5;
        border-radius: 20px;
        text-align: center;
      	border: 5px solid #ffffff;  
      	width: 500px;
        height: auto;
        margin: auto;
            font-size: 150%;
        padding:10px;
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
  .footer{
  position: fixed; 
    bottom: 0;
  }
    .dir{
        font-weight: bold;
        font-size: 20px;
    }

</style>

</head>

<body>
    <center>
        <h1>Fordham Prep</h1>
    </center>
    <div class="form">
        <?php
	
   class Site{
     public function main(){
 function distribute($class, $grade){
        switch (true){
            case ($class == 0):
                break;
            case ($class == 1):
                return AP($grade);
                break;
            case ($class == 2):
                return AH($grade);
                break;
            case ($class == 3):
                return H($grade);
                break;
            case ($class == 4):
                return R($grade);
                break;
        }
    }
       function HonorsCheckSix($weightedgpa, $c1g, $c2g,$c3g,$c4g,$c5g,$c6g){
         if($weightedgpa>=3.9){
           if(($c1g==1)||($c1g==2)||($c1g==3)){
           if(($c2g==1)||($c2g==2)||($c2g==3)){
           if(($c3g==1)||($c3g==2)||($c3g==3)){
           if(($c4g==1)||($c4g==2)||($c4g==3)){
           if(($c5g==1)||($c5g==2)||($c5g==3)){
           if(($c6g==1)||($c6g==2)||($c6g==3)){
             echo "Congratulations, you recieved First Honors!". "</br>";
         }}}}}}}}
       function HonorsCheckSeven($weightedgpa, $c1g, $c2g,$c3g,$c4g,$c5g,$c6g, $c7g){
         if($weightedgpa>=3.9){
           if(($c1g==1)||($c1g==2)||($c1g==3)){
           if(($c2g==1)||($c2g==2)||($c2g==3)){
           if(($c3g==1)||($c3g==2)||($c3g==3)){
           if(($c4g==1)||($c4g==2)||($c4g==3)){
           if(($c5g==1)||($c5g==2)||($c5g==3)){
           if(($c6g==1)||($c6g==2)||($c6g==3)){
           if(($c7g==1)||($c7g==2)||($c7g==3)){
             echo "Congratulations, you recieved First Honors!". "</br>";
         }}}}}}}}}
       
    function AP($grade){
        switch(true){
            case ($grade == 1):
                return 4.75;
                break;
            case ($grade == 2):
                return 4.25;
                break;
            case ($grade == 3):
                return 3.75;
                break;
            case ($grade == 4):
                return 3.25;
                break;
            case ($grade == 5):
                return 2.75;
                break;
            case ($grade == 6):
                return 1.75;
                break;
            case ($grade == 7):
                return 0.0;
                break;
        }
    }
    function AH($grade){
        switch(true){
            case ($grade == 1):
                return 4.55;
                break;
            case ($grade == 2):
                return 4.00;
                break;
            case ($grade == 3):
                return 3.50;
                break;
            case ($grade == 4):
                return 3.00;
                break;
            case ($grade == 5):
                return 2.50;
                break;
            case ($grade == 6):
                return 1.50;
                break;
            case ($grade == 7):
                return 0.0;
                break;
        }
    }
    function H($grade){
        switch(true){
            case ($grade == 1):
                return 4.25;
                break;
            case ($grade == 2):
                return 3.75;
                break;
            case ($grade == 3):
                return 3.25;
                break;
            case ($grade == 4):
                return 2.75;
                break;
            case ($grade == 5):
                return 2.25;
                break;
            case ($grade == 6):
                return 1.25;
                break;
            case ($grade == 7):
                return 0.0;
                break;
        }
    }
    function R($grade){
        switch(true){
            case ($grade == 1):
                return 4.00;
                break;
            case ($grade == 2):
                return 3.50;
                break;
            case ($grade == 3):
                return 3.00;
                break;
            case ($grade == 4):
                return 2.50;
                break;
            case ($grade == 5):
                return 2.00;
                break;
            case ($grade == 6):
                return 1.00;
                break;
            case ($grade == 7):
                return 0.0;
                break;
        }
    }
         function display($cl){
             switch (true){
            case ($cl == 0):
                break;
            case ($cl == 1):
                return "Advanced Placement";
                break;
            case ($cl == 2):
                return "Advanced Honors";
                break;
            case ($cl == 3):
                return "Honors";
                break;
            case ($cl == 4):
                return "Regular";
                break;
        }
         }
         function display1($g){
             switch(true){
            case ($g == 1):
                return "A";
                break;
            case ($g == 2):
                return "B+";
                break;
            case ($g == 3):
                return "B";
                break;
            case ($g == 4):
                return "C+";
                break;
            case ($g == 5):
                return "C";
                break;
            case ($g == 6):
                return "D";
                break;
            case ($g == 7):
                return "F";
                break;
        }
         }
    $c1l = $_POST['c1l'];
    $c1g = $_POST['c1g'];
    $c2l = $_POST['c2l'];
    $c2g = $_POST['c2g'];
    $c3l = $_POST['c3l'];
    $c3g = $_POST['c3g'];
    $c4l = $_POST['c4l'];
    $c4g = $_POST['c4g'];
    $c5l = $_POST['c5l'];
    $c5g = $_POST['c5g'];
    $c6l = $_POST['c6l'];
    $c6g = $_POST['c6g'];
    $c7l = $_POST['c7l'];
    $c7g = $_POST['c7g'];
         
             $l1=display($c1l);
             $l2=display($c2l);
             $l3=display($c3l);
             $l4=display($c4l);
             $l5=display($c5l);
             $l6=display($c6l);
             $l7=display($c7l);
                 
             $g1=display1($c1g);
             $g2=display1($c2g);
             $g3=display1($c3g);
             $g4=display1($c4g);
             $g5=display1($c5g);
             $g6=display1($c6g);
             $g7=display1($c7g);
             
    $oneuw = "";
    $twouw = "";
    $threeuw = "";
    $fouruw = "";
    $fiveuw = "";
    $sixuw = "";
    $sevenuw = "";
         
    $oneuw = R($c1g);
    $twouw = R($c2g);
    $threeuw = R($c3g);
    $fouruw = R($c4g);
    $fiveuw = R($c5g);
    $sixuw = R($c6g);
    $sevenuw = R($c7g);
         
    $gpa1 = distribute($c1l,$c1g);
    $gpa2 = distribute($c2l,$c2g);
    $gpa3 = distribute($c3l,$c3g);
    $gpa4 = distribute($c4l,$c4g);
    $gpa5 = distribute($c5l,$c5g);
    $gpa6 = distribute($c6l,$c6g);
    $gpa7 = distribute($c7l,$c7g);
       if($c7l==0){
       $weightedgpa = ($gpa1 + $gpa2 + $gpa3 + $gpa4 + $gpa5 + $gpa6)/6;
        $unweightedgpa = ($oneuw+$twouw+$threeuw+$fouruw+$fiveuw+$sixuw)/6;
       }else{
         $weightedgpa = ($gpa1 + $gpa2 + $gpa3 + $gpa4 + $gpa5 + $gpa6+$gpa7)/7;
        $unweightedgpa = ($oneuw+$twouw+$threeuw+$fouruw+$fiveuw+$sixuw+$sevenuw)/7;
       }
    $weightedgpa = floor($weightedgpa*100)/100;
    $unweightedgpa = floor($unweightedgpa*100)/100;
        echo  "<p style ='font-size:35px'>Your Weighted GPA is: $weightedgpa</p>";
        echo  "<p style ='font-size:35px'>Your Unweighted GPA is: $unweightedgpa</p>";
      if($c7l==0){
       HonorsCheckSix($weightedgpa, $c1g, $c2g,$c3g,$c4g,$c5g,$c6g);
      }else{
        HonorsCheckSeven($weightedgpa, $c1g, $c2g,$c3g,$c4g,$c5g,$c6g,$c7g);
      }
     
         echo "<div style='text-align:left' class='col-xs-10'>Class 1: $l1</div>";
         echo "<div class='col-xs-1'>$g1</div>";
         echo "<div style='text-align:left' class='col-xs-10'>Class 2: $l2</div>";
         echo "<div class='col-xs-1'>$g2</div>";
         echo "<div style='text-align:left' class='col-xs-10'>Class 3: $l3</div>";
         echo "<div class='col-xs-1'>$g3</div>";
         echo "<div style='text-align:left' class='col-xs-10'>Class 4: $l4</div>";
         echo "<div class='col-xs-1'>$g4</div>";
         echo "<div style='text-align:left' class='col-xs-10'>Class 5: $l5</div>";
         echo "<div class='col-xs-1'>$g5</div>";
         echo "<div style='text-align:left' class='col-xs-10'>Class 6: $l6</div>";
         echo "<div class='col-xs-1'>$g6</div>";
         if($c7l!=0){
             echo "<div style='text-align:left' class='col-xs-10'>Class 7: $l7</div>";
         echo "<div class='col-xs-1'>$g7</div>";
         }
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
