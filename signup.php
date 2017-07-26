<html>
    <!DOCTYPE html>
    <link rel="stylesheet" href="STYLE1.css">
    <link rel="stylesheet" href="fonts.css">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Comfortaa", cursive, sans-serif}
        input[type=text],
        input[type=email] {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            display: inline-block;
            height: 36px;
            padding: 0 8px;
            margin: 0;
            width: 20%;
            background: #fff;
            border: 1px solid #d9d9d9;
            border-top: 1px solid #c0c0c0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -moz-border-radius: 1px;
            -webkit-border-radius: 1px;
            border-radius: 1px;
            font-size: 15px;
            color: #404040;
        }
    </style>
    <body class="w3-light-grey">
        <div class="w3-card-2 w3-margin signup-box">
            <div class="w3-container w3-padding">
                <h1><span class="w3-tag">Sign up:</span></h1>
            </div>
            <center>
                <form action="reg_det.php" method=post>
                <ul class="w3-ul w3-padding-jumbo form-panel first valid w3-white">
                    <input type="text" name='name' placeholder="Enter your name" required><br><br>
                    <input type="text" name='id' placeholder="Enter your Register number" required><br>
                    <BR>
                    <BR>
                    <select name="date" >
                        <option value="null">
                            Select date
                        </option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value=$i>$i</option>";
                        }
                        ?>
                    </select>
                    &emsp;  
                    <select name="month" >
                        <option value="null">
                            Select Month
                        </option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            $dateValue = "1996-$i-23";
                            $time = strtotime($dateValue);
                            $month = date("F", $time);
                            echo "<option value=$i>$month</option>";
                        }
                        ?>
                    </select>
                    &emsp; 

                    <select name="year" >;
                        <option value="null">Select Year</option>
                        <?php
                        $year = (int) date('Y');
                        for ($i = $year; $i >= (int) $year - 40; $i--) {
                            echo "<option value=$i>$i</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <br>

                    <font size="5px"><b> Gender:</b></font> <select name="gender"  >
                        <option value="null">I am:</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <br><br>

                    <input type="email" name="mail_id" placeholder="Type your mail id" required><br><br>
                    
                    <input type="reset" class="w3-btn w3-padding-large w3-white w3-border w3-hover-border-white w3-bold" name="reset">
                    
                        <input type="submit" class="w3-btn w3-padding-large w3-white w3-border w3-hover-border-white w3-bold" name="submit">
                    
                </ul>
               </form>
            </center>
            
        </div>
    </body>
</html>
