<?php 
	$running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; 
	$class_id = $this->db->get_where('enroll' , array('student_id' => $student_id , 'year' => $running_year))->row()->class_id;
	$section_id = $this->db->get_where('enroll' , array('student_id' => $student_id , 'year' => $running_year))->row()->section_id; 
?>
<div class="content-w">  
<?php include 'fancy.php';?>
    <div class="header-spacer"></div>
          <div class="conty">
	<div class="os-tabs-w menu-shad">		
		<div class="os-tabs-controls">		  
			<ul class="navs navs-tabs upper">			
				<li class="navs-item">			  
					<a class="navs-links active" href="<?php echo base_url();?>parents/attendance_report/"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
					<span><?php echo get_phrase('relatório_de_atendimento');?></span></a>
				</li>
			</ul>		
		</div>
	</div>  
	<div class="content-i">   
		<div class="content-box">	   
			<div class="element-wrapper">         
			<?php echo form_open(base_url() . 'parents/attendance_report_selector/', array('class' => 'form m-b')); ?>   
					<div class="row">                
						<div class="col-sm-4">                  
							 <div class="form-group label-floating is-select">
                                                                        <label class="control-label"><?php echo get_phrase('mês');?></label>
                                                                        <div class="select">
                                                                            <select name="month" required="" onchange="show_year()">
                                                                                <option value=""><?php echo get_phrase('selecionar');?></option>
                                                                                  	<?php
            						                                                    for ($i = 1; $i <= 12; $i++):
									                                                    if ($i == 1) $m = get_phrase('janeiro');
                					                                                    else if ($i == 2) $m = get_phrase('fevereiro');
                					                                                    else if ($i == 3) $m = get_phrase('março');
                					                                                    else if ($i == 4) $m = get_phrase('abril');
                					                                                    else if ($i == 5) $m = get_phrase('maio');
									                                                    else if ($i == 6) $m = get_phrase('junho');
                					                                                else if ($i == 7) $m = get_phrase('julho');
                					                                                else if ($i == 8) $m = get_phrase('agosto');
                					                                                else if ($i == 9) $m = get_phrase('setembro');
                					                                                else if ($i == 10) $m = get_phrase('outubro');
                					                                                else if ($i == 11) $m = get_phrase('novembro');
                					                                                else if ($i == 12) $m = get_phrase('dezembro');
                				                                                ?>
                					                                                <option value="<?php echo $i; ?>"<?php if($month == $i) echo 'selected'; ?>  ><?php echo $m; ?></option>
                				                                                <?php endfor;?>
                                                                            </select>
                                                                        </div>
                                                                    </div>             
						</div>  
						<div class="col-sm-4">   
						<div class="form-group label-floating is-select">
                                                                        <label class="control-label"><?php echo get_phrase('Estudante');?></label>
                                                                        <div class="select">
                                                                            <select name="student_id" required="">
                                                                                <option value=""><?php echo get_phrase('selecionar');?></option>
									  <?php $children_of_parent = $this->db->get_where('student' , array('parent_id' => $this->session->userdata('parent_id')))->result_array();
                            			foreach ($children_of_parent as $row): ?>
                						<option value="<?php echo $row['student_id']; ?>"><?php echo $this->crud_model->get_name('student', $row['student_id']); ?></option>
	                					<?php endforeach;?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
						</div>      
                        <input type="hidden" name="year" value="<?php echo $running_year;?>">
						<div class="col-sm-2">                 
							<div class="form-group"> 
								<button class="btn btn-rounded btn-success btn-upper" style="margin-top:20px"><span><?php echo get_phrase('gerar');?></span></button>
							</div>                
						</div>             
					</div>            
				<?php echo form_close();?>       
		    </div>        
		</div>      
    </div>    
    </div>    
</div>