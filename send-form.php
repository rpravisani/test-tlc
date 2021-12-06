<?php
if(!isset($_POST)) die("no direct call");


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'XMLHttpRequest'){    
  die("Not an ajax call!");    
}

$output = array();
$ouput['result'] = false;

if(empty($_POST['data'])){
	$output['message'] = "No data passed";
	echo json_encode($output);
	die();
}

$data = $errors = array();
foreach($_POST['data'] as $item){
	if( empty($item['value']) and !in_array($item['name'], array("importo_altro", "tipo_contratto", "data_assunzione") ) ) $errors[] = $item['name'];
	if( $item['name'] == "importo_altro" ){
		if( empty($item['value']) ) continue;
		$data['importo'] = trim($item['value']);
	}else{
		$data[$item['name']] = trim($item['value']);
	}
}

if(!empty($errors)){
	$output['message'] = "errors";
	$output['errors'] = $errors;
	echo json_encode($output);
	die();
}

	
$table = "<table>\n";
foreach($data as $name => $value){
	
	$name = ucwords(str_replace("_", " ", $name) );
	$table .= "<tr><td>".$name."</td><td>".$value."</td></tr>\n";
}
$table .= "</table>\n";

$subject = "Nuova richiesta preventivo prestitifaidate.it";

$body = ' 
    <html> 
    <head> 
        <title>'.$subject.'</title> 
    </head> 
    <body> 
        <p>Buongiorno,</p> 
        <p>Vi è arrivato una nuova richiesta preventivo da prestitifaidate.it<br>Di seguito i dati inviati.</p> 
		'.$table.'
		
    </body> 
    </html>'; 


$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= "From: rpravisani@test.com" . "\r\n";

$to = "test@mailhog.local";
if(!mail($to,$subject,$body,$headers)){
	$output['result'] = false;
	$output['dbg'] = "mail failed!";
}else{
	$output['result'] = true;
}

echo json_encode($output);

?>