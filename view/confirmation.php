<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
              <center><h3>Thank You For Submitting</h3></center>
                <div class="col-xs-12 col-md-7">
                  <p>First Name: {{ @fname }}</p>
                  <p>Last Name: {{ @lname }}</p>
                  <p>School Email: {{ @school_email }}</p>
                  <p>Primary Email: {{ @prime_email }}</p>
                  <p>Bio: {{ @bio }}</p>
                </div>

                <div class="col-xs-12 col-md-5">
                  <check if="{{ @veteran == 1 }}">
                    <true>
                        <p>Vetern: Yes</p>
                    </true>
                    <false>
                        <p>Vetern: No</p>
                    </false>
                  </check>

                  <check if="{{ @twitter == '' }}">
                    <true>
                        <p>Twitter: None</p>
                    </true>
                    <false>
                        <p>Twitter: {{ @twitter }}</p>
                    </false>
                  </check>

                  <check if="{{ @linkedin == '' }}">
                    <true>
                        <p>linkedin: None</p>
                    </true>
                    <false>
                        <p>linkedin: {{ @linkedin }}</p>
                    </false>
                  </check>

                  <check if="{{ @facebook == '' }}">
                    <true>
                        <p>Facebook: None</p>
                    </true>
                    <false>
                        <p>Facebook: {{ @facebook }}</p>
                    </false>
                  </check>

                  <check if="{{ @portfolio == '' }}">
                    <true>
                        <p>Portfolio: None</p>
                    </true>
                    <false>
                        <p>Portfolio: {{ @portfolio }}</p>
                    </false>
                  </check>

                  <check if="{{ @github == '' }}">
                    <true>
                        <p>GitHub: None</p>
                    </true>
                    <false>
                        <p>GitHub: {{ @github }}</p>
                    </false>
                  </check>

                  <p>Degree: {{ @degree }}</p>
                  <p>Graduation Date: {{ @graduation }}</p>
                  <p>Technologies: {{ @technologies }}</p>
                </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />
        </footer>
    </body>
</html>
