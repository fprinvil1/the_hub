@extends('layouts.app')

@section('content')
    <html>
<h1>About Us</h1>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<p class="a"> Our website is an online platform where users can post their blog content.
 Aside from posting their own blog users can also Comment on other users post and if they enjoy a particular  blog, 
 we have a like and dislike functions that lets users express how they feel about a post without having to leave a comment.We also implimeted a 
 live chat room where users can use to chat to eachother.
</p>
<h5><b>Why?</b></h5>
 <p>
 The main reason why we picked this project is that it is very versatile. 
 There are different forms of blogs – the spectrum ranges from online diaries to blogs
 about education or you can create a blog for a corporation blogs. Most blogs have a thematic focus, such as travel, 
 fashion or recipes, and many professional discussions blogs have become established as a recognized 
 online media resource. As well as private users, many companies have discovered blogging and employ 
 corporate blogs as a tool to communicate with their readers.
</p>
<h2>Team Members</h2>
<div class="grid-container">
    <div class="card">
      <img src="/storage/about_images/Frantz.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Frantz Prinvil</b></h4> 
        <p>Major: Computer science </p>
      </div>
    </div>
    <!---------------------------------------------------->
    <div class="card">
      <img src="/storage/about_images/rob1.jpg"alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Robert Jones</b></h4> 
        <p>Major: Computer Engineering</p> 
      </div>
    </div>
    <!---------------------------------------------------->
      <div class="card">
      <img src="/storage/about_images/kenan.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Kenan Eregli</b></h4> 
        <p>Major: Computer Engineering & Computer science </p> 
      </div>
    </div>
    <!---------------------------------------------------->
    <div class="card">
      <img src="/storage/about_images/myron.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Myron Zambrano</b></h4> 
        <p>Major: Computer science </p> 
      </div>
    </div>
    <!---------------------------------------------------->
    <div class="card">
      <img src="/storage/about_images/Snapchat.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Sean Ciser</b></h4> 
        <p>Major: Computer Engineering & Computer science </p> 
      </div>
    </div>
    <!---------------------------------------------------->
    <div class="card">
      <img src="/storage/about_images/David.jpg" alt="Goat" style="width:100%">
       <div class="container">
        <h4><b>Davidson Dore</b></h4> 
        <p class="title">Major: Computer Engineering </p>
       </div>
    
       </div>
      </div>
<div class="container-howto">
      <h2>How to</h2>
<p><b>Before you can start posting your own blogs you must first create your own acount.You can do so by following the steps below.</b> .</p>
<p>1.Go to the top right of webpage and click on the <b> "Sign in " </b>icon(this is if you havent created an account yet , if you already have an acount skip to step 4). </p>
<p>2.While your in your sgin up page fill in your credentials then click <b>"register"</b>.</p>
<p>3.Now its time for you to create your own post. Go to the top right of your page and click on the icon labled <b>"Create Post"</b>.</p>
<p>4.On this page you will create a title for your Blog and in the Body section is where you will start creating your blog post.</p>
<p>5.After you finish typing up your blog post you you will see an icon labled <b>"Choose File"</b> , click on it to select photo from your computer to uplode.</p>
<p>6.After you have finished typing up your blog and slelcted a picture, click on <b>"Publish".</b></p>
<p>7.Congratulations you have created your first Blog post.</p>
</div>
<h3>Editig</h3>
<p><b>If you are not happy with what you have posted you can always go back and edit it, flow the step below to do so.</b> </p>
<p>1.At the top of your navigation bar you will see a icon labled <b>"Home"</b>, click on it.</p>
<p>2.From here you will see an <b>"Edit"</b> icon, click on it. </p>
<p>3.From here you can make the necessary changes you want to your blog.</p>
<p>4.After you are done click the <b>"Submit"</b> button, this will change you original post to the edited one. </p>

</body>

     <link href="css/about.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
</html>  

@endsection