<div class="main">
    
    <div class="main-inner">

        <div class="container">
    
          <div class="row">
            
            <div class="span12">            
                
                <div class="widget ">
                    
                    <div class="widget-header">
                        <i class="icon-list-alt"></i>
                        <h3>Post - <?php echo $post['name']; ?></h3>
                    </div> <!-- /widget-header -->
                    
                    <div class="widget-content">
                        
                         <?php $this->Log($post, 'debug'); ?>
                        
                        <div class="tabbable">
                           <?=   $this->Form->create($post,['type' => 'file', 'class'=>'form-horizontal']) ?> 

                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#postdetails" data-toggle="tab">Post Details</a>
                              </li>
                              <li><a href="#otherdetails" data-toggle="tab">Other Details</a></li>
                              <li><a href="#preview" data-toggle="tab">Preview</a></li>
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
                                                        <?php echo $this->Form->control('content', ['class'=>'span6', 'label'=>false, 'id'=>'content', 'style'=>'height:50%']); ?>
                                                        </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label" for="category">Category</label>
                                                            <div class="controls">
                                                                <?php echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'label'=>false]); ?>
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
                                                

                                                <div class="control-group">
                                                    <label class="control-label" for="homepage">&nbsp;</label>
                                                    <div class="controls">
                                                        <label class="checkbox inline">
                                                            <?php echo $this->Form->control('homepage', ['label'=>'Display in homepage']); ?>
                                                        </label>
                                                    </div>
                                                </div>
                                            
                                            
                                               
                                    </fieldset>

                                </div>
                                
                                <div class="tab-pane" id="otherdetails">
                                    
                                    <
                                    <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="photo">Image</label>
                                                <div class="controls">
                                                  <?php echo $this->Form->control('images.0.name', ['label'=>false]); ?>
                                                </div> <!-- /controls -->
                                            </div>

                                            <!--
                                            <div class="control-group">
                                                <label class="control-label" for="photo">Image File Upload</label>
                                                <div class="controls">
                                                  <?php echo $this->Form->control('images.0.photo', ['type' => 'file','multiple'=>'multiple', 'label'=>false]); ?>
                                                </div>
                                            </div>
                                            -->
                                
                                            <div class="control-group">
                                                <label class="control-label" for="username">Image</label>
                                                <div class="controls">
                                                    <?php echo $this->Form->control('images.0.photo_dir', ['class'=>'span6 disabled', 'disabled'=>true, 'label'=>false]); ?>
                                                </div>
                                            </div>
                                           
                                    </fieldset>


                                </div>

                                <div class="tab-pane" id="preview">
                                    
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
    
    
    