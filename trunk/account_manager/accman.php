<?php

$codefile = '';
$codename = 'N/A';
$codefile = 'aGun Lite- The Real Motion Sensor Game_1.3_20090921114244.txt';
$codename = 'aGun Lite';
$codefile = 'iGun- The Real Motion Sensor Game_1.2_20090922021529.txt';
$codename = 'iGun';
$codefile = '1-on-1 Duel- Winbugs!_v1.0_20090928233227.txt';
$codename = 'Winbugs';

if ($codefile != '') $code = file($codefile);

$review_title = array(
	'Great!',
	'Excellent!',
	'Most Useful App Ever',
	'5 STARS!',
	'Genius Idea',
	'This one is BRILLIANT!',
	'Awesome app, I love it!',
	"That's right.",
	"That's the way.",
	"Nice going.",
	"That's coming along nicely.",
	"That's great.",
	"Great.",
	"Fantastic.",
	"Terrific.",
	"Good work.",
	"That's better.",
	"Excellent.",
	"Good job.",
	"Awesome.",
	"Good going.",
	"Keep it up.",
	"That's really nice.",
	"Wow.",
	"Keep up the good work.",
	"Much better.",
	"Good for you.",
	"That's very much better.",
	"Good thinking.",
	"Exactly right.",
	"Super.",
	"Nice going.",
	"I've never seen anyone do it better.",
	"Way to go.",
	"Not bad.",
	"Superb.",
	"Wonderful.",
	"That's the way to do it.",
	"Keep on trying.",
	"That's it.",
	"That's good.",
	"That's the way to do it.",
	"That's better than ever.",
	"That's quite an improvement.",
	"That kind of work makes me happy.",
	"Marvelous.",
	"Perfect.",
	"That's not bad at all.",
	"Fine.",
	"That's it.",
	"Well done.",
	"Tremendous.",
	"Outstanding.",
	"I like that.",
	"Now that's what I call a fine job.",
	"Congratulations.",
	"That was first class work.",
	"Right on.",
	"Sensational.",
	"That's the best ever.",
	"Good remembering.",
	"That's live.",
	"Congratulations.",
);

$review_body = array(
	'This app is very useful. I like it very much!',
	'It worths every cent I\'ve spend. Really a nice one!',
	'This app helps me a lot. I would give it 6 stars if I could.',
	'Useful, helpful, and graceful!',
	'Interesting and helpful. This app can do exactly what I want, which is super cool!',
	'Don’t defile your beautifully designed iPhone or iPod touch with substandard, poorly implemented, ugly software :)',
	'It looks like a quality time-waster. Good job',
	'Great idea! It has tons of potential to be a fun way to snag some balls or whatever you call it.',
	'I do not review many apps, but for this one, the name is funny enough and the app is good enough that it’s worth a review.',
	'I’d like to tell you that there’s more than what it is described, but that would make me a big fat liar! Anyway it just does whatever it said and that is good enough for me already. Grab it while you can!',
	"You’re on the right track now!",
	"You’ve got it made. SUPER!",
	"That’s right!",
	"That’s good. You are very good at that.",
	"That’s coming along nicely. GOOD WORK!",
	"I’m happy to see the app like this.",
	"Exactly right.",
	"You’ve just about got it.",
	"You’re doing a good job.",
	"THAT’S IT!",
	"That’s quite an improvement.",
	"GREAT!",
	"Congratulations!",
	"Not bad.",
	"Keep working on it.",
	"Now you have it!",
	"Good for you!",
	"Couldn’t have done it better myself.",
	"Aren’t you proud of yourself? One more time and you’ll have it.",
	"You really make my job fun.",
	"That’s the right way to do it.",
	"You’re getting better every day.",
	"You did it that time!",
	"That’s not half bad.",
	"Nice going.",
	"You haven’t missed a thing!",
	"WOW!",
	"That’s the way!",
	"Keep up the good work.",
	"TERRIFIC!",
	"Nothing can stop you now.",
	"That’s the way to do it.",
	"SENSATIONAL!",
	"That’s better.",
	"That was first class work.",
	"EXCELLENT!",
	"That’s the best ever.",
	"You’ve just about mastered it.",
	"PERFECT!",
	"That’s better than ever.",
	"Much better!",
	"WONDERFUL!",
	"You must have been practicing.",
	"You did that very well.",
	"FINE!",
	"Nice going.",
	"You’re really going to town.",
	"OUTSTANDING!",
	"FANTASTIC!",
	"TREMENDOUS!",
	"That’s how to handle that.",
	"Now that’s what I call a fine job.",
	"That’s great.",
	"Right on!",
	"ou’re really improving.",
	"You’re doing beautifully!",
	"SUPERB!",
	"Good remembering.",
	"You’ve got that down pat.",
	"Keep it up!",
	"Congratulations.",
	"You got it right! Well look at you go.",
	"That’s it.",
	"I like knowing this app. MARVELOUS!",
	"I like that.",
	"Way to go!",
	"Now you have the hang of it. You’re doing fine!",
	"Good thinking.",
	"You are really learning a lot.",
	"Good going. I’ve never seen app do it better.",
	"Good for you!",
	"That’s a good kick! I think you’ve got it now.",
	"Good job, man!",
	"That’s really nice.",
	"I think you’re doing the right thing.",
);

function echo_random($r)
{
	$index = count($r);
	$index = rand(0, $index - 1);

	echo $r[$index] . "\n";
}

$account = array(
	'thunderbird0813@gmail.com',
	'newton1188@yahoo.com',
	'blazingrollerone@yahoo.com',
	'countryardguy@yahoo.com',
	'dashisawesome1@yahoo.com',
	'always8833s@yahoo.com',
	'slavevslord@gmail.com',
	'coolstuffisland@gmail.com',
	'notonawesomewatch@hotmail.com',
	'neversaymynick@aol.com',

	'sliceistheworstway@aol.com',
	'wouldyounotlove@aol.com',
	'musicismyfates@yahoo.com',
	'bushisagoodgay@gmail.com',
	'usemydrinkok@aol.com',
	'somesault8892@yahoo.com',
	'mashallmases@gmail.com',
	'neverbesogoose@yahoo.com',
	'TracyJWilliams@text2re.com',
	'RobertMMausbach@text2re.com',

	'VirginiaJGibson@text2re.com',
	'DaleMSabatini@text2re.com',
	'GloriaEWilliams@text2re.com',
	'JulieJHernandez@text2re.com',
	'SusanGBaradi@text2re.com',
	'SeanMFarinacci@text2re.com',
	'DawnDBrossmann@text2re.com',
	'WilliamCPultorak@text2re.com',
	'KentonJOspina@text2re.com',
	'NoraJOrtiz@text2re.com',

	'JessieJRussell@text2re.com',
	'RubyRHeilmann@text2re.com',
	'DariaCHagler@text2re.com',
	'EdmundAIshii@text2re.com',
	'MaryGWilliams@text2re.com',
	'TerrenceCWorkman@text2re.com',
	'JohnCBoyle@text2re.com',
	'EdwardJRhodes@text2re.com',
	'SaundraJMartinez@text2re.com',
	'FayePDecker@text2re.com',

	'ElsieDKennedy@text2re.com',
	'AndreaBDennis@text2re.com',
	'CherylJOrtiz@text2re.com',
	'DeniseATheberge@text2re.com',
	'JohnAGrigsby@text2re.com',
	'JohnBLennox@text2re.com',
	'JosephWCruz@text2re.com',
	'AprilDTardio@text2re.com',
	'RalphLKoch@text2re.com',
	'NicholasESmith@text2re.com',

	'LisaRTurner@text2re.com',
	'DebraELamison@text2re.com',
	'GaryCClaunch@text2re.com',
	'LaurenRRivas@text2re.com',
	'NancyRGreen@text2re.com',
);

$password = array(
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	';lkjfdsa',
	'asdftyjkl;',

	'asdftyjkl;',
	'asdftyjkl;',
	'asdftyjkl;',
	'asdftyjkl;',
	'asdftyjkl;',
	'asdftyjkl;',
	'asdftyjkl;',
	'asdftyjkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',

	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',

	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',

	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',

	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
	'asdf1234jkl;',
);

$answer = array(
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',

	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'hi',
	'me',
	'me',

	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',

	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',

	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',
	'me',

	'me',
	'me',
	'me',
	'me',
	'me',
);

$date = array(
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',

	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Jan/1',
	'Dec/1',
	'Dec/1',

	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',

	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',

	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',

	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
	'Dec/1',
);

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

	echo "Current Index: $index\n\n";

	echo "Account: \t$account[$index]\n";
	echo "Password:\t$password[$index]\n";
	//echo "Answer:  \t$answer[$index]\n";
	//echo "Birthday:\t$date[$index]\n";
	echo "\n";
	$index--;
	echo "Keyword: \t$codename\n";
	echo "Pr. Code:\t$code[$index]\n";
	echo_random($review_title);
	echo_random($review_body);
}

?>
