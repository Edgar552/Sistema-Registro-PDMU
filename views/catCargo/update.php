<?php
/* @var $this CatCargoController */
/* @var $model CatCargo */

$this->breadcrumbs=array(
	'Cat Cargos'=>array('index'),
	$model->id_cargo=>array('view','id'=>$model->id_cargo),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatCargo', 'url'=>array('index')),
	array('label'=>'Create CatCargo', 'url'=>array('create')),
	array('label'=>'View CatCargo', 'url'=>array('view', 'id'=>$model->id_cargo)),
	array('label'=>'Manage CatCargo', 'url'=>array('admin')),
);
?>

<h1>Update CatCargo <?php echo $model->id_cargo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>