<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 <h1>Let's see what we are working with...</h1>
  I'm not so certain what the inner loop might be, but we are getting closer all the time.
  Here is another test from VS Code to GitHub to OpenShift. <br/>
  This time via commandline. <br/>
  This time via WebHook.  <br/>
  How might we get a configMap or Secret value? <br/>
  Environment: <?php echo getenv("CURRENT-ENVIRONMENT"); ?> <br/>
  Environment Variable: <?php echo $_ENV['CURRENT-ENVIRONMENT']; ?><br/>
  Did it work?<br/>
  Here is a secret: <?php echo getenv("DEV-PASSWORD"); ?> <br/>
  Here is a secret Variable: <?php echo $_ENV['DEV-PASSWORD']; ?><br/>
  <br/>
 <?php phpinfo(); ?>
 </body>
</html>
