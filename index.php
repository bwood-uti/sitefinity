<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Universal Technical Institute</title>

        <?php include("styles.php") ?>
        <style>
                        #completed a {
              font-size: 20px;
            }
            
                       #completed .outer-xs {
              margin-top: 10px;
              margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
	    
        <?php include("navbar.php") ?>

       <div class="container-full">

        <main>
            <section id="sub-header" class="sub-header dark-bg">

                <div class="container inner-xs">
                    <div class="row">
                        <div class="col-md-12">

                            <h1 class="no-bottom-margin center-block text-center">Page List</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section id="completed" class="light-bg">

                <div class="container container inner-xs">

                    <div class="row inner-top-sm">

                        <h3 class="text-center">Completed</h3>
                        
                        <!--
	                     <div class="col-sm-12 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Home Page</h5>
                                        UTI Home Page
                                        <p> <a href="home.php" target="_blank" target="_blank">View</a></p>
                                    </div>
                                </figcaption>
                            </figure>

                        </div>
                         -->
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Home v2</h5>
                                         Shows alternative Layout of the homepage with more content and h1 with full UTI name and acronym.
                                        <p> <a href="home2.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        
                        <!--
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Home v3</h5>
                                         Shows alternative Layout of the homepage with more content and h1 with full UTI name and acronym.
                                        <p> <a href="home3.php" target="_blank">View</a></p>
                                    </div>
                                </figcaption>
                            </figure>

                        </div>
                        
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Navigation V2 </h5>
                                         Shows alternative navigation layout.
                                        <p> <a href="http://utidemo.s3.amazonaws.com/UTICorporate/header-navigationv2.html" target="_blank">View</a></p>
                                    </div>
                                </figcaption>
                            </figure>

                        </div>
	                        <div class="col-sm-12 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Navigation V3 (clean)</h5>
                                         An all white clean header with sticky nav
                                        <p> <a href="home4-clean-nav.php" target="_blank">View</a></p>
                                    </div>
                                </figcaption>
                            </figure>

                        </div>-->
                        
                        <!-- /.col -->
                        
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Navigation V3 <span class="label label-danger">New</span></h5>
                                         UTI Header with Stick Navidation
                                        <p> <a href="home5-nav-affixed.php" target="_blank">View</a></p>
                                        <p></p><p></p><p></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div>
                        
                    </div><!-- /.row -->
                        
                    <div class="row">
                    
                    
                        <div class="col-sm-4 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Programs List</h5>
                                         A List of UTI Programs
                                        <p> <a href="programs.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-4 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Program Page</h5>
                                       An Example of a Programs page.
                                        <p> <a href="program-with-subnav.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-4 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Program Page w/o Subnav</h5>
                                       An Example of a UTI Program
                                        <p> <a href="program.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                        
                    <div class="row">
                        
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Campus List</h5>
                                        A List of UTI Campuses
                                        <p> <a href="campuses.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Campus Page</h5>
                                        Example of a campus Page
                                        <p> <a href="campus.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                    </div><!-- /.row -->    
                            
                    <div class="row">
	                    
	                    
                        <div class="col-sm-12 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Partners List</h5>
                                        A List of UTI Partners
                                        <p> <a href="partners.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-12 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>GED Assistance</h5>
                                        Example of a page with an accordion and resource box. 
                                        <p> <a href="GEDassistance.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-4 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Events (V1)</h5>
                                      Layout of Events
                                        <p> <a href="events.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-4 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Events (V2)</h5>
                                       Alternative version of Events
                                        <p> <a href="events2.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-4 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Events Timeline(V3)</h5>
                                        Timeline Layout of Events  <p><a href="events3.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Student Svcs</h5>
                                         Shows Icon Layout<p><a href="student-services.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                        <div class="col-sm-6 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Student Svcs (v2)</h5>
                                         Shows alternative Icon Layout
                                        <p> <a href="student-services2.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>
                        </div><!-- /.col -->

                        <div class="col-sm-12 outer-xs">
                            <figure>

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h5>Success Stories grid</h5>
                                        A way to categorize the page linked to from the counselors page which is getting too long for old design.
                                        <p> <a href="success-stories.php" target="_blank">View</a></p>
                                    </div><!-- /.info -->
                                </figcaption>
                            </figure>

                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div><!-- /.container -->
            </section>




            <section id="sub-header" class="sub-header dark-bg">

                <div class="container inner-xs">
                    <div class="row">
                        <div class="col-md-12">

                            <h1 class="no-bottom-margin center-block text-center">TO DO</h1>
                        </div>
                    </div>
                </div>
            </section>



            <section id="to-do" class="light-bg">

                <div class="container container inner-top-sm inner-bottom-xs">

                    <div class="col-sm-4">
                        <figure>

                            <figcaption class="bordered no-top-border">
                                <div class="info">
                                    <h5>Partners Page</h5>
                                    <!--<p> <a href="index.php" target="_blank">View</a></p>-->
                                </div><!-- /.info -->
                            </figcaption>
                        </figure>

                    </div><!-- /.col -->

                    <div class="col-sm-12 inner-top-xs">
                        <figure>

                            <figcaption class="bordered no-top-border">
                                <div class="info">
                                    <h5 style="text-decoration: line-through;">Add Hover Intent to navigation</h5>
                                    <!--<p> <a href="index.php" target="_blank">View</a></p>-->
                                </div><!-- /.info -->
                            </figcaption>
                        </figure>

                    </div><!-- /.col -->
                    <div class="col-sm-12 inner-top-xs">
                        <figure>

                            <figcaption class="bordered no-top-border">
                                <div class="info">
                                    <h5 style="text-decoration: line-through;">Add Mobile Search</h5>
                                    <!--<p> <a href="index.php" target="_blank">View</a></p>-->
                                </div><!-- /.info -->
                            </figcaption>
                        </figure>

                    </div>
                  
                </div><!-- /.container -->
            </section>

        </main>


        <?php include("social-media.php") ?>

        <?php include("footer.php") ?>
        <?php include("javascript.php") ?>
       </div>
    </body>


</html>
