
<?php

$kingdom = ['מיקום', 'כתובת', 'שעה'];
$beerSheva = ['באר-שבע', 'מרכז הצעירים - אלכסנדר 24', '16:00'];
$telAviv = ['תל אביב', 'מרכז הירידים - בר כוכבא 42', '16:00'];
$haifa = ['חיפה', 'מרכז הצפון - ישוע 55', '17:00'];

?>


<div class="mainContainer">

    <div class="main">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7 title">
                <h2> פרטי האירוע <i class="fas fa-info-circle"></i></h2>
                <p id="details"  class="italic">
                    <!-- onmouseover="over()" onmouseout="out()" -->
                    אנו רואים את עצמנו שותפים מלאים של לקוחותינו וחשוב לנו שהם תמיד יהיו מרוצים. בזכות רמת השירות
                    הגבוהה
                    הצבנו לעצמנו בעדיפות עליונה לספק ללקוחותינו את האירוע הטוב ביותר בכל רגע ובהתאמה אישית. אנו
                    מספקים
                    פתרון בו יהיה ראש שקט לבעל השמחה מהבחינה הכי חשובה באירוע.
                    אנו כל-כך נרגשים ומתכבדים לחלוק את אחד הרגעים החשובים ביותר בחייכם יחד איתכם.
                    אנו נוודא שתקבלו בדיוק את רמת השירות הגבוהה שאנו מציבים לעצמינו, בידיעה שבחרתם צוות שהוא לא רק
                    ברמנים, אלא אמנים עם אהבה למקצוע.
                    הבר בעל תודעת שירות גבוהה במחירים הכי טובים עם צוות מוביל מקצועי וטוב שיגרום לכם לערב בלתי נשכח.
                    אנו נשמח לצאת איתכם לכל מסע שתבחרו.
                    מקצועי להפקות, אירועים עסקיים ואירועים פרטיים.
                    החזון שלנו לתת לכם מכל הלב ולהפוך את האירוע המיוחד שלכם לבלתי נשכח מבחינתנו.
                    צוות טי.די בר שם דגש על אווירה חמה, צעירה ומרעננת עם הרבה תשומת לב לכל אירוע ואירוע.
                    עולם הבר הוא עולם שלם ומורכב ואנו יודעים להתאים אותו לכל אחד ואחת מכם בצורה שהכי תוקף אתכם, את
                    מי
                    שאתם ואת איך שאתם.
                    צוות טי.די הינו צוות מיומן ומקצועי אשר מביא איתו את הניסיון, התשוקה והאהבה לתחום לכל אירוע.
                </p>
            </div>
            <div class="col-md-3"></div>

        </div>


        <div class="row picpic">
            <div class="column">
                <img src="Pictures/picture1.jpg" alt="pic1">
            </div>
            <div class="column">
                <img src="Pictures/picture2.jpg" alt="pic2">
            </div>
            <div class="column">
                <img src="Pictures/picture3.jpg" alt="pic3">
            </div>
            <div class="column">
                <img src="Pictures/picture4.jpg" alt="pic4">
            </div>
        </div>

        <br><br><br>


        <div class="row">
            <div class="col-md-5 form1">

                <h2> מיקום האירוע <i class="fas fa-map-marker-alt"></i></h2>
                <br>

                <div id="location">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="300" height="300" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=tel%20aviv%20mu&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            Werbung: <a href="https://www.jetzt-drucken-lassen.de">jetzt-drucken-lassen.de</a>
                        </div>
                        <style>.mapouter {
                                position: relative;
                                text-align: right;
                                height: 300px;
                                width: 300px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 300px;
                            }</style>
                    </div>
                </div>

            </div>
            <div class="col-md-7 sqe">
                <h2>סדר היום <i class="fas fa-clock"></i></h2>
                <br>

                <ul>
                    <?php
                    $items = [['time' => '17:00', 'title' => ' קבלת פנים - הדרכת מנהל האירוע שי גבסו - אולם כניסה ראשי '],
                        ['time' => '17:30', 'title' => ' הדרכת אלכוהול ויין בהדרכת דוד מדויד '],
                        ['time' => '19:00', 'title' => ' הדרכת שירות בהדרכת יהורם שירותי '],
                        ['time' => '20:30', 'title' => ' הדרכת קוקטיילים בהדרכת רותי קוקטייל '],
                        ['time' => '22:00', 'title' => ' סיכום וחלוקת תעודות בהדרכת שי גבסו - אולם כניסה ראשי ']];

                    foreach ($items as $item) {
                        ?>
                        <li><b><?php echo $item['time']; ?></b><b><?php echo $item['title']; ?></b>
                        </li>
                        <?php
                    }
                    ?>
                </ul>

            </div>
        </div>
    </div>

    <br><br>


    <h2>דרכי הגעה <i class="fas fa-bus-alt"></i></h2>

    <table>
        <tr>

            <?php
            foreach ($kingdom as $value) {
                echo "<th>$value</th> ";
            }
            ?>


        </tr>
        <tr>
            <?php
            foreach ($beerSheva as $value) {
                echo "<td>$value</td> ";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($haifa as $value) {
                echo "<td>$value</td> ";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($telAviv as $value) {
                echo "<td>$value</td> ";
            }
            ?>
        </tr>

    </table>


    <br><br><br>


    <div class="row">
        <div class="form-group col-md-6">
            <p id="textWeb">
            <h2> חפשו אותנו ברשתות <i class="fab fa-instagram"></i></h2></p>
        </div>
        <div class="form-group col-md-6">
            <p id="textPhoto">
            <h2> קצת מאירועים קודמים <i class="far fa-images"></i></h2></p>
        </div>
    </div>


    <div class="row">
        <div class="form-group col-md-6">
            <div class="refference">
                <a href="https://www.facebook.com">
                    <img src="https://upload.wikimedia.org/wikipedia/en/8/8c/Facebook_Home_logo_old.svg"
                         alt="HTML tutorial">
                </a>
                <a href="https://www.twitter.com">
                    <img src="https://upload.wikimedia.org/wikipedia/he/thumb/a/a3/Twitter_bird_logo.svg/1259px-Twitter_bird_logo.svg.png"
                         alt="HTML tutorial">
                </a>
                <a href="https://www.instegram.com">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1024px-Instagram_logo_2016.svg.png"
                         alt="HTML tutorial">
                </a>
                <a href="https://accounts.google.com">
                    <img src="http://www.cjpwisdomandlife.com/wp-content/uploads/2013/03/G+Icon-296x300.jpg"
                         alt="HTML tutorial">
                </a>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="Pictures/picture1.jpg" id="currentImage" height="288"/>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-2">

        </div>
        <div class="form-group col-md-6"></div>
        <div class="form-group col-md-4">
            <button id="next" onclick="nextPhoto()" class="btn btn-outline-primary">הבא</button>
            <button onclick="prevPhoto()" id="prev" class="btn btn-outline-primary">הקודם</button>
        </div>
    </div>


</div>
<br>


</div>
