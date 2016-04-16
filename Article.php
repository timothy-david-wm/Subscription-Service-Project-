<?php
session_start();
if($_GET['link'] == 1){
    $_SESSION['title'] = "Prom";
    $_SESSION['article'] = "Prom season is upon us so it's time to take your sweetheart to a dance with unrealistic expectations, so they can resent you for not living up to them.
    <br>
    It's long been in our culture that a man and a woman must get to know each-other by going out on dates, so what a better plan of action than taking your date to a place whare you have to scream to the top of your lungs to hear them?
    <br>
    If you're alone on prom night, don't worry, dates come and go, but videogames are for loners. <br> And if you still feel that you're missing out on a marvelous night because nobody asked you to the prom,
    or that you're too nervous to ask somebody out, or they rejected you, or all of the above, don't worry, if you're that unattractive or unable to ask anyone, they'd dispise the date and envy everyone else, so you'd feel bad and lonely regardless.
    Just remember 50% of marriges end in divorce and the vast majority of people you meet in high-school you'll never see again,
    <br><br>So before you dispair in hopelessness, have a happy prom night, and remember, these are the best wasted years of your life.";
}
if($_GET['link'] == 2){
    $_SESSION['title'] = "Camping";
    $_SESSION['article'] = "Hey everyone, I don't know about you, but we here in civilization have spent thousands of years fighting, dying, building, inventing, and running away from bears so we could have vacation days, and not have to spend them sleeping on the ground outside.<br>
    So why not celebrate by getting back to our natural roots by spending your vacation days sleeping on the ground outside?<br>
    Indoor plumbing systems are some of the greatest unacknowledged innovations ever made, so why not just cut out the middle man, and crap standing up in the woods?
    <br> Finally, our GPS systems and cars have helped us find and get to anywhere we so please, our connected social groups, and air conditioners, sometimes make us forget how awesome it is to be lost, cold, and alone.<br>
    <br> Experience all this and more by camping!, and just remember, if you fall in the forest and nobody's around to hear you, you're doomed.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
</head>
<body style="background-color: #19c589">
<form typeof='post'>
<div style="float: left; padding-left:1em; height: 100%; width: 20%; background-color: rgba(255,0,0,100);">
    <b>Site</b>
    <ul>
        <a href="Subscribe.php" style="color: black; text-decoration: underline;"><li>Subscribe</li></a>
        <a href="about_us.html" style="color: black"><li>About us</li></a>
    </ul>
    <b>Articles</b>
    <ul>
        <a href="Article.php?link=1" style="color: black"><li>Week: 4/15/2016: Prom</li></a>
        <a href="Article.php?link=2" style="color: black"><li>Week: 4/8/2016: Camping</li></a>
    </ul>
</div>
<div style="float: right; width: 78%">
    <div style="float: left; height: 100%; width: 75%;background-color: rgb(255, 236, 0);">
            <b style="color: #ff5e07; font-size: 200%; padding-left:4em; position: absolute: top"><?php echo $_SESSION['title']; ?></b><br><br>
            <p style="padding-left: 2em; position: absolute: top"><?php echo $_SESSION['article']?></p>
        </div>
    <div style="float: right; width: 25%; height: 100%;">
        <center>
        <img
            src="data:image/jpeg;base64,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"> <br>
        <img src="http://www.emmaculatereflections.com/wp-content/uploads/2011/12/generic-advertisement-249x300.jpg">
        </center>
    </div>
</div>
</form>

</body>
</html>