<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.return_paged_results.php
 * Type:     function
 * Name:     Smarty Auto-Paginate
 * Author:   Ben Phillips <benji@f2o.org>
 * Version:  0.4
 * URL:      http://sourceforge.net/projects/smartypages/
 * Purpose:  returns the page of results from a db query and page number
 * Input:    query       =  the MySQL query
 *           shown       =  the number of results shown per page
 *           db          =  the MySQL database resource
 *           desc        =  whether to show the 'page x of y' string (default = true)
 *           lastpage    =  if true then go straight to last page as default (default = false)
 * Output:   records     =  multi-dimensional array of records for that page
 *           page_string =  the navigation bar complete with links
 *
 * Examples: {return_paged_results query=$query}
 *           {return_paged_results query=$query shown=20}
 * -------------------------------------------------------------
 * CHANGELOG
 * 29-Oct-2002 : Added 'page 1 of 4' feature and param that hides it
 * 30-Oct-2002 : Added query string addition to page link
 * 01-Nov-2002 : If invalid page selected, then page 1 is shown
 * 01-Nov-2002 : Added $lastpage to allow default showing as last page instead of first
 * 15-Nov-2002 : Bugfix: allowed 'from' in $query to be any case instead of having to be lower case
 */


function smarty_function_return_paged_results($params, &$smarty)
{

	// SET VARS

	extract($params);

	if(empty($db)) {
		$smarty->trigger_error("assign: missing 'db' parameter");
		return;
	}

	if(empty($query)) {
		$smarty->trigger_error("assign: missing 'query' parameter");
		return;
	}

	$query = eregi_replace("( |/n|/r)from( |/n|/r)", " from ", $query);

	if(empty($lastpage)) {
		$lastpage = 'false';
	}

	if(empty($_GET['page'])) {
		$page = 1;
	} else {
		$page = $_GET['page'];
		$lastpage = 'false';
	}

	if(empty($shown)) {
		$shown = 10;
	}

	if(empty($desc)) {
			$desc = true;
	}

	// COUNT TOTAL RECORDS

	$parts = explode(" from ", $query);
	$count_query = "select count(*) as numrecords from " . $parts[1];
	$count_result = mysql_query($count_query, $db);
	$count_row = mysql_fetch_array($count_result);
	$numrecords = $count_row[numrecords];

	$numpages = ceil($numrecords / $shown);

	if ($lastpage == 'true') {
		$page = $numpages;
	}

	// if page is invalid then show page 1 results
	if ($page > $numpages) {
		$page = 1;
	}

	if ($numrecords == 0) {
		$empty = 1;
		$page = 1;
		$numpages = 1;
	}

	$offset = ($page - 1) * $shown;

	// GET RESULTS

	$query  = $query . " limit " . $offset . ", " . $shown;
	$result = mysql_query($query, $db);
	while ($row = mysql_fetch_array($result)) {
		$records[] = $row;
	}
	$smarty->assign('records', $records);

	// CREATE NAVBAR

	$thispage = $_SERVER['PHP_SELF'];

	// recreate get string
	$qs = array();
	foreach ($_GET as $key => $value) {
		if ($key != "page") {
			$qs[] = $key . "=" . $value;
		}
	}
	if (sizeof($qs) != 0) {
		$QUERY_STRING = "&amp;" . implode("&amp;", $qs);
	}

	// produce page... string
	// new version
	if ($page > 4) {
		$doellipse = 1;
		$page_string .= " <a href=\"".$thispage."?page=1".$QUERY_STRING."\">&lt;&lt;</a> ";
	}
	if ($page > 1) {
		$pagemo = $page - 1;
		$page_string .= " <a href=\"".$thispage."?page=".$pagemo.$QUERY_STRING."\">&lt;</a> ";
	}
	if ($doellipse == 1) {
		$page_string .= " ... ";
	}
	if ($page > 3) {
		for ($i = $page - 3; $i < $page; $i++) {
			$page_string .= " <a href=\"".$thispage."?page=".$i.$QUERY_STRING."\">".$i."</a>";
		}
	} else {
		for ($i = 1; $i < $page; $i++) {
			$page_string .= " <a href=\"".$thispage."?page=".$i.$QUERY_STRING."\">".$i."</a>";
		}
	}
	$page_string .= " <span class=\"curpagenum\">".$page."</span>";
	if ($numpages > $page + 3) {
		for ($i = $page + 1; $i <= $page + 3; $i++) {
			$page_string .= " <a href=\"".$thispage."?page=".$i.$QUERY_STRING."\">".$i."</a>";
		}
	} elseif ($page != $numpages) {
		for ($i = $page + 1; $i <= $numpages; $i++) {
			$page_string .= " <a href=\"".$thispage."?page=".$i.$QUERY_STRING."\">".$i."</a>";
		}
	}
	$doellipse = 0;
	if ($page < $numpages) {
		$pagepo = $page + 1;
		$page_string2 .= " <a href=\"".$thispage."?page=".$pagepo.$QUERY_STRING."\">&gt;</a>";
	}
	if ($page < $numpages - 3) {
		$doellipse = 1;
		$page_string2 .= " <a href=\"".$thispage."?page=".$numpages.$QUERY_STRING."\">&gt;&gt;</a>";
	}
	if ($doellipse == 1) {
		$page_string .= " ... ";
	}
	$page_string .= $page_string2;

	if ($desc == "true") {
		if ($numpages != 1) {
			$page_string = "page " . $page . " of " . $numpages . "<br />" . $page_string;
		} else {
			$page_string = "page " . $page . " of " . $numpages;
		}
	}

	$smarty->assign('page_string', $page_string);

}

?>