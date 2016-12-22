<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
			// variables for input data
			$name = $_POST['name'];
			$nName = $_POST['nName'];
		    $email = $_POST['email'];
			$website = $_POST['website'];
			$cNum = $_POST['cNum'];
			$gender = $_POST['gender'];
			$comment = $_POST['comment'];
			// variables for input data
			
			// sql query for inserting data into database			 
			$sql_query = "INSERT INTO krotokov(name,nName,email,website,cNum,gender,comment) VALUES ('$name','$nName','$email','$website','$cNum','$gender','$comment')";
			echo $sql_query;
			mysqli_query($con,$sql_query);
			// sql query for inserting data into database
		}
?>

<html>
<head>
<style>
table, th, td {
    border: 1px solid white;
    color: seagreen;
    font-size: 25;
    

}
body {
    background-color: black;
}

h1 {
    color: steelblue;
    text-align: center;
    font-size: 40;
}

.error {color: #FF0000;}

</style>
</head>
<title> Pururut </title>
<body>

<h1>Maverick Jave C. Bolo</h1>
<center><img src = "wsaLOI__.jpg" style="width:400px;height:400px"></center>
<table>
<tr>
    <td>Nickname: </td>
    <td>Mav</td>
  </tr>
  
<tr>
    <td>Hobbies: </td>
    <td>Skateboarding, Playing Online Games, Cycling, Training Mixed Martial Arts</td>
  </tr>
  <tr>
    <td>Interests: </td>
    <td>Bikes, Computers, Skateboards, Mixed Martial Arts</td>
  </tr>
  <tr>
    <td>Favorite Websites: </td>
    <td>None</td>

</table>

<h1>Trivias about me</h1>

<font color="SeaGreen" size="5"><p id="demo1">1. Where does your name come from?</p>

<button type="button" onclick="document.getElementById('demo1').innerHTML = 'From the movie Top Gun.'">Click Me!</button>


<font color="SeaGreen" size="5"><p id="demo2">2. What is your main role in League of Legends?</p>

<button type="button" onclick="document.getElementById('demo2').innerHTML = 'Mid or AD Carry'">Click Me!</button>


<font color="SeaGreen" size="5"><p id="demo3">3. What is your main martial art? </p></font>

<button type="button" onclick="document.getElementById('demo3').innerHTML = 'Sayaw ng Kamatayan (Dance of Death)'">Click Me!</button>

    <?php
    // define variables and set to empty values
    $nameErr = $nNameErr =$emailErr = $genderErr = $cNumErr = $websiteErr = "";
    $name = $nName = $email = $gender = $cNum = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

		if (empty($_POST["nName"])) {
				$nNameErr = "Nickname is required. ";
			} else {
				$nName = test_input($_POST["nName"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$nName)) {
				$nNameErr = "Only letters are allowed."; 
				}
			}
		
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }
		
		if (empty($_POST["cNum"])) {
				$cNumErr = "Number is required.";
			} else {
				$cNum = test_input($_POST["cNum"]);
				if (!filter_var($cNum, FILTER_VALIDATE_INT) === FALSE) {
				$cNumErr = "Only numbers are allowed."; 
				}
			}

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Insert your info:</h2>
    <p><span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
		Nickname: <input type="text" name="nName" value="<?php echo $nName;?>">
        <span class="error">* <?php echo $nNameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
		Cellphone No.: <input type="integer" name="cNum" value="<?php echo $cNum;?>">
        <span class="error">* <?php echo $cNumErr;?></span>
        <br><br>       
		Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
	echo $nName;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
	echo $cNum;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>





</body>
</html>

