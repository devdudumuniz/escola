<?php 
	$class_name		 	= 	$this->db->get_where('class' , array('class_id' => $class_id))->row()->name;
	$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$running_year       =	$this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;
?>
 <style type="text/css">
.titulosincss {
	text-align: center;
	font-weight: bold;
}
.imagen {
	position: absolute;
	right: 5px;
	top: 10px;
}
.mediano {
	font-size: 11px;
} 
.grande {
	font-size: 13px;
}
.tablatitulo {
	padding: 10px 0;
}
td.descripcion {
	font-weight: bold;
}
td.nota {
	text-align: center;
}
td.notapromedio {
	text-align: center;
	font-weight: bold;
	padding: 3px;
}
td.notapromediofinal {
	text-align: center;
	font-weight: bold;
	font-size: 14px;
	padding: 5px;
}
.firmadirector {
	padding: 40px 0 20px 0;
	font-weight: bold;
	float: right;
	width: 300px;
}
.firma {
	border-bottom: 1px solid #000;
}
.firmadirector .texto {
	text-align:center;
}
table {
	width: 100%;
}

.negrita {
	font-weight: bold;
}
.cuadro{
	width: 100%;
}
</style>
	<script src="assets/js/jquery-1.11.0.min.js"></script>
<div class="cuadro" id="print_area">
					<div class="logo">
						<center><img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>" alt="" width="5%"/></center></div>
						<div class="titulosincss">
									<div class="grande"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;?></div>
									<div class="mediano"><?php echo $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;?></div>
									<div class="grande"><?php echo get_phrase('folha de classificação');?></div>
									<div class="mediano"><?php echo $this->db->get_where('subject', array('subject_id' => $subject_id))->row()->name;?></div>
									<div class="mediano"><?php echo $this->db->get_where('class', array('class_id' => $class_id))->row()->name;?> | <?php echo $this->db->get_where('section', array('section_id' => $section_id))->row()->name;?></div>
								</div>
								<table cellpading="0" cellspacing="0" border="1" style="margin: 20px 0;">
									<tr style="background-color: #a01a7a; color: #fff;text-align: center;">
										<th class="text-center">#</th>
										<th class="text-center"><?php echo get_phrase('sexo');?></th>
										<th class="text-center"><?php echo get_phrase('Estudante');?></th>
										<?php 
											$exam = $this->db->get('exam')->result_array();
											foreach($exam as $row):
										?>
											<th class="text-center"><?php echo $row['name'];?></th>
										<?php endforeach;?>
										<th class="text-center"><?php echo get_phrase('average');?></th>
									</tr>
									<?php
										$n = 1;
										$m = 0;
										$f = 0;
										$Students = $this->db->get_where('enroll', array('class_id' => $class_id, 'section_id' => $section_id, 'year' => $running_year))->result_array();
										foreach($Students as $row):
											if($this->db->get_where('student', array('student_id' => $row['student_id']))->row()->sex == 'M'){
												$m+=1;
											}else{
												$f += 1;
											}
									?>
									<tr style="text-align: center;" id="student-<?php echo $row['student_id'];?>">
										<td style="text-align: center;"><?php echo $n++;?></td>
										<td class="text-center"><?php if($this->db->get_where('student', array('student_id' => $row['student_id']))->row()->sex == 'M') echo "M"; else echo "F";?></td>
										<td class="text-center"><?php echo $this->crud_model->get_name('student', $row['student_id'])?></td>
									<?php 	
										$average = 0;
                    					$exams = $this->crud_model->get_exams();
                    					foreach($exams as $key):
                    					$average += $this->db->get_where('mark', array('student_id' => $row['student_id'], 'year' => $running_year, 'exam_id' => $key['exam_id'],'subject_id' => $subject_id))->row()->labtotal;
                    				?>
										<td class="text-center"><?php echo $this->db->get_where('mark', array('student_id' => $row['student_id'], 'year' => $running_year, 'exam_id' => $key['exam_id'],'subject_id' => $subject_id))->row()->labtotal;?></td>
									<?php endforeach;?>
										<td class="text-center"><?php echo $average/count($exams);?></td>
									</tr>
									<?php endforeach;?>
								</table>
								<table cellpading="0" cellspacing="0" border="0" style="margin: 20px 0; width: 40%;">
									<tr>
										<td><?php echo get_phrase('mens');?></td>
										<td><?php echo $m;?></td>
										<td><?php echo get_phrase('women');?></td>
										<td><?php echo $f;?></td>
									</tr>
								</table>
								<table cellpading="0" cellspacing="0" border="0">
									<tr>
										<td><?php echo get_phrase('professor');?></td>
										<td><?php echo $this->db->get_where('teacher', array('teacher_id' => $this->db->get_where('class', array('class_id' => $class_id))->row()->teacher_id))->row()->name;?></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td></td>
									</tr>
									<tr>
										<td><?php echo get_phrase('signature');?></td>
										<td>_________________________________________</td>
									</tr>
								</table>
							</div>
	