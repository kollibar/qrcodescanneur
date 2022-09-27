<?php

dol_include_once('/qrcodescanneur/class/qrc.class.php');

function qrcodescanneur_getQRcodeGenerateur($ref, $url, $qrc){

  $ret=$qrc->fetch(0,$ref);
  if( $ret == 0 ) {
    $qrc->ref=$ref;
    $qrc->makeNewQRcodeData($ref, $url);
  }
  return $qrc;
}

function qrcodescanneur_makeQRcodeData($ref, $url, $db){
  $object=New QRC($db);
  $object=qrcodescanneur_getQRcodeGenerateur($ref, $url, $object);

  return $object->makeQRcodeData($url);
}

function qrcodescanneur_makeURLfromQRcode($data){
  if( strncmp($data,"sQRC?",5) == 0 ){ //signature OK !
		$data = substr($data,5);

		$pos = strpos($data,"?",0);

		if( $pos === false ){
			$id=$pos;
			$data='';
		} else {
			$id=substr($data,0,$pos);
			$data=substr($data,$pos+1);
	   }
   if( filter_var($id, FILTER_VALIDATE_INT)){
 	   $id=(int)$id;
     return qrcodescanneur_makeURLfromQRcodeData($id,$data);
   }
 }
    return '';
}

function qrcodescanneur_makeURLfromQRcodeData($id,$data){
  if( ! $user->rights->qrcodescanneur->qrcode->scan ) return '';

  $object=New QRC($db);
  $ret = $object->fetch($id, '');
  if ($ret > 0){
    return $object->makeURLfromQRcodeData($data);
  } else return '';
}


 ?>
