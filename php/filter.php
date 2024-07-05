<?php
require_once "../layouts/config.php";

// Check if category is provided
if(isset($_POST['category'])) {
    // Sanitize and prepare category data
    $categories = explode(",", $_POST['category']);
    $categories = array_map('trim', $categories);
    $category_list = "'" . implode("', '", $categories) . "'";
    
    // Pagination
    $limit = isset($_POST['length']) ? $_POST['length'] : 10; // Default limit to 10 if not provided
    $start = isset($_POST['start']) ? $_POST['start'] : 0; // Default start to 0 if not provided

    // Build the SQL query
    $query = "SELECT * FROM `instagram_influnces` WHERE category IN ($category_list)";

    // Modify the SQL query to filter data based on search criteria
    $searchValue = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';
    if (!empty($searchValue)) {
        $query .= " AND fullname LIKE '%$searchValue%'";
    }

    // Add LIMIT and OFFSET for pagination
    $query .= " LIMIT $start, $limit";
    
    // Execute the query
    $result = mysqli_query($link, $query);
    
    // Check if query was successful
    if($result) {
        $data = array();
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        // Get total records count without pagination
        $totalRecords = mysqli_num_rows(mysqli_query($link, "SELECT * FROM `instagram_influnces` WHERE category IN ($category_list)"));

        // Prepare JSON response
        $response = array(
            "draw" => isset($_POST['draw']) ? intval($_POST['draw']) : 1,
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecords, // For simplicity, considering total records as filtered records
            "data" => $data
        );
        
        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
        
        mysqli_free_result($result);
    } else {
        // Handle query error
        header('Content-Type: application/json');
        echo json_encode(array("error" => "Error: " . mysqli_error($link)));
    }
} else {
    // Handle missing category error
    header('Content-Type: application/json');
    echo json_encode(array("error" => "Error: Category name not provided."));
}
?>
