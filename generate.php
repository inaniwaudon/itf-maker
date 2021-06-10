<?php
$verbMap = ["DIE", "IMAGINE", "OVERSLEEP", "OVERWORK", "FORGET", "SUICIDE", "DROP", "MISS", "OBTAIN", "SUBSCRIBE", "FAIL", "TALK", "INCREASE", "PLAY", "SEX", "STOP", "CHANGE", "EDIT", "KILL", "ARISE", "OVERCOME", "MISTAKE", "MISUNDERSTAND", "OVERHEAR", "OVERLOOK", "UNDERGO", "SWEEP", "BROADCAST", "REBUIT", "QUIT", "OVERTAKE", "TEAR", "SEEK", "BITE", "BIND", "RING", "DREAM", "CONITAIN", "BELONG", "PUT", "HAVE", "GO", "GET", "GAIN", "LOOK"];
$nounMap = ["FUTURE", "PAST", "TWINS", "RAMEN", "TSUKUBA", "DREAM", "TWITTER", "PROFECCER", "TRAIN", "NGT", "SWIFT", "PYTHON", "KLIS", "TX", "KDB", "CODE", "ZOZO", "TUITION", "GAKUHI", "CREDIT", "MAST", "DREAM", "COINS", "MEDS", "MED", "HUDS", "BIOL", "SCS", "MONEY", "CHEM", "COENS", "EARTH", "PHYS", "ESYS", "CCC", "MATH", "POPS"];

foreach ($verbMap as $verb) {
	foreach ($nounMap as $noun) {
		$title = $verb . " THE " . $noun;

		$html = "<!doctype html>
			<html>
			<head>
				<title>IMAGINE THE FUTURE.maker - " . $title . "</title>
				<link rel=\"stylesheet\" href=\"https://use.typekit.net/suf2wdc.css\">
				<link rel=\"stylesheet\" href=\"../style.css\">
				<meta charset=\"utf-8\"/>
				<meta property=\"og:site_name\" content=\"IMAGINE THE FUTURE.maker - " . $title . "\" />
				<meta property=\"og:title\" content=\"IMAGINE THE FUTURE.maker - " . $title . "\" />
				<meta property=\"og:type\" content=\"website\" />
				<meta property=\"og:url\" content=\"https://inaniwaudon.github.io/itf-maker/\" />
				<meta property=\"og:image\" content=\"https://inaniwaudon.github.io/itf-maker/img/" . $verb . "-" . $noun . ".png\" />
				<meta property=\"og:description\" content=\"君もIMAGINE THE FUTURE.しよう！！\"/>
				<meta property=\"og:locale\" content=\"ja_JP\" />
				<meta name=\"twitter:card\" content=\"summary_large_image\">
				<meta name=\"twitter:site\" content=\"@kyoto_mast21\">
				<meta name=\"twitter:title\" content=\"IMAGINE THE FUTURE.maker - " . $title . "\">
				<meta name=\"twitter:description\" content=\"君もIMAGINE THE FUTURE.しよう！！\">
				<meta name=\"twitter:image\" content=\"https://inaniwaudon.github.io/itf-maker/img/" . $verb . "-" . $noun . ".png\">
			</head>

			<body>
			<main>
				<h2>IMAGINE THE FUTURE. maker</h2>
				<img src=\"../img/" . $verb . "-" . $noun . ".png\" /><br>
				<a href=\"../index2.html\" id=\"reload\">もう一度ひく</a>
				<a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-hashtags=\"ITF_maker\" data-show-count=\"false\">Tweet</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
			</main>
			</body>
			</html>";

		$fp = fopen("pages/" . $verb . "-" . $noun . ".html", "w");
		fwrite($fp, $html);
		fclose($fp);
	}
}