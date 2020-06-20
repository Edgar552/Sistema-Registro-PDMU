<?php
/* @var $this CatZonasController */
/* @var $model CatZonas */

$this->breadcrumbs=array(
	'Cat Zonases'=>array('index'),
	$model->id_zona=>array('view','id'=>$model->id_zona),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatZonas', 'url'=>array('index')),
	array('label'=>'Create CatZonas', 'url'=>array('create')),
	array('label'=>'View CatZonas', 'url'=>array('view', 'id'=>$model->id_zona)),
	array('label'=>'Manage CatZonas', 'url'=>array('admin')),
);
?>

<h1>Update CatZonas <?php echo $model->id_zona; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>