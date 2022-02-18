<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/jazzevents.css?<?php echo time(); ?>" />
    <title>Festival Info</title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #A42323">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="../eventslist/Logo.png" alt="logo" width="116" height="34"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FOOD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JAZZ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HISTORY</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        English
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Dutch</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <img src="">
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">HISTORY</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="jazz-image">
    <img src="../../img/jazzevents/haarlem-jazz-background.png" alt="background">
    <h3 class="title">HAARLEM JAZZ</h3>
    <div class="line-up-box">
        <div class="line-up">
            <p>
                Gumbo Kings . Evolve . Ntjam Rosie .Wicked Jazz Sounds . Tom Thomsom Assemble .
                Jonna Frazer .  Fox & The Mayors . Uncle Sue . Chris Allen . Myles Sanko . Ruis Soundsystem .
                The Family XL . Gare du Nord . Rilan & The Bombadiers . Soul Six  . Han Bennink . The Nordanians
                Lilith Merlot

            </p>
        </div>
    </div>
</section>


<section class="row align-items-start day-buttons">

    <button type="button" name="thursday" class="thursday-button"> Thursday </button>
    <button type="button" name="friday" class="friday-button"> Friday </button>
    <button type="button" name="saturday" class="saturday-button"> Saturday </button>
    <button type="button" name="sunday" class="sunday-button"> Sunday </button>

</section>


<section class="events">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>
                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>

                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>


        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>

                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>


        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>

                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>


        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>

                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>


        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>

                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>


        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-top">
                    <img src="../../img/jazzevents/haarlem-jazz-background.png" class="card-img-top" alt="..." height="200px">
                    <div class="card-img-overlay">
                        <div class="event-day">
                            <p class="date"> day </p>
                            <p class="date"> month </p>
                        </div>
                    </div>

                </div>

                <div class="card-body-event">
                    <h5 class="card-title">Artist name</h5>
                    <p class="card-text">Artist info</p>
                    <p class="card-subtitle">Time of event </p>
                    <p class="card-subtitle"> Location | Price </p>
                    <br/>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-danger btn-sm">"heart icon" </button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Add to cart</button>
                </div>
            </div>


        </div>

        <!-----------------------Location box ----------------------------->

        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header location">
                    LOCATION
                </div>

                <div class="card-body-location">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Patronaat,
                                <br><br>
                                Zijlsingel 2
                                2013 DN Haarlem
                            </p>

                            <br><br>

                            <p>
                                E-mail/telefoon

                                <br><br>
                                info@patronaat.nl
                                phone:
                                023 - 517 58 50
                                (office) -  10.00 u - 17.00 u

                                <br><br>
                                023 - 517 58 58
                                (cash desk /information number)


                            </p>

                        </div>

                        <div class="col-md-6">
                            <img class="patronaat-map" src="../../img/jazzevents/patronaat-map.png" alt="map">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


</section>


<div class="card explore-more-card col-md-12">
    <div class="card-header explore-more">
        EXPLORE MORE
    </div>

    <div class="card-body-images">
        <div class="row">
            <div class="col-md-4">
                <img src="../../img/jazzevents/dance-image.png" alt="dance">
                <p class="explore-label"> Dance > </p>
            </div>

            <div class="col-md-4">
                 <img src="../../img/jazzevents/food-image.png" alt="food">
                <p class="explore-label"> Food > </p>


            </div>

            <div class="col-md-4">
                <img src="../../img/jazzevents/history-image.png" alt="history">
                <p class="explore-label"> History > </p>

            </div>

        </div>
    </div>
</div>






</body>
</html>