/* This JavaScript file is adapted from
 * searchBibl.js
 * David J. Birnbaum, djbpitt@gmail.com, http://www.obdurodon.org
 * 
 * This file was made by Elisa Beshero-Bondar and is part of http://newsAnalysis.newtfire.org
 *
 * Attach to search.html in newsAnalysis project
 * 
 * It listens for enter of the return key in an HTML text input box
 * and fires a PHP script to begin the search retrieval process.
 */

function search (evt) {
    var key;
    if (evt) {
        key = evt.keyCode
    } else {
        key = window.event.keyCode
    }
    if (key == 13) {
        var target = document.getElementById('search').value;
        var puncPattern = new RegExp('^[^&<>]+$');
        if (puncPattern.test(target)) {
            window.location.href = 'search.php?input_search=' + target;
        }
    }
}
// http://alaaattya.wordpress.com/2012/12/15/solution-for-on-enter-key-press-event-in-javascript/
function search_init() {
    var searchInputBox = document.getElementById('search');
    searchInputBox.addEventListener('keyup', search, false);
}

window.addEventListener('load', search_init, false);