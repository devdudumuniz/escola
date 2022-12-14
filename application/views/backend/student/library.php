<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; 
  $class_id = $this->db->get_where('enroll', array('student_id' => $this->session->userdata('login_user_id'), 'year' => $running_year))->row()->class_id;
  $section_id = $this->db->get_where('enroll' , array('student_id' => $this->session->userdata('login_user_id'),'class_id' => $class_id,'year' => $running_year))->row()->section_id;
?>
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
                              <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>" alt="author" style="background-color: #fff; padding:10px">
                            </div>
                            <div class="author-content">
                              <a href="javascript:void(0);" class="h3 author-name"><?php echo get_phrase('biblioteca');?></a>
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
        
                                          <div class="os-tabs-w">
                                  <div class="os-tabs-controls">
                                      <ul class="navs navs-tabs upper" style="padding-left:20px; padding-top:20px">
                                      <li class="navs-item" style="display:inline;">
                                          <a class="navs-link active" style="color:#000;" data-toggle="tab" href="#all"><?php echo get_phrase('biblioteca');?></a>
                                      </li>
                                      <li class="navs-item">
                                          <a class="navs-link" style="color:#000;" data-toggle="tab" href="#request"><?php echo get_phrase('solicita????o de livro');?></a>
                                      </li>
                                      </ul>
                                  </div>
                                  </div>
        
        <div class="tab-content">
            <div class="tab-pane active" id="all">
            <div class="element-wrapper">
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                    <th><?php echo get_phrase('tipo');?></th>
                    <th><?php echo get_phrase('nome');?></th>
                    <th><?php echo get_phrase('autor');?></th>
                    <th><?php echo get_phrase('descri????o');?></th>
                    <th><?php echo get_phrase('status');?></th>
                    <th><?php echo get_phrase('pre??o');?></th>
                    <th><?php echo get_phrase('download');?></th>
                  </tr>
                      </thead>
                      <tbody>
                       <?php $count = 1; 
        $book = $this->db->get_where('book', array('class_id' => $class_id))->result_array();
      foreach($book as $row):?>
      <tr>
        <td>
        <?php if($row['type'] == 'virtual'):?>
          <a class="btn btn-rounded btn-sm btn-purple" style="color:white"><?php echo get_phrase('virtual');?></a>
        <?php else:?>
          <a class="btn btn-rounded btn-sm btn-info" style="color:white"><?php echo get_phrase('normal');?></a>
        <?php endif;?>
        </td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['author'];?></td>
        <td><?php echo $row['description'];?></td>
        <td>
        <?php if($row['status'] == 2):?>
          <div class="status-pill red" data-title="<?php echo get_phrase('indispon??vel');?>" data-toggle="tooltip"></div>
        <?php endif;?>
        <?php if($row['status'] == 1):?>
          <div class="status-pill green" data-title="<?php echo get_phrase('dispon??vel');?>" data-toggle="tooltip"></div>
        <?php endif;?>
        </td>
        <td><a class="btn btn-rounded btn-sm btn-success" style="color:white"><?php echo $this->db->get_where('settings', array('type' => 'currency'))->row()->description;?><?php echo $row['price'];?></a></td>
        <td style="color:grey">
        <?php if($row['type'] == 'virtual' && $row['file_name'] != ""):?>
          <a class="btn btn-rounded btn-sm btn-primary" style="color:white" href="<?php echo base_url();?>uploads/library/<?php echo $row['file_name'];?>"><i class="picons-thin-icon-thin-0042_attachment"></i> <?php echo get_phrase('download');?></a>
        <?php else:?>
          <?php echo get_phrase('n??o baixado');?>
        <?php endif;?>
        </td>
      </tr>
      <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
      
      
            <div class="tab-pane" id="request">
            <div class="element-wrapper">
                <div style="margin-top:auto;float:right;"><a href="javascript:void(0);" data-target="#new_request" data-toggle="modal" class="text-white btn btn-control btn-grey-lighter btn-success"><i class="picons-thin-icon-thin-0001_compose_write_pencil_new"></i><div class="ripple-container"></div></a></div>
                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                    <th style="width: 60px;">#</th>
                    <th><?php echo get_phrase('livro');?></th>
                    <th><?php echo get_phrase('pedido_por');?></th>
                    <th><?php echo get_phrase('data_inicial');?></th>
                    <th><?php echo get_phrase('data_final');?></th>
                    <th><?php echo get_phrase('status');?></th>
                  </tr>
                      </thead>
                      <tbody>
                      <?php
        $count = 1;
        $this->db->order_by('book_request_id', 'desc');
        $book_requests = $this->db->get_where('book_request', array('student_id' => $this->session->userdata('login_user_id')))->result_array();
        foreach ($book_requests as $row) { ?>   
            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $this->db->get_where('book', array('book_id' => $row['book_id']))->row()->name; ?></td>
                <td><?php echo $this->crud_model->get_name('student', $row['student_id']);?></td>
                <td><?php echo date('d/m/Y', $row['issue_start_date']); ?></td>
                <td><?php echo date('d/m/Y', $row['issue_end_date']); ?></td>
                <td>
                    <?php
                        if($row['status'] == 0)
                            $status = '<div class="status-pill yellow" data-title="'. get_phrase('pendente').'" data-toggle="tooltip"></div>';
                        else if($row['status'] == 1)
                            $status = '<div class="status-pill green" data-title="'. get_phrase('aprovado').'" data-toggle="tooltip"></div>';
                        else
                            $status = '<div class="status-pill red" data-title="'. get_phrase('rejeitado').'" data-toggle="tooltip"></div>';
                        echo $status;
                    ?>
                </td>
            </tr>
        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      
      
      </div>
    </div>      
  </div>
</div>
<div class="display-type"></div>
</div>



      <div class="modal fade" id="new_request" tabindex="-1" role="dialog" aria-labelledby="new_request" aria-hidden="true">
  <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
    <div class="modal-content">
      <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      </a>
      <div class="modal-body">
        <div class="ui-block-title" style="background-color:#00579c">
          <h6 class="title" style="color:white"><?php echo get_phrase('new_request');?></h6>
        </div>
        <div class="ui-block-content">
        	<?php echo form_open(base_url() . 'student/library/request/', array('enctype' => 'multipart/form-data')); ?>
	            <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating is-select">
                <label class="control-label"><?php echo get_phrase('livro');?></label>
                <div class="select">
                    <select name="book_id" required onchange="select_section(this.value)">
                        <option value=""><?php echo get_phrase('selecionar');?></option>
                         <?php
                            $books = $this->db->get_where('book', array('class_id' => $class_id))->result_array();
                            foreach ($books as $row):?>
                                <option value="<?php echo $row['book_id']; ?>"><?php echo $row['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            		</div>
            		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
	                	<div class="form-group label-floating">
                  			<label class="control-label"><?php echo get_phrase('data_inicial');?></label>
                  			<input type='text' name="start" class="datepicker-here" data-position="bottom left" data-language='en'  data-multiple-dates-separator="/"/>
	                	</div>
            		</div>
            		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
	                	<div class="form-group label-floating">
                  			<label class="control-label"><?php echo get_phrase('data_final');?></label>
                  			<input type='text' name="end" class="datepicker-here" data-position="top left" data-language='en'  data-multiple-dates-separator="/"/>
	                	</div>
            		</div>
            	</div>
          		<div class="form-buttons-w text-right">
	             	<center><button class="btn btn-rounded btn-success" type="submit"><?php echo get_phrase('request');?></button></center>
          		</div>
          	<?php echo form_close();?>        
        </div>
      </div>
    </div>
  </div>
</div>