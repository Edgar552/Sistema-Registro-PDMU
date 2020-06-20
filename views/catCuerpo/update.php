<?php
/* @var $this CatCuerpoController */
/* @var $model CatCuerpo */

$this->breadcrumbs=array(
	'Cat Cuerpos'=>array('index'),
	$model->id_cuerpo=>array('view','id'=>$model->id_cuerpo),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatCuerpo', 'url'=>array('index')),
	array('label'=>'Create CatCuerpo', 'url'=>array('create')),
	array('label'=>'View CatCuerpo', 'url'=>array('view', 'id'=>$model->id_cuerpo)),
	array('label'=>'Manage CatCuerpo', 'url'=>array('admin')),
);
?>

<h1>Update CatCuerpo <?php echo $model->id_cuerpo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>