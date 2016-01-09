<div class="booking-content content-wrapper">

<section id="data-urls" data-url-affinity="/ual/en/us/default/autocomplete/affinityseach"></section>
<form action="/ual/en/us/flight-search/book-a-flight" id="advancedSearchForm" method="post" novalidate="novalidate">	<div class="flight-advanced-search">
		<section id="flight-results">
			<div id="search-summary-wrapper">
					<fieldset>
						<legend class="visuallyhidden">Do you want to use a recent search?</legend>
						<h2 class="legend" aria-hidden="true">Do you want to use a recent search?</h2>
						<div class="form-content">
							<div class="form-row">
								<a href="#flightBooking-recentSearch" id="RS-selector" class="dropdown-trigger dropdown-select-trigger" data-dropdown="flightBooking-recentSearch" data-url-rs="/ual/en/us/flight-search/book-a-flight/flightshopping/rspopulation/rev" data-url-crs="/ual/en/us/flight-search/book-a-flight/flightshopping/clearrshistory/rev" tabindex="0" aria-describedby="recentSearch-text" aria-owns="flightBooking-recentSearch" aria-expanded="false">
									<span id="recentSearch-text" class="dropdown-trigger-text">Recent Searches    </span>
									<div id="flightBooking-recentSearch" class="dropdown dropdown-adv-recent-searches dropdown-anchor-right" aria-hidden="true">
										<div id="rsDropdownPanel" class="dropdown-panel">
											
<div id="FlightShoppingRS" class="dropdown-list-wrapper">
		<div class="dropdown-empty-placeholder">— No recent searches —</div>
</div>

										</div>
									</div>
								</a>
								<input type="hidden" id="NoRecentSearches" value="    Recent searches    ">  
								<input type="hidden" id="RSSelectedKey" value="-1">
							</div>
						</div>
					</fieldset>
									<fieldset>
						<legend class="visuallyhidden">Do you want to book a MileagePlus<span aria-hidden="true">®</span> award ticket?</legend>
						<h2 class="legend" aria-hidden="true">Do you want to book a MileagePlus® award ticket?</h2>
						<div class="form-content">
							<div class="form-row inline">
								<div class="form-group group-type-radio toggle-buttons"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="RedeemMiles" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The RedeemMiles field is required." id="RedeemMiles_noRMiles" name="RedeemMiles" type="radio" value="noRMiles"><label class="radio" for="RedeemMiles_noRMiles">No</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="RedeemMiles" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="RedeemMiles_rMiles" name="RedeemMiles" type="radio" value="rMiles"><label class="radio" for="RedeemMiles_rMiles">Yes</label></div>
									<div class="note-small"><a id="aAdSearchSignIn1" href="https://www.united.com/web/en-US/apps/account/account.aspx" data-authurl="https://www.united.com/ual/en/us/account/account/login" data-modalurl="https://www.united.com/ual/en/us/account/account/getsigninview">Sign in</a> to your MileagePlus<span aria-hidden="true">®</span> account to see better search results</div>
							</div>
						</div>
					</fieldset>
				<fieldset>
					<legend class="visuallyhidden">Trip type</legend>
					<h2 class="legend" aria-hidden="true">Trip type</h2>
					<div class="form-content">
						<div class="form-row">
							<div class="form-group group-type-radio toggle-buttons"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TripTypes" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The TripTypes field is required." id="TripTypes_rt" name="TripTypes" type="radio" value="rt"><label class="radio" for="TripTypes_rt">Round trip</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TripTypes" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="TripTypes_ow" name="TripTypes" type="radio" value="ow"><label class="radio" for="TripTypes_ow">One way</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TripTypes" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio type-radio " id="TripTypes_mc" name="TripTypes" type="radio" value="mc"><label class="radio" for="TripTypes_mc">Multi-city</label></div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend class="visuallyhidden">Locations and dates</legend>
					<h2 class="legend" aria-hidden="true">Locations and dates</h2>
					<div id="roundTripOption" class="form-content">
						<label id="label-Dest1" class="above" style="display: none;">Destination 1</label>
						<div class="form-row form-row-autocomplete">
							<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_0__Origin">From: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].Origin" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid From: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_0__Origin" name="Trips[0].Origin" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-0"></div><div class="tt-dataset tt-dataset-1"></div></div></span></div>
							<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_0__Destination">To: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].Destination" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid To: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_0__Destination" name="Trips[0].Destination" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-2"></div><div class="tt-dataset tt-dataset-3"></div></div></span></div>
						</div>
						<div class="form-row" id="near-by-airports">
							<div id="div-cboMiles1" class="form-group">
								<label for="cboMiles" class="visuallyhidden">Search for nearby departure airports within…</label>
								<div class="selector fixedWidth" id="uniform-cboMiles"><span aria-hidden="true" style="-webkit-user-select: none;">Search nearby airports within...</span><select id="cboMiles" name="cboMiles" class="preproc"><option value="-1">Search nearby airports within...</option>
<option value="25">25 miles</option>
<option value="50">50 miles</option>
<option value="75">75 miles</option>
<option value="100">100 miles</option>
<option value="125">125 miles</option>
<option value="150">150 miles</option>
<option value="175">175 miles</option>
<option value="200">200 miles</option>
<option value="225">225 miles</option>
<option value="250">250 miles</option>
<option value="275">275 miles</option>
<option value="300">300 miles</option>
</select></div>
							</div>
							<div id="div-cboMiles2" class="form-group">
								<label for="cboMiles2" class="visuallyhidden">Search for nearby arrival airports within…</label>
								<div class="selector fixedWidth" id="uniform-cboMiles2"><span aria-hidden="true" style="-webkit-user-select: none;">Search nearby airports within...</span><select id="cboMiles2" name="cboMiles2" class="preproc"><option value="-1">Search nearby airports within...</option>
<option value="25">25 miles</option>
<option value="50">50 miles</option>
<option value="75">75 miles</option>
<option value="100">100 miles</option>
<option value="125">125 miles</option>
<option value="150">150 miles</option>
<option value="175">175 miles</option>
<option value="200">200 miles</option>
<option value="225">225 miles</option>
<option value="250">250 miles</option>
<option value="275">275 miles</option>
<option value="300">300 miles</option>
</select></div>
							</div>
						</div>
						<div id="div-flex-dates" class="form-row">
							<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Flexible" data-valmsg-replace="true"></span><div class="checker" id="uniform-Flexible"><span><input class="type-checkbox  preproc" data-val="true" data-val-required="The My dates are flexible field is required." id="Flexible" name="Flexible" type="checkbox" value="true"></span></div><input name="Flexible" type="hidden" value="false"><label class="checkbox" for="Flexible">My dates are flexible</label>
						</div>
						<div class="form-row">
							<div class="form-group"><label class="ifl" for="Trips_0__DepartDate">Depart date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].DepartDate" data-valmsg-replace="true"></span><input aria-required="true" data-affinitysearch="true" data-nextitem="Trips_0__ReturnDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Depart date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Depart date.<!--EC:V1-->" data-val-uadate="Please enter a valid Depart date.<!--EC:V15-->" id="Trips_0__DepartDate" name="Trips[0].DepartDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							<div class="form-group show" id="div-returnDate"><label class="ifl" for="Trips_0__ReturnDate">Return date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].ReturnDate" data-valmsg-replace="true"></span><input aria-required="true" data-affinitysearch="true" data-previousitem="Trips_0__DepartDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Return date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Return date.<!--EC:V1-->" data-val-uadate="Please enter a valid Return date.<!--EC:V15-->" id="Trips_0__ReturnDate" name="Trips[0].ReturnDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							<div class="form-group" id="trip-length" style="display: none;">
								<label for="trip-length-input" class="visuallyhidden">Number of days for trip:</label>
								<div class="selector fixedWidth" id="uniform-trip-length-input"><span aria-hidden="true" style="-webkit-user-select: none;">6 days</span><select id="trip-length-input" name="tripLength" class="preproc">
										<option value="0">0 day</option>
										<option value="1">1 day</option>
										<option value="2">2 days</option>
										<option value="3">3 days</option>
										<option value="4">4 days</option>
										<option value="5">5 days</option>
										<option value="6" selected="selected">6 days</option>
										<option value="7">7 days</option>
										<option value="8">8 days</option>
										<option value="9">9 days</option>
										<option value="10">10 days</option>
										<option value="11">11 days</option>
										<option value="12">12 days</option>
										<option value="13">13 days</option>
										<option value="14">14 days</option>
										<option value="15">15 days</option>
										<option value="16">16 days</option>
										<option value="17">17 days</option>
										<option value="18">18 days</option>
										<option value="19">19 days</option>
										<option value="20">20 days</option>
										<option value="21">21 days</option>
										<option value="22">22 days</option>
										<option value="23">23 days</option>
										<option value="24">24 days</option>
										<option value="25">25 days</option>
                					<option value="30">30 days</option>
									<option value="60">60 days</option>
									<option value="90">90 days</option>
									<option value="120">120 days</option>
									<option value="180">180 days</option>
								</select></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group">
								<div id="div-pref-time">
									<label for="Trips_0__PreferredTime" class="visuallyhidden">Departure time</label>
									<div class="selector fixedWidth" id="uniform-Trips_0__PreferredTime"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_0__PreferredTime" name="Trips[0].PreferredTime" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div>
								</div>
							</div>
							<div id="div-return-pref-time" class="form-group">
								<label for="Trips_1__PreferredTimeReturn" class="visuallyhidden">Departure time</label>
								<div><div class="selector fixedWidth" id="uniform-Trips_1__PreferredTimeReturn"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_1__PreferredTimeReturn" name="Trips[1].PreferredTimeReturn" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div></div>
							</div>
						</div>
						<div class="form-row">
							<fieldset>
								<span class="above" aria-hidden="true">Connections</span>
								<legend class="visuallyhidden">Connections</legend>
								<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].NonStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_0__NonStop"><span><input class="type-checkbox  preproc" data-val="true" data-val-required="The Nonstop field is required." id="Trips_0__NonStop" name="Trips[0].NonStop" type="checkbox" value="true"></span></div><input name="Trips[0].NonStop" type="hidden" value="false"><label class="checkbox" for="Trips_0__NonStop">Nonstop</label>
								<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].OneStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_0__OneStop"><span><input class="type-checkbox  preproc" data-val="true" data-val-required="The 1 field is required." id="Trips_0__OneStop" name="Trips[0].OneStop" type="checkbox" value="true"></span></div><input name="Trips[0].OneStop" type="hidden" value="false"><label class="checkbox" for="Trips_0__OneStop">1</label>
								<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].TwoPlusStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_0__TwoPlusStop"><span><input class="type-checkbox  preproc" data-val="true" data-val-required="The 2 + field is required." id="Trips_0__TwoPlusStop" name="Trips[0].TwoPlusStop" type="checkbox" value="true"></span></div><input name="Trips[0].TwoPlusStop" type="hidden" value="false"><label class="checkbox" for="Trips_0__TwoPlusStop">2 +</label>
							</fieldset>
						</div>
					</div>
					<div id="multCityOption" style="display: none;">
						<div class="form-content legend-none section-top-border" id="dest2">
							<label class="above">Destination 2</label>
							<div class="form-row form-row-autocomplete">
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_1__Origin">From: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].Origin" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid From: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_1__Origin" name="Trips[1].Origin" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-4"></div><div class="tt-dataset tt-dataset-5"></div></div></span></div>
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_1__Destination">To: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].Destination" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid To: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_1__Destination" name="Trips[1].Destination" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-6"></div><div class="tt-dataset tt-dataset-7"></div></div></span></div>
							</div>
							<div class="form-row">
								<div class="form-group"><label class="ifl" for="Trips_1__DepartDate">Depart date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].DepartDate" data-valmsg-replace="true"></span><input aria-required="true" data-previousitem="Trips_0__DepartDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Depart date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Depart date.<!--EC:V1-->" data-val-uadate="Please enter a valid Depart date.<!--EC:V15-->" id="Trips_1__DepartDate" name="Trips[1].DepartDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							</div>
							<div class="form-row">
								<div class="form-group">
									
									<label for="Trips_1__PreferredTime" class="visuallyhidden">Departure time</label>
									<div class="selector fixedWidth" id="uniform-Trips_1__PreferredTime"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_1__PreferredTime" name="Trips[1].PreferredTime" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div>
								</div>
							</div>
							<div class="form-row">
								<fieldset>
									<span class="above" aria-hidden="true">Connections</span>
									<legend class="visuallyhidden">Connections</legend>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].NonStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_1__NonStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The Nonstop field is required." id="Trips_1__NonStop" name="Trips[1].NonStop" type="checkbox" value="true"></span></div><input name="Trips[1].NonStop" type="hidden" value="false"><label class="checkbox" for="Trips_1__NonStop">Nonstop</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].OneStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_1__OneStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 1 field is required." id="Trips_1__OneStop" name="Trips[1].OneStop" type="checkbox" value="true"></span></div><input name="Trips[1].OneStop" type="hidden" value="false"><label class="checkbox" for="Trips_1__OneStop">1</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].TwoPlusStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_1__TwoPlusStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 2 + field is required." id="Trips_1__TwoPlusStop" name="Trips[1].TwoPlusStop" type="checkbox" value="true"></span></div><input name="Trips[1].TwoPlusStop" type="hidden" value="false"><label class="checkbox" for="Trips_1__TwoPlusStop">2 +</label>
								</fieldset>
							</div>
							<div class="form-row">
								<p><a href="#dest3" class="add-destination" id="addDest3">Add <span aria-hidden="true">another</span> destination <span class="visuallyhidden">3</span></a></p>
							</div>
						</div>
						<div class="form-content legend-none section-top-border" id="dest3">
							<label class="above">Destination 3</label>
							<div class="form-row form-row-autocomplete">
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_2__Origin">From: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].Origin" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid From: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_2__Origin" name="Trips[2].Origin" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-8"></div><div class="tt-dataset tt-dataset-9"></div></div></span></div>
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_2__Destination">To: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].Destination" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid To: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_2__Destination" name="Trips[2].Destination" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-10"></div><div class="tt-dataset tt-dataset-11"></div></div></span></div>
							</div>
							<div class="form-row">
								<div class="form-group"><label class="ifl" for="Trips_2__DepartDate">Depart date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].DepartDate" data-valmsg-replace="true"></span><input aria-required="true" data-previousitem="Trips_1__DepartDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Depart date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Depart date.<!--EC:V1-->" data-val-uadate="Please enter a valid Depart date.<!--EC:V15-->" id="Trips_2__DepartDate" name="Trips[2].DepartDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="Trips_2__PreferredTime" class="visuallyhidden">Departure time</label>
									<div class="selector fixedWidth" id="uniform-Trips_2__PreferredTime"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_2__PreferredTime" name="Trips[2].PreferredTime" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div>
								</div>
							</div>
							<div class="form-row">
								<fieldset>
									<span class="above" aria-hidden="true">Connections</span>
									<legend class="visuallyhidden">Connections</legend>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].NonStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_2__NonStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The Nonstop field is required." id="Trips_2__NonStop" name="Trips[2].NonStop" type="checkbox" value="true"></span></div><input name="Trips[2].NonStop" type="hidden" value="false"><label class="checkbox" for="Trips_2__NonStop">Nonstop</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].OneStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_2__OneStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 1 field is required." id="Trips_2__OneStop" name="Trips[2].OneStop" type="checkbox" value="true"></span></div><input name="Trips[2].OneStop" type="hidden" value="false"><label class="checkbox" for="Trips_2__OneStop">1</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].TwoPlusStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_2__TwoPlusStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 2 + field is required." id="Trips_2__TwoPlusStop" name="Trips[2].TwoPlusStop" type="checkbox" value="true"></span></div><input name="Trips[2].TwoPlusStop" type="hidden" value="false"><label class="checkbox" for="Trips_2__TwoPlusStop">2 +</label>
								</fieldset>
							</div>
							<div class="form-row">
								<p><a href="#" class="remove-destination" id="rmvDest3">Remove destination<span class="visuallyhidden"> 3</span></a> <span id="link-add-dest4" class="show">| <a href="#dest4" class="add-destination" id="addDest4">Add <span aria-hidden="true">another</span> destination<span class="visuallyhidden"> 4</span></a></span></p>
							</div>
						</div>
						<div class="form-content legend-none section-top-border" id="dest4">
							<label class="above">Destination 4</label>
							<div class="form-row form-row-autocomplete">
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_3__Origin">From: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].Origin" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid From: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_3__Origin" name="Trips[3].Origin" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-12"></div><div class="tt-dataset tt-dataset-13"></div></div></span></div>
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_3__Destination">To: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].Destination" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid To: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_3__Destination" name="Trips[3].Destination" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-14"></div><div class="tt-dataset tt-dataset-15"></div></div></span></div>
							</div>
							<div class="form-row">
								<div class="form-group"><label class="ifl" for="Trips_3__DepartDate">Depart date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].DepartDate" data-valmsg-replace="true"></span><input aria-required="true" data-previousitem="Trips_2__DepartDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Depart date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Depart date.<!--EC:V1-->" data-val-uadate="Please enter a valid Depart date.<!--EC:V15-->" id="Trips_3__DepartDate" name="Trips[3].DepartDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="Trips_3__PreferredTime" class="visuallyhidden">Departure time</label>
									<div class="selector fixedWidth" id="uniform-Trips_3__PreferredTime"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_3__PreferredTime" name="Trips[3].PreferredTime" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div>
								</div>
							</div>
							<div class="form-row">
								<fieldset>
									<span class="above" aria-hidden="true">Connections</span>
									<legend class="visuallyhidden">Connections</legend>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].NonStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_3__NonStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The Nonstop field is required." id="Trips_3__NonStop" name="Trips[3].NonStop" type="checkbox" value="true"></span></div><input name="Trips[3].NonStop" type="hidden" value="false"><label class="checkbox" for="Trips_3__NonStop">Nonstop</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].OneStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_3__OneStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 1 field is required." id="Trips_3__OneStop" name="Trips[3].OneStop" type="checkbox" value="true"></span></div><input name="Trips[3].OneStop" type="hidden" value="false"><label class="checkbox" for="Trips_3__OneStop">1</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].TwoPlusStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_3__TwoPlusStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 2 + field is required." id="Trips_3__TwoPlusStop" name="Trips[3].TwoPlusStop" type="checkbox" value="true"></span></div><input name="Trips[3].TwoPlusStop" type="hidden" value="false"><label class="checkbox" for="Trips_3__TwoPlusStop">2 +</label>
								</fieldset>
							</div>
							<div class="form-row">
								<p><a href="#" class="remove-destination" id="rmvDest4">Remove destination<span class="visuallyhidden"> 4</span></a> <span id="link-add-dest5" class="show">| <a href="#dest5" class="add-destination" id="addDest5">Add <span aria-hidden="true">another</span> destination<span class="visuallyhidden"> 5</span></a></span></p>
							</div>
						</div>
						<div class="form-content legend-none section-top-border" id="dest5">
							<label class="above">Destination 5</label>
							<div class="form-row form-row-autocomplete">
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_4__Origin">From: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].Origin" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid From: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_4__Origin" name="Trips[4].Origin" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-16"></div><div class="tt-dataset tt-dataset-17"></div></div></span></div>
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_4__Destination">To: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].Destination" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid To: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_4__Destination" name="Trips[4].Destination" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-18"></div><div class="tt-dataset tt-dataset-19"></div></div></span></div>
							</div>
							<div class="form-row">
								<div class="form-group"><label class="ifl" for="Trips_4__DepartDate">Depart date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].DepartDate" data-valmsg-replace="true"></span><input aria-required="true" data-previousitem="Trips_3__DepartDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Depart date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Depart date.<!--EC:V1-->" data-val-uadate="Please enter a valid Depart date.<!--EC:V15-->" id="Trips_4__DepartDate" name="Trips[4].DepartDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="Trips_4__PreferredTime" class="visuallyhidden">Departure time</label>
									<div class="selector fixedWidth" id="uniform-Trips_4__PreferredTime"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_4__PreferredTime" name="Trips[4].PreferredTime" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div>
								</div>
							</div>
							<div class="form-row">
								<fieldset>
									<span class="above" aria-hidden="true">Connections</span>
									<legend class="visuallyhidden">Connections</legend>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].NonStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_4__NonStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The Nonstop field is required." id="Trips_4__NonStop" name="Trips[4].NonStop" type="checkbox" value="true"></span></div><input name="Trips[4].NonStop" type="hidden" value="false"><label class="checkbox" for="Trips_4__NonStop">Nonstop</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].OneStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_4__OneStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 1 field is required." id="Trips_4__OneStop" name="Trips[4].OneStop" type="checkbox" value="true"></span></div><input name="Trips[4].OneStop" type="hidden" value="false"><label class="checkbox" for="Trips_4__OneStop">1</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].TwoPlusStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_4__TwoPlusStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 2 + field is required." id="Trips_4__TwoPlusStop" name="Trips[4].TwoPlusStop" type="checkbox" value="true"></span></div><input name="Trips[4].TwoPlusStop" type="hidden" value="false"><label class="checkbox" for="Trips_4__TwoPlusStop">2 +</label>
								</fieldset>
							</div>
							<div class="form-row">
								<p><a href="#" class="remove-destination" id="rmvDest5">Remove destination<span class="visuallyhidden"> 5</span></a> <span id="link-add-dest6" class="show">| <a href="#dest6" class="add-destination" id="addDest6">Add <span aria-hidden="true">another</span> destination<span class="visuallyhidden"> 6</span></a></span></p>
							</div>
						</div>
						<div class="form-content legend-none section-top-border" id="dest6">
							<label class="above">Destination 6</label>
							<div class="form-row form-row-autocomplete">
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_5__Origin">From: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].Origin" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid From: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_5__Origin" name="Trips[5].Origin" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-20"></div><div class="tt-dataset tt-dataset-21"></div></div></span></div>
								<div class="form-group airport-autocomplete"><label class="ifl" for="Trips_5__Destination">To: city or airport<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].Destination" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input aria-required="true" autocomplete="off" data-autocomplete-airport="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" data-val="true" data-val-regex="Please enter a valid To: city or airport.<!--EC:V15-->" data-val-regex-pattern="(?=[^$^~<>+=@!?]{4,100})(?=.*[^0-9]+.*)[^$^~<>+=@!?]{4,100}|([a-zA-z.]{3})" data-val-required="Please enter a valid city name, airport name or airport code.<!--EC:V28-->" id="Trips_5__Destination" name="Trips[5].Destination" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-22"></div><div class="tt-dataset tt-dataset-23"></div></div></span></div>
							</div>
							<div class="form-row">
								<div class="form-group"><label class="ifl" for="Trips_5__DepartDate">Depart date<em aria-hidden="true" class="rqrd">*</em></label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].DepartDate" data-valmsg-replace="true"></span><input aria-required="true" data-previousitem="Trips_4__DepartDate" data-toggle="datepicker" data-val="true" data-val-maxdate="Reservations cannot be booked more than 337 days in advance. Please revise your entry.<!--EC:V148-->" data-val-maxdate-max="2016/12/10" data-val-mindate="The date entered is in the past. Please revise your entry.<!--EC:V149-->" data-val-mindate-min="2016/01/08" data-val-regex="Please enter a valid Depart date.<!--EC:V15-->" data-val-regex-pattern=".*" data-val-required="Please enter a Depart date.<!--EC:V1-->" data-val-uadate="Please enter a valid Depart date.<!--EC:V15-->" id="Trips_5__DepartDate" name="Trips[5].DepartDate" type="text" value="" class="hasDatepicker"><button type="button" class="ui-datepicker-trigger">open calendar</button></div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label for="Trips_5__PreferredTime" class="visuallyhidden">Departure time</label>
									<div class="selector fixedWidth" id="uniform-Trips_5__PreferredTime"><span aria-hidden="true" style="-webkit-user-select: none;">Anytime</span><select id="Trips_5__PreferredTime" name="Trips[5].PreferredTime" class="preproc"><option value="">Anytime</option>
<option value="MorningEarly">Early Morning</option>
<option value="Morning">Morning</option>
<option value="MorningLate">Late Morning</option>
<option value="Noon">12:00 Noon</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
<option value="EveningLate">Late Evening</option>
<option value="Midnight">12:00 Midnight</option>
<option value="">---------------</option>
<option value="1:00AM">1:00 a.m.</option>
<option value="2:00AM">2:00 a.m.</option>
<option value="3:00AM">3:00 a.m.</option>
<option value="4:00AM">4:00 a.m.</option>
<option value="5:00AM">5:00 a.m.</option>
<option value="6:00AM">6:00 a.m.</option>
<option value="7:00AM">7:00 a.m.</option>
<option value="8:00AM">8:00 a.m.</option>
<option value="9:00AM">9:00 a.m.</option>
<option value="10:00AM">10:00 a.m.</option>
<option value="11:00AM">11:00 a.m.</option>
<option value="12:00PM">12:00 Noon</option>
<option value="1:00PM">1:00 p.m.</option>
<option value="2:00PM">2:00 p.m.</option>
<option value="3:00PM">3:00 p.m.</option>
<option value="4:00PM">4:00 p.m.</option>
<option value="5:00PM">5:00 p.m.</option>
<option value="6:00PM">6:00 p.m.</option>
<option value="7:00PM">7:00 p.m.</option>
<option value="8:00PM">8:00 p.m.</option>
<option value="9:00PM">9:00 p.m.</option>
<option value="10:00PM">10:00 p.m.</option>
<option value="11:00PM">11:00 p.m.</option>
<option value="12:00AM">12:00 Midnight</option>
</select></div>
								</div>
							</div>
							<div class="form-row">
								<fieldset>
									<span class="above" aria-hidden="true">Connections</span>
									<legend class="visuallyhidden">Connections</legend>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].NonStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_5__NonStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The Nonstop field is required." id="Trips_5__NonStop" name="Trips[5].NonStop" type="checkbox" value="true"></span></div><input name="Trips[5].NonStop" type="hidden" value="false"><label class="checkbox" for="Trips_5__NonStop">Nonstop</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].OneStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_5__OneStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 1 field is required." id="Trips_5__OneStop" name="Trips[5].OneStop" type="checkbox" value="true"></span></div><input name="Trips[5].OneStop" type="hidden" value="false"><label class="checkbox" for="Trips_5__OneStop">1</label>
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].TwoPlusStop" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_5__TwoPlusStop"><span class="checked"><input checked="True" class="type-checkbox  preproc" data-val="true" data-val-required="The 2 + field is required." id="Trips_5__TwoPlusStop" name="Trips[5].TwoPlusStop" type="checkbox" value="true"></span></div><input name="Trips[5].TwoPlusStop" type="hidden" value="false"><label class="checkbox" for="Trips_5__TwoPlusStop">2 +</label>
								</fieldset>
							</div>
							<div class="form-row">
								<p><a href="#" class="remove-destination" id="rmvDest6">Remove destination <span class="visuallyhidden">6</span></a></p>
							</div>
						</div>
					</div>
					<div class="expCol form-content section-top-border search-pref ui-accordion ui-widget ui-helper-reset" role="tablist">
						<div id="searchPrefLink" class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" aria-controls="ui-id-1" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon icon-toggle-arrow-right-gray"></span>
							<h3>My search preferences</h3>
						</div>
						<div class="hidden-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-1" aria-labelledby="searchPrefLink" role="tabpanel" aria-hidden="true" style="display: none;">
							<div class="form-row">
								<label for="SortType" class="above">Sort by</label>
								<div class="selector fixedWidth" id="uniform-SortType"><span aria-hidden="true" style="-webkit-user-select: none;">Best matches</span><select id="SortType" name="SortType" class="preproc"><option selected="selected" value="bestmatches">Best matches</option>
<option value="price_low">Price (lowest to highest)</option>
<option value="price_high">Price (highest to lowest)</option>
<option value="departure_early">Departure time (earliest to latest)</option>
<option value="departure_late">Departure time (latest to earliest)</option>
<option value="arrival_early">Arrival time (earliest to latest)</option>
<option value="arrival_late">Arrival time (latest to earliest)</option>
<option value="duration_fastest">Duration (shortest to longest)</option>
<option value="duration_longest">Duration (longest to shortest)</option>
<option value="stops_low">Stops (lowest to highest)</option>
<option value="stops_high">Stops (highest to lowest)</option>
</select></div>
							</div>
							<div class="form-row">
								<fieldset>
									<span class="above" aria-hidden="true">Airline preference</span>
									<legend class="visuallyhidden">Airline preference</legend>
									<div class="form-group group-type-radio toggle-buttons  airline-preference-toggle-buttons"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="CarrierPref" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The CarrierPref field is required." id="CarrierPref_CPAll" name="CarrierPref" type="radio" value="CPAll"><label class="radio" for="CarrierPref_CPAll">All airlines</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="CarrierPref" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="CarrierPref_CPUaOnly" name="CarrierPref" type="radio" value="CPUaOnly"><label class="radio" for="CarrierPref_CPUaOnly">United and United Express® only</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="CarrierPref" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio type-radio " id="CarrierPref_CPUawStar" name="CarrierPref" type="radio" value="CPUawStar"><label class="radio" for="CarrierPref_CPUawStar">All Star Alliance™ airlines</label></div>
								</fieldset>
							</div>
							<div class="form-row form-row-autocomplete">
								<div id="pref-conn-group" class="form-group">
									<fieldset>
										<span class="above" aria-hidden="true">Preferred connections</span>
										<legend class="visuallyhidden">Preferred connections</legend>
										<div class="form-group airport-autocomplete connection"><label class="ifl" for="PreferredConn">City or airport</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="PreferredConn" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input autocomplete="off" data-autocomplete-airport-connection="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" id="PreferredConn" name="PreferredConn" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-24"></div><div class="tt-dataset tt-dataset-25"></div></div></span></div>
										<input autocomplete="off" id="HiddenPreferredConn" name="HiddenPreferredConn" type="hidden" value="">
										<div id="div-preferred-conn-tabs" class="form-row"></div>
									</fieldset>
								</div>
								<div id="unpref-conn-group" class="form-group">
									<fieldset>
										<span class="above" aria-hidden="true">Connections to avoid</span>
										<legend class="visuallyhidden">Connections to avoid</legend>
										<div class="form-group airport-autocomplete connection"><label class="ifl" for="UnpreferredConn">City or airport</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="UnpreferredConn" data-valmsg-replace="true"></span><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input autocomplete="off" data-autocomplete-airport-connection="/ual/en/us/default/autocomplete/getairportnames?isReward=True&amp;isRevenue=True" data-autocomplete-airport-list-text="See full airport list" id="UnpreferredConn" name="UnpreferredConn" type="text" value="" class="tt-input" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: open-sans, 'Helvetica Neue', Helvetica, Calibri, Arial, 'Lucida Grande', sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-26"></div><div class="tt-dataset tt-dataset-27"></div></div></span></div>
										<input autocomplete="off" id="HiddenUnpreferredConn" name="HiddenUnpreferredConn" type="hidden" value="">
										<div id="div-unpreferred-conn-tabs" class="form-row"></div>
									</fieldset>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend class="visuallyhidden">Travelers</legend>
					<h2 class="legend" aria-hidden="true">Travelers</h2>
					<div class="form-content">
						<div class="form-row traveler-dropdown">

							<a href="#travelers-select" id="travelers-selector" class="dropdown-trigger dropdown-select-trigger" data-dropdown="travelers-select" data-label-plural="travelers" tabindex="0" aria-describedby="ui-id-3" aria-owns="travelers-select" aria-expanded="false">
								<span class="dropdown-trigger-label" id="ui-id-3"><span class="visuallyhidden">Number of travelers: </span><span class="dropdown-trigger-text">1 adult</span><span class="visuallyhidden">, enter to change</span></span>
								<div id="travelers-select" class="dropdown dropdown-travelers-select" aria-hidden="true" tabindex="-1">
									<div class="dropdown-panel">
										 <h2 class="visuallyhidden">Select number and types of travelers</h2>
<ul class="stepper">
	<li>
		
<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="adults" data-label-single="adult" data-step-max="8" data-step-min="0" data-val="true" data-val-number="The field NumOfAdults must be a number." data-val-required="Please select the number of travelers.<!--EC:V65-->" id="NumOfAdults" maxlength="1" name="NumOfAdults" type="text" value="1" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfAdults">Adults (18-64)</label></div>	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="seniors" data-label-single="senior" data-step-max="8" data-step-min="0" data-val="true" data-val-number="The field NumOfSeniors must be a number." data-val-required="The NumOfSeniors field is required." id="NumOfSeniors" maxlength="1" name="NumOfSeniors" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfSeniors">Seniors ages 65+</label></div>
	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="children" data-label-single="child" data-step-max="8" data-step-min="0" data-val="true" data-val-number="The field NumOfChildren04 must be a number." data-val-required="The NumOfChildren04 field is required." id="NumOfChildren04" maxlength="1" name="NumOfChildren04" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfChildren04">Children (16-17)</label></div>
	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="children" data-label-single="child" data-step-max="8" data-step-min="0" data-val="true" data-val-number="The field NumOfChildren03 must be a number." data-val-required="The NumOfChildren03 field is required." id="NumOfChildren03" maxlength="1" name="NumOfChildren03" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfChildren03">Children (12-15)</label></div>
	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="children" data-label-single="child" data-step-max="8" data-step-min="0" data-val="true" data-val-number="The field NumOfChildren02 must be a number." data-val-required="The NumOfChildren02 field is required." id="NumOfChildren02" maxlength="1" name="NumOfChildren02" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfChildren02">Children (5-11)</label></div>
	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="children" data-label-single="child" data-step-max="7" data-step-min="0" data-val="true" data-val-number="The field NumOfChildren01 must be a number." data-val-required="The NumOfChildren01 field is required." id="NumOfChildren01" maxlength="1" name="NumOfChildren01" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfChildren01">Children (2-4)</label></div>
	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="infants" data-label-single="infant" data-step-max="7" data-step-min="0" data-val="true" data-val-number="The field NumOfInfants must be a number." data-val-required="The NumOfInfants field is required." id="NumOfInfants" maxlength="1" name="NumOfInfants" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfInfants">Infants under 2</label></div>
	</li>
	<li>
		
		<div class="stepper-wrap"><a class="stepper-btn-down" aria-hidden="true"></a><input autocomplete="off" data-label-plural="infants" data-label-single="infant" data-step-max="8" data-step-min="0" data-val="true" data-val-number="The field NumOfLapInfants must be a number." data-val-required="The NumOfLapInfants field is required." id="NumOfLapInfants" maxlength="1" name="NumOfLapInfants" type="text" value="0" class="stepper-value"><a class="stepper-btn-up" aria-hidden="true"></a><label for="NumOfLapInfants">Infants on lap</label></div>
	</li>
</ul>
									<button class="modalCloseImg dropdown-close"><span class="visuallyhidden">Close</span></button></div>
								</div>
							</a>
						</div>
						<aside>
							<p>Learn more</p>
							<ul>
								<li><a href="https://www.united.com/web/en-US/content/travel/specialneeds/minors/default.aspx" target="_blank"><span class="visuallyhidden">Learn more about</span>Unaccompanied minors</a></li>
								<li><a href="https://www.united.com/web/en-US/content/travel/specialneeds/infants/default.aspx" target="_blank"><span class="visuallyhidden">Learn more about</span>Traveling with infants</a></li>
							</ul>
							<p>Group of 9 or more?</p>
							<ul>
								<li><a href="https://www.united.com/web/en-US/content/contact/group/groups.aspx" target="_blank" id="removeDest6">Request a bid for group travel</a></li>
							</ul>
						</aside>
						<div class="expCol section-top-border oxygen-pet ui-accordion ui-widget ui-helper-reset" id="OxygenPet" role="tablist">
							<div class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-2" aria-controls="OxygenPetContent" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon icon-toggle-arrow-right-gray"></span>
								<h3>Portable oxygen and pets in cabin</h3>
							</div>
							<div id="OxygenPetContent" class="hidden-content oxygen-pet-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
								<div class="form-row">
									<fieldset>
										<span class="above" aria-hidden="true">Will anyone in your reservation be traveling with a portable oxygen concentrator?</span>
										<legend class="visuallyhidden">Will anyone in your reservation be traveling with a portable oxygen concentrator?</legend>
										<div class="form-group group-type-radio toggle-buttons portable-oxygen-toggle-buttons" id="PortOxSelection"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="PortOx" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The PortOx field is required." id="PortOx_nPortOx" name="PortOx" type="radio" value="nPortOx"><label class="radio" for="PortOx_nPortOx">No</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="PortOx" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="PortOx_yPortOx" name="PortOx" type="radio" value="yPortOx"><label class="radio" for="PortOx_yPortOx">Yes</label></div>
									</fieldset>
								</div>
								<div class="form-row">
									<fieldset>
										<span class="above" aria-hidden="true">Will a pet be traveling with you in the aircraft cabin?</span>
										<legend class="visuallyhidden">Will a pet be traveling with you in the aircraft cabin?</legend>
										<div class="form-group group-type-radio toggle-buttons pet-toggle-buttons"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TravelwPet" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The TravelwPet field is required." id="TravelwPet_withoutPet" name="TravelwPet" type="radio" value="withoutPet"><label class="radio" for="TravelwPet_withoutPet">No</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TravelwPet" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="TravelwPet_withPet" name="TravelwPet" type="radio" value="withPet"><label class="radio" for="TravelwPet_withPet">Yes</label></div>
										<aside>
											<p>We allow one pet per adult or senior in a reservation. <a href="https://www.united.com/web/en-US/content/travel/animals/default.aspx" target="_blank">See other pet restrictions</a></p>
										</aside>
									</fieldset>
								</div>
								<div class="form-row" id="pets-selector">
									<label class="above label-with-tool-tip" for="NumofPetLabel">Select number of pets</label> <button type="button" class="icon-tooltip tool-tip-pets" data-toggle="tooltip" data-tooltip-style="default" data-hasqtip="0" oldtitle="We allow one pet per adult or senior within a reservation." title="" tabindex="0"></button>
									<div class="form-group number-pets"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="NumberOfPets" data-valmsg-replace="true"></span><div class="selector fixedWidth" id="uniform-NumberOfPets"><span aria-hidden="true" style="-webkit-user-select: none;">1 pet</span><label class="ifl visuallyhidden" for="NumberOfPets" style="opacity: 0;">Number of Pets<em aria-hidden="true" class="rqrd">*</em></label><select aria-label="Number of Pets" aria-required="true" data-val="true" data-val-number="The field Number of Pets must be a number." data-val-required="The Number of Pets field is required." id="NumberOfPets" name="NumberOfPets" class="preproc"><option value="1">1 pet</option></select></div></div>
								</div>
								<div id="label-pet-flight" class="form-row label-pet-flight" style="display: none;">
									<label class="above">Select your pet's flight(s)</label>
								</div>
								<div id="div_pet_0" class="form-group" style="display: none;" data-msgurl="/ual/en/us/common/common/messagelookup">
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[0].PetIsTraveling" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_0__PetIsTraveling"><span><input class="type-checkbox pet-chk preproc" data-val="true" data-val-required="The PetIsTraveling field is required." id="Trips_0__PetIsTraveling" name="Trips[0].PetIsTraveling" type="checkbox" value="true"></span></div><input name="Trips[0].PetIsTraveling" type="hidden" value="false"><label class="checkbox" for="Trips_0__PetIsTraveling"></label>
									<span id="pet_0_from">1- [From Airport]</span> to <span id="pet_0_to">[To Airport]</span> | <span id="pet_0_date">[Dep Date]</span>
								</div>
								<div id="div_pet_1" class="form-group" style="display: none;">
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[1].PetIsTraveling" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_1__PetIsTraveling"><span><input class="type-checkbox pet-chk preproc" data-val="true" data-val-required="The PetIsTraveling field is required." id="Trips_1__PetIsTraveling" name="Trips[1].PetIsTraveling" type="checkbox" value="true"></span></div><input name="Trips[1].PetIsTraveling" type="hidden" value="false"><label class="checkbox" for="Trips_1__PetIsTraveling"></label>
									<span id="pet_1_from">2- [From Airport]</span> to <span id="pet_1_to">[To Airport]</span> | <span id="pet_1_date">[Dep Date]</span>
								</div>
								<div id="div_pet_2" class="form-group" style="display: none;">
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[2].PetIsTraveling" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_2__PetIsTraveling"><span><input class="type-checkbox pet-chk preproc" data-val="true" data-val-required="The PetIsTraveling field is required." id="Trips_2__PetIsTraveling" name="Trips[2].PetIsTraveling" type="checkbox" value="true"></span></div><input name="Trips[2].PetIsTraveling" type="hidden" value="false"><label class="checkbox" for="Trips_2__PetIsTraveling"></label>
									<span id="pet_2_from">3- [From Airport]</span> to <span id="pet_2_to">[To Airport]</span> | <span id="pet_2_date">[Dep Date]</span>
								</div>
								<div id="div_pet_3" class="form-group" style="display: none;">
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[3].PetIsTraveling" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_3__PetIsTraveling"><span><input class="type-checkbox pet-chk preproc" data-val="true" data-val-required="The PetIsTraveling field is required." id="Trips_3__PetIsTraveling" name="Trips[3].PetIsTraveling" type="checkbox" value="true"></span></div><input name="Trips[3].PetIsTraveling" type="hidden" value="false"><label class="checkbox" for="Trips_3__PetIsTraveling"></label>
									<span id="pet_3_from">4- [From Airport]</span> to <span id="pet_3_to">[To Airport]</span> | <span id="pet_3_date">[Dep Date]</span>
								</div>
								<div id="div_pet_4" class="form-group" style="display: none;">
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[4].PetIsTraveling" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_4__PetIsTraveling"><span><input class="type-checkbox pet-chk preproc" data-val="true" data-val-required="The PetIsTraveling field is required." id="Trips_4__PetIsTraveling" name="Trips[4].PetIsTraveling" type="checkbox" value="true"></span></div><input name="Trips[4].PetIsTraveling" type="hidden" value="false"><label class="checkbox" for="Trips_4__PetIsTraveling"></label>
									<span id="pet_4_from">5- [From Airport]</span> to <span id="pet_4_to">[To Airport]</span> | <span id="pet_4_date">[Dep Date]</span>
								</div>
								<div id="div_pet_5" class="form-group" style="display: none;">
									<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="Trips[5].PetIsTraveling" data-valmsg-replace="true"></span><div class="checker" id="uniform-Trips_5__PetIsTraveling"><span><input class="type-checkbox pet-chk preproc" data-val="true" data-val-required="The PetIsTraveling field is required." id="Trips_5__PetIsTraveling" name="Trips[5].PetIsTraveling" type="checkbox" value="true"></span></div><input name="Trips[5].PetIsTraveling" type="hidden" value="false"><label class="checkbox" for="Trips_5__PetIsTraveling"></label>
									<span id="pet_5_from">6- [From Airport]</span> to <span id="pet_5_to">[To Airport]</span> | <span id="pet_5_date">[Dep Date]</span>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset id="fare-preference">
					<legend class="visuallyhidden">Fare preferences</legend>
					<h2 class="legend" aria-hidden="true">Fare preferences</h2>
					<div class="form-content" id="revenue-fare-preferences">
						<div class="form-row">
							<fieldset>
								<span class="above" aria-hidden="true">Cabin</span>
								<legend class="visuallyhidden">Cabin class</legend>
								
								<div class="form-group group-type-radio toggle-buttons cabin-type-toggle-buttons" id="revenue-cabin-type-container"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="CabinType" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The CabinType field is required." id="CabinType_econ" name="CabinType" type="radio" value="econ"><label class="radio" for="CabinType_econ">Economy</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="CabinType" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="CabinType_businessFirst" name="CabinType" type="radio" value="businessFirst"><label class="radio" for="CabinType_businessFirst">Business or First</label></div>
							</fieldset>
							<aside>
								<p>Upgrades</p>
								<p><a href="https://www.united.com/web/en-US/content/mileageplus/awards/upgrade/default.aspx" target="_blank">Upgrades overview</a></p>
							</aside>
						</div>
						<div class="form-row">
							<label class="above label-with-tool-tip" for="RefundFlexLabel">Type of fare</label><button type="button" class="icon-tooltip tool-tip-refund-flex" data-toggle="tooltip" data-tooltip-style="close" tabindex="0" data-hasqtip="2" oldtitle="Refund/flexibility tooltip" title=""><span class="visuallyhidden">Unrestricted fares do not require advanced purchase, waive change fees and cancel fees and are refundable. Flexible fares may require advanced purchase, may waive change fees and cancel fees and are refundable. Lowest available fares require advanced purchase, do not waive chagne fees and cancel fees and are not refundable.</span></button>
							<div id="refund-flexibility" class="tip-refund-flex">
								<table>
									<thead>
										<tr>
											<th></th>
											<th scope="col">Unrestricted Fares</th>
											<th scope="col">Flexible Fares</th>
											<th scope="col">Lowest Available</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">Advanced purchase not required</th>
											<td><i class="icon-blue-check"><span class="visuallyhidden">yes</span></i></td>
											<td>Varies</td>
											<td><i class="icon-red-x"><span class="visuallyhidden">no</span></i></td>
										</tr>
										<tr>
											<th scope="row">Change fee and cancel fee waived</th>
											<td><i class="icon-blue-check"><span class="visuallyhidden">yes</span></i></td>
											<td>Varies</td>
											<td><i class="icon-red-x"><span class="visuallyhidden">no</span></i></td>
										</tr>
										<tr>
											<th scope="row">Refundable</th>
											<td><i class="icon-blue-check"><span class="visuallyhidden">yes</span></i></td>
											<td><i class="icon-blue-check"><span class="visuallyhidden">yes</span></i></td>
											<td><i class="icon-red-x"><span class="visuallyhidden">no</span></i></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="form-group group-type-radio toggle-buttons fare-type"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="FareTypes" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The FareTypes field is required." id="FareTypes_lf" name="FareTypes" type="radio" value="lf"><label class="radio" for="FareTypes_lf">Lowest available fares</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="FareTypes" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="FareTypes_ff" name="FareTypes" type="radio" value="ff"><label class="radio" for="FareTypes_ff">Flexible fares</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="FareTypes" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio type-radio " id="FareTypes_urf" name="FareTypes" type="radio" value="urf"><label class="radio" for="FareTypes_urf">Unrestricted fares</label></div>
							<aside>
								<p><a href="https://www.united.com/web/en-US/content/booking/flight/fareClass.aspx" target="_blank">Fare classes</a></p>
							</aside>
						</div>
						<div class="form-row">
							<label for="select-upgrade-type" class="above">Upgrade type</label>
							<div class="selector fixedWidth" id="uniform-select-upgrade-type"><span aria-hidden="true" style="-webkit-user-select: none;">No upgrade</span><select id="select-upgrade-type" name="UpgradeType" class="select-upgrade-type preproc">
								<option value="">No upgrade</option>
								<option value="MUA">MileagePlus Upgrade Awards (MUA)</option>
							</select></div>
								<div class="note-small">
									<a id="aAdSearchSignIn2" href="https://www.united.com/web/en-US/apps/account/account.aspx">Sign in</a> to your MileagePlus<span aria-hidden="true">®</span> account to see better search results
								</div>
						</div>
						<div class="form-row" style="display: none;">
							<div class="form-group group-type-radio toggle-buttons"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="BuyUpgrade" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The BuyUpgrade field is required." id="BuyUpgrade_econUpgrade" name="BuyUpgrade" type="radio" value="econUpgrade"><label class="radio" for="BuyUpgrade_econUpgrade">Buy Economy and upgrade</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="BuyUpgrade" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="BuyUpgrade_busUpgrade" name="BuyUpgrade" type="radio" value="busUpgrade"><label class="radio" for="BuyUpgrade_busUpgrade">Buy Business and upgrade</label></div>
						</div>
						<div class="form-row section-top-border">
							<label for="ClassofService" class="above">Fare class</label>
							<div class="form-group"><label class="ifl" for="ClassofService">Example: F, A, U</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="ClassofService" data-valmsg-replace="true"></span><input data-val="true" data-val-remote="'Example: F, A, U' is invalid." data-val-remote-additionalfields="*.ClassofService,*.CabinType" data-val-remote-url="/ual/en/us/flight-search/book-a-flight/flightshopping/validateclassofservice/rev" id="ClassofService" name="ClassofService" type="text" value=""></div>
						</div>
						<div class="form-row fare-info">
							<span class="icon-exclamation"></span>
							<p>Searching by fare class will override the other fare preferences selected above.</p>
						</div>
					</div>
					<div class="form-content" id="award-fare-preferences" style="display: none;">
						<div class="form-row">
							<fieldset>
								<legend class="visuallyhidden">Cabin</legend>
								<span class="above">Cabin</span>
								<div class="form-group group-type-radio toggle-buttons"><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="AwardCabinType" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The AwardCabinType field is required." id="AwardCabinType_awardEcon" name="AwardCabinType" type="radio" value="awardEcon"><label class="radio" for="AwardCabinType_awardEcon">Economy</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="AwardCabinType" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio " id="AwardCabinType_awardBusinessFirst" name="AwardCabinType" type="radio" value="awardBusinessFirst"><label class="radio" for="AwardCabinType_awardBusinessFirst">Business/ BusinessFirst</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="AwardCabinType" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio type-radio type-radio " id="AwardCabinType_awardFirst" name="AwardCabinType" type="radio" value="awardFirst"><label class="radio" for="AwardCabinType_awardFirst">First/Global First</label></div>
							</fieldset>
						</div>
					</div>
				</fieldset>
				<fieldset id="lmx-summary">
					<legend class="visuallyhidden">Show mileage earnings in search results?</legend>
					<h2 class="legend" aria-hidden="true">Show mileage earnings in search results?</h2>
					<div class="form-content">
						<div class="form-row inline">
							<div class="form-group group-type-radio toggle-buttons">
								<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="IncludeLmx" data-valmsg-replace="true"></span><input aria-required="true" checked="checked" class="type-radio toggle-buttons" data-val="true" data-val-required="The IncludeLmx field is required." id="lmx-included-no" name="IncludeLmx" type="radio" value="False"><label class="radio" for="lmx-included-no">No</label>
								<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="IncludeLmx" data-valmsg-replace="true"></span><input aria-required="true" class="type-radio toggle-buttons" id="lmx-included-yes" name="IncludeLmx" type="radio" value="True"><label class="radio" for="lmx-included-yes">Yes</label>
							</div>
						</div>
						<aside>
							<p>Earning miles</p>
							<p><a href="https://www.united.com/CMS/en-US/Marketing/CustComm/Promotions/Pages/united.aspx" target="_blank">Learn more<span class="visuallyhidden"> about earning miles</span></a></p>
						</aside>
					</div>
				</fieldset>
				<fieldset>
					<legend class="visuallyhidden">Country associated with your billing address</legend>
					<h2 class="legend" aria-hidden="true">Country associated with your billing address</h2>
					<div class="form-content">
						<div class="form-row country-dropdown">
							<label for="BillingAddressCountryCode" class="visuallyhidden">Country</label>
							<div class="selector fixedWidth" id="uniform-BillingAddressCountryCode"><span aria-hidden="true" style="-webkit-user-select: none;">United States</span><select id="BillingAddressCountryCode" name="BillingAddressCountryCode" class="preproc"><option selected="selected" value="US">United States</option>

<option selected="selected" value="US">United States</option>
<option value="VN">Vietnam</option>
</select></div>
						</div>
						<aside>
							<p>Billing address country</p>
							<a href="https://www.united.com/web/en-US/content/booking/flight/billingAddressCountry.aspx" target="_blank">Learn more<span class="visuallyhidden"> about billing address country</span></a>
						</aside>
					</div>
				</fieldset>
				<fieldset id="promo-cert">
					<legend class="visuallyhidden">Promotions and certificates</legend>
					<h2 class="legend" aria-hidden="true">Promotions and certificates</h2>
					<div class="form-content">
						<div class="form-row offer-code">
							<div class="form-group"><label class="ifl" for="OfferCode">Offer code</label><span aria-hidden="true" class="field-validation-valid" data-valmsg-for="OfferCode" data-valmsg-replace="true"></span><input autocomplete="off" id="OfferCode" name="OfferCode" type="text" value=""></div>
							<input data-val="true" data-val-required="The PromoCodeSkv field is required." id="PromoCodeSkv" name="PromoCodeSkv" type="hidden" value="False">
						</div>
						<aside>
							<p>Redeeming a certificate</p>
							<a href="https://www.united.com/web/en-US/content/booking/flight/offerCode.aspx" target="_blank">Learn more<span class="visuallyhidden"> about redeeming a certificate</span></a>
						</aside>
					</div>
				</fieldset>
				<div class="action-container">
					<div class="button-container">
						<input id="CartId" name="CartId" type="hidden" value="">
						<input data-val="true" data-val-required="The IsGovPath field is required." id="IsGovPath" name="IsGovPath" type="hidden" value="False">
						<input id="GovType" name="GovType" type="hidden" value="">
						<button type="submit" id="btn-search" data-poschangeurl="/ual/en/us/default/language/select" class="btn btn-primary btn-br-search" value="Search">Search</button>
					</div>
				</div>
			</div>
		</section>
	</div>
</form>
</div>