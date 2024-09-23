<?php include 'header.php';  ?> 



<?php

// $slug = $_POST['slug'];
// $page = $_POST['page'];
// $content = $_POST['content'];

$catch = $_GET['slug'];


$conn = mysqli_connect("localhost" ,"root", "","nva");

if(!$conn){
    echo "error" .mysqli_connect_error();
}

// else {
//     echo "done";
// }

// $sql = "INSERT INTO har (slug, page , content) VALUES ('$slug', '$page', '$content')";
// if(mysqli_query($conn, $sql))
// {
//     echo "hun dekh";
// }
// else {
//     echo "error" . mysqli_error($conn);
// }



















$sql = "SELECT * FROM har WHERE slug = '$catch'";
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // if (!empty($row['slug']) && !empty($row['page']) && !empty($row['contant'])) {
            
       
        echo "slug :- " . $row["slug"] . "<br>";
        echo "page :- " . $row["page"] . "<br>";
        echo "content :- " . $row["content"] . "<br><br>";
    // }
    }
}
else {
    echo "no result";
}

mysqli_close($conn);

?>



 <?php    include 'footer.php'; ?> 
