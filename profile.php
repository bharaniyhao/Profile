

<style>
    
    .ui-w-80 {
        width: 80px !important;
        height: auto;
    }
    .profile-img img {
      background-color: #fff;
      border-radius: 2px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.07);
      height:158px;
      padding: 5px;
      width:158px;
    }
    
    
    .btn-default {
        border-color: rgba(24,28,33,0.1);
        background: rgba(0,0,0,0);
        color: #4E5155;
    }
    
    label.btn {
        margin-bottom: 0;
    }
    .fileinput-settings {
        position: absolute;
        visibility: hidden;
        width: 1px;
        height: 1px;
        opacity: 0;
    }
    .btn-outline-primary {
        border-color: #26B4FF;
        background: transparent;
        color: #26B4FF;
    }
    
    .btn {
        cursor: pointer;
    }
    
    .text-light {
        color: #babbbc !important;
    }
    
    .btn-facebook {
        border-color: rgba(0,0,0,0);
        background: #3B5998;
        color: #fff;
    }

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

    .btn-instagram {
        border-color: rgba(0,0,0,0);
        background: #000;
        color: #fff;
    }
    
    .card {
        background-clip: padding-box;
        box-shadow: 0 1px 4px rgba(24,28,33,0.012);
    }
    
    .row-bordered {
        overflow: hidden;
    }
    
    .settings-fileinput {
        position: absolute;
        visibility: hidden;
        width: 1px;
        height: 1px;
        opacity: 0;
    }
    .account-settings-links .list-group-item.active {
        font-weight: bold !important;
    }
    html:not(.dark-style) .account-settings-links .list-group-item.active {
        background: SlateBlue !important ;
        
    }
    .account-settings-multiselect ~ .select2-container {
        width: 100% !important;
    }
    .light-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(24, 28, 33, 0.03) !important;
    }
    .light-style .account-settings-links .list-group-item.active {
        color: #4e5155 !important;
    }
    .material-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(24, 28, 33, 0.03) !important;
    }
    .material-style .account-settings-links .list-group-item.active {
        color: #4e5155 !important;
    }
    .dark-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(255, 255, 255, 0.03) !important;
    }
    .dark-style .account-settings-links .list-group-item.active {
        color: #fff !important;
    }
    .light-style .account-settings-links .list-group-item.active {
        color: #4E5155 !important;
    }
    .light-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(24,28,33,0.03) !important;
    }
    
    </style>
    
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <section class="Edit-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                
                        <?php $engine->msgBox($msg,$status); ?>
    
                    <div class="block-card mb-4">
                    <div class="block-card-header">
                    <div class="text-right mt-3">         
            <button class="btn btn-success text-white" onClick="document.getElementById('postpage').value='profile';document.listform.submit();"><i class="la la-user-plus mr-1"></i>Update</button>
            <button type="submit" class="btn btn-danger text-white">Cancel</button>
        </div>
        <div class="block-card-header">
        <h2 class="widget-title">Edit Profile</h2>
         <div class="stroke-shape"></div>
       
    </div>
    
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a> -->
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">About</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                        <!-- <div class="profile-img"> -->
                            <div class="card-body media align-items-center profile-img" id="imagePreview">
                            <img src="images/upload/profilepics/<?php echo $passportpic ; ?>" id="blah" alt="Your Image" class="image-preview__image">
                                    <span class="image-preview__default-text"></span>
                          
                          <div class="media-body ml-4"> 
                          <br>
                  <label class="btn btn-outline-primary">
                   <input type="file" name="prevImage" id="prevImage" class="fileinput-settings" id="blah"value="<?php echo $upic; ?>">  Upload new photo
                      </label> &nbsp;
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 10m                                
    </div>
                                    </div> </div>
                                    
                                  <!-- //end here// -->
                            <hr class="border-light m-0">
    
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" name="username" value="<?php echo $username ; ?> "  required readonly>
                                    
                                </div>
                               
                            </div>
                        </div>
                            
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                            <div class="row">
                            <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">Surname </label>
                            <div class="form-group">
                            <input type="text" class="form-control mb-1" name="lname" value="<?php echo $lname ; ?> " required >
    
                            </div>
                            </div>
                            </div>
                            <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">First name</label>
                            <div class="form-group">
                            <input type="text" class="form-control mb-1"  name="fname" value="<?php echo $fname ; ?> " required >
    
                            </div>
                            </div>
                            </div>
                         
                            <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">Gender</label>
                                <div class="form-group">
                             <select id="gender" name="gender" class="custom-select" value="<?php echo $gender ; ?>">
                        <option disabled>Select Gender</option>
                        <option value="Male" <?php echo (($gender == 'Male') ? 'selected="selected"' : ''); ?>>Male</option>
                        <option value="Female" <?php echo (($gender == 'Female') ? 'selected="selected"' : ''); ?>>Female</option>
                        <option value="Other" <?php echo (($gender == 'Other') ? 'selected="selected"' : ''); ?>>Other</option>

                             </select>
                            </div>
                            </div>
                            </div>
                           
                        <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">Phone Number</label>
                            <div class="form-group">
                            <input type="text" class="form-control mb-1"  name="pnumber" value="<?php echo $pnumber ; ?> " required >
    
                            </div>
                            </div>
                            </div>
                            <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">Email Address</label>
                            <div class="form-group">
                            <input type="text" class="form-control mb-1"  name="email" value="<?php echo $email ; ?> " required >
    
                            </div>
                            </div>
                            </div>
                            <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">Post Address</label>
                            <div class="form-group">
                            <input type="text" class="form-control mb-1"  name="daddress" value="<?php echo $daddress ; ?> " required >
    
                            </div>
                            </div>
                            </div>
                           
                            <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                            <label class="label-text">Marital Status</label>
                                <div class="form-group">
                                   
                                    <select id="mstatus" name="mstatus" class="custom-select" mstatus>
                        <option disabled>Select Marital Status</option>
                        <option value="1" <?php echo (($mstatus == 'Married') ? 'selected="selected"' : ''); ?>>Married</option>
                        <option value="2" <?php echo (($mstatus == 'Divorced or Separated') ? 'selected="selected"' : ''); ?>>Divorced or Separated</option>
                        <option value="3" <?php echo (($mstatus == 'Widowed') ? 'selected="selected"' : ''); ?>>Widowed</option>
                        <option value="4" <?php echo (($mstatus == 'Single') ? 'selected="selected"' : ''); ?>>Single</option>
                  
                      </select>
                            </div>
                            </div>
                            </div>
                       <div class="col-md-4 fieldspaceout">
                    <div class="input-box">
                    <label class="label-text">Country </label>
                 <div class="form-group user-chosen-select-container">
        <select id="single_country" name="single_country" class="custom-select" value="<?php echo $single_country ; ?>" >  
            <option value="single_country" disabled>Select Your Country</option>
                                         
                 <?php foreach($query as $single_country){ ?>
         <option value="<?php echo $single_country['CN_SLUG'] ?>"> <?php echo $single_country['CN_COUNTRY'];} ?> </option>
                                                </select>
                                                </div>
                                     </div>
                           </div>  </div>
                                     </div>
                           </div>
    
                           <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
    
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control" value="<?php echo $twitter; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" id="facebook" class="form-control" name="facebook" value="<?php echo $facebook; ?>" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" id="googleplus" class="form-control" name="googleplus" value="<?php echo $googleplus;?> " >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" id="linkedin" class="form-control" name="linkedin" value="<?php echo $linkedin; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" id="ig" class="form-control" name="ig" value="<?php echo $ig; ?>">
                                </div>
    
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                          <div class="card-body pb-2">
                          <div class="input-box">
                        <label for="about">About Me</label>
                        </div><!-- end block-card-header -->
                       
    <textarea type="text" id="about" name="about" class="form-control mb-1"  value="" required rows="10" ><?php echo $about ; ?> </textarea>                          
                        </div><!-- end block-card-body -->
                    </div><!-- end block-card -->
                                
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Email me when someone comments on my article</span>
                      </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Email me when someone answers on my forum thread</span>
                      </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                        <input type="checkbox" class="switcher-input">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Email me when someone follows me</span>
                      </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
    
                                <h6 class="mb-4">Application</h6>
    
                                <div class="form-group">
                                    <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">News and announcements</span>
                      </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                        <input type="checkbox" class="switcher-input">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Weekly product updates</span>
                      </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Weekly blog digest</span>
                      </label>
                                </div>
    
                            </div>
                        </div>
        
    
        </div>
        </section>  <!--END SECTION-->
    
    <!-- start back-to-top -->
    <div id="back-to-top">
    <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
    
    <!-- end dashboard-inner-body -->
    
    <script>
      $(function () {
        // Multiple images preview with JavaScript
        var multiImgPreview = function (input, imgPreviewPlaceholder) {
    
          if (input.files) {
            var filesAmount = input.files.length;
    
            for (i = 0; i < filesAmount; i++) {
              var reader = new FileReader();
    
              reader.onload = function (event) {
                $($.parseHTML('<img width="190px" height="100px" style="padding:5px">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
              }
    
              reader.readAsDataURL(input.files[i]);
            }
          }
    
        };
    
        $('#chooseFile').on('change', function () {
          multiImgPreview(this, 'div.imgGallery');
        });
      });
    
    
      //script for preview image
    const inpFile = document.getElementById("prevImage");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    
    inpFile.addEventListener("change", function() {
        const file = this.files[0];
    
        if (file) {
            const reader = new FileReader();
    
            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";
    
    
            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });
    
    
            reader.readAsDataURL(file);
        } else {
            previewDefaultText.style.display = null;
            previewImage.style.display = null;
    
            previewImage.setAttribute("src", "");
        }
    });
    
    //end of script for image logo
    </script>