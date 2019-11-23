<?php echo $this->Form->create(null, ['enctype'=>'multipart/form-data']); ?>

<?php echo $this->Form->file('media_url'); ?>
<?php echo $this->Form->button('Upload'); 
echo $this->Form->end();

?>