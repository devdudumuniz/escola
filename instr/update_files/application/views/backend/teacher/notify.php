<div class="content-w">
 <?php include 'fancy.php';?>
   <div class="header-spacer"></div>
    <div class="conte nt-i">
        <div class="ui-block">
		    <div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="<?php echo base_url();?>uploads/bglogin.jpg" style="height:180px; object-fit:cover;">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>" style="background-color: #fff; padding:10px;">
							</div>
							<div class="author-content">
								<a href="javascript:void(0);" class="h3 author-name"><?php echo get_phrase('central de notificações');?></a>
								<div class="country"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;?>  |  <?php echo $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;?></div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="control-block-button">
						</div>
					</div>
				</div>
			</div>
      <div class="content-box">
        <div class="conty">
          <div class="row">
            <div class="col col-sm-6">
              <div class="ui-block" data-mh="friend-groups-item">
                <div class="friend-item friend-groups">
                  <div class="friend-item-content">
                    <div class="friend-avatar">
                      <div class="author-thumb">
                        <img src="<?php echo base_url();?>uploads/icons/sms.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                      </div>
                      <div class="author-content">
                        <a href="javascript:void(0);" class="h5 author-name"><?php echo get_phrase('enviar_sms');?></a>
                        <div class="country"><?php echo get_phrase('available_for_students');?></div>
                      </div>
                    </div>
                    <div class="control-block-button">
                      <a data-toggle="modal" data-target="#sendsms" href="#" class="btn btn-control bg-success text-white"><i class="picons-thin-icon-thin-0287_mobile_message_sms"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-sm-6">
              <div class="ui-block" data-mh="friend-groups-item">
                <div class="friend-item friend-groups">
                  <div class="friend-item-content">
                    <div class="friend-avatar">
                      <div class="author-thumb">
                        <img src="<?php echo base_url();?>uploads/icons/emails.svg" width="110px" style="background-color:#fff;padding:15px; border-radius:0px;">
                      </div>
                      <div class="author-content">
                        <a href="javascript:void(0);" class="h5 author-name"><?php echo get_phrase('enviar_emails');?></a>
                        <div class="country"><?php echo get_phrase('available_for_students');?></div>
                      </div>
                    </div>
                    <div class="control-block-button">
                      <a data-toggle="modal" data-target="#sendemails" href="#" class="btn btn-control bg-success text-white"><i class="picons-thin-icon-thin-0315_email_mail_post_send"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="sendemails" tabindex="-1" role="dialog" aria-labelledby="sendemails" aria-hidden="true">
    <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
        <div class="modal-content">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
        </a>
        <div class="modal-body">
            <div class="ui-block-title" style="background-color:#00579c">
            <h6 class="title" style="color:white"><?php echo get_phrase('enviar_emails');?></h6>
            </div>
        <div class="ui-block-content">
        	<?php echo form_open(base_url() . 'teacher/notify/send_emails' , array('enctype' => 'multipart/form-data'));?>
	            <div class="row">
	                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
	                <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('classe');?></label>
                <div class="select">
                    <select name="class_id" onchange="get_class_sections(this.value);">
                        <option value=""><?php echo get_phrase('selecionar');?></option>
                        <?php $cl = $this->db->get('class')->result_array();
                            foreach($cl as $row):?>
                            <option value="<?php echo $row['class_id'];?>"><?php echo $row['name'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            </div>
            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('seção');?></label>
                <div class="select">
                    <select name="section_id" id="section_selector_holder">
                        <option value=""><?php echo get_phrase('selecionar');?></option>
                    </select>
                </div>
            </div>
            </div>
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('receptor');?></label>
                <div class="select">
                    <select required name="receiver">
						<option value=""><?php echo get_phrase('selecionar');?></option>
					    <option value="student"><?php echo get_phrase('alunos');?></option>
						<option value="parent"><?php echo get_phrase('pais');?></option>
		   		     </select>
                </div>
            </div>
            </div>
              		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
	                	<div class="form-group label-floating">
                  			<label class="control-label"><?php echo get_phrase('assunto do e-mail');?></label>
                  			<input class="form-control" name="subject" type="text" required="">
	                	</div>
            		</div>
              		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">          
                		<div class="form-group">
                  			<label class="control-label"><?php echo get_phrase('mensagem');?></label>
                  			<textarea id="ckeditor1" name="content" required=""></textarea>
                		</div>        
              		</div>                
            	</div>
          		<div class="form-buttons-w text-right">
	             	<center><button class="btn btn-rounded btn-success btn-lg" type="submit"><?php echo get_phrase('enviar');?></button></center>
          		</div>
          	<?php echo form_close();?>        
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="sendsms" tabindex="-1" role="dialog" aria-labelledby="sendsms" aria-hidden="true">
      <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
        <?php echo form_open(base_url() . 'teacher/notify/sms' , array('enctype' => 'multipart/form-data'));?>
          <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
          <div class="modal-header">
            <h6 class="title"><?php echo get_phrase('enviar_sms');?></h6>
          </div>
          <div class="modal-body">
                    
              <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('classe');?></label>
                <div class="select">
                    <select name="class_id" onchange="get_class_sections2(this.value);" required="">
                        <option value=""><?php echo get_phrase('selecionar');?></option>
                        <?php $cl = $this->db->get('class')->result_array();
                            foreach($cl as $row):?>
                            <option value="<?php echo $row['class_id'];?>"><?php echo $row['name'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('seção');?></label>
                <div class="select">
                    <select name="section_id" id="section_selector_holder2">
                        <option value=""><?php echo get_phrase('selecionar');?></option>
                    </select>
                </div>
            </div>
            <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('receptor');?></label>
                <div class="select">
                    <select required name="receiver">
						<option value=""><?php echo get_phrase('selecionar');?></option>
					    <option value="student"><?php echo get_phrase('alunos');?></option>
						<option value="parent"><?php echo get_phrase('pais');?></option>
		   		     </select>
                </div>
            </div>
            <div class="form-group">
              <textarea rows="3" class="form-control" name="msg" required placeholder="<?php echo get_phrase('mensagem');?>..."></textarea>
            </div>        
            <button type="submit" class="btn btn-rounded btn-success btn-lg full-width"><?php echo get_phrase('enviar');?></button>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
    
    <script type="text/javascript">
    function get_class_sections(class_id) 
    {
        $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });
    }
</script>
    <script type="text/javascript">
    function get_class_sections2(class_id) 
    {
        $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder2').html(response);
            }
        });
    }
</script>

<script type="text/javascript">
    function get_class_students(class_id) {
        $.ajax({
            url: '<?php echo base_url(); ?>admin/get_class_stundets/' + class_id,
            success: function (response)
            {
                jQuery('#students_holder').html(response);
            }
        });
    }
</script>