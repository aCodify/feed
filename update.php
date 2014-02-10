<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Displaying A Custom Facebook Page Feed Using The Facebook PHP SDK</title>
    
    <meta name="description" content="In this lab, we take a look at using the Facebook PHP SDK to connect to a Facebook app, retrieve the graph data from a Facebook page, and output it in a neat, nice looking format." />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css_view_update/base.css" />
    <link rel="stylesheet" href="css_view_update/style.css" />

</head>



<body>


<?php

    /**
     * This is the link to my page graph
     * I've included it here so i can copy an paste for quick reference
     *
     * Copying and pasting this into the browser url bar gives you a full graph of the feed
     * which is very handy for browsing and seeing what exists in the array
     *
     * Change the values to suit your own needs, and when your script is final, remove this
     * comment block
     *
     * Typing this into the url will get you the super array (graph) to analyze
     * https://graph.facebook.com/YOUR_PAGE_ID/feed?access_token=APP_ACCESS_TOKEN
     */

    // include the facebook sdk
    require_once('resources/facebook-php-sdk-master/src/facebook.php');

    if ( file_exists( 'config.php' ) ) 
    {
        require 'config.php';
    }
    else
    {
        $info = array();
        $info['appId'] = '';
        $info['secret'] = '';
        $info['pageid'] = '450652468296007';
    }

    // connect to app
    $config = array();
    $config['appId'] = $info['appId'];
    $config['secret'] = $info['secret'];
    $config['fileUpload'] = false; // optional

    // instantiate
    $facebook = new Facebook($config);

    // set page id
    $pageid = $info['pageid'];

    // now we can access various parts of the graph, starting with the feed

    $overset_limit = ( ! empty( $_GET['limit'] ) ) ? 'limit='.$_GET['limit'] : '' ;
    $overset_until = ( ! empty( $_GET['until'] ) ) ? '&until='.$_GET['until'] : '' ;

    $pagefeed = $facebook->api( "/" . $pageid . "/feed?".$overset_limit.$overset_until );


    $query_string = parse_url( $pagefeed['paging']['next'] );
    $query_string = $query_string['query'];
    
    require 'connect_database.php';

?>


<div id="wrapper">

<div id="main">
    <div class="container">
        
        
        
        <h1>Facebook Feed</h1>
        
        
        <?php
            
            echo "<div class=\"fb-feed\">";
            
            // set counter to 0, because we only want to display 10 posts
            $i = 0;
            foreach($pagefeed['data'] as $post) {
                
                
                if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {
                
                    
                    // open up an fb-update div
                    echo "<div class=\"fb-update\">";
                        
                        // post the time
                        
                        
                        // check if post type is a status
                        if ($post['type'] == 'status') {

                            $array_loop = range(1, 400);    




                            echo "<h2>Status updated: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                            if (empty($post['story']) === false) 
                            {
                                echo "<p>" . $post['story'] . "</p>";
                            } 
                            elseif (empty($post['message']) === false) 
                            {

                                foreach ( $array_loop as $key => $value ) 
                                {
                                    $regula = '/^'.$value.'\./i';
                                    if ( preg_match( $regula , $post['message'] , $result ) ) 
                                    {

                                        $ci_db->where( 'id_content', $value );
                                        $query = $ci_db->get( 'fb_content' );
                                        $num_row = $query->num_rows();

                                        if ( empty( $num_row ) ) 
                                        {
                                            $ci_db->set( 'id_content', $value );
                                            $ci_db->set( 'page_id', $info['pageid'] );
                                            $ci_db->set( 'content', $post['message'] );
                                            $ci_db->set( 'date', date( 'd-m-Y' , (strtotime($post['created_time'])) ) );
                                            $ci_db->insert( 'fb_content' );
                                        }

                                    }                            
                                }

                                echo "<p class='' >" . $post['message'] . "</p>";
                            }
                        }
                        
                        // check if post type is a link
                        if ($post['type'] == 'link') {
                            echo "<h2>Link posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                            echo "<p>" . $post['name'] . "</p>";
                            echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">" . $post['link'] . "</a></p>";
                        }
                        
                        // check if post type is a photo
                        if ($post['type'] == 'photo') {
                            echo "<h2>Photo posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                            if (empty($post['story']) === false) {
                                echo "<p>" . $post['story'] . "</p>";
                            } elseif (empty($post['message']) === false) {
                                echo "<p>" . $post['message'] . "</p>";
                            }
                            echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">View photo &rarr;</a></p>";
                        }
                    
                    
                    echo "</div>"; // close fb-update div
                    
                    $i++; // add 1 to the counter if our condition for $post['type'] is met
                }
                
                
                //  break out of the loop if counter has reached 10
                if ($i == 20) {
                    break;
                }
            } // end the foreach statement
            
            echo "</div>";
            
        ?>
        
        
    </div>
</div>


<footer>
    <div class="container">
        <a href="?<?php echo $query_string ?>">Next to the article ||</a>
    </div>
</footer>



</div>


</body>
</html>
<?php
ob_flush();
?>