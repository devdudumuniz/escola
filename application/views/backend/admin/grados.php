<div class="content-w">
 <?php include 'fancy.php';?>
   <div class="header-spacer"></div>
    <div class="content-i">
      <div class="content-box">
        <div class="conty">
          <div class="row">
            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 margintelbot" >      
              <div class="friend-item friend-groups create-group" data-mh="friend-groups-item" style="min-height:250px;">      
                <a href="javascript:void(0);" class="full-block"></a>
                <div class="content">      
                  <a data-toggle="modal" data-target="#creargrado" href="javascript:void(0);" class="text-white btn btn-control bg-success"><i class="icon-feather-plus"></i></a>      
                  <div class="author-content">
                    <a  href="javascript:void(0);" class="h5 author-name"><?php echo get_phrase('nova_classe');?></a>
                    <div class="country"><?php echo get_phrase('criar_nova_classe');?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php $classes = $this->db->get('class')->result_array();
			    foreach($classes as $class):
		    ?>
            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="ui-block" data-mh="friend-groups-item">        
                <div class="friend-item friend-groups">
                  <div class="friend-item-content">
                      <div class="more">
                        <i class="icon-feather-more-horizontal"></i>
                        <ul class="more-dropdown">
                          <li><a href="javascript:void(0);" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_class/<?php echo $class['class_id'];?>');"><?php echo get_phrase('editar');?></a></li>
                          <li><a href="<?php echo base_url();?>admin/cursos/<?php echo base64_encode($class['class_id']);?>/"><?php echo get_phrase('assuntos');?></a></li>
                          <li><a href="javascript:void(0);" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_send_marks/<?php echo $class['class_id'];?>');"><?php echo get_phrase('enviar marcações por e-mail');?></a></li>
                          <li><a href="<?php echo base_url();?>admin/manage_classes/delete/<?php echo $class['class_id'];?>" onClick="return confirm('<?php echo get_phrase('confirmar exclusão');?>')"><?php echo get_phrase('excluir');?></a></li>
                        </ul>
                      </div>
                      <div class="friend-avatar">
                        <div class="author-thumb">
                          <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>" width="120px" style="background-color:#fff;padding:15px; border-radius:0px;">
                        </div>
                        <div class="author-content">
                          <a href="<?php echo base_url();?>admin/cursos/<?php echo base64_encode($class['class_id']);?>/" class="h5 author-name"><?php echo $class['name'];?></a>
                          <div class="country"><b><?php echo get_phrase('seções');?>:</b> <?php $sections = $this->db->get_where('section', array('class_id' => $class['class_id']))->result_array(); foreach($sections as $sec):?> <?php echo $sec['name']." "."|";?><?php endforeach;?></div>
                        </div>
                      </div>        
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal fade" id="creargrado" tabindex="-1" role="dialog" aria-labelledby="fav-page-popup" aria-hidden="true">
        <div class="modal-dialog window-popup fav-page-popup" role="document"> 
          <div class="modal-content">
            <a href="javascript:void(0);" class="close icon-close" data-dismiss="modal" aria-label="Close">
            </a>
            <div class="modal-header">
              <h6 class="title"><?php echo get_phrase('criar nova classe');?></h6>
            </div>
            <div class="modal-body">
            <?php echo form_open(base_url() . 'admin/manage_classes/create/', array('enctype' => 'multipart/form-data')); ?>
              <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating">
                      <label class="control-label"><?php echo get_phrase('nome');?></label>
                      <input class="form-control" placeholder="" name="name" type="text" required>
                    </div>
                  </div>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                      <label class="control-label"><?php echo get_phrase('professor');?></label>
                      <div class="select">
                        <select name="teacher_id" required="">
                          <option value=""><?php echo get_phrase('selecionar');?></option>
                          <?php $teachers = $this->db->get('teacher')->result_array();
                            foreach($teachers as $row):
                          ?>
                          <option value="<?php echo $row['teacher_id'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <button class="btn btn-success btn-lg full-width" type="submit"><?php echo get_phrase('salvar');?></button>
                  </div>
                </div>
              </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>