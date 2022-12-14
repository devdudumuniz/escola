<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<div class="content-w">
    <?php include 'fancy.php';?>
    <div class="header-spacer"></div>
    <div class="conty">
         <div class="ae-content-w" style="background-color: #f2f4f8;">
                      <div class="top-header top-header-favorit">
                        <div class="top-header-thumb">
                          <img src="<?php echo base_url();?>uploads/bglogin.jpg" alt="nature" style="height:180px; object-fit:cover;">
                          <div class="top-header-author">
                            <div class="author-thumb">
                              <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>"  style="background-color: #fff; padding:10px;">
                            </div>
                            <div class="author-content">
                              <a href="javascript:void(0);" class="h3 author-name"><?php echo get_phrase('ônibus_escolar');?></a>
                              <div class="country"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;?>  |  <?php echo $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="profile-section" style="background-color: #fff;">
                          <div class="control-block-button">                                    
                          </div>
                        </div>
                      </div>
                    </div>
        <div class="content-box">
        <br>
        <div class="tab-content ">
            <div class="tab-pane active" id="Students">
            <div class="element-wrapper">
                <h6 class="element-header">
                  <?php echo get_phrase('ônibus_escolar');?>
                  <div style="margin-top:auto;float:right;"><a href="#" data-target="#crearadmin" data-toggle="modal" class="btn btn-control btn-grey-lighter btn-purple"><i class="picons-thin-icon-thin-0001_compose_write_pencil_new"></i><div class="ripple-container"></div></a></div>
                </h6>
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
					        <th><?php echo get_phrase('nome');?></th>
					        <th><?php echo get_phrase('rota');?></th>
					        <th><?php echo get_phrase('id do onibus');?></th>
					        <th><?php echo get_phrase('motorista');?></th>
					        <th><?php echo get_phrase('telefone do motorista');?></th>
					        <th><?php echo get_phrase('preço');?></th>
					        <th class="text-center"><?php echo get_phrase('opções');?></th>
				        </tr>
                      </thead>
                      <tbody>
                      <?php $bus = $this->db->get('transport')->result_array();
				            foreach($bus as $buss):
				        ?>
				        <tr>
					        <td><?php echo $buss['route_name'];?></td>
					        <td><?php echo $buss['route'];?></td>
					        <td><a class="btn nc btn-rounded btn-sm btn-primary" style="color:white"><?php echo $buss['number_of_vehicle'];?></a></td>
    					    <td><?php echo $buss['driver_name'];?></td>
					        <td><?php echo $buss['driver_phone'];?></td>
					        <td><a class="btn nc btn-rounded btn-sm btn-success" style="color:white"><span><?php echo $this->db->get_where('settings', array('type' => 'currency'))->row()->description;?></span><?php echo $buss['route_fare'];?></a></td>
					        <td>
						        <a style="color:grey;" href="javascript:void(0);" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_bus/<?php echo $buss['transport_id'];?>');"><i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i></a>
						        <a style="color:grey;" href="javascript:void(0);" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_transport/<?php echo $buss['transport_id'];?>');"><i class="picons-thin-icon-thin-0001_compose_write_pencil_new"></i></a>
						        <a style="color:grey;" onClick="return confirm('<?php echo get_phrase('confirmar exclusão');?>')" class="danger" href="<?php echo base_url();?>admin/school_bus/delete/<?php echo $buss['transport_id'];?>"><i class="picons-thin-icon-thin-0056_bin_trash_recycle_delete_garbage_empty"></i></a>
					        </td>
				        </tr>
				        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
      </div>
    </div>      
  </div>
</div>
<div class="display-type"></div>
</div>


 
<div class="modal fade" id="crearadmin" tabindex="-1" role="dialog" aria-labelledby="crearadmin" aria-hidden="true" style="top:10%;">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      </a>
      <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white"><?php echo get_phrase('new_bus');?></h6>
        </div>
        <div class="ui-block-content">
            <?php echo form_open(base_url() . 'admin/school_bus/create/' , array('enctype' => 'multipart/form-data'));?>
                <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label"><?php echo get_phrase('nome');?></label>
                            <input class="form-control" type="text" name="route_name" required="">
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label"><?php echo get_phrase('rota');?></label>
                            <input class="form-control" type="text" name="route" required="">
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label"><?php echo get_phrase('id do onibus');?></label>
                            <input class="form-control" type="text" name="number_of_vehicle" required="">
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label"><?php echo get_phrase('nome do motorista');?></label>
                            <input class="form-control" type="text" name="driver_name" required="">
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label"><?php echo get_phrase('telefone do motorista');?></label>
                            <input class="form-control" type="text" name="driver_phone" required="">
                        </div>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label"><?php echo get_phrase('preço');?></label>
                            <input class="form-control" type="text" name="route_fare" required="">
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <button class="btn btn-rounded btn-success" type="submit"><?php echo get_phrase('salvar');?></button>
                    </div>
                </div>
            </form>          
        </div>
      </div>
    </div>
  </div>
</div>

