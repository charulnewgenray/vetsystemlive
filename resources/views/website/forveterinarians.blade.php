@extends('website.layouts.app')

@section('content')
    <div class="banner-slider">
        <div class="container">
            <ul class="slider list-inline vet-slider">
                <li>
                    <div id="slider-layer1" class="slider-layer">
                        <img src="images/vet1.png" class="img-responsive inline-block" style="margin-top: 114px;">
                    </div>
                    <div id="slider-layer2" class="slider-layer slider-content">
                        <br>

                        <p class="text40 text-blue text-bold" style="line-height:60px">כיצד מרפאט מסייעת לווטרינרים?</p>
                        <p class="text18 text-bold text-darkblue"
                           style=" max-width: 400px; ">בתור וטרינרים, אתם כמובן מחוייבים להעניק לחיות המחמד, את הטיפול הטוב ביותר שניתן להעניק. הבעיה היא שלקוחות רבים לא מסוגלים לעמוד בהוצאות הטיפול בחיית המחמד שלהם, ואז נוצר מצב בעייתי ולא נעים עבור שני הצדדים. </p>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="vet-contenttop">
                <div class="clearfix"><p class="col-lg-7 col-md-7 no-gutters"><b>מרפאט</b> מעוניינת לענות בדיוק על הצורך הזה. השירות הוקם על מנת לעזור ללקוחות לעמוד בנטל ההוצאות הרפואיות הקשורות באחזקת חיית מחמד. עם מרפאט, לא תשמעו יותר ויכוחים מביכים ולא נעימים כגון "אולי יש טיפול יותר זול?", "אפשר לעשות הנחה?", וכדומה. הלקוחות שאנחנו נשלח אליכם באופן קבוע יתנהגו אחרת לגמרי, ויבקשו את הטיפול הטוב ביותר עבור החייה שלהם. </p></div>

                <p>
                    העניין עובד באופן פשוט ביותר – הלקוחות משלמים לנו תשלום חודשי
                    קבוע ונמוך, ובתמורה אנחנו מעניקים להם את האפשרות והיכולת לטפל בחיית
                    המחמד שלהם, אצל וטרינרים העובדים איתנו, ללא כל עלות. אנחנו נשלם לכם, הוטרינרים, ישירות בתום הטיפול, ולעיתים הלקוח יידרש להשתתפות עצמית סמלית. התוצאה היא שאתם, הוטרינרים, מפסיקים להתעסק עם עניינים פיננסים מול הלקוחות, כך שאת מירב זמנכם ומאמציכם תוכלו להקדיש לטיפול בחיות.</p>

                <p><b>מרפאט</b> הינו שירות חדש ופורץ דרך בארץ, אולם שירות דומה כבר קיים במקומות אחרים בעולם. מחקרים אשר בדקו את אופן התנהלות השירות הדומה, מצאו כי לקוחות המנויים על השירות ביקרו במרפאה עם חיית המחמד שלהם כ-40% יותר מאשר לקוחות שלא מנויים על השירות, וההוצאות הרפואיות שלהם היו כפולות. </p>
                <p>אנחנו נעזור לעסק שלכם, משום שאנחנו נביא לקוחות חדשים למרפאה שלכם, ונעלה את תנועת הלקוחות במרפאה על כל המשתמע מכך. כל מה שנותר לכם לעשות הוא לטפח את הקשר מול הלקוחות שנביא לכם, ולהגדיל את הנאמנות שלהם כלפי המרפאה.</p>
                <p>אנחנו נגדיל את החשיפה למרפאה שלכם, בין היתר באמצעות קישור באתר שלנו,. </p>
                <p>אז אם השירות שלנו מסקרן אתכם, ואתם מעוניינים לשמוע פרטים נוספים ולקבל מענה לשאלות שהתעוררו אצלכם, אנא התקשרו אלינו או שלחו לנו אימייל, ואנחנו נשמח להשיב לכם במהירות, ביעילות ובאדיבות. </p>
                <p>תודה על הקריאה,</p>
                <B><p>צוות מרפאט.</p></b></div>

            <img src="images/banner3.png" class="img-responsive">
            <div class="text-center"><img src="images/dog8.jpg"
                                          class="img-responsive img-center"></div>
            <div class="vetbottom-links clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a style='text-decoration:none'
                       href='{{url('about-us')}}'
                            ><div class="button-style1 shadow-blue1 text-darkgreen vetbottom1">
                            עוד על השירות
                        </div></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a style='text-decoration:none'
                       href='{{url('faq')}}'
                            ><div
                                class="button-style1 shadow-blue1 text-blue vetbottom2"
                                >שאלות נפוצות</div></a>
                </div>
            </div>
        </div>
    </section>

@endsection
