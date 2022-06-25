
<!DOCTYPE html>
<html>
<head>
   <title>Komalpreet Kaur -Project </title>

   <style type="text/css">

       *{
           margin: 0;
           padding: 0;
           font-family: sans-serif;
           box-sizing: border-box;
       }

       header{
           height: 10vh;
           background-color: red;
           color: white;
           font-family: sans-serif;
       }

       .section{

           display: flex;
           height: 80vh;
       }

       aside{

           flex: 0.25;
           border-right: 2px dotted black;
           padding-top: 35px;
       }

       aside img{

           width: 100%;
           height: 400px;
           object-fit: scale-down;
       }

       aside h1{

           text-align: center;
           padding: 20px;

       }

       main{
           flex: 3vh;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
       }

       main h2{
           margin-bottom: 30px;
           font-size: 45px;
           color:red;

       }
       main p{
               margin-bottom: 30px;
              font-size: 45px;
              color:red;
       }

       footer{

           height: 15vh;
           background-color: red;
       }

       header h1{
           text-align: center;
           color: white;
           line-height: 10vh;
       }

       footer h2{
           text-align: center;
           color: white;
           line-height: 10vh;
       }

       footer p{
        line-height:2px;
        color:black;
        text-align: center;
      }

   </style>
</head>
<body>

  <div>

<header>
   <h1 class="heading">I am Header</h1>
</header>

<div class="section">
   <aside>
          <img src="pink.jpg">
         
       <h1><?php echo $_POST["description"]."<br/>"; ?> </h1>

   </aside>

   <main>
     
       <h2><?php echo $_POST["title"]."<br/>"; ?></h2>
        <p><?php echo $_POST["welcome"]."<br/>"; ?></p>
   </main>

</div>
<footer>
   <h2>I am Footer</h2>
</footer>

</body>
</html>