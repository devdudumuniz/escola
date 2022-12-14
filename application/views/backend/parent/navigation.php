<div class="fixed-sidebar">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
    <a href="<?php echo base_url();?>parents/panel/" class="logo">
      <div class="img-wrap">
        <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'icon_white'))->row()->description;?>">
      </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li>
          <a href="javascript:void(0);" class="js-sidebar-open">
            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/panel/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('dashboard');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0045_home_house"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/message/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('mensagens');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
            </div>
          </a>
        </li>     
        <li>
          <a href="<?php echo base_url();?>parents/teachers/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('professores');?>">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
            </div>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/class_routine/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('rotina de classe');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
            </div>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/attendance_report/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('atendimento');?>">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0023_calendar_month_day_planner_events"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/library/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('biblioteca');?>">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0017_office_archive"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/marks/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('marcas');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
            </div>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/subjects/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('acad??mico');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
            </div>
          </a>
        </li>  
        <li>
          <a href="<?php echo base_url();?>parents/request/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('permiss??es');?>">
            <div class="left-menu-icon">
              <i class="os-icon os-icon picons-thin-icon-thin-0015_fountain_pen"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/student_report/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('comportamento');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
            </div>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>parents/noticeboard/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('novidades');?>">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0010_newspaper_reading_news"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/calendar/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('calend??rio');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0021_calendar_month_day_planner"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/invoice/" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo get_phrase('pagamentos');?>">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0426_money_payment_dollars_coins_cash"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
    <a href="<?php echo base_url();?>parents/panel/" class="logo">
      <div class="img-wrap">
        <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'icon_white'))->row()->description;?>">
      </div>
      <div class="title-block">
        <h6 class="logo-title"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;?></h6>
      </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li>
          <a href="javascript:void(0);" class="js-sidebar-open">
            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
            <span class="left-menu-title"><?php echo get_phrase('minimize_menu');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/panel/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0045_home_house"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('dashboard');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/message/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('mensagens');?></span>
          </a>
        </li>     
        <li>
          <a href="<?php echo base_url();?>parents/teachers/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('professores');?></span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/class_routine/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('rotina de classe');?></span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/attendance_report/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0023_calendar_month_day_planner_events"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('atendimento');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/library/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0017_office_archive"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('biblioteca');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/marks/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('marcas');?></span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/subjects/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('acad??mico');?></span>
          </a>
        </li>  
        <li>
          <a href="<?php echo base_url();?>parents/request/">
            <div class="left-menu-icon">
              <i class="os-icon os-icon picons-thin-icon-thin-0015_fountain_pen"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('permiss??es');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/student_report/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('comportamento');?></span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>parents/noticeboard/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0010_newspaper_reading_news"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('novidades');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/calendar/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0021_calendar_month_day_planner"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('calend??rio');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/invoice/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0426_money_payment_dollars_coins_cash"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('pagamentos');?></span>
          </a>
        </li>
        <br><br>
        <li></li>
      </ul>
    </div>
  </div>
</div>

<div class="fixed-sidebar fixed-sidebar-responsive">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
    <a href="<?php echo base_url();?>parents/panel/" class="logo js-sidebar-open">
      <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'icon_white'))->row()->description;?>">
    </a>
  </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
    <a href="<?php echo base_url();?>parents/panel/" class="logo">
      <div class="img-wrap">
        <img src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'icon_white'))->row()->description;?>">
      </div>
      <div class="title-block">
        <h6 class="logo-title"><?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;?></h6>
      </div>
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li>
          <a href="#" class="js-sidebar-open">
            <i class="left-menu-icon picons-thin-icon-thin-0069a_menu_hambuger"></i>
            <span class="left-menu-title"><?php echo get_phrase('minimize_menu');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/panel/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0045_home_house"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('dashboard');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/message/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0322_mail_post_box"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('mensagens');?></span>
          </a>
        </li>     
        <li>
          <a href="<?php echo base_url();?>parents/teachers/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('professores');?></span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/class_routine/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0029_time_watch_clock_wall"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('rotina de classe');?></span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/attendance_report/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0023_calendar_month_day_planner_events"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('atendimento');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/library/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0017_office_archive"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('biblioteca');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/marks/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('marcas');?></span>
          </a>
        </li> 
        <li>
          <a href="<?php echo base_url();?>parents/subjects/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0680_pencil_ruller_drawing"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('acad??mico');?></span>
          </a>
        </li>  
        <li>
          <a href="<?php echo base_url();?>parents/request/">
            <div class="left-menu-icon">
              <i class="os-icon os-icon picons-thin-icon-thin-0015_fountain_pen"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('permiss??es');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/student_report/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0389_gavel_hammer_law_judge_court"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('comportamento');?></span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>parents/noticeboard/">
            <div class="left-menu-icon">
              <i class="os-icon picons-thin-icon-thin-0010_newspaper_reading_news"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('novidades');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/calendar/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0021_calendar_month_day_planner"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('calend??rio');?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>parents/invoice/">
            <div class="left-menu-icon">
              <i class="picons-thin-icon-thin-0426_money_payment_dollars_coins_cash"></i>
            </div>
            <span class="left-menu-title"><?php echo get_phrase('pagamentos');?></span>
          </a>
        </li>
        <br><br>
        <li></li>
      </ul>
    </div>
  </div>
</div>