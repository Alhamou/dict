<?php
 echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";

include 'include/connect.php';
include 'Paginationxml.php';
/*
xml  => [ sitemap | rss |
*/

header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');


$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

// If The Page Is Main Page xml.php

if ($do == 'Manage') {

    // is home page xml.php
    $request = uniqid();
    echo "<error>Error   request ID  $request</error>";
}


elseif ($do == 'sitemapar') {


    /*
     * Get and/or set the page number we are on
     */
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    /*
     * Set a few of the basic options for the class, replacing the URL with your own of course
     */
    $options = array(
        'results_per_page' => 5000,
        'url' => 'xml.php?do=sitemap&page=*VAR*',
        'db_handle' => $conn
    );
    /*
     * Create the pagination object
     */
    try {
        $paginate = new pagination($page, 'SELECT * FROM word_germany ORDER BY id', $options);
    }
    catch (paginationException $e) {
        echo $e;
        exit();
    }
    /*
     * If we get a success, carry on
     */
    if ($paginate->success == true) {
        /*
         * Fetch our results
         */
        $result = $paginate->resultset->fetchAll();
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9.0">';
        echo '<!--Total Results: ' . $paginate->total_results . '-->';
        echo '<!--Total Pages: ' . $paginate->total_pages . '-->';
        foreach ($result as $row) {

            echo "<url>";
            echo '<loc>de/' . $row['deutsch_word'] . '</loc>';
	               $today = date("m.d.y");
            echo '<lastmod>' . $today . '</lastmod>';
            echo "<changefreq>hourly</changefreq>";
            echo "<loc>1.0</loc>";
            echo "</url>";
        }
    }
    echo "</urlset>";

} elseif ($do == 'rss') {

  echo '<rss version="2.0">';
  echo '<channel>';
  echo "<title></title>";
  echo "<link></link>";
  echo "<description><![CDATA[ , قاموس عربي الماني قاموس عربي انجليزي قاموس عربي فرنسي قاموس عربي تركي قاموس عربي ايطالي قاموس عربي اسباني قاموس عربي روسي قاموس عربي سويدي
ترجمة من العربية الى كل اللغات, ترجمة جملة, ترجم من كلمة الى جملة, البحث في الجمل, قاموس جمل, أمثلة على الكلمة, كل كلمة لها مثال, ابحث في كل اللغات العالمية
عربي ياباني عربي صيني عربي هندي عربي بنغلادش عربي نرويجي عربي ندمركي قاموس عربي كل اللغات]]></description>";
  echo "<generator> عربي  2.4</generator>";

    /*
     * Get and/or set the page number we are on
     */
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    /*
     * Set a few of the basic options for the class, replacing the URL with your own of course
     */
    $options = array(
        'results_per_page' => 100,
        'url' => 'xml.php?do=rss&page=*VAR*',
        'db_handle' => $conn
    );
    /*
     * Create the pagination object
     */
    try {
        $paginate = new pagination($page, 'SELECT * FROM word_germany ORDER BY id', $options);
    }
    catch (paginationException $e) {
        echo $e;
        exit();
    }
    /*
     * If we get a success, carry on
     */
    if ($paginate->success == true) {
        /*
         * Fetch our results
         */
        $result = $paginate->resultset->fetchAll();
        echo '<!--Total Results: ' . $paginate->total_results . '-->';
        echo '<!--Total Pages: ' . $paginate->total_pages . '-->';
        foreach ($result as $row) {


            echo "<item>";
            echo '<title><![CDATA[ ألماني عربي ' . $row['arabic_word_fl'] . ' ترجمة ]]></title>';
            echo '<description><![CDATA[<img src="img/log.svg" /> ألماني عربي ' . $row['arabic_word'] . ' ترجمة ]]></description>';
            echo '<link>https://alhamou.com/search/de/' . $row['arabic_word'] . '</link>';
            $today = date("m.d.y");
            echo '<pubDate>' . $today . '</pubDate>';
            echo "</item>";
        }
    }
    echo "</channel></rss>";
}





elseif ($do == 'sitemapde') {
  # code...

      /*
       * Get and/or set the page number we are on
       */
      if (isset($_GET['page'])) {
          $page = $_GET['page'];
      } else {
          $page = 1;
      }
      /*
       * Set a few of the basic options for the class, replacing the URL with your own of course
       */
      $options = array(
          'results_per_page' => 266,
          'url' => 'http://localhost/alhamou/xml.php?do=sitemap&page=*VAR*',
          'db_handle' => $conn
      );
      /*
       * Create the pagination object
       */
      try {
          $paginate = new pagination($page, 'SELECT * FROM word_germanyy ORDER BY id', $options);
      }
      catch (paginationException $e) {
          echo $e;
          exit();
      }
      /*
       * If we get a success, carry on
       */
      if ($paginate->success == true) {
          /*
           * Fetch our results
           */
          $result = $paginate->resultset->fetchAll();
          echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9.0">';
          echo '<!--Total Results: ' . $paginate->total_results . '-->';
          echo '<!--Total Pages: ' . $paginate->total_pages . '-->';
          foreach ($result as $row) {

              echo "<url>";
              echo '<loc>https://www.alhamou.com/de/' . $row['deutsch_word'] . '</loc>';
              echo "</url>";
          }
      }
      echo "</urlset>"; // نهاية استعلام الايطالي

}
else {
    $request = uniqid();
    echo "<error>Error  There\'s No Page With This Name  request ID  $request</error>";

}


ob_end_flush();
