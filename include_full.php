<?php
include("header.php");
?>
    <body id="page-top" class="index">
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
		<div class="dropdown">
		    <a href="tel:093916094660" class="bernd"><span style="letter-spacing: 4px">09391</span> - 6 09<span class="bmargin"></span>46<span class="bmargin"></span>60</a>
		</div>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand mylogo" href="#page-top">
                        <img src="img/logo.png" class="mylogo">
                    </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#unsere_Touren"><span class="glyphicon glyphicon-road myglyph" aria-hidden="true"></span>Touren</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#gutscheine"><span class="glyphicon glyphicon-euro myglyph" aria-hidden="true"></span>Gutscheine</a>
                        </li>
<!--
                        <li class="page-scroll">
                            <a href="#team"><span class="glyphicon glyphicon-user myglyph" aria-hidden="true"></span>Team</a>
                        </li>
-->
                        <li class="page-scroll">
                            <a href="#faq"><span class="glyphicon glyphicon-question-sign myglyph" aria-hidden="true"></span>FAQ</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact"><span class="glyphicon glyphicon-send myglyph" aria-hidden="true"></span>Kontakt</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <!-- Header -->
        <header>
            <div class="container header-bg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-text">
			    <div class="yippie">
				YIPPIE<br>
				YIPPIE<br>
				YEAH
			    </div>
			    <div class="header-hr"></div>
                            <span class="glyphicon glyphicon-chevron-down mydown" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Tours Grid Section -->
        <section id="unsere_Touren" class="success">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Unsere Touren</h2>
                        <hr class="star-light hrTouren">
                    </div>
                </div>
                <div class="row">
		<div class="tour-text">
		    <p><b>Segtrail und der Swing</b><br>
		    Unsere Touren stehen für ein quicklebendiges, leichtfüßiges und lustvolles Lebensgefühl, das man meist dann findet, wenn man es nicht sucht.<br>
		    Um so besser, wenn man das auch buchen kann. Swingen sie los.
		    </p>
		</div>
		<?php
		    for($i = 1; $i <= 9; $i++) {
          // if($i == 6) { /* remove tour de oexle */
          //   $i++;
          // }
			echo '
                    <div class="col-sm-4 portfolio-item">
                        <a href="#clTour' . $i . '" class="portfolio-link">
                            <article class="tour-item">
                                <figure>
                                    <img src="img/tours/' . $i . '.png" class="img-responsive" alt="">
                                </figure>
                            </article>
                        </a>
                    </div>

			';
		    }
		?>
                    <div class="col-sm-4 portfolio-item">
                        <a href="javascript:void(0);" class="openCalendar">
                            <article class="tour-item">
                                <figure>
                                    <img src="img/tours/Tourensuche.png" class="img-responsive" alt="">
                                </figure>
                            </article>
                        </a>
                    </div>
                </div>
		<div class="weitere">
		    <button class="weitere">weitere Events und Touren auf Anfrage</button>
		</div>
            </div>
        </section>

        <!-- Gutscheine section -->
        <section id="gutscheine">
		    <div class="sepa3">
		    </div>
                    <a href="#" id="Gutscheine" style="visibility:hidden"></a>
		    <!--
                    <h2>Gutscheine</h2>
                    <hr class="star-primary hrGutscheine">
		    -->
                    <div class="cowboy-wrapper">
                        <div class="cowboy" id="cowboy">
                            <img src="img/gutschein.jpg">
			    <div class="hierzuhaben-wrapper">
				<button class="hierzuhaben">hier zu haben</button>
			    </div>
		    <!--
                            <div class="wertgutschein">
                               Wertgutschein
                            </div>
                            <div class="fueralles">
                                für alles!
                            </div>
		    -->
                        </div>
                    </div>
        </section>



        <!-- About Section -->
<!--
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Team</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="team-articles">
                    <article class="team-member">
                        <figure>
                            <img src="img/team/simon.png" class="team-img" data-toggle="popover" data-placement="top" data-html="true"  data-content="Hält die Fahnen hoch und die Pferde am Laufen.<br><br>Die kürzeste Antwort auf etwas ist es einfach zu tun. <br><br><i>-Ernest Hemingway</i>">
                            <figcaption>
                                Simon Herzog <br>
                                Gründer und Schrauber
                            </figcaption>
                        </figure>
                    </article>
                    <article class="team-member">
                        <figure>
                            <img src="img/team/alex.png" class="team-img" data-toggle="popover" data-placement="top" data-html="true"  data-content="input / output. Mann für die Navigation. Übersieht nix, kann irgendwie morsen. Mag keine Heringe und soll angeblich ganz gut Segway fahren.">
                            <figcaption>
                                Alexander Schwarz <br>
                                Gründer, Nautiker
                            </figcaption>
                        </figure>
                    </article>
                    <article class="team-member">
                        <figure>
                            <img src="img/team/bernd.png" class="team-img">
                            <figcaption>
                                Bernd Stollberger <br>
                                Teamleiter Würzburg
                            </figcaption>
                        </figure>
                    </article>
                    <article class="team-member">
                        <figure>
                            <img src="img/team/klaus.png" class="team-img">
                            <figcaption>
                                Klaus Gehret <br>
                                Teamleiter Main-Spesart
                            </figcaption>
                        </figure>
                    </article>
                    <article class="team-member">
                        <figure>
                            <img src="img/team/dennis.png" class="team-img">
                            <figcaption>
                                Dennis Meinert <br>
                                Guide
                            </figcaption>
                        </figure>
                    </article>
                    <article class="team-member">
                        <figure>
                            <img src="img/team/jasmin.png" class="team-img">
                            <figcaption>
                                Jasmin Stollberger <br>
                                Guide
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </section>
-->

        <!-- FAQ Section -->
        <section id="faq" class="success">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>FAQ</h2>
                        <hr class="star-light hrFaq">
                    </div>
                    <!--
                    <div class="row text-center margin-top video-ad">
                        <iframe src="https://www.youtube.com/embed/8x5JcmfwRBY?color=white" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscrenn allowfullscreen></iframe>
                    </div>
                    -->
                </div>
                <div class="row">
                    <div id="accordion">
                        <h3><div class="myh3width">Ich bin noch nie auf einem SEGWAY gestanden. Kann ich das denn überhaupt so schnell lernen?</div><img src="img/arrow-down.png" ></h3>
                        <div class="accordion-p-color">
                            <p>
                                Das Fahren mit einem SEGWAY ist intuitiv, einfach und schnell erlernbar. Generell gilt: Wer Treppen steigen kann, ist auch in der Lage SEGWAY zu fahren.

Sie können alle unsere Touren mitfahren, auch wenn Sie vorher noch nie auf einem SEGWAY gestanden sind. Einzige Ausnahme ist die Spessart Offroad "wild & kühn"-Tour. Diese Tour empfehlen wir Ihnen nur dann, wenn Sie bereits über SEGWAY Erfahrung verfügen.

Jede Tour beginnt bei uns mit einer ausführlichen Einweisung und auch während der Tour werden Sie bestens durch Ihren Guide betreut.
                            </p>
                        </div>
                        <h3><div class="myh3width">Was ist die Mindestteilnehmerzahl für eine SEGWAY Tour? Wie setzt sich die Gruppe zusammen?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
Die Mindestgröße für eine Tour beträgt 4 Personen. Diese kann sich aus Einzelfahrern oder Gruppen zusammensetzen.

Wenn Ihre Gruppe aus mindestens 8 Personen besteht und Sie während der Tour „unter sich“ bleiben wollen, teilen Sie uns dies bitte im Rahmen der Buchung mit.
                            </p>
                        </div>
                        <h3><div class="myh3width">Ich bin alleine bzw. wir sind zu zweit oder zu dritt. Wie kann ich an einer Tour teilnehmen?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
Sollten Sie alleine, zu zweit oder zu dritt sein und auch keine Mitfahrer aus dem eigenen Bekannten- und Familienkreis dazugewinnen können, rufen Sie bitte unseren Event-Kalender auf. Hier können Sie sich über freie Tourplätze informieren und diese auch direkt buchen.
                            </p>
                        </div>
                        <h3><div class="myh3width">Wir sind eine größere Gruppe. Warum finden wir auf der Homepage keinen passenden Termin?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
Die auf der Homepage eingestellten Termine sind für Einzelfahrer und Gruppen bis max. 3 Personen reserviert. Für Gruppen ab 4 Teilnehmern findet eine individuelle Terminvereinbarung statt um Ihre Wünsche optimal berücksichtigen zu können.. Nutzen Sie bitte die Funktion "Terminanfrage stellen" im Shop oder rufen Sie uns für ein persönliche Beratung direkt an (Telefon 09391- 6094660).
                            </p>
                        </div>
                        <h3><div class="myh3width">Was passiert bei schlechtem Wetter?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
SEGWAY fahren ist eine Outdoor-Aktivität, die auch bei nicht so schönem Wetter Spaß macht. Wir fahren unsere Touren daher bei (fast) jedem Wetter. Wichtig ist es immer, der Witterung angepasste Kleidung mitzubringen. Einzige Ausnahme ist starker Dauerregen.
Muss ein Tour witterungsbedingt durch uns - natürlich erst nach Rücksprache mit Ihnen - abgesagt werden, behalten Ihre Tickets/Gutscheine Gültigkeit und wir suchen gemeinsam mit Ihnen nach einem Ersatztermin. In begründeten Ausnahmefällen erstatten wir Ihnen die Gebühr zurück.
                            </p>
                        </div>
                        <h3><div class="myh3width">Welche Kleidung muss ich zu einer SEGWAY Tour mitbringen?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
Es ist immer wichtig, der Witterung angepasste Kleidung und festes, flaches Schuhwerk zu einer SEGWAY Tour mitzubringen. An einem heißen sonnigen Tag kann das Sonnenschutz (Sonnencreme, Sonnenbrille, etc.) und eine Flasche Wasser bedeuten. An einem regnerischen oder kühlen Tag empfiehlt sich das „Zwiebelschicht-Prinzip“, d.h. Regenjacke und evtl. Regenhose gegen Nässe und Wind, darunter etwas Wärmendes.
<br><br>
Bitte beachten Sie auch, dass wir bei einigen unserer Touren streckenweise durch den Wald fahren, hier kann es auch an sonnigen Tagen frisch sein. Bei Touren im Herbst können ein Schal, Mütze und Handschuhe hilfreich sein.
 <br><br>
Bitte tragen Sie keine offenen Schuhe (z.B. Flip-Flops, Ballerinas) und auch keine Schuhe mit Absätzen.
 <br><br>
Alle Kleidungsstücke, die Sie während der Tour nicht brauchen, können Sie bequem in der Frontlenkertasche Ihres SEGWAYs transportieren.
                            </p>
                        </div>
                        <h3><div class="myh3width">Welche Voraussetzungen gibt es für Teilnahme an einer SEGWAY Tour?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
Das Fahren mit einem SEGWAY ist intuitiv, einfach und schnell erlernbar. Generell gilt: Wer Treppen steigen kann, ist auch in der Lage SEGWAY zu fahren.
<br><br>
<b>Voraussetzungen sind jedoch:</b>
<ul>
    <li>Körpergewicht zwischen 45kg und 118kg</li>
    <li>mindestens eine Mofa-Prüfbescheinigung  (im PKW-Führerschein enthalten)</li>
    <li>Helmtragepflicht (Leihhelm kann von uns gestellt werden)</li>
    <li>Feste Schuhe ohne Absatz und dem Wetter angepasste Kleidung</li>
    <li>Haftungsausschlusserklärung</li>
</ul>
                            </p>
                        </div>
                        <h3><div class="myh3width">Welche Gebühren fallen bei einer Stornierung durch den Kunden an?</div><img src="img/arrow-down.png"></h3>
                        <div class="accordion-p-color">
                            <p>
Im Falle der Stornierung einer Tour- bzw. Parcoursbuchung durch den Kunden werden folgende Stornierungskosten in Rechnung gestellt:
<ul>
    <li>mehr als 6 Wochen vor Veranstaltungsbeginn: kostenfrei</li>
    <li>bis 6 Wochen vor Veranstaltungsbeginn: 25% des Preises</li>
    <li>bis 4 Wochen vor Veranstaltungsbeginn: 50% des Preises</li>
    <li>bis 2 Wochen vor  Veranstaltungsbeginn: 75% des Preises</li>
    <li>bis 2 Tage vor Veranstaltungsbeginn: 100% des Preises</li>
</ul>
</p>
<p>
Die o. g. Stornierungskosten gelten ebenso für die Verringerung vereinbarter Teilnehmerzahlen. Weitere Informationen zu den Stornobedingungen finden Sie in unseren <a href="agb.pdf" target="_blank">AGB</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
        </section>
<?php
include("contact.php");
?>

<?php
include("footer.php");
?>
