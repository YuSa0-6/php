<?php 
  $name = $_POST['text'];

  if($name=='鬼滅の刃'){
    echo '正解です！';
  }else if($name=='千と千尋の神隠し'){
    echo 'おしい！それは二位です！';
  }else if ($name=='タイタニック'){
    echo '残念！それは3位です！';
  }else{
    echo 'ブッブー！それは違います！';
  }
?>