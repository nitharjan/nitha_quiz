<!DOCTYPE html>
<html>
<head>
    <title>Nitharjan Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.countdown.css" />
    <!--js-->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.countdown.js"></script>
    <script src="<?php echo base_url(); ?>js/script.js"></script>
    <!--js-->
</head>
<body>
<div class="header">
    <h1>Answer Your QUiz</h1>
</div>
<div class="content">
    <div class="content1">
        <form class="form-signin" method="Get" id='signin' name="signin" action="<?php echo base_url('index.php/Questionscontrol'); ?>">

            <?php if ($newquestions != '') {
                echo $newquestions['0']['question_name'];
                ?><br>
                <input class="radio" type="radio" value="1" name="1"><?php echo $newquestions['0']['answer1']; ?><br>
                <input class="radio" type="radio" value="2" name="1"><?php echo $newquestions['0']['answer2']; ?><br>
                <input class="radio" type="radio" value="3" name="1"><?php echo $newquestions['0']['answer3']; ?><br>
                <input class="radio" type="radio" value="4" name="1"><?php echo $newquestions['0']['answer4']; ?><br><br>

                <?php echo $newquestions['1']['question_name']; ?><br>
                <input class="radio" type="radio" value="1" name="2"><?php echo $newquestions['1']['answer1']; ?><br>
                <input class="radio" type="radio" value="2" name="2"><?php echo $newquestions['1']['answer2']; ?><br>
                <input class="radio" type="radio" value="3" name="2"><?php echo $newquestions['1']['answer3']; ?><br>
                <input class="radio" type="radio" value="4" name="2"><?php echo $newquestions['1']['answer4']; ?><br><br>

                <?php echo $newquestions['2']['question_name']; ?><br>
                <input class="radio" type="radio" value="1" name="3"><?php echo $newquestions['2']['answer1']; ?><br>
                <input class="radio" type="radio" value="2" id="2" name="3"><?php echo $newquestions['2']['answer2']; ?><br>
                <input class="radio" type="radio" value="3" id="3" name="3"><?php echo $newquestions['2']['answer3']; ?><br>
                <input class="radio" type="radio" value="4" id="4" name="3"><?php echo $newquestions['2']['answer4']; ?><br><br>

                <?php echo $newquestions['3']['question_name']; ?><br>
                <input class="radio" type="radio" value="1" name="4"><?php echo $newquestions['3']['answer1']; ?><br>
                <input class="radio" type="radio" value="2" name="4"><?php echo $newquestions['3']['answer2']; ?><br>
                <input class="radio" type="radio" value="3" name="4"><?php echo $newquestions['3']['answer3']; ?><br>
                <input class="radio" type="radio" value="4" name="4"><?php echo $newquestions['3']['answer4']; ?><br><br>

                <?php echo $newquestions['4']['question_name']; ?><br>
                <input class="radio" type="radio" value="1" name="5"><?php echo $newquestions['4']['answer1']; ?><br>
                <input class="radio" type="radio" value="2" name="5"><?php echo $newquestions['4']['answer2']; ?><br>
                <input class="radio" type="radio" value="3" name="5"><?php echo $newquestions['4']['answer3']; ?><br>
                <input class="radio" type="radio" value="4" name="5"><?php echo $newquestions['4']['answer4']; ?><br><br>

                <input type="hidden" value="<?php echo $sCategory ?>" name="sCategory">

            <?php } ?>
            </br></br></br>


            <input type="submit" class="btn btn-success btn-block" id="resultbtton" name="resultbtton" value="Results">
        </form>

    </div>



</div>
<div class="footer">
  
</div>
</body>
</html>

