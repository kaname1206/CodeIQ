<?php

//一行ずつ標準入力を取得
while($line=trim(fgets(STDIN))){
  //数値かつ2以上だったら
  if(is_numeric($line) && $line > 2){
    //入力値より小さい素数
    $num = $line - 1;
    //平方根
    $sqrt = floor(sqrt($num));
    //配列作成
    $lists = array_fill(2, $num-1, true);
    //倍数を取り除く
    for ($i=2; $i<=$sqrt; $i++) {
      if (isset($lists[$i])) {
	for ($j=$i*2; $j<=$num; $j+=$i) {
	  unset($lists[$j]);
	}
      }
    }
    echo count($lists)."\n";
  }else{
    echo "0\n";
  }
}

?>
