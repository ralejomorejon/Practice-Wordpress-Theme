<?php
global $wpdb;
$query = "SELECT * FROM {$wpdb->prefix}surveys";
$survey_list = $wpdb->get_results($query, ARRAY_A);
if (empty($survey_list)) {
    $survey_list = array();
}
?>
<div class="wrap">
    <?php
    echo "<h1 class='wp-heading-inline'>" . get_admin_page_title() . "</h1>";
    ?>
    <a href="" class="page-title-action">Add new</a>
    <div class="table-responsive">
        <table class="wp-list-table widefat fixed striped pages">
            <thead>
                <tr>
                    <th scope="col">Survey name</th>
                    <th scope="col">ShortCode</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <?php

                foreach ($survey_list as $key => $value) {
                    # code...
                    $name = $value['name'];
                    $shortcode = $value['shortcode'];
                    echo "´
                                <tr>
                                <td scope='row'>$name</td>
                                <td>$shortcode</td>
                                <td><a href='' class='page-title-action'>DELETE</a>
                                    <a href='' class='page-title-action'>VIEW STATS</a>
                                </td>
                                </tr>
                                ";
                }


                ?>
            </tbody>
        </table>
    </div>

</div>