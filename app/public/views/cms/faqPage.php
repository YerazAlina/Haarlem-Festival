<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/../head.php'; ?>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light home-page " style="background-color: #A42323;">
        <div class="container">
            <a class="navbar-brand p-2" href="homePage">
                <img src="../../img/logo-white.png" height="50" alt="Haarlem Festival" style="margin-top: -5px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Program
						</a>
						<ul class="dropdown-menu" aria-labelledby="programDropDown">
							<li><a class="dropdown-item" href="#">Food</a></li>
							<li><a class="dropdown-item" href="#">History</a></li>
							<li><a class="dropdown-item" href="#">Jazz</a></li>
							<li><a class="dropdown-item" href="#">Dance</a></li>
						</ul>
						
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Festival info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">FAQ</a>
                    </li>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">En</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        
</nav>

<div class="container">
    <!-- FAQ -->
    <h2 class="my-5">Frequently Asked Questions</h2>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Will there be overnight accomodation?
				</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Unfortunately, no.</strong> Haarlem Festival does not offer <a href=""></a> occomedation, but we suggest <a href="https://www.airbnb.com/s/Haarlem--Netherlands/homes?tab_id=home_tab&refinement_paths%5B%5D=%2Fhomes&flexible_trip_dates%5B%5D=april&flexible_trip_dates%5B%5D=march&flexible_trip_lengths%5B%5D=weekend_trip&date_picker_type=calendar&query=Haarlem%2C%20Netherlands&place_id=ChIJ--nhYGzvxUcROX6huIBW4Yo&source=structured_search_input_header&search_type=autocomplete_click">Airbnb</a> as a good a reliable tool to find a roof during the festivities.
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Can I have a refund?
				</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                If the refund is claimed atleast <strong>5 days before the first event, yes.</strong> 
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
				What are the COVID measurements for events in the Netherlands?
				</button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
				The latest Dutch press conference mandates that clubs, venues and indoor events are force to close between 03:00 and 06:00 CET. This means HAARLEM FESTIVAL is preparing to shift it's events till 02:00. Over the coming days, the HAARLEM FESTIVAL team and the Amsterdam city council are examining the details of the new regulations for each type of event within the total HAARLEM offering.
				<br>
				Also, all events need to have a COVID-health-check prior to the event.
					
            </div>
            </div>
        </div>
        
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>
</body>