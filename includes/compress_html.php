<?php

function wp_compress_html(){

function wp_compress_html_main ($buffer){
	$initial=strlen($buffer);
	$buffer=explode("<!--wp-compress-html-->", $buffer);
	$count=count ($buffer);

	for ($i = 0; $i <= $count; $i++){
		if (stristr($buffer[$i], '<!--compress-html no compression-->')){
			$buffer[$i]=(str_replace("<!--compress-html no compression-->", " ", $buffer[$i]));
		}else{
			$buffer[$i]=(str_replace("\t", " ", $buffer[$i]));
			$buffer[$i]=(str_replace("\n\n", "\n", $buffer[$i]));
			$buffer[$i]=(str_replace("\n", "", $buffer[$i]));
			$buffer[$i]=(str_replace("\r", "", $buffer[$i]));

			while (stristr($buffer[$i], '  ')){
			$buffer[$i]=(str_replace("  ", " ", $buffer[$i]));
			}
		}
		$buffer_out.=$buffer[$i];
	}
	$final=strlen($buffer_out);
	$savings=($initial-$final)/$initial*100;
	$savings=round($savings, 2);
	$buffer_out.=" ";
	return $buffer_out;
}

ob_start("wp_compress_html_main");
}

echo wp_compress_html();

?>