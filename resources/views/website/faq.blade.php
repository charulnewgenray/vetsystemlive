@extends('website.layouts.app')

@section('content')
	<div class="banner-slider">
		<div class="container">
			<div class="clearfix"></div>
		</div>
	</div>
	<section>
		<div class="container aboutus-page">
			<p class="text40 text-blue text-bold">שאלות נפוצות</p>
			<div class="faq-table-wrapper clearfix">
				<div class="clearfix">
					<div class="col-xs-2 first no-gutters"><div class="table-heading">קטגוריה</div></div>
					<div class="col-xs-6  no-gutters"><div class="table-heading">שאלות</div></div>
					<div class="col-xs-4 last no-gutters"><div class="table-heading">תשובה</div></div>
				</div>
				<div class="faq-table clearfix">
					<div class="col-xs-2 first no-gutters">
						<div class="faq-categorys">
							<ul>
								<li id="faq-1" class="selected">אודות השירות</li>
								<li id="faq-2">הרשמה לשירות</li>
								<!--li id="faq-3">מחיר</li-->
								<li id="faq-4">תביעות</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-6 no-gutters">
						<div class="faq-questions">
							<ul class="faq-1">
								<li id="faq-1-1" class="selected">מהו שירות מרפאט?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-1-2">מה השירות של מרפאט כולל?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-1-3">מה השירות של מרפאט לא כולל?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-1-4">מה ההגדרה של מצב רפואי קיים או מחלה קיימת?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-1-5">האם מרפאט עובדים כמו קופת חולים?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-1-6">האם אני יכול להמשיך לבקר אצל הווטרינר הנוכחי שלי דרך מרפאט? </li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-1-7">מתי השירות שלי מתחיל לפעול?</li>
							</ul>
							<ul class="faq-2">
								<li id="faq-2-1" class="selected">מה הדרישות מחיית המחמד שלי כדי להיות זכאי להצטרף למרפאט?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-2">מה אוכל לעשות אם אין לי שבב?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-3">מה אוכל לעשות אם אני לא בטוח בתאריך הלידה של חיית המחמד שלי? </li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-4">האם כדי להצטרף לשירות עליי לפרט את ההיסטוריה הרפואית של חיית המחמד שלי? </li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-5">האם תפסיקו לתת שירות כאשר חיית המחמד שלי תתבגר?</li>
								<!--
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-6">האם אתם יכולים לבטל לי את השירות?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-7">האם אני יכול לבטל את השירות?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-2-8">אם אני מפסיק את הכיסוי שלי, האם אוכל לחזור לרכוש שירות עבור חיית המחמד שלי בשלב מאוחר יותר? </li>
								-->
							</ul>
							<!--<ul class="faq-3">

                                <li id="faq-3-1" class="selected">כמה עולה השירות ולפי מה נקבע המחיר?</li>
                                <li><div style="margin: 3px 0 7px;"></div></li>

                                <li id="faq-3-2">האם העלות החודשית שלי תשתנה במידה והיו לי הרבה הוצאות רפואיות?</li>
                                <li><div style="margin: 3px 0 7px;"></div></li>
                                <li id="faq-3-3">האם יש צורך בחידוש?</li>
                                <li><div style="margin: 3px 0 7px;"></div></li>
                                <li id="faq-3-4">האם אני יכול לשנות את הכיסוי של חיית המחמד שלי במהלך השנה?</li>
                                <li id="faq-3-4"><div style="margin: 3px 0 7px;">&nbsp;</div></li>
                            </ul>  -->

							<ul class="faq-4">
								<li id="faq-4-1" class="selected">האם בחיסונים יש השתתפות עצמית?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-4-2">איך מתבצע התשלום לוטרינר ואיך מחושבת ההשתתפות העצמית?</li>
								<li><div style="margin: 3px 0 7px;"></div></li>
								<li id="faq-4-3">האם יש צורך להגיש תביעה?</li>
								<li><div style="margin: 3px 0 7px;"><BR></div></li>
								<!--
                                                                <li id="faq-4-4">האם אני צריך אישור מראש ממרפאט לפני קבלת טיפול רפואי לחיית המחמד שלי?</li>
                                -->

							</ul>


						</div>
					</div>
					<div class="col-xs-4 last no-gutters">
						<div class="faq-replys">
							<!-- start replies -->
							<div class="faq-1-1 faq-reply selected"><p>שירות המעניק כיסוי רפואי מלא לחיות מחמד , החל מחיסונים וכלה בטיפול הרפואי הנדרש בעקבות פציעה,תאונה או מחלה וזאת באמצעות וטרינריים ומרכזים רפואיים שבהסדר.</p></div>
							<div class="faq-1-2 faq-reply "><p>השירות שלנו מספק את כל הצרכים הרפואיים של חיים המחמד שלך החל מחיסונים וכלה בטיפול רפואי ומלא בעקבות תאונה פציעה או מחלה.
									למידע מפורט נוסף אנא כנה לדף "<A href='{{url('What-we-cover')}}'>מה אנו מכסים</a>"</p></div>
							<div class="faq-1-3 faq-reply "><p>באופן טבעי, יש לנו כמה חריגים, למשל טיפול במצב רפואי קיים וכל טיפול הקשור להיריון ,לידה פיריון והרבעה
									. אנא כנס <a href='join.php'>לקבלת הצעת מחיר</a> לצורך צפיה בכתב השירות המלא</p></div>
							<div class="faq-1-4 faq-reply "><p>אירוע רפואי הינו כל פציעה, תאונה או מחלה, לרבות מצבים רפואיים נוספים אשר מקורם, בין היתר, באותו אירוע רפואי</p></div>
							<div class="faq-1-5 faq-reply "><p>לא. אנו לא מתערבים בהחלטות רפואיות. ההחלטות הרפואיות הן בידך ובידי הוטרינר המטפל שלך בלבד.</p></div>
							<div class="faq-1-6 faq-reply "><p>כן במידה והווטרינר שלך כלול ברשימת הווטרינרים שבהסדר (לחץ כאן). במידה והוא לא כלול -  יש לבחור את אחד מהמרפאות הווטרינריות המובחרות האחרות הנמצאות ברשימה.</p></div>
							<div class="faq-1-7 faq-reply "><p>חיסונים ניתן לבצע חיסונים יום לאחר ההרשמה. לקבלת טיפול רפואי - ישנה תקופת אכשרה של 60 יום.</p></div>


							<div class="faq-2-1 faq-reply selected"><p>כלב - לשירות יכול להצטרף כלב בעל שבב בלבד מגיל 6 שבועות עד גיל 8 גיל כניסה (מגיל 6 שבועות עד גיל 3 חודשים ניתן לקבל חיסונים ללא השבב). כלב שהגיע לגיל 8 כשהוא בשירות ימשיך לקבל שירות.
									<BR><BR>
									חתול - לשירות יכול להצטרף חתול בעל שבב בלבד מגיל 6 שבועות עד גיל 9 גיל כניסה (מגיל 6 שבועות עד גיל 3 חודשים ניתן לקבל חיסונים ללא השבב). חתול שהגיע לגיל 9 כשהוא בשירות ימשיך לקבל שירות."</p></div>
							<div class="faq-2-2 faq-reply "><p>לקוחות המעוניינים להצטרף למרפאט ובחיית המחמד שלהם אין שבב, הם יוכלו לגשת לאחד מהווטרינרים שבהסדר ולבצע התקנת שבב בהנחה משמעותית</p></div>
							<div class="faq-2-3 faq-reply "><p>מדובר בבעיה נפוצה. אם אינך יודע את הגיל אז ציון הגיל עפ"י הערכה כנה שלך הוא בסדר גמור. עם זאת, אם באמת אין לך מושג, תשאל את הווטרינר שלך שאמור להיות מסוגל להעריך גיל של חיית המחמד שלך, על בסיס בחינה של מאפיינים פיזיים מסוימים.</p></div>
							<div class="faq-2-4 faq-reply "><p>בתהליך ההצטרפות אתה תישאל מספר שאלות קצרות בנוגע למצבה ההרפואי של חיית המחמד שלך.</p></div>

							<!--
                            <div class="faq-2-5 faq-reply "><p> כל עוד חיית המחמד שלך הצטרפה לשירות לפני גיל הכניסה (כלב גיל 8, חתול גיל 9) והייתם בשירות רצוף ללא הפסקה, אנחנו לא נוציא את חיית המחמד שלך מהשירות. אחרי הכל,  אנחנו אוהבי חיות מחמד,  גם כן!</p></div>
                            <div class="faq-2-6 faq-reply "><p>ראה תנאי ביטול </p></div>
                            <div class="faq-2-7 faq-reply "><p>נשמח לקבל אתכם ואת חיית המחמד שלכם בחזרה למרפאט בכל עת. עם זאת, לאחר ביטול השירות, תצטרך להירשם מחדש באתר. חשוב לציין כי בכל מצב רפואי שהיה כשחיית המחמד שלך הייתה בשירות או שאירע בזמן שלא היית בשירות,יוגדר כמצב רפואי קיים. כמו כן תהיה תקופת אכשרה. </p></div>
                            -->

							<div class="faq-4-1 faq-reply selected"><p>חיסונים הינם ללא השתתפות עצמית</p></div>
							<div class="faq-4-2 faq-reply" ><p>התשלום לוטרינר מבוצע על ידי "מרפאט" למעט השתתפות עצמית שמשולמת על ידי הלקוח במעמד הטיפול הרפואי.  הששתפות העצמית מחושבת כאחוז מסוים ממחירי המרפאה של הוטרינר.</p></div>
							<div class="faq-4-3 faq-reply" ><p>אין צורך למלא טפסים ולהגיש תביעה. מרפאט משלמת במקומכם ישירות לוטרינר (למעט השתתפות עצמית אם נדרשת)</p></div>

							<!-- end replies -->
						</div>
					</div>
				</div>
			</div>
			<p class="text30 text-green">עוד שאלות? נשמח לענות בטלפון או באמצעות <a href="{{url('contact-us')}}"
																					class="text-blue">טופס צור קשר</a></p>
			<div>
				<img src="images/banner1.jpg" class="img-responsive">
			</div>
			<br>
		</div>
	</section>
@endsection
	@section('page-scripts')
		<script type="text/javascript">
			$(function() {
				$('.faq-categorys li').each(function(){
					$(this).on('click',function(){
						$('.faq-categorys,.faq-questions ul,faq-replys').find('.selected').removeClass('selected');
						$(this).addClass('selected');
						var catid = $(this).prop('id');
						$('.faq-questions ul,.faq-reply').hide();
						$(".faq-questions").find('.'+catid).show();
						$(".faq-replys").find('.'+catid+'-1').show().addClass('selected');
					});
				});
				$('.faq-questions li').each(function(){
					$(this).on('click',function(){
						$('.faq-questions ul li.selected').removeClass('selected');
						$(this).addClass('selected');
						$('.faq-reply').hide();
						$('.faq-replys').find('.selected').removeClass('selected');
						var faqquestionid = $(this).prop('id');
						$(".faq-replys").find('.'+faqquestionid).show().addClass('selected');
					});
				});
			});
	</script>
	@stop


