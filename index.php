<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Wir bauen Qualitätsdächer'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <img src="./assets/img/logo-pompiliu-galben-final.png" alt="" class="header__logo">
                        <a class="btN" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
  <main class="main">
        <section class="quality-roofs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="quality-roofs__box">
                            <div class="quality-roofs__inner">
                                <h1 class="quality-roofs__title"><?= $title ?></h1>
                                <p class="quality-roofs__dscr">Machen Sie Ihr Dach professionell</p>
                                <a class="quality-roofs__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="forms__inner">
                            <div class="forms__left">
                                <div class="forms__img-tel"></div>
                                <p class="forms__mini-dscr">Notfallunterstützung</p>
                                <a class="forms__number" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                            </div>
                            <div class="forms__right">
                                <h2 class="forms__title">Kostenloser Arbeitvoranschlag, unverbindlich</h2>
                                <p class="forms__dscr">Bitte füllen Sie das Formular aus</p>

                                <form id="jq_form" class="mt-1">
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                        <div id="jq_name"
                                            style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control test" placeholder="Telefon" name="jq_phone"
                                            type="text">
                                        <input class="form-control test" placeholder="Straße" name="jq_street"
                                            type="text">
                                        <div id="jq_phone"
                                            style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control test" placeholder="PLZ / Ort" name="jq_city"
                                            type="text">
                                        <input class="form-control test" placeholder="E-Mail" name="jq_email"
                                            type="text">
                                    </div>

                                    <div class="my-3">
                                        <textarea rows="3" class="form-control textarea-height" name="jq_text"
                                            placeholder="Nachricht"></textarea>
                                        <div id="jq_text"
                                            style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="form__btn">
                                        <input class="btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button"
                                            type="submit" id="jq_submit" value="Senden">
                                    </div>
                                    <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                        gesendet.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container-fluid">
                <div class="col-12 container">
                    <div class="about__box">
                        <div class="about__left">
                            <h2 class="about__title">Über uns</h2>
                            <p class="about__text">Wir sind ein familiengeführtes, ungarisches Bauunternehmen, das seit
                                3 Generationen mit großer Leidenschaft in diesem Bereich betriebt. Die Hauptkompetenzen
                                unseres Teams befinden sich im Bereich der Realisierung oder Renovierung von Wohndächer,
                                Zäunen, Fassaden von Gebäuden und im Innenausbau von A-Z, Kompetenzen die mit
                                behördlichen Qualifikationen und Zertifizierungen bewiesen sind. Darüber hinaus,
                                benutzen wir nur Materialien von Spitzenqualität, in Übereinstimmung mit den
                                Voraussetzungen des Kundes, um die besten Arbeiten mit langen Gewährleistungfristen
                                anzubieten.</p>
                            <a class="about__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            <img src="./assets/img/Denah.png" class="about__min-img"></img>
                        </div>
                        <div class="about__right">
                            <img src="./assets/img/joyous-construction-site-worker-with-hammer-building-a-roof-carcass.jpg" alt="" class="about__img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about about--margin-top">
            <div class="container-fluid">
                <div class="col-12 container">
                    <div class="about__box about__box-revers">
                        <div class="about__left">
                            <h2 class="about__title">Bereiten Sie Ihr Dach auf jedes Wetter vor</h2>
                            <p class="about__text">Es ist notwendig, das Dach regelmäßig zu inspizieren, um Probleme rechtzeitig zu erkennen, damit sie nicht schwerwiegend werden und ihre Reparatur nicht kostspielig sein wird.

                                Auf diese Weise haben Sie das Dach für jede Jahreszeit bereit.</p>
                            <a class="about__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            <img src="./assets/img/Denah.png" class="about__min-img"></img>
                        </div>
                        <div class="about__right">
                            <img src="./assets/img/exterior-view-of-red-brick-cottages-with-snow-covered-roofs-along-a-rural-road-.jpg" alt="" class="about__img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="difference">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="difference__box">
                            <div class="difference__left">
                                <h2 class="difference__title">Was uns unterscheidet</h2>
                            </div>
                            <div class="difference__right">
                                <p class="difference__dscr">Die über 3 Generationen vom Vater an den Sohn weitergegebene Erfahrung, die Leidenschaft für unsere Arbeit, die erworbenen Qualifikationen und der Wunsch, jeden Kunden so weit wie möglich zufrieden zu stellen, empfehlen uns als gute Wahl, um seine Probleme im</p>
                                <p class="difference__dscr">Zusammenhang mit dem Bau oder der Renovierung von Dächern zu lösen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="services__box">
                            <div class="services__inner">
                                <img class="services__img" src="./assets/img/14444.jpg" alt="" >
                                <h3 class="services__name">Neue Dächer und Reparaturen</h3>
                                <p class="services__dscr">Sämtliche Dachdeckerarbeiten werden vom Dachdeckermeister meines Vertrauens ausgeführt. Wir beraten Sie gerne ausführlich und erstelle Ihnen ein unverbindliches Angebot.</p>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="./assets/img/2888-1024x739.jpg" alt="" >
                                <h3 class="services__name">Spenglerarbeiten - und Klempnerarbeiten auf dem Dach</h3>
                                <p class="services__dscr">Als Spenglerei verarbeiten wir alle Arten von Blech für die Montage, Instandhaltung und Reparatur Ihres Daches. Wir stellen Dachverblechungen, Dachrinnen, Ablaufrohre, Verkleidungen usw.</p>
                            </div>
                            <div class="services__inner">
                                <img class="services__img" src="./assets/img/3aaa.jpg" alt="" >
                                <h3 class="services__name">Fassadenarbeiten</h3>
                                <p class="services__dscr">Ob Ein- oder Mehrfamilienhaus, Alt- oder Neubau – eine gepflegte und individuell gestaltete Fassade ist die Visitenkarte Ihrer Immobilie. Eine Investition in die Zukunft – lassen Sie sich unverbindlich von uns beraten.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quality">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="quality__title">Die Qualität, der Sie vertrauen können</h2>
                        <p class="quality__dscr">Die gesammelten Erfahrungen, die erworbenen Qualifikationen empfehlen uns, als ein Team das eine hohe Qualität der geleisteten Arbeit bietet</p>
                        <div class="quality__box">
                            <img src="./assets/img/1two-open-roof-windows-in-the-attic-visible-anthracite-ceramic-tiles-.jpg" alt="" class="quality__img">
                            <img src="./assets/img/2exterior-view-of-yellow-brick-row-house-with-yellow-roof-tiles-.jpg" alt="" class="quality__img2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quality-first-job">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="quality-first-job__box">
                            <h2 class="quality-first-job__title">Qualitätsarbeit zum ersten Mal richtig gemacht</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="roofing-professionals">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="roofing-professionals__box">
                            <div class="roofing-professionals__left">
                                <img class="roofing-professionals__img" src="./assets/img/focused-builder-is-adjusting-a-wooden-bar-to-a-roof-carcass.jpg" alt="" >
                            </div>
                            <div class="roofing-professionals__right">
                                <h2 class="roofing-professionals__title">
                                    Machen Sie sich keine Sorgen mehr und wenden Sie sich an unser Team von Dachdeckerprofis</h2>
                                <p class="roofing-professionals__dscr">Wenn Sie Qualitätsarbeit zu Mindestpreisen wünschen, die von einem Team erfahrener Handwerker hergestellt werden, kontaktieren Sie uns</p>
                                <a class="roofing-professionals__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="best-solutions">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="best-solutions__title">Wir bieten Ihnen die besten Lösungen für alle Ihre Dachprobleme</h2>
                        <div class="best-solutions__box">
                            <div class="best-solutions__inner">
                                <img class="best-solutions__img" src="./assets/img/landmark-solid.svg" alt="">
                                <h3 class="best-solutions__name">Zuverlässiges Unternehmen</h3>
                                <p class="best-solutions__dscr">Wir behandeln alle Anfragen unserer Kunden mit größter Ernsthaftigkeit</p>
                            </div>
                            <div class="best-solutions__inner">
                                <img class="best-solutions__img" src="./assets/img/users-gear-solid.svg" alt="">
                                <h3 class="best-solutions__name">Erfahrung</h3>
                                <p class="best-solutions__dscr">Unser Team verfügt über eine große Erfahrung, die durch Vielfalt und eine sehr große Anzahl von Arbeiten gewonnen wurde</p>
                            </div>
                            <div class="best-solutions__inner">
                                <img class="best-solutions__img" src="./assets/img/award-solid.svg" alt="">
                                <h3 class="best-solutions__name">Qualifiziertes Personal</h3>
                                <p class="best-solutions__dscr">Neben einer reichen Erfahrung verfügt unser Team über viele Qualifikationen, um mit den neuesten Lösungen und Neuigkeiten auf dem Gebiet auf dem Laufenden zu sein.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="safety">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 padding-none">
                        <div class="safety__box">
                            <div class="safety__left">
                                <img class="safety__img" src="./assets/img/hammer-solid.svg" alt="" >
                                <h2 class="safety__title">Wir haben Lösungen für ein sicheres und schönes Dach</h2>
                                <p class="safety__dscr">Entsprechend den Kundenanforderungen finden wir die optimalen Lösungen für ein sicheres und schönes Dach.</p>
                            </div>
                            <div class="safety__right">
                                <img class="safety__big-img" src="./assets/img/ceramic-roof-tiles-cover.jpg" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">Copyright © 2022</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>