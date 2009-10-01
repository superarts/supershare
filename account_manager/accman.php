<?php

$codefile = '';
$codename = 'N/A';
$code_idx = 0;

$codefile = 'agunlite.txt';
$codename = 'aGun Lite';
$code_idx = 1;

$codefile = 'winbugs.txt';
$codename = 'Winbugs';
$code_idx = 1;

$codefile = 'agun.txt';
$codename = 'iGun';
$code_idx = 2;

if ($codefile != '') $code = file($codefile);

include('review.php');
include('login.php');

function echo_random($r)
{
	$index = count($r);
	$index = rand(0, $index - 1);

	echo $r[$index] . "\n";
}

echo "Verifying data integracy...\n";
echo "Accnt.:\t" . count($account) . "\n";
echo "Passwd:\t" . count($password) . "\n";
echo "Answer:\t" . count($answer) . "\n";
echo "BirthD:\t" . count($date) . "\n";
echo "\n";

$fp = fopen('index.dat', 'rb');
$index = fread($fp, 1);
$index = ord($index{0});
fclose($fp);

$index++;
if ($index > 50)
	$index = 1;
$index = chr($index);

$fp = fopen('index.dat', 'wb');
fwrite($fp, $index, 1);
fclose($fp);
$index = ord($index{0});

echo "Actual index:\t$index\n";
$index += ($code_idx - 1) * 50;

switch(strtolower($argv[1]))
{
case 'h':
case 'help':
	echo "Usage: php accman.php COMMAND\n";
	echo "Available command: (H)help, (R)eset, 1-50\n";
	break;
case 'r':
case 'reset':
	$index = chr(0);
	$fp = fopen('index.dat', 'wb');
	fwrite($fp, $index, 1);
	fclose($fp);
	echo "Index has been reset to 1.\n";

	break;
default:
	$arg = $argv[1] + 0;
	if ($arg > 0)
		$index = $arg;

	if (isset($account[$index]))
		$the_account = $account[$index];
	else
		$the_account = 'NO ACCOUNT';

	if (isset($password[$index]))
		$the_password = $password[$index];
	else
		$the_password = $password['default'];

	if (isset($answer[$index]))
		$the_answer = $answer[$index];
	else
		$the_answer = $answer['default'];

	if (isset($date[$index]))
		$the_date = $date[$index];
	else
		$the_date = $date['default'];

	if (isset($code[$index]))
		$the_code = $code[$index];
	else
		$the_code = 'NO CODE';

	echo "Current Index:\t$index\n\n";

	echo "Account: \t$the_account\n";
	echo "Password:\t$the_password\n";
	//echo "Answer:  \tthe_$answer\n";
	//echo "Birthday:\tthe_$date\n";
	echo "\n";
	$index--;
	echo "Keyword: \t$codename\n";
	echo "Pr. Code:\t$the_code\n";
	echo_random($review_title);
	echo_random($review_body);
}

?>
