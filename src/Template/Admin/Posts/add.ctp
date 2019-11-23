<div class="main">
    
    <div class="main-inner">

        <div class="container">
    
          <div class="row">
            
            <div class="span12">            
                
                <div class="widget ">
                    
                    <div class="widget-header">
                        <i class="icon-list-alt"></i>
                        <h3>Create new post</h3>
                    </div> <!-- /widget-header -->
                    
                    <div class="widget-content">
                        
                        
                        
                        <div class="tabbable">
                           <?=   $this->Form->create($post,['type' => 'file', 'class'=>'form-horizontal']) ?> 
                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#postdetails" data-toggle="tab">Post Details</a>
                              </li>
                              <li><a href="#otherdetails" data-toggle="tab">Image 1</a></li>
                              <li><a href="#otherdetails2" data-toggle="tab">Image 2</a></li>
                              <li><a href="#otherdetails3" data-toggle="tab">Image 3</a></li>
                              <li><a href="#otherdetails4" data-toggle="tab">Image 4</a></li>
                              <li><a href="#otherdetails5" data-toggle="tab">Image 5</a></li>

                            </ul>
                        
                        <br>
                        
                            <div class="tab-content">
                                <div class="tab-pane active" id="postdetails">
                                    
                                    <fieldset>
                                                    
                                        <div class="control-group">
                                            <label class="control-label" for="name">Name</label>
                                            <div class="controls">
                                                <?php echo $this->Form->control('name', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                
                                                
                                                <div class="control-group">
                                                    <label class="control-label" for="content">Content</label>
                                                    <div class="controls">
                                                        <?php echo $this->Form->control('content', ['class'=>'span6', 'label'=>false, 'id'=>'content', 'style'=>'height:100%']); ?>
                                                        </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                
                                                <div class="control-group">
                                                            <label class="control-label" for="category">Category</label>
                                                            <div class="controls">
                                                                <?php echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'label'=>false]); ?>
                                                                </div> <!-- /controls -->
                                                                </div> <!-- /control-group -->
                                                                
                                                <div class="control-group">
                                                    <label class="control-label" for="name">Display Sequence</label>
                                                    <div class="controls">
                                                        <?php echo $this->Form->control('display_sequence', ['class'=>'span6', 'label'=>false]); ?>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="control-group">
                                                    <label class="control-label" for="enabled">&nbsp;</label>
                                                    <div class="controls">
                                                        <label class="checkbox inline">
                                                            <?php echo $this->Form->control('enabled'); ?>
                                                        </label>
                                                    </div>
                                                </div> <!-- /control-group -->
                                            
                                            
                                            
                                               
                                    </fieldset>

                                </div>
                                
                                <div class="tab-pane" id="otherdetails">
                                    

                                    <fieldset>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Name</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.0.name', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Upload</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.0.photo', ['type'=>'file','class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="control-group">
                                                <label class="control-label" for="content">Remarks</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.0.remarks', ['class'=>'span6', 'label'=>false, 'id'=>'remarks', 'style'=>'height:50%']); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                
                                    </fieldset>


                                </div>

                                

                                <div class="tab-pane" id="otherdetails2">
                                    

                                    <fieldset>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Name</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.1.name', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Upload</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.1.photo', ['type'=>'file','class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="control-group">
                                                <label class="control-label" for="content">Remarks</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.1.remarks', ['class'=>'span6', 'label'=>false, 'id'=>'remarks2', 'style'=>'height:50%']); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                
                                    </fieldset>


                                </div>




                                <div class="tab-pane" id="otherdetails3">
                                    

                                    <fieldset>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Name</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.2.name', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Upload</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.2.photo', ['type'=>'file','class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="control-group">
                                                <label class="control-label" for="content">Remarks</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.2.remarks', ['class'=>'span6', 'label'=>false, 'id'=>'remarks3', 'style'=>'height:50%']); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->



                                
                                    </fieldset>


                                </div>


                                <div class="tab-pane" id="otherdetails4">
                                    

                                    <fieldset>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Name</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.3.name', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Upload</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.3.photo', ['type'=>'file','class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="control-group">
                                                <label class="control-label" for="content">Remarks</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.3.remarks', ['class'=>'span6', 'label'=>false, 'id'=>'remarks4', 'style'=>'height:50%']); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                
                                    </fieldset>


                                </div>


                                <div class="tab-pane" id="otherdetails5">
                                    

                                    <fieldset>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Name</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.4.name', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->


                                            <div class="control-group">
                                                <label class="control-label" for="name">Image Upload</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.4.photo', ['type'=>'file','class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="control-group">
                                                <label class="control-label" for="content">Remarks</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.4.remarks', ['class'=>'span6', 'label'=>false, 'id'=>'remarks5', 'style'=>'height:50%']); ?>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->
                                
                                    </fieldset>


                                </div>

                            </div>

                            <div class="form-actions">

                                <button type="submit" class="btn btn-primary">Save</button>
                                <button class="btn"><a href="/admin/home" style="color:#000">Cancel</a></button>
                            </div> <!-- /form-actions -->
                          
                          
                        </div>
                        
                        
                        
                        
                        
                    </div> <!-- /widget-content -->
                        
                </div> <!-- /widget -->
                
            </div> <!-- /span8 -->
            
            
            
            
          </div> <!-- /row -->
    
        </div> <!-- /container -->
        
    </div> <!-- /main-inner -->
    
</div> <!-- /main -->
    
<script>




</script>