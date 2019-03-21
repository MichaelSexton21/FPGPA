<!––Created by Michael Sexton-->

<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">

    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="gpa.php">GPA Calculation</a></li>
        <li><a href="FinalGrade.php">Final Grade</a></li>

    </ul>
    <title>Fordham Prep</title>

</head>

<body>
    <h1>
        <center>Fordham Prep</center>
    </h1>

    <script>
        function val() {
            if (form.q1.selectedIndex == 0) {
                alert('Please Enter Your Grade for Quarter 1');
                return false;
            } else if (form.q2.selectedIndex == 0) {
                alert('Please Enter Your Grade for Quarter 2');
                return false;
            } else if (form.q3.selectedIndex == 0) {
                alert('Please Enter Your Grade for Quarter 3');
                return false;
            } else if (form.q4.selectedIndex == 0) {
                alert('Please Enter Your Grade for Quarter 4');
                return false;
            }
            return true;
        }

    </script>


    <form name="form" action="actionFG.php" method="post" onsubmit="return val()" ;>
        <p>First Quarter Grade:</p>
        <select class="form-control" name="q1"><option selected value="0" disabled="disabled"> input grade</option>
          <option value="1">A</option>
          <option value="2">B+</option>
          <option value="3">B</option>
          <option value="4">C+</option>
          <option value="5">C</option>
          <option value="6">D</option>
          <option value="7">F</option>
      </select>

        <p>Second Quarter Grade:</p>
        <select class="form-control col-xs-4" name="q2">
          <option selected value="0" disabled="disabled"> input grade</option>
          <option value="1">A</option>
          <option value="2">B+</option>
          <option value="3">B</option>
          <option value="4">C+</option>
          <option value="5">C</option>
          <option value="6">D</option>
          <option value="7">F</option>
      </select>
        <p>Third Quarter Grade:</p>
        <select class="form-control col-xs-4" name="q3">
          <option selected value="0" disabled="disabled"> input grade</option>
          <option value="1">A</option>
          <option value="2">B+</option>
          <option value="3">B</option>
          <option value="4">C+</option>
          <option value="5">C</option>
          <option value="6">D</option>
          <option value="7">F</option>
      </select>
        <p>Fourth Quarter Grade:</p>
        <select class="form-control  col-xs-1*" name="q4">
          <option selected value="0" disabled="disabled"> input grade</option>
          <option value="1">A</option>
          <option value="2">B+</option>
          <option value="3">B</option>
          <option value="4">C+</option>
          <option value="5">C</option>
          <option value="6">D</option>
          <option value="7">F</option>
      </select>

        <input class="btn btn-primary" type="submit" value="Enter">
    </form>

    <div style="text-align:center;"><img class="center" src="fplogo.png" align="middle" style="width:180px; height:180px;"></div>

    <div class="footer" style="position: fixed; bottom: 0;">Updated June 2, 2017</div>

</body>

</html>
