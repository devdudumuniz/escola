<div class="full-chat-middle">
    <div class="chat -head">
		<div class="row">
		  <div class="col-sm-12">
            <?php echo form_open(base_url() . 'librarian/message/send_new/', array('class' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <div class="form-group label-floating is-select">
                     <label class="control-label"><?php echo get_phrase('receptor');?></label>
                    <div class="select">
                        <select name="reciever" required="">
                            <option value=""><?php echo get_phrase('selecionar');?></option>
                            <optgroup label="<?php echo get_phrase('admins');?>">
                            <?php
                                $admins = $this->db->get('admin')->result_array();
                                foreach ($admins as $row):
                            ?>
                                <?php if($this->session->userdata('login_user_id') != $row['admin_id']):?>
                                    <option value="admin-<?php echo $row['admin_id']; ?>" <?php if($usertype == 'admin' && $user_id == $row['admin_id']) echo 'selected';?>>
                                    <?php echo $this->db->get_where('admin', array('admin_id' => $row['admin_id']))->row()->first_name." ".$this->db->get_where('admin', array('admin_id' => $row['admin_id']))->row()->last_name; ?></option>
                                <?php endif;?>
                            <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <div class="chat-content-w">
        <div class="chat-content">
        </div>
    </div>
    <div class="chat-controls b-b">
        <div class="chat-input">
            <input placeholder="<?php echo get_phrase('write_message');?>..." type="text" name="message" required="">
        </div>
        <div class="chat-input-extra">
	        <div class="chat-extra-actions">
		        <input type="file" name="file_name" id="file-3" class="inputfile inputfile-3" style="display:none"/>
		        <label for="file-3"><i class="os-icon picons-thin-icon-thin-0042_attachment"></i> <span><?php echo get_phrase('send_file');?>...</span></label>
		    </div>
		    <div class="chat-btn">
		        <button class="btn btn-rounded btn-primary" type="submit"><?php echo get_phrase('enviar');?></button>
		    </div>
	    </div>
    </div>
  <?php echo form_close();?>
</div>