<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<head>
    <meta charset="UTF-8">
    <title>Student registration form</title>
    <link rel="stylesheet" href="usedcss.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="STYLE1.css">
</head>
<body class="w3-ul w3-animate-top w3-blue-grey">
<center><h1>Student registration form</h1></center>
<form method="post" action="index.php" class="w3-animate-left">
    <center>
        <div id="p1">
            <table class="w3-table">
                <tr >                
                    <td>Name:</td><td><input type="text" title="Enter the name" name="name" class="w3-input w3-animate-zoom"<?php
                        if (isset($_POST['ok'])) {
                            $name = $_POST['name'];
                            if ($name === "") {
                                echo "placeholder='Missing Name'";
                            }
                        }
                        ?></input>

                    </td><td><?php
                        if (isset($_POST['ok'])) {
                            global $check;
                            if ($name === "") {
                                print"<p class='wrong'>&#10006;</p>";
                            } else {
                                $check = $check + print"<p class='right'>&#10004;</p>";
                            }
                        }
                        ?></td>
                </tr>
                <tr>                
                    <td>Father Name:</td><td><input type="text" title="Enter the Father name" class="w3-input w3-animate-zoom" name="father_name"<?php
                        if (isset($_POST['ok'])) {
                            $father_name = $_POST['father_name'];
                            if ($father_name === "") {
                                echo "placeholder='Missing Father Name'";
                            } /* else {
                              global $detials, $detial;
                              $detials = "";
                              $detial[1] = 1;
                              }
                             */
                        }
                        ?></input></td><td><?php
                            if (isset($_POST['ok'])) {
                                if ($father_name === "") {
                                    echo "<p class='wrong'>&#10006;</p>";
                                } else {
                                    global $check;
                                    $check = $check + print"<p class='right'>&#10004;</p>";
                                }
                            }
                            ?></td>
                </tr>
                <tr>                
                    <td>Contact number:</td><td><input type="text" name="Contact_number" class="w3-input w3-animate-zoom" title="Enter the Contact number"<?php
                        if (isset($_POST['ok'])) {
                            $Contact_number = $_POST['Contact_number'];
                            if ($Contact_number === "") {
                                echo "placeholder='Missing Contact number'";
                                //  echo 'Please enter the Contact number';
                            } /* else {
                              global $detials, $detial;
                              $detials = "The Contact number is $Contact_number \n";
                              $detial[2] = 1;
                              }
                             */
                        }
                        ?></input></td><td><?php
                            if (isset($_POST['ok'])) {
                                if ($Contact_number === "") {
                                    echo "<p class='wrong'>&#10006;</p>";
                                } else {
                                    global $check;
                                    $check = $check + print"<p class='right'>&#10004;</p>";
                                }
                            }
                            ?></td>
                </tr>
                <tr> 
                    <td>Register number:</td><td><input type="text" class="w3-input w3-animate-zoom" name="Register_number" title="Enter the Register number"<?php
                        if (isset($_POST['ok'])) {
                            $Register_number = $_POST['Register_number'];
                            if ($Register_number === "") {
                                echo "placeholder='Missing Register number'";
                                //echo 'Please enter the Register number';
                            } /* else {
                              global $detials, $detial;
                              $detials = "The Register number is $Register_number\n";
                              $detial[3] = 1;
                              } */
                        }
                        ?></input></td><td><?php
                            if (isset($_POST['ok'])) {
                                if ($Register_number === "") {
                                    echo "<p class='wrong'>&#10006;</p>";
                                } else {
                                    global $check;
                                    $check = $check + print "<p class='right'>&#10004;</p>";
                                }
                            }
                            ?></td>
                </tr>
                <tr> 
                    <td>Gender</td><td><input type="radio" name="gen" class="w3-radio" value="Male">&nbsp;Male</td><td>
                        <?php
                        if (isset($_POST['ok'])) {
                            if (isset($_POST['gen'])) {
                                $genmale = $_POST['gen'];
                                if ($genmale == "Male") {
                                    global $check;
                                    $check = $check + print "The gender is Male <p class='right'>&#10004;</p>";
                                    global $genstat;
                                    $genstat = true;
                                } else {
                                    echo "<p class='wrong'>&#10006;</p>";
                                }
                            }
                        }
                        ?></td>
                </tr>
                <tr> 
                    <td></td><td><input type="radio" name="gen" class="w3-radio" value="Female">&nbsp;Female</td>
                    <td>
                        <?php
                        if (isset($_POST['ok'])) {
                            if (isset($_POST['gen'])) {
                                $genfem = $_POST['gen'];
                                if ($genfem == "Female") {
                                    global $check;
                                    $check = $check + print "The gender is Female <p class='right'>&#10004;</p>";
                                    global $genstat, $genval;
                                    $genstat = true;
                                } else {
                                    global $genstat;
                                    if ($genstat == false) {
                                        echo "<p class='wrong'>&#10006;</p>";
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr> 
                    <td>Date Of Birth:</td><td>Date:&nbsp;&nbsp;<select name="Date" class="w3-select w3-accordion w3-animate-zoom">
                            <option value="null">Select date</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value=$i>$i</option>";
                            }
                            ?>
                        </select>
                    </td><td><?php
                        if (isset($_POST['ok'])) {
                            $Date = $_POST['Date'];
                            if ($Date === "null") {
                                echo "<p class='wrong'>&#10006;</p>";
                            } else {
                                global $check;
                                $check = $check + print "<p class='right'>&#10004;</p>";
                            }
                        }
                        ?></td>
                    <td>Month:&nbsp;&nbsp;<select name="Month" class="w3-select w3-accordion w3-animate-zoom">
                            <option value="null">Select  month</option>
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                $time=  date("1996-$i-25");
                                $stm=  strtotime($time);
                                $mon=  date('F',$stm);
                                echo "<option value=$i>$mon</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td><?php
                        if (isset($_POST['ok'])) {
                            $month = $_POST['Month'];
                            if ($month === "null") {
                                echo "<p class='wrong'>&#10006;</p>";
                            } else {
                                global $check;
                                $check = $check + print "<p class='right'>&#10004;</p>";
                            }
                        }
                        ?></td>
                    <td>Year:&nbsp;&nbsp;<select name="Year" class="w3-select w3-accordion w3-animate-zoom">;
                            <option value="null">Select Year</option>
                            <?php
                            $year = (int) date('Y');
                            echo "$i";
                            for ($i = $year; $i >= (int) $year - 40; $i--) {
                                echo "<option value=$i>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td><?php
                        if (isset($_POST['ok'])) {
                            $year = $_POST['Year'];
                            if ($year === "null") {
                                echo "<p class='wrong'>&#10006;</p>";
                            } else {
                                global $check;
                                $check = $check + print "<p class='right'>&#10004;</p>";
                            }
                        }
                        ?></td>
                <tr>
                </tr>
                <tr> 
                    <td>    Blood Group </td><td><select name="BloodGroup" class="w3-select w3-accordion w3-animate-zoom" title="Select Blood Group">;
                            <option value="null">Select Blood group</option>
                            <?php
                            $bloodgroups = array("A+", "A-", "AB+", "AB-", "B+", "B-", "O+", "O-");
                            echo "$i";
                            foreach ($bloodgroups as $i) {
                                echo "<option value=$i>$i</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td><?php
                        if (isset($_POST['ok'])) {
                            $Blood_Group = $_POST['BloodGroup'];
                            if ($Blood_Group === "null") {
                                print "<p class='wrong'>&#10006;</p>";
                            } else {
                                global $check;
                                $check = $check + print "<p class='right'>&#10004;</p>";
                            }
                        }
                        ?>    
                    </td>
                </tr> 
                <tr>                
                    <td>Email ID:</td><td><input type="Email" name="email_id" class="w3-input w3-animate-zoom" title="Enter the E-mail ID" <?php
                        if (isset($_POST['ok'])) {
                            $email_id = $_POST['email_id'];
                            if ($email_id === "") {
                                echo"placeholder='Missing the E-mail ID'";
                            }
                        }
                        ?></td>
                    <td>
                        <?php
                        if (isset($_POST['ok'])) {
                            $email_id = $_POST['email_id'];
                            if ($email_id === "") {
                                echo "<p class='wrong'>&#10006;</p>";
                            } else {
                                global $check;
                                $check = $check + print "<p class='right'>&#10004;</p>";
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>                
                    <td align="center"><input type="submit" value="Submit" name="ok" class="w3-transparent w3-btn w3-padding-bottom w3-float-right w3-btn-floating-large bounce w3-tiny w3-hover-shadow"></td>
                    <td align="center"><input type="reset" id="a" class="w3-transparent w3-btn w3-padding-bottom w3-float-right w3-btn-floating-large w3-tiny bounce w3-hover-shadow"></td>
                </tr>
            </table>
        </div>
    </center>
</form>
<?php
if (isset($_POST['ok'])) {
    global $check;
    if ($check >= 10) {

//connect to db
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "SIM_vishnu";
//variables
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $Contact_number = $_POST['Contact_number'];
        $Register_number = $_POST['Register_number'];
        $gender = $_POST['gen'];
        $Date = $_POST['Date'];
        $month = $_POST['Month'];
        $year = $_POST['Year'];
        $Blood_Group = $_POST['BloodGroup'];
        $email_id = $_POST['email_id'];
        $username = get_current_user();
        $current_date = date("Y-m-d");
//create conn

        $con = new mysqli($servername, $username, $password, $dbname);

        if (!$con) {
            die("Connection FAILED!" . mysqli_connect_error());
        }

        $result = mysql_db_query("INSERT INTO `sim_vishnu`.`student_detials` (`name`, `father_name`, `contact_number`, `register_number`, `gender`, `DOB`, `blood_group`, `email_id`, `creatd_by`, `Date_created`) VALUES ('$name', '$father_name', '$Contact_number', '$Register_number', '$gender', '$year-$month-$Date', '$Blood_Group', '$email_id', '$username', '$current_date');");
        $status = mysql_query($result, $con);
        if (!$status) {
            die("Problem on inserting" . mysqli_connect_error());
        } else {
            echo "<script language='javascript'>alert('Detials inserted')</script>";
        }


//retrive from db
        //      $result=  mysql_db_query('queri');
        //while($row=  mysql_fetch_array($result))
        //{
        //}
    } else {
        echo "<script language='javascript'>alert('Missing Detials')</script>";
    }
}
?>
</body>
</html>