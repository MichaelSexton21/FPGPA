<!––Created by Michael Sexton-->

<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">

    <title>Fordham Prep</title>
</head>

<body>
    <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="gpa.php">GPA Calculation</a></li>
        <li><a href="FinalGrade.php">Final Grade</a></li>
    </ul>
    <h1>
        <center>Fordham Prep</center>
    </h1>
    <div class="form">
        <script>
            function val() {
                if (form.c1l.selectedIndex == 0) {
                    alert('Please Enter the Level of your First Class');
                    return false;
                } else if (form.c1g.selectedIndex == 0) {
                    alert('Please Enter Your Grade for your First Class');
                    return false;
                } else if (form.c2l.selectedIndex == 0) {
                    alert('Please Enter the Level of your Second Class');
                    return false;
                } else if (form.c2g.selectedIndex == 0) {
                    alert('Please Enter Your Grade for your Second Class');
                    return false;
                } else if (form.c3l.selectedIndex == 0) {
                    alert('Please Enter the Level of your Third Class');
                    return false;
                } else if (form.c3g.selectedIndex == 0) {
                    alert('Please Enter Your Grade for your Third Class');
                    return false;
                } else if (form.c4l.selectedIndex == 0) {
                    alert('Please Enter the Level of your Fourth Class');
                    return false;
                } else if (form.c4g.selectedIndex == 0) {
                    alert('Please Enter Your Grade for your Fourth Class');
                    return false;
                } else if (form.c5l.selectedIndex == 0) {
                    alert('Please Enter the Level of your Fifth Class');
                    return false;
                } else if (form.c5g.selectedIndex == 0) {
                    alert('Please Enter Your Grade for your Fifth Class');
                    return false;
                } else if (form.c6l.selectedIndex == 0) {
                    alert('Please Enter the Level of your Sixth Class');
                    return false;
                } else if (form.c6g.selectedIndex == 0) {
                    alert('Please Enter Your Grade for your Sixth Class');
                    return false;
                }
                return true;
            }

        </script>
        <form name="form" action="action.php" method="post" onsubmit="return val()" ;>
            <p>Class 1:</p>
            <div class="col-xs-6"><select class="form-control" name="c1l">
                    <option selected value="0" disabled="disabled"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                    </select></div>
            <div class="col-xs-6">
                <select class="form-control" name="c1g">
                    <option selected value="0" disabled="disabled"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                    </select></div>
            <p>Class 2:</p>
            <div class="col-xs-6">

                <select class="form-control" name="c2l">
                    <option selected value="0" disabled="disabled"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                    </select></div>
            <div class="col-xs-6">
                <select class="form-control" name="c2g">
                    <option selected value="0" disabled="disabled"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                        </select></div>

            <p>Class 3:</p>
            <div class="col-xs-6">
                <select class="form-control" name="c3l">
                   <option selected value="0" disabled="disabled"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                </select></div>
            <div class="col-xs-6">
                <select class="form-control" name="c3g">
                    <option selected value="0" disabled="disabled"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                </select></div>


            <p>Class 4:</p>

            <div class="col-xs-6"><select class="form-control" name="c4l">
                    <option selected value="0" disabled="disabled"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                    </select></div>
            <div class="col-xs-6"><select class="form-control" name="c4g">
                   <option selected value="0" disabled="disabled"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                    </select></div>


            <p>Class 5:</p>
            <div class="col-xs-6"><select class="form-control" name="c5l">
                    <option selected value="0" disabled="disabled"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                    </select></div>
            <div class="col-xs-6"><select class="form-control" name="c5g">
                    <option selected value="0" disabled="disabled"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                    </select></div>


            <p>Class 6:</p>
            <div class="col-xs-6"><select class="form-control" name="c6l">
                    <option selected value="0" disabled="disabled"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                    </select></div>
            <div class="col-xs-6"><select class="form-control" name="c6g">
                    <option selected value="0" disabled="disabled"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                    </select></div>

            <p>Class 7 (if applicable):
                <div class="col-xs-6"><select class="form-control" name="c7l">
                    <option selected value="0"> input class level</option>
                    <option value="1">Advanced Placement</option>
                    <option value="2">Advanced Honors</option>
                    <option value="3">Honors</option>
                    <option value="4">Regular</option>
                    </select></div>
                <div class="col-xs-6"><select class="form-control" name="c7g">
                    <option selected value="0"> input grade</option>
                    <option value="1">A</option>
                    <option value="2">B+</option>
                    <option value="3">B</option>
                    <option value="4">C+</option>
                    <option value="5">C</option>
                    <option value="6">D</option>
                    <option value="7">F</option>
                    </select></div>
                <input class="btn btn-primary col-xs-*" type="submit" value="Enter">
        </form>

    </div>
    <div style="text-align:center;"><img class="center" src="fplogo.png" align="middle" style="width:180px; height:180px;"></div>

    <div class="footer">Updated June 2, 2017</div>

</body>

</html>
