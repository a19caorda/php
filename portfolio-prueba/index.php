<?php

/**
 * @author David Castilla Ortiz
 */

$email = "im@dcxo.dev";
$phone = "152634987";
$linkedin = "https://www.linkedin.com/in/dcxo/";
$twitter = "@imdcxo";

$works = array(
    array("PHP Developer", "Ipsum ipsum libero deleniti illum culpa Deleniti non animi ", array("Sit voluptatibus unde dolorem fugiat.", "Adipisicing neque quae totam amet", "Elit facere natus maiores laudantium.")),
    array("Web Design", "Ipsum ipsum libero deleniti illum culpa Deleniti non animi ", array("Sit voluptatibus unde dolorem fugiat.", "Adipisicing neque quae totam amet", "Elit facere natus maiores laudantium.")),
);

$projects = array(
    array("Project X", "Ipsum ipsum libero deleniti illum culpa Deleniti non animi ", "https://ui-avatars.com/api/?name=John+Doe&size=255", array("PHP", "HTML")),
    array("Project Y", "Ipsum ipsum libero deleniti illum culpa Deleniti non animi ", "https://ui-avatars.com/api/?name=John+Doe&size=255", array("PHP", "HTML", "JavaScript")),
);

$skills = array(
    "Backend" => array("PHP"),
    "Frontend" => array("HTML", "CSS"),
    "Frameworks" => array("Laravel", "Bootstrap"),
);

$languages = array("Spanish", "English");

?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Resume</title>
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div id="resume-header" class="row">
            <div class="col-3">
                <img id="profile-picture" src="https://ui-avatars.com/api/?name=D+C+O&size=255" alt="">
            </div>
            <div class="col">
                <h1><?= "David Castilla" ?></h1>
                <h2><?= "DWES" ?></h2>
                <ul>
                    <li>Mail: <?= $email ?></li>
                    <li>Phone: <?= $phone ?></li>
                    <li><a href="<?= $linkedin ?>">LinkedIn</a></li>
                    <li>Twitter: <?= $twitter ?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="border-bottom-gray">Carrer Summary</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <h3 class="border-bottom-gray">Work Experience</h3>
                    <ul>
                        <?php foreach ($works as $project) { ?>
                            <li>
                                <h5><?= $project[0] ?></h5>
                                <p> <?= $project[1] ?> </p>
                                <strong>Achievements:</strong>
                                <ul>
                                    <?php foreach ($project[2] as $achivement) { ?>
                                        <li><?= $achivement ?></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div>
                    <h3 class="border-bottom-gray">Projects</h3>
                    <?php foreach ($projects as $project) { ?>
                        <div class="project">
                            <h5><?= $project[0] ?></h5>
                            <div class="row">
                                <div class="col-3"><img id="profile-picture" src="<?= $project[2] ?>" alt=""></div>
                                <div class="col">
                                    <p><?= $project[1] ?></p>
                                    <strong>Technologies used:</strong>
                                    <?php foreach ($project[3] as $technology) { ?>
                                        <span class="badge badge-secondary"><?= $technology ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-3">
                <h3 class="border-bottom-gray">Skills & Tools</h3>
                <?php foreach ($skills as $section => $skills) { ?>
                    <h4><?= $section ?></h4>
                    <ul>
                        <?php foreach ($skills as $skill) { ?>
                            <li><?= $skill ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>

                <h3 class="border-bottom-gray">Languages</h3>
                <ul>
                    <?php foreach ($languages as $language) { ?>
                        <li><?= $language ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div id="resume-footer" class="row">
            <div class="col">
                Designed by <?= $twitter ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>
