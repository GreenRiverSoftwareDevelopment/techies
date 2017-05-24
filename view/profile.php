<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h1>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <img class="logo img-responsive" src="{{ @user['image_path'] }}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12 split-top">
                            <p>{{ nl2br(@user['bio']) }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-xs-12">
                            <h2 class="text-center">{{ @user['degree'] }}</h2>
                            <h2 class="text-center">Class of: {{ @user['grad_date'] }}</h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <h3>Favorite Technologies:</h3>
                            <repeat group="{{ @user['technologies'] }}" value="{{ @tech }}">
                                <button>{{ @tech }}</button>
                             </repeat>
                        </div>
                    </div>
                </div>
                <div class="row split-top">
                    <div class="col-xs-2 col-xs-offset-1 ">
                        <div class="col-xs-12">
                            <a href="{{ @user['linkedin'] }}" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-12">
                            <a href="{{ @user['portfolio'] }}" target="_blank"><i class="fa fa-share-alt fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-12">
                            <a href="{{ @user['github'] }}" target="_blank"><i class="fa fa-github fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-12">
                            <a href="{{ @user['twitter'] }}" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-12">
                            <a href="{{ @user['facebook'] }}" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                        </div>
                    </div>            
                </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
