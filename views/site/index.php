<?php

use yii\web\View;
use app\assets\AppAsset;
use app\assets\HighchartAsset;

?>

<?php
  HighchartAsset::register($this);
  
?>
<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div>
   Hello World!
</div>
