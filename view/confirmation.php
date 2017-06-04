<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <div class="col-xs-12">
                    <h3 class="text-center styled-heading">Thank You For Submitting</h3>
                    <h4 class="text-center styled-heading">Please allow 24 to 48 hours for your profile to show up on the site</h4>
                    <h5 class="text-center styled-heading">Check below to see how everything looks so far. If there are any issues, feel free to contact one of the Technology Department student advisors.</h5>
                </div>
                <div class="col-xs-12 col-md-7">
                  <p>First Name: {{ @user['fname'] }}</p>
                  <p>Last Name: {{ @user['lname'] }}</p>
                  <p>School Email: {{ @user['school_email'] }}</p>
                  <p>Primary Email: {{ @user['prime_email'] }}</p>
                  <p class="wrap-text">Bio: {{ @user['bio'] }}</p>
                </div>

                <div class="col-xs-12 col-md-5">
                  <check if="{{ @user['veteran'] == 1 }}">
                    <true>
                        <p>Vetern: Yes</p>
                    </true>
                    <false>
                        <p>Vetern: No</p>
                    </false>
                  </check>

                  <check if="{{ @user['twitter'] == '' }}">
                    <true>
                        <p>Twitter: None</p>
                    </true>
                    <false>
                        <p>Twitter: {{ @user['twitter'] }}</p>
                    </false>
                  </check>

                  <check if="{{ @user['linkedin'] == '' }}">
                    <true>
                        <p>Linkedin: None</p>
                    </true>
                    <false>
                        <p>Linkedin: {{ @user['linkedin'] }}</p>
                    </false>
                  </check>

                  <check if="{{ @user['facebook'] == '' }}">
                    <true>
                        <p>Facebook: None</p>
                    </true>
                    <false>
                        <p>Facebook: {{ @user['facebook'] }}</p>
                    </false>
                  </check>

                  <check if="{{ @user['portfolio'] == '' }}">
                    <true>
                        <p>Portfolio: None</p>
                    </true>
                    <false>
                        <p>Portfolio: {{ @user['portfolio'] }}</p>
                    </false>
                  </check>

                  <check if="{{ @user['github'] == '' }}">
                    <true>
                        <p>GitHub: None</p>
                    </true>
                    <false>
                        <p>GitHub: {{ @user['github'] }}</p>
                    </false>
                  </check>

                  <p>Degree: {{ @user['degree'] }}</p>
                  <p>Graduation Date: {{ @user['graduation'] }}</p>
                  <p>Technologies: {{ @user['technologies'] }}</p>
                </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />
        </footer>
    </body>
</html>
