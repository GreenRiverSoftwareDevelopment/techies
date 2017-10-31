<!DOCTYPE html>
<html>
<head>
    <include href="{{ @head_title }}" />
</head>
<div class="alert alert-info alert-dismissible show black" role="alert">
    <button type="button" class="close text-right" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" class="glyphicon glyphicon-remove black"></span>
    </button>
    <strong><i class="fa fa-comment-o"></i> Help make this site better! </strong><a href="https://goo.gl/forms/g6nOXiik1W0frpLA2" target="_blank" class="alert-info black">Click here to provide feedback</a>
</div>
<body id="body">
<include href="{{ @nav }}" />
<check if="{{ isset(@errors) }}">
    <include href="{{ @problems }}" />
</check>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2 class="styled-heading text-center">Student Submission Form</h2>
            <h4 class="styled-heading text-center split-top-sm">We are currently collecting student submissions</h4>
        </div>
        <div class="col-sm-8">
            <div class="col-sm-12">
                <form name="signup-form" action="" method="post" class="login-form" id="signup-form">
                    <div class="col-md-6">
                        <div class="col-xs-12 input-group" id="fname_form">
                            <input type="text" class="form-control" name="fname" id="fname" class="inline-form"
                                   maxlength="50" placeholder="First Name"
                                   value="{{ @sticky['fname'] }}" autofocus required>
                            <span class="glyphicon form-control-feedback" id="fname_glyph"></span>
                            <h5 class="required-help">Your first name is required</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-xs-12 input-group" id="lname_form">
                            <input type="text" class="form-control" name="lname" id="lname" class="inline-form"
                                   maxlength="50" placeholder="Last Name"
                                   value="{{ @sticky['lname'] }}" required>
                            <span class="glyphicon form-control-feedback" id="lname_glyph"></span>
                            <h5 class="required-help">Your last name is required</h5>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-xs-12 input-group" id="schoolemail_form">
                            <input type="email" class="form-control" name="school_email" id="school_email" class="inline-form"
                                   placeholder="Student Email Address"
                                   value="{{ @sticky['school_email'] }}" required>
                            <span class="glyphicon form-control-feedback" id="schoolemail_glyph"></span>
                            <h5 class="required-help">Your school email is required</h5>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-xs-12 input-group" id="primeemail_form">
                            <input type="email" class="form-control" name="prime_email" id="primary_email" class="inline-form"
                                   placeholder="Non-Student Email Address"
                                   value="{{ @sticky['prime_email'] }}" required>
                            <span class="glyphicon form-control-feedback" id="primeemail_glyph"></span>
                            <h5 class="required-help">Your non-school email is required</h5>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12 no-pad">
                            <fieldset class="form-group" id="radio-display">
                                <h4 class="styled-heading">Are you a veteran of the US Armed Forces?</h4>
                                <h5 class="required-help-slim">Your veteran status is required</h5>
                                <div class="radio">
                                    <label><input type="radio" value="1" name="veteran"><span>Yes</span></label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" value="0" name="veteran"><span>No</span></label>
                                </div>
                            </fieldset>

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12 no-pad">
                            <fieldset class="form-group" id="radio-display-lg">
                                <h4 class="styled-heading">Major field of study:</h4>
                                <h5 class="required-help-slim">Your major is required</h5>
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
                        <div class="col-sm-12 form-group no-pad">

                            <h4 class="styled-heading">Elevator Pitch:</h4>
                            <h5 class="required-help-slim">Your elevator pitch is required</h5>
                            <textarea class="form-control" name="bio" maxlength="1000" rows="10" cols="50" id="bio" placeholder="Tell us who you are, what you do best, how you have made an impact, what sets you apart, and what you are seeking. Be friendly, conversational, and concise." required>{{ @sticky['bio'] }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12 input-group">
                            <div class="input-group-addon">Graduation Year</div>
                            <input type="number" class="form-control" name="graduation" id="graduation"
                                   class="inline-form" min="2017"
                                   value="{{ @sticky['graduation'] }}" required>
                        </div>
                        <h5 class="required-help-slim">Your graduation year is required</h5>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
                            <input type="text" class="form-control" name="twitter" id="twitter" class="inline-form"
                                   maxlength="200" placeholder="e.g., https://www.twitter.com/"
                                   value="{{ @sticky['twitter'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
                            <input type="text" class="form-control" name="linkedin" id="linkedin" class="inline-form"
                                   maxlength="200" placeholder="e.g., https://www.linkedin.com/"
                                   value="{{ @sticky['linkedin'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <div class="input-group-addon"><i class="fa fa-share-alt"></i></div>
                            <input type="text" class="form-control" name="portfolio" id="portfolio" class="inline-form"
                                   maxlength="200" placeholder="e.g., http://www.yourdomain.com/"
                                   value="{{ @sticky['portfolio'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <div class="input-group-addon"><i class="fa fa-facebook"> </i></div>
                            <input type="text" class="form-control" name="facebook" id="facebook" class="inline-form"
                                   maxlength="200" placeholder="e.g., https://www.facebook.com/"
                                   value="{{ @sticky['facebook'] }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <div class="input-group-addon"><i class="fa fa-github"></i></div>
                            <input type="text" class="form-control" name="github" id="github" class="inline-form"
                                   maxlength="200" placeholder="e.g., https://www.github.com/"
                                   value="{{ @sticky['github'] }}">
                        </div>
                    </div>

                    <div class="col-sm-12 border-left split-top-sm">
                        <div class="col-sm-12 no-pad">
                            <fieldset class="form-group" id="checkbox-display">
                                <h4>Favorite Technologies (pick up to 5):</h4>
                                <h5 class="required-help-slim">Your favorite technologies are required</h5>
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
                                    <label><input class="checkboxes" type="checkbox" value="iOS Dev" name="technologies[]"><span>iOS Dev</span></label>
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
                                    <label><input class="checkboxes" type="checkbox" value="jQuery" name="technologies[]"><span>jQuery</span></label>
                                </div>
                                <div class="checkbox">
                                    <label><input class="checkboxes" type="checkbox" value="Android Dev" name="technologies[]"><span>Android Dev</span></label>
                                </div>

                            </fieldset>
                        </div>
                    </div>

            </div>

        </div>
        <div class="col-sm-offset-5 col-sm-6">
            <input type="submit" value="Submit" class="form-control btn">
        </div>
        </form>
    </div>
</div>
</div>
<footer>
    <include href="{{ @footer }}" />
</footer>
</body>
</html>