<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Contact Page</title>
    <link rel= "stylesheet" href= "contact.css" >
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/phone_contact.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="css/phone_contacts_2.css">
</head>
<style>

</style>
<body>
    
    <!-- Navigation  Box -->
        <!-- Navigation  Box -->
    <nav class = "flex-container">
        <div><a href = "index.php" >Home</a></div>
        <div><a href = "about.php" >About</a></div>
        <div><a href = "PHP.php" >More Quizes</a></div>
        <div><a href = "Leaderboard.php" >Leader Board</a></div>
        <div><a href = "contact.php" >Contact Us</a></div>  
    </nav>

 
    
     <!-- <img class = "bg" src ="contact_image.jpg" alt = "background">  -->
     <img class = "bg" src ="images/backgroud_pen.jpeg" alt = "background">
    
    <!-- 3 Images (mail phone and address) -->
    <div class = "Container_conatcts" >
        <div class = "box_contacts">
            <img id = "mail_img" src= "images/mail.png" alt="mail">    
            <p class = "text_contact">shubhamchouksey1998@gmail.com</p>        
        </div>
        
        <div class = "box_contacts">
            <img id = "location_img" src= "images/location.png" alt="mail">
            <p class = "text_contact">Narshingpur, Madhya Pradesh</p>
        </div>
        <div class = "box_contacts" >
            <img id = "phone_img" src= "images/phone.png" alt="phone">
            <p class = "text_contact">Mails are encouraged</p>
        </div>
    </div>


    <!-- response Form -->
    <div class="contact_box">
        <form action = "contact.php" method = "post" id = "form">    
            <div class="items_contact">
                <!-- <label for = "name">Name :</label> -->
                <input type = "text" id = "name" name ="name" placeholder="Enter your name">
            </div>
            
            <div class="items_contact">
                <!-- <label for ="email">Email: </label> -->
                <input type = "email" id ="email" name ="email" placeholder="Enter your email">    
            </div>
            <div class="items_contact">
                <!-- <label for="phone">Phone Number: </label> -->
                <input type="phone" name="name" id="phone" placeholder="Enter your phone">            
            </div>
            <div class="items_contact">
                <!-- <label for="message">Message: </label> -->
                <textarea name="message" id="message" cols="30" rows="10" placeholder ="Description"></textarea>     
            </div>
            <div class="but">
                <!-- <input type="submit" value="Submit"> -->
                <button class = "button">Submit</button>
            </div>
                        
        </form>
    </div>

    <!-- Facebook Linkedin Instagram Icons -->
    <div class = "bottom_contact">
        <a href = "https://www.linkedin.com/in/shubham-chouksey-971108156/" >
            <img id = "linkedin_img" src= "images/linkedin.png" alt="linkedin">
        </a>    
        <a href = "https://www.facebook.com/shubham.chouksey.904750">
            <img id = "facebook_img" src= "images/facebook.png" alt="facebook">
        </a>
        <a href = "https://github.com/ShubhamChouksey123" >
            <img id = "github_img" src= "images/github.png" alt="github">
        </a>
        
        <a href = "https://www.instagram.com/shubham_chouksey1/?hl=en">
            <img id = "instagram_img" src= "images/instagram.jpg" alt="instagram">
        </a>
        
    </div>
    

    <div class ="footer">
        Copyright &copy; www.unpleasantquiz.com. All rights reserved!
    </div>   

</body>
</html>
