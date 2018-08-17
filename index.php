<?php

/**
 * This php file is meant to handle user subscription by ensuring that their email address
 * is saved then welcome page is sent to the user
 */

require ('Connect/connect.php');

//If a user request a page using a GET method, display the index page
if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
    //Display the index page
    successful();
    exit;
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    //Add the user to database and send the welcome page
    adduser();
}else
{
    successful();
    exit;
}

function successful()
{
    //Main index html page
    $church_index_main = <<< CHURCH_INDEX_MAIN
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Catholic Church">
    <meta name="description" content="Saint+Charles">
    <meta name="description" content="Catholic+Church+Cross+River+State">
    <meta name="description" content="Charles+Lwanga+Parish">
    <meta name="description" content="St. Charles+L'wanga+Parish">
    <meta name="description" content="St.&Charles&L'wanga&Parish">
    
    <meta name="description" content="St. Charles L'wanga Parish">
    <meta name="author" content="Gabriel Etim">


    <title>St. Charles L'wanga Parish</title>

    <!-- Bootstrap Core CSS -->
    <link href="Boot/boot/css/bootstrap.min.css" rel="stylesheet">
    <link href="Boot/boot1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom theme -->
    <link href="CSS/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body data-spy="scroll" id="index-top">

<!-- Section for navigation bar -->
<nav id="churchNav" class="navbar navbar-inverse navbar-fixed-top" style="background-color: #122b40">
    <div class="container-fluid">
        <!-- Services grouped for better mobile view -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#church-menu" style="background-color: #122b40">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#index-top">St. Charles L'wanga Parish</a>
        </div>

        <!--Organise navigation links for toggling -->
        <div class="collapse navbar-collapse" id="church-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#about">About Us</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModaldaily">Daily Meditation</a>
                </li>
                <li>
                    <a href="lib-orgin.php">Online Library</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Parish Records<span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#myModal1">Parish Catechists</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal2">Indigenous Priests & Religious from the Parish</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal3">Past Laity Council Presidents</a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal4">Current Laity Council Members</a> </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal90">Calendar</a>
                </li>
                <li>
                    <a href="#contact-us">Contact Us</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" action="#" method="post" id="join-us">
                <div class="form-group">
                    <input type="email" placeholder="Insert your email" class="form-control" id="inputEmail" name="Input_Email" value="">
                </div>
                <button type="submit" class="btn btn-success" value="join us" id="saveForm" name="saveForm">Join Us</button>
            </form>
        </div>
    </div>
</nav>


<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModaldaily" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: black; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Daily Mediation </h4>
                    <h6 class="modal-title modal-about text-center"><i>(Matthew 19:3)</i></h6>
                </div>
                <div class="modal-body modal-about">
                    <p><h3>19th Week in Ordinary Time</h3></p>
                    <p><strong>Is it lawful for a man to divorce his wife for any cause whatever? (Matthew 19:3) </strong></p><br>
                    
                   <p>Doesn’t it seem like the story of our lives? There’s an ideal that we all want to reach toward, 
                   but it’s so hard to attain. We feel inspired to aim high; yet we often fall short.</p>

                   <p>When Jesus spoke to the Pharisees about divorce, he upheld the ideal: “From the beginning it was 
                   not so” (Matthew 19:8). God made man and woman to become one flesh in an unbreakable bond. But Moses’ 
                   provision for a “writ of divorce” acknowledged the messy and painful reality that some relationships 
                   become too damaged to continue.</p>

                   <p>Of course, Jesus wants every marriage to succeed. He wants us to be faithful in every aspect of 
                   our lives. But he knows we are weak and wounded. He knows that we aren’t completely faithful to other 
                   commands against lying or cheating or gossip. He knows how we struggle to love one another, and how 
                   often we give into our fallen desires. He knows how it feels to be betrayed by our husband or wife. 
                   If the ideal can seem so far out of our reach in our day-to-day relationships, how much more poignant 
                   and painful it can become in a relationship as intimate as marriage.</p>

                   <p>But that’s why Jesus became man in the first place! He came to meet us in our messiness, to walk 
                   with us in our struggles, and to show us the way through them. He offers us his mercy, his healing, 
                   and his compassion all along the way. It’s not simple. It’s not easy. We won’t always succeed. But 
                   he’s with us.</p>
                   
                   <p>So if you’re married and things are going well, bless and thank the Lord. And ask him to keep you 
                   and your spouse together in his love. If you’re married and things are rough, know that Jesus is with 
                   you to strengthen you and that his grace is there to help you weather the storms. And if you’ve gone 
                   through the pain of a divorce, know that Jesus is still with you. He sees your pain. He sees all the 
                   factors that caused the division. And still he loves you and he offers you his mercy, his healing, 
                   and his companionship.</p>
                   
                   <p><strong><i>“Jesus, help me keep pressing on toward the ideal of love that you have shown me!”</i></strong></p>
                    <p class="text-muted">&copy; Word Among Us - Mediation</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->


<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal90" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Parish Calendar</h4>
                </div>
                <div class="modal-body modal-about">
                    <h1 class="text-center">Coming up soon</h1>
                    <!--<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%236633ff&amp;src=hbf6qr81i0s41qlst5ikkqkm6g%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Europe%2FLondon" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Parish Catechists</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Late Sir. Celestine Essien Offiong (KSJI)</strong> - <i>Station Catechist</i></li>
                        <li><strong>Mr. Boniface Essien</strong> - <i>(1979 - 1984)</i></li>
                        <li><strong>Mr. Justine Udom</strong> - <i>(1985 - 2000)</i></li>
                        <li><strong>Mr. Joseph G. Udofia</strong> - <i>(2000 - Till Date)</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Indigenous Priests from the Parish and Ordination Dates</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Rev. Sister Immaculata Ukpong Offiong</strong> - <i>December 20, 1953</i></li>
                        <li><strong>Late Rev. Sister Elizabeth Ukpong Offiong</strong> - <i>December 16, 1962</i></li>
                        <li><strong>Late Rev. Fr. Michael Adim Ukpong Offiong (<i>First Indigenous Efik Priest</i>)</strong> - <i>August 6, 1972</i></li>
                        <li><strong>Rev. Sister Mildred Okon Essien</strong> - <i>August 15, 1983</i></li>
                        <li><strong>Rev. Fr. Emmanuel Okon Andinam</strong> - <i>December 10, 1977</i></li>
                        <li><strong>Rev. Fr. Emmanuel Offiong</strong> - <i>August 16, 2003</i></li>
                        <li><strong>Rev. Fr. Francis Adim Offiong</strong> - <i>November 27, 2010</i></li>
                        <li><strong>Rev. Fr. Gabriel Okem Bulem</strong> - <i>December 30, 2015</i></li>
                        <li><strong>Rev. Fr. Cyril Adim Ukpong Offiong</strong> - <i>October 1, 2016</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Past Laity Council Presidents</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Late Sir. Chief Frank U. A. Offiong</strong> - <i>(Inception - 1960)</i></li>
                        <li><strong>Late Mr. Dominic Akpan</strong> - <i>(1960 - 1963)</i></li>
                        <li><strong>Late Mr. J. Ironbar</strong> - <i>(1963 - 1967)</i></li>
                        <li><strong>Late Mr. Emmanuel Ekpo</strong> - <i>(1967 - 1970)</i></li>
                        <li><strong>Late Mr. Anthony Offiong Etim</strong> - <i>(1970 - 1973)</i></li>
                        <li><strong>Late Mr. Amos Okon Essien</strong> - <i>(1974 - 1979)</i></li>
                        <li><strong>Late Chief E. W. Ekpong</strong> - <i>(1980 - 1985)</i></li>
                        <li><strong>Late Sir. Celestine Offiong</strong> - <i>(1986 - 1990)</i></li>
                        <li><strong>Col. Ferdinard Ekpo-mbang (KSJI)</strong> - <i>(1991 - 1993)</i></li>
                        <li><strong>Sir. William A. Archibong (KSS)</strong> - <i>(1994 - 1999)</i></li>
                        <li><strong>Eti-Ete Donatus B. Etim (KSM)</strong> - <i>(2000 - 2005)</i></li>
                        <li><strong>Mr. Patrick Coco-Bassey</strong> - <i>(2005 - 2011)</i></li>
                        <li><strong>Barr. Michael Cobham (KSM)</strong> - <i>(2011 - 2014)</i></li>
                        <li><strong>Eti-Eka Grand Medalist (Mrs) Lawrencia E. Ita (JP))</strong> - <i>(2014 - 2018)</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: #222222; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true"style="color: white;">&times;</button>
                    <h4 class="modal-title modal-about text-center">Current Laity Council Members</h4>
                </div>
                <div class="modal-body modal-about">
                    <ol>
                        <li><strong>Barr. Paul Asu</strong> - <i>President</i></li>
                        <li><strong>Eti-Eka (Mrs) Mercy Etim</strong> - <i>Vice President</i></li>
                        <li><strong>Sir. Matthew Odey</strong> - <i>Secretary</i></li>
                        <li><strong>Engr. Peter Okopi</strong> - <i>Assistant Secretary</i></li>
                        <li><strong>Mrs. Kate Amaga</strong> - <i>Treasurer</i></li>
                        <li><strong>Mr. Dominic Ekong</strong> - <i>Financial Secretary</i></li>
                        <li><strong>Anthony Ekpo Bassey</strong> - <i>Publicity Secretary</i></li>
                        <li><strong>Miss Gedoni Edu</strong> - <i>Welfare Officer I</i></li>
                        <li><strong>Mrs Rita Ebong</strong> - <i>Welfare Officer II</i></li>
                        <li><strong>Joseph James</strong> - <i>Provost</i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>St. Charles L'wanga Parish</h1>
            <br><h3>Essien Town, Calabar, Cross River State, Nigeria</h3>
            <hr><br>
            <h4>Community of Catholic Faithful</h4>
            <a href="#church-services" class="btn btn-primary page-scroll">Services</a>
        </div>
    </div>
</header>

<!-- Section for church services -->
<section id="church-services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center"><br>
                    <h3 class="well well-sm">Parish Activities</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="col-lg-9 col-md-6 content">
        <div class="row">
            <div class="row">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-bank text-danger"></i>
                        <h4 class="well well-sm text-primary">Confession</h4>
                        <p class="text-muted">Sacrament of Penance and Reconciliation.<br> </p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal42">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-child text-danger"></i>
                        <h4 class="well well-sm text-primary">Baptism</h4>
                        <p class="text-muted">Baptism is the one sacrament that all Christians share in common.</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal43">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-university text-danger"></i>
                        <h4 class="well well-sm text-primary">Catechism</h4>
                        <p class="text-muted">Study about Christianity and view of our faith.</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal44">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-bank text-danger"></i>
                        <h4 class="well well-sm text-primary">Marriage</h4>
                        <p class="text-muted">Union of two individuals coming together to become one.<br> </p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal45">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-shield text-danger"></i>
                        <h4 class="well well-sm text-primary">Funeral</h4>
                        <p class="text-muted">A funeral is a ceremony connected with the burial of a corpse with the attendance observances.</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal46">View details &raquo;</a> </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 text-center">
                    <div class="box">
                        <i class="fa fa-3x fa-child text-danger"></i>
                        <h4 class="well well-sm text-primary">Thanksgiving</h4>
                        <p class="text-muted">The Catholic Church is unique in their emphasis on thanksgiving compared to other religion</p>
                        <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal47">View details &raquo;</a> </p>
                    </div>
                </div>
            </div><!-- /.End of row -->
        </div><!-- /.End of row -->


        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal42" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Sacrament of Reconciliation</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/confession1.jpg" alt="Sacrament of Penance, Reconciliation or Confession" class="img-responsive center-block">
                            <p>This is one of the seven Sacraments of the Catholic Church in which the faithful obtain 
                            absolution for the sins committed against God and neighbour and are reconciled with the 
                            community of the Church.</p> 
                            <p><i>By this Sacrament Christians believed they are freed from sins committed after Baptism.</p>
                
                             <p class="text-center"><strong>Saturdays: 6am</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal43" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Baptism</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/baptism1.jpg" alt="Baptism" class="img-responsive center-block">
                            <p>In the Catholic Church, infants are baptized to welcome them into the Catholic faith and 
                            free them from the original sin they were born with.</p>
                            <p><i>Original sin isn't a personal sin of the unborn, but a sin transmitted from 
                            generation to generation by birth. All men and women were born with original sin, and only 
                            Baptism can be regarded as a vaccine against sin.</i></p>
                            <p class="text-center"><strong>Infant</strong> - 1st Saturday of every month.</p>
                            <p class="text-center"><strong>Adult</strong> - Meet Catechist or Priest.</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal44" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Catechism</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/catechism.jpg" alt="Catechism" class="img-responsive center-block">
                            <p>A catechism is a summary or exposition of Christian/Catholic doctrine and serves as a learning introduction
                            to the Sacraments traditionally used in educating children and adult of the Christian 
                            community.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal45" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Matrimony</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/marriage.jpg" alt="Holy Matrimony" class="img-responsive center-block">
                            <p>Marriage in Catholic Church is referred to as Matrimony. This is the covenant by which a 
                            man and a woman establish themselves a partnership of the whole of life and which is ordered 
                            by its nature to the good of the spouses and the procreation and the education of offspring, 
                            and which has been raised by Christ the Lord to the dignity of a Sacrament between the 
                            baptised.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal46" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Funeral</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/funeral1.jpg" alt="Sacred Heart of Jesus" class="img-responsive center-block">
                            <p>In Catholic funerals, the Church seeks firstly to offer the Mass often referred to as 
                            <i>vigil</i> for the benefit of the soul of the deceased so that the temporal effects of sin 
                            in Purgatory may be eliminated or reduced, and secondly to provide condolence and comfort 
                            for the deceased's family and exhort the latter to pray along with the Church for the soul 
                            of the departed.</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="myModal47" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Thanksgiving</h4>
                        </div>
                        <div class="modal-body modal-about">
                            <img src="img/thanksgiving1.jpg" alt="Sacred Heart of Jesus" class="img-responsive center-block">
                            <p>During Thanksgiving, we believe in a God who truly entered into human history. We give 
                            Him thanks for His mighty deeds in the Eucharist especially. In each Eucharist thanksgiving 
                            we give thanks not just for natural blessings, but for the fact that God supernaturally 
                            enters our lives</p>
                            <p class="text-center"><strong>Meet with catechist</strong>&nbsp;&nbsp;<a href="mailto:catechist@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Email Catechist"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->

        <!-- Section for Administrator's message -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="well well-sm">Reflection</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 mask">
                    <img class="img-rounded img-responsive"
                         src="img/asst_parish_priest1.jpg"
                         alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="col-lg-10 col-md-6 about-grid modal-about about-grid-2">
                            <p>We are living in a very precarious moment where the word, love is on the lips of everybody, 
                            but only a few strive continually to model their lives according to it. This accounts for 
                            the mistrusts, betrayals, insubordinations, insults, abuses, bickering, embezzlements and 
                            other vices being perpetrated in both the sacred and the civil societies. Today's readings 
                            are a wake-up call on us to retrace our root which is love. An anonymous author has it that 
                            every moment of a person who truly loves, is moment of grace and miracle. Our lord Jesus 
                            Christ as well as the saints and the prophets were gracious because their lives were modelled 
                            after self-sacrificial love. We ought to imitate them as the second reading urges us. </p>
                            <strong>Happy Sunday to you all!</strong>
                </div>
            </div>
        </div><!-- /.End of Administrative container -->

        <div class="row" id="about">
            <div class="col-lg-12">
                <div class="text-center">
                    <h3 class="well well-sm">About Saint Charles L'wanga</h3>
                </div>
            </div>
        </div>
        <div class="modal-about">
            <div class="container-fluid">
                <div class="about-grids modal-about">
                    <div class="col-lg-2 col-md-6 col-sm-6 about-grid modal-about mask">
                        <img src="img/charles.jpg" alt="Saint Charles L'wanga" class="img-circle img-responsive" width="140" height="140">
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-6 about-grid modal-about about-grid-2">
                        <!--<h1>ABOUT US</h1>-->
                        <p>Charles Lwanga (Luganda: Kaloli Lwanga (1 January 1860 – 3 June 1886) was a Ugandan convert
                            to the Catholic Church, who was martyred for his faith and is revered as a saint by both the
                            Catholic Church and the Anglican Communion.<br>
                            Charles Lwanga and the other Christians who accompanied him in death were canonized on
                            18 October 1964 by Pope Paul VI during the Vatican II conference. "To honor these African
                            saints, Paul VI became the first reigning pope to visit sub-Saharan Africa when he toured Uganda
                            in July 1969, a visit that included a pilgrimage to the site of the martyrdom at Namugongo".<br>
                        </p>

                        <!--Modal -->
                        <button class="btn btn-primary underline-from-left modal-about" data-toggle="modal" data-target="#myModal40">Saint Charles L'wanga and Companions<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> </button><br>                        

                        <!--Modal -->
                        <button class="btn btn-primary underline-from-left modal-about" data-toggle="modal" data-target="#myModal">ABOUT THE PARISH<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> </button>

                        <div class="tooltip-content">
                            <div class="modal fade features-modal modal-about" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-about">
                                    <div class="modal-content modal-about">
                                        <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                                            <h4 class="modal-title modal-about text-center">About St. Charles L'wanga Parish</h4>
                                        </div>
                                        <div class="modal-body modal-about">
                                            <img src="img/charles.jpg" alt="St. Charles L'wanga Parish" class="img-circle img-responsive center-block">
                                            <p>The history of St. Charles L’wanga Parish can be linked to the story of our Lord Jesus Christ who was born in a manger and later grew to greatness to become the Saviour of the world. It is a proud history of great achievements and contributions to evangelism in our neighborhood and the universal church in general.<br>
                                                We therefore pay glowing tributes to Late Etinyin Essien Etim Offiong III, an illustrious son of Essien Town, Progenitor of Catholicism in Calabar and its environs. <br>
                                                Available records show that the practice of the Catholic faith took root in Essien Town in 1915 following the celebration of the first Holy Mass here by Rev. Fr. F. Howell and J. Krafft in the compound of Late Chief Ekpenyong OtuAbasi which is directly opposite the present Church.<br>
                                                That historical First Mass was attended by over one hundred curious people who grew in number as the day grew by. Due to the upsurge in number of worshippers, the venue was moved to a bigger arena courtesy of Late Sir. Chief Frank U. A. Offiong (KSG). It was at this location that the member imbibed the culture of attending morning prayers daily in the absence of a Priest to celebrate morning Masses.<br>
                                                Subsequently, other religious activities continued in the same location until it became obvious that a permanent site was needed to establish a church. Most providentially, this became a reality when Late Mrs. Alice U. A. Offiong, wife of Late Sir. Frank U. A. Offiong (both parents of Late Rev. Fr. Michael Adim U. A. Offiong) donated her farm land for the building of the church.<br>
                                                This development warranted an appeal to Ireland, the home of Late Rev. Fr. Denis O’Hara, for financial assistance to commence the building of the church. With spirited attempts and various contributions by different people, what is now known as St. Charles L’wanga Parish, came into being on March 17, 1976 which was the feast day of Saint Patrick.<br>
                                                As it is the practice in the Catholic church, the Parish first began as an out – station of Sacred Heart Cathedral and later, of Immaculate Conception Parish, Ikot Ansa, Calabar. It was subsequently named St. Charles L’wanga Parish by the Late Archbishop of Calabar, His Grace, Most Rev. Dr. Brian Davis Usanga in honour of St. Charles L’wanga, one of the twenty – two (22) Martyrs from Uganda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#myModal').modal('');
                            </script>
                        </div><!--\.Modal -->


                        <div class="tooltip-content">
                            <div class="modal fade features-modal modal-about" id="myModal40" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-about">
                                    <div class="modal-content modal-about">
                                        <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                                            <h4 class="modal-title modal-about text-center">About St. Charles L'wanga & Companions</h4>
                                        </div>
                                        <div class="modal-body modal-about">
                                            <img src="img/saint-charles1.jpg" alt="St. Charles L'wanga Parish" class="img-circle img-responsive center-block">
                                            <p>One of 22 Ugandan martyrs, Charles Lwanga is the patron of youth and
                                                Catholic action in most of tropical Africa. He protected his fellow
                                                pages, aged 13 to 30, from the homosexual demands of the Bagandan ruler,
                                                Mwanga, and encouraged and instructed them in the Catholic faith during
                                                their imprisonment for refusing the ruler’s demands.<br>
                                                Charles first learned of Christ’s teachings from two retainers in the
                                                court of Chief Mawulugungu. While a catechumen, he entered the royal
                                                household as assistant to Joseph Mukaso, head of the court pages.<br>
                                                On the night of Mukaso’s martyrdom for encouraging the African youths to
                                                resist Mwanga, Charles requested and received baptism. Imprisoned with
                                                his friends, Charles’s courage and belief in God inspired them to remain
                                                chaste and faithful.<br>
                                                For his own unwillingness to submit to the immoral acts and his efforts
                                                to safeguard the faith of his friends, Charles was burned to death at
                                                Namugongo on June 3, 1886, by Mwanga’s order.<br> When Pope Paul VI
                                                canonized these 22 martyrs on October 18, 1964, he also made reference
                                                to the Anglican pages martyred for the same reason.<br><br>

                                                <i>Like Charles Lwanga, we are all teachers and witnesses to Christian
                                                    living by the examples of our own lives. We are all called upon to spread
                                                    the word of God, whether by word or deed. By remaining courageous and
                                                    unshakable in our faith during times of great moral and physical temptation,
                                                    we live as Christ lived.</i>

                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#myModal').modal('');
                            </script>
                        </div><!--\.Modal -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Church front officers -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h3 class="well well-sm">Administrative Structure of the Parish</h3>
                </div>
            </div>
        </div>
        <div class="banner-bottom">
            <div class="inner_w3l_agile_grids">
                <div class="sreen-gallery-cursual">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/parish_priest1_1.jpg" class="img-responsive" alt="Parish Priest">
                                <h5>Parish Priest (+2348032586300)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/asst_parish_priest1.jpg" class="img-responsive" alt="Asst Parish Priest">
                                <h5>Asst Parish Priest (+2348105849815)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/catechist1.jpg" class="img-responsive" alt="Catechist">
                                <h5>Catechist (+2348083108777)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/vice_chairman_pastoral_1.jpg" class="img-responsive" alt="Vice Chairman Pastoral Council">
                                <h5>Vice Chairman Pastoral Council (+2348033361290)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/charles9.jpg" class="img-responsive" alt="Laity Council President">
                                <h5>Laity Council President (+2348033505099)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/charles9.jpg" class="img-responsive" alt="CMO President">
                                <h5>CMO President (+2348039742034)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/cwo.jpg" class="img-responsive" alt="CWO President">
                                <h5>CWO President (+2348033452833)</h5>
                            </div>
                        </div>

                        <div class="item-owl">
                            <div class="test-review">
                                <img src="img/cyon_president.jpg" class="img-responsive" alt="CYON President">
                                <h5>CYON President (+2348062874353)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.End of Church front officer -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="well well-sm">Recent Events</h3>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li> 
                                <li data-target="#myCarousel" data-slide-to="6"></li> 
                                <li data-target="#myCarousel" data-slide-to="7"></li> 
                                <li data-target="#myCarousel" data-slide-to="8"></li> 
                                <li data-target="#myCarousel" data-slide-to="9"></li> 
                                <li data-target="#myCarousel" data-slide-to="10"></li>
                                <li data-target="#myCarousel" data-slide-to="11"></li>
                                <li data-target="#myCarousel" data-slide-to="12"></li>
                                <li data-target="#myCarousel" data-slide-to="13"></li>
                                <li data-target="#myCarousel" data-slide-to="14"></li>
                                <li data-target="#myCarousel" data-slide-to="15"></li>
                                <li data-target="#myCarousel" data-slide-to="16"></li>
                                <li data-target="#myCarousel" data-slide-to="17"></li>
                                <li data-target="#myCarousel" data-slide-to="18"></li>
                                <li data-target="#myCarousel" data-slide-to="19"></li>
                                <li data-target="#myCarousel" data-slide-to="20"></li>
                                <li data-target="#myCarousel" data-slide-to="21"></li>
                                <li data-target="#myCarousel" data-slide-to="22"></li>
                                <li data-target="#myCarousel" data-slide-to="23"></li>
                                <li data-target="#myCarousel" data-slide-to="24"></li>
                                <li data-target="#myCarousel" data-slide-to="25"></li>
                                <li data-target="#myCarousel" data-slide-to="26"></li>
                                <li data-target="#myCarousel" data-slide-to="27"></li>
                                <li data-target="#myCarousel" data-slide-to="28"></li>
                                <li data-target="#myCarousel" data-slide-to="29"></li>
                                <li data-target="#myCarousel" data-slide-to="30"></li>
                                <li data-target="#myCarousel" data-slide-to="31"></li>                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/mary_league.jpg" alt="Mary League Girls">
                                    <div class="carousel-caption">
                                        <h3>20th Anniversary</h3>
                                        <p>Mary League Girls</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/mary_league1.jpg" alt="Mary League Girls">
                                    <div class="carousel-caption">
                                        <h3>20th Anniversary</h3>
                                        <p>Mary League Girls</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/mary_league2.jpg" alt="Mary League Girls">
                                    <div class="carousel-caption">
                                        <h3>20th Anniversary</h3>
                                        <p>Mary League Girls</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/mary_league3.jpg" alt="Mary League Girls">
                                    <div class="carousel-caption">
                                        <h3>20th Anniversary</h3>
                                        <p>Mary League Girls</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/NYD_2018.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/NYD_2018_0.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                
                                <div class="item">
                                    <img src="img/youth_Mass.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Mass Celebration</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_Mass1.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Mass Celebration</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_Mass2.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Mass Celebration</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_Mass3.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Mass Celebration</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_Mass4.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Mass Celebration</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_Mass5.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Mass Celebration</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_talk.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>NYD Talk</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_talk1.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>NYD Talk</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/youth_talk2.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>NYD Talk</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/NYD_2018_1.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/NYD_2018_2.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/NYD_2018_3.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div> 
                                
                                <div class="item">
                                    <img src="img/NYD_2018_4.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/NYD.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>St. Charles CYON President & Visiting Bishop</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>    
                                
                                <div class="item">
                                    <img src="img/NYD1.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Abakaliki1.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>CYON Abakaliki</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Enugu.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>CYON Enugu</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Orlu.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>CYON Orlu</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Shandem.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>CYON Shandem</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Umuiaha.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>CYON Umuiaha</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                
                                <div class="item">
                                    <img src="img/Kontagora.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>CYON Kontagora</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/visiting_bishop_secuirty.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>Visiting Bishop & Security Team</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Volunteers.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>National Youth Day</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                                                
                                <div class="item">
                                    <img src="img/Interaction.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>NYD Interaction Session</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/Interaction1.jpg" alt="National Youth Day">
                                    <div class="carousel-caption">
                                        <h3>NYD Interaction Session</h3>
                                        <p>National Youth Day 2018</p>
                                    </div>
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
            </div>
        </div><!-- /.End of Events -->

        <!-- Section for Saint of the week -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="well well-sm">Saint of the week</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-6 mask">
                    <img class="img-rounded img-responsive" src="img/max_kolbe.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h5><strong>Maximilian Kolbe - (1894-1941)</strong></h5>
                </div>
                <div class="col-lg-10 col-md-6">
                    <p>Raimund Kolbe, born in Russian Poland, was ordained a Franciscan, Maximilian Mary, in Rome. In 
                    the 1920s, he reopened a ruined Polish friary, started a Marian press and was diagnosed with 
                    tuberculosis. Despite his illness, he had successful Marian missions to Japan and India before 
                    returning to Poland in 1936. After the 1939 invasion of Poland, the Franciscans’ criticism of the 
                    occupiers prompted the arrest of Maximilian and four others, who ended up in the Nazi death camp 
                    Auschwitz. Maximilian volunteered for martyrdom, taking the place of a married man being executed 
                    by starvation. This man was present at the saint’s 1982 canonization. Maximilian is the patron of 
                    prisoners, journalists and others.</p>

                       <p class="text-muted">&copy; Catholic News Services - Maximilian Kolbe</p>
                </div>
            </div>
        </div><!-- /.End of Administrative container -->
    </div><!-- /.End of container -->

    <!-- /.Mass schedule and Associations -->
    <div class="col-lg-3 col-md-6 content">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h4 class="well well-sm">Mass Schedule</h4>
                    <img src="img/eucharist1.jpg" class="img-rounded img-responsive" alt="Eucharist" width="" height="200">
                </div>
            </div><!-- /.End of Mass schedule -->

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#monday">Monday</a>
                            </h3>
                        </div>
                        <div id="monday" class="panel-collapse collapse in">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am <br><i>(Mass of Human Labour)</i></dd>
                                <!-- <dt>Evening Mass</dt>-->
                                <!-- <dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Ezekiel 1: 2-5, 24-28<br>
                                    <strong>Psalm: </strong>Psalms 148: 1-2, 11-14<br>
                                    <!--<strong>2nd: </strong>Peter 1: 16-19<br>-->
                                    <strong>Gospel: </strong>Matthew 17: 22-27
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#tuesday">Tuesday</a>
                            </h3>
                        </div>
                        <div id="tuesday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Ezekiel 2: 8-3:4<br>
                                    <strong>Psalm: </strong>Psalms 119: 14, 24, 72, 103, 111, 131<br>
                                    <!--<strong>2nd: </strong>Romans 9: 1-5<br>-->
                                    <strong>Gospel: </strong>Matthew 18: 1-5, 10, 12-14
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#wednesday">Wednesday</a>
                            </h3>
                        </div>
                        <div id="wednesday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <dt>Evening Mass</dt>
                                <dd>6pm <br><i>(Healing Mass)</i></dd>                               
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Revelation 11:19; 12:1-6, 10<br>
                                    <strong>Psalm: </strong>Psalm 45: 10-12, 16<br>
                                    <strong>2nd: </strong>1st Corinthians 15: 20-26<br>
                                    <strong>Gospel: </strong>Luke 1: 39-56
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#thursday">Thursday</a>
                            </h3>
                        </div>
                        <div id="thursday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Ezekiel 12: 1-12<br>
                                    <strong>Psalm: </strong>Psalms 78: 56-59, 61<br>
                                    <!--<strong>2nd: </strong>Romans 9: 1-5<br>-->
                                    <strong>Gospel: </strong>Matthew 18: 21-19: 1
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#friday">Friday</a>
                            </h3>
                        </div>
                        <div id="friday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Ezekiel 16: 1-15, 60, 63<br>
                                    <strong>Psalm: </strong>Isaiah 12: 2-6<br>
                                    <!--<strong>2nd: </strong>Romans 9: 1-5<br>-->
                                    <strong>Gospel: </strong>Matthew 19: 3-12
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#saturday">Saturday</a>
                            </h3>
                        </div>
                        <div id="saturday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <!--<dt>Evening Mass</dt>-->
                                <!--<dd>6pm</dd>-->
                                <dt>Confession</dt>
                                <dd>1 hour before Mass during Adoration<br></dd>
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Ezekiel 18: 1-10, 13, 30-32<br>
                                    <strong>Psalm: </strong>Psalms 51: 12-15, 18-19<br>
                                    <!--<strong>2nd: </strong>Romans 9: 1-5<br>-->
                                    <strong>Gospel: </strong>Matthew 19: 13-15
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#sunday">Sunday</a>
                            </h3>
                        </div>
                        <div id="sunday" class="panel-collapse collapse">
                            <dl>
                                <dt>Morning Mass</dt>
                                <dd>6am</dd>
                                <dt>Evening Mass</dt>
                                <dd>6pm</dd>                                
                                <dt>Today's reading</dt>
                                <dd class="text-left">
                                    <strong>1st: </strong>Proverbs 9: 1-6<br>
                                    <strong>Psalm: </strong>Psalms 34: 1-14<br>
                                    <strong>2nd: </strong>Ephesians 5: 15-20<br>
                                    <strong>Gospel: </strong>John 6: 51-58
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div><!-- /.End of Mass plans -->
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h3 class="well well-sm">Organization</h3>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#cmo">Catholic Men Organisation</a>
                            </h3>
                        </div>
                        <div id="cmo" class="panel-collapse collapse in">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cmo@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#cwo">Catholic Women Organisation</a>
                            </h3>
                        </div>
                        <div id="cwo" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Last Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cwo@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#cyon">CYON</a>
                            </h3>
                        </div>
                        <div id="cyon" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Last Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cyon@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h3 class="well well-sm">Parish Councils</h3>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#pastorial-council">Pastoral council</a>
                            </h3>
                        </div>
                        <div id="pastorial-council" class="panel-collapse collapse in">
                            <dl>
                                <dt>Date</dt>
                                <dd>1st Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:pastoral.council@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#laity">Laity Council</a>
                            </h3>
                        </div>
                        <div id="laity" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>1st Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:laity.council@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="text-center">
                    <h3 class="well well-sm">Associations</h3>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 text-center">
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#holy-family">Holy Family</a>
                            </h3>
                        </div>
                        <div id="holy-family" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:holy.family@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-anthony">Saint Anthony</a>
                            </h3>
                        </div>
                        <div id="st-anthony" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Tuesdays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stanthony@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-jude">Saint Jude</a>
                            </h3>
                        </div>
                        <div id="st-jude" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Wednesdays</dd>
                                <dt>Time</dt>
                                <dd>4:30pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stjude@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#cbiu">CBIU</a>
                            </h3>
                        </div>
                        <div id="cbiu" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Sundays & Thursdays</dd>
                                <dt>Time</dt>
                                <dd>4 - 6pm & 5 - 7pm respectively</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:cbiu@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#mass-servers">Mass Servers</a>
                            </h3>
                        </div>
                        <div id="mass-servers" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Saturdays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:mass.servers@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#nurses-guilds">Nurses Guild</a>
                            </h3>
                        </div>
                        <div id="nurses-guilds" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>6pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:nurses.guild@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#lay-readers">Lay Readers</a>
                            </h3>
                        </div>
                        <div id="lay-readers" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Saturdays</dd>
                                <dt>Time</dt>
                                <dd>4:30pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:lay.readers@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#ccrn">Charismatic</a>
                            </h3>
                        </div>
                        <div id="ccrn" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays & Sunday</dd>
                                <dt>Time</dt>
                                <dd>6pm & 4pm respectively</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:charismatic@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#choir-association">Choir Association</a>
                            </h3>
                        </div>
                        <div id="choir-association" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>1st Friday of every month</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:choir.association@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#sacred-heart">Sacred Heart</a>
                            </h3>
                        </div>
                        <div id="sacred-heart" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Thursdays</dd>
                                <dt>Time</dt>
                                <dd>4:30pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:sacred.heart@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#ministers-of-hospitality">Ministers of Hospitality</a>
                            </h3>
                        </div>
                        <div id="ministers-of-hospitality" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 9:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:ministers.hospitality@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-vincent-de-paul">St. Vincent De Paul</a>
                            </h3>
                        </div>
                        <div id="st-vincent-de-paul" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:vincent_de_paul@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#mary-league">Mary League</a>
                            </h3>
                        </div>
                        <div id="mary-league" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>Unknown yet</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:mary.league@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#legion-of-mary">Legion of Mary</a>
                            </h3>
                        </div>
                        <div id="legion-of-mary" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Saturdays and Sundays</dd>
                                <dt>Time</dt>
                                <dd>4pm & after 6:30am Mass respectively</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:legion_of_mary@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#fatima">Fatima</a>
                            </h3>
                        </div>
                        <div id="fatima" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Wednesdays</dd>
                                <dt>Time</dt>
                                <dd>6am - 12 noon</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:fatima@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#purgatorain-society">Purgatorain Society</a>
                            </h3>
                        </div>
                        <div id="purgatorain-society" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays</dd>
                                <dt>Time</dt>
                                <dd>5 - 6pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:purgatorain.society@stchaleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#amsp">A.M.S.P.</a>
                            </h3>
                        </div>
                        <div id="amsp" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Thursday of every month</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:amsp@stcharleslwanaga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-monica">Saint Monica</a>
                            </h3>
                        </div>
                        <div id="st-monica" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>3rd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>After 6:30am Mass</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stmonica@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-theresa">Saint Theresa</a>
                            </h3>
                        </div>
                        <div id="st-theresa" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Mondays</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:st_theresa@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#st-mary">Saint Mary</a>
                            </h3>
                        </div>
                        <div id="st-mary" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Sunday of every month</dd>
                                <dt>Time</dt>
                                <dd>Unknown yet</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:stmary@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#divine-mercy">Divine Mercy</a>
                            </h3>
                        </div>
                        <div id="divine-mercy" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Tuesdays, Thursdays & Fridays</dd>
                                <dt>Time</dt>
                                <dd>3pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:divine_mercy@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#friends-of-st-patrick">Friends of Saint Patrick</a>
                            </h3>
                        </div>
                        <div id="friends-of-st-patrick" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>2nd Tuesday of every month</dd>
                                <dt>Time</dt>
                                <dd>5pm</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:friends.of.st.patrick@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#precious-blood">Precious Blood</a>
                            </h3>
                        </div>
                        <div id="precious-blood" class="panel-collapse collapse">
                            <dl>
                                <dt>Date</dt>
                                <dd>Thursdays</dd>
                                <dt>Time</dt>
                                <dd>11pm - 3am</dd>
                                <dt>Contact</dt>
                                <dd><a href="mailto:precious.blood@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.End of Parish Associations -->
    </div><!-- /.End of Mass schedule and Associations -->
</section>

<!-- Footer -->
<footer>
    <div class="contact text-center" id="contact-us">
        <div class="container">

            <h3>CONTACT</h3>

            <div class="footer-me">
                <div class="col-md-4 footer-me-left">
                    <div class="footer-me-left1">
                        <i class="fa fa-2x fa-book" aria-hidden="true"></i>
                    </div>
                    <div class="footer-me-leftr">
                        <h4>Quote of the week</h4>
                        <p>For the sake of his sorrowful passion, have mercy on us and on the whole world.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 footer-me-left">
                    <div class="footer-me-left1">
                        <i class="fa fa-2x fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="footer-me-leftr">
                        <h4>Parish Contact</h4>
                        <p>St. Charles L'wanga Parish, Essien Town, Calabar, Cross River State, Nigeria</p>
                        <a href="mailto:parish.priest@stcharleslwanga.com.ng"><i class="text-primary fa fa-envelope fa-2x tooltip-viewport-bottom" title="Send us an email"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 footer-me-left">
                    <div class="footer-me-left1">
                        <i class="fa fa-2x fa-wechat" aria-hidden="true"></i>
                    </div>
                    <div class="footer-me-leftr">
                        <h4>Follow Us</h4>
                        <a href="#"><i class="text-primary fa fa-facebook-official fa-3x tooltip-viewport-bottom" title="Facebook"></i> </a>
                        <a href="#"><i class="text-primary fa fa-instagram fa-3x tooltip-viewport-bottom" title="Facebook"></i> </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <iframe width="100%" height="200" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=St.%20Charles%20L'wanga%20Parish%2C%20Calabar%2C%20Cross%20River%20State&key=AIzaSyDZftT2s6V3KJmM8XMSU-bPMpDX9mPiXZA" allowfullscreen>
            </iframe><br>
        </div>

        <div class="copyright text-center">
            <p>&copy; Powered by <a href="index.php">St. Charles L'wanga Parish</a> | Designed by <a href="mailto:admin@stcharleslwanga.com.ng">Web Mgt Team</a> </p>
            <!--    <p>&copy; Powered by <a href="index.php">St. Charles L'wanga Parish</a> | Designed by <a href="mailto:admin@stcharleslwanga.com.ng">Web Mgt Team</a> </p>-->
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="Boot/boot1/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="Boot/boot1/dist/js/bootstrap.min.js"></script>
<script src="js/firebase.js"></script>

<!-- required js files -->
<link href="CSS/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 4,
            itemsDesktop: [768, 3],
            itemsDesktopSmall: [414, 2],
            lazyLoad: true,
            autoPlay: true,
            navigation: true,
            navigationText: false,
            pagination: true
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({easingType:'easeOutQuart'});
    });
</script>


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000)
        });
    });
</script>
</body>
</html>
CHURCH_INDEX_MAIN;
    print $church_index_main;
}

function adduser()
{
    //Make the connection to the database
    $connect = new mysqli(connect_me::$dbhost, connect_me::$dbuser, connect_me::$dbpassword, connect_me::$dbdatabase);
    if ($connect->connect_errno){
        //If there exist an error
//        die('You are having a connection error: ['.$connect->connect_error.']');
        die('This section is still under development');
    }else {
        $email = stripcslashes($_POST["Input_Email"]);//Email
//        echo "Email is: ".$email;

        //Check if the email is already on the database before adding the user
        $select = "SELECT * FROM news WHERE Email = '$email'";
        $query_select = $connect->query($select);
        if ($query_select){
            $count_rows = $query_select->num_rows;

            //Verify if there is a hit
            if ($count_rows==1){
                while ($rowsd = $query_select->fetch_assoc()){
                $D_email = $rowsd['Email'];
                header("refresh: 3; url=index.php");
                echo "<h3>" . $D_email . " already exist on the database. You will hear from us soon.</h3>";
                }

            }else {
                //Add the user
                    $date = date("Y-m-d");
//                    echo $id . "<br>";
//                    echo $date . "<br>";
//                    echo $email . "<br>";

//                    //Insert the user into the database
                    $insert = "INSERT INTO news(Email, Date_Registered)VALUE ('$email', '$date')";
                    if ($connect->query($insert) === TRUE) {
//                    Redirect the user to the index page if insertion is complete
                        header("refresh:3; url=index.php");
                        echo "<h1>Successful subscription</h1>";

                    exit();
                        //Create a tooltip to get details about the user
                    } else {
                        header("refresh:3; url=index.php");
                        echo "<h1>Unsuccessful subscription</h1>";

                    exit();
                    }
                mysqli_close($connect);
            }
        }

    }
}
?>