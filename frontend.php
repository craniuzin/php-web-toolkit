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
        <link rel="stylesheet" href="css/colours.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/moodmap.css">


        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/raphael.js"></script>
        <script type="text/javascript" src="js/raphael.colorpicker.js"></script>
        <script src="js/base.js"></script>
        <script src="js/moodmap.js"></script>

        <!--[if gte IE 9]>
        <style type="text/css">
          .gradient {
             filter: none;
          }
        </style>
      <![endif]-->
    </head>
    <body>



        <div class="top-bar">
            <div class="wrap">
                <a href="" class="logo"><img src="img/logo.jpg" /></a> 

                <nav>
                    <a href="#">Sign in</a>
                    <a href="#">Help</a>
                    <a href="#" class="cart">(0)</a>
                    <a href="#" class="youtube-partner"></a>
                </nav>
            </div>
        </div>

    <div class="container">
        <div class="main">

            <a class="already-has">Already have a youtube video?</a>

            <div class="search">
                <h1>Find music by: <strong>Mood</strong> /  <strong>Occasion</strong></h1>
                <div class="graphs">
                    <div class="big-box mood">
                        <h2>Map your <strong>Mood</strong></h2>

                        <div id="moodmapblock" class="gray8bg rowfix">
                            <div  class="rowfix">
                                <div class="rowfix" id="mainmapcontainer">
                                    <a class="mmaptooltip smile" tooltip="Serene"></a>
                                    <a class="mmaptooltip smileyellow" tooltip="Happy"></a>
                                    <a class="mmaptooltip sad" tooltip="Sad"></a>
                                    <a class="mmaptooltip angry" tooltip="Angry"></a>
                                    <div id="svg-container">
                                        <div id="mpcontent" style="overflow: visible;">
                                            <div id="mappicker" style="overflow: visible;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="help">Drag slider across the circle</div>
                    </div>

                    <div class="big-box tags">
                        <h2>Pick your <strong>Occasion</strong></h2>

                        <div class="help">Music for certain categories</div>
                    </div>
                    <div class="clear"></div>

                    <div class="or-div">OR</div>

                    <div class="advanced">
                        <input type="text" class="advanced-field" placeholder="Find music by: Occasion, Genre, Keyword" />
                        <input type="button" class="button go" value="GO!" />
                        <a>Advanced</a>
                    </div>

                    <div class="clear"></div>

                    <div class="tabs">
                        <a class="active">Songs</a>
                        <a>Sounds Effects</a>
                        <div class="clear"></div>
                    </div>
                    <div class="results">


                        <div class="filter">
                            <span>Filter:</span>
                            <a class="active">Instrumental</a>
                            <a>Vocal</a>
                            <a>Both</a>
                        </div>

                        <div class="list">
                            <div class="block genre active">
                                <div class="name">Rock</div>
                                <ul>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block genre active">
                                <div class="name">Blues</div>
                                <ul>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block genre">
                                <div class="name">Urban</div>
                                <ul>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block genre">
                                <div class="name">Country</div>
                                <ul>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="play-button"></span>
                                        <span class="artist-title"><strong>Justin Earl</strong> - Love in lust</span>
                                        <div class="right">
                                            <span class="time">4:00</span>
                                            <span class="add"></span>
                                            <span class="share"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
