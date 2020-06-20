<?php
/* @var $this CatCargoController */
/* @var $model CatCargo */

$this->breadcrumbs=array(
	'Cat Cargos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatCargo', 'url'=>array('index')),
	array('label'=>'Manage CatCargo', 'url'=>array('admin')),
);
?>

<h1>Create CatCargo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>