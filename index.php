<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/futureblur-logo.png">
    <link rel="stylesheet" href="style.css">
    <script src="scripts/subcount.js"></script>
    <title>Home - Futureblur</title>
</head>

<body>
    <div class="nav-bar">
        <div class="logo-item">
            <a href="https://futureblur.com">
                <img src="img/futureblur-logo-full.png" alt="Futureblur Logo">
            </a>
        </div>
        <a href="#">About</a>
        <a href="youtube.html">YouTube</a>
        <!-- <a href="discord.html">Discord</a> -->
    </div>

    <section id="home">
        <h1>Software Developer 👨‍💻<br> Content Creator 🎬</h1>
        <div class="scroll-arrow-container>">
            <a href="#youtube-stats">
                <img class="scroll-arrow" src="img/arrow-down.png" alt="ArrowDown">
            </a>
        </div>

    </section>

    <section id="youtube-stats">
        <h2>🔴 LIVE YouTube Stats</h2>
        <hr>
        <div class="youtube-stats-container">
            <a class="youtube-profilepic" href="youtube.html">
                <img src="img/channel-icon.png" width="70" height="70">
            </a>
            <div class="youtube-stats-channelname">
                <a href="youtube.html">Futureblur</a>
                <p id="subscriber-count"></p>
            </div>
            <div class="subscribe-button">
                <a class="button" href="sub.html">SUBSCRIBE</a>
            </div>
        </div>
        <div class="account-info-container">
            <div class="account-info-item">
                <p>Total Views: </p>
                <p id="total-views"></p>
            </div>
            <div class="account-info-item">
                <p>Total Videos: </p>
                <p id="total-videos"></p>
            </div>
        </div>
        <div class="youtube-milestones">
            <h3>Sub Goal</h3>
            <!-- <div class="milestones-container">
                <div class="account-info-item">
                    <p>100 Subscribers</p>
                    <p id="milestone-reached-100">✅</p>
                </div>
                <div class="account-info-item">
                    <p>300 Subscribers</p>
                    <p class="milestone-reached-200">✅</p>
                </div>
                <div class="account-info-item">
                    <p>300 Subscribers</p>
                    <p class="milestone-reached-300">✅</p>
                </div>
            </div>
            <div class="account-info-item">
                <p>300 Subscribers</p>
                <p class="milestone-reached-500">✅</p>
            </div> -->
            <div class="subgoal-container">
                <div class="progress-bar-bg">
                    <div id="subgoal"></div>
                </div>
                <p id="subgoal-min">0</p>
                <p id="subgoal-max"></p>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>Programming &amp; Software Skills</h2>
        <hr>
        <div class="skills-wrapper">
            <p>C++ 17</p>
            <div class="progress-bar-bg">
                <div class="cpp">80%</div>
            </div>
            <p>C#</p>
            <div class="progress-bar-bg">
                <div class="csharp">85%</div>
            </div>
            <p>GLSL</p>
            <div class="progress-bar-bg">
                <div class="glsl">25%</div>
            </div>
            <p>HTML 5</p>
            <div class="progress-bar-bg">
                <div class="html">75%</div>
            </div>
            <p>CSS 3</p>
            <div class="progress-bar-bg">
                <div class="css">65%</div>
            </div>
            <p>Unity Engine</p>
            <div class="progress-bar-bg">
                <div class="unity">98%</div>
            </div>
            <p>Unreal Engine 4</p>
            <div class="progress-bar-bg">
                <div class="ue4">75%</div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>