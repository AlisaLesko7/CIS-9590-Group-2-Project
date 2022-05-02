

<div data-page="movies" class="page">
	<!-- Begin: Navbar -->
	<div class="navbar layout-dark">
		<div class="navbar-inner">
			<div class="center">
				<h4><i>CIS-9590 Movie Stream Recommender&nbsp;</i></h4>
			</div>
			<div class="right" id="clear">
				<a href="#" class="button button-big button-fill tooltipstered color-red">
					<i class="icon material-icons color-indigo">backspace</i>
				</a>
			</div>
		</div>
	</div>
	<br>
	
<!-- Floating Action Button -->
<a href="#" class="floating-button floating-button-to-popover open-popover bg-red">
	<i class="icon material-icons">unfold_more</i>
</a>
	
<div class="popover">
	<div class="popover-inner">
		<div class="list-block">
			<ul>
				<li>
					<div class="item-content item-inner bg-amber">
						<i class="icon material-icons color-indigo">view_carousel</i>
						<div class="fdtab color-indigo">Selected API : <span id="variant-name">-</span></div>
					</div>
				</li>
				<li>
					<a href="#" class="item-content item-link max-hh close-popover">
						<div class="item-inner">
							<i class="icon material-icons color-deeporange bg-cyan">vertical_align_top</i>
							<div class="item-title">RapidAPI service</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="item-content item-link min-hh close-popover">
						<div class="item-inner">
							<i class="icon material-icons color-cyan bg-deeporange">vertical_align_bottom</i>
							<div class="item-title">Local datasets</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>




	<div class="page-content bg-indigo">
		<div class="list-block no-hairlines no-hairlines-between" style="margin:5px 0;">
			<ul>
				<li>
					<div class="item-content tickett darktext dcount bg-amber">
						<div class="item-media">
							<i class="material-icons color-blue">grain</i>
						</div>
						<div class="item-inner">
							<div class="item-title floating-label">Movie Name</div>
							<div class="item-input item-input-field">
								<input type="text" maxlength="10000" id="vertex">
							</div>
						</div>
						<button class="button button-big button-round button-fill button-raised color-green" id="asaprecommend">GO </button>&nbsp;
						<!--div>n = <span id="d-value">Number of vertices</span></div-->
					</div>
				</li>
			</ul>
		</div>
		<br>
			
		<div id="waitnotice">
			<div class="bg-black"><p align="center"><span class="color-green tickett">Querying, please wait...</span></p></div>
		</div>	
		<div id="sigma-container" class="bg-black">
		<div class="content-block-title">Recommendations for you if you liked <span id="moviename"></span></div>
			<div class="list-block">
				<ul>
					<li>
						<label class="label-radio item-content">
							<input type="radio" name="radio" value="books">
							<span class="item-media">
								<i class="icon icon-form-radio"></i>
							</span>
							<span class="item-inner">
								<span class="item-title title1">Books</span>
							</span>
						</label>
					</li>
					<li>
						<label class="label-radio item-content">
							<input type="radio" name="radio" value="food">
							<span class="item-media">
								<i class="icon icon-form-radio"></i>
							</span>
							<span class="item-inner">
								<span class="item-title title2">Food</span>
							</span>
						</label>
					</li>
					<li>
						<label class="label-radio item-content">
							<input type="radio" name="radio" value="games">
							<span class="item-media">
								<i class="icon icon-form-radio"></i>
							</span>
							<span class="item-inner">
								<span class="item-title title3">Games</span>
							</span>
						</label>
					</li>
					<li>
						<label class="label-radio item-content">
							<input type="radio" name="radio" value="movies">
							<span class="item-media">
								<i class="icon icon-form-radio"></i>
							</span>
							<span class="item-inner">
								<span class="item-title title4">Movies</span>
							</span>
						</label>
					</li>
					<li>
						<label class="label-radio item-content">
							<input type="radio" name="radio" value="tv">
							<span class="item-media">
								<i class="icon icon-form-radio"></i>
							</span>
							<span class="item-inner">
								<span class="item-title title5">TV</span>
							</span>
						</label>
					</li>
				</ul>
			</div>

		</div>

	</div>
</div>
	<!-- End: Page Content -->