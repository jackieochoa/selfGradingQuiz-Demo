<html lang="en">
<!--THIS IS PROCESSED ON SERVER, OPENING IT LOCALLY WILL NOT DO ANYTHING-->

<head>
    <title>Self Grading Quiz</title>
    <meta charset="UTF-8">
    <meta name="description" content="A form to provide a self grading quiz">
    <meta name="author" content="Jackie Ochoa">
    <link rel="stylesheet" href="selfGradingQuiz.css">
</head>

<body>
    <h1>Quiz 1</h1>
    <h1>CS329E - Elements of Web Programming</h1>
    <h1>September 8, 2019</h1>
    <form method="POST" action="">

        <h2>True/False</h2>

        <section>
            <h3>1.</h3> "URL" stands for "Universal Reference Link".<br>
            <div>
                <label><input name="q1" type="radio" value="true"> True</label><br>
                <label><input name="q1" type="radio" value="false">False</label><br>
            </div>
        </section>

        <section>
            <h3>2.</h3> An Apple Macbook is an example of a Linux System.<br>
            <div>
                <label><input name="q2" type="radio" value="true"> True</label><br>
                <label><input name="q2" type="radio" value="false">False</label><br>
            </div>
        </section>

        <h2>Multiple Choice</h2>

        <section>
            <h3>3.</h3> Which of these do NOT contribute to packet delay in a packet switching network? <br>
            <div>
                <label><input name="q3[]" type="checkbox" value="a">Processing Delay at a router</label><br>
                <label><input name="q3[]" type="checkbox" value="b">CPU workload on a client</label><br>
                <label><input name="q3[]" type="checkbox" value="c">Transmission delay alone a communications
                    link</label><br>
                <label><input name="q3[]" type="checkbox" value="d">Propagation delay</label><br>
            </div>
        </section>

        <section>
            <h3>4.</h3> This internet layer is responsible for creating the packets that move across the network. <br>
            <div>
                <label><input name="q4[]" type="checkbox" value="a">Physical</label><br>
                <label><input name="q4[]" type="checkbox" value="b">Data Link</label><br>
                <label><input name="q4[]" type="checkbox" value="c">Network</label><br>
                <label><input name="q4[]" type="checkbox" value="d">Transport</label><br>
            </div>
        </section>



        <h2>Fill in the Blank</h2>
        <section>
            <h3>5. </h3><label><input name="q5" type="text" size="10"></label> is a networking protocol that runs over
            TCP/IP, and governs communications between web browsers and web servers. <br>
        </section><br>

        <section>
            <h3>6. </h3>A small icon displayed in a browser table that identifies a website is called a <label><input name="q6" type="text" size="10"></label>.
        </section><br>

        <h1>
            <input type="submit" name="grade" value="Grade"> <input type="reset" value="Clear">
        </h1>

    </form>

    <?php
    if (isset($_POST['grade'])) {
        $q1 = $_POST['q1'] ?? null;
        $q2 = $_POST['q2'] ?? null;
        $q3 = $_POST['q3'] ?? null;
        $q4 = $_POST['q4'] ?? null;
        $q5 = $_POST['q5'] ?? null;
        $q6 = $_POST['q6'] ?? null;

        $grade = 0;

        if ($q1 == "false") {
            $grade++;
        }

        if ($q2 == "true") {
            $grade++;
        }

        if ($q3 == ['b']) {
            $grade++;
        }

        if ($q4 == ['c']) {
            $grade++;
        }

        if (strtolower($q5) == "http") {
            $grade++;
        }

        if (strtolower($q6) == "favicon") {
            $grade++;
        }

        if ($q1 == null || $q2 == null || $q3 == null || $q4 == null || $q5 == null || $q6 == null) {
            echo "<script>alert('Unable to grade: one or more questions left unanswered.');</script>";
        } else {
            echo "<script>alert('Your grade is $grade / 6');</script>";
        }
    }
    ?>
</body>

</html>