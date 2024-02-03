$phoneNumber = $_GET['phoneNumber'];

// Validate and sanitize the input
$name = filter_var($name, FILTER_SANITIZE_STRING);
$phoneNumber = filter_var($phoneNumber, FILTER_SANITIZE_STRING);

// Perform any necessary validation or processing of the data

// Store the data in a file, database, or any other storage method
// Here's an example of storing the data in a text file
$data = "Name: " . $name . "\nPhone Number: " . $phoneNumber . "\n";

// Open the file in append mode and write the data
$file = fopen("data.txt", "a");
fwrite($file, $data);
fclose($file);

// You can also store the data in a database by executing an INSERT query
// Example using MySQLi:
// $conn = new mysqli("localhost", "username", "password", "database");
// $stmt = $conn->prepare("INSERT INTO users (name, phone_number) VALUES (?, ?)");
// $stmt->bind_param("ss", $name, $phoneNumber);
// $stmt->execute();
// $stmt->close();
// $conn->close();

// Redirect back to the main page or any other desired location
header("Location: index.html");
exit();
