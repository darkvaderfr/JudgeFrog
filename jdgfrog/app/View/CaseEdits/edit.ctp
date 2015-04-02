<?php

	/*
	*	Page: 
	*/
	$this->layout = 'admin_panel_layout';

?>
<?php// debug($case); ?>

<?php 
	echo $this->Form->create('DataInProgress');
	echo $this->Form->input('CaseNam', 		array(
												'label' => 'Case Name', 		
												'default' => $case['0']['DataInProgress']['CaseNam']));
	echo $this->Form->input('CaseNum', 		array(
												'label' => 'Case Number', 		
												'default' => $case['0']['DataInProgress']['CaseNum']));
	echo $this->Form->input('NumDef', 		array(
												'label'=> 'Number of Defendants', 		
												'default' => $case['0']['DataInProgress']['NumDef']));
	echo $this->Form->input('JudgeName', 	array(
												'label'=> 'Judge Name', 		
												'default' => $case['0']['DataInProgress']['JudgeName']));
	echo $this->Form->input('JudgeRace', 	array(
												'label' => 'Judge Race', 		
												'default' => $case['0']['DataInProgress']['JudgeRace']));
	echo $this->Form->input('JudgeGen', 	array(
												'label' => 'Judge Gen',
												'default' => $case['0']['DataInProgress']['JudgeGen'])); 
	echo $this->Form->input('JudgeTenure', 	array(
												'label' => 'Judge Tenure', 		
												'default' => $case['0']['DataInProgress']['JudgeTenure']));
	echo $this->Form->input('JudgeApptBy', 	array(
												'label' => 'Judge Appointed By', 		
												'default' => $case['0']['DataInProgress']['JudgeApptBy']));
	echo $this->Form->input('FedDistrictLoc', array(
												'label' => 'Federal District Location', 		
												'default' => $case['0']['DataInProgress']['FedDistrictLoc']));
	echo $this->Form->input('FedDistrictNum', array(
												'label'=> 'FedDistrictNum', 		
												'default' => $case['0']['DataInProgress']['FedDistrictNum'], 		
												'type' => 'text'));
	echo $this->Form->input('State', 			array(
												'label' => 'State', 		
												'default' => $case['0']['DataInProgress']['State']));
	echo $this->Form->input('CaseSummary', 	array(
												'label' => 'Case Summary', 		
												'default' => $case['0']['DataInProgress']['CaseSummary'], 		
												'type' => 'textarea'));
	echo $this->Form->input('LaborTraf', 	array(
												'label' => 'Labor Trafficking',
												'default' => $case['0']['DataInProgress']['LaborTraf']));
	echo $this->Form->input('AdultSexTraf', array(
												'label' => 'Adult Sex Trafficking',
												'default' => $case['0']['DataInProgress']['AdultSexTraf']));
	echo $this->Form->input('MinorSexTraf', array(
												'label' => 'Minor Sex Trafficking',
												'default' => $case['0']['DataInProgress']['MinorSexTraf']));
	echo $this->Form->input('NumVic', 		array(
												'label' => 'Total Number of Victims',
												'default' => $case['0']['DataInProgress']['NumVic']));
	echo $this->Form->input('NumVicMinor', 	array(
												'label' => 'Number of Minor Victims',
												'default' => $case['0']['DataInProgress']['NumVicMinor']));
	echo $this->Form->input('NumVicForeign', 	array(
												'label' => 'Number of Foreign Victims',
												'default' => $case['0']['DataInProgress']['NumVicForeign']));
	echo $this->Form->input('NumVicFemale', 	array(
													'label' => 'Number of Female Victims',
													'default' => $case['0']['DataInProgress']['NumVicFemale'])); ?>											

Defendants:
-----------------------------------------

<?php $i = 0;
	foreach ($case as $case) { 
		 ?>
		
<?php 	echo 'Defendant '.++$i; ?>
<?php	echo $case['DataInProgress']['DefLast'];
		echo ', ';
		echo $case['DataInProgress']['DefFirst']; ?>
<?php 	echo $this->Html->link('Edit This Defendant', 
							'/admin/cases/edit/defendant/'.$case['DataInProgress']['DefLast'].'|'.$case['DataInProgress']['DefFirst'].'|'.$case['DataInProgress']['CaseNum'], 
							array(
								'controller' => 'CaseEdits', 'action' => 'editDefendant')); ?>
<?php 	//echo $this->Form->input(); ?>

<?php } ?>
<?php //echo $this->Form->submit('Submit', array('confirm' => 'Submit this case for review?')); ?>
<?php echo $this->Form->end('Submit'); ?>