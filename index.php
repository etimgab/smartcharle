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
<style>
marquee{
    width: 100%;
    background-color:black;
    color: white;
    }
</style>
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
                    <h6 class="modal-title modal-about text-center"><i>(Mark 9:31)</i></h6>
                </div>
                <div class="modal-body modal-about">
                    <p><h3>25th Sunday in Ordinary Time</h3></p>
                    <p><strong>The Son of Man is to be handed over to men. (Mark 9:31)</strong></p><br>
                    
                   <p>What a remarkable statement! As he begins his journey to Jerusalem, Jesus tells his disciples—and 
                   us—that he will be handed over. He will become passive, powerless in our hands. He will leave it up 
                   to us to decide what to do with him. It’s just as the prophet Isaiah had said, “Like a lamb led to 
                   slaughter or a sheep silent before shearers, he did not open his mouth” (Isaiah 53:7).</p>

                   <p>This is a strong contrast to everything we have seen Jesus do so far. From the moment he burst 
                   onto the scene, Jesus was at the center of attention—healing people, contending with opponents, 
                   calming storms, and multiplying bread. He always took the lead. He always spoke with authority. He 
                   was the one shaping the story. But at the cross, where it matters the most? Jesus remained quiet, 
                   humble, and vulnerable.</p>

                   <p>The truth is, this is what Jesus intended all along. He came as God’s gift to us. A gift doesn’t 
                   tell the recipient how to use it. He left it up to us to decide how we were going to receive him. We 
                   didn’t have to reject him as many of his people did. We didn’t have to deny him as Peter did. We 
                   didn’t have to kill him as the Romans did. We could have embraced him and accepted his message of 
                   salvation. But we didn’t.</p>

                   <p>And still God handed him over. He didn’t take back his gift.</p>
				   
				   <p>Even today, God continues to hand Jesus to us. At every Mass, on every altar, in every Communion 
				   line, Jesus is placed in our hands as God’s gift of salvation. None of us are worthy to receive him. 
				   None of us accept him as fully as we should. But that doesn’t stop him. He still gives himself to 
				   sinful men and women. He still offers his salvation to us. Let’s return his gesture and hand 
				   ourselves over to him.</p>
				   
                   <p><strong><i>“Lord, I am not worthy to receive you. Please keep speaking your words to me so that I 
                   may be healed."</i></strong></p>
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
                        <marquee direction="scroll"><h5>We solicit for your support. Reach us using the Parish's email 
                        at Parish Contact below</h5></marquee>
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
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/cha2.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/cha1.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/cha.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/cha3.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/cha4.jpg" alt="Chapel Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Chapel Project 2018</h3>
                                        <!--<p>Celebration with Children in the Parish</p>-->
                                    </div>
                                </div>
                                
                                
                                <div class="item">
                                    <img src="img/bud.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud1.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud2.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud3.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>Mary League Girls</p>-->
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/bud4.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>National Youth Day 2018</p>-->
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="img/bud5.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>National Youth Day 2018</p>-->
                                    </div>
                                </div>
                                
                                
                                <div class="item">
                                    <img src="img/bud6.jpg" alt="Parish Project 2018">
                                    <div class="carousel-caption">
                                        <h3>Parish Project 2018</h3>
                                        <!--<p>National Youth Day 2018</p>-->
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
                    <img class="img-rounded img-responsive" src="img/vincent.jpg" alt="Vincent de Paul" width="140" height="140">
                    <h5><strong>Vincent de Paul - (1581-1660)</strong></h5>
                </div>
                <div class="col-lg-10 col-md-6">
                    <p>Born in southwestern France, Vincent began priestly studies in 1595 and was ordained in 1600. In 
                    1605, he was taken off a ship attacked by pirates. After two years as a slave in Tunisia, he escaped 
                    and returned to France, taking up parish work outside Paris. From about 1615, he dedicated his life 
                    to serving the poor. To that end, he founded the Confraternity of Charity, the Congregation of the 
                    Mission (Vincentians) and, with St. Louise de Marillac, the Daughters of Charity. In 1885 Pope Leo 
                    XIII named him the patron of all works of charity.</p>
                    
                    <p class="text-muted">&copy; Catholic News Services - Vincent de Paul</p>
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
                                <!--Modal -->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#monday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#tuesday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#wednesday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#thursday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#friday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <!--<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_2nd_reading">2nd Reading &raquo;</a> </p>-->
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#saturday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
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
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_1st_reading">1st Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_res_psalm">Responsorial Psalm &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_2nd_reading">2nd Reading &raquo;</a> </p>
                                    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#sunday_gospel_reading">Gospel Reading &raquo;</a> </p>
                                    <strong><center>Click above for your readings</center></strong>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div><!-- /.End of Mass plans -->
        </div>
        
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Monday<br>
                            <h6 class="modal-title modal-about text-center">Proverbs 3:27-34</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>Refuse no one the good on which he has a claim when it is in your power to do it for him. 
                            Say not to your neighbor, “Go, and come again, tomorrow I will give,” when you can give at 
                            once.
                            </p>
                            <p>
                                 Plot no evil against your neighbor, against one who lives at peace with you. Quarrel 
                                 not with a man without cause, with one who has done you no harm.
                            </p>
                            <p>
                                Envy not the lawless man and choose none of his ways: To the LORD the perverse one is an 
                                abomination, but with the upright is his friendship.
                            </p>
                            <p>
                            The curse of the LORD is on the house of the wicked, but the dwelling of the just he blesses; 
                            When dealing with the arrogant, he is stern, but to the humble he shows kindness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Monday<br>
                            <h6 class="modal-title modal-about text-center">Psalm 15:2-5</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. The just one shall live on your holy mountain, O Lord.</i></strong><br>
                                He who walks blamelessly and does justice;<br>
                                who thinks the truth in his heart<br>
                                and slanders not with his tongue.<br>                                
                                <strong><i>R. The just one shall live on your holy mountain, O Lord.</i></strong>
                            </p>
                            <p>
                                Who harms not his fellow man,<br>
                                nor takes up a reproach against his neighbor;<br>
                                By whom the reprobate is despised,<br>
                                while he honors those who fear the LORD.<br>
                                <strong><i>R. The just one shall live on your holy mountain, O Lord.</i></strong>
                            </p>
                            <p>
                                Who lends not his money at usury<br>
                                and accepts no bribe against the innocent.<br>
                                He who does these things<br>
                                shall never be disturbed.<br>
                                <strong><i>R. The just one shall live on your holy mountain, O Lord.</i></strong>
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="monday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Monday</h4>
                        </div>
                        <div class="modal-body modal-about">
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
            <div class="modal fade features-modal modal-about" id="monday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Monday
                            <h6 class="modal-title modal-about text-center">Luke 8:16-18</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus said to the crowd:<br>
                                "No one who lights a lamp conceals it with a vessel or sets it under a bed; rather, he 
                                places it on a lampstand so that those who enter may see the light. For there is nothing 
                                hidden that will not become visible, and nothing secret that will not be known and come 
                                to light. Take care, then, how you hear. To anyone who has, more will be given, and from 
                                the one who has not, even what he seems to have will be taken away." 
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Tuesday
                            <h6 class="modal-title modal-about text-center">Proverbs 21:1-6, 10-13</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Like a stream is the king's heart in the hand of the LORD; wherever it pleases him, he 
                                directs it.
                            </p>
                            <p>
                                All the ways of a man may be right in his own eyes, but it is the LORD who proves hearts.
                            </p>
                            <p>
                                To do what is right and just is more acceptable to the LORD than sacrifice.
                            </p>
                            <p>
                                Haughty eyes and a proud heart–the tillage of the wicked is sin.
                            </p>
                            <p>
                                The plans of the diligent are sure of profit, but all rash haste leads certainly to 
                                poverty.
                            </p>
                            <p>
                                Whoever makes a fortune by a lying tongue is chasing a bubble over deadly snares.
                            </p>
                            <p>
                                The soul of the wicked man desires evil; his neighbor finds no pity in his eyes.
                            </p>
                            <p>
                                When the arrogant man is punished, the simple are the wiser; when the wise man is 
                                instructed, he gains knowledge.
                            </p>
                            <p>
                                The just man appraises the house of the wicked: there is one who brings down the wicked 
                                to ruin.
                            </p>
                            <p>
                                He who shuts his ear to the cry of the poor will himself also call and not be heard.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Tuesday
                            <h6 class="modal-title modal-about text-center">Psalm 119:1, 27, 30, 34, 35, 44</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong><br>
                                Blessed are they whose way is blameless,<br>
                                who walk in the law of the LORD.<br>                                
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong>
                            </p>
                            <p>
                                Make me understand the way of your precepts,<br>
                                and I will meditate on your wondrous deeds.<br>
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong>
                            </p>
                            <p>
                                The way of truth I have chosen;<br>
                                I have set your ordinances before me.<br>
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong>
                            </p>
                            <p>
                                Give me discernment, that I may observe your law<br>
                                and keep it with all my heart.<br>
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong>
                            </p>
                            <p>
                                Lead me in the path of your commands,<br>
                                for in it I delight.<br>
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong>
                            </p>
                            <p>
                                And I will keep your law continually,<br>
                                forever and ever.<br>
                                <strong><i>R. Guide me, Lord, in the way of your commands.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="tuesday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Tuesday</h4>
                        </div>
                        <div class="modal-body modal-about">
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
            <div class="modal fade features-modal modal-about" id="tuesday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Tuesday
                            <h6 class="modal-title modal-about text-center">Luke 8:19-21</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The mother of Jesus and his brothers came to him but were unable to join him because of 
                                the crowd. He was told, "Your mother and your brothers are standing outside and they 
                                wish to see you." He said to them in reply, "My mother and my brothers are those who 
                                hear the word of God and act on it." 
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Wednesday
                            <h6 class="modal-title modal-about text-center">Proverbs 30:5-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Every word of God is tested; he is a shield to those who take refuge in him. Add nothing 
                                to his words, lest he reprove you, and you will be exposed as a deceiver.
                            </p>
                            <p>
                                Two things I ask of you, deny them not to me before I die: Put falsehood and lying far 
                                from me, give me neither poverty nor riches; provide me only with the food I need; Lest, 
                                being full, I deny you, saying, "Who is the LORD?" Or, being in want, I steal, and 
                                profane the name of my God.
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Wednesday
                            <h6 class="modal-title modal-about text-center">Psalm 119:29, 72, 89, 101, 104, 163</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong><br>
                                Remove from me the way of falsehood,<br>
                                and favor me with your law.<br>                                
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong>
                            </p>
                            <p>
                                The law of your mouth is to me more precious<br>
                                than thousands of gold and silver pieces.<br>
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong>
                            </p>
                            <p>
                                Your word, O LORD, endures forever;<br>
                                it is firm as the heavens.<br>
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong>
                            </p>
                            <p>
                                From every evil way I withhold my feet,<br>
                                that I may keep your words.<br>
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong>
                            </p>
                            <p>
                                Through your precepts I gain discernment;<br>
                                therefore I hate every false way.<br>
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong>
                            </p>
                            <p>
                                Falsehood I hate and abhor;<br>
                                your law I love.<br>
                                <strong><i>R. Your word, O Lord, is a lamp for my feet.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="wednesday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Wednesday</h4>
                        </div>
                        <div class="modal-body modal-about">
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
            <div class="modal fade features-modal modal-about" id="wednesday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Wednesday
                            <h6 class="modal-title modal-about text-center">Luke 9:1-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus summoned the Twelve and gave them power and authority over all demons and to cure 
                                diseases, and he sent them to proclaim the Kingdom of God and to heal the sick. He said 
                                to them, "Take nothing for the journey, neither walking stick, nor sack, nor food, nor 
                                money, and let no one take a second tunic. Whatever house you enter, stay there and 
                                leave from there. And as for those who do not welcome you, when you leave that town, 
                                shake the dust from your feet in testimony against them." Then they set out and went 
                                from village to village proclaiming the Good News and curing diseases everywhere.
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Thursday
                            <h6 class="modal-title modal-about text-center">Ecclesiastes 1:2-11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Vanity of vanities, says Qoheleth, vanity of vanities! All things are vanity! What 
                                profit has man from all the labor which he toils at under the sun? One generation passes 
                                and another comes, but the world forever stays. The sun rises and the sun goes down; 
                                then it presses on to the place where it rises. Blowing now toward the south, then 
                                toward the north, the wind turns again and again, resuming its rounds. All rivers go to 
                                the sea, yet never does the sea become full. To the place where they go, the rivers keep 
                                on going. All speech is labored; there is nothing one can say. The eye is not satisfied 
                                with seeing nor is the ear satisfied with hearing. 
                            </p>
                            <p>
                                What has been, that will be; what has been done, that will be done. Nothing is new under 
                                the sun. Even the thing of which we say, "See, this is new!" has already existed in the 
                                ages that preceded us. There is no remembrance of the men of old; nor of those to come 
                                will there be any remembrance among those who come after them. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Thursday
                            <h6 class="modal-title modal-about text-center">Psalm PS 90:3-4, 5-6, 12-13, 14 AND 17BC</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. In every age, O Lord, you have been our refuge.</i></strong><br>
                                You turn man back to dust,<br>
                                saying, "Return, O children of men."<br>
                                For a thousand years in your sight<br>
                                are as yesterday, now that it is past,<br>
                                or as a watch of the night.<br>
                                <strong><i>R. In every age, O Lord, you have been our refuge.</i></strong>
                            </p>
                            <p>
                                You make an end of them in their sleep;<br>
                                the next morning they are like the changing grass,<br>
                                Which at dawn springs up anew,<br>
                                but by evening wilts and fades.<br>
                                <strong><i>R. In every age, O Lord, you have been our refuge.</i></strong>
                            </p>
                            <p>
                                Teach us to number our days aright,<br>
                                that we may gain wisdom of heart.<br>
                                Return, O LORD! How long?<br>
                                Have pity on your servants!<br>
                                <strong><i>R. In every age, O Lord, you have been our refuge.</i></strong>
                            </p>
                            <p>
                                Fill us at daybreak with your kindness,<br>
                                that we may shout for joy and gladness all our days.<br>
                                Prosper the work of our hands for us!<br>
                                Prosper the work of our hands!<br>
                                <strong><i>R. In every age, O Lord, you have been our refuge.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="thursday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Thursday</h4>
                        </div>
                        <div class="modal-body modal-about">
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
            <div class="modal fade features-modal modal-about" id="thursday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Thursday
                            <h6 class="modal-title modal-about text-center">Luke 9:7-9</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Herod the tetrarch heard about all that was happening, and he was greatly perplexed 
                                because some were saying, "John has been raised from the dead"; others were saying, 
                                "Elijah has appeared"; still others, "One of the ancient prophets has arisen." But Herod 
                                said, "John I beheaded. Who then is this about whom I hear such things?" And he kept 
                                trying to see him. 
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Friday
                            <h6 class="modal-title modal-about text-center">Ecclesiastes 3:1-11</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                There is an appointed time for everything, and a time for every thing under the heavens.<br>
                                A time to be born, and a time to die;<br>
                                a time to plant, and a time to uproot the plant.<br>
                                A time to kill, and a time to heal;<br>
                                a time to tear down, and a time to build.<br>
                                A time to weep, and a time to laugh;<br>
                                a time to mourn, and a time to dance.<br>
                                A time to scatter stones, and a time to gather them;<br>
                                a time to embrace, and a time to be far from embraces.<br>
                                A time to seek, and a time to lose;<br>
                                a time to keep, and a time to cast away.<br>
                                A time to rend, and a time to sew;<br>
                                a time to be silent, and a time to speak.<br>
                                A time to love, and a time to hate;<br>
                                a time of war, and a time of peace.
                            </p>
                            <p>
                                What advantage has the worker from his toil? I have considered the task that God has 
                                appointed for the sons of men to be busied about. He has made everything appropriate to 
                                its time, and has put the timeless into their hearts, without man's ever discovering, 
                                from beginning to end, the work which God has done. But grace was given to each of us 
                                according to the measure of Christ's gift.
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Friday
                            <h6 class="modal-title modal-about text-center">Psalm 44:1B-4</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. Blessed be the Lord, my Rock!</i></strong><br>
                                Blessed be the LORD, my rock,<br>
                                my mercy and my fortress,<br>
                                my stronghold, my deliverer,<br>
                                My shield, in whom I trust.<br>
                                <strong><i>R. Blessed be the Lord, my Rock!</i></strong>
                            </p>
                            <p>
                                LORD, what is man, that you notice him;<br>
                                the son of man, that you take thought of him?<br>
                                Man is like a breath;<br>
                                his days, like a passing shadow.<br>
                                <strong><i>R. Blessed be the Lord, my Rock!</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="friday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Friday</h4>
                        </div>
                        <div class="modal-body modal-about">
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
            <div class="modal fade features-modal modal-about" id="friday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Friday
                            <h6 class="modal-title modal-about text-center">Luke 9:18-22</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Once when Jesus was praying in solitude, and the disciples were with him, he asked them, 
                                "Who do the crowds say that I am?" They said in reply, "John the Baptist; others, 
                                Elijah; still others, 'One of the ancient prophets has arisen.'" Then he said to them, 
                                "But who do you say that I am?" Peter said in reply, "The Christ of God." He rebuked 
                                them and directed them not to tell this to anyone.
                            </p>
                            <p>
                                He said, "The Son of Man must suffer greatly and be rejected by the elders, the chief 
                                priests, and the scribes, and be killed and on the third day be raised."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Saturday
                            <h6 class="modal-title modal-about text-center">Daniel 7:9-10, 13-14 OR Revelation 12:7-12AB</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                As I watched:<br>
                                Thrones were set up
and the Ancient One took his throne.
His clothing was bright as snow,
and the hair on his head as white as wool;
His throne was flames of fire,
with wheels of burning fire.
A surging stream of fire
flowed out from where he sat;
Thousands upon thousands were ministering to him,
and myriads upon myriads attended him.
                            </p>
                            <p>
                                The court was convened, and the books were opened.
As the visions during the night continued, I saw
                            </p>
                            <p>
                                One like a son of man coming,
on the clouds of heaven;
When he reached the Ancient One
and was presented before him,
He received dominion, glory, and kingship;
nations and peoples of every language serve him.
His dominion is an everlasting dominion
that shall not be taken away,
his kingship shall not be destroyed.
                            </p>
                            <p>
                                <h2>OR</h2>
                            </p>
                            <p>
                                War broke out in heaven; Michael and his angels battled against the dragon. The dragon 
                                and its angels fought back, but they did not prevail and there was no longer any place 
                                for them in heaven. The huge dragon, the ancient serpent, who is called the Devil and 
                                Satan, who deceived the whole world, was thrown down to earth, and its angels were 
                                thrown down with it.
                            </p>
                            <p>
                                Then I heard a loud voice in heaven say: "Now have salvation and power come, and the 
                                Kingdom of our God and the authority of his Anointed. For the accuser of our brothers is 
                                cast out, who accuses them before our God day and night. They conquered him by the 
                                Blood of the Lamb and by the word of their testimony; love for life did not deter them 
                                from death. Therefore, rejoice, you heavens, and you who dwell in them."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Saturday
                            <h6 class="modal-title modal-about text-center">Psalm 138:1-5</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. In the sight of the angels I will sing your praises, Lord.</i></strong><br>
                                I will give thanks to you, O LORD, with all my heart,<br>
                                for you have heard the words of my mouth;<br>
                                in the presence of the angels I will sing your praise;<br>
                                I will worship at your holy temple<br>
                                and give thanks to your name.<br>
                                <strong><i>R. In the sight of the angels I will sing your praises, Lord.</i></strong>
                            </p>
                            <p>
                                Because of your kindness and your truth;<br>
                                for you have made great above all things<br>
                                your name and your promise.<br>
                                When I called, you answered me;<br>
                                you built up strength within me.<br>
                                <strong><i>R. In the sight of the angels I will sing your praises, Lord.</i></strong>
                            </p>
                            <p>
                                All the kings of the earth shall give thanks to you, O LORD<br>
                                when they hear the words of your mouth;<br>
                                And they shall sing of the ways of the LORD<br>
                                "Great is the glory of the LORD<br>
                                <strong><i>R. In the sight of the angels I will sing your praises, Lord.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="saturday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Saturday</h4>
                        </div>
                        <div class="modal-body modal-about">
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
            <div class="modal fade features-modal modal-about" id="saturday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Saturday
                            <h6 class="modal-title modal-about text-center">John 1:47-51</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Jesus saw Nathanael coming toward him and said of him, "Here is a true child of Israel. 
                                There is no duplicity in him." Nathanael said to him, "How do you know me?" Jesus 
                                answered and said to him, "Before Philip called you, I saw you under the fig tree." 
                                Nathanael answered him, "Rabbi, you are the Son of God; you are the King of Israel." 
                                Jesus answered and said to him, "Do you believe because I told you that I saw you under 
                                the fig tree? You will see greater things than this." And he said to him, "Amen, amen, 
                                I say to you, you will see heaven opened and the angels of God ascending and descending 
                                on the Son of Man."
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_1st_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">1st Reading - Sunday
                            <h6 class="modal-title modal-about text-center">Numbers 11:25-29</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                The LORD came down in the cloud and spoke to Moses. Taking some of the spirit that was 
                                on Moses, the LORD bestowed it on the seventy elders; and as the spirit came to rest on 
                                them, they prophesied.
                            </p>
                            <p>
                                Now two men, one named Eldad and the other Medad, were not in the gathering but had been 
                                left in the camp. They too had been on the list, but had not gone out to the tent; yet 
                                the spirit came to rest on them also, and they prophesied in the camp. So, when a young 
                                man quickly told Moses, "Eldad and Medad are prophesying in the camp," Joshua, son of 
                                Nun, who from his youth had been Moses' aide, said, "Moses, my lord, stop them." But 
                                Moses answered him, "Are you jealous for my sake? Would that all the people of the LORD 
                                were prophets! Would that the LORD might bestow his spirit on them all!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_res_psalm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Responsorial Psalm - Sunday
                            <h6 class="modal-title modal-about text-center">Psalm 19:8, 10, 12-13, 14</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                <strong><i>R. The precepts of the Lord give joy to the heart.</i></strong><br>
                                The law of the LORD is perfect,<br>
                                refreshing the soul;<br>
                                the decree of the LORD is trustworthy,<br>
                                giving wisdom to the simple.<br>
                                <strong><i>R. The precepts of the Lord give joy to the heart.</i></strong>
                            </p>
                            <p>
                                The fear of the LORD is pure,<br>
                                enduring forever;<br>
                                the ordinances of the LORD are true,<br>
                                all of them just.<br>
                                <strong><i>R. The precepts of the Lord give joy to the heart.</i></strong>
                            </p>
                            <p>
                                Though your servant is careful of them,<br>
                                very diligent in keeping them,<br>
                                yet who can detect failings?<br>
                                Cleanse me from my unknown faults!<br>
                                <strong><i>R. The precepts of the Lord give joy to the heart.</i></strong>
                            </p>
                            <p>
                                From wanton sin especially, restrain your servant;<br>
                                let it not rule over me.<br>
                                Then shall I be blameless and innocent<br>
                                of serious sin.<br> 
                                <strong><i>R. The precepts of the Lord give joy to the heart.</i></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_2nd_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">2nd Reading - Sunday
                            <h6 class="modal-title modal-about text-center">James 5:1-6</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                Come now, you rich, weep and wail over your impending miseries. Your wealth has rotted 
                                away, your clothes have become moth-eaten, your gold and silver have corroded, and that 
                                corrosion will be a testimony against you; it will devour your flesh like a fire. You 
                                have stored up treasure for the last days. Behold, the wages you withheld from the 
                                workers who harvested your fields are crying aloud; and the cries of the harvesters have 
                                reached the ears of the Lord of hosts. You have lived on earth in luxury and pleasure; 
                                you have fattened your hearts for the day of slaughter. You have condemned; you have 
                                murdered the righteous one; he offers you no resistance.
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        
        <div class="tooltip-content">
            <div class="modal fade features-modal modal-about" id="sunday_gospel_reading" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md modal-about">
                    <div class="modal-content modal-about">
                        <div class="modal-header modal-about" style="background-color: #0D3349; color: white;">
                            <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                            <h4 class="modal-title modal-about text-center">Gospel Reading - Sunday
                            <h6 class="modal-title modal-about text-center"> Mark 9:38-43, 45, 47-48</h6>
                            </h4>
                        </div>
                        <div class="modal-body modal-about">
                            <p>
                                At that time, John said to Jesus, "Teacher, we saw someone driving out demons in your 
                                name, and we tried to prevent him because he does not follow us." Jesus replied, "Do not 
                                prevent him. There is no one who performs a mighty deed in my name who can at the same 
                                time speak ill of me. For whoever is not against us is for us. Anyone who gives you a 
                                cup of water to drink because you belong to Christ, amen, I say to you, will surely not 
                                lose his reward.
                            </p>
                            <p>
                                "Whoever causes one of these little ones who believe in me to sin, it would be better 
                                for him if a great millstone were put around his neck and he were thrown into the sea. 
                                If your hand causes you to sin, cut it off. It is better for you to enter into life 
                                maimed than with two hands to go into Gehenna, into the unquenchable fire. And if your 
                                foot causes you to sin, cut if off. It is better for you to enter into life crippled 
                                than with two feet to be thrown into Gehenna. And if your eye causes you to sin, pluck 
                                it out. Better for you to enter into the kingdom of God with one eye than with two eyes 
                                to be thrown into Gehenna, where 'their worm does not die, and the fire is not 
                                quenched.'"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myModal').modal('');
            </script>
        </div><!--\.Modal -->
        

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
                                <dd>Mondays & Wednesdays</dd>
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
                        <p>"Charity is no substitute for Justice withheld" - Saint Augustine</p>
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