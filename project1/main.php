<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Developer|Landing page</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;500&display=swap');

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
nav {
  background-color: black;
  color: #fff;
  font-size: 2em;
  height: 100px;
  text-align: center;
}

nav ul {
  list-style: none;
  margin: 0px;
  padding: 20px;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav li:last-child {
  margin-right: 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
  display: block;
  line-height: 50px;
  padding: 0 10px;
}

nav a:hover {
  background-color: #555;
}

html,
body {
    line-height: 1.4;
    font-weight: 300;
    font-family: "Roboto", sans-serif;
}

.hero_section {
    background-image: url(img/developer.png);
    min-height: 100vh;
    background-position: center;
    background-size: cover;
    background-repeat: repeat;
}

.text_container {
    color: white;
    max-width: 900px;
    margin: 0px auto;
    padding-top: 70px;
    padding-left: 50px;
}

.lg_text {
    font-size: 60px;
    font-weight: 200px;
}

.black_box {
    font-size: 20px;
    text-align: center;
    background-color: black;
    color: white;
}

.black_box h2 {
    font-size: 40px;
    color: white;
    text-align: center;
    font-weight: 300;
}

.black_box h2 span {
    font-weight: 600;

    font-size: 50px;
}

.work {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));

    max-width: 1100px;
    margin: 50px auto;
}

.grid_item {

    justify-content: center;
    align-items: center;
}

.card {
    max-width: 320px;
    height: 400px;
    border-radius: 10px;
    box-shadow: 3px 5px 5px rgba(1, 1, 1, 0.2);
    transition: 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 3px 5px 5px rgba(1, 1, 1, 0.3);
    transition: 0.3s ease-in-out;
}

.card_content h3,
p {
    text-align: center;
    margin-bottom: 20px;


}

.card_content {
    text-align: center;

}

.card_content {
    padding: 10px
}

.bottom_section {
    display: flex
}

.bottom_section p {
    text-align: justify;
}

.contact {
    background-color: #722300;

}

.About {
    background-color: #515603;

}

.contact,
.About {
    min-height: 300px;
    padding: 32px;
    color: white;
}


.About h2,
.contact h2 {
    font-size: 64px;
    font-weight: 300;
}

.About p,
.contact p {
    margin-bottom: 20px;
}

footer {
    color: white;
    padding: 20px;
    background-color: black;
    text-align: center;
    text-transform: capitalize;

}

@media (max-width: 786px) {
    .hero_section {
        min-height: 40vh;
    }

    .text_container {
        padding: 10px 0;
        text-align: center;
    }

    .lg_text {
        font-size: 32px;
    }

    .black_box h2 {
        font-size: 24px;
    }

    .black_box h2 span {
        font-weight: 400;
        font-size: 32px;
    }

    .bottom_section {
        flex-direction: column;
    }

    h1 {
        font-size: 30px;
    }

    .About h2,
    .contact h2 {
        font-size: 10px;
    }
}</style>
<nav>
  <ul>
  <li>
            Loged in User : (<?php echo  $_SESSION["sun"]; ?>)
  </li>
    <li><a href="#home">Home</a></li>
    <li><a href="list.php">List</a></li>
    <li><a href="#about-me">About Me</a></li>
    <li><a href="form.php">Contact Me</a></li>
    <li><a href="loginform.php">Login</a></li>
    <li><a href="registerpro.php">Register</a></li>
  </ul>
</nav>
  <body>
    <section class="hero_section">
      <div class="text_container">
        <h2><span class="lg_text">HI..</span> I am Sandip sanjel</h2>
        <h1 class="lg_text">FULL-STACK DEVELOPER</h1>
      </div>
    </section>
    <section class="black_box">
      <h2>WORK, I CAN DO FOR <span>YOU</span></h2>
    </section>
    <section class="work">
      <div class="grid_item">
        <div class="card">
          <div class="image_container">
            <img src="img/web.png" alt="web development" />
          </div>
          <div class="card_content">
            <h3>Web Development</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
              quibusdam ex quaerat quasi nostrum tempore.
            </p>
          </div>
        </div>
      </div>
      <div class="grid_item">
        <div class="card">
          <div class="image_container">
            <img src="img/mobile.png" alt="app development" />
          </div>
          <div class="card_content">
            <h3>App Development</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
              quibusdam ex quaerat quasi nostrum tempore.
            </p>
          </div>
        </div>
      </div>
      <div class="grid_item">
        <div class="card">
          <div class="image_container">
            <img src="img/uiux.png" alt="web development" />
          </div>
          <div class="card_content">
            <h3>UI UX Design</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
              quibusdam ex quaerat quasi nostrum tempore.
            </p>
          </div>
        </div>
      </div>
    </section>
    <sectio class="bottom_section">
      <div class="contact">
        <h2>Contact Me</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aut
          cupiditate est hic minima ratione distinctio porro eveniet aliquid
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, aut!
          molestiae cum optio nemo earum numquam sapiente, molestias saepe nulla
          Qui dolorum, corporis obcaecati iusto, accusamus reiciendis, modi in
          magni incidunt molestias ipsam magnam impedit ex nemo. Praesentium,
          voluptatem odit.
        </p>
       <!-- <a   href="form.php">click here</a> -->
      </div>
      <div class="About">
        <h2>About Me</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aut
          cupiditate est hic minima ratione distinctio porro eveniet aliquid
          molestiae cum optio nemo earum numquam sapiente, molestias saepe
          nullalo Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Debitis porro dolores rerum natus similique omnis enim sunt odio
          atque! Id, ut itaque eaque qui eligendi eius libero fugiat quam totam.
        </p>
      </div>
    </sectio>
    <footer>
      <a href="#" style="color: white">CopyrightⒸ</a> 1999-2022 by Refsnes Data.
      All Rights Reserved. SANDIP is Power by sandip sanjel.
    </footer>
  </body>
</html>
