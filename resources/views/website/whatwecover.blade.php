@extends('website.layouts.app')

@section('content')
    <div class="banner-slider">
        <div class="container">
            <ul class="slider list-inline">
                <li>
                    <div id="slider-layer1" class="slider-layer">
                        <img
                                src="images/cat3.png" class="img-responsive inline-block"
                                style="margin-top: 84px;">
                    </div>
                    <div id="slider-layer2" class="slider-layer slider-content">
                        <p class="text40 text-blue text-bold">מה אנו מכסים</p>
                        <p
                                class="text16">שירות מרפאט מספק את כל הצרכים הרפואיים של חיית המחמד שלכם, החל מחיסונים וכלה בטיפול רפואי מלא בעקבות תאונה, פציעה או מחלה.
                            מרפאט משלמת ישירות לווטרינר את הוצאות הטיפול והאבחון הרפואי, כך שאתם לא צריכים לרדוף אחרינו לאחר הטיפול על מנת לקבל החזר. ניתן לבחור כל וטרינר שבהסדר, מתוך רשימת הוטרינרים שעובדים עמנו.</p>
                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <section>
        <div class="whatwecover-top">
            <div class="container">
                <div id="whatwecover-table1" class="table-responsive">
                    <table class="table">
                        <tr class="first">
                            <th class="first">הטיפול</th>
                            <th></th>
                            <th class="last">דוגמאות</th>
                        </tr>
                        <tr>
                            <td>חיסונים</td>
                            <td><img src="images/icon5.png"></td>
                            <td>כל החיסונים השנתיים המומלצים ע"י הוטרינרים:
                                חיסון כלבת, חיסון משושה/מרובע,
                                תולעת הפארק, טיפול בתילוע.
                                <a href=''>פירוט מלא של כל החיסונים הכלולים</a>.
                            </td>
                        </tr>
                        <tr>
                            <td>תאונות</td>
                            <td><img src="images/icon5.png"></td>
                            <td>דוגמאות: עצמות שבורות, הרעלה, תאונת דרכים, חתכים, בליעת חפץ זר ועוד.</td>
                        </tr>
                        <tr>
                            <td>מחלות</td>
                            <td><img src="images/icon5.png"></td>
                            <td>דוגמאות: סרטן, פריצת דיסק, החלפת מפרק אגן, סוכרת, דלקת פרקים, אלרגיות, פציעת רצועה צולבות, דלקות בדרכי שתן, אפילפסיה,Cherry eye ועוד</td>
                        </tr>
                        <tr>
                            <td>ניתוחים</td>
                            <td><img src="images/icon5.png"></td>
                            <td>דוגמאות: ניתוחים אורתופדים, הרניה על סוגיה השונים, ניתוחי עור, ניתוחי בטן, ניתוחי אוזניים, ניתוחי אוזניים ועוד</td>
                        </tr>
                        <tr>
                            <td>שירותי חירום ואשפוז</td>
                            <td><img src="images/icon5.png"></td>
                            <td>חיסון כלבת, חיסון משושה/מרובע, תולעת הפארק, טיפול בתילוע.</td>
                        </tr>
                        <tr class="last">
                            <td>תרופות</td>
                            <td><img src="images/icon5.png"></td>
                            <td>כל זריקה הניתנת במהלך טיפול במרפאה ובאשפוז.</td>
                        </tr>

                        <tr class="last">
                            <td>דיאגנוזה</td>
                            <td><img src="images/icon5.png"></td>
                            <td>דוגמאות: בדיקות מעבדה, צילומי רנטגן, אולטראסאונד, בדיקות דם ושתן,  דיגום נוזלים, לקיחת ביופסיה ועוד.</td>
                        </tr>

                        <tr class="last">
                            <td>ניקוי שיניים</td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות כולל ניקוי שיניים שנתי.</td>
                        </tr>

                    </table>
                </div>
                <div class="whatwecover-banner whatwecover-banner1">
                    <A href='{{url('request-quote')}}'><img
                                src="images/banner1.jpg" class="img-responsive"></a>
                </div>
                <h2 class="text30 text-blue text-bold">ובנוסף השירות כולל</h2>
                <div id="whatwecover-table2" class="table-responsive">
                    <table class="table">
                        <tr class="first">
                            <th class="first">הטיפול</th>
                            <th></th>
                            <th class="last">דוגמאות</th>
                        </tr>
                        <tr>
                            <td>וטרינרים מומחים</td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות כולל יעוץ, בדיקה וניתוח ע"י <a
                                        rel="balloon2"
                                        style='text-decoration:underline'>וטרינרים מומחים</a></td>
                        </tr>
                        <tr>
                            <td>מחלות כרוניות</td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות כולל טיפול במחלות כרוניות אפילו אם הן מתמשכות חודשים או שנים, עד לגובה התקרה לאירוע רפואי.</td>
                        </tr>
                        <tr>
                            <td>טיפולים</td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות כולל את כל הביקורים והטיפולים אצל הוטרינר.</td>
                        </tr>
                        <tr>
                            <td>חיות מחמד מבוגרות</td>
                            <td><img src="images/icon5.png"></td>
                            <td>אנו לא נפסיק את השירות בעקבות הגעה לגיל מבוגר (כל עוד הצטרפתם לפני גיל הכניסה)</td>
                        </tr>
                        <tr>
                            <td>
                                מחלות תורשתיות וגנטיות
                            </td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות מכסה את כל המחלות הגנטיות והתורשתיות כגון:, טיפול בפיקת הברך, Cherry Eye, תסמונת וובלר, גלאוקומה ,מחלת אפילפסיה ועוד.</td>
                        </tr>
                        <tr class="last">
                            <td>הדמיה</td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות כולל בדיקות, אולטראסאונד, רנטגן , אנדוסקופיה ועוד.</td>
                        </tr>


                        <tr class="last">
                            <td>בדיקות במעבדות חיצוניות</td>
                            <td><img src="images/icon5.png"></td>
                            <td>השירות כולל גם בדיקות הנשלחות למעבדות חיצוניות בנוסף לבדיקות שנעשות במרפאה.</td>
                        </tr>


                        <tr class="last">
                            <td>בחר כל וטרינר </td>
                            <td><img src="images/icon5.png"></td>
                            <td>הינך יכול לבחור כל וטרינר שבהסדר ברחבי הארץ (באפשרותך לעבור וטרינר בתום כל לרבעון)  - לחץ כאן לרשימת הוטרינרים בהסדר</td>
                        </tr>


                        <tr class="last">
                            <td>איזור אישי</td>
                            <td><img src="images/icon5.png"></td>
                            <td>באיזור האישי ניתן לקבל מידע על כל הטיפולים, החיסונים שחיית המחמד שלכם עברה, או צפויה לעבור כמו גם מידע על כמה חסכתם בהוצאות הרפואיות.</td>
                        </tr>

                    </table>

                    <p style='font-weight:bold;color:#25A0D6'>
                        * לכיסוי הרפואי יש מספר החרגות, לרבות מצב רפואי קיים לפני ההצטרפות לשירות וזאת על מנת
                        לשמור על רמת מחירים משתלמת. לצפיה במה אנו לא מכסים <a
                                href='{{url('what-not-covered')}}' style='font-weight:bold;color:#25A0D6;text-decoration:underline'>לחץ כאן</a>.
                    </p>
                    <p style='font-weight:bold;color:#25A0D6'>
                        * לשירות יש מספר תנאים והגבלות <a
                                href='{{url('terms-and-conditions')}}' style='font-weight:bold;color:#25A0D6;text-decoration:underline'>לחץ כאן לפירוט</a>.
                    </p>


                </div>

                <div class="whatwecover-banner whatwecover-banner2">
                    <img src="images/banner2.jpg" class="img-responsive">
                </div>

            </div>
        </div>
    </section>


    <div id="balloon2" class="balloonstyle"
         style="color:white;background-color:#25A0D6;font-family:arial;font-size:16px;font-weight:bold;width:400px;"
            >
        וטרינר מומחה שהוסמך בארץ או בחו"ל, או וטרינר שסיים את התמחותו במוסד מוכר ועומד לפני מבחני הסמכה
    </div>
@endsection

