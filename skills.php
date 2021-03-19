<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="Stylesheet" href="skills.css">
</head>


    <h1>SKILLS</h1>
    <section class="skills">
        <div class='gauge'>
            <div class="gauge__body">
                <div class="gauge__fill" id="one"></div>
                <div class="gauge__cover"><?php echo $skillOneValue . "%"?></div>
            </div>
            <div class="gauge__legend">Skill</div>
        </div>
        <div class='gauge'>
            <div class="gauge__body">
                <div class="gauge__fill" id="two"></div>
                <div class="gauge__cover">25%</div>
            </div>
            <div class="gauge__legend">Skill</div>
        </div>
        <div class='gauge'>
            <div class="gauge__body">
                <div class="gauge__fill" id="three"></div>
                <div class="gauge__cover">75%</div>
            </div>
            <div class="gauge__legend">Skill</div>
        </div>
        <div class='gauge'>
            <div class="gauge__body">
                <div class="gauge__fill" id="four"></div>
                <div class="gauge__cover">90%</div>
            </div>
            <div class="gauge__legend">Skill</div>
        </div>
    </section>


</html>