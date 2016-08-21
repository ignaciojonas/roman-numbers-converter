<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{$title}</title>
      <link href="components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
        <div class="starter-template">
          <h1>Roman Numbers Converter</h1>
          <p class="lead">Welcome to the best Roman Number Converter</p>
          <form action="index.php?action=convert" method="POST">
            <div class="form-group">
              <label for="arabicNumber">Arabic Number</label>
              <input type="number" class="form-control" id="arabicNumber" name="arabicNumber" placeholder="Insert Arabic Number">
            </div>
            <button type="submit" class="btn btn-default">Convert</button>
          </form>
          {if $romanNumber}
          <h1>The roman number converted is: {$romanNumber}</h1>
          {/if}
        </div>
      </div>

      <script src="components/jquery/jquery.min.js"></script>
      <script src="components/bootstrap/js/bootstrap.min.js"></script>
    </body>
  </html>
