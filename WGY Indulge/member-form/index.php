<?php include('../header.php'); ?>
<link rel="stylesheet" href="/css/member-form.css">

<div class="container">
	
	<h1>member information form</h1>

	<!-- Personal Information -->
	<h2>personal information</h2>
	<form action="">
		<input type="text" class="col-md-8" name="member-full-name" id="member-full-name" placeholder="Member's full name">
		<input type="text" class="col-md-4" name="dob" id="dob" placeholder="DOB">
		<input type="text" class="col-md-8" name="home-address" id="home-address" placeholder="Home Address">
		<input type="text" class="col-md-4" name="zip-code" id="zip-code" placeholder="Zip Code">
		<input type="text" class="col-md-8" name="city" id="city" placeholder="City">
		<input type="text" class="col-md-4" name="state" id="state" placeholder="State">

		<input type="tel" class="col-md-4" name="home-phone" id="home-phone" placeholder="Home Phone">
		<input type="tel" class="col-md-4" name="work-phone" id="work-phone" placeholder="Work Phone">
		<input type="tel" class="col-md-4" name="cell-phone" id="cell-phone" placeholder="Cell Phone">

		<input type="email" class="col-md-8" name="email" id="email" placeholder="E-mail">
		<div class="clearfix"></div>
	
		<input type="text" name="relationship" id="relationship" placeholder="Relationship Status" class="col-md-4">
		<input type="text" name="spouse" id="spouse" placeholder="Spouse's Full Name" class="col-md-8">
		<div class="col-md-8 pull-right">
			<div class="row2">
				<input type="text" name="spouse-dob" id="spouse-dob" placeholder="Spouse's DOB" class="col-md-6">
				<input type="text" name="spouse-date-of-birth" id="spouse-date-of-birth" placeholder="Spouse's Date of Birth" class="col-md-6">
			</div>
		</div>
		<div class="clearfix"></div>
		<input type="text" name="kids" id="kids" placeholder="Kids" class="col-md-4">
		<div class="col-md-8 pull-right">
			<div class="row">
				<input type="text" name="kid-1" id="kid-1" placeholder="Kid #1" class="col-md-12">
				<div class="row3">
					<input type="text" name="age-1" id="age-1" placeholder="Age #1" class="col-md-6">
					<input type="text" name="dob-1" id="dob-1" placeholder="dob-1" class="col-md-6">
				</div>
				<input type="text" name="kid-2" id="kid-2" placeholder="Kid #2" class="col-md-12">
				<div class="row3">
					<input type="text" name="age-2" id="age-2" placeholder="Age #2" class="col-md-6">
					<input type="text" name="dob-2" id="dob-2" placeholder="dob-2" class="col-md-6">
				</div>
				<input type="text" name="kid-3" id="kid-3" placeholder="Kid #3" class="col-md-12">
				<div class="row3">
					<input type="text" name="age-3" id="age-3" placeholder="Age #3" class="col-md-6">
					<input type="text" name="dob-3" id="dob-3" placeholder="dob-3" class="col-md-6">
				</div>
			</div>
		</div>
		<div class="clearfix"></div>

		<label for="personal-assistant-full-name" class="col-md-4 another-label">Personal Assistant</label>
		<div class="col-md-8">
			<div class="row">
				<input type="text" name="personal-assistant-full-name" id="personal-assistant-full-name" placeholder="Personal Assistant's Full Name" class="col-md-12">
				<input type="email" name="personal-assistant-email" id="personal-assistant-email" placeholder="Personal Assistant's E-mail" class="col-md-12">
				<div class="row3">
					<input type="text" name="personal-assistant-dob" id="personal-assistant-dob" placeholder="PA's DOB" class="col-md-6">
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- Personal Information -->
		
		<!-- Travelling -->
		<h2>When travelling I prefer</h2>
		<div class="col-md-4 box">
			<h3>Hotel</h3>
			
			<label for="boutique">boutique</label>
			<input type="checkbox" name="hotel" id="boutique">
			<div class="clearfix"></div>
			
			<label for="traditional">traditional</label>
			<input type="checkbox" name="hotel" id="traditional">
			<div class="clearfix"></div>
			
			<label for="contemporary">contemporary</label>
			<input type="checkbox" name="hotel" id="contemporary">
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 box">
			<h3>ground transportation</h3>
			
			<label for="public">public</label>
			<input type="checkbox" name="ground-transportation" id="public">
			<div class="clearfix"></div>
			
			<label for="private">private</label>
			<input type="checkbox" name="ground-transportation" id="private">
			<div class="clearfix"></div>
			
			<label for="premiere-private">premiere private</label>
			<input type="checkbox" name="ground-transportation" id="premiere-private">
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 box">
			<h3>air transportation</h3>
			
			<label for="public-air">public</label>
			<input type="checkbox" name="air-transportation" id="public-air">
			<div class="clearfix"></div>
			
			<label for="private-air">private</label>
			<input type="checkbox" name="air-transportation" id="private-air">
			<div class="clearfix"></div>
			
			<label for="premiere-private-air">premiere private</label>
			<input type="checkbox" name="air-transportation" id="premiere-private-air">
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<div class="col-md-4 box">
			<h3>restaurants atmosphere</h3>
			
			<label for="quiet">quiet</label>
			<input type="checkbox" name="restaurants-atmosphere" id="quiet">
			<div class="clearfix"></div>
			
			<label for="trendy">trendy</label>
			<input type="checkbox" name="restaurants-atmosphere" id="trendy">
			<div class="clearfix"></div>
			
			<label for="classic">classic</label>
			<input type="checkbox" name="restaurants-atmosphere" id="classic">
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 box">
			<h3>restaurant cuisine</h3>
			<div class="row">
				<div class="col-md-6">
					
					<label for="italian">italian</label>
					<input type="checkbox" name="restaurant-cuisine" id="italian">
					<div class="clearfix"></div>
					
					<label for="japanese">japanese</label>
					<input type="checkbox" name="restaurant-cuisine" id="japanese">
					<div class="clearfix"></div>
					
					<label for="french">french</label>
					<input type="checkbox" name="restaurant-cuisine" id="french">
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6">
					
					<label for="american">american</label>
					<input type="checkbox" name="restaurant-cuisine" id="american">
					<div class="clearfix"></div>
					
					<label for="mediterranean">mediterranean</label>
					<input type="checkbox" name="restaurant-cuisine" id="mediterranean">
					<div class="clearfix"></div>
					
					<label for="asian">asian</label>
					<input type="checkbox" name="restaurant-cuisine" id="asian">
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>


		<div class="col-md-8 box">
			<h3>activities</h3>
			<div class="row">
				<div class="col-md-6">
					
					<label for="indoor">indoor</label>
					<input type="checkbox" name="activities" id="indoor">
					<div class="clearfix"></div>
					
					<label for="outdoor">outdoor</label>
					<input type="checkbox" name="activities" id="outdoor">
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6">
					
					<label for="physical">physical</label>
					<input type="checkbox" name="activities" id="physical">
					<div class="clearfix"></div>
					
					<label for="intellectual">intellectual</label>
					<input type="checkbox" name="activities" id="intellectual">
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>

		<label for="multiple-residences" class="col-md-4 another-label2">do you own multiples residences?</label>
		<input type="text" name="multiple-residences" id="multiple-residences" placeholder="Location" class="col-md-8">
		<div class="clearfix"></div>
		<label for="where-travel" class="col-md-4 another-label2">where do you travel most frequently?</label>
		<input type="text" name="where-travel" id="where-travel" placeholder="Location" class="col-md-8">
		<div class="clearfix"></div>

		<div class="box padding">
			<div class="col-md-4">
				<h3>your primarily travel for:</h3>
			</div>
			<div class="col-md-4">
				<label for="business">business</label>
				<input type="checkbox" name="primarily-travel" id="business">
				<div class="clearfix"></div>
				<label for="pleasure">pleasure</label>
				<input type="checkbox" name="primarily-travel" id="pleasure">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="family">family</label>
				<input type="checkbox" name="primarily-travel" id="family">
				<div class="clearfix"></div>
				<label for="all">all</label>
				<input type="checkbox" name="primarily-travel" id="all">
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="box padding">
			<div class="col-md-4">
				<h3>when travelling you prefer to sit:</h3>
			</div>
			<div class="col-md-4">
				<label for="aisle">aisle</label>
				<input type="checkbox" name="primarily-travel" id="aisle">
				<div class="clearfix"></div>
				<label for="window">window</label>
				<input type="checkbox" name="primarily-travel" id="window">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="first-class-only">first class only</label>
				<input type="checkbox" name="primarily-travel" id="first-class-only">
				<div class="clearfix"></div>
				<label for="na-sit">n/a</label>
				<input type="checkbox" name="primarily-travel" id="na-sit">
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<input type="text" name="frequent-flyers-miles" id="frequent-flyers-miles" placeholder="Frequent Flyers Miles #" class="col-md-8 pull-right">
		<div class="clearfix"></div>

		<div class="box padding">
			<div class="col-md-4">
				<h3>do you currently work with a...</h3>
			</div>
			<div class="col-md-4">
				<label for="trainer">trainer</label>
				<input type="checkbox" name="currently-work" id="trainer">
				<div class="clearfix"></div>
				<label for="nutricionist">nutricionist</label>
				<input type="checkbox" name="currently-work" id="nutricionist">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="instructor">instructor</label>
				<input type="checkbox" name="currently-work" id="instructor">
				<div class="clearfix"></div>
				<label for="gym">gym</label>
				<input type="checkbox" name="currently-work" id="gym">
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="box padding">
			<div class="col-md-4">
				<h3>do you wish to work with a...</h3>
			</div>
			<div class="col-md-4">
				<label for="trainer-wish">trainer</label>
				<input type="checkbox" name="wish-to-work" id="trainer-wish">
				<div class="clearfix"></div>
				<label for="nutricionist-wish">nutricionist</label>
				<input type="checkbox" name="wish-to-work" id="nutricionist-wish">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="instructor-wish">instructor</label>
				<input type="checkbox" name="wish-to-work" id="instructor-wish">
				<div class="clearfix"></div>
				<label for="gym-wish">gym</label>
				<input type="checkbox" name="wish-to-work" id="gym-wish">
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="box padding">
			<div class="col-md-4">
				<h3>i collect...</h3>
			</div>
			<div class="col-md-4">
				<label for="art">art</label>
				<input type="checkbox" name="collect" id="art">
				<div class="clearfix"></div>
				<label for="antiques">antiques</label>
				<input type="checkbox" name="collect" id="antiques">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="cars">cars</label>
				<input type="checkbox" name="collect" id="cars">
				<div class="clearfix"></div>
				<input type="text" name="others-collect" id="others-collect" placeholder="others" class="col-md-11">
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- End Travelling -->

		<!-- Favorite... -->
		<div class="favorite">
			<h2>Favorite...</h2>
			<input type="text" name="art-designers" id="art-designers" placeholder="art designers">
			<input type="text" name="restaurants" id="restaurants" placeholder="restaurants">
			<input type="text" name="hotels" id="hotels" placeholder="hotels">
			<input type="text" name="airlines" id="airlines" placeholder="airlines">
			<input type="text" name="vacation-spots" id="vacation-spots" placeholder="vacation spots">
			<input type="text" name="bar-louge-nightclubs" id="bar-louge-nightclubs" placeholder="bar/ louge/ nightclubs">
			<input type="text" name="golf-courses" id="golf-courses" placeholder="golf courses">
			<input type="text" name="drinks" id="drinks" placeholder="drinks">
			<input type="text" name="movies" id="movies" placeholder="movies">
			<input type="text" name="musicians" id="musicians" placeholder="musicians">
			<input type="text" name="books" id="books" placeholder="books">
			<input type="text" name="artists" id="artists" placeholder="artists">
			<input type="text" name="place-to-shop" id="place-to-shop" placeholder="place to shop">
			<input type="text" name="flowers" id="flowers" placeholder="flowers">
			<input type="text" name="gift-to-receive" id="gift-to-receive" placeholder="gift to receive">
		</div>
		<!-- End Favorite... -->

		<!-- Miscellaneous... -->
		<div class="miscellaneous">
			<h2>Miscellaneous...</h2>
			<input type="text" name="education" id="education" placeholder="education">
			<input type="text" name="speak-multiple-languages" id="speak-multiple-languages" placeholder="do you speak multiple languages?">
			<input type="text" name="allergies" id="allergies" placeholder="do you have any allergies?">
			<input type="text" name="ultimate-indulgence" id="ultimate-indulgence" placeholder="ultimate indulgence?">
			<input type="text" name="additional-information" id="additional-information" placeholder="any additional information you would like us to know?">
		</div>
		<!-- End Miscellaneous... -->
		<div class="vip-experiencies">
			<h2>vip experiences</h2>
			<h3>please number from 1-10 the vip experiences you would be most interested in hearing about, with 1 indicating the experience you’d be most eager to participate in:</h3>

			<div class="col-md-4">
				<label for="tickets-movie" class="col-md-10">tickets to a movie premiere</label>
				<input type="text" name="tickets-movie" id="tickets-movie" class="col-md-2">
				<div class="clearfix"></div>
				<label for="reservations-restaurant" class="col-md-10">reservations for restaurant openings</label>
				<input type="text" name="reservations-restaurant" id="reservations-restaurant" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="vip-entry-celebrity" class="col-md-10">vip entry at celebrity events</label>
				<input type="text" name="vip-entry-celebrity" id="vip-entry-celebrity" class="col-md-2">
				<div class="clearfix"></div>
				<label for="vip-entry-nightclub" class="col-md-10">vip entry at nightclub openings</label>
				<input type="text" name="vip-entry-nightclub" id="vip-entry-nightclub" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4">
				<label for="jewelry-exhibits" class="col-md-10">jewelry exhibits</label>
				<input type="text" name="jewelry-exhibits" id="jewelry-exhibits" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			

			<div class="col-md-4">
				<label for="premiere-seats" class="col-md-10">premiere seats at sporting events</label>
				<input type="text" name="premiere-seats" id="premiere-seats" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8">
				<input type="text" name="favorite-team" id="favorite-team" placeholder="please note favorite team">
			</div>
			<div class="clearfix"></div>

			<div class="col-md-4">
				<label for="opening-night-broadway" class="col-md-10">opening night on broadway</label>
				<input type="text" name="opening-night-broadway" id="opening-night-broadway" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8">
				<input type="text" name="genre-preference" id="genre-preference" placeholder="please note genre preference">
			</div>
			<div class="clearfix"></div>

			<div class="col-md-4">
				<label for="fashion-shows" class="col-md-10">fashion shows</label>
				<input type="text" name="fashion-shows" id="fashion-shows" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8">
				<input type="text" name="favorite-designer" id="favorite-designer" placeholder="please note favorite designer">
			</div>
			<div class="clearfix"></div>

			<div class="col-md-4">
				<label for="gallery-openings" class="col-md-10">gallery openings</label>
				<input type="text" name="gallery-openings" id="gallery-openings" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8">
				<input type="text" name="stylistic-preference" id="stylistic-preference" placeholder="please note stylistic preference">
			</div>
			<div class="clearfix"></div>

			<div class="col-md-4">
				<label for="premiere-ticketing" class="col-md-10">premiere ticketing for concerts</label>
				<input type="text" name="premiere-ticketing" id="premiere-ticketing" class="col-md-2">
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8">
				<input type="text" name="musical-artist" id="musical-artist" placeholder="please note favorite musical artist">
			</div>
			<div class="clearfix"></div>


			<!-- Thank You -->
			<h4>thank you for taking the time to fill out this member information form. your personal lifestylists can now familiarize themselves with the details of your likes, dislikes and overall lifestyle needs.</h4>
			<!-- End Thank You -->

			<button type="buton" name="send" id="send" class="animate">Send</button>


		</div>
		<!-- End Vip Experiences -->


	</form>

</div>

<link rel="stylesheet" href="/css/ezmark.css">
<script type="text/javascript" src="/js/jquery.ezmark.min.js"></script>
<script type="text/javascript" src="/js/member-form.js"></script>

<?php include('../footer.php'); ?>