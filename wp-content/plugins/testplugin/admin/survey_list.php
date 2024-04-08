<?php
global $wpdb;

$table = "{$wpdb->prefix}surveys";

$table2 = "{$wpdb->prefix}surveys_details";





if (isset($_POST['btn_save'])) {

    $name = $_POST['txtname'];

    $query = "SELECT survey_id FROM $table ORDER BY survey_id DESC LIMIT 1";
    $result = $wpdb->get_results($query, ARRAY_A);
    $nextId = $result[0]['survey_id'] + 1;
    $shortcode = "[Enc" . $nextId . "]";
    print_r($result);

    $data = [
        'survey_id' => null,
        'name' => $name,
        'shortcode' => $shortcode
    ];


    $response = $wpdb->insert($table, $data);

    if ($response) {
        $questions = $_POST['name'];
        $i = 0;

        foreach ($questions as $key => $question) {
            $type = $_POST['type'][$i];
            $data2 = [
                'details_id' => null,
                'survey_id' => $nextId,
                'question' => $question,
                'type' => $type
            ];


            $wpdb->insert($table2, $data2);
            $i++;

        }

    }

    print_r($_POST);
}
$query = "SELECT * FROM $table";
$survey_list = $wpdb->get_results($query, ARRAY_A);
if (empty($survey_list)) {
    $survey_list = array();
}
?>
<div class="wrap">
    <?php
    echo "<h1 class='wp-heading-inline'>" . get_admin_page_title() . "</h1>";
    ?>
    <button href="#" id="btn_add_new" class="page-title-action " type="button" class="btn btn-primary"
        data-bs-toggle="modal" data-bs-target="#exampleModal">Add new</button>
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
                    echo "
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">


                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="txtname" class="col-sm-3 col-form-label">Survey Name:</label>
                            <div class="col-sm-9"> <input type="text" id="txtname" name="txtname" class="w-100">
                            </div>
                        </div>
                        <br>
                        <hr>
                        <h4 class="mb-0">Questions</h4>
                        <hr>
                        <br>
                        <table id="dynamic" class="mt-0">
                            <tr>
                                <td>
                                    <label for="txtname" class="col-form-label mx-2">Question:</label>

                                </td>
                                <td>
                                    <input type="text" name="name[]" id="name" class="mx-2">

                                </td>
                                <td>
                                    <select name="type[]" id="select" class="form-control type_list mr-3">
                                        <option value="1" select>yes---no</option>
                                        <option value="2">range 0--5</option>
                                    </select>
                                </td>
                                <td>
                                    <button name="add" id="add" class="btn btn-success mx-2" style="height:38px">Add
                                        more</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="btn_save" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>