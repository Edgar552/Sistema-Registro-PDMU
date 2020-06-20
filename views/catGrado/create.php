<?php
/* @var $this CatGradoController */
/* @var $model CatGrado */

$this->breadcrumbs=array(
	'Cat Grados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatGrado', 'url'=>array('index')),
	array('label'=>'Manage CatGrado', 'url'=>array('admin')),
);
?>

<h1>Create CatGrado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>