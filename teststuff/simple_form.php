<!DOCTYPE HTML>
<html>
	<body>
		<?php
			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			$name = $email = $website = $comments = $gender = "";

			// if($_SERVER["REQUEST_METHOD"] == "POST")
			if(isset($_POST['submit']))
			{
				// if (empty($_POST["name"]))
				if(strlen($_POST['name']) == 0)
				{
					$nameErr = "Name is required";
				}
				else
				{
					//sanitize the output
					$name = test_input($_POST["name"]);
					if(!preg_match("/^[a-zA-Z ]*$/",$name))
					{
						$nameErr = "Only letters and white space allowed";
						$name="";
					}
				}

				// if (empty($_POST["email"]))
				if($_POST['email'] == "")
				{
					$emailErr = "Email is required";
				}
				else
				{
					$email = test_input($_POST["email"]);
					if(!filter_var($email, FILTER_VALIDATE_EMAIL))
					{
						$emailErr = "Invalid email format";
						$email = "";
					}
				}

				// if (empty($_POST["website"]))
				if($_POST['website'] == "")
				{
					$website = "";
				}
				else
				{
					$website = test_input($_POST["website"]);
					if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
					{
						$websiteErr = "Invalid URL";
						$website = "";
					}
				}

				if (empty($_POST["comments"]))
				{
					$comments = "";
				}
				else
				{
					$comments = test_input($_POST["comments"]);
				}

				if (empty($_POST["gender"]))
				{
					$genderErr = "Gender is required";
				}
				else
				{
					$gender = test_input($_POST["gender"]);
				}
			}

			function test_input($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);

				return $data;
			}
		?>
			<!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> -->
		<form method="post" action="simple_form.php">
			Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			Email: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Website: <input type="text" name="website" value="<?php echo $website;?>">
			<span class="error">* <?php echo $websiteErr;?></span>
			<br><br>
			Comments: <textarea name="comments" rows="5" cols="40"><?php echo $comments?></textarea>
			<br><br>

			Gender:
			<input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>

			<input type="submit" name="submit" value="Submit">
		</form>

		<?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $website;
			echo "<br>";
			echo $comments;
			echo "<br>";
			echo $gender;
		?>
	</body>
</html>
