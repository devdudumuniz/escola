<div class="content-w">
 <?php include 'fancy.php';?>
 <div class="header-spacer"></div>
	<div class="content-i">
		<div class="content-box">
			<div class="conty">
				<div class="ui-block">
					<div class="ui-block-content">
					    <?php echo form_open(base_url() . 'admin/student/addmission/' , array('enctype' => 'multipart/form-data', 'autocomplete' => 'off'));?>
      						<div class="steps-w">
        						<div class="step-triggers">
          							<a class="step-trigger active" href="#stepContent1"><?php echo get_phrase('detalhes do aluno');?></a>
          							<a class="step-trigger" href="#stepContent2"><?php echo get_phrase('detalhes dos pais');?></a>
          							<a class="step-trigger" href="#stepContent3"><?php echo get_phrase('dados_complementares');?></a>
        						</div>
        						<div class="step-contents">
          							<div class="step-content active" id="stepContent1">
									    <div class="row">									
    										<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
											    <div class="form-group label-floating">
    												<label class="control-label"><?php echo get_phrase('primeiro_nome');?></label>
												    <input class="form-control" name="first_name" type="text" required="">
											    </div>
						    			    </div>							
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('último_nome');?></label>
												    <input class="form-control" name="last_name" type="text" required="">
											    </div>								
						   				    </div>						   	
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group date-time-picker label-floating">
												    <label class="control-label"><?php echo get_phrase('aniversário');?></label>
                                                    <input type='text' class="datepicker-here" data-position="bottom left" data-language='en' name="datetimepicker" data-multiple-dates-separator="/"/>
											    </div>
						    			    </div>
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('email');?></label>
												    <input class="form-control" name="email" type="email">
											    </div>
						    			    </div>							
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('contato');?></label>
												    <input class="form-control" name="phone" type="text">
											    </div>
						   				    </div>	
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">							
    						   					<div class="form-group label-floating is-select">
                            					    <label class="control-label"><?php echo get_phrase('sexo');?></label>
                            					    <div class="select">
                                    					<select name="gender" required="">
                                    					    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    					    <option value="M"><?php echo get_phrase('masculino');?></option>
	                                    				    <option value="F"><?php echo get_phrase('feminino');?></option>
                                					    </select>
	                            				    </div>
                            					</div>	
                        				    </div>					   
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('nome de usuário');?></label>
												    <input class="form-control" name="username" autocomplete="false" required="" type="text" id="user_student">
												    <small><span id="result_student"></span></small>
											    </div>
						   				    </div>								   
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('senha');?></label>
												    <input class="form-control" name="password" required="" autocomplete="false" type="password">
											    </div>
						   				    </div>		
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('endereço');?></label>
												    <input class="form-control" name="address" type="text">
											    </div>
										    </div>							
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('roll');?></label>
												    <input class="form-control" name="roll" type="text">
											    </div>
						   				    </div>						   	
						    			    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating is-select">
	                            				    <label class="control-label"><?php echo get_phrase('classe');?></label>
                            					    <div class="select">
	                                				    <select name="class_id" required="" onchange="get_class_sections(this.value);">
    	                                    				<option value=""><?php echo get_phrase('selecionar');?></option>
                                    					    <?php $classes = $this->db->get('class')->result_array();
    	                  										foreach($classes as $class):
               											    ?>
    	                  										<option value="<?php echo $class['class_id'];?>"><?php echo $class['name'];?></option>
               											    <?php endforeach;?>
                                					    </select>
                            					    </div>
                        					    </div>								
                        				    </div>
                        				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">							
    											<div class="form-group label-floating is-select">
                            					    <label class="control-label"><?php echo get_phrase('seção');?></label>
                            					    <div class="select">
                                    					<select name="section_id" id="section_selector_holder">
	                                    				    <option value=""><?php echo get_phrase('selecionar');?></option>
                                					    </select>
	                            				    </div>
                        					    </div>	
                        				    </div>		
                        				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">								
    											<div class="form-group label-floating is-select">
	                            				    <label class="control-label"><?php echo get_phrase('transporte');?></label>
                            					    <div class="select">
    	                                				<select name="transport_id">
                                    					    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    					    <?php 
    											                $bus = $this->db->get('transport')->result_array();
                  											    foreach($bus as $trans):
               											    ?>
    	                  										<option value="<?php echo $trans['transport_id'];?>"><?php echo $trans['route_name'];?></option>
               											    <?php endforeach;?>
                                					    </select>
                            					    </div>
                        					    </div>							
                        				    </div>
                        				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">							
    											<div class="form-group label-floating is-select">
	                            				    <label class="control-label"><?php echo get_phrase('sala de aula');?></label>
                            					    <div class="select">
    	                                				<select name="dormitory_id">
                                    					    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    					    <?php 
    	                  										$classroom = $this->db->get('dormitory')->result_array();
                  											    foreach($classroom as $room):
               											    ?>
    	                  										<option value="<?php echo $room['dormitory_id'];?>"><?php echo $room['name'];?></option>
               											    <?php endforeach;?>
                                					    </select>
                            					    </div>
                        					    </div>
										    </div>
										    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">								
    											<div class="form-group">
												    <label class="control-label"><?php echo get_phrase('foto');?></label>
												    <input class="form-control" placeholder="" name="userfile" type="file">
											    </div>
						    			    </div>
									    </div>
                					    <div class="form-buttons-w text-right">
                  						    <a class="btn btn-rounded btn-success btn-lg step-trigger-btn" href="#stepContent2"><?php echo get_phrase('próximo');?></a>
            					        </div>			
          					        </div>
          					        <div class="step-content" id="stepContent2">
    									<div class="row">
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
    											<div class="description-toggle">
												    <div class="description-toggle-content">
    													<div class="h6"><?php echo get_phrase('admissão de novos pais');?></div>
													    <p><?php echo get_phrase('nova mensagem de admissão dos pais');?></p>
												    </div>
												    <div class="togglebutton">
    													<label><input type="checkbox" id="check" value="1" name="account"></label>
												    </div>
											    </div>
										    </div>
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12" id="initial">							
    						   					<div class="form-group label-floating is-select">
                            					    <label class="control-label"><?php echo get_phrase('selecionar pais');?></label>
                            					    <div class="select">
                                    					<select name="parent_id">
                                    					    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    					    <?php $parents = $this->db->get('parent')->result_array();
                  												foreach($parents as $parent):
              											    ?>
               											        <option value="<?php echo $parent['parent_id'];?>"><?php echo $parent['first_name']." ".$parent['last_name'];?></option>
               											    <?php endforeach;?>
                                					    </select>
	                            				    </div>
                        					    </div>	
                        				    </div>
                        				</div>
                        				<div class="row" id="new_parent">
										    <div class="ui-block-title" style="margin-bottom:10px;">
    											<h6 class="title"><?php echo get_phrase('detalhes dos pais');?></h6>
										    </div>       	
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
											    <div class="form-group label-floating">
    												<label class="control-label"><?php echo get_phrase('primeiro_nome');?></label>
												    <input class="form-control" name="parent_first_name" type="text">
											    </div>
						    			    </div>
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('último_nome');?></label>
												    <input class="form-control" name="parent_last_name" type="text" >
											    </div>
						   				    </div>
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">							
    						   					<div class="form-group label-floating is-select">
                            					    <label class="control-label"><?php echo get_phrase('sexo');?></label>
                            					    <div class="select">
                                    					<select name="parent_gender">
                                    					    <option value=""><?php echo get_phrase('selecionar');?></option>
                                    					    <option value="M"><?php echo get_phrase('masculino');?></option>
	                                    				    <option value="F"><?php echo get_phrase('feminino');?></option>
                                					    </select>
	                            				    </div>
                        					    </div>	
                        				    </div>
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">					
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('email');?></label>
												    <input class="form-control" name="parent_email" type="email">
											    </div>
						    			    </div>
						    			    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">					
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('nome de usuário');?></label>
												    <input class="form-control" name="parent_username" autocomplete="false" type="text" id="parent_username">
												    <small><span id="result"></span></small>
											    </div>
						    			    </div>
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">					
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('senha');?></label>
												    <input class="form-control" name="parent_password" autocomplete="false" type="password">
											    </div>
						    			    </div>
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('contato');?></label>
												    <input class="form-control" name="parent_phone" type="text">
    											</div>
						   				    </div>
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">	
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('identificação');?></label>
												    <input class="form-control" name="parent_idcard" type="text" >
											    </div>		
						    			    </div>
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">							
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('profissão');?></label>
												    <input class="form-control" name="parent_profession" type="text">
											    </div>
						   				    </div>
						   				    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">	
    							   				<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('endereço');?></label>
												    <input class="form-control" name="parent_address" type="text">
											    </div>			
						    			    </div>							
    										<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
											    <div class="form-group label-floating">
    												<label class="control-label"><?php echo get_phrase('telefone de casa');?></label>
												    <input class="form-control" name="parent_home_phone" type="text">
											    </div>
						   				    </div>
    										<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
											    <div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('empresa que trabalha');?></label>
												    <input class="form-control" name="parent_business" type="text">
											    </div>						   
						    			    </div>
										    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
    											<div class="form-group label-floating">
												    <label class="control-label"><?php echo get_phrase('telefonque funciona');?></label>
												    <input class="form-control" name="parent_business_phone" type="text">
											    </div>
						   				    </div>
						   			    </div>
            				            <div class="form-buttons-w text-right">
              					            <a class="btn btn-rounded btn-success btn-lg step-trigger-btn" href="#stepContent3"><?php echo get_phrase('próximo');?></a>
            				            </div>
          				            </div>
          				            <div class="step-content" id="stepContent3">
							            <div class="row">					
						   		            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('condições ou doenças');?></label>
										            <input class="form-control" name="diseases" type="text">
									            </div>
						    	            </div>
								            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('alergias');?></label>
										            <input class="form-control" name="allergies" type="text" >
									            </div>
						   		            </div>						   
						   		            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">					
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('médico que acompanha');?></label>
										            <input class="form-control" name="doctor" type="text" >
									            </div>
						    	            </div>
								            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('número do médico');?></label>
										            <input class="form-control" name="doctor_phone" type="text">
									            </div>
						   		            </div>
						   		            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">					
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('pessoa_atorizada');?></label>
										            <input class="form-control" name="auth_person" type="text" >
									            </div>
						    	            </div>						   
						   		            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('numero da pessoa autorizada');?></label>
										            <input class="form-control" name="auth_phone" type="text">
									            </div>
						   		            </div>						   
						   		            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
									            <div class="form-group label-floating">
										            <label class="control-label"><?php echo get_phrase('notas');?>:</label>
										            <textarea class="form-control" name="note"></textarea>
									            </div>
								            </div>	
							            </div>
                    	                <div class="form-buttons-w text-right">
                        		            <button class="btn btn-rounded btn-success btn-lg" type="submit" id="sub_form"><?php echo get_phrase('registrar');?></button>
                		                </div>
            		                </div>
        		            </div>
        		        </div>
        		        <?php echo form_close();?>  
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<script>
    $(document).ready(function(){         
      var query;          
      $("#user_student").keyup(function(e){
             query = $("#user_student").val();
             $("#result_student").queue(function(n) {                     
                        $.ajax({
                              type: "POST",
                              url: '<?php echo base_url();?>register/search_user',
                              data: "c="+query,
                              dataType: "html",
                              error: function(){
                                    alert("¡Error!");
                              },
                              success: function(data)
                              { 
                                if (data == "success") 
                                {            
                                    texto = "<b style='color:#ff214f'><?php echo get_phrase('already_exist');?></b>"; 
                                    $("#result_student").html(texto);
                                    $('#sub_form').attr('disabled','disabled');
                                }
                                else { 
                                    texto = ""; 
                                    $("#result_student").html(texto);
                                    $('#sub_form').removeAttr('disabled');
                                }
                                n();
                              }
                  });                           
             });                       
      });                       
});
</script>
<script type="text/javascript">
$(document).ready(function(){         
      var query;          
      $("#parent_username").keyup(function(e){
             query = $("#parent_username").val();
             $("#result").queue(function(n) {                     
                        $.ajax({
                              type: "POST",
                              url: '<?php echo base_url();?>register/search_user',
                              data: "c="+query,
                              dataType: "html",
                              error: function(){
                                    alert("¡Error!");
                              },
                              success: function(data)
                              { 
                                if (data == "success") 
                                {            
                                    texto = "<b style='color:#ff214f'><?php echo get_phrase('already_exist');?></b>"; 
                                    $("#result").html(texto);
                                    $('#sub_form').attr('disabled','disabled');
                                }
                                else { 
                                    texto = ""; 
                                    $("#result").html(texto);
                                    $('#sub_form').removeAttr('disabled');
                                }
                                n();
                              }
                  });                           
             });                       
      });                       
});
</script>
<script type="text/javascript">
function get_class_sections(class_id) 
    {
        $.ajax({
            url: '<?php echo base_url();?>admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });
    }
	 $('#check').click(function () {
        if ($('#check').is(':checked') == true) {
             $("#new_parent").show(500);
             $("#initial").hide(500);
      }else{
        $("#new_parent").hide(500);
        $("#initial").show(500);
      }
    });
	$("#new_parent").hide();
</script>