
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
<?php  
// Define variables with your details
$name = "Hana Mumtaz binti Hassanudin"; 
$matric_number = "A1220119";
$course = "Bachelor of Computer Science (Software Engineering) with honors";
$year_of_study = "3rd Year";
$address = "49, Jalan Menggatal, 88450 Kota Kinabalu, Sabah"; 
?> 

<table border="1" cellspacing="0" cellpadding="5"> 
    <tr> 
        <th>Details</th> 
        <th>Information</th> 
    </tr> 
    <tr> 
        <td>Name</td> 
        <td><?php echo $name; ?></td>  
    </tr> 
    <tr> 
        <td>Matric Number</td> 
        <td><?php echo $matric_number; ?></td>  
    </tr> 
    <tr> 
        <td>Course</td> 
        <td><?php echo $course; ?></td>  
    </tr> 
    <tr> 
        <td>Year of Study</td> 
        <td><?php echo $year_of_study; ?></td>  
    </tr> 
    <tr> 
        <td>Address</td> 
        <td><?php echo $address; ?></td>  
    </tr> 
</table> 

</body> 
</html>
