<div class="mainForm">

    <form method="get">
        <h2>הרשמה לאירוע <i class="fas fa-edit"></i></h2>


        <div class="form-row">
            <div class="form-group1 col-md-6">
                <label for="FullName">* שם מלא</label>
                <input type="text" name="textBox" class="form-control" id="FullName" placeholder="שם מלא">
                <!-- onchange="OnlyLetters(this)"   -->

                <p class="pOfErrors" id="demoFullName"></p>
            </div>
            <div class="form-group col-md-6">
                <label for="guests">* מספר אורחים</label>
                <input type="number" name="numOfGuess" class="form-control" id="numOfGuess"
                       placeholder="מספר אורחים">
                <p class="pOfErrors" id="demoGuest"></p>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="inputMail">* e-mail</label>
                <input name="email" class="form-control" id="inputMail" placeholder="e-mail">
                <p class="pOfErrors" id="eemail"></p>
            </div>
            <div class="form-group col-md-4"></div>
        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label>* בחירת דרך הגעה</label>
                <select id="road" name="busRoad" class="form-control">
                    <option value="" selected id="check">בחר</option>
                    <option value="1">אוטובוס מבאר שבע</option>
                    <option value="2">אוטובוס מתל אביב</option>
                    <option value="3">אוטובוס מחיפה</option>
                    <option value="4">הגעה עצמית</option>
                </select>
                <p class="pOfErrors" id="demoBuss"></p>
            </div>


            <div class="form-group col-md-2">
                <label>* קידומת</label>
                <select id="inputPre" name="prePhone" class="form-control">
                    <option value="" selected>בחר</option>
                    <option value="1">02</option>
                    <option value="2">03</option>
                    <option value="3">04</option>
                    <option value="4">08</option>
                    <option value="5">077</option>
                    <option value="6">050</option>
                    <option value="9">052</option>
                    <option value="10">053</option>
                    <option value="11">054</option>
                    <option value="12">055</option>
                </select>
                <p class="pOfErrors" id="demoFirst"></p>
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">* מספר</label>
                <input type="number" name="phonephone" class="form-control" id="inputZip" placeholder="1234-567">
                <p class="pOfErrors" id="demoPhone"></p>
            </div>
        </div>


        <p>הערות</p>
        <textarea name="command" id="info" rows=6 cols=80></textarea>
        <br>

    <!--    <p id="left"></p> -->

        <div class="row">
            <div class="form-group col-md-3">
                <p class='myWayInForm'>* - Must to complete</p>
            </div>

            <div class="form-group col-md-1">

                <button class="btn btn-outline-primary" type="submit" name="submit">הרשמה</button>
                <!-- onclick="checkTheForm()"-->
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-2">

            </div>
            <div class="form-group col-md-1">
                <button type="reset" class="btn btn-outline-primary">איפוס</button>
            </div>
            <div class="form-group col-md-3">

            </div>
        </div>


    </form>

    <?php

    if (isset($_GET['submit'])) {
        $text = $_GET['textBox'];
        $numberOfGuess = $_GET['numOfGuess'];
        $email = $_GET['email'];
        $phone = $_GET['phonephone'];
        $prePhone = $_GET['prePhone'];
        $bus = $_GET['busRoad'];
        $leftCommand = $_GET['command'];
        $checkTheForm = false;


        if (strlen($leftCommand) > 200) {
            echo "<p class='myWayInForm' > !הערות מוגבל עד 200 תווים *</p>";
            $checkTheForm = true;
        }

        if ($bus == ""){
            echo "<p class='myWayInForm'> !אנא בחר דרך הגעה *</p>";
            $checkTheForm = true;
        }

        if ($prePhone == ""){
            echo "<p class='myWayInForm'> !אנא בחר קידומת *</p>";
            $checkTheForm = true;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='myWayInForm'> !כתובת מייל לא חוקית *</p>";
            $checkTheForm = true;
        }

        if (!preg_match("/^[א-תA-Za-z \\- \']+$/", $text)) {
            echo "<p class='myWayInForm'> !שם לא תקין- עברית או אנגלית בלבד *</p>";
            $checkTheForm = true;
        }

        if ($numberOfGuess < 1) {
            echo "<p class='myWayInForm' > !מספר אורחים שגוי *</p>";
            $checkTheForm = true;
        }
        if (strlen($phone) != 7) {
            echo "<p class='myWayInForm' > !מספר טלפון שגוי *</p>";
            $checkTheForm = true;
        }
        if ($checkTheForm == false) {

            echo "<p class='Succsess' > Thank you " . $text . "  </p>";
            echo "<p class='Succsess' > For registering to my event.<br></p>";
            echo "<p class='Succsess' >Number of participants: $numberOfGuess </p>";
        }


    }
    ?>

