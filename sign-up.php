 <?php include('includes/head.php') ?>
 <?php include('includes/header.php'); ?>


 <section class="container-fluid mt-5 p-0">
     <div class="container">
         <div class="row">
             <div class="col-md-8">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="title text-left">
                            <h2 class="pl-0">Sign up</h2>
                        </div>
                    </div>
                     <div class="col-md-12">
                        <form class="signup">
                            <div class="form-group">
                                <label class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label">Re-type Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label">Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label">Phone</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label class="col-md-2 col-form-label">Gender</label>
                                <div class="col-md-10">                                    
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="male" name="gender" class="custom-control-input">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="female" name="gender" class="custom-control-input">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label">Date of birth</label>
                                <div class="col-md-10">
                                    <div class="datepicker date input-group p-0">
                                        <input type="text" placeholder="Date of birth" class="form-control">
                                        <div class="input-group-append align-items-center"><span class="px-4"><img src="images/calander.svg" /></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label" for="country">Country</label>
                                <div class="col-md-10">
                                    <div class="rail-select">
                                        <span class="select-side"></span>
                                        <select class="form-control" id="country">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-form-label" for="city">City</label>
                                <div class="col-md-10">
                                    <div class="rail-select">
                                        <span class="select-side"></span>
                                        <select class="form-control" id="city">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                            <label class="col-md-2 col-form-label empty">&nbsp;</label>
                                <div class="col-md-10 singup-btn">
                                    <div class="grp-checkbox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="one">
                                            <label class="custom-control-label" for="one">ITP can contact me in future</label>
                                        </div>
                                        <div class="custom-control custom-checkbox my-1">
                                            <input type="checkbox" class="custom-control-input" id="two">
                                            <label class="custom-control-label" for="two">Get offers and promotions from third parties</label>
                                        </div>
                                    </div>
                                     <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                            </div>
                        </form>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="ad1 mt-0">
                     <h2>300<br> x <br>600</h2>
                 </div>
             </div>
         </div>
     </div>
 </section>



 <?php include('includes/footer.php'); ?>
 <?php include('includes/foot.php'); ?>


 </body>

 </html>