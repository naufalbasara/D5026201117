<!DOCTYPE html>
<html lang="en" translate="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Scorekeeper</title>
    <link rel="icon" href="assets-tugas4/img/basketball-ball.png">
    <link rel="stylesheet" href="assets-tugas4/styles/style.css">
    
</head>

<body>
    <main>
        <section class="card">
            <div class="jumbotron">
                <div class="img"></div>
                <h1>Basketball Score Keeper</h1>
            </div>
            
            <div class="scoreboard">
                <h1 class="score"><span class="aScore">0</span> to <span class="bScore">0</span></h1>
                <p>Use the buttons below to keep score updated!</p>

                <label for="">Playing Until</label>
                <select name="scoreTarget" disabled>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                    <option value="Customize">Customize</option>
                </select>
            </div>

            <div class="buttons">
                <div class="row">
                    <button class="a one" disabled>+1 Team A</button>
                    <button class="a two" disabled>+2 Team A</button>
                    <button class="a three" disabled>+3 Team A</button>
                </div>
                <button class="play">PLAY</button>
                <div class="row">
                    <button class="b one" disabled>+1 Team B</button>
                    <button class="b two" disabled>+2 Team B</button>
                    <button class="b three" disabled>+3 Team B</button>                    
                </div>
                
            </div>
        </section>
        <div class="animation">
            <img src="assets-tugas4/img/basketball-ball.png" alt="basketball" class="stay">
        </div>
    </main>

    <script src="assets-tugas4/script/app.js"></script>
</body>
</html>