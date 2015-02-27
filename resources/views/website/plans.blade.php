@extends('website.layouts.app')

@section('content')

    <div class="banner-slider">
        <div class="container">
            <ul class="slider list-inline">
                <li>
                    <div id="slider-layer1" class="slider-layer">
                        <img src="images/cat4.png" class="img-responsive inline-block" style="margin-top: 79px;">
                    </div>
                    <div id="slider-layer2" class="slider-layer slider-content">
                        <p class="text40 text-blue text-bold">תכניות כיסוי</p>
                        <p class="text16">
                            השירות שלנו נועד להעניק לכם שקט נפשי, עם מרפאט אתם יכולים להיות רגועים. חיית המחמד האהובה שלכם תקבל את הטיפול הרפואי הטוב ביותר בכל פעם שהיא תזדקק לו. כל מה שנותר לכם לעשות הוא להתמקד בטיפול בה, בהחלמה שלה, ולהנות מהחיסכון הכלכלי העצום שהשגתם.
                        </p> <p class="text16">
                            לאחר מחקרי שוק רבים, הצלחנו ליצור מספר תוכניות שונות אשר מבקשות לענות על צרכים של לקוחות שונים, בעלי חיות שונות ומטרות שונות. חשוב מאוד להבין כי לא משנה באיזו תוכנית תבחרו, מרפאט תמיד תשלם ישירות לוטרינר את כל ההוצאות הכרוכות בטיפול הרפואי בחיית המחמד שלכם.
                        </p>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <section>
        <div class="plans-top">
            <div class="container">
                <div class="plans-table-wrapper">
                    <div class="plans-table plans-table1">
                        <ul class="list-inline table1">
                            <li class="first">
                                <div class="table-heading"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row">	</div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                            </li>
                            <li class="second">
                                <div class="table-heading"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                            </li>
                            <li class="third">
                                <div class="table-heading"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                                <div class="table-row"></div>
                            </li>
                            <li class="last" style='font-weight:bold;font-size:16px'>
                                <div class="table-heading"></div>
                                <div class="table-row"><BR>מחלות</div>
                                <div class="table-row"><BR>תאונות</div>
                                <div class="table-row"><BR>שירותי חירום ואשפוז</div>
                                <div class="table-row"><BR>ניתוחים</div>
                                <div class="table-row"><BR>תקרות</div>
                                <div class="table-row"><BR>חיסונים</div>
                                <div class="table-row"><BR>ניקוי שיניים</div>
                            </li>
                        </ul>
                        <div class="clearfix">
                            <div class="col-xs-10">
                                <p class="subscribe"><a class="btn btn-lg" href="{{url('join')}}"
                                                        role="button">כמה זה עולה?</a></p>
                            </div>
                            <!--div class="col-xs-2">
                                <p class="track"><img src="images/icon6.png">מסלול פופולרי</p>
                            </div-->
                        </div>
                    </div>

                    <div class="plans-table plans-table2">
                        <ul class="list-inline table2">
                            <li class="first">
                                <div class="table-heading">פרימיום פלוס</div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row">תקרת אירוע רפואי 5,000 ש"ח<BR> תקרה שנתית 10,000 ש"ח</div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                            </li>
                            <li class="second">
                                <div class="table-heading">פרימיום</div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row">תקרת אירוע רפואי 5,000 ש"ח<BR> תקרה שנתית 10,000 ש"ח</div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                            </li>
                            <li class="last">
                                <div class="table-heading">בייסיק</div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row">תקרת אירוע רפואי 5,000 ש"ח תקרה שנתית 10,000 ש"ח</div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                                <div class="table-row"><img src="images/icon5.png" class="img-responsive"/></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="plan-bottom">
            <div class="container">
                <p class="info1" style='font-size:16px'>

                    <B>השתתפות עצמית:</b>
                    <BR>
                    <BR>•	10% השתתפות עצמית עבור כל הטיפולים הרפואיים שנעשים ע"י הוטרינר או המרכז הרפואי שבהסדר. ההשתתפות תחושב ממחיר המחירון של הוטרינר או ממחיר המרכז הרפואי בהתאם, כפי שנמסר למרפאט.
                    <BR>•	35% השתתפות עצמית עבור כל יעוץ / בדיקה / ניתוח ע"י ספק שירות מיוחד. ההשתתפות מחושבת על פי מחירון מרפאט או עפ"י מחירון המרכז הרפואי בהתאם.
                    <BR>•	20% השתתפות עצמית עבור כל בדיקה במעבדה חיצונית . ההשתתפות תחושב ממחיר המחירון של הוטרינר או ממחיר המרכז הרפואי בהתאם.

                    <BR><BR>

                    <B>בתוכניות <span class="text-purple">פרימיום</span> <span
                                class="text-orange">ופרימיום</span> פלוס החיסונים ניתנים ללא השתתפות עצמית כלל מצד
                        הלקוח.</b>
                    <BR><BR>
                    אתם מוזמנים להתייעץ איתנו לגבי התוכנית אשר עשויה להתאים לכם ביותר.
                    אז תתחילו לחסוך לעצמכם כאבי ראש כבר מעכשיו! אל תחכו לפעם הבאה בה חיית המחמד שלכם תזדקק לטיפול רפואי יקר. מי שדוחה – מפסיד. הצטרפו אלינו עוד היום!
                </p>
                <BR>
            </div>


            <div class="vetbottom-links clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a style='text-decoration:none'
                       href='{{url('what-we-cover')}}'
                            ><div class="button-style1 shadow-blue1 text-darkgreen vetbottom1">
                            לצפיה במה אנו מכסים
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
