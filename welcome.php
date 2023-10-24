

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewsExpress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <div class="main-nav container flex">
        <a href="" onclick ="relode()" class="app-logo">
          <img src="logo.png" alt="logo" srcset="">
        </a>
        <div class="nav-links">
          <ul class="flex">
            <li class = "hover-link nav-item" id="cricket" onclick="onNavItemClick('cricket')">Cricket</li>
            <li class = "hover-link nav-item" id="finance" onclick="onNavItemClick('finance')">Finance</li>
            <li class = "hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>
          </ul>
        </div>
        <div class="search-bar flex">
          <input type="text" class="news-input" placeholder ="e.g Science" id="search-text">
          <button class="search-button" id="search-button">Search</button>
        </div>
      </div>
    </nav>
    <main>
      <div class="cards-container container flex" id="cards-container">
        
      </div>
    </main>

    <template id="template-news-card">
    <div class="card">
          <div class="card-header">
            <img src="https://via.placeholder.com/400x200" alt="img-holder" class="news-input" id="news-img">
          </div>
          <div class="card-content ">
            <h3 id="news-title">This is the title</h3>
            <h6 class="news-source" id="news-source"> evywf y</h6>
            <p class="news-desc" id="news-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aliquam, provident non est beatae recusandae a aperiam dolorem veritatis? Animi blanditiis nesciunt officia excepturi ex tenetur eaque impedit obcaecati soluta!</p>
          </div>
        </div>
    </template>

    <script src="script.js"></script>
</html>