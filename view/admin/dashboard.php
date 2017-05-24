<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <check if="{{ isset($_SESSION['logged']) && isset($_SESSION['logged']['username']) }}">
                    <true>               
                        
                        <div class="col-md-6 col-xs-12">
                             <h2>Live Profiles</h2>
                             <repeat group="{{ @users }}" value="{{ @user }}">
                                 <div class="panel-group">
                                     <div class="panel panel-default">
                                         <div class="panel-heading">
                                             <h4 class="panel-title">
                                                 <a data-toggle="collapse" href="#collapse{{ @user['id'] }}"><h4>{{ @user['fname'] }} {{ @user['lname'] }}</h4></a>
                                             </h4>
                                         </div>
                                         <div id="collapse{{ @user['id'] }}" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                  <a href="{{ @BASE }}/hide/{{ @user['id'] }}" class="about-link"><h4 class="text-center"><i class="fa fa-thumbs-o-down red"></i> Pull Offline</h4></a>
                                                 <form action="" method="post" class="login-form" id="signup-form" enctype="multipart/form-data">
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                         <input type="text" class="form-control" name="fname" id="fname" class="inline-form" maxlength="50" value="{{ @user['fname'] }}" autofocus required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">                                                     
                                                             <input type="text" class="form-control" name="lname" id="lname" class="inline-form" maxlength="50" value="{{ @user['lname'] }}" required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 input-group">
                                                             <input type="email" class="form-control" name="school_email" id="school_email" class="inline-form" value="{{ @user['school_email'] }}" required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 input-group">
                                                             <input type="email" class="form-control" name="prime_email" id="primary_email" class="inline-form" value="{{ @user['prime_email'] }}"required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 form-group">
                                                             
                                                             <label for="bio">Elevator Pitch:</label>
                                                             <textarea class="form-control" name="bio" maxlength="1000" rows="10" cols="50" id="bio">{{ @user['bio'] }}</textarea>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
                                                             <input type="text" class="form-control" name="twitter" id="twitter" class="inline-form" maxlength="200" value="{{ @user['twitter'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
                                                             <input type="text" class="form-control" name="linkedin" id="linkedin" class="inline-form" maxlength="200" value="{{ @user['linkedin'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-share-alt"></i></div>
                                                             <input type="text" class="form-control" name="portfolio" id="portfolio" class="inline-form" maxlength="200" value="{{ @user['portfolio'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                                             <input type="text" class="form-control" name="facebook" id="facebook" class="inline-form" maxlength="200" value="{{ @user['facebook'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-github"></i></div>
                                                             <input type="text" class="form-control" name="github" id="github" class="inline-form" maxlength="200" value="{{ @user['github'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 input-group">
                                                             <input type="file" name="fileToUpload" class="form-control">
                                                             <div class="input-group-addon"><i class="fa fa-photo"></i></div>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-offset-4 col-sm-4 split-top-sm">
                                                         <input type="number" name="id" value="{{ @user['id'] }}" class="hidden">
                                                         <input type="text" name="image_path" value="{{ @user['image_path'] }}" class="hidden">
                                                         <input type="submit" value="Update" class="form-control btn">
                                                     </div>
                                                 </form>
                                             
                                             </div>
                                             <div class="panel-footer"></div>
                                         </div>
                                     </div>
                                 </div>
                              </repeat>
                         </div>
                         <div class="col-md-6 col-xs-12">
                             <h2>Pending Profiles</h2>
                             <repeat group="{{ @pendingUsers }}" value="{{ @pendingUser }}">
                                 <div class="panel-group">
                                     <div class="panel panel-default">
                                         <div class="panel-heading">
                                             <h4 class="panel-title">
                                                 <a data-toggle="collapse" href="#collapse{{ @pendingUser['id'] }}"><h4>{{ @pendingUser['fname'] }} {{ @pendingUser['lname'] }}</h4></a>
                                             </h4>
                                         </div>
                                         <div id="collapse{{ @pendingUser['id'] }}" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                 <a href="{{ @BASE }}/show/{{ @pendingUser['id'] }}" class="about-link"><h4 class="text-center"><i class="fa fa-thumbs-o-up green"></i> Make Live</h4></a>
                                                 <form action="" method="post" class="login-form" id="signup-form" enctype="multipart/form-data">
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                         <input type="text" class="form-control" name="fname" id="fname" class="inline-form" maxlength="50" value="{{ @pendingUser['fname'] }}" autofocus required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">                                                     
                                                             <input type="text" class="form-control" name="lname" id="lname" class="inline-form" maxlength="50" value="{{ @pendingUser['lname'] }}" required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 input-group">
                                                             <input type="email" class="form-control" name="school_email" id="school_email" class="inline-form" value="{{ @pendingUser['school_email'] }}" required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 input-group">
                                                             <input type="email" class="form-control" name="prime_email" id="primary_email" class="inline-form" value="{{ @pendingUser['prime_email'] }}"required>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 form-group">
                                                             
                                                             <label for="bio">Elevator Pitch:</label>
                                                             <textarea class="form-control" name="bio" maxlength="1000" rows="10" cols="50" id="bio">{{ @pendingUser['bio'] }}</textarea>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
                                                             <input type="text" class="form-control" name="twitter" id="twitter" class="inline-form" maxlength="200" value="{{ @pendingUser['twitter'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
                                                             <input type="text" class="form-control" name="linkedin" id="linkedin" class="inline-form" maxlength="200" value="{{ @pendingUser['linkedin'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-share-alt"></i></div>
                                                             <input type="text" class="form-control" name="portfolio" id="portfolio" class="inline-form" maxlength="200" value="{{ @pendingUser['portfolio'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                                             <input type="text" class="form-control" name="facebook" id="facebook" class="inline-form" maxlength="200" value="{{ @pendingUser['facebook'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12 input-group">
                                                             <div class="input-group-addon"><i class="fa fa-github"></i></div>
                                                             <input type="text" class="form-control" name="github" id="github" class="inline-form" maxlength="200" value="{{ @pendingUser['github'] }}">
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="col-sm-12 input-group">
                                                             <input type="file" name="fileToUpload" class="form-control">
                                                             <div class="input-group-addon"><i class="fa fa-photo"></i></div>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-offset-4 col-sm-4 split-top-sm">
                                                         <input type="number" name="id" value="{{ @pendingUser['id'] }}" class="hidden">
                                                         <input type="text" name="image_path" value="{{ @pendingUser['image_path'] }}" class="hidden">
                                                         <input type="submit" value="Update" class="form-control btn">
                                                     </div>
                                                 </form>
                                             
                                             </div>
                                             <div class="panel-footer"></div>
                                         </div>
                                     </div>
                                 </div>
                              </repeat>                    
                         </div>
                         <div class="row">
                            <div class="col-xs-12 text-center">
                                <a href="{{ @BASE }}/logout" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                            </div>
                         </div>
                    </true>
                    <false>
                        <div class="col-sm-12 login-form home-story-div">
                            <div class="col-sm-offset-3 col-sm-6 baby-box shadow">
                                <form action="" method="post" id="login-form" class="split alt-shade">
                                    <div class="input-group shim">
                                      <div class="input-group-addon"><span class="glyphicon glyphicon-user"></div>
                                      <input type="text" name="username" id="login_username" class="form-control inline-form" placeholder="Admin Username" autofocus>
                                        <div class="alert alert-danger hidden">
                                            <strong>Error: </strong><span id="email-error"></span>
                                        </div>
                                    </div>                            
                                    <div class="input-group split shim">
                                      <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></div>
                                      <input type="password" name="password" id="login_password" class="form-control inline-form" placeholder="Admin Password">
                                        <div class="alert alert-danger hidden">
                                            <strong>Error: </strong><span id="password-error"></span>
                                        </div>
                                    </div>    
                                    <div class="col-sm-offset-4 col-sm-4 split-top-sm">
                                        <input id="login-submit" type="submit" value="Log In" class="form-control btn">
                                    </div>                           
                                </form> 
                            </div>
                        </div>
                    </false>
                </check>       
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
