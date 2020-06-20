<?php
/* @var $this CatZonasController */
/* @var $model CatZonas */

$this->breadcrumbs=array(
	'Cat Zonases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatZonas', 'url'=>array('index')),
	array('label'=>'Manage CatZonas', 'url'=>array('admin')),
);
?>

<h1>Create CatZonas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>