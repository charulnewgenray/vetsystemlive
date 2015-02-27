@extends('website.layouts.app')

@section('content')
	<div class="homepage-slider">
		<div class="container">
			<ul class="slider list-inline">
				<li>
					<div id="slider-layer1" class="slider-layer slider-content">
						<p class="text60 text-bold"><span
									class="text-darkblue">עם שירות</span> <span
									class="text-green">מרפאט</span></p>
						<p class="text30 text-darkblue">אתם יכולים לתת את הטיפול הרפואי</p>
						<p class="text60 text-darkblue">הטוב ביותר!</p>
					</div>
					<div id="slider-layer2" class="slider-layer" >
						<img src="images/cat1.png" class="img-responsive inline-block">
					</div>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	<section>
		<!-- Get Offer Price -->
		<div class="home-top getofferprice clearfix" style='font-size:18px'>
			<div class="container">
				<div class="col-lg-6 col-md-6">
					<a href='{{url('request-quote')}}'><img
								src="images/button-cat1.png" class="img-responsive inline-block"></a>
				</div>
				<div class="col-lg-6 col-md-6">
					<ul class="text-blue">
						<li><p>תשכחו מהוצאות רפואיות בלתי צפויות על חיית המחמד.</p></li>
						<li><p>מרפאט משלמת ישירות לווטרינר עבור כל ההוצאות– אתם לא צריכים להגיש תביעה או למלא טפסים.</p></li>
						<li><p>הכלב/חתול יקבלו את הטיפול הרפואי המתקדם והמקיף שעולם הווטרינריה יכול להציע מבלי שתדאגו למעמסה הכלכלית הכרוכה בכך.</p></li>
						<li><p>ווטרינרים בפריסה ארצית, ניתן לבחור כל ווטרינר בהסדר.</p></li>
						<li><p>השירות קיים במספר תכניות בהתאם לצורככם.</p></li>
					</ul>

				</div>
			</div>
		</div>

		<BR>

		<!-- Benifits -->
		<div class="container home-middle">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="hp-benifits thumbnail">
					<img src="images/icon10.png"  class="">
					<h3 class="text18 text-darkblue text-bold">מה השירות כולל</h3>
					<p class='text-bold' style='font-size:15px'>
						השירות שלנו מספק את כל הצרכים הרפואיים
						של חיים המחמד שלך החל מחיסונים
						וכלה בטיפול רפואי ומלא בעקבות תאונה פציעה
						או מחלה.
					</p>

					<p class="hp-benifits-btn"><span><A  style='text-decoration:none' class="button-style2"
														 href='{{url('What-we-cover')}}'>מה אנו מכסים?</a></span>
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="hp-benifits thumbnail">
					<img src="images/icon9.png"  class="">
					<h3 class="text18 text-darkblue text-bold">השירות לכלב</h3>
					<p class="text-bold" style='font-size:15px'>
						הכלבים ממלאים את חיינו באושר. <BR>
						כאשר מתרחשות פציעות או מחלות,<BR>
						שירות מרפאט משלם את ההוצאות <BR>הרפואיות במקומכם
					</p>

					<p class="hp-benifits-btn"><span><A  style='text-decoration:none' class="button-style2"
														 href='{{url('Service-for-the-dog')}}'>כנסו לראות</a></span>
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="hp-benifits thumbnail">
					<img src="images/icon8.png" alt="..." class="">
					<h3 class="text18 text-darkblue text-bold">השירות לחתול</h3>
					<p class="text-bold" style='font-size:15px'>
						חתולים אולי נמצאים יותר בבית,<BR>
						אך בכל זאת הם אינם  תמיד נוחתים
						על הרגליים. כאשר מתרחשות פציעות
						או מחלות, שירות מרפאט משלם את ההוצאות
						הרפואיות במקומכם</p>
					<p class="hp-benifits-btn">
                        	<span ><A  style='text-decoration:none' class="button-style2"
									   href='{{url('Service-for-the-cat')}}'>כנסו לראות</a></span>
					</p>
				</div>
			</div>
		</div>
		<!-- home bottom -->
		<div class="homebottom">
			<div class="homebottom-links">
				<div class="container">
					<div class="col-lg-4 col-md-4">
						<a href='{{url('faq')}}' style='text-decoration:none'><div class="button-style1 shadow-blue1 text-blue">
								<span>שאלות נפוצות</span>
							</div></a>
					</div>
					<div class="col-lg-4 col-md-4">
						<a href='{{url('request-quote')}}' style='text-decoration:none'><div class="button-style1 shadow-blue1 text-wine">
								<span>קבל הצעת מחיר</span>
							</div></a>
					</div>
					<div class="col-lg-4 col-md-4">
						<a href='{{url('for-Veterinarians')}}' style='text-decoration:none'><div class="button-style1 shadow-blue1 text-darkgreen">
								<span>מידע עבור וטרינרים</span>
							</div></a>
					</div>
				</div>
			</div>
		</div>

	</section>
@endsection
