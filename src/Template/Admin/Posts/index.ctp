
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
                      <h3>Post Contents</h3>
                      <a href="/admin/posts/add" class="btn btn-success" style="color:#FFF"> Create Post </a>
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
                                                <!--<?= $this->Html->link(__('View'), [ 'action' => 'view', $post->id]) ?> -->
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], array('class' => 'btn btn-small btn-success')) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], array('class'=>'btn btn-danger btn-small'), ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
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
                      <a href="/admin/posts/add" class="btn btn-success" style="color:#FFF"> Create User </a>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="widget big-stats-container">
                        <div class="widget-content">
                          

                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
                                            <th><?php echo $this->Paginator->sort('username'); ?></th>
                                            <th><?php echo $this->Paginator->sort('fullname'); ?></th>
                                            <th><?php echo $this->Paginator->sort('role'); ?></th>
                                            
                                            <th class="actions"><?php echo __('Actions'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user): ?>
                                        <tr>
                                            <!--<td><?= $this->Number->format($post->id) ?></td>-->
                                            <td><?= h($user->username) ?></td>
                                            <td><?= h($user->first_name." ".$user->last_name) ?></td>
                                            <td><?= h($user->role) ?></td>
                                            <td class="actions">
                                                <!--<?= $this->Html->link(__('View'), [ 'action' => 'view', $post->id]) ?> -->
                                                
                                                <?= $this->Html->link(__('Edit'), ['controller'=>'users','action' => 'edit', $user->id], array('class' => 'btn btn-small btn-success')) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller'=>'users','action' => 'delete', $user->id], array('class'=>'btn btn-danger btn-small'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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
                      <a href="/admin/posts/add" class="btn btn-success" style="color:#FFF"> Create Category </a>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                      <div class="shortcuts"> 
                        <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i>
                          <span class="shortcut-label">Apps</span> </a><a href="javascript:;" class="shortcut"><i
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