<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <meta name="description" content="Your contact page description"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"><a href="contact.html" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">mail</i></a>
      <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
        <div class="mdl-layout__header-row site-logo-row"><span class="mdl-layout__title">
            <div class="site-logo"></div><span class="site-description">Material Design Portfolio</span></span></div>
        <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
          <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"><a class="mdl-navigation__link" href="index.html">Home</a><a class="mdl-navigation__link" href="portfolio.html">Portfolio</a><a class="mdl-navigation__link" href="about.html">About</a><a class="mdl-navigation__link" href="contact.html">Contact</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"><a class="mdl-navigation__link" href="index.html">Home</a><a class="mdl-navigation__link" href="portfolio.html">Portfolio</a><a class="mdl-navigation__link" href="about.html">About</a><a class="mdl-navigation__link" href="contact.html">Contact</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="site-content">
          <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
              <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Contact</h1>
              </div>
              <div class="mdl-card__media"><img class="article-image" src="img/contact.jpg" border="0" alt="Contact">
              </div>
              <div class="mdl-grid site-copy">
                <div class="mdl-cell mdl-cell--12-col"><div class="mdl-card__supporting-text">
  <p>Contact our team using the contact form below:</p>
  <!--<form action="https://formspree.io/email@example.com" method="POST" class="form-contact">-->
  <form action="rgitdb.php" method="POST">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name">
          <label class="mdl-textfield__label" for="Name">Name...</label>
          <span class="mdl-textfield__error">Letters and spaces only</span>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="Email" name="email">
          <label class="mdl-textfield__label" for="Email">Email...</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <textarea class="mdl-textfield__input" type="text" rows="5" id="note" name="message"></textarea>
          <label class="mdl-textfield__label" for="note">Enter note</label>
      </div>
      <p>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="send">
              Submit
          </button>
      </p>
  </form>
</div></div>
              </div>
            </div>
          </div>
        </div>
        <footer class="mdl-mini-footer">
          <div class="footer-container">
            <div class="mdl-logo">&copy; Unitiled. Design: <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
            <ul class="mdl-mini-footer__link-list">
              <li><a href="#">Privacy & Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
      <script src="https://code.getmdl.io/1.3.0/material.min.js" defer></script>
    </div>
  </body>
