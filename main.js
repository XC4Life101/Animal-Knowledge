import { Chart } from 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js';

function shuffle(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }
    return arr;
}

let funFactsIndex = 0;
let funFacts = shuffle([
    {
        fact: "Hummingbirds are the only known birds that can fly backwards",
        image: "assets/Hummingbird.webp"
    },
    {
        fact: "Dolphins purposely get stung by Pufferfish to activate it's hallucinogenic effect",
        image: "assets/Dolphin.jpg"
    },
    {
        fact: "A single bite from the Inland Taipan contains enough venom to kill at least 100 fully grown men, and can kill within just 45 minutes, if left untreated",
        image: "assets/Taipan.jpg"
    },
    {
        fact: "Roosters prevent themselves from going deaf due to their own loud crowing, by tilting their head backs when they crow, which covers their ear canal completely, serving as a built-in ear-plug",
        image: "assets/Rooster.jpg"
    },
    {
        fact: "Koalas can sleep for up to 22 hours a day",
        image: "assets/Koala.jpg"
    },
    {
        fact: "Swifts spend most of their lives flying in the air, and can fly for almost an entire year, without ever landing",
        image: "assets/Swift.jpeg"
    },
    {
        fact: "Even after having its head cut off, a cockroach can still live for weeks",
        image: "assets/Cockroach.jpg"
    },
    {
        fact: "A marine-snail known as a limpet has teeth that are regarded as the strongest biological material on earth, being stronger than titanium",
        image: "assets/Limpet.jpg"
    },
    {
        fact: "The Giant Pacific Octopus has 3 hearts, 9 brains and blue blood",
        image: "assets/Octopus.jpg"
    },
    {
        fact: "Naked Mole-Rats can survive without oxygen for 20 minutes and are near immune to cancer",
        image: "assets/MoleRat.jpg"
    },
    {
        fact: "The Snap-Jaw Dracula Ant has the fastest bite, described as the fastest animal movement on record, going from 0-200mph in 0.000015 seconds",
        image: "assets/DraculaAnt.jpg"
    },
    {
        fact: "Duck-billed platypus don't have nipples, instead they concentrate milk to their belly and feed their young by sweating it out",
        image: "assets/Platypus.avif"
    },
    {
        fact: "Vultures urinate and defecate on their own legs and feet to cool off on hot days",
        image: "assets/Vulture.webp"
    },
]);

function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
}

function generateFunFact() {
    if (funFactsIndex >= funFacts.length) {
        document.getElementById("fun-fact-text").textContent = "You've seen them all";
        document.getElementById("fun-fact-image").src = "assets/None.jpg";
        document.getElementById("Fact_button").textContent = "?Again";
        shuffle(funFacts);
        funFactsIndex = 0;
        return;
    }
    const { fact, image } = funFacts[funFactsIndex];
    document.getElementById("fun-fact-text").textContent = fact;
    document.getElementById("fun-fact-image").src = image;

    funFactsIndex++;
    document.getElementById("Fact_button").removeEventListener("click", generateFunFact);
}
document.getElementById("Fact_button").addEventListener("click", generateFunFact);

function fetchData() {
    // Make an AJAX request to the PHP script
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Parse the JSON response
                var data = JSON.parse(xhr.responseText);
                // Call function to draw chart with the data
                drawChart(data);
            } 
            else {
                console.error('Error fetching data:', xhr.status);
            }
        }
    };
    xhr.open('GET', 'get_animal_popularity.php', true);
    xhr.send();
}

function drawChart() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          legend: {display: false},
          title: {
            display: true,
            text: "World Wine Production 2018"
          }
        }
      });
}