<?php

  //一行ずつ標準入力を取得
  while($line=trim(fgets(STDIN)))
  {
    //数値だったら
    if(is_numeric($line)){
      $prm_cnt = 0; //素数カウンタ
      for($i=2;$i<$line;$i++){
	$prm_flag = true; //素数フラグ
	for($j=2;$j<$i;$j++){
	  if($i % $j == 0){
	    $prm_flag = false;
	    break;
	  }
	}
	//素数だったら素数カウンタに加算
	if($prm_flag)
	  $prm_cnt++;
      }
      echo $prm_cnt."\n";
    }
  }

?>
