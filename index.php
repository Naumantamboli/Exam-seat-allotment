<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    <title>DBMS Project</title>
</head>

<body>
    <div id="home">
        <div class="left">
            <div class="top">
                <h2>ALLOCATION MASTER</h2>
                <img src="photos/logo.jpeg" alt="">
            </div>
            <div class="bottom">
                <div class="section">
                    <strong>DASHBOARD</strong>
                    <li>
                        <i class="fa fa-solid fa-graduation-cap"></i>
                        <a href="#">Teacher management</a>
                    </li>
                    <li>
                    <i class="fa fa-solid fa-user"></i>
                        <a href="#">Student management</a>
                    </li>
                </div>

                <div class="section">
                    <strong>USERS</strong>
                    <li>
                        <i class="fa fa-solid fa-book"></i>
                        <a href="">Subject Management</a>
                    </li>
                    <li>
                    <i class="fa fas fa-user-graduate"></i>
                        <a href="">Class management</a>
                    </li>
                    <li>
                        <i class=" fa fa-solid fa-gear"></i>
                        <a href="">Settings</a>
                    </li>
                </div>
                <div class="section">
                    <strong>REPORTS</strong>
                    <li>
                        <i class="fa fa-solid fa-bug"></i>
                        <a href="">Give reports</a>
                    </li>
                    <li>
                        <i class="fa fa-solid fa-comment"></i>
                        <a href="">Give feedback</a>
                    </li>
                    <li>
                        <i class="fa fa-solid fa-certificate"></i>
                        <a href="">Give certificates</a>
                    </li>
                </div>
                <div class="section">
                    <strong>PERMISSIONS</strong>
                    <li>
                        <i class="fa fa-solid fa-bug"></i>
                        <a href="">Give permission</a>
                    </li>
                    <li>
                        <i class="fa fa-solid fa-comment"></i>
                        <a href="">Access</a>
                    </li>
                </div>
                <div class="section">
                    <strong>PERMISSIONS</strong>
                    <li>
                        <i class="fa fa-solid fa-bug"></i>
                        <a href="">Give permission</a>
                    </li>
                    <li>
                        <i class="fa fa-solid fa-comment"></i>
                        <a href="">Access</a>
                    </li>
                </div>
            </div>
        </div>

        <!-- ///////////////////////////// -->
        <div class="right">
            <div class="top">
                <div class="navbar">
                    <li><a href="#">Home</a></li>
                    <li><a href="#formstudent">Search Student</a></li>
                    <li><a href="#formteacher">Search Teacher</a></li>
                    <li><a href="#about">About</a></li>
                    <div class="prof">
                        <a href=""><img src="photos/prof.png" alt=""
                                style="border-radius: 100%;height: 40px;position: absolute;right: 2%;"></a>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div id="boxes">
                    <div class="box" style="background-color: rgb(255, 208, 0);">
                    <i class="fa fa-solid fa-user" class="icons"></i>
                        <div class="subbox">
                            <h1>84</h1>
                            <h2>Total Students</h2>
                        </div>
                    </div>
                    <div class="box" style="background-color: rgb(56, 126, 35);">
                        <i class="fa fa-solid fa-chalkboard-user" class="icons"></i>
                        <div class="subbox">
                            <h1>100</h1>
                            <h2>Total teachers</h2>
                        </div>
                    </div>
                    <div class="box" style="background-color: rgb(191, 100, 191);">
                        <i class="fa fa-solid fa-book fa-2xl" class="icons"></i>
                        <div class="subbox">
                            <h1>19</h1>
                            <h2>Total subjects</h2>
                        </div>
                    </div>
                    <div class="box" style="background-color: rgb(226, 133, 133);">
                        <i class="fa fa-solid fa-layer-group fa-2xl" class="icons"></i>
                        <div class="subbox">
                            <h1>13</h1>
                            <h2>Total Classes</h2>
                        </div>
                    </div>
                </div>

                <div id="formstudent">
                    <div id="combine">
                        <h1>Search Student</h1>
                        <form  method="POST" action="seat_allotment_2.php">
                            <div class="formele">
                                <label for="name">Name</label>
                                <input type="text" name="" id="name" placeholder="Enter your name">
                            </div>
                            <div class="formele">
                                <label for="email">Email</label>
                                <input type="email" name="" id="email" placeholder="Enter your email">
                            </div>
                            <div class="formele">
                                <label for="Rollno">Rollno</label>
                                <input type="number" name="" id="Rollno" placeholder="Enter your Rollno">
                            </div>
                            <div class="formele">
                                <label for="PRN">PRN</label>
                                <input type="number" name="prn" id="PRN" placeholder="Enter your PRN">
                            </div>
                            <div class="formele">
                                <label for="name">Branch</label>
                                <input type="text" name="" id="name" placeholder="Enter your Branch">
                            </div>
                            <!-- <button id="Submit"><a href="#"
                                    style="text-decoration: none;color: white;font-weight: bold;">Submit</a></button> -->
                                    <input type="submit"  value="submit" name="submit" class="btn"> 
                    </div>
                    </form>
                </div>
                <div id="formteacher">
                    <div id="combine">
                        <h1>Search Teacher</h1>
                        <form action="abc.php">
                            <div class="formele">
                                <label for="name">Name</label>
                                <input type="text" name="" id="name" placeholder="Enter your name">
                            </div>
                            <div class="formele">
                                <label for="email">Email</label>
                                <input type="email" name="" id="email" placeholder="Enter your email">
                            </div>
                            <div class="formele">
                                <label for="Rollno">Phone No</label>
                                <input type="number" name="" id="Rollno" placeholder="Enter Phoneno">
                            </div>
                            <div class="formele">
                                <label for="PRN">Gr No</label>
                                <input type="number" name="" id="PRN" placeholder="Enter your Grno">
                            </div>
                            <div class="formele">
                                <label for="name">Qualification</label>
                                <input type="text" name="" id="name" placeholder="Enter the qualification">
                            </div>
                            <!-- <button id="Submit"><a href="#"
                                    style="text-decoration: none;color: white;font-weight: bold;">Submit</a></button> -->
                                    <input type="submit"  value="submit" name="submit" class="btn"> 
                    </div>
                    </form>
                </div>
                <div id="about">
                    <h1>About Databases</h1>
                    <div id="aboutinfo">
                        <p>A database is a structured collection of data organized in a way that allows easy access,
                            retrieval, and management. It serves as a centralized repository where information can be
                            stored, updated, and retrieved efficiently. Databases are integral to various applications
                            and systems, ranging from small-scale personal projects to large enterprise-level
                            operations. Common
                            types of databases include relational databases, where data is organized into tables with
                            predefined relationships, and NoSQL databases, which offer more flexibility in handling
                            unstructured or semi-structured data. Overall, databases play a crucial role in modern
                            computing by providing a reliable and efficient means of managing and accessing data.
                        </p>
                        <iframe src="https://www.youtube.com/embed/gOghS3BmaxI" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <script src="app.js"></script>
</body>

</html>