<div class="content-w">
 <?php include 'fancy.php';?>
 <div class="header-spacer"></div>
    <div class="conty"  style="background-color:#fff;">
        <div class="full-chat-w">
            <div class="full-chat-i">
                <div class="full-chat-left support-tickets">          
				    <div class="tab-content">
                        <div class="os-tabs-w bg-white">
                            <ul class="navs navs-tabs upper centered">
                                <li class="navs-item">
                                    <a class="navs-links <?php if($page_name == 'message' && $message_inner_page_name != 'message_new');?>" href="<?php echo base_url();?>teacher/message/" style="color:#000"><i class="os-icon picons-thin-icon-thin-0306_chat_message_discussion_bubble_conversation" style="color:#7807D6"></i><span><?php echo get_phrase('bate-papo');?></span></a>
                                </li>
                                <li class="navs-item">
                                    <a class="navs-links <?php if($message_inner_page_name == 'message_new') echo "ativo";?>" href="<?php echo base_url();?>teacher/message/message_new/" style="color:#000"><i class="os-icon picons-thin-icon-thin-0001_compose_write_pencil_new" style="color:#7807D6"></i><span><?php echo get_phrase('escrever');?></span></a>
                                </li>
                                <li class="navs-item">
                                    <a class="navs-links <?php if($page_name == 'group') echo "ativo";?>" href="<?php echo base_url();?>teacher/group/" style="color:#000"><i class="os-icon picons-thin-icon-thin-0719_group_users_circle" style="color:#7807D6"></i><span><?php echo get_phrase('grupos');?></span></a>
                                </li>
                            </ul>
                        </div>
          				<div class="tab-pane active" id="chats">
                    		<div class="user-list">
                    		 <?php
                                $flag = 0;
                                $group_messages = $this->db->get('group_message_thread')->result_array();
                                foreach ($group_messages as $row):
                                $members = json_decode($row['members']);
                                if (in_array($this->session->userdata('login_type').'_'.$this->session->userdata('login_user_id'), $members)):
                                $flag++;
                            ?>
                    			<a href="<?php echo base_url('teacher/group/group_message_read/'.$row['group_message_thread_code']); ?>">
                      				<div class="user-w box <?php if (isset($current_message_thread_code) && $current_message_thread_code == $row['group_message_thread_code']) echo 'active'; ?>">
                        				<div class="avatar with-status status-green">
	                          				<div class="circle purple"><?php echo strtoupper($row['group_name'][0]); ?></div>
                        				</div>
                        				<div class="user-info">
                          					<div class="user-name" title="<?php echo $row['group_name'] ?>">
                            				    <?php echo $row['group_name'] ?>
                          					</div>
                        				</div>
                      				</div>
                      			</a>
                      	            <?php endif; ?>
                    			<?php endforeach;?>
          					</div>
          				</div>
                  	</div>
          		</div>
          		<?php include $message_inner_page_name . '.php'; ?>
            </div>
        </div>
    </div>
</div>