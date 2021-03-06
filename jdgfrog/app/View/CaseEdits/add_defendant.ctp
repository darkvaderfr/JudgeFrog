<?php
		$this->layout = 'admin_panel_layout';
		$this->set('title', 'Add Defendant - Admin Panel | Human Trafficking Data');
		$this->set('active', 'edit');
?>
<!--search start here-->
<div class="contact">
		<div class="container">
			<div class="contact-main">	
				<div class="case_top_bar">
					<h3 class="page_title">Defendant &amp; Statutes Details | 
						<span style="color:#888; font-size:23px;"><?php echo $case['DataInProgress']['CaseNam']; ?></span>
					</h3>
				</div>
				<div class="col-md-12">
				<div class="col-md-6 case_creation_form" id="form_style" style="float:inherit">
						<h2 id="caseInfoFS_Title"><?php echo $case['DataInProgress']['CaseNam'];?>'s Details</h2>
						<fieldset id="caseInfoFS">
							<?php echo $this->Form->create('DataInProgress'); ?>


							<?php	echo $this->Form->input('DefLast', 		
															array( 
																'label' => 'Defendant Last Name*'));
									echo $this->Form->input('DefFirst', 		
																array(
																	'label' => 'Defendant First Name'));
									// customize for male/female with if statement
									echo $this->Form->input('DefGender', array( 'label' => '', 'empty' => 'Gender', 'options' => array('0' => 'Male', '1' => 'Female')));
									echo $this->Form->input('DefBirthdate',	array('label' => 'Defendant Birthdate', 'type' => 'text', 'placeholder' => 'yyyy'));
									echo $this->Form->input('DefRace', array( 'label' => '', 'empty' => 'Race', 'options' => array('White', 'Black', 'Hispanic', 'Asian', 'Other')));
									echo $this->Form->input('DefArrestAge',	array('label' => 'Defendant Age', 'type' => 'text'));
									echo $this->Form->input('Alias', array('placeholder' => 'Enter aliases separated by commas.'));
								
									echo $this->Form->input('ChargeDate', array('label' => 'Charge Date*', 'placeholder' => 'yyyy-mm-dd', 'id' => 'charge_Date', 'type' => 'text', 'class' => 'date', 'data-date' 	=> '2012-12-02', 'data-date-format' => 'yyyy-mm-dd')); 
									echo $this->Form->input('ArrestDate', array('label' => 'Arrest Date', 'placeholder' => 'yyyy-mm-dd', 'class' => 'date', 'type' => 'text', 'id' => 'arrest_Date', 'data-date' 	=> '2012-12-02', 'data-date-format' => 'yyyy-mm-dd'));
							?>
								<hr style="border-top:1px solid #CCC;">
								<input type="button" name="next" onclick="goToCaseSum()" class="action-button" value="Next - Charges"/>
						</fieldset>
								
						<h2 id="caseSumFS_Title">Charges &amp; Sentencing Details</h2>
						<fieldset id="caseSumFS">
							<?php
									echo $this->Form->input('Detained', array('label' => 'Detained', 'type' => 'checkbox'));
									echo "<hr style = 'border-top:1px solid #DCDCDC'>";
									echo $this->Form->input('BailType', array('label' => 'Bail Type', 'options' => array('None', 'Surety', 'Non-Surety')));
									echo "<br>";
									echo $this->Form->input('BailAmount', array('type' => 'text', 'label' => 'Bail Amount'));
									echo "<hr style = 'border-top:1px solid #DCDCDC'>";
									echo $this->Form->input('FelCharged', array('type' => 'text', 'label' => 'Number of Felonies Charged'));
									echo $this->Form->input('FelSentenced', array('type' => 'text', 'label' => 'Number of Felonies Sentenced')); 
									echo $this->Form->input('DateTerm', array('type' => 'text', 'label' => 'Date of Case Termination', 'data-date-format' => 'yyyy-mm-dd', 'placeholder' => 'yyyy-mm-dd'));
									echo $this->Form->input('SentDate', array('type' => 'text', 'label' => 'Date of Sentencing', 'data-date-format' => 'yyyy-mm-dd', 'placeholder' => 'yyyy-mm-dd'));
									echo $this->Form->input('TotalSentence', array('type' => 'text', 'label' => 'Total Number of Months Sentenced'));
									echo $this->Form->input('Restitution', array('type' => 'text', 'label' => 'Total Restitution To Be Paid'));
									echo $this->Form->input('AssetForfeit', array('label' => 'Asset Forfeiture'));
									echo $this->Form->input('Probation', array('type' => 'text', 'label' => 'Total Number of Months On Probation'));
							?>
								<hr style="border-top:1px solid #CCC;">
								<input type="button" name="previous" onclick="goToCaseInfo()" class="action-button" value="Back - Defentdant"/>
								&nbsp;&nbsp;
								<input type="button" name="next" onclick="goToOCG()" class="action-button" value="Next - OCG"/>
						</fieldset>

						<h2 id="OCGFS_Title">Organized Crime Groups</h2>
						<fieldset id="OCGFS">
							<?php
									echo $this->Form->input('OCName1', array('type' => 'text', 'label' => 'Name of Organized Crime Group 1'));
									echo $this->Form->input('OCType1', array('label' => '', 'options' => array('1' => 'Mom and Pop', '2' => 'Street Gang', '3' => 'Cartel/Syndicate/Mafia', '5' => 'Prison Gang', '6' => 'Other'),'empty'=>'Type'));
									echo $this->Form->input('OCRace1', array('label' => '', 'options' => array('0' => 'None', '1' => 'Black', '2' => 'White', '3' => 'Hispanic', '4' => 'Asian', '5' => 'Other'),'empty'=>'Race'));
									echo $this->Form->input('OCScope1', array('label' => '', 'options' => array('1' => 'Local', '2' => 'Trans-State', '3' => 'Trans-National'),'empty'=>'Scope'));

									echo "<hr style='border-top:1px solid #CCC;'>";

									echo $this->Form->input('OCName2', array('type' => 'text', 'label' => 'Name of Organized Crime Group 2'));
									echo $this->Form->input('OCType2', array('label' => '', 'options' => array('1' => 'Mom and Pop', '2' => 'Street Gang', '3' => 'Cartel/Syndicate/Mafia', '5' => 'Prison Gang', '6' => 'Other'),'empty'=>'Type'));
									echo $this->Form->input('OCRace2', array('label' => '', 'options' => array('0' => 'None', '1' => 'Black', '2' => 'White', '3' => 'Hispanic', '4' => 'Asian', '5' => 'Other'),'empty'=>'Race'));
									echo $this->Form->input('OCScope2', array('label' => '', 'options' => array('1' => 'Local', '2' => 'Trans-State', '3' => 'Trans-National'),'empty'=>'Scope'));
							?>								
								<hr style="border-top:1px solid #CCC;">
								<input type="button" name="previous" onclick="goToCaseSum_()" class="action-button" value="Back - Charges"/>
						</fieldset>	
				</div>
				<div class="col-md-6 case_creation_form" id="form_style" style="float:inherit">
					<h2 id="1961_title">Statute Information | 1961-1968</h2>
					  <fieldset id="to1961">
						<?php echo $this->Form->input('S1961to1968', 			array(															 
																					'label' => 'Statute 1961-1968', 
																					'type' => 'checkbox')); ?>
						<?php echo $this->Form->input('Counts1961to1968', 		array(			 
																					'label' => 'Counts', 'type' => 'text')); ?>
						<?php echo $this->Form->input('CountsNP1961to1968', 	array(
																					'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
						<?php echo $this->Form->input('PleaDismissed1961to1968',array(
																					'label' => 'Counts Dismissed', 'type' => 'text')); ?>
						<?php echo $this->Form->input('PleaGuilty1961to1968', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
						<?php echo $this->Form->input('TrialGuilty1961to1968', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
						<?php echo $this->Form->input('TrialNG1961to1968', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
						<?php echo $this->Form->input('Fines1961to1968', 		array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
						<?php echo $this->Form->input('Sent1961to1968', 		array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
						<?php echo $this->Form->input('Prob1961to1968', 		array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="next" onclick="goto1028()" class="action-button" value="Statute 1028" />
				  </fieldset>


				  <h2 id="1028_title" class="fieldset_title">Statute Information | 1028</h2>
				  <fieldset id="to1028">
					<?php echo $this->Form->input('S1028', 			array( 'label' => 'Statute 1028', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1028', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1028', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1028', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1028', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1028', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1028', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1028', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1028', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1028', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
					<hr style="border-top:1px solid #CCC;">
					<input type="button" name="previous" onclick="goto1961()" class="action-button" value="Statute 1961-1968" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="button" name="next" onclick="goto1351()" class="action-button" value="Statute 1351" />
				  </fieldset>


				  <h2 id="1351_title" class="fieldset_title">Statute Information | 1351</h2>
				  <fieldset id="to1351">
					<?php echo $this->Form->input('S1351', 				array( 'label' => 'Statute 1351', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1351', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1351', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1351', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1351', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1351', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1351', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1351', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1351', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1351', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1028_()" class="action-button" value="Statute 1028" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1425()" class="action-button" value="Statute 1425" />
				  </fieldset>


				  <h2 id="1425_title" class="fieldset_title">Statute Information | 1425</h2>
				  <fieldset id="to1425">
					<?php echo $this->Form->input('S1425', 				array( 'label' => 'Statute 1425', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1425', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1425', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1425', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1425', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1425', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1425', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1425', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1425', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1425', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1351_()" class="action-button" value="Statute 1351" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1512()" class="action-button" value="Statute 1512" />
				  </fieldset>


				  <h2 id="1512_title" class="fieldset_title">Statute Information | 1512</h2>
				  <fieldset id="to1512">
					<?php echo $this->Form->input('S1512', 				array( 'label' => 'Statute 1512', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1512', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1512', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1512', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1512', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1512', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1512', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1512', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1512', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1512', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1425_()" class="action-button" value="Statute 1425" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1546()" class="action-button" value="Statute 1546" />
				  </fieldset>


				  <h2 id="1546_title" class="fieldset_title">Statute Information | 1546</h2>
				  <fieldset id="to1546">
					<?php echo $this->Form->input('S1546', 				array( 'label' => 'Statute 1546', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1546', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1546', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1546', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1546', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1546', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1546', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1546', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1546', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1546', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1512_()" class="action-button" value="Statute 1512" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1581()" class="action-button" value="Statute 1581" />
				  </fieldset>


				  <h2 id="1581_title" class="fieldset_title">Statute Information | 1581-1588</h2>
				  <fieldset id="to1581">
					<?php echo $this->Form->input('S1581to1588', 			array( 'label' => 'Statute 1581to1588', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1581to1588', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1581to1588', 	array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1581to1588',array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1581to1588', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1581to1588', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1581to1588', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1581to1588', 		array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1581to1588', 		array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1581to1588', 		array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1546_()" class="action-button" value="Statute 1546" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1589()" class="action-button" value="Statute 1589" />
				  </fieldset>


				  <h2 id="1589_title" class="fieldset_title">Statute Information | 1589</h2>
				  <fieldset id="to1589">
					<?php echo $this->Form->input('S1589', 				array( 'label' => 'Statute 1589', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1589', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1589', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1589', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1589', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1589', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1589', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1589', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1589', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1589', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						  <hr style="border-top:1px solid #CCC;">
						  <input type="button" name="previous" onclick="goto1581_()" class="action-button" value="Statute 1581" />
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="button" name="next" onclick="goto1590()" class="action-button" value="Statute 1590" />
				  </fieldset>


				  <h2 id="1590_title" class="fieldset_title">Statute Information | 1590</h2>
				  <fieldset id="to1590">
					<?php echo $this->Form->input('S1590', 				array( 'label' => 'Statute 1590', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1590', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1590', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1590', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1590', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1590', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1590', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1590', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1590', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1590', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1589_()" class="action-button" value="Statute 1589" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1591()" class="action-button" value="Statute 1591" />
				  </fieldset>


				  <h2 id="1591_title" class="fieldset_title">Statute Information | 1591</h2>
				  <fieldset id="to1591">
					<?php echo $this->Form->input('S1591', 				array( 'label' => 'Statute 1591', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1591', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1591', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1591', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1591', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1591', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1591', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1591', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1591', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1591', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1590_()" class="action-button" value="Statute 1590" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1592()" class="action-button" value="Statute 1592" />
				  </fieldset>


				  <h2 id="1592_title" class="fieldset_title">Statute Information | 1592</h2>
				  <fieldset id="to1592">
					<?php echo $this->Form->input('S1592', 				array( 'label' => 'Statute 1592', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1592', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1592', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1592', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1592', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1592', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1592', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1592', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1592', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1592', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1591_()" class="action-button" value="Statute 1591" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto2252()" class="action-button" value="Statute 2252" />
				  </fieldset>


				  <h2 id="2252_title" class="fieldset_title">Statute Information | 2252</h2>
				  <fieldset id="to2252">
					<?php echo $this->Form->input('S2252', 				array( 'label' => 'Statute 2252', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts2252', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP2252', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed2252', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty2252', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty2252', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG2252', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines2252', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent2252', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob2252', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1592_()" class="action-button" value="Statute 1592" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto2260()" class="action-button" value="Statute 2260" />
				  </fieldset>


				  <h2 id="2260_title" class="fieldset_title">Statute Information | 2260</h2>
				  <fieldset id="to2260">
					<?php echo $this->Form->input('S2260', 				array( 'label' => 'Statute 2260', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts2260', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP2260', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed2260', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty2260', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty2260', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG2260', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines2260', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent2260', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob2260', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto2252_()" class="action-button" value="Statute 2252" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto2421()" class="action-button" value="Statute 2421" />
				  </fieldset>


				  <h2 id="2421_title" class="fieldset_title">Statute Information | 2421-2424</h2>
				  <fieldset id="to2421">
					<?php echo $this->Form->input('S2421to2424', 			array( 'label' => 'Statute 2421to2424', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts2421to2424', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP2421to2424', 	array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed2421to2424',array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty2421to2424', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty2421to2424', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG2421to2424', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines2421to2424', 		array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent2421to2424', 		array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob2421to2424', 		array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto2260_()" class="action-button" value="Statute 2260" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1324()" class="action-button" value="Statute 1324" />
				  </fieldset>


				  <h2 id="1324_title" class="fieldset_title">Statute Information | 1324</h2>
				  <fieldset id="to1324">
					<?php echo $this->Form->input('S1324', 				array('label' => 'Statute 1324', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1324', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1324', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1324', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1324', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1324', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1324', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1324', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1324', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1324', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<input type="button" name="previous" onclick="goto2421_()" class="action-button" value="Statute 2421" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" name="next" onclick="goto1328()" class="action-button" value="Statute 1328" />
				  </fieldset>


				  <h2 id="1328_title" class="fieldset_title">Statute Information | 1328</h2>
				  <fieldset id="to1328">
					<?php echo $this->Form->input('S1328', 				array( 'label' => 'Statute 1328', 'type' => 'checkbox')); ?>
					<?php echo $this->Form->input('Counts1328', 		array( 'label' => 'Counts', 'type' => 'text')); ?>
					<?php echo $this->Form->input('CountsNP1328', 		array( 'label' => 'Counts Nolle Prossed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaDismissed1328', 	array( 'label' => 'Counts Dismissed', 'type' => 'text')); ?>
					<?php echo $this->Form->input('PleaGuilty1328', 	array( 'label' => 'Counts Pled Guilty', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialGuilty1328', 	array( 'label' => 'Counts Found Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('TrialNG1328', 		array( 'label' => 'Counts Found Not Guilty At Trial', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Fines1328', 			array( 'label' => 'Fines Levied', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Sent1328', 			array( 'label' => 'Number of Months Sentenced Under Statute', 'type' => 'text')); ?>
					<?php echo $this->Form->input('Prob1328', 			array( 'label' => 'Number of Months Under Probation Under Statute', 'type' => 'text')); ?>
						<hr style="border-top:1px solid #CCC;">
						<input type="button" name="previous" onclick="goto1324_()" class="action-button" value="Statute 1324" />
				  </fieldset>
					</div>
				<div class="col-md-12 search_disclaim case_creation_form" style="margin-top:0px; padding-top:10px; border-top:1px solid #DCDCDC">
					<div style="max-width:60%;margin: 0 auto">
					<?php echo $this->Form->submit('Submit'); ?>
					<?php echo $this->Form->end(); ?>
						<br>
					<p><strong>*Note: </strong>Required Fields</p>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('statutes_slider'));?>
<script type="text/javascript">
	var caseInfoFS = $('#caseInfoFS');
	var caseSum = $('#caseSumFS');
	var OCG_FS = $('#OCGFS');
		$('#caseSumFS_Title').hide();
		$('#OCGFS_Title').hide();

	function goToCaseSum() {    	
		caseInfoFS.hide('slow');
		$('#caseInfoFS_Title').hide('slow');
		caseSum.fadeIn('slow');
		$('#caseSumFS_Title').show('slow');
	}

	function goToCaseInfo() {    	
		caseSum.hide('slow');
		$('#caseSumFS_Title').hide('slow');
		caseInfoFS.fadeIn('slow');
		$('#caseInfoFS_Title').show('slow');
	}

	function goToOCG() {    	
		caseSum.hide('slow');
		$('#caseSumFS_Title').hide('slow');
		OCG_FS.fadeIn('slow');
		$('#OCGFS_Title').show('slow');
	}
	function goToCaseSum_() {    	
		OCG_FS.hide('slow');
		$('#OCGFS_Title').hide('slow');
		caseSum.fadeIn('slow');
		$('#caseSumFS_Title').show('slow');
	}
</script>