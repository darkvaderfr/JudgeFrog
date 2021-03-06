<?php
    echo $this->Html->css(array('modal_window_style', 'dataTables.bootstrap', 'dataTables.responsive'));
    echo $this->Html->script(array('jquery-1.10.2.min', 'jquery.dataTables.min', 'dataTables.responsive.min', 'dataTables.bootstrap'));
?>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#review_table').DataTable( {
        responsive: true
    } );
  });
</script>
<!--search start here-->
<div class="contact">
    <div class="container">
        <div class="contact-main">
          <h3 class="page_title">Review Case</h3>
              <div class="col-md-4 contact-right" style="text-align:left; margin-bottom:50px">
                <!-- TOP CREATE A NEW USER BAR -->
                  <div class="top_bar col-md-4">
                    <div class="top_bar_left">
                      <h4>FREQUENTLY ASKED QUESTIONS</h4>
                    </div> 
                  </div>
                    <h4>Where does a published case go?</h4>
                    <label>A case that is published goes to the live database and becomes searchable.</label>
                    <h4>Can I delete a published case?</h4>
                    <label>Yes you may delete a case you published by going back to the <i><b>"Create&amp;Edit"</b></i> page. You can search and delete the case from the all cases table.</label>
                    <h4>How soon after publishing a case can a user search for it?</h4>
                    <label>Immediately. A published case is instantaneously added to the live database and can be searched and analyzed.</label>
              </div>
              <div class="col-md-8 contact-right">
                <!-- TOP CREATE A NEW USER BAR -->
                  <div class="top_bar col-md-8">
                    <div class="top_bar_left">
                      <h4>CASES PENDING REVIEW</h4>
                    </div> 
                      <!-- PUBLISH BUTTON-->
                      <div title="Click here to publish this case." style="padding: 20px 0px 0px 0px;" id="publish_button">
                        <label for="" class="user_button">
                          <?php echo $this->Html->image('send.png', array('alt' => 'Publish', 'style' => 'padding: 10px 8px 8px 0px;' )); ?>
                        </label>
                      </div>  
                  </div>
                    <table class="pending_case table table-bordered" id="review_table">
                          <thead>
                              <tr>
                              <th class="always">Case Name</th>
                              <th>Case Number</th>
                              <th>Number of Defendant</th>
                              <th class="">Author Name</th>
                              <th class="always" style="background-color: #4D1979">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            if (isset($p_cases)) {
                              $index = 0;
                              foreach ($p_cases as $pc) {
                                echo '<tr id='.$index.' class="toggle_case">' .
                                '<td>' . $pc[0] . '</td>' .
                                '<td>' . $pc[1] . '</td>' .
                                '<td>' . $pc[2] . '</td>' .
                                '<td>' . $pc[3] . '</td>' .
                                '<td>' . $this->Html->link('Edit', '/admin/cases/edit/'.$pc[0])
                                       . '&nbsp/&nbsp;'
                                       . $this->Html->link('Delete', '/CaseReviews/delete_case/'.$pc[0], 
                                          array('confirm'=>'Are you sure you want to delete this case?'));
                                '</td>' .
                                '</tr>';
                                $index++;
                              }
                            }
                          ?>
                        </tbody>
                    </table>
                <!-- Create Interface -->
                <div class="user_creation" style="padding-bottom:50px; margin-top:50px;">
                  <div class="login_details" style="background-color:#DCDCDC">
                  </div>
                </div>
            </div> 
                <div class="col-md-12 contact-right">
                  <!-- TOP PUBLISH SELECTED USER BAR -->
                    <div class="top_bar col-md-12">
                      <div class="top_bar_dash">
                        <h4>CASE DETAILS</h4>
                      </div>                 
                    </div>
                    <div id="selected_case" class="selected_case">
                    </div>
                </div>
          </div>
      </div> 
  </div>
            <div class="search_disclaim" style="margin-top:200px">
              <p><strong>Note: </strong>Click on any pending case to display its details.</p>
            </div>

<!-- TABLE SELECTION SCRIPT -->
<script type="text/javascript">
  var displaying = false;
  var index = -1;
  <?php
    if (isset($p_cases)) {
      $jsarr = json_encode($p_cases);
      echo 'var p_cases = ' . $jsarr . ';';
    } else {
      echo 'var p_cases = [];';
    }
  ?>
    // TOGGLE SELECTED CASE
    $('.toggle_case').click(function(){

      if (!displaying) {
        displaying = true;
        index = $(this).attr('id');
        console.log('Displaying ' + index);
          $.ajax({                   
              url: '/CaseReviews/generateTable/' + index,
              cache: false,
              type: 'GET',
              dataType: 'HTML',
              success: function (html) {
                  $('.selected_case').html(html);
                  $('.this_def_info').hide();
                  $(this).toggleClass('clicked', 'slow');
                  $('.toggle_def').click(function(){
                    $(this).nextUntil('.toggle_def').toggle('slow');
                    $(this).toggleClass('clicked', 'slow');
                  });
                  $('.selected_case').show(50);
                  $('#edit_case').attr('href', '/admin/cases/edit/' + p_cases[index][0]);
              }
          });
      } else {
        console.log('Hiding');
        $('.selected_case').hide();
        displaying = false;
        index = -1;
      }
    });
       // TOGGLE SELECTED DEFENDENT
      $('#publish_button').click(function(){
        
        if (displaying) {
          var confirmDelete = confirm("Are you sure you want to publish this case?");
          if (confirmDelete)
          {
              $.ajax({
                url: '/CaseReviews/publishCase/' + index,
                cache: false,
                type: 'GET',
                dataType: 'HTML',
                success: function () {
                  $(this).remove();
                  location.reload();
                }
              });
          }
        } else {
          alert('Please select a case to publish!');
        }
      });
</script>
<!-- SUCCESS BANNER -->
<script type="text/javascript">
    var $welcom = $("#flashMessage");
    setTimeout(function() {
        $welcom.slideUp(800).delay(900).fadeOut(900);
    }, 4000);
</script>