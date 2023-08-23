<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Developers</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="stylesheet" href="./css/acc.css" />
  <?php require "./links.php" ?>
  
  <style>
/* Reset default margins and paddings */
body, h1, h2, p, ul, li {
  margin: 0;
  padding: 0;
}

body {
  font-family : consolas;
  background-color: #f4f4f4;
}

/* Navigation Bar Styles */
#navbar {
  background-color: #333;
  color: white;
  /* ... other styles ... */
}

#navbar ul {
  /* ... other styles ... */
}

#navbar ul li a {
  color: white;
  text-decoration: none;
  /* ... hover effect ... */
}

/* Container Styles */
.container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
}

/* Developer Card Styles */
.developer-card {
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  margin: 20px 0;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.developer-card h2 {
  margin-top: 0;
  color: #333;
}

.developer-card p {
  margin: 10px 0;
  color: #555;
}

/* Developed Footer */
#developed {
  background: #222;
  color: white;
  text-align: center;
  padding: 10px 0;
  font-size: 14px;
}


/* style.css */

#navbar {
  font-family: 'Montserrat', sans-serif;
  /* ... rest of your navbar styles ... */
}

/* ... other styles ... */

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.developer-card {
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  margin: 20px 0;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

/* ... other developer card styles ... */

#developed {
  background: rgb(0, 30, 64);
  text-align: center;
  color: white;
  font-family: 'Hind Madurai', sans-serif;
  padding: 0.3rem 0;
  cursor: default;
  user-select: none;
}

















#navbar {
    font-family: 'Montserrat', sans-serif;
    color: whitesmoke;
    background-color: rgba(240, 35, 212, 0.9);
    width: 100%;
    height: 3rem;
    display: flex;
    font-size: 1.4rem;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2;
}

#navbar .nameOfProject {
    margin: 0 1rem 0 1rem;
    cursor: default;
}

#navbar ul {
    display: flex;
    margin-right: 1rem;
    list-style: none;
}

#navbar ul li button {
    margin: 0 1rem 0 1rem;
    cursor: pointer;
    font-size: 1.1rem;
    text-decoration: none;
    color: white;
    background-color: transparent;
    border: none;
    position: relative;
    transition: all 0.2s;
}

#navbar ul li:hover button {
    color: gainsboro;
}

#navbar ul li button::before {
    content: '';
    position: absolute;
    width: 0%;
    height: 10%;
    bottom: -25%;
    background-color: gainsboro;
    transition: all 0.2s;
}

#navbar ul li button:hover::before {
    width: 100%;
}








    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .developer-card {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      margin: 20px 0;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .developer-card h2 {
      margin-top: 0;
    }
    
    .developer-card p {
      margin: 10px 0;
    }



    #developed {
    background: rgb(0, 30, 64);
    text-align: center;
    color: white;
    font-family: 'Hind Madurai', sans-serif;
    padding: 0.3rem 0;
    cursor: default;
    user-select: none;
}
  </style>
</head>
<body>

    <!-- navbar -->
    <nav id="navbar">
      <div class="nameOfProject">CONTENT MANAGEMENT SYSTEM</div>
      <ul>
        <li><a href="../index.php"><button id="homePageBtn">Home</button></a></li>
        <li><a href="./About.php"><button id="AboutBtn">About US</button></a></li>
        <li><a href="../index.php"><button id="createPageBtn">Create</button></a></li>
        <li><a href="../index.php"><button id="profilePageBtn">Profile</button></a></li>
      </ul>
    </nav>   



<br>
    <div class="developer-card">
      <h2>Contact US</h2>
      <p> Project Management System is a platform from which employees and managers for collaboration and
communication. If you have any queries please contact the developer.<br><br>
Basically, It helps in alloting a task realated to ongoing or upcomming project for members of specific Team. 
Moreover it also helps in tracking the progress of the task. It also handles data of Team members.<br><br><br>
FUNCTIONS OF THIS SYSTEM : <br>
- User registration and Login <br>
- Searching a Blog<br>
- Managing a Blog<br>
- Giving Feedback<br><br>

You can also contact the technical Team <br>
EMAIL : cms@gmail.com<br>
CONTACT : 9876789876</p>
     
      <div id="socialBtnContainer">
        <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a> &nbsp;
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"  style="color:rgb(240, 19, 122);"></i></a>&nbsp;
        <a href="https://www.linkedin.com/in/"><i class="fa-brands fa-linkedin"></i></a>&nbsp;
        </div>
    </div>



    <div class="developer-card">
      <h2>Developer Details</h2>
      <p>Manish</p>
      <p>Full Stack Developer Intern at Bharat Intern</p>
      <p>Currently pursuing MCA at NMAM Institute of Technology, Nitte</p>
      <p>Email: manishshettigar25@gmail.com</p>
      <p>Phone: 9606712345</p>
      <p>Place: Mangalore</p>
     
      <div id="socialBtnContainer">
        <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a> &nbsp;
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"  style="color:rgb(240, 19, 122);"></i></a>&nbsp;
        <a href="https://www.linkedin.com/in/"><i class="fa-brands fa-linkedin"></i></a>&nbsp;
        <a href="https://www.github.com/in/"><i class="fa-brands fa-github" style="color:black;"></i></a>&nbsp;
      </div>
    </div>
    
    
    <!-- Add more developer cards as needed -->
  </div>
  
  <div id="developed">copyright @2023 Manish</div>
</body>
</html>
