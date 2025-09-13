<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .navbar {
            background-color: white;
        }

        .member-card {
            max-width: 300px;
            min-height: 620px;
        }

        .team-membercards {
            gap: 30px;
        }

        .text a {
            color: inherit;
            text-decoration: underline;
            text-decoration-color: white;
        }

        .text a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="Assets/Logos/logo (1).png" alt="Logo">
        </div>
        <button class="hamburger">&#9776;</button>
        <div class="right-nav">
            <div class="top-bar">
                <ul class="bar">
                    <li><a href="#">1-844-997-4837</a></li>
                    <!-- <li class="flex-img-txt toggle"><img src="Assets/Logos/united-states.png" alt=""><a href="#"><img src="" alt="">US</a><img id="expand-arrow" src="Assets/Images/expand arrow.png" alt="">
                        <ul class="dropdown-1">
                            <li class="flex-img-txt"> <img src="Assets/Logos/united-states.png" alt=""> <a href="#">US</a></li>
                            <li class="flex-img-txt"> <img src="Assets/Logos/united-kingdom.webp" alt=""> <a href="#">UK</a></li>
                        </ul>

                    </li> -->
                    <li><button class="btn1">CONTACT US</button></li>
                </ul>
            </div>
            <div class="bottom-bar">
                <ul class="bar">
                    <li class="toggle"><span><a href="./ghostwritingServices.php">BOOK WRITING & GHOST WRITING</a> <span> <img class="arrow-icon" src="Assets/Images/expand arrow.png" alt=""></span></span>
                        <ul class="dropdown-1">
                            <li><a href="./ghostwritingServices.php">Ghostwriting Services</a></li>
                            <li><a href="./business&LeadershipBooks.php">Business & Leadership Books</a></li>
                            <li><a href="./autobiographyBooks.php">Memoir/Autobiography Books</a></li>
                            <li><a href="./health&self-helpBooks.php">Health & Self-Help Books</a></li>
                            <li><a href="./children'sBooks.php">Children’s Books</a></li>
                            <li><a href="./generalNonfiction.php">General Nonfiction</a></li>
                            <li><a href="./fiction.php">Fiction Books</a></li>
                            <li><a href="./bookProposals.php">Book Proposals</a></li>
                        </ul>
                    </li>
                    <li class="toggle"><span><a href="./bookEditingServices.php">EDITING</a> <span> <img class="arrow-icon" src="Assets/Images/expand arrow.png" alt=""></span></span>
                        <ul class="dropdown-1">
                            <li><a href="./bookEditingServices.php">Book Editing Services</a></li>
                            <li><a href="./bookReview&Consultation.php">Book Review & Consultation</a></li>
                            <li><a href="./culturalAccuracySensitivityEditorialServices.php">Cultural Accuracy & Sensitivity Editorial Services</a></li>
                        </ul>
                    </li>
                    <li class="toggle"><span><a href="./bookCoachingServices.php">BOOK COACHING</a> <span> <img class="arrow-icon" src="Assets/Images/expand arrow.png" alt=""></span></span>
                        <ul class="dropdown-1">
                            <li><a href="./bookCoachingServices.php">Book Coaching Services </a></li>
                        </ul>
                    </li>
                    <li class="toggle"><span><a href="./ourTeam.php">ABOUT US</a><span> <img class="arrow-icon" src="Assets/Images/expand arrow.png" alt=""></span></span>
                        <ul class="dropdown-1">
                            <li><a href="./ourTeam.php">Our Team</a> </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>

    </nav>
    <section class="our-team-wrapper">
        <h1 class="our-team-heading">Our Ghostwriting, Editing, and Publishing Navigation Team</h1>
        <hr>
        <div class="our-team-img"><img src="assets/Images/Team.png" alt=""></div>
        <div class="our-team-content">
            <div class="sh-heading">Our team of New York Times bestselling writers, ghostwriters, <br> and former acquisitions editors from Big-5 publishers offers authors<br> the very best in talent and publishing expertise.</div>
            <div class="sh-list">
                <ul class="custom-list">
                    <li>Our team approach to the book-writing process offers clients<br> focused attention from multiple industry experts through <br>every step of their publishing journey. </li>
                </ul>
                <ul class="custom-list">
                    <li>You’ll find that our professionalism and personalized client <br>care stand out among an industry dominated by <br>impersonal outsourcing services.</li>
            </div>
        </div>
    </section>
    <section class="team-wrapper">
        <div class="team-heading">
            <p class="highlite1">CASE Team</p>
        </div>
        <div class="team-membercards">

            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Kevin-Anderson-headshot-4549a-800x741.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name"> Kevin Anderson</p>
                            <p id="designation"><em><b>CEO and Editor-in-Chief</b></em></p>
                            <p>##1 New York Times-bestselling editor of 50+ national bestsellers</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/6511772bee15e9a2eae9ead8-HeadshotPro-e1695647026928-800x830.png" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Suzy K Quinn</p>
                            <p id="designation"><em><b>Editorial Director (UK Office)</b></em></p>
                            <p>#Internationally bestselling author with over 1 million copies sold worldwide</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Lex-4540-e1507814380565-800x724.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Alexandra Napolitano</p>
                            <p id="designation"><em><b>Director of Operations</b></em></p>
                            <p>New York Times-bestselling editor and ghostwriter
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Mark-e1598381176926-800x801.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Mark Weinstein
                            </p>
                            <p id="designation"><em><b>Editorial Director, SVP
                                    </b></em></p>
                            <p>New York Times-bestselling ghostwriter and acquisitions editor with 400+ titles</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Becka.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Becka Oliver</p>
                            <p id="designation"><em><b>Director of Talent, VP</b></em></p>
                            <p>Former literary agent at WME</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Jessica-Sindler-headshot-scaled-e1605710512451.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Jessica Sindler</p>
                            <p id="designation"><em><b>Managing Executive Editor</b></em></p>
                            <p>#1 New York Times-bestselling editor and former senior editor at Harper and PRH</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/IMG_0674-e1698842900349-1139x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Adam Strange</p>
                            <p id="designation"><em><b>Executive Editor (UK Office)</b></em></p>
                            <p>#1 New York Times and Sunday Times-bestselling editor, former commissioning editor at Hachette UK</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Screenshot-2023-06-13-091731.webp" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Roger Scholl</p>
                            <p id="designation"><em><b>Senior Executive Editor</b></em></p>
                            <p>#1 New York Times bestselling editor and former Big 5 executive editor with 55+ bestselling titles</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Will-Weisser-Headshot-e1597949667143-1200x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Will Weisser</p>
                            <p id="designation"><em><b>Publishing Consultant</b></em></p>
                            <p>Former executive at Penguin Random House</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Stephen-Power-headshot-797x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Stephen S. Power</p>
                            <p id="designation"><em><b>Executive Editor</b></em></p>
                            <p>#1 New York Times-bestselling editor and former Big 5 executive editor with 500+ titles</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Kasius-Jennifer-headshot-copy-1-800x800.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Jennifer Kasius</p>
                            <p id="designation"><em><b>Executive Editor</b></em></p>
                            <p>#1 New York Times-bestselling editor and former editorial director at Running Press (Hachette)
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/kendra-harpster.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Kendra Harpster</p>
                            <p id="designation"><em><b>Executive Editor</b></em></p>
                            <p>New York Times-bestselling editor and former executive editor at Penguin Random House</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Jaime-Color-800x787.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Jaime Levine</p>
                            <p id="designation"><em><b>Executive Editor</b></em></p>
                            <p>#1 New York Times bestselling editor and former Big 5 executive editor with 35+ New York Times bestsellers</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Cashion-headshot-scaled-e1631720625488-800x800.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">David Cashion</p>
                            <p id="designation"><em><b> Executive Editor</b></em></p>
                            <p>New York Times-bestselling, former Big 5 acquisitions editor
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Ian-scaled-e1598381354125-800x800.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Ian Corson</p>
                            <p id="designation"><em><b>Director of Ghostwriting Services</b></em></p>
                            <p>New York Times-bestselling author
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/09-Erika_Niven-017-headshot-2-scaled-e1701438469935-800x800.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Erika Niven</p>
                            <p id="designation"><em><b>Director of Author Strategy and Corporate Relations
                                    </b></em></p>
                            <!-- <p>#1 New York Times-bestselling editor and former Big 5 executive editor with 500+ titles</p> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Cole-Gustafson-headshot-4542a-800x792.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Cole Gustafson</p>
                            <p id="designation"><em><b>Author Solutions, VP</b></em></p>
                            <p>New York Times-bestselling editor
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Danny-Hoyt.png" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Danny Hoyt
                            </p>
                            <p id="designation"><em><b>Author Solutions, VP</b></em></p>
                            <!-- <p>#1 New York Times-bestselling editor and former senior editor at Harper and PRH</p> -->
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Gomez-Hannah-headshot-1121x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Hannah Gómez
                            </p>
                            <p id="designation"><em><b>Senior Editor, Cultural Accuracy and Sensitivity Editorial Services</b></em></p>
                            <p>Bestselling editor and head of KAA’s cultural accuracy editorial department
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Amanda-Barnett-Headshot-scaled-e1597950804933-1200x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Amanda A. Barnett</p>
                            <p id="designation"><em><b>Managing Senior Editor</b></em></p>
                            <p>New York Times-bestselling, former Big 5 acquisitions editor</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Coyne-Jaime-Heaadshot-1-e1614632250337-1200x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Jaime Coyne</p>
                            <p id="designation"><em><b>Senior Editor</b></em></p>
                            <p>#1 New York Times-bestselling, former Big 5 acquisitions editor</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/SYoung_headshot-902x1200.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Sabrina Young</p>
                            <p id="designation"><em><b>Senior Editor</b></em></p>
                            <p>Former senior editor at Hachette and Callisto</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/LAlila-KAA-headshot-800x800.jpeg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Linda Alila</p>
                            <p id="designation"><em><b>Senior Editor
                                    </b></em></p>
                            <p>New York Times-bestselling, former editor at Harper Leadership</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/ARZ-headshot_1_cropped-e1695051205294.png" alt=""></div>
                        <div class="member-bio">
                            <p id="name"> Adriann Ranta Zurhellen</p>
                            <p id="designation"><em><b>Senior Editor</b></em></p>
                            <p>New York Times-bestselling former agent
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Lauren-Carsley-photo-800x766.jpeg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Lauren Carsley</p>
                            <p id="designation"><em><b>Senior Project Manager</b></em></p>
                            <!-- <p>New York Times-bestselling editor and former executive editor at Penguin Random House</p> -->
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Sáma-Metta-headshot.png" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Metta Sáma</p>
                            <p id="designation"><em><b>Project Manager</b></em></p>
                            <p>Award-winning author and poet
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Virginia-Headshot-e1652274100366.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Virginia King</p>
                            <p id="designation"><em><b>Project Manager
                                    </b></em></p>
                            <p>Former Head of Global Publishing for Twentieth Century Fox</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/leahheadshot-scaled-e1663952026857-800x812.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Leah Scher</p>
                            <p id="designation"><em><b>Project Manager</b></em></p>
                            <!-- <p>#1 New York Times-bestselling editor and former senior editor at Harper and PRH</p> -->
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Moreau-Lee-headshot-e1681327465551.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Lee Moreau</p>
                            <p id="designation"><em><b>Project Manager</b></em></p>
                            <!-- <p>New York Times-bestselling editor and former executive editor at Penguin Random House</p> -->
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Downey-Lauren-headshot-2-2-800x800.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Lauren Downey</p>
                            <p id="designation"><em><b>Project Manager, Editorial</b></em></p>
                            <!-- <p>New York Times-bestselling editor and former executive editor at Penguin Random House</p> -->
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/MRiggs-Headshot-scaled.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Molly Riggs</p>
                            <p id="designation"><em><b>Operations Coordinator</b></em></p>
                            <!-- <p>New York Times-bestselling editor and former executive editor at Penguin Random House</p> -->
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- <div class="team-button"><button>Meet our Team</button></div> -->
    </section>
    <section class="team-wrapper">
        <div class="team-heading">
            <p class="highlite1">Field Support Staff</p>
        </div>
        <div class="team-membercards">

            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Olaf_cropped-800x800.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name"> Olaf</p>
                            <p id="designation"><em><b>Assistant to Lauren Carsley</b></em></p>
                            <p>Olaf's favorite things include French pastry, European cheeses, and sitting on benches.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Gracie-scaled.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Gracie</p>
                            <p id="designation"><em><b>Assistant to Kendra Harpster</b></em></p>
                            <p>Gracie enjoys peanut butter, daily walks in Rock Creek Park, and sunbathing.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Chubby-scaled.jpeg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Chubby</p>
                            <p id="designation"><em><b>Assistant to David Cashion</b></em></p>
                            <p>Chubby is much faster than he looks (or his name implies), but has the composure to win staring contests. He likes fruit of all kinds, Turner Classic Movies, and running head first into the surf.

                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/sadie-e1687984288609.png" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Sadie
                            </p>
                            <p id="designation"><em><b>Assistant to Jaime Levine</b></em></p>
                            <p>Sadie is a special needs "pandora" cat with a host of chronic diseases. Posh, polite, and particular about her food, litter, schedule, and sleeping options, she can turn rowdy and goofy when playing chase or hide 'n seek. When not caterwauling at her roommate/guardian or biting important papers to confetti, she is usually snoozing in the latest pile of hot, clean laundry.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/Screenshot-2023-08-10-at-8.46.00-AM-800x598.png" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Bella</p>
                            <p id="designation"><em><b>Assistant to Kevin Anderson</b></em></p>
                            <p>Marbella “Bella” is a ball-obsessed red lab who loves water and exploring the neighborhood whenever her humans don’t have a ball in hand — or when one of her four mini-humans leaves the front door open.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="member-card">
                <div class="member-description">
                    <a href="">
                        <div class="member-image"><img src="Assets/Images/IMG_9245.jpg" alt=""></div>
                        <div class="member-bio">
                            <p id="name">Chilli</p>
                            <p id="designation"><em><b>Assistant to Adam Strange
                                    </b></em></p>
                            <p>Chilli is frequently to be found sleeping in the hazardous space between coffee cup and notebook, although he can be called upon to spring into action at the merest suggestion there may be a gust of wind to chase in the garden. On the rare occasions when he's ventured outside for more than a few minutes, he can be seen staring back through the patio door.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- <div class="team-button"><button>Meet our Team</button></div> -->
    </section>
    <section class="kaa">
        <div class="heading">
            <h2>Find the Perfect Writer for Your Book</h2>
        </div>
        <div class="text">
            <p>
                Please <a href="#">contact us</a> to discuss your project and learn how our team of editors, <br> ghostwriters, and publishing experts can elevate your book and <br>implement an effective publishing strategy.
            </p>
        </div>

        <!-- <div class="text">
            <p>
                Give us a call to begin your journey to becoming a published author.
            </p>
        </div> -->

        <!-- <div class="text">
            <p>
                Enjoy our <span style="font-weight: 700;">white-glove</span> approach to the book-writing process <br>
                and experience the best in quality, talent, and professionalism.
            </p>
        </div> -->

        <!-- <div class="btn">
            <button type="button">SCHEDULE A CONSULTATION</button>
        </div> -->

    </section>
    <footer class="footer-bottom">

        <div class="footer-wrapper">

            <div class="col-footer">
                <ul>
                    <p class="ftr-bold"><a href="./ghostwritingServices.php" class="dropdown-toggle">Book Writing & <br> Ghostwriting</a></p>
                    <li><a href="./ghostwritingServices.php">Ghostwriting Services</a></li>
                    <li><a href="./business&LeadershipBooks.php">Business & Leadership <br> Books</a></li>
                    <li><a href="./autobiographyBooks.php">Memoir/Autobiography <br> Books</a></li>
                    <li><a href="./health&self-helpBooks.php">Health & Self-Help <br> Books</a></li>
                    <li><a href="./children'sBooks.php">Children’s Books</a></li>
                    <li><a href="./generalNonfiction.php">General Nonfiction</a></li>
                    <li><a href="./fiction.php">Fiction Books</a></li>
                    <li><a href="./bookProposals.php">Book Proposals</a></li>
                </ul>
            </div>

            <div class="col-footer">
                <ul>
                    <p class="ftr-bold" style="padding-bottom: 40px;"><a href="./bookEditingServices.php">Editing</a></p>
                    <li><a href="./bookEditingServices.php">Book Editing <br> Services</a></li>
                    <li><a href="./bookReview&Consultation.php">Book Review & <br> Consultation</a></li>
                    <li><a href="./culturalAccuracySensitivityEditorialServices.php">Cultural <br> Accuracy & <br> Sensitivity <br> Editorial <br> Services</a></li>
                </ul>
            </div>

            <div class="col-footer">
                <ul>
                    <p class="ftr-bold"><a href="./bookCoachingServices.php">Book <br> coaching</a></p>
                    <li><a href="./bookCoachingServices.php">Book Coaching <br> Services</a></li>
                </ul>
            </div>

            <div class="col-footer">
                <ul>
                    <p class="ftr-bold" style="padding-bottom: 40px;"><a href="./ourTeam.php">About Us</a></p>
                    <li><a href="./ourTeam.php">Our Team</a></li>
                </ul>
            </div>
            <div class="col-footer">
                <ul>
                    <p> 1115 Broadway, 10th Floor<br>
                        New York, NY 10010
                    </p>
                    <li class="phone"><a href="tel: +(123) 456 789">+(123) 456 789</a></li>
                    <li class="email"><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
                <button type="button" class="ft-btn counter-btn1">CONTACT US</button>
            </div>

        </div>
        <div class="footer-end">

            <div class="ftr-wrapper">

                <div class="ftr-logo">
                    <img src="Assets/Logos/logo_footer_v3.png" alt="">
                </div>

                <div class="terms">
                    <p>© 2024 Kevin Anderson & Associates Inc. All Rights Reserved <a href="#" style="color: #47BAC3;">Privacy Policy</a> | <a href="#" style="color: #47BAC3;">Terms & <br> Conditions</a> <br> Built by <a href="#" style="color: #47BAC3;">Target Marketing Digital</a></p>
                </div>

                <div class="social-icons">
                    <span><i class="fa-solid fa-phone-flip"></i></span>
                    <span><i class="fa-regular fa-envelope"></i></span>
                    <span><i class="fa-brands fa-facebook-f"></i></span>
                    <span><i class="fa-brands fa-x-twitter"></i></span>
                    <span><i class="fa-brands fa-instagram"></i></span>
                    <span><i class="fa-brands fa-linkedin-in"></i></span>
                </div>

            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js?v=2" defer></script>

</html>