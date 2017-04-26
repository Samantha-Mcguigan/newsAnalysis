<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<!--<?php
require_once('config.php');
$input_search = urlencode((string) strip_tags($_GET['input_search']));
?>-->
<?php
require_once('config.php');
$input_search = htmlspecialchars($_GET['input_search']);
?>

    <title>News Analysis: Search</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="buttons.js" ></script>
    <script type="text/javascript" src="search.js">//</script>
  </head>
  <body>
    
        <!--#include virtual="menu.html" -->
    <h2><img id="searchIcon" src="search-icon.png" alt="search icon" width="30"/> Search results</h2>
    <div class="text">
            <p>Enter a word or search string in the search box below to find its occurrence and context in our collection of news articles. Our search retrieves <strong>exact matches</strong>, as well as <strong>close matches</strong> retrieved either by <dfn>ngram searches</dfn> (for portions of the string you entered) or by <dfn>Levenshtein distance</dfn> (or terms calculated as a close match with a few characters of difference).</p>
            <p><img id="searchIcon" src="search-icon.png" alt="search icon" width="18"/> <input id="search" type="text" size="25" placeholder="press [enter] to search"/></p>
        </div>
    <p>Our search retrieves <strong>exact matches</strong>, as well as <strong>close matches</strong> retrieved either by <dfn>ngram searches</dfn> (for portions of the string you entered) or by <dfn>Levenshtein distance</dfn> (or terms calculated as a close match with a few characters of difference). Clicking on the highlighted match term in the search results leads to the full article as posted by its host news organization.</p>
<?php
$xql = REST_PATH . "/db/queries/newsAnalysisKwic.xql?input_search=$input_search";
echo file_get_contents($xql);
?>
<!--#include virtual="bottom.html" -->
</body>
</html>