<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pet Vet World">
    <title>Pet Vet World</title>
    <link rel="icon" href="logo.jpg" type="jpg">
    <link rel="preload" as="font" href="./Lora-Regular.ttf" type="font/ttf" crossorigin>
    <link rel="preload" as="font" href="./Lora-Bold.ttf" type="font/ttf" crossorigin>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container-geral">
        <header id="header">
            <button type="button" aria-label="abrir menu" class="header__btn-menu"></button>
            <nav class="header__nav">
                <ul>
                    <li><?php echo "<h4>" . $_SESSION['username'] . "</h4>"; ?></a></option>
                    </li>
                    <li><a href="#lobby">Home</a></li>
                    <li><a href="#specialities">Specialties</a></li>
                    <li><a href="#test">Test</a></li>
                    <li><a href="#team">Meet Our Team</a></li>
                    <li><a href="#query">Appointment</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="http://localhost/Lab-Project/cart/Cart.php">Shop</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <address class="header__redes-social">
                <a href="#"><img src="./logo/icon-instagram.svg" alt="Instagram"></a>
                <a href="#"><img src="./logo/icon-facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="./logo/icon-youtube.svg" alt="Youtube"></a>
            </address>
        </header>
        <main>
            <!-- Home -->
            <section id="lobby">
                <div class="lobby__container">
                    <span class="title">Pet Vet World</span>
                    <div class="lobby__text">
                        <h1 class="title" data-anima="left" data-delay="200">We are helping our clients
                            understand<br>
                            <span>all aspects of pet health</span> <br> and preventative care.
                        </h1>
                        <p class="lobby__paragrafo" data-anima="left" data-delay="400">Pet Vet World
                            cares for dogs and cats <br>with full-service and comprehensive veterinary medicine.</p>
                        <div class="lobby__btns" data-anima="left" data-delay="600">
                            <a href="#" class="btns btn-border">
                                <div class="bg-hover"></div>
                                <p>Results</p>
                            </a>
                            <a href="#" class="btns btn-fill">
                                <div class="bg-hover"></div>
                                <p>Shcedule a Visit</p>
                            </a>
                        </div>
                    </div>
                    <div class="lobby__img" data-anima="translate-left"><img src="./logo/img-home.webp"></div>
                    <address class="lobby__address">
                        <span>35, Kafrul</span>
                        <span>Dhaka</span>
                    </address>
                    <div aria-label="operation" class="lobby__operation" data-anima="left" data-delay="800">
                        <p class="lobby__open-closed">Open Now</p>
                        <div>
                            <p>Regular</p>
                            <p><time datetime="08:00">10AM</time> to <time datetime="20:00">8PM</time></p>
                        </div>
                        <div>
                            <p>Friday-Saturday</p>
                            <p><time datetime="15:00">3PM</time> to <time datetime="20:00">8PM</time></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Fetaures -->
            <section id="values">
                <div class="container">
                    <ul class="values__list">
                        <li>Regular check up</li>
                        <li>Emergency Aid</li>
                        <li>Surgery</li>
                        <li>Grooming</li>
                    </ul>
                </div>
            </section>
            <!-- Specialities -->
            <section id="specialities" class="padding-section">
                <div class="container">
                    <header class="specialities__header" data-anima="left">
                        <h2 class="title specialities__title">Specialties</h2>
                        <a href="#" class="btns btn-fill">
                            <div class="bg-hover"></div>
                            <p>Shcedule a Visit</p>
                        </a>
                    </header>
                    <ul class="specialities__list">
                        <li><a href="#"> General Clinic</a></li>
                        <li><a href="#">Nephrology</a></li>
                        <li><a href="#">Nutrition</a></li>
                        <li><a href="#">Endocrinology</a></li>
                        <li><a href="#">Dermatology</a></li>
                        <li><a href="#">Oncology</a></li>
                        <li><a href="#">Cardiology</a></li>
                        <li><a href="#">Neurology</a></li>
                        <li><a href="#">Acupunture</a></li>

                    </ul>
                </div>
                <div class="specialities__bg-blob" data-anima="translate-right"><img src="./logo/blob-2.svg">
                </div>
            </section>
            <!-- Test -->
            <section id="test" class="padding-section">
                <div class="container">
                    <header class="test__header" data-anima="right">
                        <h2 class="title">Test</h2>
                        <a href="#" class="btns btn-border">
                            <div class="bg-hover"></div>
                            <p>Book your Test</p>
                        </a>
                    </header>
                    <ul class="test__list">
                        <li><a href="#">Blood Test</a></li>
                        <li><a href="#">Urine Test</a></li>
                        <li><a href="#">Ecocardiogram</a></li>
                        <li><a href="#">Ultrasonography</a></li>
                        <li><a href="#">Radiography</a></li>
                        <li><a href="#">Blood Pressure</a></li>
                    </ul>
                </div>
                <div class="test__offset" data-anima="left"><img src="./logo/linhas.svg" alt=""></div>
            </section>
            <!-- Team -->
            <section id="team" class="padding-section">
                <div class="container">
                    <header data-anima="translate-up">
                        <h2 class="title">Meet our Team</h2>
                    </header>
                    <div class="team__container-list">
                        <div class="team__btns-list">
                            <button type="button" class="btn-ant disabled" aria-label="mover slide para esquerda"><img src="./logo/seta-left.svg" alt=""></button>
                            <button type="button" aria-label="mover slide para direita" class="btn-prox"><img src="./logo/seta-right.svg" alt=""></button>
                        </div>
                        <div class="team__container-slide-list">
                            <ul class="team__list">
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/shithi.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Shithi</p>
                                            <p>Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/hasan.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Hasan</p>
                                            <p>Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/mim.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Mim</p>
                                            <p>Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/prattay2.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Prattay</p>
                                            <p>Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/Asha.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Asha</p>
                                            <p>Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/mehadi.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Mehadi</p>
                                            <p>Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="team__img">
                                            <img src="./logo/mohon.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Mohon</p>
                                            <p>Assst. Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <div class="team__img">
                                            <img src="./logo/Maruf.jpg">
                                        </div>
                                        <div class="team__infos">
                                            <p class="team__nome">Maruf</p>
                                            <p>Assst. Veterinary</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team__bg-blob" data-anima="translate-left"><img src="./logo/blob-1.svg" alt="">
                </div>
                <div class="team__bg-linhas" data-anima="translate-bottom"><img src="./logo/linhas.svg" alt=""></div>
            </section>
            <!-- About -->
            <section id="about">
                <div class="container">
                    <div class="about__txts padding-section" data-anima="left">
                        <h2 class="title">About Us</h2>
                        <p>Pet Vet World cares for dogs and cats with full-service and comprehensive veterinary
                            medicine. Home to a modern, fully-equipped facility on Dhaka, our doctors and staff serve
                            pets and their families.
                        </p>
                    </div>
                    <div class="about__img" data-anima="translate-up">
                        <img src="./logo/img-about.webp">
                    </div>
                </div>
            </section>
            <!-- Book Appoinment -->
            <section id="query" class="padding-section">
                <div class="container">
                    <header data-anima="translate-up">
                        <h2 class="title">Want to book an Appointment?</h2>
                        <p class="padding-txt">Kindly fill this form</p>
                    </header>
                    <div class="query__container">
                        <form action="appointment.php" method="post" class="query__form">
                            <div class="query__campo-form">
                                <label for="Name" class="query__label">Your Name</label>
                                <input type="text" name="name" id="Name" placeholder="HP">
                            </div>
                            <div class="query__campo-form">
                                <label for="email" class="query__label">Write Your Mail</label>
                                <input type="email" name="email" id="email" placeholder="ana@email.com">
                            </div>
                            <div class="query__campo-form">
                                <label for="number" class="query__label">Mobile Number</label>
                                <input type="text" name="number" id="number" placeholder="+880">
                            </div>
                            <div class="query__campo-form">
                                <label for="subject" class="query__label">Write Your Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="Write Your Subject...">
                            </div>
                            <div class="query__campo-form">
                                <label for="message" class="query__label">message</label>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Please Write With Deatails..."></textarea>
                            </div>
                            <button type="submit" class="btns btn-fill" name="send">
                                <div class="bg-hover"></div>
                                <p>Submit Appointment</p>
                            </button>
                        </form>
                        <address>
                            <div class="query__contract-feild">
                                <p class="query__label">Address</p>
                                <div>
                                    35, Kafrul,<br>
                                    Dhaka <br>
                                    +880-1899999999<br>
                                </div>
                            </div>
                            <div class="query__contract-feild">
                                <p class="query__label">Telephone </p>
                                <div>
                                    02-9856867
                                </div>
                            </div>
                            <div class="query__contract-feild">
                                <p class="query__label">Email</p>
                                <div>
                                    petvetw@email.com
                                </div>
                            </div>
                            <div class="query__contract-feild">
                                <p class="query__label">Socials</p>
                                <ul class="query__redes-social">
                                    <li><a href="#"><img src="./logo/icon-instagram.svg" alt="instagram"></a></li>
                                    <li><a href="#"><img src="./logo/icon-facebook.svg" alt="facebook"></a></li>
                                    <li><a href="#"><img src="./logo/icon-youtube.svg" alt="youtube"></a></li>
                                </ul>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="team__bg-blob-1" data-anima="translate-left"><img src="./logo/blob-3.svg" alt="">
                </div>
                <div class="team__bg-blob-2" data-anima="translate-bottom"><img src="./logo/blob-2.svg" alt=""></div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="footer__infos">
                    <nav class="footer__menu">
                        <p class="footer__titles">Menu</p>
                        <ul>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Specialties</a></li>
                                <li><a href="#">Exam</a></li>
                                <li><a href="#">Meet Our Team</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="http://localhost/clinica-vet-main/cart/Cart.php">Shop</a></li>

                            </ul>
                        </ul>
                    </nav>
                    <address>
                        <div class="footer__address-item">
                            <p class="footer__titles">Address</p>
                            <div>
                                35, Kafrul, Dhaka<br>
                                +880-1899999999<br>
                            </div>
                        </div>
                        <div class="footer__address-item">
                            <p class="footer__titles">Telephone</p>
                            <div>
                                02-9856867
                            </div>
                        </div>
                    </address>
                    <address>
                        <div class="footer__address-item">
                            <p class="footer__titles">Email</p>
                            <div>
                                petvetw@email.com
                            </div>
                        </div>
                        <div class="footer__address-item">
                            <p class="footer__titles">Socials</p>
                            <ul class="footer__redes-social">
                                <li><a href="#"><img src="logo/icon-instagram-w.svg" alt="instagram"></a></li>
                                <li><a href="#"><img src="logo/icon-facebook-w.svg" alt="facebook"></a></li>
                                <li><a href="#"><img src="logo/icon-youtube-w.svg" alt="youtube"></a></li>
                            </ul>
                        </div>
                    </address>
                </div>
                <span class="footer__made-by">Copyright © Pet Vet World </span>
                <span class="footer__made-by">Developed By HP</span>
            </div>
        </footer>
    </div>
    <script src="script2.js"></script>
</body>

</html>