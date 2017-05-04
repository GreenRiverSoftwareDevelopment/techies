<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <repeat group="{{ @users }}" value="{{ @user }}">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center hidden-xs">Class of: <i>{{ @user['grad_date'] }}</i></h5>                            
                        </div>                    
                    </div>                                      
                 </repeat>
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
