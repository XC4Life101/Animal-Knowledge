<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Animal Knowledge Survey</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="main.js" defer></script>
    </head>
    <body onload="return show('Page1', 'Page2');">
        <header>
            <h1>Animal Knowledge</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="survey.php" class="active">Survey</a></li>
                    <li><a href="data.php">Data</a></li>
                </ul>
            </nav>
        </header>

        <form action="actions.php?action=saveFormData" method="POST">
            <section class="form" id="Page1">
                <u><h1>Personal Info</h1></u>

                <div class="form-control">
                    <label for="name" class="Qlabel">
                        Name 
                    </label>
                    <input type="text" id="name" name="name" class="single-input" placeholder="Enter your full name"/>
                </div>
    
                <div class="form-control">
                    <label for="email" class="Qlabel">
                        Email
                    </label>
                    <input type="email" id="email" name="email" class="single-input" placeholder="Enter your email address"/>
                </div>

                <div class="form-control">
                    <label for="age" class="Qlabel">
                        Age
                    </label>
                    <input type="age" id="age" name="age" class="single-input" placeholder="Enter your age"/>
                </div>

                <a href="#" onclick="return show('Page2','Page1');">Next Page</a>
            </section>
            <section class="form" id="Page2">
                <u><h1>Personal Bias</h1></u>
                <br>

                <div class="form-control">
                    <label for="anim" class="Qlabel">
                        What is your favorite animal?
                    </label>
                    <input type="text" id="anim" name="anim" class="single-input" placeholder="Enter your favorite animal"/>
                </div>

                <div class="form-control">
                    <label for="bird" class="Qlabel">
                        What is your favorite bird?
                    </label>
                    <input type="text" id="bird" name="bird" class="single-input" placeholder="Enter your favorite bird. Ex: Blue Heron, Barned Owl, Red Robin, etc"/>
                </div>

                <div class="form-control">
                    <label for="rept" class="Qlabel">
                        What is your favorite reptile?
                    </label>
                    <input type="text" id="rept" name="rept" class="single-input" placeholder="Enter your favorite reptile. Ex: Coral Snake, American Alligator, Painted Turtle, etc"/>
                </div>

                <div class="form-control">
                    <label for="amph" class="Qlabel">
                        What is your favorite amphibian?
                    </label>
                    <input type="text" id="amph" name="amph" class="single-input" placeholder="Enter your favorite amphibian. Ex: Poison Dart Frog, California Newt, Spotted Salamander, etc"/>
                </div>

                <div class="form-control">
                    <label for="mamm" class="Qlabel">
                        What is your favorite mammal?
                    </label>
                    <input type="text" id="mamm" name="mamm" class="single-input" placeholder="Enter your favorite mammal. Ex: Brown Bear, Lion, White-tailed Deer, etc"/>
                </div>

                <div class="form-control">
                    <label for="fish" class="Qlabel">
                        What is your favorite fish?
                    </label>
                    <input type="text" id="fish" name="fish" class="single-input" placeholder="Enter your favorite fish. Ex: Salmon, Swordfish, Great White Shark, etc"/>
                </div>

                <div class="form-control">
                    <label for="arth" class="Qlabel">
                        What is your favorite arthropod?
                    </label>
                    <input type="text" id="arth" name="arth" class="single-input" placeholder="Enter your favorite arthropod. Ex: Tarantula, Grasshopper, Hermit Crab, etc"/>
                </div>

                <div class="form-control">
                    <label for="moll" class="Qlabel">
                        What is your favorite mollusk?
                    </label>
                    <input type="text" id="moll" name="moll" class="single-input" placeholder="Enter your favorite mollusk. Ex: Giant Clam, Octopus, Garden Snail, etc"/>
                </div>

                <div class="form-control">
                    <label for="other" class="Qlabel">
                        What is your favorite animal that fits none of the above groupings?
                    </label>
                    <input type="text" id="other" name="other" class="single-input" placeholder="Enter your favorite other. Ex: Jellyfish, Sea Urchin, Coral, etc"/>
                </div>

                <input type="submit" class="cta-button" value="Submit">
            </section>
        </form>
    
        <footer>
            <p>&copy; 2024 Animal Knowledge</p>
        </footer>
    </body>
</html>