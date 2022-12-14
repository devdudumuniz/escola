<?php 
$edit_data = $this->db->get_where('horarios_examenes' , array('horario_id' => $param2) )->result_array();
 foreach($edit_data as $row):?>
    <div class="modal-body">
        <div class="ui-block-title" style="background-color:#00579c">
          <h6 class="title" style="color:white"><?php echo get_phrase('update_routine');?></h6>
        </div>
        <div class="ui-block-content">
          <?php echo form_open(base_url() . 'admin/exam_routine/update/'.$row['horario_id'] , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
              <div class="row">
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('classe');?></label>
                            <div class="select">
                                <select name="class_id" disabled>
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php $cl = $this->db->get('class')->result_array();
                                        foreach($cl as $row2): ?>
                                        <option value="<?php echo $row2['class_id'];?>" <?php if($row['class_id']==$row2['class_id'])echo 'selected';?>><?php echo $row2['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                  <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('seção');?></label>
                            <div class="select">
                                <select name="section_id" disabled>
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                     <?php $sec = $this->db->get_where('section', array('class_id' => $row['class_id']))->result_array();
                                        foreach($sec as $row3): ?>
                                        <option value="<?php echo $row3['section_id'];?>" <?php if($row['section_id'] == $row3['section_id'])echo 'selected';?>><?php echo $row3['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('assunto');?></label>
                            <div class="select">
                                <select name="subject_id" disabled>
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php $sec = $this->db->get_where('subject', array('class_id' => $row['class_id']))->result_array();
                                     foreach($sec as $row4): ?>
                                        <option value="<?php echo $row4['subject_id'];?>" <?php if($row['subject_id'] == $row4['subject_id'])echo 'selected';?>><?php echo $row4['name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('dia');?></label>
                            <div class="select">
                                <select name="day" required="">
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php
                                    $days = $this->db->get_where('academic_settings', array('type' => 'routine'))->row()->description; 
                                    if($days == 1):?>
                                        <option value="Sunday" <?php if($row['day']== "Sunday") echo "selected";?>><?php echo get_phrase('domingo');?></option>
                                    <?php endif;?>
                                    <option value="Monday" <?php if($row['day']== "Monday") echo "selected";?>><?php echo get_phrase ('segunda-feira');?></option>
                                    <option value="Tuesday" <?php if($row['day']== "Tuesday") echo "selected";?>><?php echo get_phrase ('terça-feira');?></option>
                                    <option value="Wednesday" <?php if($row['day']== "Wednesday") echo "selected";?>><?php echo get_phrase ('quarta -feira');?></option>
                                    <option value="Thursday" <?php if($row['day']== "Thursday") echo "selected";?>><?php echo get_phrase('quinta-feira');?></option>
                                    <option value="Friday" <?php if($row['day']== "Friday") echo "selected";?>><?php echo get_phrase('sexta-feira');?></option>
                                    <?php if($days == 1):?>
                                        <option value="Saturday" <?php if($row['day']== "Saturday") echo "selected";?>><?php echo get_phrase('sábado');?></option>
                                    <?php endif;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12"><legend><span style="font-size:15px;"><?php echo get_phrase('iniciar');?></span></legend></div>
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                         <?php 
                            if($row['time_start'] < 13)
                            {
                                $time_start     =   $row['time_start'];
                                $time_start_min =   $row['time_start_min'];
                                $starting_ampm  =   1;
                            }
                            else if($row['time_start'] > 12)
                            {
                                $time_start     =   $row['time_start'] - 12;
                                $time_start_min =   $row['time_start_min'];
                                $starting_ampm  =   2;
                            }
                        ?>
                            <label class="control-label"><?php echo get_phrase ('hora');?></label>
                            <div class="select">
                                <select name="time_start" required="">
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php for($i = 1; $i <= 24 ; $i++):?>
                                        <option value="<?php echo $i;?>" <?php if($i ==$time_start)echo "selected";?>><?php echo $i;?></option>
                                    <?php endfor;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('minutos');?></label>
                            <div class="select">
                                <select name="time_start_min" required="">
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php for($i = 0; $i <= 11 ; $i++):?>
                                        <option value="<?php $n = $i * 5; if($n < 10) echo '0'.$n; else echo $n;?>" <?php if (($i * 5) == $time_start_min) echo 'selected';?>><?php $n = $i * 5; if($n < 10) echo '0'.$n; else echo $n;?></option>
                                    <?php endfor;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('tempo');?></label>
                            <div class="select">
                                <select name="starting_ampm" required="">
                                    <option value="AM" <?php if($starting_ampm   ==  'AM') echo "selected";?>>AM</option>
                                    <option value="PM" <?php if($starting_ampm   ==  'PM') echo "selected";?>>PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php 
                            if($row['time_end'] < 13)
                            {
                                $time_end       =   $row['time_end'];
                                $time_end_min   =   $row['time_end_min'];
                            }
                            else if($row['time_end'] > 12)
                            {
                                $time_end       =   $row['time_end'] - 12;
                                $time_end_min   =   $row['time_end_min'];
                            }
                    ?>
                    <div class="col-sm-12"><legend><span style="font-size:15px;"><?php echo get_phrase('iniciar');?></span></legend></div>
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase ('hora');?></label>
                            <div class="select">
                                <select name="time_end" required="">
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php for($i = 1; $i <= 24 ; $i++):?>
                                        <option value="<?php echo $i;?>" <?php if($i ==$time_end) echo "selected";?>><?php echo $i;?></option>
                                    <?php endfor;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('minutos');?></label>
                            <div class="select">
                                <select name="time_end_min" required="">
                                    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    <?php for($i = 0; $i <= 11 ; $i++):?>
                                        <option value="<?php $n = $i * 5; if($n < 10) echo '0'.$n; else echo $n;?>" <?php if (($i * 5) == $time_end_min) echo 'selected';?>><?php $n = $i * 5; if($n < 10) echo '0'.$n; else echo $n;?></option>
                                    <?php endfor;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group label-floating is-select">
                            <label class="control-label"><?php echo get_phrase('tempo');?></label>
                            <div class="select">
                                <select name="ending_ampm" required="">
                                    <option value="AM" <?php if($ending_ampm    ==  '1') echo "selected";?>>AM</option>
                                    <option value="PM" <?php if($ending_ampm    ==  '2') echo "selected";?>>PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="form-buttons-w text-right">
                <center><button class="btn btn-rounded btn-success" type="submit"><?php echo get_phrase('atualizar');?></button></center>
              </div>
            <?php echo form_close();?>        
        </div>
      </div>
      <?php endforeach;?>