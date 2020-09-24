?php
require_once("pdo.php");
if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['stream'])&&isset($_POST['year'])&&isset($_POST['query'])){
  $sql="INSERT INTO responses(username, email, stream, year, query) VALUES ( :placeholder1, :placeholder2, :placeholder3, :placeholder4, :placeholder5 )";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(array(
    ':placeholder1' => $_POST['username'],
    ':placeholder2' => $_POST['email'],
    ':placeholder3' => $_POST['stream'],
    ':placeholder4' => $_POST['year'],
    ':placeholder5' => $_POST['query']
  ));
} ?>
<html>
<head>
  <title>
    JeeQuery
  </title>
  <style type="text/css">
  fieldset li{
    color: green;
  }
  #greet{
    color: blue;
  }
  </style>
  <script type="text/javascript">
    function togreet(element){
      document.getElementById("greet").innerHTML="Hi "+element.value+", Hope you are safe and your studies are going good. Thanks for using my platform";
    }
  </script>
</head>
<body>
    <center>
  <h2 style="text-transform: uppercase;">Queries resolving with Jee query</h3>
  <fieldset><legend>General Guidelines</legend>
    <ul><li>Try to ask the query as crisp and short as possible and genuine</li>
      <li>Reply will be given for sure via mail within 24-48 hours</li>
      <li>Jee 2020 students will be given more preference than JEE 2021 and JEE 2022 aspirants</li>
      <li>NEET students can also ask for some mentoring Advice</li>
      <li>Doubts can be regarding mentoring, guidance and specific topic related queries</li>
      <li style="color: red">Questions solving can't be asked via this platform</li>
      <li style="color: red">Everything except Name are required</li>
    </ul></fieldset>
    <p id="greet"></p>
  <form method="POST">
    <b>Name(opt.)</b><input type="text" name="username" size="60" placeholder="Shlok Nemani" onchange="togreet(this)"><br><br>
    <b>Email Id</b><input type="text" name="email" size="60" placeholder="kappajacao@gmail.com" required><br><br>
    <b>Target Exam</b>
    <input type="radio" name="stream" value="PCM" required>JEE M & A
    <input type="radio" name="stream" value="PCB" required>NEET
    <br>
    <b>Target Year</b>
    <input type="radio" name="year" value="2020" required>2020
    <input type="radio" name="year" value="2021" required>2021
    <input type="radio" name="year" value="2022" required>2022
    <input type="radio" name="year" value="2023" required>2023
    <br><br>
    <b>Response</b><textarea name="query" rows="8" cols="58" placeholder="E.g: How to ace thermodynamics for JEE advanced?"required></textarea><br><br>
    <input type="radio" name="assured" value="assuretext" required>I am sure that everything filled are genuine<br><br>
    <input type="submit" id="subbutton" value="submit" style="padding: 10px 25px 10px 25px; font-weight: bold; box-shadow: 2px 1px; background: rgba(0,180,0);">
  </form>
  </center>
  <main>
    <h4>Offerings</h4>
    <ul><li>Online study store <a href="https://sho-1278.github.io/scoreup.github.io/" style="text-decoration: none; color: black; font-weight: bold;">SCOREUP JEE</a></li>
      <li> youtube channel <a href="https://www.youtube.com/results?search_query=shlok+nemani" style="text-decoration: none; color: black; font-weight: bold;">SHLOK NEMANI</a>
    </ul>
  </main>
  <footer>
    <center>
    ©Designed and maintained by Shlok Nemani<br>
    </center></footer>
</body>
</html>
