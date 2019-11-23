<div class="main">
    
    <div class="main-inner">

        <div class="container">
    
          <div class="row">
            
            <div class="span12">   



        <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3> Users </h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="messages_layout">
                <li class="from_user left"> <a href="#" class="avatar">
                    <img src='/webroot/files/Users/photo/<?php echo $user['photo']; ?>' height="50px" width="50px"/></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name"><?php echo $user['first_name']." ".$user['last_name']; ?></a> <span class="time">1 hour ago</span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                            <li><a href="#"><i class=" icon-share-alt icon-large"></i> Reply</a></li>
                            <li><a href="#"><i class=" icon-trash icon-large"></i> Delete</a></li>
                            <li><a href="#"><i class=" icon-share icon-large"></i> Share</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="text"> 
                        <div class="span8">
                            <fieldset>
                                    <?=   $this->Form->create($user,['type' => 'file', 'class'=>'form-horizontal']) ?>                     
                                        <div class="control-group">
                                            <label class="control-label" for="name">Username</label>
                                            <div class="controls">
                                                <?php echo $this->Form->control('username', ['class'=>'span6', 'label'=>false]); ?>
                                                </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                
                                                
                                                <div class="control-group">
                                                    <label class="control-label" for="content">Photo</label>
                                                    <div class="controls">
                                                        <?php echo $this->Form->control('photo', ['type'=>'file','class'=>'span6 ', 'label'=>false]);  ?>
                                                        </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        
                                                        
                                                        <div class="control-group">
                                                            <label class="control-label" for="category">Image URL</label>
                                                            <div class="controls">
                                                                <?php echo $this->Form->control('photo_dir'); ?>
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
                                            

                                                 <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button class="btn"><a href="/admin/home" style="color:#000">Cancel</a></button>
                                                 </div> <!-- /form-actions -->
                                            
                                            
                                        </form>
                                    </fieldset>
                                </div>

                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>


</div>
</div>
</div>
</div>
</div>