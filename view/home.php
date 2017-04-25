<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body>
        <include href="{{ @nav }}" />
            <div class="container">
                <repeat group="{{ @users }}" value="{{ @user }}">
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="col-xs-12">
                            <a href="{{ @BASE }}/meet/{{ @user['id'] }}"><img class="logo img-responsive" src="{{ @user['image_path'] }}"></a>
                            <h5 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h5>
                            <h5 class="text-center">{{ @user['degree'] }}</h5>                            
                        </div>                    
                    </div>  
                 </repeat>
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
