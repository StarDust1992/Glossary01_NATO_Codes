<!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$model?></title>
    <h1 id="title"><?=$model?></h1>
  </head>

  <div class="container-table" style="overflow-x:auto";>
    <table class="table" style="overflow-x:auto" ;>
  <tr>
    <th>Symbol</th>
    <th>Code Word</th>
    <th>Morse Code</th>
    <th>Phonic</th>
  </tr>
  <tr>
    <td><?=implode("<br>",$symbol)?></td>
    <td><?=implode("<br>",$names)?></td>
    <td><?=implode("<br>",$morse_code)?></td>
    <td><?=implode("<br>",$pronounce)?></td>
  </tr>
</table>

    </div>


 
