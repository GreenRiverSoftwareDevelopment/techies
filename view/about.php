<!DOCTYPE html>
<html>
    <head>
        <include href="{{ @head_title }}" />
    </head>
    <body id="body">
        <include href="{{ @nav }}" />
            <div class="container">
              <div class="col-xs-12 col-md-7" id="about">
                <p>
                  Green River Techies is a photo web project that showcases the diverse backgrounds and stories of software development students in the Pacific Northwest.
                  It derives unequivocal inspiration from <a href="http://www.techiesproject.com/">techiesproject.com</a>,
                  a gorgeous website from the mind of Helena Price designed to spotlight workers underrepresented in the tech sector — with a twist.
                </p>
                <p>
                  While techiesproject.com depicts employees in Silicon Valley,
                  Green River Techies focuses exclusively on students pursuing a bachelor’s degree in
                  software development at Green River College, a mid-sized community college at the
                  heart of Seattle-Tacoma and <a href="http://time.com/4148233/college-student-diversity-top-campuses/">Time’s #1 most diversified college</a> of 2015.
                </p>
                <p>
                  Our <a href="http://www.greenriver.edu/academics/areas-of-study/bas-programs/software-development.htm">bachelor’s in software development</a> is home to traditional students,
                  transitioning Veterans, international students, and career changers alike.
                  Green River Techies now provides a beautiful way to celebrate their work.
                </p>
                <p>
                  This project also sheds light on the role public community colleges play in
                  expanding the tech talent pipeline for companies in Seattle-Tacoma.
                  By entering the four-year degree space, Green River presents <a href="https://medium.com/green-river-web-mobile-developers/open-letter-to-big-tech-two-simple-words-can-help-you-diversify-4b02613d9cf0">a compelling solution</a>
                  for helping regional tech diversify its workforce.
                </p>
                <p>
                  Special thanks goes out to our photographer, Karl, and to three special students,
                  Jacob, Angelo, and Dmitriy, who in the span of nine weeks,
                  translated a vision for Green River Techies into working software as part of
                  class project in IT 355 Agile Development Methods.
                </p>
                <p>
                  Thanks for visiting. If this project strikes a chord,
                  give it a share so others can discover our students, too.
                </p>
              </div>
            <div class="col-xs-12 col-md-5 hidden-md">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/images/users/JL.jpg" title="Jacob Laqua" alt="Jacob Laqua" class="img-responsive">
                    </div>

                    <div class="item">
                      <img src="/images/users/DD.jpg" title="Dmitriy Arkhipchuk" alt="Dmitriy Arkhipchuk" class="img-responsive">
                    </div>

                    <div class="item">
                      <img src="/images/users/AB.jpg" title="Angelo Blanchard" alt="Angelo Blanchard" class="img-responsive">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            </div>
        <footer>
            <include href="{{ @footer }}" />
        </footer>
    </body>
</html>
