<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->uid=>array('view','id'=>$model->uid),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->uid)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Update User <?php print $model->uid; ?></h1>

<?php print $this->renderPartial('_form', array('model'=>$model)); ?>