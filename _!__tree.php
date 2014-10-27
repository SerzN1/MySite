<?
function tree2($folder, $level) {
	$ignore_dirs = array(".", "..", "images", "css", "img", "pic", "test", "swf", "i", "docs", "fancy", "js", "files", "tests", "10", "5", "templates", "mypro", "video", "slider", "font", "psd", "pictures", "books");
	$ignore_files = array("favicon.ico", "favicon.png", "index.html", "index.htm", "index.php", "a17da67cf1f8.html", "mailru-domainmNcTYm1VFIDwEhQG.html", "favicon.ico", "favicon.png", ".htaccess", "telefon.php", "void.gif", "test.html", "mailru-verification157e6d0c3c92ea77.html");
	$projects = array("CjClub", "Micrusha", "WebPayment", "KungFu", "MentalPortal", "Bookflow", "Arne", "HealthCompas", "EsliPusto", "Muravei", "JCI", "LTM", "MDM", "TechnoSib", "Walkers", "WhiteHall", "YaScool", "RnaFoundation", "YourTibet", "CopyRus", "KassaRambler", "Consul", "MalovAndrey");
	
    if($level == 0) return;

    $folder_ = str_replace(dirname(__FILE__), '', $folder);
    $files = scandir($folder);
    $lvl = $level-1;

    if(!count($files)) return;
	
	echo '<ul>';

    foreach($files as $file) {
        if($file == '.' || $file == '..') continue;
        $count = substr_count($file, '_');
        if($count) continue;
		//echo substr_count($file, "_!__");
		if ( is_dir($folder.'/'.$file) ) {
			if(!in_array($file, $ignore_dirs)) {
				if (substr_count($file, "!") == 0) {
					echo '<li><a ';
					if(in_array($file, $projects)) echo 'class="portfolio_important" ';
					echo 'href="'.$folder_.'/'.$file.'">'.$file.'</a>';
					tree2($folder.'/'.$file, $lvl);
					echo '</li> ';
				}
			}
		} elseif ( is_file($folder.'/'.$file) ) {
			if(!in_array($file, $ignore_files)) {
				if (substr_count($file, "apple") == 0) {
					echo '<li><a href="'.$folder_.'/'.$file.'">'.$file.'</a></li>';
				}
			}
		}  
		clearstatcache();		
    }

    echo '</ul>';
}

tree2(dirname(__FILE__), 3);
?>