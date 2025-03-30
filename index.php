<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>accordion</title>
  <link href="index.css" rel="stylesheet">
</head>
<body>

<p>
<form method="GET" action=".">

  <details <?php if(isset($_GET['categoryid'])){ if($_GET['categoryid']>1){ echo 'open'; } } ?>><summary class="category1"><a href="?categoryid=1&id=15">A</a></summary>
    <details id="18" <?php if(isset($_GET['categoryid'])){ if($_GET['categoryid']>2){ echo 'open'; } } ?>><summary class="category2"><a href="?categoryid=2&id=18">AA</a></summary>  
        <summary class="category3" <?php if(isset($_GET['id'])){ if($_GET['id']==22){ echo 'open'; } } ?>><a href="?categoryid=3&id=22">AAA</a></summary>
        <summary class="category3" <?php if(isset($_GET['id'])){ if($_GET['id']==23){ echo 'open'; } } ?>><a href="?categoryid=3&id=23">AAB</a></summary>
        <summary class="category3" <?php if(isset($_GET['id'])){ if($_GET['id']==24){ echo 'open'; } } ?>><a href="?categoryid=3&id=24">AAC</a></summary>
    </details>
    <details><summary class="category2">BB</summary>  
      <summary class="category3">AAD</summary>
      <summary class="category3">AAE</summary>
    </details>
    <details><summary class="category2">CC</summary>  
      <summary class="category3">AAF</summary>
      <summary class="category3">AAG</summary>
      <summary class="category3">AAH</summary>
    </details>
  </details>

  <details <?php if(isset($_GET['categoryid'])){ if($_GET['categoryid']>1){ echo 'open'; } } ?>><summary class="category1"><a href="?categoryid=1&id=16">B</a></summary>
  </details>

  <details <?php if(isset($_GET['categoryid'])){ if($_GET['categoryid']>1){ echo 'open'; } } ?>><summary class="category1"><a href="?categoryid=1&id=17">C</a></summary>
  </details>

</form>

</p>

</body>
</html>

