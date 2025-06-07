<?php
include(__DIR__ . '/../includes/header.php'); ?>

<section class="hero text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="hero-content">
                    <h1>Start Your Journey in Technology Field</h1>
                    <p>Learn from industry experts and enhance your technical skills with our comprehensive programs in Information Technology, Computer Science, and Computer Engineering.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="courses.php" class="btn btn-primary btn-lg">Explore Courses</a>
                        <a href="about.php" class="btn btn-gold btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="access-week bg-light">
    <div class="container">
        <h2 class="text-center">Access Week Events</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="mobile-legends">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/Mobile Legend Tournament/483528042_122216424752193014_5799699949102270715_n.jpg" alt="Mobile Legend Tournament" class="event-thumbnail mb-3">
                            <h5>Mobile Legend Tournament</h5>
                            <p class="text-muted">Compete in our exciting Mobile Legends tournament and prove your gaming skills!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="film-showing">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/Film Showing/483526163_122216412950193014_1924728599704905832_n.jpg" alt="Film Showing" class="event-thumbnail mb-3">
                            <h5>Film Showing</h5>
                            <p class="text-muted">Experience captivating stories through our curated film screenings.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="mini-concert">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/Mini Concert/482029784_122216012330193014_2725955843258394228_n.jpg" alt="Mini Concert" class="event-thumbnail mb-3">
                            <h5>Mini Concert</h5>
                            <p class="text-muted">Enjoy live performances from talented artists in our mini concert event.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="quiz-bee">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/quiz bee/482252604_122215947398193014_6481536838114114037_n.jpg" alt="Quiz Bee" class="event-thumbnail mb-3">
                            <h5>Quiz Bee Showdown</h5>
                            <p class="text-muted">Test your knowledge in our lower and higher year quiz bee competition.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="programming">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/c++ programming/482032989_122216372744193014_4653813605510438804_n.jpg" alt="Programming Competition" class="event-thumbnail mb-3">
                            <h5>Programming Competition</h5>
                            <p class="text-muted">Showcase your coding skills in C++ and Java programming challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="web-development">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/Web Developement/482033861_122216404898193014_5649131890573189588_n.jpg" alt="Web Development" class="event-thumbnail mb-3">
                            <h5>Web Development Competition</h5>
                            <p class="text-muted">Build amazing web applications and showcase your frontend and backend skills.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="system-assembly">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/Assembly and Disassembly/484088266_122216396222193014_8026379286092983149_n.jpg" alt="System Assembly" class="event-thumbnail mb-3">
                            <h5>Assembly/Disassembly Competition</h5>
                            <p class="text-muted">Race against time in our system assembling & disassembling challenge.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="crimping">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/crimping competition/483874213_122216652710193014_3401753633990637849_n.jpg" alt="Crimping Competition" class="event-thumbnail mb-3">
                            <h5>Crimping Competition</h5>
                            <p class="text-muted">Test your networking skills in our crimping competition.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-card" data-event="seminar">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="../images/Seminar/483902720_122217075956193014_9199459913520076346_n.jpg" alt="Seminar" class="event-thumbnail mb-3">
                            <h5>Educational Seminar</h5>
                            <p class="text-muted">Attend informative seminars on latest technology trends and industry insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="event-detail" id="mobile-legends-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-gamepad me-3"></i>Mobile Legend Tournament</h2>
            <p class="mb-0">Battle for Glory in the Ultimate Gaming Championship</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Join the most anticipated Mobile Legends tournament of the year! Compete against the best players from different departments and prove your strategic gaming skills. This tournament features multiple rounds, team battles, and individual challenges.</p>
            
            <div class="event-gallery" id="mobile-legends-gallery">
                <img src="../images/Mobile Legend Tournament/483528042_122216424752193014_5799699949102270715_n.jpg" alt="Mobile Legends Tournament 1">
                <img src="../images/Mobile Legend Tournament/483528190_122216633366193014_2442200594378924428_n.jpg" alt="Mobile Legends Tournament 2">
                <img src="../images/Mobile Legend Tournament/483551012_122216633432193014_7071787380406891341_n.jpg" alt="Mobile Legends Tournament 3">
                <img src="../images/Mobile Legend Tournament/483927446_122216425010193014_3409960378070782240_n.jpg" alt="Mobile Legends Tournament 3">
                <img src="../images/Mobile Legend Tournament/484729618_122216424836193014_2245225577213032476_n.jpg" alt="Mobile Legends Tournament 3">
                <img src="../images/Mobile Legend Tournament/484955350_122216633318193014_3883992124935849670_n.jpg" alt="Mobile Legends Tournament 3">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="film-showing-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-film me-3"></i>Film Showing</h2>
            <p class="mb-0">Cinematic Excellence and Storytelling</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Experience the magic of cinema with our carefully curated film festival. Featuring award-winning movies, documentaries, and student productions that inspire and educate.</p>
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="film-showing-gallery">
                <img src="../images/Film Showing/483526163_122216412950193014_1924728599704905832_n.jpg" alt="Film Showing 1">
                <img src="../images/Film Showing/483760770_122216411672193014_723970409515744183_n.jpg" alt="Film Showing 2">
                <img src="../images/Film Showing/483974293_122216413082193014_8066235258384277145_n.jpg" alt="Film Showing 3">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="mini-concert-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-music me-3"></i>Mini Concert</h2>
            <p class="mb-0">Live Music and Performances</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Enjoy an evening of live music featuring talented student performers, local bands, and special guest artists. A celebration of musical diversity and creativity.</p>

            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="mini-concert-gallery">
                <img src="../images/Mini Concert/482029784_122216012330193014_2725955843258394228_n.jpg" alt="Mini Concert 1">
                <img src="../images/Mini Concert/482031782_122216011970193014_8047437827037957846_n.jpg" alt="Mini Concert 2">
                <img src="../images/Mini Concert/483993547_122216012414193014_4292084494775636728_n.jpg" alt="Mini Concert 3">
                <img src="../images/Mini Concert/484036506_122216012612193014_5508307522235700915_n.jpg" alt="Mini Concert 2">
                <img src="../images/Mini Concert/484188365_122216012678193014_3944258562262755270_n.jpg" alt="Mini Concert 3">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="quiz-bee-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-brain me-3"></i>Quiz Bee Showdown</h2>
            <p class="mb-0">Test Your Knowledge and Win Amazing Prizes</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Challenge your intellect in our comprehensive quiz competition covering technology, general knowledge, and academic subjects. Separate categories for lower and higher year students.</p>
            
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="quiz-bee-gallery">
                <img src="../images/quiz bee/482252604_122215947398193014_6481536838114114037_n.jpg" alt="Quiz Bee 1">
                <img src="../images/quiz bee/483537207_122215947350193014_5628033730228955396_n.jpg" alt="Quiz Bee 2">
                <img src="../images/quiz bee/483770067_122215991240193014_4959576231797591587_n.jpg" alt="Quiz Bee 3">
                <img src="../images/quiz bee/484002077_122215991660193014_7714217435328918155_n.jpg" alt="Quiz Bee 3">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="programming-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-code me-3"></i>Programming Competition c++ & java</h2>
            <p class="mb-0">Code Your Way to Victory</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Showcase your programming prowess in multiple language categories. Solve complex algorithms, build applications, and demonstrate your coding skills under pressure.</p>
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="programming-gallery">
                <img src="../images/c++ programming/482032989_122216372744193014_4653813605510438804_n.jpg" alt="C++ Programming 1">
                <img src="../images/c++ programming/483845497_122216372702193014_3985346465340642265_n.jpg" alt="C++ Programming 2">
                <img src="../images/c++ programming/484114262_122216372660193014_4672887415134656198_n.jpg" alt="C++ Programming 3">
                <img src="../images/Java Programming/483847924_122216389970193014_623743383190127548_n.jpg" alt="Java Programming 1">
                <img src="../images/Java Programming/484035119_122216390066193014_6945460673428580908_n.jpg" alt="Java Programming 2">
                <img src="../images/Web Developement/484322542_122216390162193014_5076705930164914627_n.jpg" alt="Web Development 1">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="system-assembly-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-tools me-3"></i>Assembly/Disassembly Competition</h2>
            <p class="mb-0">Hardware Mastery Challenge</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Test your hardware knowledge and dexterity in our system assembly and disassembly competition. Race against time while maintaining precision and proper handling of computer components.</p>
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="system-assembly-gallery">
                <img src="../images/Assembly and Disassembly/483893145_122216395808193014_8114555683897469879_n.jpg" alt="System Assembly 1">
                <img src="../images/Assembly and Disassembly/483905843_122216395856193014_6307353910645518532_n.jpg" alt="System Assembly 2">
                <img src="../images/Assembly and Disassembly/483906707_122216396090193014_3912094394867811410_n.jpg" alt="System Assembly 3">
                <img src="../images/Assembly and Disassembly/483911593_122216395724193014_4164208028016850477_n.jpg" alt="System Assembly 3">
                <img src="../images/Assembly and Disassembly/484088266_122216396222193014_8026379286092983149_n.jpg" alt="System Assembly 3">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="web-development-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-code me-3"></i>Web Development Competition</h2>
            <p class="mb-0">Create Amazing Web Applications</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Showcase your web development skills by building innovative and responsive web applications. This competition challenges you to create functional and visually appealing websites using modern technologies.</p>
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="web-development-gallery">
                <img src="../images/Web Developement/482033861_122216404898193014_5649131890573189588_n.jpg" alt="Web Development">
                <img src="../images/Web Developement/482057860_122216405366193014_5738121911492386750_n.jpg" alt="Web Development">
                <img src="../images/Web Developement/484032083_122216405414193014_3816511014602831643_n.jpg" alt="Web Development">
                <img src="../images/Web Developement/484523769_122216405114193014_2552828351787712986_n.jpg" alt="Web Development">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="seminar-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-chalkboard-teacher me-3"></i>Educational Seminar</h2>
            <p class="mb-0">Stay Updated with Latest Technology Trends</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Join our educational seminars featuring industry experts and learn about the latest trends in technology. These sessions provide valuable insights into emerging technologies and career opportunities.</p>
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="seminar-gallery">
                <img src="../images/Seminar/483902720_122217075956193014_9199459913520076346_n.jpg" alt="Seminar">
                <img src="../images/Seminar/483909991_122217076046193014_7206067308044310482_n.jpg" alt="Seminar">
                <img src="../images/Seminar/483980897_122217075908193014_325073661126112792_n.jpg" alt="Seminar">
                <img src="../images/Seminar/485063629_122217075752193014_7088779585389395981_n.jpg" alt="Seminar">
            </div>
        </div>
    </div>
</div>

<div class="event-detail" id="crimping-detail">
    <div class="event-detail-content">
        <div class="event-detail-header">
            <button class="event-detail-close" onclick="closeEventDetail()">&times;</button>
            <h2><i class="fas fa-network-wired me-3"></i>Crimping Competition</h2>
            <p class="mb-0">Network Cable Mastery Challenge</p>
        </div>
        <div class="event-detail-body">
            <h4>Event Details</h4>
            <p>Demonstrate your networking skills in our cable crimping competition. Create perfect network connections with speed and precision while following industry standards.</p>
            
            
            <h5 class="mt-4"><i class="fas fa-images text-gold me-2"></i>Event Gallery</h5>
            <div class="event-gallery" id="crimping-gallery">
                <img src="../images/crimping competition/483874213_122216652710193014_3401753633990637849_n.jpg" alt="Crimping Competition 1">
                <img src="../images/crimping competition/483974238_122216652764193014_4907657981016860302_n.jpg" alt="Crimping Competition 2">
                <img src="../images/crimping competition/484023145_122216652662193014_3009302465177345759_n.jpg" alt="Crimping Competition 3">
                <img src="../images/crimping competition/484034625_122216652992193014_2590598044277790104_n.jpg" alt="Crimping Competition 3">
            </div>
        </div>
    </div>
</div>

<section class="categories">
    <div class="container">
        <h2 class="text-center mb-5">Explore Categories</h2>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-code fa-3x mb-3"></i>
                        <h5>Programming</h5>
                        <p class="text-muted">Master modern programming languages and development techniques including C++, Java, JavaScript, and Python.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">C++</span>
                            <span class="badge bg-primary me-1">Java</span>
                            <span class="badge bg-primary">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-database fa-3x mb-3"></i>
                        <h5>Data Science</h5>
                        <p class="text-muted">Learn data analysis, machine learning, and statistical methods for modern data-driven solutions.</p>
                        <div class="mt-3">
                            <span class="badge bg-success me-1">Analytics</span>
                            <span class="badge bg-success me-1">ML</span>
                            <span class="badge bg-success">Statistics</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-network-wired fa-3x mb-3"></i>
                        <h5>Networking</h5>
                        <p class="text-muted">Understand computer networks, protocols, cybersecurity, and infrastructure management.</p>
                        <div class="mt-3">
                            <span class="badge bg-warning me-1">TCP/IP</span>
                            <span class="badge bg-warning me-1">Security</span>
                            <span class="badge bg-warning">Infrastructure</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-microchip fa-3x mb-3"></i>
                        <h5>Hardware Engineering</h5>
                        <p class="text-muted">Design and develop computer hardware, embedded systems, and IoT solutions.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger me-1">IoT</span>
                            <span class="badge bg-danger me-1">Embedded</span>
                            <span class="badge bg-danger">VLSI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                What programs does the ACCESS Department offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <p>The ACCESS Department offers three main undergraduate programs:</p>
                                <ul class="list-unstyled ms-4">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>BSIT - Bachelor of Science in Information Technology</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>BSCS - Bachelor of Science in Computer Science</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>BSCPE - Bachelor of Science in Computer Engineering</li>
                                </ul>
                                <p class="mt-2 mb-0">Each program is designed to provide comprehensive education in its respective field with a focus on practical, industry-relevant skills.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                What technical skills and programming languages will I learn?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body">
                                <p>Our curriculum covers a wide range of programming languages and technical skills:</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-2">Programming Languages:</h6>
                                        <ul class="list-unstyled ms-3">
                                            <li><i class="fas fa-code text-primary me-2"></i>C/C++</li>
                                            <li><i class="fas fa-code text-primary me-2"></i>Java</li>
                                            <li><i class="fas fa-code text-primary me-2"></i>Python</li>
                                            <li><i class="fas fa-code text-primary me-2"></i>JavaScript</li>
                                            <li><i class="fas fa-code text-primary me-2"></i>PHP</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="mb-2">Technical Skills:</h6>
                                        <ul class="list-unstyled ms-3">
                                            <li><i class="fas fa-laptop-code text-success me-2"></i>Web Development</li>
                                            <li><i class="fas fa-database text-success me-2"></i>Database Management</li>
                                            <li><i class="fas fa-network-wired text-success me-2"></i>Networking</li>
                                            <li><i class="fas fa-shield-alt text-success me-2"></i>Cybersecurity</li>
                                            <li><i class="fas fa-mobile-alt text-success me-2"></i>Mobile Development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                What career opportunities are available after graduation?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <p>Our graduates have diverse career opportunities in the tech industry:</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-2">Software Development:</h6>
                                        <ul class="list-unstyled ms-3">
                                            <li><i class="fas fa-angle-right text-primary me-2"></i>Software Engineer</li>
                                            <li><i class="fas fa-angle-right text-primary me-2"></i>Full-Stack Developer</li>
                                            <li><i class="fas fa-angle-right text-primary me-2"></i>Mobile App Developer</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="mb-2">IT Infrastructure:</h6>
                                        <ul class="list-unstyled ms-3">
                                            <li><i class="fas fa-angle-right text-success me-2"></i>Systems Administrator</li>
                                            <li><i class="fas fa-angle-right text-success me-2"></i>Network Engineer</li>
                                            <li><i class="fas fa-angle-right text-success me-2"></i>Security Specialist</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                What support services are available for students?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                            <div class="accordion-body">
                                <p>We provide comprehensive support to ensure student success:</p>
                                <ul class="list-unstyled ms-3">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Modern Computer Laboratories</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Career Development Services</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Research Support and Resources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h2 class="text-center mb-4">Student Testimonials</h2>
        <div class="scroll-container">
            
            <div class="testimonial-card">
                <div class="rating mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fa-regular fa-star text-success"></i>
                </div>
                <p>"Outstanding faculty and comprehensive course content. I learned more than I expected and landed my dream job!"</p>
                <div class="student-info d-flex align-items-center">
                    <i class="fas fa-user-circle fa-3x me-3 text-success"></i>
                    <div>
                        <h5>Gino Anton</h5>
                        <p class="text-muted mb-0">Information Technolgy Graduate</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <p>"I learned more than I expected "akala ko kasi pindot pindot lang" so ayun I landed my dream job!   #thisismysecondhome"</p>
                <div class="student-info d-flex align-items-center">
                    <i class="fas fa-user-circle fa-3x me-3 text-success"></i>
                    <div>
                        <h5>Kevin Laurente</h5>
                        <p class="text-muted mb-0">Information Technolgy Graduate</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fa-regular fa-star text-success"></i>
                    <i class="fa-regular fa-star text-success"></i>
            
                </div>
                <p>"The courses transformed my career completely! The practical approach and industry-relevant curriculum made all the difference."</p>
                <div class="student-info d-flex align-items-center">
                    <i class="fas fa-user-circle fa-3x me-3 text-success"></i>
                    <div>
                        <h5>John Alphert Ysatam</h5>
                        <p class="text-muted mb-0">Web Development Graduate</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fa-regular fa-star text-success"></i>
            
                </div>
                <p>"The hands-on projects and mentorship program were invaluable. This program exceeded all my expectations!"</p>
                <div class="student-info d-flex align-items-center">
                    <i class="fas fa-user-circle fa-3x me-3 text-success"></i>
                    <div>
                        <h5>John Payong</h5>
                        <p class="text-muted mb-0">Mobile Development Graduate</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <p>"Study smart, not hard. This program taught me how to learn efficiently and effectively."</p>
                <div class="student-info d-flex align-items-center">
                    <i class="fas fa-user-circle fa-3x me-3 text-success"></i>
                    <div>
                        <h5>anonymous</h5>
                        <p class="text-muted mb-0">Computer Science Graduate</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fa-regular fa-star text-success"></i>
                </div>
                <p>Practice! & Practice! & Pratice! This program taught me how to code and I am now a software engineer.</p>
                <div class="student-info d-flex align-items-center">
                    <i class="fas fa-user-circle fa-3x me-3 text-success"></i>
                    <div>
                        <h5>anonymous</h5>
                        <p class="text-muted mb-0">Computer engineer Graduate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include(__DIR__ . '/../includes/footer.php'); ?>
