<!DOCTYPE html>
<html>

<head>
  
    <title>All LOGIN</title>
    <script src="https://kit.fontawesome.com/125372cbb9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="Doctorpatient.css">
</head>
<style>
    #container {
        background-color: #fff;
        padding: 50px;
        border-radius: 50px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        width: 800px;
        margin: auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-size: 16px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 50px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        background-color: var(--green);
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.9s ease;
    }

    button:hover {
        background-color: #0050a6;
    }

    #result {
        margin-top: 10px;
        font-size: 40px;
        font-weight: bold;
        color: #333;
    }

    #history {
        margin-top: 10px;
    }

    #historyTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    #historyTable th,
    #historyTable td {
        border: 1px solid #fff;
        padding: 10px;
        text-align: left;
    }

    #historyTable th {
        background-color: #fff;
        color: #0050a6;
    }

    #historyTable tbody tr:nth-child(even) {
        background-color: #litegrey;
    }

    footer {
        position: absolute;
        bottom: auto;
        background-color: black;
        color: #fff;
        height: 10vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin-top: 20px;
    }

    #healthChart {
        max-width: 6000px;
        max-height: 400px;
    }

    .chart {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <!--header section starts-->
    <header class="header">
        <div class="image1">
            <a href="#home" class="logo" style="margin-left:100px;"><img src="image/logo.png" alt="" height="130px"></i></a>
        </div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#login">Login</a>
            <a href="#health">Health Tracker</a>
            <a href="hostfind/index.html">Nearest Hospital</a>
        </nav>
    </header>
    <!--header section starts-->
    <!--Home Section start-->
    <section class="home" id="home">
        <div class="image">
            <img src="image/h1.gif" alt="">
        </div>
        <div class="content">
            <h3>𝙎𝙩𝙖𝙮 𝙃𝙖𝙥𝙥𝙮, 𝙎𝙩𝙖𝙮 𝙃𝙚𝙖𝙡𝙩𝙝𝙮</h3>
            <p>𝙀𝙢𝙥𝙤𝙬𝙚𝙧𝙞𝙣𝙜 𝙃𝙚𝙖𝙡𝙩𝙝, 𝙄𝙣𝙨𝙥𝙞𝙧𝙞𝙣𝙜 𝙃𝙤𝙥𝙚 – 𝙒𝙝𝙚𝙧𝙚 𝘾𝙤𝙢𝙥𝙖𝙨𝙨𝙞𝙤𝙣𝙖𝙩𝙚 𝘾𝙖𝙧𝙚 𝙈𝙚𝙚𝙩𝙨 𝘾𝙪𝙩𝙩𝙞𝙣𝙜-𝙀𝙙𝙜𝙚 𝙀𝙭𝙥𝙚𝙧𝙩𝙞𝙨𝙚. 𝙔𝙤𝙪𝙧 𝙒𝙚𝙡𝙡𝙣𝙚𝙨𝙨 𝙅𝙤𝙪𝙧𝙣𝙚𝙮 𝙎𝙩𝙖𝙧𝙩𝙨 𝙃𝙚𝙧𝙚</p>
            <a href="contactus.php" class="btn">Contact us<span class="fas fa-chevron-right"></span></a>
        </div>
    </section>
    <!--Home Section Ends-->

    <!--Login Section Starts-->
    <section class="login" id="login">
        <h1 class="heading">𝑳𝒐𝒈𝒊𝒏</h1>
        <div class="box-container">
            <div class="box">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h3>Login As Patient</h3>
                <a href="login.php" class="btn">Sign In <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h3>Login As Admin</h3>
                <a href="login3.php" class="btn">Sign In <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h3>Login As Doctor</h3>
                <a href="login2.php" class="btn">Sign In <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
    </section>
    <!--Login Section Ends-->

    <!--Health Check Starts-->
    <section class="health" id="health">
        <h1 class="heading" style="margin-top:80px;">𝙃𝙚𝙖𝙡𝙩𝙝 𝙏𝙧𝙖𝙘𝙠𝙚𝙧</h1>
        <div id="container">
        
            <label for="heartRate">Heart Rate:</label>
            <input type="number" id="heartRate" placeholder="Enter heart rate" required>
            <label for="systolic">Systolic Pressure</label>
            <input type="number" id="systolic" placeholder="Enter Systolic Pressure" required>
            <label for="diastolic">Diastolic Pressure</label>
            <input type="number" id="diastolic" placeholder="Enter Diastolic Pressure" required>
            <label for="hi">Height (cm): </label>
            <input type="number" id="hi" placeholder="Enter Height in cm" required>
            <label for="we">Weight (kg): </label>
            <input type="number" id="we" placeholder="Enter Weight in kg" required>
            <button onclick="calculateHealth();">Calculate</button>

            <div id="result"></div>
            <!-- Health History Table -->
            <div id="history">
                <h2>Health History</h2>
                <table id="historyTable" display="none;">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Heart Rate</th>
                            <th>Systolic</th>
                            <th>Diastolic</th>
                            <th>BMI</th>
                        </tr>
                    </thead>
                    <tbody id="historyBody"></tbody>
                </table>
            </div>
        </div>

        <script src="scripta.js"></script>
    </section>
    <section class="chart" id="chart">
        <canvas id="healthChart"></canvas>
    </section>
    <section class="chart" id="chart">
        <button onclick="location.reload();">Refresh To See The Updated Chart Table</button>
    </section>
    <!--Health Checker Ends-->

    <!--Footer Starts-->
    <footer>
        &copy 2025 India, All Rights Reserved By Healive AI chatbot
    </footer>
    <!--Footer Ends-->

</body>