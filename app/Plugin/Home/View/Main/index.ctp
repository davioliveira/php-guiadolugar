<?php echo $this->Html->script('jquery.jaccordion'); ?>
<?php echo $this->Html->css('jaccordion'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('.accordion').jAccordion({
			activeSlideSize: 650,
			spacing: 3,
			sticky: true,
			autoplay: true,
			autoplayInterval: 3000,
			arrowKeysNav: true,
			nextBtn: $('.nextBtn'),
			prevBtn: $('.prevBtn'),
			ready: function () {
				$('.preloader', this.$accordion).remove();	//Comment this line to see the preloader if testing locally.
				$('.jAccordion-slideWrapper', this.$accordion).append('<div class="timer"></div>');	//Include timer inside every slide
				$('.prevBtn', this.$accordion).animate({left: 0}, 500);
				$('.nextBtn', this.$accordion).animate({right: 0}, 500);
			},
			onSlideStartClosing: function (e) {
				$('.timer', e.$slide).stop(true).fadeTo(200, 0);	//Fade out timer of closing slide
			},
			onSlideOpened: function (e) {
				$('.timer', e.$slide).css({width: 0, 'opacity': 0.5}).stop(true);		//Set timer to starting state
				/* If option 'pauseOnHover' is enabled and cursor is not over accordion start timer of active slide
				 * or option 'pauseOnHover' is disabled.
				 * Note: Value 5000 has to be same as value of option 'autoplayInterval' which is set a few lines above.
				 */
				if (!this.isPaused()) {
					$('.timer', e.$slide).animate({width: '100%'}, 3000, 'linear');
				}
			},
			onPause: function () {
				$('.timer', this.getActiveSlide()).stop(true);	//Pause animation of timer
			},
			onResume: function (e) {
				/* Resume animation of timer.
				 * Note: It's necessary to resume the animation only if no slide is animated, imagine this situation:
				 * User moves his cursor over non-open slide - cursor is over accordion so autoplay pauses and then user
				 * moves his cursor off accordion before the opening slide is fully open so autoplay starts and onResume()
				 * callback is executed and animation of timer starts, which is too early because opening slide is not fully open.
				 */
				if (!this.isAnimated()) {
					$('.timer', this.getActiveSlide()).stop(true).animate({'width': '100%'}, e.remainingTime, 'linear');
				}
			}
		});

	});

</script>
<div class="accordion noJS" style="margin: 0 auto">
	<div class="preloader"></div>
	<div class="jAccordion-slidesWrapper">
		<div class="prevBtn"></div>
		<div class="nextBtn"></div>
		<div class="jAccordion-slide">
			<h1 class="caption" data-initevent="onSlideOpened" data-movedirection="top" data-offset="-10%" data-fade="true" style="top:10%;left:10%;">Mussum ipsum cacilds</h1>
<span class="description" data-initevent="onSlideOpened" data-movedirection="left" data-offset="10%" data-fade="true">
<h1>Cacildis</h1>
<p>Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
</span>

			<img src="http://placekitten.com/650/380" width="750" height="400" alt="slide1" class="jAccordion-img"/>
		</div>
		<div class="jAccordion-slide">
			<h1 class="caption" data-initevent="onSlideOpened" data-movedirection="top" data-offset="-10%" data-fade="true" style="top:10%;left:10%;">Mussum ipsum cacilds</h1>
<span class="description" data-initevent="onSlideOpened" data-movedirection="left" data-offset="10%" data-fade="true">
<h1>Cacildis</h1>
<p>Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
</span>
			<img src="http://placekitten.com/650/380" width="750" height="400" alt="slide2" class="jAccordion-img"/>
		</div>
		<div class="jAccordion-slide">
			<h1 class="caption" data-initevent="onSlideOpened" data-movedirection="top" data-offset="-10%" data-fade="true" style="top:10%;left:10%;">Mussum ipsum cacilds</h1>
<span class="description" data-initevent="onSlideOpened" data-movedirection="left" data-offset="10%" data-fade="true">
<h1>Cacildis</h1>
<p>Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
</span>
			<img src="http://placekitten.com/650/380" width="750" height="400" alt="slide3" class="jAccordion-img"/>
		</div>
		<div class="jAccordion-slide">
			<h1 class="caption" data-initevent="onSlideOpened" data-movedirection="top" data-offset="-10%" data-fade="true" style="top:10%;left:10%;">Mussum ipsum cacilds</h1>
<span class="description" data-initevent="onSlideOpened" data-movedirection="left" data-offset="10%" data-fade="true">
<h1>Cacildis</h1>
<p>Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
</span>
			<img src="http://placekitten.com/650/380" width="750" height="400" alt="slide4" class="jAccordion-img"/>
		</div>
		<div class="jAccordion-slide"><h1 class="caption" data-initevent="onSlideOpened" data-movedirection="top" data-offset="-10%" data-fade="true" style="top:10%;left:10%;">Mussum ipsum cacilds</h1>
<span class="description" data-initevent="onSlideOpened" data-movedirection="left" data-offset="10%" data-fade="true">
<h1>Cacildis</h1>
<p>Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
</span>
			<img src="http://placekitten.com/650/380" width="750" height="400" alt="slide5" class="jAccordion-img"/>
		</div>
	</div>
</div>
