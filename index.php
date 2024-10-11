<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/ecb3190b9d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
</head>

<body>

<div id="overlay"></div>

<div class="">  

<!-- COOKIES -->

    <div id="cookieContainer">
        <div class="cookieTopSection">
            <h3>Cookies Policy</h3>
        </div>
        <div class="cookieMidSection">
            <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "Privacy Policy" otherwise click "Accept Cookies" to enter.</p>
        </div>
        <div class="cookieBottomSection">
            <a href="" id="cookieChange" class="cookieButton">CHANGE SETTINGS</a>
            <a href="" id="cookieAccept" class="cookieButton">ACCEPT COOKIES</a>
        </div>
    </div>

<!-- NAVIGATION -->

    <?php
        require "PHP/navigation.php";
    ?>
        
<!-- IMAGE BANNER SECTION -->

        <div class="infoBanner">
            <div class="bannerSlider">
                <img src="Assets/Banner Image.png" alt="Netmatters Building" class="infoBannerItem bannerImage">
                <img src="Assets/Banner Bespoke.png" alt="Bespoke Software Image" class="infoBannerItem bannerImage">
                <img src="Assets/Banner IT Support.png" alt="Building PC Image" class="infoBannerItem bannerImage">
                <img src="Assets/Banner Digital Marketing.png" alt="Marketing Team Image" class="infoBannerItem bannerImage">
                <img src="Assets/Banner Telecoms Services.png" alt="Phone Image" class="infoBannerItem bannerImage">
                <img src="Assets/Banner web design.png" alt="Web Developer Image" class="infoBannerItem bannerImage">
                <img src="Assets/Banner Cyber Security.png" alt="Security Lock Image" class="infoBannerItem bannerImage"> 
            </div>
            <div id="bannerItemsContainer">
            <div class="overlayingBannerItems">
                <div class="bannerInfo" id="slideTechCompany">
                    <H1 class="bold">The East Of England's Leading Technology Company</H1>
                    <p class="bold">Performance-driven digital and technology services with complete transparency.</p>
                    <button type="button" class="purpleButton clickable bannerButton">WHY CHOOSE US? &rarr;</button>
                </div>
                <div class="bannerInfo" id="slideBespokeSoftware">
                    <H1 class="bold">Bespoke Software</H1>
                    <p class="bold">Delivering expert bespoke software solutions accross a range of industries.</p>
                    <button type="button" class="clickable bannerButton">FIND OUT MORE &rarr;</button>
                </div>
                <div class="bannerInfo" id="slideITSupport">
                    <H1 class="bold">IT Support</H1>
                    <p class="bold">Fast and cost-effective IT support services for your business.</p>
                    <button type="button" class="blueButton clickable bannerButton">FIND OUT MORE &rarr;</button>
                </div>
                <div class="bannerInfo"  id="slideDigitalMarketing">
                    <H1 class="bold">Digital Marketing</H1>
                    <p class="bold">Generating your new business through results-driven marketing activities.</p>
                    <button type="button" class="greenButton clickable bannerButton">FIND OUT MORE &rarr;</button>
                </div>
                <div class="bannerInfo" id="slideTelecoms">
                    <H1 class="bold">Telecoms Services</H1>
                    <p class="bold">A new approach to connectivity, see how we can help your business.</p>
                    <button type="button" class="redButton clickable bannerButton">FIND OUT MORE &rarr;</button>
                </div>
                <div class="bannerInfo" id="slideWebDesign">
                    <H1 class="bold">Web Design</H1>
                    <p class="bold">For businesses looking to make a strong and effective first impression.</p>
                    <button type="button" class="purpleButton clickable bannerButton">FIND OUT MORE &rarr;</button>
                </div>
                <div class="bannerInfo" id="slideSecurity">
                    <H1 class="bold">Cyber Security</H1>
                    <p class="bold">Keeping businesses and their customers sensitive information protected.</p>
                    <button type="button" class="redButton clickable bannerButton">FIND OUT MORE &rarr;</button>
                </div>
                <div class="sliderButtonContainer">
                    <button class="sliderButton"></button>
                    <button class="sliderButton"></button>
                    <button class="sliderButton"></button>
                    <button class="sliderButton"></button>
                    <button class="sliderButton"></button>
                    <button class="sliderButton"></button>
                    <button class="sliderButton"></button>
                </div>
            </div>
        </div>
        </div>

        <!-- OUR SERVICES -->

        <div id="serviceMenu" class="poppins-light globalContainer">
            <div id="serviceHeader">
            <H1 id="services">Our Services</H1>
            <h2 id="ourWorkLaptop">View Our Work &rarr;</h2>
            </div>

            <div class="container">
                <!-- <H1 id="servicesGrid" class="poppins-light">Our Services</H1> -->
                <div id="firstRow">
                <div class="item item-1 clickable"> 
                    <img src="Assets/Bespoke Software Logo.png" alt="Bespoke Software Logo" id="bespokeLogo">
                    <img src="Assets/Bespoke Software Logo hover.png" alt="Bespoke Software Logo" id="bespokeLogoHover" class="hide">
                    <h3>Bespoke Software</h3>
                    <p>Bespoke software solutions for all your business needs including integrations and reporting.</p>
                    <button type="button" class="tagButton">Read More</button>
               </div>

               <div class="item item-2 clickable">
                    <img src="Assets/IT Support Logo.png" alt="IT Support Logo" id="itLogo">
                    <img src="Assets/IT Support Logo hover.png" alt="IT Support Logo" id="itLogoHover" class="hide">
                    <h3>IT Support</h3>
                    <p>Fully managed IT support and consultancy packages tailored to meet your exact business needs.</p>
                    <button type="button" class="tagButton blueButton" id="itButton">Read More</button>
               </div>

               <div class="item item-3 clickable"> 
                    <img src="Assets/Digital Marketing Logo.png" alt="Digital Marketing Logo" id="marketingLogo">
                    <img src="Assets/Digital Marketing Logo hover.png" alt="Digital Marketing Logo" id="marketingLogoHover" class="hide">
                    <h3>Digital Marketing</h3>
                    <p>Driven brand awareness &amp; ROI through creative digital marketing campaigns.</p>
                    <button type="button" class="tagButton greenButton">Read More</button>
               </div>
               </div>

               <div id="secondRow">
               <div class="item item-4 clickable">
                    <img src="Assets/Telecom Services Logo.png" alt="Telecom Services Logo" id="telecomLogo">
                    <img src="Assets/Telecom Services Logo hover.png" alt="Telecom Services Logo" id="telecomLogoHover" class="hide"> 
                    <h3>Telecom Services</h3>
                    <p>Business telephony solutions including mobile &amp; connectivity solutions.</p>
                    <button type="button" class="tagButton maroon">Read More</button>
               </div>

               <div class="item item-5 clickable">
                    <img src="Assets/Web Design Logo.png" alt="Web Design Logo" id="designLogo">
                    <img src="Assets/Web Design Logo hover.png" alt="Web Design Logo" id="designLogoHover" class="hide"> 
                    <h3>Web Design</h3>
                    <p>User centric design for business looking to make a lasting impression.</p>
                    <button type="button" class="tagButton purpleButton">Read More</button>
               </div>

               <div class="item item-6 clickable">
                    <img src="Assets/Cyber Security Logo.png" alt="Cyber Security Logo" id="cyberLogo">
                    <img src="Assets/Cyber Security Logo hover.png" alt="Cyber Security Logo" id="cyberLogoHover" class="hide"> 
                    <h3>Cyber Security</h3>
                    <p>Prevention, testing, consultancy &amp; breach management services</p>
                    <button type="button" class="tagButton redButton">Read More</button>
               </div>

               <div class="item item-7 clickable">
                    <img src="Assets/Developer Logo.png" alt="Developer Training Logo" id="devLogo">
                    <img src="Assets/Developer Logo hover.png" alt="Developer Training Logo" id="devLogoHover" class="hide">  
                    <h3>Developer Training</h3>
                    <p>Web design &amp; software courses designed to secure a job in tech.</p>
                    <button type="button" class="tagButton maroon">Read More</button>
               </div>
                </div>
               
            </div>
            <div class="ourWork clickable">
                <h2>View Our Work</h2>
                <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
            </div>
        </div>

        <div class="section">
            <div class="carouselContainer">
                <div class="owl-carousel owl-theme" id="ourWorkaccreditations">
                    <img src="Assets/norfolk carbon charter.png" alt="norfolk carbon award" class="carouselItem">
                    <img src="Assets/citation information security iso certification.png" alt="Information Security Award" class="carouselItem">
                    <img src="Assets/ISO Certification.png" alt="Quality Management Award" class="carouselItem">
                    <img src="Assets/cyberessentials.jpg" alt="Cyber Essentials Awards" class="carouselItem">
                    <img src="Assets/future-50.jpg" alt="future 50 award" class="carouselItem">
                    <img src="Assets/futuregrowthaward.jpg" alt="invest future award" class="carouselItem">
                    <img src="Assets/google partner.jpg" alt="google partner" class="carouselItem">
                    <img src="Assets/livingwageemployer.png" alt="living wage award" class="carouselItem">
                    <img src="Assets/norfolkprohelp.png" alt="norfolk pro help award" class="carouselItem">
                    <img src="Assets/princess-royal-training-bw.png" alt="princess royal training award" class="carouselItem">
                    <img src="Assets/prompt payment code.jpg" alt="prompt payment award" class="carouselItem">
                    <img src="Assets/skillsoftommorowaward.jpg" alt="skills of tommorow award" class="carouselItem">
                </div>
            </div>
        </div>

<!-- WELCOME TO NETMATTERS SECTION -->

        <div id="welcome">
            <h1 id="welcomeHeading">Welcome to Netmatters</h1>
            <div class="globalContainer">
                <div id="welcomeGrid">
                <div class="welcomeSections" id="welcomeLeftSection">
            <div id="welcomeLeftSide" class="welcomeItems">
                <h1 class="headerDesktop" id="headerItem1Desktop">Welcome to Netmatters</h1>
                <p id=wPara1 class="bold">Netmatters is a leading Bespoke Software, IT Support, and Digital Marketing company based in the East of England with offices in Cambridge, Wymondham, and Great Yarmouth.</p>
                <p id=wPara2>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                <p id="wPara3">We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                <div id="leftButtons" class="welcomeButtons">
                    <button type="button" class="darkButton clickable" id="chooseUs">Why Choose Us
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                    </button>
                    <button type="button" class="darkButton clickable" id="cultureButton">Our Culture
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                    </button>
                </div>
            </div>
                </div>
            

            <div id="clientThoughts">
                <H1>What Our Clients Think</H1>
            </div>
            <div class="welcomeSections" id="welcomeRightSection">
            <div id="welcomeRightSide" class="welcomeItems">
                <H1 class="headerDesktop" id="headerItem2Desktop">What Our Clients Think</H1>
                <div id="stars">
                    <img src="Assets/star.png" alt="Star Image">
                    <img src="Assets/star.png" alt="Star Image">
                    <img src="Assets/star.png" alt="Star Image">
                    <img src="Assets/star.png" alt="Star Image">
                    <img src="Assets/star.png" alt="Star Image">
                </div>
                    <p id="clientQoute" class="bold italic">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</p>
                    <div id="clintInfo">
                        <p id="client">Eleanor Bishop, Head of Marketing - <em class="bold">Ashcroft Partnership LLP</em></p>
                    </div>
                <div id="rightButtons" class="welcomeButtons">
                    <button id="googleButton" class="blueButton clickable">Google Reviews
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                    </button>
                    <button id="trustButton" class="darkGreenButton clickable">Trustpilot Reviews
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                    </button>
                </div>
            </div>
            </div>
                </div>
            </div>
        </div>

<!-- NEWS SECTION -->

        <div id="newsSection" class="globalContainer">
            <div id="newsTitleContainer">
            <div class="newsTitle">
                <h1>Latest News</h1>
                <H2 class="biggerDevice">View All
                    <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                </H2>
            </div>    
            </div>
            <div class="newsContainer">
                <div class="item newsItem-1 clickable">
                    <div class="topSection">
                        <a href="" class="newsCategory redButton">News</a>
                        <img src="Assets/junes-notables.png" alt="June Noteable">
                    </div>
                    <div class="midSection">
                        <H3 id="juneNoteable">June's Noteable 2024 - Celebrating Our Team</H3>
                        <p>June Notables 2024 Celebrating the achievements and dedication of our staff, at Netmatters, we put a...</p>
                        <button type="button" class="redButton">Read More</button>
                    </div>
                    <div class="bottomSection">
                        <img src="Assets/netmatters mini logo.png" alt="Netmatters no text logo">
                        <div class="postDate">
                            <p class="postedBy">Posted by Netmatters</p>
                            <p>8th July 2024</p>  
                        </div>   
                    </div>
                </div>

                <div class="item newsItem-2 clickable">
                    <div class="topSection">
                        <a href="" class="newsCategory">News</a>
                        <img src="Assets/elliott-peacock.png" alt="Latest Hero">
                    </div>
                    <div class="midSection">
                        <H3>Elliott Peacock - Netmatters 10 Year Hero</H3>
                        <p>Elliott Peacock - Netmatters 10 Year Hero</p>
                        <p>Today, we celebrate the brilliant accomplishments of Ellio...</p>
                        <button type="button">Read More</button>
                    </div>
                    <div class="bottomSection">
                        <img src="Assets/netmatters mini logo.png" alt="Netmatters no text logo">
                        <div class="postDate">
                            <p class="postedBy">Posted by Netmatters</p>
                            <p>5th July 2024</p>
                        </div>     
                    </div>
                </div>

                <div id="thirdNewsItem" class="item newsItem-3 clickable">
                    <div class="topSection">
                        <a href="" class="newsCategory blueButton">News</a>
                        <img src="Assets/tom-lancaster.png" alt="Latest Hero">
                    </div>
                    <div class="midSection">
                        <H3>Tom Lancaster - Netmatters 10 Year Hero</H3>
                        <p>Tom Lancaster - Netmatters 10 Year Hero</p>
                        <p>Today, we celebrate the brilliant accomplishments of Tom Lan...</p>
                        <button type="button" class="blueButton">Read More</button>
                    </div>
                    <div class="bottomSection">
                        <img src="Assets/netmatters mini logo.png" alt="Netmatters no text logo">
                        <div class="postDate">
                            <p class="postedBy">Posted by Netmatters</p>
                            <p>1st July 2024</p>
                        </div>     
                    </div>
                </div>
            </div>
            <H2 class="mobileOnly">View All
                <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
            </H2>

        </div>

        <div id="newsAccreditations" class="owl-carousel owl-theme">
                
            <div class="accreditationsContainer" id="blackSwanInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Black Swan Care Group</h3>
                        <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/black_swan_logo.png" alt="Black Swan Logo" id="blackSwan">
            </div>
            
            <div class="accreditationsContainer" id="craneInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Crane Garden Buildings</h3>
                        <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                    </div>
                </div>
            
                <img src="Assets/crane logo.png" alt="Crane Logo">
            </div>
            
            <div class="accreditationsContainer" id="girlGuidingrInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Girl Guiding Anglia</h3>
                        <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/girl_guides_anglia_logo.png" alt="girl guides logo">
            </div>

            <div class="accreditationsContainer" id="ashcroftInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Ashcroft Partnership LLP</h3>
                        <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnetship LLP in 2020 and are one of the top chartered accountancy firms in cambridge, advising entrepreneurs and families.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/ashcroftlogo.png" alt="Ashcroft logo" id="ashcroftLogo">
            </div>

            <div class="accreditationsContainer" id="beatInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>BEAT</h3>
                        <p>The UK's eating disorder charity founded in 1989.</p>
                    </div>
                </div>
            
                <img src="Assets/beat_logo.png" alt="Beat logo">
            </div>

            <div class="accreditationsContainer" id="busseysInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Busseys</h3>
                        <p>One of the UK's leading Ford dealerships.</p>
                    </div>
                </div>
            
                <img src="Assets/busseys_logo.png" alt="Busseys logo">
            </div>

            <div class="accreditationsContainer" id="gdstInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>GDST</h3>
                        <p>The <em>Girls' Day School Trust (GDST)</em> is the UK's leading family of 25 independent girls' schools.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/girls_day_school_trust_logob.png" alt="GDST logo">
            </div>

            <div class="accreditationsContainer" id="howesInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Howes Percival</h3>
                    </div>
                </div>
            
                <img src="Assets/howespercivallogo.png" alt="Howes logo">
            </div>

            <div class="accreditationsContainer" id="oneTravellerInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>One Traveller</h3>
                        <p><em>One Traveller</em>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/onetravellerlogo_white_figuire.png" alt="One Traveller logo">
            </div>

            <div class="accreditationsContainer" id="searlesInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Searles Leisure Resort</h3>
                        <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resport for families.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/searles_logo.jpg" alt="Searles Leisure Resort logo">
            </div>

            <div class="accreditationsContainer" id="surveySolutionsInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Survey Solutions</h3>
                    </div>
                </div>
            
                <img src="Assets/survey_solutions_logo.png" alt="Survey Solutions logo">
            </div>

            <div class="accreditationsContainer" id="sweetzyInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Sweetzy</h3>
                        <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                        <a href="" class="accreditationsButton">VIEW OUR CASE STUDY
                            <i class="fa-solid fa-arrow-right" id="arrowRight"></i>
                        </a>
                    </div>
                </div>
            
                <img src="Assets/sweetzy_logo.png" alt="Sweetzy logo">
            </div>

            <div class="accreditationsContainer" id="xupesInfo">
                <div class="accreditationsDetails">
                    <div class="accreditationsDetailsItems">
                        <h3>Xupes</h3>
                    </div>
                </div>
            
                <img src="Assets/xupes_logo.png" alt="Xupes logo">
            </div>

        </div>

         <!-- SITE LINKS AND SOCIAL MEDIA SECTION -->

        <div class="infoSection poppins-light">
            <div class="smSectionContainer globalContainer">
                <div id="smLeftSide">
            <img src="Assets/Netmatters logo white.png" alt="Netmatters logo white" id="whiteNetmattersLogo">
            <div class="socialMedia">
                <H3>FOLLOW US ON:</H3>
                    <div id="socialButtonContainer">
                        <button type="button" class="socials darkButton clickable" id="facebook">
                            <img src="Assets/facebook.png" alt="facebook logo">
                            <a href="https://www.facebook.com/netmatters/"></a>
                        </button>
                        <button type="button" class="socials darkButton clickable" id="Linkedin">
                            <img src="Assets/Linkedin logo.png" alt="Linkedin logo">
                            <a href="https://www.linkedin.com/company/netmatters-ltd/"></a>
                        </button>
                        <button type="button" class="socials darkButton clickable" id="X">
                            <img src="Assets/X logo.png" alt="X logo">
                            <a href="https://x.com/netmattersltd"></a>
                        </button>
                        <button type="button" class="socials darkButton clickable" id="Instagram">
                            <img src="Assets/instagram logo.png" alt="Instagram logo">
                            <a href="https://www.instagram.com/netmattersltd/"></a>
                        </button>
                    </div>
            </div>
        </div>


            <div class="biggerDeviceSiteLinks">
            <div class="aboutMatters">
                <H3>ABOUT NETMATTERS</H3>
                <div class="netmattersLinks">
                <a href="https://www.netmatters.co.uk/news" class="clickable">News</a>
                <a href="https://www.netmatters.co.uk/our-careers" class="clickable">Our Careers</a>
                <a href="https://www.netmatters.co.uk/team" class="clickable">Our Team</a>
                <a href="https://www.netmatters.co.uk/contact-us" class="clickable">Contact Us</a>
                <a href="https://www.netmatters.co.uk/privacy-policy" class="clickable">Privacy Policy</a>
                <a href="https://www.netmatters.co.uk/cookie-policy" class="clickable">Cookie Policy</a>
                <a href="https://www.netmatters.co.uk/data-retention-disposal-policy" class="clickable">Data Retention &amp; Disposal Policy</a>
                <a href="https://www.netmatters.co.uk/cctv-policy" class="clickable">CCTV Policy</a>
                <a href="https://www.netmatters.co.uk/our-culture/environmental-policy" class="clickable">Environmental Policy</a>
                <a href="https://www.netmatters.co.uk/terms-and-conditions" class="clickable">Terms &amp; Conditions</a>
                </div>
            </div>

            <div class="ourServices">
                <H3>OUR SERVICES</H3>
                <div class="netmattersLinks">
                <a href="https://www.netmatters.co.uk/bespoke-software" class="clickable">Bespoke Software</a>
                <a href="https://www.netmatters.co.uk/it-support" class="clickable">IT Software</a>
                <a href="https://www.netmatters.co.uk/digital-marketing" class="clickable">Digital Marketing</a>
                <a href="https://www.netmatters.co.uk/telecoms-services" class="clickable">Telecoms Services</a>
                <a href="https://www.netmatters.co.uk/web-design" class="clickable">Web Design</a>
                <a href="https://www.netmatters.co.uk/cyber-security" class="clickable">Cyber Security</a>
                <a href="https://www.netmatters.co.uk/train-for-a-career-in-tech" class="clickable">Developer Training</a>
                </div>
            </div>

            <div class="ourIndustries">
                <h3>OUR INDUSTRIES</h3>
                <div class="netmattersLinks">
                <a href="https://www.netmatters.co.uk/industries/financial-services" class="clickable">Financial Services</a>
                <a href="https://www.netmatters.co.uk/industries/construction" class="clickable">Construction</a>
                <a href="https://www.netmatters.co.uk/industries/e-commerce" class="clickable">Retail &amp; E-commerce</a>
                <a href="https://www.netmatters.co.uk/industries/non-profits" class="clickable">Non-Profits</a>
                <a href="https://www.netmatters.co.uk/industries/smes" class="clickable">SME's</a>
                <a href="https://www.netmatters.co.uk/industries/healthcare" class="clickable">Healthcare</a>
                <a href="https://www.netmatters.co.uk/industries/education-training" class="clickable">Education &amp; Training</a>
                <a href="https://www.netmatters.co.uk/industries/travel-leisure" class="clickable">Travel &amp; Leisure</a>
                </div>
            </div>

            <div class="Locations">
                <h3>LOCATIONS</h3>
                <div class="netmattersLinks">
                <a href="https://www.netmatters.co.uk/cambridge-office" class="clickable">Cambridge Office</a>
                <a href="https://www.netmatters.co.uk/wymondham-office" class="clickable">Wymondham Office</a>
                <a href="https://www.netmatters.co.uk/yarmouth-office" class="clickable">Yarmouth Office</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

</div> 

<script src="JS/cookies.js"></script>
<script src="JS/bannerSlider.js"></script>
<script src="JS/sideMenu.js"></script>
<script src="JS/stickyNavBar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="JS/accreditationSlider.js"></script>

</body>

<!-- COPYRIGHT SECTION -->

<footer id="copyrightSection">
    <div id="coprightInfo" class="globalContainer">
        <p id="netmattersCopyright">&copy; Copyright Netmatters 2024.</p>
        <p id="rights">All rights reserved.</p>
        <p id="hyphen" class="biggerDevice">-</p>
        <p id="sitemap">Sitemap</p>
    </div>
</footer>
</html>