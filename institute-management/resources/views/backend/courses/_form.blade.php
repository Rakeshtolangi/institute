 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Add Course</h1>
             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"><a href="dashboard/home">Dashboard</a></div>
                 <div class="breadcrumb-item"><a href="javascript:void(0)">Courses</a></div>
                 <div class="breadcrumb-item"><a href="javascript:void(0)">AddCourse</a>
                 </div>
                 <!--                        <div class="breadcrumb-item">DataTables</div>-->
             </div>
         </div>
         <div class="section-body">


             <div class="row">
                 <div class="col-12 col-md-12 col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <h4>Add Course Form</h4>
                             <div class="card-header-action">
                                 <a href="courses" class="btn active">Course List</a>
                             </div>
                         </div>
                         <div class="card-body">
                             <form action="courses/addCourse" enctype="multipart/form-data" method="post"
                                 class="needs-validation" novalidate="">
                                 <input type="hidden" name="id" value="">


                                 <input type="hidden" name="old_image" value="">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Course Title</label>
                                             <input required type="text" value="" name="title" class="form-control"
                                                 placeholder="Course Title">
                                             <div class="invalid-feedback">
                                                 Please fill in course title
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Course Short Code</label>
                                             <input required value="" type="text" name="courseCode" class="form-control"
                                                 placeholder="GD">
                                             <div class="invalid-feedback">
                                                 Please fill in course short code
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Course Category</label>
                                             <select required name="category_id" class="form-control select2">
                                                 <option value="">Select Course Category</option>
                                                 <option value="1">Development</option>
                                                 <option value="2">Designing</option>
                                                 <option value="3">Office Management</option>
                                                 <option value="4">Office Automation</option>
                                                 <option value="5">HKCL</option>
                                                 <option value="6">xcxc</option>
                                                 <option value="7">dsfdfd</option>
                                                 <option value="8">العربية بين يديك</option>
                                                 <option value="9">Computer Course </option>
                                                 <option value="10">Basic Course </option>
                                                 <option value="11">One Year Diploma Course </option>
                                                 <option value="12">3 Month Basic Course </option>
                                                 <option value="13">6 Month Certificate Course </option>
                                                 <option value="14">6 Month Certificate Course </option>
                                                 <option value="15">Spoken English Course </option>
                                                 <option value="16">University Courses </option>
                                                 <option value="17">CS</option>
                                                 <option value="18">BA</option>
                                                 <option value="19">BSc</option>
                                                 <option value="20">hair</option>
                                                 <option value="21">development</option>
                                                 <option value="22">React Js</option>
                                                 <option value="23">Pharmacy Technician</option>
                                                 <option value="24">Pharmacy Category B</option>
                                                 <option value="25">Pharmacy</option>
                                                 <option value="26">COMPUTER SCIENCE ENGINEERING</option>
                                                 <option value="27">tes</option>
                                                 <option value="28">Tamil</option>
                                                 <option value="29">NVQ</option>
                                                 <option value="30">sports</option>
                                                 <option value="31">uuu</option>
                                                 <option value="32">Class-6</option>
                                                 <option value="33">Html</option>
                                                 <option value="34">CODER</option>
                                             </select>
                                             <div class="invalid-feedback">
                                                 Please select course category
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Course Image</label>
                                             <div class="custom-file">
                                                 <input required type="file" class="custom-file-input" name="image"
                                                     id="customFile">
                                                 <label class="custom-file-label" for="customFile">Choose file</label>
                                             </div>

                                         </div>
                                     </div>
                                 </div>


                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Duration</label>
                                             <input required value="" name="duration" type="number" class="form-control"
                                                 placeholder="Course Duration">
                                             <div class="invalid-feedback">
                                                 Please fill course duration
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Duration Type</label>
                                             <select name="duration_type" class="form-control select2">
                                                 <option value="Days">Days
                                                 </option>
                                                 <option value="Month">Months
                                                 </option>
                                             </select>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Fees</label>
                                             <input required value="" name="fees" type="number" class="form-control"
                                                 placeholder="Course Fee">
                                             <div class="invalid-feedback">
                                                 Please fill course fee
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">

                                         <div class="form-group">
                                             <label>Status</label>
                                             <select required name="status" id="" class="form-control select2">
                                                 <option value="1">
                                                     Active
                                                 </option>
                                                 <option value="0">
                                                     Disable
                                                 </option>
                                             </select>
                                             <div class="invalid-feedback">
                                                 Please select course status
                                             </div>
                                         </div>

                                     </div>
                                 </div>


                                 <div class="row">
                                     <div class="card-header">
                                         <h4>More Detail</h4>
                                         <div class="card-header-action">
                                             <a href="#" class="btn btn-primary accordion-header collapsed"
                                                 data-toggle="collapse" data-target="#panel-body-1">
                                                 +
                                             </a>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div id="accordion">
                                             <div class="accordion">
                                                 <div class="accordion-body collapse" id="panel-body-1"
                                                     data-parent="#accordion" style="">


                                                     <div class="row">
                                                         <div class="col-md-6">
                                                             <div class="form-group">
                                                                 <label>Lecture</label>
                                                                 <input value="" name="no_of_lec" type="number"
                                                                     class="form-control" placeholder="No. of Lecture">
                                                                 <div class="invalid-feedback">
                                                                     Please fill course lecture
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                             <div class="form-group">
                                                                 <label>Quizz</label>
                                                                 <input value="" name="no_of_quizz" type="number"
                                                                     class="form-control" placeholder="No. of Quiz">
                                                                 <div class="invalid-feedback">
                                                                     Please fill course quizz
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <div class="row">
                                                         <div class="col-md-4">
                                                             <div class="form-group">
                                                                 <label>Skill Level</label>
                                                                 <select style="width: 100%" name="skill_level" id=""
                                                                     class="form-control select2">
                                                                     <option value="1">
                                                                         Basic
                                                                     </option>
                                                                     <option value="2">
                                                                         Advanced
                                                                     </option>
                                                                 </select>
                                                                 <div class="invalid-feedback">
                                                                     Please select skill level
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="col-md-4">

                                                             <div class="form-group">
                                                                 <label>Language</label>
                                                                 <select style="width: 100%" name="language" id=""
                                                                     class="form-control select2">
                                                                     <option value="1">
                                                                         English
                                                                     </option>
                                                                     <option value="2">
                                                                         Urdu
                                                                     </option>
                                                                 </select>
                                                                 <div class="invalid-feedback">
                                                                     Please select language
                                                                 </div>
                                                             </div>

                                                         </div>
                                                         <div class="col-md-4">
                                                             <div class="form-group">
                                                                 <label>Assessments</label>
                                                                 <select style="width: 100%" name="assessments" id=""
                                                                     class="form-control select2">
                                                                     <option value="1">
                                                                         No
                                                                     </option>
                                                                     <option value="2">
                                                                         Yes
                                                                     </option>
                                                                 </select>
                                                                 <div class="invalid-feedback">
                                                                     Please select assessment
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>


                                                     <div class="form-group">
                                                         <label class="section-title">Description</label>
                                                         <textarea class="ckeditor" name="description"
                                                             id="ckeditor1"></textarea>
                                                     </div>

                                                     <div class="form-group">
                                                         <label class="section-title">Learning Outcomes</label>
                                                         <textarea class="ckeditor" name="learning_outcomes"
                                                             id="ckeditor"></textarea>
                                                     </div>




                                                     <div class="form-group">

                                                         <label class="section-title">Curriculum</label>

                                                         <div id="curriculum">

                                                             <div id="cc_row_1" class="row">
                                                                 <div class="col-md-5">

                                                                     <input name="cc_chapter[]" type="text"
                                                                         placeholder="Chapter" class="form-control">


                                                                 </div>
                                                                 <div class="col-md-6">

                                                                     <textarea placeholder="Chapter Detail"
                                                                         name="cc_chapter_detail[]" class="form-control"
                                                                         id="" cols="30" rows="10"></textarea>


                                                                 </div>
                                                                 <div class="col-md-1">

                                                                     <button type="button" onclick="addNewRow(1)"
                                                                         class="btn btn-primary btn-sm">+
                                                                     </button>


                                                                 </div>
                                                             </div>
                                                         </div>


                                                     </div>




                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>


                                 <div class="">
                                     <button class="btn  btn-primary" type="submit">Submit</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>

             <script>
             function removeAttr() {
                 $("[name='image']").attr('required', false);
             }
             </script>


             <script>
             let row_counter = 1;

             function addNewRow(row) {
                 row_counter++;
                 let data = '<div id="cc_row_' + row_counter +
                     '" class="row mt-2">' +
                     '<div class="col-md-5">' +
                     '<input name="cc_chapter[]" type="text" placeholder="Chapter" class="form-control">' +
                     '</div>' +
                     '<div class="col-md-6">' +
                     '<textarea placeholder="Chapter Detail" name="cc_chapter_detail[]" class="form-control" id="" cols="30" rows="10"></textarea>' +
                     '</div>' +
                     '<div class="col-md-1">' +
                     '<button type="button" onclick="delNewRow(' + row_counter +
                     ')" class="btn btn-danger btn-sm">-</button>' +
                     '</div>' +
                     '</div>';


                 $('#curriculum').append(data);


             }


             function delNewRow(row) {

                 $('#cc_row_' + row).remove();


             }
             </script>


             <script type="text/javascript" src="assets/js/page/ckeditor.js"></script>

         </div>
     </section>


     <div class="settingSidebar">
         <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
         </a>
         <div class="settingSidebar-body ps-container ps-theme-default">
             <div class=" fade show active">
                 <div class="setting-panel-header">Setting Panel
                 </div>

                 <div class="p-15 border-bottom">
                     <h6 class="font-medium m-b-10">Select Layout</h6>
                     <div class="selectgroup layout-color w-50">
                         <label class="selectgroup-item">
                             <input type="radio" name="layout" value="1" class="selectgroup-input select-layout">
                             <span class="selectgroup-button">Light</span>
                         </label>
                         <label class="selectgroup-item">
                             <input type="radio" name="layout" checked value="2"
                                 class="selectgroup-input select-layout">
                             <span class="selectgroup-button">Dark</span>
                         </label>
                     </div>
                 </div>
                 <div class="p-15 border-bottom">
                     <h6 class="font-medium m-b-10">Sidebar Color</h6>
                     <div class="selectgroup selectgroup-pills sidebar-color">
                         <label class="selectgroup-item">
                             <input type="radio" name="sidebar_color" value="1"
                                 class="selectgroup-input select-sidebar">
                             <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                 data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                         </label>
                         <label class="selectgroup-item">
                             <input type="radio" name="sidebar_color" value="2" checked
                                 class="selectgroup-input select-sidebar">
                             <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                 data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                         </label>
                     </div>
                 </div>
                 <div class="p-15 border-bottom">
                     <h6 class="font-medium m-b-10">Color Theme</h6>
                     <div class="theme-setting-options">
                         <ul class="choose-theme list-unstyled mb-0">
                             <li title="white" class="">
                                 <div class="white"></div>
                             </li>
                             <li title="cyan" class="">
                                 <div class="cyan"></div>
                             </li>
                             <li title="black" class=" active ">
                                 <div class="black"></div>
                             </li>
                             <li title="purple" class="">
                                 <div class="purple"></div>
                             </li>
                             <li title="orange" class="">
                                 <div class="orange"></div>
                             </li>
                             <li title="green" class="">
                                 <div class="green"></div>
                             </li>
                             <li title="red" class="">
                                 <div class="red"></div>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="p-15 border-bottom">
                     <div class="theme-setting-options">
                         <label>
                             <span class="control-label p-r-20">Mini Sidebar</span>
                             <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                 id="mini_sidebar_setting">
                             <span class="custom-switch-indicator"></span>
                         </label>
                     </div>
                 </div>



                 <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                     <div class="btn-group btn-group-sm">
                         <button class="btn btn-danger btn-restore-theme"><i class="fas fa-undo"></i> Reset</button>
                         <button onclick="saveSetting()" class="btn btn-primary"><i class="fas fa-save"></i>
                             Save</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>