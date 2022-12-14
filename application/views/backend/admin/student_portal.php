<?php $student_info = $this->db->get_where('student' , array('student_id' => $student_id))->result_array(); 
    foreach($student_info as $row): ?>
<div class="content-w"> 
	<?php include 'fancy.php';?>
	<div class="header-spacer"></div>
	<div class="content-i">
		<div class="content-box">
			<div class="conty">
			    <div class="back" style="margin-top:-20px;margin-bottom:10px">		
	                <a title="<?php echo get_phrase('return');?>" href="<?php echo base_url();?>admin/Students/"><i class="picons-thin-icon-thin-0131_arrow_back_undo"></i></a>	
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
          								            <img alt="" src="<?php echo $this->crud_model->get_image_url('student', $row['student_id']);?>" style="background-color:#fff;">
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
          								                <div class="value badge badge-pill badge-primary"><?php echo get_phrase('Estudante');?></div>
          								        </div>
          								        <div class="value-pair">
          								            <div><?php echo get_phrase('membro_desde');?>:</div>
          								            <div class="value"><?php echo $row['since'];?>.</div>
          								        </div>
          								        <div class="value-pair">
          								            <div><?php echo get_phrase('roll');?>:</div>
          								            <div class="value"><?php echo $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->roll;?>.</div>
          								        </div>
          								    </div>
          								</div>
          							</div>
          							<div class="ui-block">
										<div class="ui-block-title">		
											<h6 class="title"><?php echo get_phrase('informa????es_pessoais');?></h6>
										</div>
										<div class="ui-block-content">
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<ul class="widget w-personal-info item-block">
														<li>
															<span class="title"><?php echo get_phrase('nome');?>:</span>
															<span class="text"><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('email');?>:</span>
															<span class="text"><?php echo $row['email'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('nome de usu??rio');?>:</span>
															<span class="text"><?php echo $row['username'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('endere??o');?>:</span>
															<span class="text"><?php echo $row['address'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('se????o');?>:</span>
															<?php
															    $section_id = $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->section_id;?>
															<span class="text"><?php echo $this->db->get_where('section', array('section_id' => $section_id))->row()->name;?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('sala de aula');?>:</span>
															<span class="text"><?php echo $this->db->get_where('dormitory', array('dormitory_id' => $row['dormitory_id']))->row()->name;?></span>
														</li>
														
														<li>
															<span class="title"><?php echo get_phrase('alergias');?>:</span>
															<span class="text"><?php echo $row['allergies'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('m??dico que acompanha');?>:</span>
															<span class="text"><?php echo $row['doctor'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('authorized_person');?>:</span>
															<span class="text"><?php echo $row['authorized_person'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('note');?>:</span>
															<span class="text"><?php echo $row['note'];?></span>
														</li>
													</ul>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<ul class="widget w-personal-info item-block">
														<li>
															<span class="title"><?php echo get_phrase('parent');?>:</span>
															<span class="text"><?php echo $this->db->get_where('parent', array('parent_id' => $row['parent_id']))->row()->first_name." ".$this->db->get_where('parent', array('parent_id' => $row['parent_id']))->row()->last_name;?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('contato');?>:</span>
															<span class="text"><?php echo $row['phone'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('anivers??rio');?>:</span>
															<span class="text"><?php echo $row['birthday'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('sexo');?>:</span>
															<span class="text"><?php if($row['sex'] == 'M') echo get_phrase('masculino'); else echo get_phrase('feminino');?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('classe');?>:</span>
															<?php
															    $class_id = $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->class_id;
															    $section_id = $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->section_id;?>
															<span class="text"><?php echo $this->db->get_where('class', array('class_id' => $class_id))->row()->name;?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('transporte');?>:</span>
															<span class="text"><?php echo $this->db->get_where('transport', array('transport_id' => $row['transport_id']))->row()->route_name;?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('condi????es ou doen??as');?>:</span>
															<span class="text"><?php echo $row['diseases'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('n??mero do m??dico');?>:</span>
															<span class="text"><?php echo $row['doctor_phone'];?></span>
														</li>
														<li>
															<span class="title"><?php echo get_phrase('authorized_person_phone');?>:</span>
															<span class="text"><?php echo $row['authorized_phone'];?></span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
          						</div>
                			</div>
            			</div>
        			</main>
        			<div class="col col-xl-3 order-xl-1 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
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
													<a href="<?php echo base_url();?>admin/student_portal/<?php echo $student_id;?>/"><?php echo get_phrase('informa????es_pessoais');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/student_update/<?php echo $student_id;?>/"><?php echo get_phrase('atualizar informa????es');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/student_invoices/<?php echo $student_id;?>/"><?php echo get_phrase('payments_history');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/student_marks/<?php echo $student_id;?>/"><?php echo get_phrase('marcas');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/student_profile_attendance/<?php echo $student_id;?>/"><?php echo get_phrase('atendimento');?></a>
												</li>
												<li>
													<i class="picons-thin-icon-thin-0133_arrow_right_next" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;
													<a href="<?php echo base_url();?>admin/student_profile_report/<?php echo $student_id;?>/"><?php echo get_phrase('comportamento');?></a>
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