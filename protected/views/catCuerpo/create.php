<?php
/* @var $this CatCuerpoController */
/* @var $model CatCuerpo */

$this->breadcrumbs=array(
	'Cat Cuerpos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatCuerpo', 'url'=>array('index')),
	array('label'=>'Manage CatCuerpo', 'url'=>array('admin')),
);
?>

<h1>Create CatCuerpo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>