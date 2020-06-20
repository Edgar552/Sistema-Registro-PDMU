<?php
/* @var $this CatGradoController */
/* @var $model CatGrado */

$this->breadcrumbs=array(
	'Cat Grados'=>array('index'),
	$model->id_grado=>array('view','id'=>$model->id_grado),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatGrado', 'url'=>array('index')),
	array('label'=>'Create CatGrado', 'url'=>array('create')),
	array('label'=>'View CatGrado', 'url'=>array('view', 'id'=>$model->id_grado)),
	array('label'=>'Manage CatGrado', 'url'=>array('admin')),
);
?>

<h1>Update CatGrado <?php echo $model->id_grado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>