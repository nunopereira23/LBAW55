<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('css/event.css') }}" rel="stylesheet">

    <nav class="navbar navbar-dark navbar-expand-md">
        <a class="navbar-brand" href="../index"> I am In! </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item mr-1"><a href="../events" class="nav-link mr-1">EVENTS </a>
                </li>
                <li class="nav-item mr-1"><a href="../createEvent" class="nav-link">CREATE EVENT</a>
                </li>
                <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"> Username <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="../user/profile"> Profile </a>
                        </li>
                        <li class="dropdown-item"><a href="../myEvents/my_events"> My events </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</head>

<body>

<div class="container mt-3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home">Home</a></li>
            <li class="breadcrumb-item"><a href="../events">Events</a></li>
            <li class="breadcrumb-item active" aria-current="page">Event</li>
        </ol>
    </nav>

    <div class="col-md-12">
        <div class="row">
            <div class="card col-12" >
                <div class="card-top mt-3 rounded event_img" style="background-image: url(../images/concert.jpeg);"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="card-title mb-1 pb-1 font-weight-bold">Concert by band x</h4>
                            <div class="text-muted">10 Mar 2017 at 10 PM</div>
                            <div class="mb-1 text-muted">Centre plaza 4567-567</div>
                            <p class="card-text">Event description. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>

                            <div class="container-fluid  mb-2">
                                <div id="map" class="map rounded" style="width:100%"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary m-2" style="width:100%" >Accept</button>
                            <button type="button" class="btn btn-secondary m-2" style="width:100%" >Ignore</button>

                            <button type="button" class="btn m-2 dropdown-toggle" style="width:100%"  data-toggle="modal"  data-target=".bd-example-modal-sm">
                                2 are in!
                            </button>

                            <button type="button" class="btn m-2 dropdown-toggle"  data-toggle="modal" style="width:100%"  data-target=".bd-example-modal-sm2">
                                Share
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content text-center">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Currently Accepted</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="profile" style="height:50px">
                                <img class="img-responsive pull-right" style=" height: 100%;" src="../images/profile.png">
                                John Smith
                            </a>

                            <a class="list-group-item list-group-item-action" href="profile" style="height:50px">
                                <img class="img-responsive pull-right" style=" height: 100%;" src="../images/profile.png">
                                John Doe
                            </a>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Share with...</h5>

                    <div class="modal-body">

                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action">
                                <div class="custom-control custom-checkbox m-0" style="height:20px">
                                    <input type="checkbox" class="custom-control-input " id="customCheck1">
                                    <img class="img-responsive" style=" height: 100%;" src="../../images/profile.png">
                                    <label class="custom-control-label" for="customCheck1">John Smith</label>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action">
                                <div class="custom-control custom-checkbox m-0" style="height:20px">
                                    <input type="checkbox" class="custom-control-input " id="customCheck2">
                                    <img class="img-responsive" style=" height: 100%;" src="../../images/profile.png">
                                    <label class="custom-control-label" for="customCheck2">John Doe</label>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>



        <div class="row pb-5 mt-2">
            <div class="comments col-md-6" id="comments">
                <h2 class="mb-2">Comments</h2>

                <div class="comment mb-2 ml-2 row">
                    <div class="comment-content col-sm-10 p-2 rounded bg-light">
                        <div class="comment-body">
                            <p>This is a comment.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <br>
                                <button type="button" class="btn btn-sm float-left" data-toggle="modal" data-target="#bd-example-modal3">Reply</button>
                                <br>
                            </p>
                        </div>
                        <img class="img-fluid rounded-circle float-right" src="../../images/profile.png" height="25px" width="25px">
                        <h5 class="text-right"><a href="../partials/profile">John Doe</a></h5>
                        <div class="mb-1 text-muted text-right">Today, 2:38 PM</div>
                    </div>


                    <div class="comment-reply col-md-11 col-sm-10 offset-sm-2 mt-2" style="width:90%">
                        <div class="row">
                            <div class="comment-content col-sm-10 p-2 rounded bg-light border">
                                <div class="comment-body">
                                    <p>This is a comment reply.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        <br>
                                        <button type="button" class="btn btn-sm float-left" data-toggle="modal" data-target="#bd-example-modal3">Reply</button>
                                        <br>
                                    </p>
                                </div>
                                <img class="img-fluid rounded-circle float-right" src="../../images/profile.png" height="20px" width="20px">
                                <h6 class="text-right"><a href="../partials/profile">John Doe</a></h6>
                                <div class="mb-1 text-muted text-right">Today, 4:41 PM</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment mb-2 ml-2 row">
                    <div class="comment-content col-sm-10 p-2 rounded bg-light">
                        <div class="comment-body">
                            <p>This is a comment.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                <button type="button" class="btn btn-sm float-left" data-toggle="modal" data-target="#bd-example-modal3">Reply</button>
                                <br>
                            </p>
                        </div>
                        <img class="img-fluid rounded-circle float-right" src="../../images/profile.png" height="25px" width="25px">
                        <h5 class="text-right"><a href="../partials/profile">John Doe</a></h5>
                        <div class="mb-1 text-muted text-right">Today, 2:38 PM</div>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="bd-example-modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Reply</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="new_comment"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Send</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="new_comment col-md-6" id="new_comment">
                <div class="form-group">
                    <label for="comment"><h2>New comment:</h2></label>
                    <textarea class="form-control bg-light" rows="5" id="new_comment"></textarea>
                    <button type="button" class="btn m-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-sm4">Add photo</button>
                    <button type="button" class="btn m-2">Add poll</button>
                    <input type="submit" class="btn float-right mt-2" value="Submit">
                </div>
            </div>

            <div class="modal fade bd-example-modal-sm4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content text-center">

                        <div class="modal-body">
                            <input type="file" single>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>

    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: new google.maps.LatLng(41.15, -8.63), zoom: 15
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7TfDZysirAi-y1lFLtQQHxP_4Zs2-nrw&callback=myMap"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
</body>
<footer class="copyright">
    <div class="footer-copyright py-3 text-center">
        <div class="container">
            <hr>
            © 2018 I am In!
        </div>
    </div>
</footer>

</html>