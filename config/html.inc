<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php echo $title;?> Department view</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    
  </head>
  <body>
 
      
    
        <?php if(!isset($pre)) {?>
      <pre>
        <?php echo($content); ?>
      </pre>
      <?php }else{ ?>
       <?php echo($content); ?>
      <?php } ?>


  </body>
</html>
