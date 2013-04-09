<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 

        <!--[if IE 6]>
            <link href="http://www.jplayer.org/css/ie6.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <title>Set a search Genre</title>

        <link rel="stylesheet" href="css/eggplant/jquery-ui-1.10.2.custom.min.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="css/base.css">

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/base.js"></script>

        <!--[if gte IE 9]>
        <style type="text/css">
          .gradient {
             filter: none;
          }
        </style>
      <![endif]-->
    </head>
    <body>

    <div class="container">

        <h1>Terms registration:</h1>

        <form>
            <div class="control-group">
                <label class="control-label" for="genre">Genre:</label>
                <div class="controls">
                    <input type="text" id="genre" name="genre" placeholder="Blues">
                </div>
            </div>

            <fieldset>
                <legend>MOOD</legend>

                <!-- MOOD SLIDERS -->
                <!-- POSITIVE - NEGATIVE -->
                <div class="mood">
                    <div class="display-bar">
                        <strong class="label left">Negative</strong>
                        <strong class="label right">Positive</strong>
                        <em>0</em>
                    </div>
                    <div id="positive-negative" class="slider"></div>
                    <div class="clear"></div>
                </div>

                <div class="mood">
                    <div class="display-bar">
                        <strong class="label left">Sad</strong>
                        <strong class="label right">Happy</strong>
                        <em>0</em>
                    </div>
                    <div id="happy-sad" class="slider"></div>
                    <div class="clear"></div>
                </div>

                <div class="mood">
                    <div class="display-bar">
                        <strong class="label left">Subdued</strong>
                        <strong class="label right">Intense</strong>
                        <em>0</em>
                    </div>
                    <div id="intense-subdued" class="slider"></div>
                    <div class="clear"></div>
                </div>

                <div class="mood">
                    <div class="display-bar">
                        <strong class="label left">Serene</strong>
                        <strong class="label right">Angry</strong>
                        <em>0</em>
                    </div>
                    <div id="angry-serene" class="slider"></div>
                    <div class="clear"></div>
                </div>

            </fieldset>
        </form>
    </div>

    </body>
</html>
