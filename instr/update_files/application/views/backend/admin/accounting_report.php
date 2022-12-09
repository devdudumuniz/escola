<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description;?>
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
				  <a class="navs-links" href="<?php echo base_url();?>admin/attendance_report/"><i class="os-icon picons-thin-icon-thin-0023_calendar_month_day_planner_events"></i>  <span><?php echo get_phrase('atendimento');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/marks_report/"><i class="picons-thin-icon-thin-0100_to_do_list_reminder_done"></i>  <span><?php echo get_phrase('marcas_finais');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" href="<?php echo base_url();?>admin/tabulation_report/"><i class="picons-thin-icon-thin-0070_paper_role"></i> <span><?php echo get_phrase('folha de classificação');?></span></a>
				</li>
				<li class="navs-item">
				  <a class="navs-links <?php if($page_name == 'accounting_report') echo "ativo";?>" href="<?php echo base_url();?>admin/accounting_report/"><i class="picons-thin-icon-thin-0406_money_dollar_euro_currency_exchange_cash"></i>  <span><?php echo get_phrase('contabilidade');?></span></a>
				</li>
			 </ul>
		</div>
	</div>
  	<div class="content-i">
	    <div class="content-box">      		
	  		<h5 class="form-header"><?php echo get_phrase('relatório de contabilidade');?></h5><hr>
	  		<div class="row  bg-white">
				<div class="col-sm-12">
					<canvas id="myChart" style="width: auto; min-height:600px;"></canvas>
				</div>
	      	</div>
    	</div>
   	</div>
</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
<script>

new Chart(document.getElementById("myChart"), {
  type: 'line',
  data: {
    labels: ["<?php echo get_phrase('janeiro');?>","<?php echo get_phrase('fevereiro');?>","<?php echo get_phrase('março');?>","<?php echo get_phrase('abril');?>","<?php echo get_phrase('maio');?>","<?php echo get_phrase('junho');?>","<?php echo get_phrase('julho');?>","<?php echo get_phrase('agosto');?>","<?php echo get_phrase('setembro');?>","<?php echo get_phrase('outubro');?>","<?php echo get_phrase('novembro');?>","<?php echo get_phrase('dezembro');?>"],
    datasets: [{ 
        data: [<?php echo $this->crud_model->income('Jan');?>, <?php echo $this->crud_model->income('Feb');?>,<?php echo $this->crud_model->income('Mar');?>, <?php echo $this->crud_model->income('Apr');?>,<?php echo $this->crud_model->income('May');?>, <?php echo $this->crud_model->income('Jun');?>,<?php echo $this->crud_model->income('Jul');?>,<?php echo $this->crud_model->income('Aug');?>,<?php echo $this->crud_model->income('Sep');?>,<?php echo $this->crud_model->income('Oct');?>,<?php echo $this->crud_model->income('Nov');?>,<?php echo $this->crud_model->income('Dec');?>],
        label: "<?php echo get_phrase('renda');?>",
        borderColor: "#3e95cd",
        backgroundColor: "#3e95cd",
        fill: false
      }, { 
        data: [<?php echo $this->crud_model->expense('Jan');?>, <?php echo $this->crud_model->expense('Feb');?>,<?php echo $this->crud_model->expense('Mar');?>, <?php echo $this->crud_model->expense('Apr');?>,<?php echo $this->crud_model->expense('May');?>, <?php echo $this->crud_model->expense('Jun');?>,<?php echo $this->crud_model->expense('Jul');?>,<?php echo $this->crud_model->expense('Aug');?>,<?php echo $this->crud_model->expense('Sep');?>,<?php echo $this->crud_model->expense('Oct');?>,<?php echo $this->crud_model->expense('Nov');?>,<?php echo $this->crud_model->expense('Dec');?>],
        label: "<?php echo get_phrase('despesa');?>",
        borderColor: "#8e5ea2",
        backgroundColor: "#8e5ea2",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: '<?php echo get_phrase('relatório de contabilidade');?> <?php echo get_phrase('ano corrente');?> <?php echo $this->db->get_where('settings', array('type' => 'running_year'))->row()->description;?>'
    }
  }
});
</script>