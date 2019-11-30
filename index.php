<!DOCTYPE html>
<html>
  <head>
    <title>Studientag Bingo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="files/style.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script type="text/javascript" src="files/game.js"></script>
    <?php
	if (isset($_GET["set"])) {
		$file = $_GET["set"];
	} else {
		$file = "words";
	}
	echo "<script type=\"text/javascript\" src=\"sets/" .$file. ".js\"></script>"
    ?>
    <script type="text/javascript" src="files/content.js"></script>
  </head>
  <body onload="loadWords()"> 
    <table class="card" id="card0" border="1" cellspacing="0">
      <tbody>
        <tr>
          <td title="Click to mark cell" id="cell0"></td>
          <td title="Click to mark cell" id="cell1"></td>
          <td title="Click to mark cell" id="cell2"></td>
          <td title="Click to mark cell" id="cell3"></td>
          <td title="Click to mark cell" id="cell4"></td>
        </tr>
        <tr>
          <td title="Click to mark cell" id="cell5"></td>
          <td title="Click to mark cell" id="cell6"></td>
          <td title="Click to mark cell" id="cell7"></td>
          <td title="Click to mark cell" id="cell8"></td>
          <td title="Click to mark cell" id="cell9"></td>
        </tr>
        <tr>
          <td title="Click to mark cell" id="cell10"></td>
          <td title="Click to mark cell" id="cell11"></td>
          <td class="freecell">JOKER<br>(free&nbsp;square)<br>Beliebige Frage, die in den FAQ steht</td>
          <td title="Click to mark cell" id="cell12"></td>
          <td title="Click to mark cell" id="cell13"></td>
        </tr>
        <tr>
          <td title="Click to mark cell" id="cell14"></td>
          <td title="Click to mark cell" id="cell15"></td>
          <td title="Click to mark cell" id="cell16"></td>
          <td title="Click to mark cell" id="cell17"></td>
          <td title="Click to mark cell" id="cell18"></td>
        </tr>
        <tr>
          <td title="Click to mark cell" id="cell19"></td>
          <td title="Click to mark cell" id="cell20"></td>
          <td title="Click to mark cell" id="cell21"></td>
          <td title="Click to mark cell" id="cell22"></td>
          <td title="Click to mark cell" id="cell23"></td>
        </tr>
    </tbody></table>
<a class="github-button" href="https://github.com/PhictionalOne/bullshit-bingo/fork" data-size="large" data-show-count="true" aria-label="Fork PhictionalOne/bullshit-bingo on GitHub">Fork this on GitHub</a>
</body></html>
