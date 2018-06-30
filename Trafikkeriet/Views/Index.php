<?php
include('/Fragments/Header.php');
?>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container-fluid content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Om Oss</h2>
            <p>Trafikkeriet er et nyoppstartet kontorfelleskap som består av tre trafikkskoler.</p>
            <p>Vi tilbyr opplæring i alle klasser, og har også tungtransport i Larvik. </p>
            <img src="/Assets/img/chosenvehicles.png"></img>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                 <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'rh')"><img src="/Assets/img/rh_logo.jpg"></img></button>
                    <button class="tablinks" onclick="openTab(event, 'sem')"><img src="/Assets/img/sem_logo.jpg"></img></button>
                    <button class="tablinks" onclick="openTab(event, 'bob')"><img src="/Assets/img/bob_logo.jpg"></img></button>
                </div>

                <div id="bob" class="tabcontent">
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                </div>

                <div id="rh" class="tabcontent">
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                        <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                </div>

                <div id="sem" class="tabcontent">
                    <div id="personalia">
                        <img src="/Assets/img/the_don.jpeg"></img>
                        <h2>Donald Trump</h2>
                        <p>Telefon: Whatever</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('/Fragments/Footer.php');
?>
