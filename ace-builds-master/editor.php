<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>KODE KIWI</title>

  <style type="text/css" media="screen">
    body {
        overflow: hidden;
    }

    #editor {
        
        position: relative;
        height: 300px;
        
    }
  </style>

</head>


<body>

    <center>

        <h1>KODE KIWI</h1>
       <br><br>
    
    </center>


  <div class="container">
    <div class="row">

       <div class="col-md-6">
        <div id="editor">
         shit
          </div>
      
      </div>

    
    <div class="col-md-6">
  
      <p>FILE STUFF GO HERE</p>
    
    </div>

</div><!--end row -->
</div><!--end container -->



\

<!--EDITOR SCRIPTS -->
<script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");

    var code = editor.getValue();

    

    editor.setTheme("ace/theme/chaos");

    editor.session.setMode("ace/mode/php");
</script>
<script src="lala.js"></script>

<script src="https://code.jquery.com/ui/1.8.24/jquery-ui.js" integrity="sha256-xWbKoNW9eZkm1RodPMQHsVyql6jqeiD6IYvsGyKEW78="crossorigin="anonymous"></script>

<!-- BOOTSTRAP AND JS SCRIPTS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>




</body>
</html>
