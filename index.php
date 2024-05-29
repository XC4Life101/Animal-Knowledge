<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Animal Knowledge Homepage</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="main.js" defer></script>
    </head>
    <body>
        <header>
            <h1>Animal Knowledge</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="survey.php">Survey</a></li>
                    <li><a href="data.php">Data</a></li>
                </ul>
            </nav>
        </header>
    
        <main id="page-content" class="main section-wrap">
            <article class="article">
              <div class="content">
                <h1 class="headline">Welcome to Animal Knowledge</h1>
                <p class="text">Learn interesting facts about various animals and contribute to our survey!</p>
                <a href="survey.php" class="cta-button">Take a survey</a>
              </div>
          
              <figure class="image-wrap">
                <img src='assets/Knowledge.jpg' alt="Animal Knowledge">
              </figure>
            </article>
            <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
            <article class="article">
              <div class="content">
                <h1 class="headline">Fun Animal Facts</h1>
                <p id="fun-fact-text" class="text">Click below to generate a fun fact about animals</p>
                <button id="Fact_button" class="cta-button" onclick="generateFunFact()">Generate Fact</button>
              </div>
          
              <figure class="image-wrap">
                <img id="fun-fact-image" src="https://static.vecteezy.com/system/resources/previews/015/568/001/non_2x/question-mark-red-hand-drawn-doodle-faq-symbol-free-vector.jpg" alt="Some animal">
              </figure>
            </article>
            <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
            <article class="article">
                <div class="content">
                  <h1 id="News_head" class="headline">News 1</h1>
                  <p id="News_text" class="text">Things that are happening in the world for animals right now</p>
                  <button class="cta-button">Previous</button>
                  <button class="cta-button">Next</button>
                </div>
                <div class="news-box">Under Construction</div></div>
            </article>
            <!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
        </main>

        <footer>
            <p>&copy; 2024 Animal Knowledge; Created by Liam Zadoorian</p>
        </footer>
    </body>
</html>