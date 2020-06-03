
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Hospital Analysis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/ico" href="img/hospital_bg.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="first_page.css">   
  </head>
  <body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
      </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
      </script>
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
       <script>
        <?php include('test1.php') ?> 
        /* function WriteToFile(passForm) {
        var fso = new xmldirector.connector("Scripting.FileSystemObject");
        var fileLoc = "test_Data.csv";
        var file = fso.CreateTextFile(fileLoc, true);
        file.writeline(passForm.fname.value + ',' + passForm.date.value + ',' + passForm.phone.value
        + ',' + passForm.nationality.value + ',' + passForm.gender.value + ',' + passForm.admission.value
        + ',' + passForm.duration.value + ',' + passForm.docname.value + ',' + passForm.availability.value
        + ',' + passForm.expertise.value + ',' + passForm.environment.value + ',' + passForm.staff.value
        + ',' + passForm.facilities.value + ',' + passForm.food.value + ',' + passForm.preserve.value);
        file.Close();
        alert('File created successfully at location: ' + fileLoc);
        } */

        $(document).ready(function(){
          var date_input=$('input[name="date"]'); //our date input has the name "date"
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          var options={
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
          };
          date_input.datepicker(options);
        });

    </script>

      <nav class="navbar navbar-expand-md navbar-fixed navbar-inverse mb-0" id="navbar" >
        <div class="container-fluid " >
          <h2 class="text-light p-1">PATIENT REVIEW SYSTEM</h2>
        </div>
      </nav>

        <div class ="mt-1" id="main">
          <div class="row">
            <div class="col-7"></div>
            <div class="col-5">
              <div class="clearfix"></div>


                <form method="POST" class="border border-info p-3 bg-white" > 
                    <h4 class= "mb-2">Enter Your Details Here:</h4>
                    <div class="row ">
                        <div class="col-6">
                                <input required type="text" class="form-control mb-2" name="fname" placeholder="Enter Your Name"/>
                        </div>
                        <div class="col-6">
                            <input required type="text" id="date" name="date" placeholder="Enter Your DOB" class="form-control mb-2" />
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <input type="tel" id="phone" name="phone" maxlength="10" class="form-control mb-2" placeholder="Phone Number"/>
                      </div>
                      <div class="col-6">
                        <input required type="text" class="form-control mb-1" name="nationality" placeholder="Nationality"/>
                      </div>
                    </div>
                    <div style="font-size: 14px;" class="form-control mb-2">
                            <label class="text-secondary">Sex : &nbsp;</label>
                            <input type="radio" name="gender" value="male" checked> Male &nbsp; &nbsp;
                            <input type="radio" name="gender" value="female"> Female &nbsp; &nbsp;
                            <input type="radio" name="gender" value="female"> Other &nbsp; &nbsp;
                    </div>   
                    <div class="row mb-2">
                        <div class="col-6">
                            <input required type="text" class="form-control mb-2" name="admission" placeholder="Reason for Admission"/>
                        </div>
                        <div class="col-6">
                            <input required type="text" class="form-control mb-2" name="duration" placeholder="Duration of Treatment(Days)"/>
                        </div>
                    </div>

                    <h4 class="mb-2">Doctor You Referred To:</h4>
                    <div class="row">
                        <div class="col-12">
                            <input required type="text" class="form-control mb-2" name="docname" placeholder="Doctor's Name"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div style="font-size: 14px;" class="form-control mb-2">
                                <label for="availability" class="text-secondary">Availability:</label>
                                <input type="radio" name="availability" value="1" checked>&nbsp;1 &nbsp;
                                <input type="radio" name="availability" value="2"> &nbsp;2 &nbsp; 
                                <input type="radio" name="availability" value="3"> &nbsp;3 &nbsp; 
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="font-size: 14px;" class="form-control mb-2">
                                <label for="expertise" class="text-secondary">Expertise:</label>
                                <input type="radio" name="expertise" value="1" checked>&nbsp;1 &nbsp;
                                <input type="radio" name="expertise" value="2"> &nbsp;2 &nbsp; 
                                <input type="radio" name="expertise" value="3"> &nbsp;3 &nbsp; 
                            </div>
                        </div>
                    </div>
                   
                    <h4 class="mb-2">Hospital:</h4>
                    <div class="row">
                        <div class="col-6">
                            <div style="font-size: 14px;" class="form-control mb-2">
                                <label for="environment" class="text-secondary">Environment:</label>
                                <input type="radio" name="environment" value="1" checked>&nbsp;1&nbsp;
                                <input type="radio" name="environment" value="2">&nbsp;2&nbsp; 
                                <input type="radio" name="environment" value="3">&nbsp;3&nbsp; 
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="font-size: 14px;" class="form-control mb-2">
                                <label for="staff" class="text-secondary"> Staff:</label>
                                <input type="radio" name="staff" value="1" checked>&nbsp;1 &nbsp;
                                <input type="radio" name="staff" value="2"> &nbsp;2 &nbsp; 
                                <input type="radio" name="staff" value="3"> &nbsp;3 &nbsp; 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div style="font-size: 14px;" class="form-control mb-2">
                                <label for="facilitiesprovided" class="text-secondary">Facilities:</label>
                                <input type="radio" name="facilities" value="1" checked>&nbsp;1 &nbsp;
                                <input type="radio" name="facilities" value="2"> &nbsp;2 &nbsp; 
                                <input type="radio" name="facilities" value="3"> &nbsp;3 &nbsp; 
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="font-size: 14px;" class="form-control mb-2">
                                <label for="food" class="text-secondary">Food:</label>
                                <input type="radio" name="food" value="1" checked>&nbsp;1 &nbsp;
                                <input type="radio" name="food" value="2"> &nbsp;2 &nbsp; 
                                <input type="radio" name="food" value="3"> &nbsp;3 &nbsp; 
                            </div>
                        </div>
                    </div>
                    <textarea required class="form-control mb-2" rows="2" name="review" placeholder="Write a Review..."></textarea>
                    <div class="row">
                      <div class="col-10">
                        <div style="font-size: 14px;" class="form-control mb-2">
                              <label for="preserve" class="text-secondary">Do you want to <b>reveal your Identity</b>? &nbsp;</label>
                              <input type="radio" name="preserve" value="1" checked>Yes &nbsp; &nbsp;
                              <input type="radio" name="preserve" value="0">No &nbsp; &nbsp;
                        </div>
                      </div>
                      </div>
                    <input class="btn submit-btn" type="submit" name="submit" value="Submit" onclick="WriteToFile(this.form)"/>
                </form>

             </div>
            </div>
          </div>
        </div>
        
  </body>
 
</html>
