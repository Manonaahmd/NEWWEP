<?Php
if($_SERVER["REQUEST_METHOD"]=== "POST"){
    // Get reference to uploaded image
    $image_file = $_FILES["image"]; //image is the form input file element name

    // Exit if no file uploaded
    if (!isset($image_file)) {
        die('No file uploaded.');
    }

    // Exit if image file is zero bytes
    if (filesize($image_file["tmp_name"]) <= 0) {
        die('Uploaded file has no contents.');
    }

    // Exit if is not a valid image file
    $image_type = exif_imagetype($image_file["tmp_name"]);
    if (!$image_type) {
        die('Uploaded file is not an image.');
    }

    // Get file extension based on file type, to prepend a dot we pass true as the second parameter
    $image_extension = image_type_to_extension($image_type, true);

    // Create a unique image name
    $image_name = bin2hex(random_bytes(16)) . $image_extension;

    // Move the temp image file to the images directory
    move_uploaded_file(
        // Temp image location
        $image_file["tmp_name"],

        // New image location
        __DIR__ . "/imgs/" . $image_name
    );

    $FullName = $_POST["FullName"];
    $Phone = $_POST["phone"];
    $Email = $_POST["Email"];
    $Fax = $_POST["Fax"];
    $Address = $_POST["Address"];
    $Comments = $_POST["Comments"];

    include_once("conn.php");
    try{
        $sql = "INSERT INTo `phone index`(`FullName`, `Phone`, `Email`, `Fax`, `Address`, `Comments`, `image`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$FullName, $Phone, $Email, $Fax, $Address, $Comments, $image_name]);
        echo "Data added successfully";
    }catch(PDOException $e){
        echo "Connection failed" . $e->getMessage();
    }
}else{

     echo "invalid";
}

?>