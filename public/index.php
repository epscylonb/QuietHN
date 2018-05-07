<!DOCTYPE html>
<html>
  <head>
    <title>Quiet Hacker News</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hacker news, hacker, news, quiet, quiet hacker news, tom speak, hn, hn without comments, hacker news without comments, hacker news no comments">
    <meta name="HandheldFriendly" content="true" />
    <meta name="Description" content="A quieter approach to Hacker News. Links and nothing else." />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <style>
      html, body { background: #F0F0F0; }
      body {
        width: 800px;
        margin: 44px auto;
      }
      ol {
        list-style: ;
        margin: 0 0 0 18px;
        padding: 0;
      }
      li {
        margin-bottom: 22px;
      }
      .links {
        margin-top: 64px;
        padding-bottom: 4px;
      }
      .links a {
        float: left;
      }
      .links a:last-of-type {
        float: right;
      }

      @media only screen and (max-device-width: 820px) {
        body {
          width: 85%;
        }
        h1 {
          margin-bottom: 30px;
          font-size: 40px;
        }
        li {
          margin-bottom: 50px;
          font-size: 20px;
        }
        li span {
          display: block;
        }
        .links a {
          font-size: 18px;
        }
      }
    </style>
  </head>
  <body>
    <h1>Quiet Hacker News</h1>

    <ol>
        <?php

            require_once 'functions.php';

            getTopStories();

        ?>
    </ol>

    <div class="links">
      Proudly written in PHP.
      <a href="https://github.com/tomspeak/quiet-hacker-news">Inspired By</a>
    </div>

  </body>
</html>
