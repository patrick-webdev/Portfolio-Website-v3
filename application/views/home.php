<section id="bio" class="primary">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col" id="headshotContainer">
                <p><img src="<?= config_item('base_uri') ?>assets/img/headshot.png" alt="Picture of Patrick" id="headshot"></p>
            </div>
            <div class="col-10" id="bio__text">
                <p class="lgFont">Hello, I'm Patrick.</p>
                <p class="lgFont">I’m a <span class="lgFont" id="age"></span>-year old fullstack web and game developer from Madison, Wisconsin. I graduated from Indiana University with a B.S. in Informatics with a certificate in Multi-Device Development</p>
                <p>
                    <?php
                        foreach($contactLinks as $contactLink){
                            echo "<a href='" . $contactLink["url"] . "' title='" . $contactLink["title"] . "' class='contactLink' target='_blank'>" . $contactLink["icon"] . "</a>";
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="previousWork" class="light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p id="previousWork__title" class="bold lgFont">Previous Work</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12 col-md">
            <p class="employer lgFont bold">Indiana University Health<br/>
                <span class="title noStyle lgFont">Fullstack Developer</span></p>
                <p class="jobDesc">I worked with Dr. Larry Cripe and a team to develop a webapp that walks patients and their families through the cancer treatment process to get them more involved in the decision making process. To help Dr. Cripe fulfill his vision, we rapidly developed prototypes on a weekly basis to present for feedback.</p>
            </div>
            <div class="col-12 col-md">
            <p class="employer lgFont bold">Indiana University<br/>
                <span class="title noStyle lgFont">Front-End Developer</span></p>
                <p class="jobDesc">I designed and developed a WordPress website for the Diversity, Equity, and Equality Working Group at the School of Informatics and Computing at IUPUI. The DEI Working Group and I worked closely together with weekly meetings for feedback to ensure the website would help them to promote their goals to the rest of the faculty and student body.</p>
                <a href="https://web.archive.org/web/20220106224521/https://inclusion.soic.iupui.edu/" class="jobLink link--color link--underline" target="_blank">Web Archive Link</a>
            </div>
            <div class="col-12 col-md">
                <p class="employer lgFont bold">Indianapolis Ambassadors<br/>
                <span class="title noStyle lgFont">Web Administrator</span></p>
                <p class="jobDesc">I helped to develop and upkeep a WordPress website for the Indianapolis Ambassadors non-profit that they use to communicate with members and work with local organizations in need of volunteers. I managed the website, its hosting service, and email service to ensure their daily operations remained functional.</p>
                <a href="https://indyambassadors.org/" class="jobLink link--color link--underline" target="_blank">Website Link</a>
            </div>
        </div>
    </div>
</section>
<section id="featuredProjects" class="primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p id="featuredProjects__title" class="bold lgFont">Featured Projects</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col">
                <div class="featuredProjects__imgContainer d-flex d-sm-block">
                    <img src="<?= config_item('base_uri') ?>assets/img/travelfly.jpg" alt="Travelfly Preview" class="featuredProjects__img">
                </div>
                <p class="featuredProjects__name bold lgFont">Travelfly</p>
                <p class="featuredProjects_desc">The front-end of a mock travel agency website and a recreation of a design by Mujtaba Murtaza.</p>
                <a href="https://patrickdcaldwell.com/localprojects/travelfly/index.html" class="link--color link--underline" target="_blank">Website Link</a>
            </div>
            <div class="col">
                <div class="featuredProjects__imgContainer d-flex d-sm-block">
                    <img src="<?= config_item('base_uri') ?>assets/img/studentprojectportal.png" alt="Travelfly Preview" class="featuredProjects__img">
                </div>
                <p class="featuredProjects__name bold lgFont">Student Project Portal</p>
                <p class="featuredProjects_desc">A website for students to easily create, manage, chat, and collaborate within groups on projects.</p>
                <a href="https://patrickdcaldwell.com/localprojects/studentprojectportal/index.php/" class="link--color link--underline" target="_blank">Website Link</a>
            </div>
            <div class="col">
                <div class="featuredProjects__imgContainer d-flex d-sm-block">
                    <img src="<?= config_item('base_uri') ?>assets/img/envirometal.png" alt="Travelfly Preview" class="featuredProjects__img">
                </div>
                <p class="featuredProjects__name bold lgFont">EnviroMetal</p>
                <p class="featuredProjects_desc">A 2D action platformer created with Godot for <a href="https://itch.io/jam/my-first-game-jam-winter-2022" class="link--color" target="_blank">My First Game Jam: Winter 2022</a> that I acted as the Creative Lead for.</p>
                <a href="https://daltonsw.itch.io/envirometal" class="link--color link--underline" target="_blank">Available on Itch</a>
            </div>
        </div>
    </div>
</section>
<!-- <section id="contact" class="light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p id="contact__title" class="bold lgFont">
                    Contact
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><a href="mailto:patrickcaldwell1998@gmail.com" class="noStyle lgFont"><i class="fa-regular fa-envelope"></i> patrickcaldwell1998@gmail.com</a></p>
                <p><a href="#" class="noStyle lgFont"><i class="fa-brands fa-linkedin-in"></i> Patrick Caldwell</a></p>
                <p><a href="#" class="noStyle lgFont"><i class="fa-brands fa-github"></i> patrick-webdev</a></p>
            </div>
            <div class="col">
                <p><a href="#" class="noStyle lgFont"><i class="fa-regular fa-file"></i> Resume</a></p>
                <p><a href="#" class="noStyle lgFont"><i class="fa-brands fa-twitter"></i> @PatWebDev</a></p>
            </div>
        </div>
    </div>
</section> -->

<script src="<?= config_item('base_uri') ?>assets/js/home.js"></script>