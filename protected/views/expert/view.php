<?php
$this->breadcrumbs=array(
	'Experts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Expert','url'=>array('index')),
	array('label'=>'Create Expert','url'=>array('create')),
	array('label'=>'Update Expert','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Expert','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expert','url'=>array('admin')),
);
?>

<div class="row">
	<div class="col-md-5">
		<h1><?php echo $model->name; ?></h1>

		<img src="/upload/<?php echo $model->avatar?>" width=300 height=175  class="img-circle">

		<div class="row">
			<div class="col-md-6">Рейтинг</div>
			<div class="col-md-6"><?php echo $model->rating; ?></div>
		</div>

		<div class="row">
			<div class="col-md-3">Интересы</div>
			<div class="col-md-6"><?php echo $model->skills; ?></div>
		</div>
	</div>
</div>