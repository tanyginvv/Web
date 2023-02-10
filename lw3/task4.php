<?php

function getGetParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

$firstName = getGetParameter('first_name');
$lastName = getGetParameter('last_name');
$email = getGetParameter('email');
$age = getGetParameter('age');

$file = "data/" . $email . ".txt";

if (!(empty(strlen($email))))
{
	if (file_exists($file))
	{
		$tempArray = file($file);
		if (!(empty($firstName)))
		{
			$tempArray[0] = "First Name: $firstName\n";
		}

		if (!(empty($lastName)))
		{
			$tempArray[1] = "Last Name: $lastName\n";
		}

		if (!(empty($age)))
		{
			$tempArray[3] = "Age: $age";
		}

		file_put_contents($file, $tempArray);
	} 
        else
	{
		$userTxt = fopen($file, "w");
		fwrite($userTxt, "First Name: $firstName\n");
		fwrite($userTxt, "Last Name:  $lastName\n");
		fwrite($userTxt, "Email: $email\n");
		fwrite($userTxt, "Age: $age");
		fclose($userTxt);
	}
}
else
	echo 'Нужно обязательно ввести email!';
?>