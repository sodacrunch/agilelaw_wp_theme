 <?php

     try {
        include_once "JotForm.php";
    	$jf = new JotForm("0e62a139be168491932ef9736de3b779");

    	$questions = $jf->getFormQuestions("53117121026137");
		foreach($questions as $question) {
    		print $question['qid'] . '  -  ' . $question['name'] . '<br/>';
		}

		$name = $_GET["name"];
		$firm_name = $_GET["firm"];
		$email = $_GET["email"];
		$phone = $_GET["phone"];
		$comments = $_GET["comments"];
		$interests = $_GET["interests"];

		echo "<hr>";

		echo "name: $name";
		echo "<br>";
		echo "firm name: $firm_name";
		echo "<br>";
		echo "email: $email";
		echo "<br>";
		echo "phone: $phone";
		echo "<br>";
		echo "comments: $comments";
		echo "<br>";
		echo "interests: $interests";

       $jf->createFormSubmission("53117121026137", array(5 => $name, 7 => $firm_name, 9 => $email, 8 => $phone, 10 => $comments, 11 => $interests));


    } catch (Exception $e) {
        var_dump($e->getMessage());
    }

?>

