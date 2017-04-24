<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
require_once('config.php');
$input_search = urlencode((string) strip_tags($_GET['input_search']));
?>
    <title>News Analysis: Search</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <!--#include virtual="top.html" -->
    <h2>Search results</h2>
    <p>Our search retrieves <strong>exact matches</strong>, as well as <strong>close matches</strong> retrieved either by <dfn>ngram searches</dfn> (for portions of the string you entered) or by <dfn>Levenshtein distance</dfn> (or terms calculated as a close match with a few characters of difference).</p>
    <p><a href="search.html">Return to Search page.</a></p>
<?php
$xql = REST_PATH . "/db/queries/newsAnalysisKwic.xql?input_search=$input_search";
echo file_get_contents($xql);
?>
</body>
</html>