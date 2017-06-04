<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <div class="alert alert-info alert-dismissible show" role="alert">
        <button type="button" class="close text-right" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove red"></span>
        </button>
        <strong><i class="fa fa-comment-o"></i> Help make this site better! </strong><a href="https://goo.gl/forms/g6nOXiik1W0frpLA2" target="_blank" class="alert-info">Click here to provide feedback</a>
    </div>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container" id="profiles">
                <repeat group="{{ @users }}" value="{{ @user }}">
                    <div class="col-md-3 col-sm-4 col-xs-6 split-top-sm">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center styled-heading">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center styled-heading hidden-xs">Class of {{ @user['grad_date'] }}</h5>                            
                        </div>                    
                    </div>                                      
                 </repeat>
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
