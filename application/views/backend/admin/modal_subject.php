<?php  $edit_data = $this->db->get_where('subject' , array('subject_id' => $param2))->result_array();
        foreach($edit_data as $row):
?>    
    <script type="text/javascript">
        $(document).ready(function() {
            jscolor.installByClassName("jscolor");
        }); 
    </script>
          <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-header">
              <h6 class="title"><?php echo get_phrase('update_subject');?></h6>
            </div>
            <?php echo form_open(base_url() . 'admin/courses/update/'.$row['subject_id']."/".$row['class_id'], array('enctype' => 'multipart/form-data')); ?>
            <div class="modal-body">
                <div class="ui-block-content">
              <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating">
                      <label class="control-label"><?php echo get_phrase('nome');?></label>
                      <input class="form-control" placeholder="" value="<?php echo $row['name'];?>" name="name" type="text" required>
                    </div>
                  </div>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="control-label"><?php echo get_phrase('icon');?></label>
                      <input class="form-control" name="userfile" type="file">
                    </div>
                  </div>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating">
                      <label class="control-label text-white"><?php echo get_phrase('cor');?></label>
                      <input class="jscolor" name="color" value="<?php echo $row['color'];?>">
                    </div>
                  </div>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                      <label class="control-label"><?php echo get_phrase('professor');?></label>
                      <div class="select">
                        <select name="teacher_id" required="">
                          <option value=""><?php echo get_phrase('selecionar');?></option>
                           <?php $teachers = $this->db->get('teacher')->result_array(); 
                                foreach($teachers as $teacher):
                            ?>
                                <option value="<?php echo $teacher['teacher_id'];?>" <?php if($row['teacher_id'] == $teacher['teacher_id']) echo 'selected';?>><?php echo $teacher['first_name']." ".$teacher['last_name'];?></option>
                            <?php endforeach;?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <button class="btn btn-success btn-lg full-width" type="submit"><?php echo get_phrase('atualizar');?></button>
                  </div>
                </div>
                </div>
              </div>
            <?php echo form_close();?>
          </div>
<?php endforeach; ?>