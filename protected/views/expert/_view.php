<div class="expert-view col-md-3">
	<div class="avatar">
		<a href="/index.php?r=expert/view&id=<?php echo $data->id?>">
			<?php if($data->avatar){?>
				<img src="/upload/<?php echo $data->avatar?>" height=175  class="img-circle">
			<?php } ?>
		</a>
	</div>

	<div class="name"><?php echo CHtml::encode($data->name); ?></div>

	<br />
	<br />

	<?php echo CHtml::encode($data->description); ?>
</div>