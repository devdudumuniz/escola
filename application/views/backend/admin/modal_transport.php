<?php  $edit_data = $this->db->get_where('transport' , array('transport_id' => $param2) )->result_array();
        foreach($edit_data as $row):
?>    
         <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white"><?php echo get_phrase('update_transport');?></h6>
        </div>
        <div class="ui-block-content">
              <?php echo form_open(base_url() . 'admin/school_bus/update/'.$row['transport_id'], array('enctype' => 'multipart/form-data')); ?>
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('nome');?></label>
                                    <input class="form-control" type="text" name="route_name" value="<?php echo $row['route_name'];?>" required="">
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('rota');?></label>
                                    <input class="form-control" type="text" name="route" value="<?php echo $row['route'];?>" required="">
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('id do onibus');?></label>
                                    <input class="form-control" type="text" name="number_of_vehicle" value="<?php echo $row['number_of_vehicle'];?>" required="">
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('nome do motorista');?></label>
                                    <input class="form-control" type="text" name="driver_name" value="<?php echo $row['driver_name'];?>" required="">
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('telefone do motorista');?></label>
                                    <input class="form-control" type="text" name="driver_phone" value="<?php echo $row['driver_phone'];?>" required="">
                                </div>
                            </div>
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('preço');?></label>
                                    <input class="form-control" type="text" name="route_fare" value="<?php echo $row['route_fare'];?>" required="">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button class="btn btn-rounded btn-success" type="submit"><?php echo get_phrase('atualizar');?></button>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
<?php endforeach; ?>