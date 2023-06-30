<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$date_time=date('YmdHis');
$file_name="JSON_".$date_time.".json";
$myfile = fopen("json/".$file_name, "w") or die("Unable to open file!");
fwrite($myfile, $_POST['json_text']);
$status=fclose($myfile);
if($status){
    echo json_encode(array('status'=>true,'statuscode'=>200,'message'=>'success','url'=>"json/$file_name"));
}else{
    echo json_encode(array('status'=>false,'statuscode'=>400,'message'=>'success','url'=>''));
}


?>