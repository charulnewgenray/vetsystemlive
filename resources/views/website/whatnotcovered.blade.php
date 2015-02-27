@extends('website.layouts.app')

@section('content')

    <div class="banner-slider">
        <div class="container">

            <div class="clearfix"></div>
        </div>
    </div>
    <section>
        <div class="container term-conditions">
            <p class="text40 text-blue text-bold">מה אנו לא מכסים</p>

            <div
                    style="color:#25A0D6;font-family:arial;font-size:18px;font-weight:bold;">
                שירותי מרפאט, לכלל הלקוחות ובכל התכניות, אינם כוללים כיסוי עבור השירותים הבאים:
                <BR><BR>
            </div>

            <div class="clearfix">

                <div class="col-md-8">
                    <ol>

                        <li><p>שירות רפואי בקשר להריון, לידה, הרבעה ופוריות, עיקור וסירוס.</p></li>
                        <li><p>טיפולי שיניים (למעט ניקוי אבן במסלול פרימיום פלוס)</p></li>
                        <li><p>טיפולי פיזיותרפיה והידרותרפיה.</p></li>
                        <li><p>אימונותרפיה (היפוסנסטיזציה).</p></li>
                        <li><p>תרופות בצורת סירופ, משחה או תרופות הניתנות הביתה.</p></li>
                        <li><p>טיפולי דיאליזה.</p></li>
                        <li><p>הדמיות CT ו- MRI.</p></li>
                        <li><p>טיפולים דיאטטיים, קוסמטיים, פסיכולוגיים ופסיכיאטריים, וכן אילוף.</p></li>
                        <li><p>רפואה משלימה</p></li>
                        <li><p>טיפול בהכשות נחשים.</p></li>
                        <li><p>שירותים רפואיים בחו"ל</p></li>
                        <li><p>ניתוחים שלא נכללים: מוח, עמוד שדרה , ניתוחים נוירולוגיים ,החלפת מפרק ירך, קטרקט, רצועה צולבת בשיטת TPLO  ו TTA  בלבד. ניתוח רצועה צולבת מכוסה בשיטות extracapsular / leteral febler imbrication .</p></li>
                        <li><p>חיסון לטיפול במלנומה.</p></li>
                        <li><p>אביזרים רפואיים, אוכל רפואי, לרבות וויטמינים.</p></li>
                        <li><p>שתלים, פלטות, ברגים, פלטינות ואמצעים אורטופדיים אחרים.</p></li>
                        <li><p>תרופות במסגרת טיפולים כימותרפיים (הטיפול הכימותרפי עצמו כן מכוסה)</p></li>
                        <li><p>העברות באמבולנס, הובלת גופה וקבורה.</p></li>
                        <li><p>אגרות רישוי, שבב והתקנת שבב</p></li>
                        <li><p>זריקות קונבניה לכלבים בלבד.</p></li>
                        <li><p>ביקורי בית</p></li>

                    </ol>
                </div>
                <div class="col-md-4">
                    <img src="images/dog5.jpg" class="img-responsive">
                </div>
            </div>
            <p class="view-all-service"><a href="#">לצפיה בכתב השירות המלא אנא כנס להצעת מחיר.</a></p></div>


        <div class="vetbottom-links clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a style='text-decoration:none'
                   href='{{url('What-we-cover')}}'
                        ><div class="button-style1 shadow-blue1 text-darkgreen vetbottom1">
                        מה אנו מכסים
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
    </section>

    <div id="balloon2" class="balloonstyle"
         style="color:white;background-color:#25A0D6;font-family:arial;font-size:16px;font-weight:bold;width:400px;">
        שירותי מרפאט, לכלל הלקוחות ובכל התכניות, אינם כוללים כיסוי עבור השירותים הבאים:
        <BR>
        א.	שירות רפואי בקשר להריון, לידה, הרבעה ופוריות, עיקור וסירוס.<BR>
        ב.	טיפולי שיניים (למעט ניקוי אבן במסלול פרימיום פלוס)<BR>
        ג.	טיפולי פיזיותרפיה והידרותרפיה.<BR>
        ד.	אימונותרפיה (היפוסנסטיזציה).<BR>
        ה.	תרופות בצורת סירופ, משחה או תרופות הניתנות הביתה.<BR>
        ו.	טיפולי דיאליזה.<BR>
        ז.	הדמיות CT ו- MRI.<BR>
        ח.	טיפולים דיאטטיים, קוסמטיים, פסיכולוגיים ופסיכיאטריים, וכן אילוף. <BR>
        ט.	רפואה משלימה <BR>
        י.	טיפול בהכשות נחשים.<BR>
        יא.	שירותים רפואיים בחו"ל<BR>
        יב.	ניתוחים שלא נכללים: מוח, עמוד שדרה , ניתוחים נוירולוגיים ,החלפת מפרק ירך, קטרקט, רצועה צולבת בשיטת TPLO  ו TTA  בלבד. ניתוח רצועה צולבת מכוסה בשיטות extracapsular / leteral febler imbrication . <BR>
        יג.	חיסון לטיפול במלנומה.<BR>
        יד.	אביזרים רפואיים, אוכל רפואי, לרבות וויטמינים. <BR>
        טו.	שתלים, פלטות, ברגים, פלטינות ואמצעים אורטופדיים אחרים.<BR>
        טז.	תרופות במסגרת טיפולים כימותרפיים (הטיפול הכימותרפי עצמו כן מכוסה) <BR>
        יז.	העברות באמבולנס, הובלת גופה וקבורה.<BR>
        יח.	אגרות רישוי, שבב והתקנת שבב <BR>
        יט.	זריקות קונבניה לכלבים בלבד.<BR>
        כ.	ביקורי בית<BR>

    </div>
@endsection
