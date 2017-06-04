<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <div class="row">
                    <!-- Left side -->
                    <div class="col-md-5">
                        <div class="col-md-12">
                            <img class="logo img-responsive" src="{{ @BASE }}/{{ @user['image_path'] }}">
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="col-md-7">
                        <div class="col-xs-12">
                            <h1 class="text-center styled-heading">{{ @user['fname'] }} {{ @user['lname'] }}</h1>
                        </div>
                        <div class="col-xs-12">
                            <h2 class="text-center styled-heading">{{ @user['degree'] }} | {{ @user['grad_date'] }}</h2>
                        </div>
                        <div class="col-md-12 split-top-sm">
                            <p class="styled-body">{{ @user['bio'] }}</p>
                        </div>
                        <div class="col-md-12">
                            <h3 class="styled-heading">Favorite Technologies:</h3>
                            <repeat group="{{ @user['technologies'] }}" value="{{ @tech }}">
                                <button class="button">{{ @tech }}</button>
                             </repeat>
                        </div>
                        <check if="{{ @cols != '' }}">
                            <div class="col-xs-12">
                                <h3 class="styled-heading">Find me on:</h3>
                            </div>
                        </check>
                        <check if="{{ @user['linkedin'] != ''}}">
                            <div class="{{ @cols }} split-top-sm text-center">
                                <div class="col-xs-12">
                                    <a href="{{ @user['linkedin'] }}" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                </div>
                            </div>
                        </check>
                        <check if="{{ @user['github'] != ''}}">
                            <div class="{{ @cols }} split-top-sm text-center">
                                <div class="col-xs-12">
                                    <a href="{{ @user['github'] }}" target="_blank"><i class="fa fa-github fa-2x"></i></a>
                                </div>
                            </div>
                        </check>
                        <check if="{{ @user['portfolio'] != ''}}">
                            <div class="{{ @cols }} split-top-sm text-center">
                                <div class="col-xs-12">
                                    <a href="{{ @user['portfolio'] }}" target="_blank"><i class="fa fa-share-alt fa-2x"></i></a>
                                </div>
                            </div>
                        </check>
                        <check if="{{ @user['twitter'] != ''}}">
                            <div class="{{ @cols }} split-top-sm text-center">
                                <div class="col-xs-12">
                                    <a href="{{ @user['twitter'] }}" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                </div>
                            </div>
                        </check>
                        <check if="{{ @user['facebook'] != ''}}">
                            <div class="{{ @cols }} split-top-sm text-center">
                                <div class="col-xs-12">
                                    <a href="{{ @user['facebook'] }}" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                                </div>
                            </div>    
                        </check>     
                    </div>
                </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
