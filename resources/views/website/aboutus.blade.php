@extends('website.layouts.app')

@section('content')
	<div class="banner-slider">
		<div class="container">
			<ul class="slider list-inline" >
				<li>
					<div id="slider-layer1" class="slider-layer">
						<img src="images/womendog.png"
							 style="margin-top: 30px;"
							 class="img-responsive inline-block">
					</div>
					<div id="slider-layer2" class="slider-layer slider-content">
						<p class="text40 text-blue text-bold">על השירות</p>
						<p class="text16">
							מי לא היה בסיטואציה הבאה – חיית המחמד לא מרגישה טוב. מהצד האחד אתם מרחמים עליה ורוצים שיהיה לה רק טוב. מהצד השני, הביקור האחרון אצל הווטרינר עלה הרבה מאוד כסף, וקשה לכם לחשוב על הוצאה נוספת כעת של מאות או אלפי שקלים. למעשה, לעולם אין זמן נוח להוצאות בלתי צפויות כאלו.
						</p><p class="text16">
							בדיוק לשם כך אנחנו פה! <B>מרפאט</b> שמה סוף להפתעות, דואגת כי חיית המחמד שלכם תהיה מוגנת ומעניקה לכם ראש שקט וביטחון.
						</p>
					</div>
				</li>
			</ul>
			<div class="clearfix"></div>
			<a  class="text16" style='text-decoration:underline'
				href='{{url('what-we-cover')}}'>לחץ לצפיה במה אנו מכסים</a>
		</div>
	</div>
	<section>
		<div class="container">
			<h2><span class="text40 text-bold text-blue">איך זה עובד?</span>&nbsp;&nbsp;<span
						class="text40 text-green">קל, נוח, משתלם</span></h2>

			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="hp-benifits thumbnail">
					<img src="images/icon4.png" alt="..." class="">
					<h3 class="text18 text-blue text-bold">הזדהות </h3>
					<p class="text-bold">כשחיית המחמד שלכם חולה או פצועה, תיגשו לאחד ממרפאות ההסדר לפי בחירתכם</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="hp-benifits thumbnail">
					<img src="images/icon3.png" alt="..." class="">
					<h3 class="text18 text-blue text-bold">קבלת טיפול </h3>
					<p class="text-bold">קבלו באופן מיידי את הטיפול הרפואי המלא לו זקוקה חיית המחמד</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="hp-benifits thumbnail">
					<img src="images/icon2.png" alt="..." class="">
					<h3 class="text18 text-blue text-bold">תשלום מינימלי</h3>
					<p class="text-bold">במקרים מסויימים יהיה עליכם לשלם השתתפות עצמית מינימאלית</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="hp-benifits thumbnail">
					<img src="images/icon1.png" alt="..." class="">
					<h3 class="text18 text-blue text-bold">סיימתם</h3>
					<p class="text-bold">זה הכל. אנחנו נעבוד מול הווטרינר המטפל ונסדר מולו את שאר התשלום</p>
				</div>
			</div>
		</div>
		<!-- Medical expenses table -->
		<div class="container medical-expense">
			<div class="col-md-12 heading">
				<div class="col-md-9">
					<p class="text30 text-blue text-bold"
							>דוגמאות להוצאות רפואיות וחיסכון ללקוחות במרפאט</p>
				</div>
				<div class="col-md-3">
					<img src="images/cat2.jpg" class="img-responsive" style="margin-bottom:10px;">
				</div>

			</div>
			<div class="clearfix">
				<table class="table medicalexpense-table bordered">
					<tr>
						<th class="first">הטיפול</th>
						<th>מה נעשה</th>
						<th>עלות אצל</th>
						<th>עלות ללקוח</th>
						<th class="last"><div class="hovered-col-th"><div><span>חיסכון</span></div></div></th>
					</tr>
					<tr>
						<td>חיסונים</td>
						<td>כל החיסונים השנתיים המומלצים: כלבת, משושה, תולעת הפארק, תילוע מעיים</td>
						<td>700  ₪<BR><a href=''
										 rel="balloon2"
										 style='font-size:14px;text-decoration:underline'>איך הגענו למחיר</a></td>
						<td>0 ₪</td>
						<td class="last"><div class="hovered-col-td"><div><span>700 ₪</span></div></div></td>
					</tr>
					<tr>
						<td>הוצאת גוף זר</td>
						<td>בדיקת רופא, בדיקת אולטראסאונד, בדיקות דם לפני הרדמה, ניתוח להוצאת הגוף, זריקות אנטיביוטיקה, משככי כאבים, אשפוז ליממה</td>
						<td>3,800 ₪</td>
						<td>380 ₪</td>
						<td class="last"><div class="hovered-col-td odd"><div><span>3,420 ₪</span></div></div></td>
					</tr>
					<tr>
						<td>סרטן לימפומה</td>
						<td>אבחון, דיגום ובדיקות דם, בדיקת אולטראסאונד, טיפולים כימותרפיים, זריקת אנטיהיסטמינים</td>
						<td>4,100 ₪</td>
						<td>410 ₪</td>
						<td class="last"><div class="hovered-col-td"><div><span>3,690 ₪</span></div></div></td>
					</tr>
					<tr>
						<td>הרניה פרינאלית</td>
						<td>אבחון, צילומי רנטגן, בדיקות דם לפני הרדמה, ניתוח ע"י ווטרינר כירורג מומחה, זריקות אנטיביוטיקה, משככי כאבים</td>
						<td>5,600 ₪</td>
						<td>1,360 ₪</td>
						<td class="last"><div class="hovered-col-td odd"><div><span>4,240 ₪</span></div></div></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="home-bottom withus clearfix">
			<div class="container">
				<br>
				<p class="text40 text-blue">זה פשוט, קל ומשתלם!</p>
				<ul class="text16">
					<li><p>עם מרפאט, אתם מקבלים בחינם את כל הטיפולים המונעים, וכך חיית המחמד שלכם תהיה בריאה יותר לכל אורך השנה.</p></li>
					<li><p>נגרמו ההפתעות! אין יותר חשש להוצאות רפואיות מיותרות ומוגזמות.</p></li>
					<li><p>אתם רשאים לבחור בכל מרפאה מתוך המרפאות שבהסדר, ואם תרצו, תוכלו להחליף וטרינר בתום כל רבעון קלנדרי.
							<!--
                             <span class="text-blue">רשימת הווטרינרים שבהסדר</span>
                            temp
                            --></p></li>
				</ul>

			</div>
		</div>
	</section>

	<div id="balloon2" class="balloonstyle" style="font-family:arial;width: 400px;">

		<Table style='font-size:14px;width:100%' border=0>
			<TR style='background-color:#25A0D6;color:white;font-weight:bold'>
				<TD>הטיפול</td>
				<TD style='width:50%'>מחיר אצל וטרינר</td>
				<TD>עלות ללקוח מרפאט</td>
			</tr>
			<TR>
				<TD>כלבת</td>
				<TD>90</td>
				<TD>0</td>
			</tr>
			<TR>
				<TD>תולעת הפארק <BR>4 פעמים בשנה</td>
				<TD>190</td>
				<TD>0</td>
			</tr>

			<TR>
				<TD>תולעת הפארק <BR>4 פעמים בשנה</td>
				<TD>
					תלוי במשקל החיה:<BR>
					80-120 ₪ לכל פעם * 4 בשנה =<BR> סה"כ 320 ל 480 ₪
				</td>
				<TD>0</td>
			</tr>
			<TR>
				<TD>תילוע (תולעת המעיים) פעמיים בשנה</td>
				<TD>
					תלוי במשקל החיה:<BR>
					בין 20-30 לכל פעם * 2 בשנה = <BR>סה"כ 40 ל 60 ₪</td>

				<TD>0</td>
			</tr>
			<TR>
				<TD></td><TD></td><TD>&nbsp;</td></tr>
			<TR>
				<TD></td>
				<TD><B>סה"כ:  בין 640-710  ₪ כל שנה</b></td>
				<TD>0</td>
			</tr>
		</table>

	</div>
@endsection
