<?php
$this->breadcrumbs=array(
	'Experts',
);

$this->menu=array(
	array('label'=>'Create Expert','url'=>array('create')),
	array('label'=>'Manage Expert','url'=>array('admin')),
);
?>

<div class="row">
	<?php $this->widget('booster.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	)); ?>
</div>
