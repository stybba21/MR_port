
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        include("includes/header.php");
     ?>
    <div class="container">
        <div class="img-container col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="landscape">
            <div class="semi-circle alt-page" id="top-left"></div>
            <div class="semi-circle alt-page" id="top-right"></div>
            <div class="page-head">     
                <h2 class="page-title">A Little Bit About Me</h2>
            </div>
            <div class="semi-circle alt-page" id="bottom-left"></div>
            <div class="semi-circle alt-page" id="bottom-right"></div>
        </div>
    </div>
    <div class="row">
    <div class="content col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1" id="container-bottom">
        <div class="row">
            <img class="img-responsive about-imgs" src="images/profile.png" alt="self-picture">
            <p>My name is Matt Ray. I am 25 years old living in Colorado right now. This is my personal website that I will try to keep updated as much as possible. I have been trying to learn everything I can about web design because I find it to be very interesting, and I would like to make a career out of it. I spend the majority of my free time on a computer, and learning about the internet and how it works is an invaluable skill that I think more people should have. I have only been doing this for about a year and a half so I still have a long way to go but I will continue to progress as much as I can.</p>
       </div>
       <div class="row">
            <img class="img-responsive about-imgs" id="computer" src="images/computer.png" alt="computer">
            <p>Alongside my interest in web design I have done some other work with computer technology. I have built a few PCs for myself, friends, and family, and done a few repairs as well. I am by no means an expert in hardware, but I find it interesting to learn. For someone like me who spends a lot of time on a computer, I think it is not only important to know how to use one, but to know how they work at the base level. Similar to how almost everyone has a car and drives but may not know exactly how cars work, there is a disconnect in society with having smartphones, tablets, or computers and knowing what it is actually doing behind the interface that you see. 
        </div>
        <div class="row">
            <img class="img-responsive about-imgs" src="images/climb.png" alt="climbing">
            <p>Aside from computer stuff, one of my favorite hobbies is rock climbing. I have been climbing since I was about 10 years old. Living in Colorado has given me the opportunity to climb outside all the time and also train in some of the best gyms in the country. I used to go to competitions quite a bit when I was younger, but now I just do it mostly for fun. I have made a lot of great friends through climbing, and the community is very close knit and supportive. The thing that fascinates me the most about climbing is the unique movement. It can be very intuitive and natural, and very foreign and awkward at the same time. There is such a wide variety of movement that no two problems or routes feel the same. Also things can be climbed quite differently depending on a persons size or style which adds even more depth to it. It is fun to approach climbs like a problem, and find a correct solution that fits for myself.</p>
        </div>
    </div> <!-- content -->
    </div> <!-- row -->
<?php
        include ("includes/footer.php");
      ?>
</body>
</html>