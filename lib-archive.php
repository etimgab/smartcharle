<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charles L'wanga Parish, Catholic Church">
    <meta name="author" content="Gabriel Etim">

    <title>Parish:: Online Library::Archives</title>

    <!-- Bootstrap Core CSS -->
    <link href="Boot/boot/css/bootstrap.min.css" rel="stylesheet">
    <link href="Boot/boot1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom theme -->
    <link href="CSS/archive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
    <header id="archive-header">
        <h1>St. Charles L'wanga Online Library</h1>
        <h3>Learn more about the Church</h3>
    </header>
</div>

<div class="container-fluid">
    <nav>
        <a href="lib-orgin.php"><i class="fa fa-arrow-left fa-2x"></i></a>
    </nav>
</div>
<div class="container-fluid">
    <section id="archive-content">
        <ul>
            <li>
                <a href="#" data-toggle="modal" data-target="#myModal1">List all materials</a>
            </li>

<!--            <li>-->
<!--                <a href="#" data-toggle="modal" data-target="#myModal">Add new material</a>-->
<!--            </li>-->
        </ul>
    </section>
</div>

<div class="tooltip-content">
    <div class="modal fade features-modal modal-about" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-about">
            <div class="modal-content modal-about">
                <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <header id="archive-header">
                        <h3>St. Charles L'wanga Online Library</h3>
                        <h5>Learn more about the Church</h5>
                    </header>
                </div>
                <div class="modal-body modal-about">
                    <section id="archive-content">
                        <form class="form-sign" action="#" method="post">
                            <h2 class="form-sign-heading">Add Material</h2>
                            <div class="form-group input-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required autofocus>
                            </div>
                            <div class="form-group input-group">
                                <label for="synopsis">Synopsis</label>
                                <input type="text" id="synopsis" name="synopsis" class="form-control" placeholder="Synopsis" required>
                            </div>
                            <div class="form-group input-group">
                                <label for="genre">Genre</label>
                                <input type="text" id="genre" name="genre" class="form-control" placeholder="Genre" required>
                            </div>
                            <div class="form-group input-group">
                                <label for="release">Release</label>
                                <input type="text" id="release" name="release" class="form-control" placeholder="Release" required>
                            </div>
                            <div class="form-group input-group">
                                <label for="score">Score</label>
                                <input type="text" id="score" name="score" class="form-control" placeholder="Score" required>
                            </div>
                            <div class="form-group input-group">
                                <label for="poster">Poster</label>
                                <input type="file" id="poster" name="poster" class="form-control" placeholder="Poster" required autofocus>
                                <h5 class="text-center text-lowercase text-muted tally"><i>*** All files should be in pdf format ***</i></h5>
                            </div>
                            <div class="form-group input-group">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Add Material</button>
                            </div>
                        </form>
                    </section>
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
                <div class="modal-header modal-about" style="background-color: crimson; color: white;">
                    <button type="button" class="close modal-about" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button>
                    <header id="archive-header">
                        <h3>St. Charles L'wanga Online Library</h3>
                        <h5>Learn more about the Church</h5>
                    </header>
                </div>
                <div class="modal-body modal-about">
                    <h2 class="sub-header text-center">List of Materials</h2>
                    <section id="archive-content">
                        <div class="table-responsive">
                            <div class="col-lg-6 col-md-6">
                                <form action="#" method="post" class="form-list form-group">
                                    <label>Sort By:</label>
                                    <select name="list-material" id="list-material">
                                        <option value="title">Title</option>
                                        <option value="genre">Genre</option>
                                        <option value="score">Score</option>
                                    </select>
                                    <input type="submit" value="Go">
                                </form>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <form action="#" method="post" class="form-list form-group">
                                    <label>Search By:</label>
                                    <select name="list-material" id="list-material1">
                                        <option value="title">Title</option>
                                        <option value="genre">Genre</option>
                                        <option value="score">Score</option>
                                    </select>
                                    <input type="search" id="search" name="search" class="search" placeholder="Search" autofocus>
                                    <input type="submit" value="Go">
                                </form>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Title</th>
                                    <th>Synopsis</th>
                                    <th>Genre</th>
                                    <th>Release</th>
                                    <th>Rights</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>001</td>
                                    <td style="text-align: left" title="History of St. Charles L'wanga">History of St. Charles L'wanga</td>
                                    <td>Faith</td>
                                    <td>Faith</td>
                                    <td>September 2017</td>
                                    <td>
                                        <a href="audio/Saint%20Charles%20Lwanga%20and%20Companions%20–%20Franciscan%20Media.MP3" download="Heaven"><button class="btn btn-primary btn-xs">Download</button></a>
                                        <a href="audio/Saint%20Charles%20Lwanga%20and%20Companions%20–%20Franciscan%20Media.MP3" readonly="Heaven"><button class="btn btn-default btn-xs">Read-online</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td style="text-align: left" title="Heaven.pdf">Heaven</td>
                                    <td>Faith</td>
                                    <td>Faith</td>
                                    <td>September 2017</td>
                                    <td>
                                        <a href="docs/HEAVEN%20-%20Purgatory.pdf" download="Heaven"><button class="btn btn-primary btn-xs">Download</button></a>
                                        <a href="docs/HEAVEN%20-%20Purgatory.pdf" readonly="Heaven"><button class="btn btn-default btn-xs">Read-online</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td style="text-align: left" title="Why become a purgatorian.pdf">Why become a purgatorian</td>
                                    <td>Faith</td>
                                    <td>Faith</td>
                                    <td>September 2017</td>
                                    <td>
                                        <a href="docs/WHY%20BECOME%20A%20PURGATORIAN.pdf" download="Why become a purgatorian"><button class="btn btn-primary btn-xs">Download</button></a>
                                        <a href="docs/WHY%20BECOME%20A%20PURGATORIAN.pdf" readonly="Why become a purgatorian"><button class="btn btn-default btn-xs">Read-online</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td style="text-align: left" title="History of St. Charles L'wanga.pdf">History of St. Charles L'wanga</td>
                                    <td>Marty</td>
                                    <td>Saint</td>
                                    <td>September 2017</td>
                                    <td>
                                        <a href="docs/Saint%20Charles%20Lwanga%20and%20Companion1.pdf" download="Saint Charles and Companions"><button class="btn btn-primary btn-xs">Download</button></a>
                                        <a href="docs/Saint%20Charles%20Lwanga%20and%20Companion1.pdf" readonly="Saint Charles and Companions"><button class="btn btn-default btn-xs">Read-online</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td style="text-align: left" title="Image of St. Charles L'wanga.jpeg">Image of St. Charles L'wanga</td>
                                    <td>Marty</td>
                                    <td>Saint</td>
                                    <td>September 2017</td>
                                    <td>
                                        <a href="img/charles.jpg" download="charles"><button class="btn btn-primary btn-xs">Download</button></a>
                                        <a href="img/charles.jpg" readonly="charles"><button class="btn btn-default btn-xs">Read-online</button></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('');
    </script>
</div><!--\.Modal -->

<footer id="archive-footer">
    <p>&copy; Powered by <a href="index.php">St. Charles L'wanga Parish</a> | Designed by <a href="#">...</a> </p>
<!--    <p>&copy; Powered by <a href="index.php">St. Charles L'wanga Parish</a> | Designed by <a href="#">Bert-Hodo Enterprise</a> </p>-->
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="Boot/boot1/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="Boot/boot1/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>