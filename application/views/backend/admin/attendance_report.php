<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<div class="content-w">
        <?php include 'fancy.php';?>
    <div class="header-spacer"></div>
    <div class="conty">
  <div class="os-tabs-w menu-shad">
		<div class="os-tabs-controls">
			<ul class="navs navs-tabs">
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/general_reports/"><i class="picons-thin-icon-thin-0658_cup_place_winner_award_prize_achievement"></i> <span><?php echo get_phrase('classes');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/students_report/"><i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>  <span><?php echo get_phrase('alunos');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links <?php if($page_name == 'attendance_report') echo "ativo";?>" href="<?php echo base_url();?>admin/attendance_report/"><i class="os-icon picons-thin-icon-thin-0023_calendar_month_day_planner_events"></i>  <span><?php echo get_phrase('atendimento');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/marks_report/"><i class="picons-thin-icon-thin-0100_to_do_list_reminder_done"></i>  <span><?php echo get_phrase('marcas_finais');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/tabulation_report/"><i class="picons-thin-icon-thin-0070_paper_role"></i> <span><?php echo get_phrase('folha de classificação');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/accounting_report/"><i class="picons-thin-icon-thin-0406_money_dollar_euro_currency_exchange_cash"></i>  <span><?php echo get_phrase('contabilidade');?></span></a>
				</li>
			 </ul>
		</div>
	</div>
    <div class="content-i">
      <div class="content-box">
            <h5 class="form-header"><?php echo get_phrase('relatório_de_atendimento');?></h5>
            <div class="row">
            <div class="content-i">
              <div class="content-box">
                <?php echo form_open(base_url() . 'admin/attendance_report/check', array('class' => 'form m-b')); ?>
                    <div class="row" style="margin-top: -30px; border-radius: 5px;">
                     <div class="col-sm-3">
                         <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('classe');?></label>
                            <div class="select">
                                <select name="class_id" required="" onchange="get_sections(this.value)">
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php 
                                        $class = $this->db->get('class')->result_array();
                                        foreach ($class as $row): ?>
                                        <option value="<?php echo $row['class_id']; ?>" <?php if($class_id == $row['class_id']) echo "selected";?>><?php echo $row['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-3">
                        <div class="form-group label-floating is-select">
                                    <label class="control-label"><?php echo get_phrase('seção');?></label>
                                    <div class="select">
                                        <?php if($section_id == ""):?>
		  								<select name="section_id" required id="section_holder">
            								<option value=""><?php echo get_phrase('selecionar');?></option>
										</select>
									<?php else:?>
										<select name="section_id" required id="section_holder">
	            							<option value=""><?php echo get_phrase('selecionar');?></option>
            								<?php 
            									$sections = $this->db->get_where('section', array('class_id' => $class_id))->result_array();
            									foreach ($sections as $key):
            								?>
	            								<option value="<?php echo $key['section_id'];?>" <?php if($section_id == $key['section_id']) echo "selected";?>><?php echo $key['name'];?></option>
            								<?php endforeach;?>
										</select>
									<?php endif;?>
                                </div>
                            </div>
                </div>
                 <div class="col-sm-2">
                     <div class="form-group label-floating is-select">
                                    <label class="control-label"><?php echo get_phrase('mês');?></label>
                                    <div class="select">
		  								<select name="month" required id="month" onchange="show_year()">
            								<?php
            for ($i = 1; $i <= 12; $i++):
                if ($i == 1)
                    $m = get_phrase('janeiro');
                else if ($i == 2)
                    $m = get_phrase('fevereiro');
                else if ($i == 3)
                    $m = get_phrase('março');
                else if ($i == 4)
                    $m = get_phrase('abril');
                else if ($i == 5)
                    $m = get_phrase('maio');
                else if ($i == 6)
                    $m = get_phrase('junho');
                else if ($i == 7)
                    $m = get_phrase('julho');
                else if ($i == 8)
                    $m = get_phrase('agosto');
                else if ($i == 9)
                    $m = get_phrase('setembro');
                else if ($i == 10)
                    $m = get_phrase('outubro');
                else if ($i == 11)
                    $m = get_phrase('novembro');
                else if ($i == 12)
                    $m = get_phrase('dezembro');
                ?>
                <option value="<?php echo $i; ?>"<?php if($month == $i) echo 'selected'; ?>><?php echo $m; ?></option>
                <?php endfor; ?>
										</select>
                            </div>
                </div>
                </div>
                <input type="hidden"  name="year" value="<?php echo $running_year;?>">
                    <div class="col-sm-2">
                        <div class="form-group"> 
                          <button class="btn btn-success btn-upper" style="margin-top:20px" type="submit"><span><?php echo get_phrase('obter_relatório');?></span></button>
                        </div>
                    </div>
                    </div>
                <?php echo form_close();?>
                <?php if ($class_id != '' && $section_id != '' && $month != '' && $year != ''): ?>
                
              <div class="row">
              <div class="text-center col-sm-12"><br>
                      <h4><?php echo $this->db->get_where('class', array('class_id' => $class_id))->row()->name;?> - <?php echo get_phrase('seção');?> : <?php echo $this->db->get_where('section', array('section_id' => $section_id))->row()->name;?></h4>
                      <p><b><?php echo get_phrase('year');?>:</b> <?php echo $year;?></p>
                    </div>
                    <hr>
                <div class="col-7 text-left">
                  <h5 class="form-header"><?php 
                     if ($month == 1)  {$mo = get_phrase('janeiro');}
                else if ($month == 2)  {$mo = get_phrase('fevereiro');}
                else if ($month == 3)  {$mo = get_phrase('março');}
                else if ($month == 4)  {$mo = get_phrase('abril');}
                else if ($month == 5)  {$mo = get_phrase('maio');}
                else if ($month == 6)  {$mo = get_phrase('junho');}
                else if ($month == 7)  {$mo = get_phrase('julho');}
                else if ($month == 8)  {$mo = get_phrase('agosto');}
                else if ($month == 9)  {$mo = get_phrase('setembro');}
                else if ($month == 10) {$mo = get_phrase('outubro');}
                else if ($month == 11) {$mo = get_phrase('novembro');}
                else if ($month == 12) {$mo = get_phrase('dezembro');} echo $mo;?></h5></div>
              </div>
              <div class="table-responsive bg-white">
                <table class="table table-sm table-lightborder table-bordered">
                  <thead>
                    <tr class="text-center" height="30px">
                      <td style="background-color: #a01a7a; color: #fff; font-weight: 700; text-align: center;"><?php echo get_phrase('Estudante');?> </td>
                      <?php
                            $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                            for ($i = 1; $i <= $days; $i++) 
                        {
                        ?>
                            <td style="background-color: #a01a7a; color: #fff; font-weight: 700; text-align: center;"><?php echo $i; ?></td>
                        <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $data = array();
                            $Students = $this->db->get_where('enroll', array('class_id' => $class_id, 'year' => $running_year, 'section_id' => $section_id))->result_array();
                            foreach ($Students as $row): ?>
                    <tr>
                      <td nowrap> <img alt="" src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" width="20px" style="border-radius:20px;margin-right:5px;"> <?php echo $this->crud_model->get_name('student', $row['student_id']);?> </td>
                        <?php
                                $status = 0;
                                for ($i = 1; $i <= $days; $i++) 
                                {
                                    $timestamps = strtotime($i . '-' . $month . '-' . $year);
                                    $this->db->group_by('timestamp');
                                    $attendance = $this->db->get_where('attendance', array('section_id' => $section_id, 'class_id' => $class_id, 'year' => $running_year, 'timestamp' => $timestamps, 'student_id' => $row['student_id']))->result_array();
                                    foreach ($attendance as $row1):
                                    $month_dummy = date('d', $row1['timestamp']);
                                    if ($i == $month_dummy)
                                    $status = $row1['status']; 
                                    endforeach;?>
                           <td class="text-center">
                            <?php if ($status == 1) { ?>
                                <div class="status-pilli green" data-title="<?php echo get_phrase('present');?>" data-toggle="tooltip"></div>
                            <?php  } if($status == 2)  { ?>
                                        <div class="status-pilli red" data-title="<?php echo get_phrase('absent');?>" data-toggle="tooltip"></div>
                            <?php  } if($status == 3)  { ?>
                                        <div class="status-pilli yellow" data-title="<?php echo get_phrase('late');?>" data-toggle="tooltip"></div>
                             <?php  } if($status != 1 && $status != 2 && $status != 3)  { ?>
                                    -
                            <?php  } $status =0;?>
                      </td>
                      <?php } ?>
                    <?php endforeach; ?>
                    </tr>                 
                  </tbody>
                </table>
              </div>
            <?php endif;?>
                </div>
          </div>
        </div>
      </div>
      </div>
  </div>
  </div>

    <script type="text/javascript">
       function get_sections(class_id) 
   {
      $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_holder').html(response);
            }
        });
   }
    </script>