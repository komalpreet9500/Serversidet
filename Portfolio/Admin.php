<!DOCTYPE html>
<html>
<head>
   <title>Admin Panel</title>
   <style type="text/css">
       *{
           margin: 0;
           padding: 0;
           font-family: sans-serif;
           box-sizing: border-box;
       }
       body{
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
       }
       form{
           padding: 30px;
           border: 1px solid silver;
           border-radius: 20px;
       }
       div{
           margin: 20px 0;
       }
       input{
           width: 300px;
           height: 35px;
           padding-left: 10px;
           border-radius: 5px;
           border: 1px solid black;
       }
       button{
           padding: 10px 30px;
           border: none;
           outline: none;
           background-color: blue;
           color: white;
           border-radius: 4px;
           opacity: 0.8;
           cursor: pointer;
           transition: 0.2s;
       }
       button:hover{
           opacity: 1;
       }
   </style>
</head>
<body>

<form method="post" action="index.php">
   <h1>Admin Panel</h1>
   <div>
       fullName:<input type="text" name="full_name"><br>
   </div>
   
       <button type="submit" name="submit">Submit</button>
   </div>
</form>

</body>
</html>