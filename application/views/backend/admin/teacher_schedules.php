<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<?php
    $info = $this->db->get_where('teacher', array('teacher_id' => $teacher_id))->result_array();
    foreach($info as $row):
?>
<div class="content-w"> 
	<?php include 'fancy.php';?>
	<div class="header-spacer"></div>
	<div class="content-i">
		<div class="content-box">
			<div class="conty">
			    <div class="back" style="margin-top:-20px;margin-bottom:10px">		
	                <a title="<?php echo get_phrase('return');?>" href="<?php echo base_url();?>admin/teachers/"><i class="picons-thin-icon-thin-0131_arrow_back_undo"></i></a>	
	            </div>
    			<div class="row">
        			<main class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">                
            			<div id="newsfeed-items-grid">
    						<div class="ui-block paddingtel">
          						<div class="user-profile">
          							<div class="up-head-w" style="background-image:url(<?php echo base_url();?>uploads/bglogin.jpg)">
          								<div class="up-main-info">
          								   	<div class="user-avatar-w">
          								       <div class="user-avatar">
          								            <img alt="" src="<?php echo $this->crud_model->get_image_url('teacher', $row['teacher_id']);?>" style="background-color:#fff;">
          								        </div>
          								    </div>
          								    <h3 class="text-white"><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></h3>
          								    <h5 class="up-sub-header">@<?php echo $row['username'];?></h5>
          								</div>
          								<svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path></g>
          								</svg>
          							</div>
          							<div class="up-controls">
          								<div class="row">
          								    <div class="col-lg-6">
          								        <div class="value-pair">
          								            <div><?php echo get_phrase('tipo_de_conta');?>:</div>
          								            <div class="value badge badge-pill badge-success"><?php echo get_phrase('professor');?></div>
          								        </div>
          								        <div class="value-pair">
          								            <div><?php echo get_phrase('membro_desde');?>:</div>
          								            <div class="value"><?php echo $row['since'];?>.</div>
          								        </div>
          								    </div>
          								</div>
          							</div>
          							<div class="ui-block">
										<div class="ui-block-title">		
											<h6 class="title"><?php echo get_phrase('teacher_schedules');?></h6>
										</div>
										<div class="ui-block-content">
											<div class="table-responsive">
			                                    <table class="table table-bordered table-schedule table-hover" cellpadding="0" cellspacing="0" width="100%">
			                                    <?php 
                                                    $days = $this->db->get_where('academic_settings', array('type' => 'routine'))->row()->description; 
                                                    if($days == 2) { $nday = 6;}else{$nday = 7;}
                                                    for($d=$days; $d <= $nday; $d++):
                                                    if($d==1)$day = 'Sunday';
				                                    else if($d==2) $day ='Monday';
				                                    else if($d==3) $day = 'Tuesday';
				                                    else if($d==4) $day ='Wednesday';
				                                    else if($d==5) $day ='Thursday';
				                                    else if($d==6) $day ='Friday';
				                                    else if($d==7) $day ='Saturday';
			                                     ?>
				                                    <tr>
				                                        <table class="table table-schedule table-hover table-bordered" cellpadding="0" cellspacing="0">
					                                       <td class="bg-primary text-white" width="120" height="100%" style="text-align: center; border:none;"><strong><?php echo ucwords($day);?></strong></td>
					                                       <?php
                                                            $this->db->order_by("time_start", "asc");
                                                            $this->db->where('day' , $day);
                                                            $this->db->where('year' , $running_year);
                                                            $this->db->where('teacher_id' , $teacher_id);
                                                            $routines   =   $this->db->get('class_routine')->result_array();
                        	                               foreach($routines as $row2):
                	                                     ?>
						                                   <td style="text-align:center"><?php
                                                            if ($row2['time_start_min'] == 0 && $row2['time_end_min'] == 0) 
                                                            echo $row2['time_start'].'-'.$row2['time_end'];
                                                            if ($row2['time_start_min'] != 0 || $row2['time_end_min'] != 0)
                                                                echo $row2['time_start'].':'.$row2['time_start_min'].'-'.$row2['time_end'].':'.$row2['time_end_min'];
                                                            ?><br><b><?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']);?></b><br><small><?php echo $this->db->get_where('class', array('class_id' => $row2['class_id']))->row()->name;?> - <strong><?php echo $this->db->get_where('section', array('section_id' => $row2['section_id']))->row()->name;?></strong></small></td>
					                                       <?php endforeach;?>
				                                        </table>
				                                    </tr>
				                                <?php endfor;?>				
				                            </table>
                                            </div>
										</div>
									</div>
          						</div>
                			</div>
            			</div>
        			</main>
        			<div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">
            			<div class="crumina-sticky-sidebar">
                			<div class="sidebar__inner">
                				<div class="ui-block paddingtel">
                					<div class="ui-block-content">
                    					<div class="widget w-about">
                        					<a href="javascript:void(0);" class="logo"><img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>"></a>
                        					<ul class="socials">
                            					<li><a href="<?php echo $this->db->get_where('settings', array('type' => 'facebook'))->row()->description;?>"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                                                <li><a href="<?php echo $this->db->get_where('settings', array('type' => 'twitter'))->row()->description;?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="<?php echo $this->db->get_where('settings', array('type' => 'youtube'))->row()->description;?>"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                                <li><a href="<?php echo $this->db->get_where('settings', array('type' => 'instagram'))->row()->description;?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        					</ul>
                    					</div>
                					</div>
            					</div>
                				<div class="ui-block paddingtel">
                					<div class="ui-block-content">
                						<div class="help-support-block">
											<h3 class="title"><?php echo get_phrase('links_r??pidos');?></h3>
											<ul class="help-support-list">
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/teacher_profile/<?php echo $teacher_id;?>/"><?php echo get_phrase('informa????es_pessoais');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/teacher_update/<?php echo $teacher_id;?>/"><?php echo get_phrase('atualizar informa????es');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/teacher_schedules/<?php echo $teacher_id;?>/"><?php echo get_phrase('hor??rios');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/teacher_subjects/<?php echo $teacher_id;?>/"><?php echo get_phrase('assuntos');?></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
                			</div>
            			</div>
        			</div>
    			</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach;?>