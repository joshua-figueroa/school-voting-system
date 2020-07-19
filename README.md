# Online Voting System for School Elections

Students can simply pick amongst the candidates they want to vote. They can also see the results in real-time. The results page includes a count for each candidates and a bar graph that tallies the vote per grade level. The admin will facilitate the encoding of students information into the database. 

## Admin Page

The admin can add students information to the database as long as they inputed the correct credentials on the admin login page. For the purpose of testing, the userID and password of the admin is both set to "admin". To access the admin page, go to voting_system/admin.php

## Login Page

Each students will be noted by their respective presidents about their userID and password that they will need to be able to vote. The admin is the one who will disseminate the students credential to each president.

## Terms and Conditions

Upon logging in, a terms and conditions page as well as data privacy page will be shown. They need to agree to be able to go to the voting page.

## Voting Page

Students will pick the person they want to vote. The image of the candidates will be shown on the screen. They can deselect anytime they want and they can also leave it blank.

## Results Page

Results page will be updated in real-time. The data is from the rest API connected to the MySQL Database. Names of each candidates for each positions will be shown on the screen as well as the amount of vote they have gathered. There is also a bar graph for each position that tallies the vote per grade level per candidate. 

## Technology Stack

### Front-End
HTML 5, CSS 3, JavaScript, Bootstrap 5-alpha, Chart.js, jQuery

### Back-End
Vanilla PHP, MySQL