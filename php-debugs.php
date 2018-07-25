<?php

# Debug e continua
function dc($var){
	$dbt = debug_backtrace();
	$caller = array_shift($dbt);
	$lines = file($caller['file']);
	$line = $lines[$caller['line']-1]; 
	preg_match_all("/dc\([^\]]*\)/", $line, $matches);
	$var_name = str_replace(")","",str_replace("dc(","",@$matches[0][0]));
	echo "<pre>"; echo "(" . ($var_name? gettype($var)." <b>" . $var_name . "</b> " : "" )  . "em \"" . $caller['file'] . "\", linha: " . $caller['line'] . "):\n";
	print_r($var);  echo "</pre>"; echo "<hr>";

}

# Debug detalhado e continua
function ddc($var){
	$dbt = debug_backtrace();
	$caller = array_shift($dbt);
	$lines = file($caller['file']);
	$line = $lines[$caller['line']-1]; 
	preg_match_all("/dc\([^\]]*\)/", $line, $matches);
	$var_name = str_replace(")","",str_replace("dc(","",@$matches[0][0]));
	echo "<pre>"; echo "(" . ($var_name? gettype($var)." <b>" . $var_name . "</b> " : "" )  . "em \"" . $caller['file'] . "\", linha: " . $caller['line'] . "):\n";
	var_dump($var);  echo "</pre>"; echo "<hr>";

}

# Debug e die()
function dd($var){
	$dbt = debug_backtrace();
	$caller = array_shift($dbt);
	$lines = file($caller['file']);
	$line = $lines[$caller['line']-1]; 
	preg_match_all("/dd\([^\]]*\)/", $line, $matches);
	$var_name = str_replace(")","",str_replace("dd(","",@$matches[0][0]));
	echo "<pre>"; echo "(" . ($var_name? gettype($var)." <b>" . $var_name . "</b> " : "" )  . "em \"" . $caller['file'] . "\", linha: " . $caller['line'] . "):\n";
	print_r($var);  echo "</pre>"; echo "<hr>";
	die();
}

# Debug detalhado e die()
function ddd($var){
	$dbt = debug_backtrace();
	$caller = array_shift($dbt);
	$lines = file($caller['file']);
	$line = $lines[$caller['line']-1]; 
	preg_match_all("/dd\([^\]]*\)/", $line, $matches);
	$var_name = str_replace(")","",str_replace("dd(","",@$matches[0][0]));
	echo "<pre>"; echo "(" . ($var_name? gettype($var)." <b>" . $var_name . "</b> " : "" )  . "em \"" . $caller['file'] . "\", linha: " . $caller['line'] . "):\n";
	var_dump($var);  echo "</pre>"; echo "<hr>";
	die();
}
?>