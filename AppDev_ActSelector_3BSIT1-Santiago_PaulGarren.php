<!DOCTYPE html>
<html lang="en">
    <head>
        <title>3BSIT-1</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style type="text/css">
           body {
                background-image: url("images/bgbody.gif"); /* Correct the slashes */
                background-size: cover; /* Ensures the GIF covers the entire background */
                background-position: center; /* Centers the background */
                background-repeat: no-repeat; /* Ensures the image doesn't repeat */
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            
            .custom-container {
                border-color: black;
                border-bottom: solid;
                border-width: 2px;
                background-color: #BF98A0;
                padding: 20px;
                width: 100%;
                height: auto;
                text-align: center;
            }
            
            .head-text {
                font-size: 20px;
                text-align: center;
                font-family: Helvetica; 
                font-weight: bold;
            }
            .section, .name {
                margin-top: 20px;
                font-size: 20px;
                text-align: center;
                font-family: Helvetica; 
                font-weight: bold;
            }
            .bootstrap-text{
                font-size: 20px;
                text-align: center;
                font-family: Helvetica; 
                font-weight: bold;
            }
            img{
                margin-top: 15px;
                width: 200px;
                height: 200px;
                border-radius: 50%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            }
            .activity{
                font-size: 20px;
                color: blue;
            }
            .activity-box{
                margin-top: 30px;
                border: 2px solid black;
                width: 30%;
                align-items: center;
                text-align: center;
            }
            
        </style>
    </head>
    <header class="custom-container">
          <h3 class = "head-text">CCC311-18/CCL311-18 Applications Development & Emerging Technologies</h3>
          <h1 class="section">3BSIT-1</h1>
    </header>
        <body>
            <center>
                <img src="images\studpic.jpg" alt="Stud_pic">
                <p class="name">Santiago, Paul Garren T.</p>
                <p class="bootstrap-text">Bootstrap Activities</p>

                <div class = "activity-box">
                    <a class="activity" href="activity1.php">Activity 1</a> </br>
                    <a class="activity" href="activity2.php">Activity 2</a> </br>
                    <a class="activity" href="activity3.php">Activity 3</a> </br>
                    <a class="activity" href="#">Activity 4</a> </br>
                </div>
            </center>
        </body>
</html>