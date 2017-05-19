<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
        <script src="{{ @BASE }}js/validation.js"></script>
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Student Submission Form</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <form action="" method="post" class="login-form" id="signup-form">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                        <input type="text" class="form-control" name="fname" id="fname" class="inline-form" maxlength="50" placeholder="First Name" autofocus required>
<h5 class="required-help">This information is required</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                             
                                            <input type="text" class="form-control" name="lname" id="lname" class="inline-form" maxlength="50" placeholder="Last Name" required>
<h5 class="required-help">This information is required</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-12 input-group">
                                            <input type="email" class="form-control" name="school_email" id="school_email" class="inline-form" placeholder="Student Email Address" required><h5 class="required-help">This information is required</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-12 input-group">
                                            <input type="email" class="form-control" name="prime_email" id="primary_email" class="inline-form" placeholder="Non-Student Email Address" required><h5 class="required-help">This information is required</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <fieldset class="form-group radio-display">
                                              <h4>Are you a veteran of the US Armed Forces?</h4>
<h5 class="required-help-slim">This information is required</h5>

                                              
                                                <div class="radio">
                                                  <label><input type="radio" value="1" name="veteran"><span>Yes</span></label>
                                                </div>
                                                <div class="radio">
                                                  <label><input type="radio" value="0" name="veteran" checked><span>No</span></label>
                                                </div>
                                            </fieldset>

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <fieldset class="form-group radio-display-lg">
                                              <h4>Major:</h4>
<h5 class="required-help-slim">This information is required</h5>
                                                <div class="radio text-center">
                                                  <label><input type="radio" value="Software Development" name="degree"><span>Software Development</span></label>
                                                </div>
                                                <div class="radio">
                                                  <label><input type="radio" value="Network Security" name="degree"><span>Network Security</span></label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-12 form-group">
                                            
                                            <label for="bio">Elevator Pitch:</label>
<h5 class="required-help-slim">This information is required</h5>
                                            <textarea class="form-control" name="bio" maxlength="1000" rows="10" cols="50" id="bio" placeholder="Tell us who you are, what you do best, how you have made an impact, what sets you apart, and what you are seeking. Be friendly, conversational, and concise." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-12 input-group">
                                            <div class="input-group-addon">Graduation Date</div>
                                            <input type="date" class="form-control" name="graduation" id="graduation" class="inline-form" required>
                                        </div>
<h5 class="required-help-slim">This information is required</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
                                            <input type="text" class="form-control" name="twitter" id="twitter" class="inline-form" maxlength="200" placeholder="Twitter">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
                                            <input type="text" class="form-control" name="linkedin" id="linkedin" class="inline-form" maxlength="200" placeholder="Linkedin">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-share-alt"></i></div>
                                            <input type="text" class="form-control" name="portfolio" id="portfolio" class="inline-form" maxlength="200" placeholder="Portfolio">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                            <input type="text" class="form-control" name="facebook" id="facebook" class="inline-form" maxlength="200" placeholder="Facebook">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 input-group">
                                            <div class="input-group-addon"><i class="fa fa-github"></i></div>
                                            <input type="text" class="form-control" name="github" id="github" class="inline-form" maxlength="200" placeholder="github">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 border-left">
                                        <div class="col-sm-12">
                                            <fieldset class="form-group" id="checkbox-display">
                                              <h4>Favorite Technologies (pick up to 5):</h4>
<h5 class="required-help-slim">This information is required</h5>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="HTML" name="technologies[]"><span>HTML</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="CSS" name="technologies[]"><span>CSS</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="XML" name="technologies[]"><span>XML</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="PHP" name="technologies[]"><span>PHP</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Java" name="technologies[]"><span>Java</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="JavaScript" name="technologies[]"><span>JavaScript</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Linux" name="technologies[]"><span>Linux</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Python" name="technologies[]"><span>Python</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="SQL" name="technologies[]"><span>SQL</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="NoSQL" name="technologies[]"><span>NoSQL</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="MySQL" name="technologies[]"><span>MySQL</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="C#" name="technologies[]"><span>C#</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="C++" name="technologies[]"><span>C++</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="LAMP stack" name="technologies[]"><span>LAMP stack</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="MEAN stack" name="technologies[]"><span>MEAN stack</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Node.js" name="technologies[]"><span>Node.js</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Angular.js" name="technologies[]"><span>Angular.js</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Rest.js" name="technologies[]"><span>Rest.js</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Meteor.js" name="technologies[]"><span>Meteor.js</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Unity" name="technologies[]"><span>Unity</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Swift" name="technologies[]"><span>Swift</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Arduino" name="technologies[]"><span>Arduino</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Raspbery Pi" name="technologies[]"><span>Raspbery Pi</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Agile" name="technologies[]"><span>Agile</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Scrum" name="technologies[]"><span>Scrum</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Wordpress" name="technologies[]"><span>Wordpress</span></label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input class="checkboxes" type="checkbox" value="Android Studio" name="technologies[]"><span>Android Studio</span></label>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>

                        </div>
                                <div class="col-sm-offset-4 col-sm-4">
                                    <input type="submit" value="Submit" class="form-control btn">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />
        </footer>
    </body>
</html>
