<?php
function paginaInformacoes(){
	foreach ($GLOBALS['linkTitlePairs'] as $link => $title) {
		$imgTitle = str_replace('.php', '-01.webp', $link);
		if (file_exists("assets/imgs-contratadas/" . $imgTitle)){
			echo "<div class='card'><a href='$link'><img src='assets/imgs-contratadas/$imgTitle'><p>$title</p></a></div>\n";
		} else {
			echo "<div class='card'><a href='$link'><img src='assets/imgs-contratadas/nao-disponivel.webp'><p>$title</p></a></div>\n";
		}
	}
};

function menu(){
	foreach ($GLOBALS['linkTitlePairs'] as $link => $title) {
		echo "<li><a href='$link' target='_blank'>$title</a></li>\n";
	}
}

function imgsContratadas(){
	$url =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$imgLink = str_replace('.php', '-01.webp', $url);
	$imgLink2 = str_replace('.php', '-02.webp', $url);

	echo "<div class = 'imgsContratadas'>";

	if (file_exists("assets/imgs-contratadas/$imgLink")) {
		echo "<img onclick='openModal(this)' src='assets/imgs-contratadas/$imgLink'>" ;
	} else{
		echo"";
	}
	
	if (file_exists("assets/imgs-contratadas/$imgLink2")) {
		echo "<img onclick='openModal(this)' src='assets/imgs-contratadas/$imgLink2'>" ;
	} else{
		echo"";
	}

	echo "</div>";
}

function internal($cssFiles){
	foreach ($cssFiles as $filePath) {
		$cssContent = file_get_contents($filePath);
		$cssContent = str_replace(
			array("\n","\r","\t","\n\t",": ",", ","; ",";   ","{ "," {"," { ","   {","} "," }"," } "),                      
			array("", "", "", "", ":", ",", ";", ";","{", "{", "{", "{", "}", "}", "}"), $cssContent);
		$expressaoCSS = '!/\*[^*]*\*+([^/][^*]*\*+)*/!';
		$cssContent = preg_replace($expressaoCSS, '', $cssContent);
		echo $cssContent;
	}
}