<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<?php $class_info = $this->db->get('class')->result_array(); ?>
<?php $info = base64_decode($data);
    $ex = explode('-', $info);
?>
<?php $sub = $this->db->get_where('subject', array('subject_id' => $ex[2]))->result_array();
foreach($sub as $row):
?>
<div class="content-w">
  <div class="conty">
  <?php include 'fancy.php';?>
  <div class="header-spacer"></div>
    <div class="cursos cta-with-media" style="background: #<?php echo $row['color'];?>;">
      <div class="cta-content">
        <div class="user-avatar">
          <img alt="" src="<?php echo base_url();?>uploads/subject_icon/<?php echo $row['icon'];?>" style="width:60px;">
        </div>
        <h3 class="cta-header"><?php echo $row['name'];?> - <small><?php echo get_phrase('homework');?></small></h3>
        <small style="font-size:0.90rem; color:#fff;"><?php echo $this->crud_model->get_name('student', $ex[3]);?> | <?php echo $this->db->get_where('class', array('class_id' => $ex[0]))->row()->name;?> "<?php echo $this->db->get_where('section', array('section_id' => $ex[1]))->row()->name;?>"</small>
      </div>
    </div> 
    <div class="os-tabs-w menu-shad">
      <div class="os-tabs-controls">
        <ul class="navs navs-tabs upper">
          <li class="navs-item">
            <a class="navs-links" href="<?php echo base_url();?>parents/subject_dashboard/<?php echo $data;?>/"><i class="os-icon picons-thin-icon-thin-0482_gauge_dashboard_empty"></i><span><?php echo get_phrase('dashboard');?></span></a>
          </li>
          <li class="navs-item">
            <a class="navs-links" href="<?php echo base_url();?>parents/online_exams/<?php echo $data;?>/"><i class="os-icon picons-thin-icon-thin-0207_list_checkbox_todo_done"></i><span><?php echo get_phrase('online_exams');?></span></a>
          </li>
          <li class="navs-item">
            <a class="navs-links active" href="<?php echo base_url();?>parents/homework/<?php echo $data;?>/"><i class="os-icon picons-thin-icon-thin-0004_pencil_ruler_drawing"></i><span><?php echo get_phrase('homework');?></span></a>
          </li>
          <li class="navs-item">
            <a class="navs-links" href="<?php echo base_url();?>parents/forum/<?php echo $data;?>/"><i class="os-icon picons-thin-icon-thin-0281_chat_message_discussion_bubble_reply_conversation"></i><span><?php echo get_phrase('forum');?></span></a>
          </li>
          <li class="navs-item">
            <a class="navs-links" href="<?php echo base_url();?>parents/study_material/<?php echo $data;?>/"><i class="os-icon picons-thin-icon-thin-0003_write_pencil_new_edit"></i><span><?php echo get_phrase('study_material');?></span></a>
          </li>
          <li class="navs-item">
            <a class="navs-links" href="<?php echo base_url();?>parents/subject_marks/<?php echo $data;?>/"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span><?php echo get_phrase('marcas');?></span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="content-i">
      <div class="content-box">
        <div class="row">
          <main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
            <div id="newsfeed-items-grid">                
                <div class="element-wrapper">
                    <div class="element-box-tp">
                    <h6 class="element-header"><?php echo get_phrase('homework');?></h6>
                    <div class="table-responsive">
                        <table class="table table-padded">
                            <thead>
                                <tr>
                                    <th><?php echo get_phrase('t??tulo');?></th>
                                    <th><?php echo get_phrase('tipo');?></th>
                                    <th><?php echo get_phrase('allow_homework_deliveries');?></th>
                                    <th><?php echo get_phrase('op????es');?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
        			            $counter = 1;
    			                $class_id = $this->db->get_where('enroll' , array('student_id' => $ex[3] , 'year' => $running_year))->row()->class_id;
    			                $section_id = $this->db->get_where('enroll' , array('student_id' => $ex[3] , 'year' => $running_year))->row()->section_id;
    			                $this->db->order_by('homework_id', 'desc');
    			                $homeworks = $this->db->get_where('homework', array('class_id' => $class_id, 'status' => 1, 'section_id' => $section_id, 'subject_id' => $ex[2]))->result_array();
    			                foreach ($homeworks as $row):
        	                ?>
                                <tr>
                                    <td><span><?php echo $row['title'];?></span></td>
                                    <td>
                                        <?php if($row['type'] ==1):?>
                                            <span class="badge badge-success"><?php echo get_phrase('online_text');?></span>
                                        <?php endif;?>
                                        <?php if($row['type'] == 2):?>
                                            <span class="badge badge-info"><?php echo get_phrase('arquivos');?></span>
                                        <?php endif;?>
                                    </td>
                                    <td><?php echo $row['date_end'];?></td>
                                    <td class="bolder">
                                        <a style="color:grey;" href="<?php echo base_url();?>parents/homeworkroom/<?php echo $row['homework_code']; ?>/<?php echo $ex[3];?>/" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('visualizar');?>"><i class="picons-thin-icon-thin-0043_eye_visibility_show_visible"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
            </main>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php endforeach;?>