<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
                <div class="col-md-12">
                    <h1 class="text-center">{{ @user['fname'] }} {{ @user['lname'] }}</h1>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <img class="logo img-responsive" src="{{ @user['image_path'] }}">
                        <h2 class="text-center">{{ @user['degree'] }}</h2>
                        <h2 class="text-center">Class of: {{ @user['grad_date'] }}</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12 bio-area">
                        <p>{{ @user['bio'] }}</p>
                        <p>{{ @user['technologies'] }}</p>
                    </div>
                </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />   
        </footer>    
    </body>
</html>
