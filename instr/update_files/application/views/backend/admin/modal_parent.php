<?php 
    $parents = $this->db->get_where('parent' , array('parent_id' => $param2))->result_array();
    foreach($parents as $row):
?>
      <div class="modal-body">
        <div class="modal-header" style="background-color:#00579c">
            <h6 class="title" style="color:white"><?php echo get_phrase('atualizar informações');?></h6>
        </div>
        <div class="ui-block-content">
              <?php echo form_open(base_url() . 'admin/parents/update/'.$row['parent_id'], array('enctype' => 'multipart/form-data'));?>
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="form-group">
                                    <label class="control-label"><?php echo get_phrase('foto');?></label>
                                    <input name="userfile" accept="image/x-png,image/gif,image/jpeg" id="imgpre" type="file"/>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('primeiro_nome');?></label>
                                    <input class="form-control" type="text" name="first_name" required="" value="<?php echo $row['first_name'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('último_nome');?></label>
                                    <input class="form-control" type="text" required="" name="last_name" value="<?php echo $row['last_name'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('nome de usuário');?></label>
                                    <input class="form-control" type="text" name="username" required="" value="<?php echo $row['username'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('senha');?></label>
                                    <input class="form-control" type="text" name="password">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('email');?></label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('empresa que trabalha');?></label>
                                    <input class="form-control" type="text" name="business"  value="<?php echo $row['business'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('telefonque funciona');?></label>
                                    <input class="form-control" type="text" name="business_phone"  value="<?php echo $row['business_phone'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('contato');?></label>
                                    <input class="form-control" placeholder="" name="phone" type="text" value="<?php echo $row['phone'];?>">
                                </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('telefone de casa');?></label>
                                    <input class="form-control" type="text" name="home_phone"  value="<?php echo $row['home_phone'];?>">
                                </div>
                            </div>
                            
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><?php echo get_phrase('endereço');?></label>
                                    <input class="form-control" placeholder="" name="address" type="text" value="<?php echo $row['address'];?>">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button class="btn btn-rounded btn-success btn-lg " type="submit"><?php echo get_phrase('atualizar');?></button>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
    <?php endforeach;?>
 