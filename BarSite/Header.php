<div class="mainTitle">

    <h1 id="nameTitle"><i id="myIcon" class="fas fa-wine-glass-alt"></i> Bartender's instruction<i id="myIcon2"
                                                                                                   class="fas fa-wine-glass-alt"></i>
    </h1>
    <div id="divTitle"><h1>Date: 20/5/2020. Sponsored by: T.D Bar</h1></div>

</div>



<div class="TimeAndDate">



    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">

            <p id="clock">
                <?php
                date_default_timezone_set("Israel");
                ?>
                <br>
                <?php
                echo date("D M d, Y ");

                ?>
            </p>

        </div>


        <div class="col-md-3"></div>
        <div class="col-md-4"></div>
    </div>


    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">

            <p>

                <?php

                $today = time();

                //B: RECORDS Date And Time OF YOUR EVENT
                $target = mktime(-1, 00, 00, 05, 20, 2020);

                //C: COMPUTES THE DAYS UNTIL THE EVENT.
                $diffrence = ($target - $today);
                $days = floor($diffrence / 86400);
                $hours = floor(($diffrence % (86400)) / (3600) - 1);
                $minutes = floor(($diffrence % (3600)) / (60));
                $seconds = floor(($diffrence % (60)) / 1);


                //D: DISPLAYS COUNTDOWN UNTIL EVENT

                echo " :זמן שנותר עד האירוע ";
                echo "<br>";
                echo " $days d $hours h $minutes m $seconds s";
                ?>
            </p>
        </div>
        <div class="col-md-3"></div>

        <div class="col-md-4"></div>

    </div>




</div>




