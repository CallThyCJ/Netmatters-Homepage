<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/normalize.css">
    <script src="https://kit.fontawesome.com/ecb3190b9d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- database include -->
     <?php
        include "../Includes/db_connection.php";
     ?>
</head>

<body>

    <!-- NAVIGATION -->

    <?php
        require "../Includes/navigation.php";
    ?>

    <!-- OUR OFFICES -->

    <div id="officesTitle" class="globalContainer">
        <h2>Our Offices</h2>
    </div>

    <div id="officeCardSection" class="globalContainer">
        <div id="officeCardContainer">

            <div class="officeCard">
                <div class="officeTopSection">
                    <img src="" alt="">
                </div>

                <div class="officeMidSection">
                    <h3>Cambridge Office</h3>
                    <p>Unit 1.31,
                        <br>
                       St John's Innovation Centre,
                        <br>
                       Cowley Road, Milton,
                        <br>
                       Cambridge,
                        <br>
                       CB4 0WS    
                    </p>
                </div>

                <div class="officeBottomSection">
                    <a href="tel:01223375772">01223 37 57 72</a>

                    <a>VIEW MORE</a>
                </div>
            </div>

            <div class="officeCard">
                <div class="officeTopSection">
                    <img src="" alt="">
                </div>

                <div class="officeMidSection">
                    <h3>Wymondham Office</h3>
                    <p>Unit 15,
                        <br>
                       Penfold Drive,
                        <br>
                       Gateway 11 Business Park,
                        <br>
                       Wymondham, Norfolk,
                        <br>
                       NR18 0WZ    
                    </p>
                </div>

                <div class="officeBottomSection">
                    <a href="tel:01603704020">01603 70 40 20</a>

                    <a>VIEW MORE</a>
                </div>
            </div>

            <div class="officeCard">
                <div class="officeTopSection">
                    <img src="" alt="">
                </div>

                <div class="officeMidSection">
                    <h3>Great Yarmouth Office</h3>
                    <p>Suite F23,
                        <br>
                       Beacon Innovation Centre,
                        <br>
                       Beacon Park, Gorleston,
                        <br>
                       Great Yarmouth, Norfolk,
                        <br>
                       NR31 7RA    
                    </p>
                </div>

                <div class="officeBottomSection">
                    <a href="tel:01603704020">01493 60 32 04</a>

                    <a>VIEW MORE</a>
                </div>
            </div>

        </div>
    </div>

    <!-- CONTACT SECTION -->

    <div id="contactUsSection" class="globalContainer">
        
        <div id="contactInfoContainer">
            <p>Email us on:</p>
            <a href="">sales@netmatters.com</a>
            <p>Business hours:</p>
            <p>Monday - Friday 07:00 - 18:00</p>
        </div>

        <div id="ItSupportContainer">
            <h4>Out of Hours IT Support</h4>
        </div>

        <form action="POST">

            <label for="name"></label>
            <input type="text" name="name">

            <label for="company">Company Name</label>
            <input type="text" name="company">

            <label for="email"></label>
            <input type="text" name="email">

            <label for="telephone"></label>
            <input type="text" name="telephone">

            <label for="message"></label>
            <textarea name="message" id=""></textarea>


            <div class="privacyConfirmation">
                <span class="tickBox"></span>
                <p>Please tick this box if you wish to receive marketing information from us. Please see our <em>Privacy Policy</em> for more information on how we keep your data safe.</p>
            </div>

            <p>This site is protected by reCAPTCHA and Google <em>Privacy Policy</em> and <em>Terms of Service</em> apply.</p>

            <p>Fields Required</p>

            <button>SEND ENQUIRY</button>

        </form>

    </div>


    <!-- SITE LINKS AND SOCIAL MEDIA SECTION -->

    <?php
        require "../Includes/siteLinks.php";
    ?>

    <!-- COPYRIGHT FOOTER SECTION -->

    <?php
        require "../Includes/footer.php";
    ?>

</body>
</html>