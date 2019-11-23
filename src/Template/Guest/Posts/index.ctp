
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>

<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">



                 <div class="span12">
                  <div class="widget">
                    <div class="widget-header"> <i class="icon-list-alt"></i>
                      <h3>Contents</h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="shortcuts"> 
                        


                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
                                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                                            <th><?php echo $this->Paginator->sort('enabled'); ?></th>
                                            <th><?php echo $this->Paginator->sort('creation date'); ?></th>
                                            <th><?php echo $this->Paginator->sort('modification date'); ?></th>
                                            
                                            <th class="actions"><?php echo __('Actions'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($posts as $post): ?>
                                        <tr>
                                            <!--<td><?= $this->Number->format($post->id) ?></td>-->
                                            <td><?= h($post->name) ?></td>
                                            <td><?= h($post->enabled) ?></td>
                                            <td><?= h($post->created_datetime) ?></td>
                                            <td><?= h($post->modified_datetime) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), [ 'action' => 'view', $post->id], array('class' => 'btn btn-warning')) ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>




                     </div>
                      <!-- /shortcuts --> 
                    </div>
                    <!-- /widget-content --> 
                  </div>
                  <!-- /widget -->
                
                </div>

                <div class="span6">
                  <div class="widget widget-nopad">
                    <div class="widget-header"> <i class="icon-user"></i>
                      <h3> Users </h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="widget big-stats-container">
                        <div class="widget-content">
                          <h6 class="bigstats">A fully responsive premium quality admin template built on Twitter Bootstrap by <a href="http://www.egrappler.com" target="_blank">EGrappler.com</a>.  These are some dummy lines to fill the area.</h6>
                          <div id="big_stats" class="cf">
                            <div class="stat"> <i class="icon-anchor"></i> <span class="value">851</span> </div>
                            <!-- .stat -->
                            
                            <div class="stat"> <i class="icon-thumbs-up-alt"></i> <span class="value">423</span> </div>
                            <!-- .stat -->
                            
                            <div class="stat"> <i class="icon-twitter-sign"></i> <span class="value">922</span> </div>
                            <!-- .stat -->
                            
                            <div class="stat"> <i class="icon-bullhorn"></i> <span class="value">25%</span> </div>
                            <!-- .stat --> 
                          </div>
                        </div>
                        <!-- /widget-content --> 
                        
                      </div>
                    </div>
                  </div>
                  
                </div>


                 <div class="span6">
                  <div class="widget">
                    <div class="widget-header"> <i class="icon-bookmark"></i>
                      <h3> Categories </h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="shortcuts"> 
                        <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span
                                                class="shortcut-label">Apps</span> </a><a href="javascript:;" class="shortcut"><i
                                                    class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Bookmarks</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Reports</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Comments</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                                        class="shortcut-label">Users</span> </a><a href="javascript:;" class="shortcut"><i
                                                            class="shortcut-icon icon-file"></i><span class="shortcut-label">Notes</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Photos</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i><span class="shortcut-label">Tags</span> </a> 
                        </div>
                      <!-- /shortcuts --> 
                    </div>
                    <!-- /widget-content --> 
                  </div>
                  <!-- /widget -->
                
                </div>

                

            </div>
        </div>
    </div>
</div>