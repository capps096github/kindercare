<?php
$servername = "localhost";
$username = "root";
$password = "";

// Start the session
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// put data in the teachers table
$sql_products_data = "INSERT INTO
    sips.products (
        name,
        price,
        image_url,
        category,
        likes,
        sales
    )
VALUES (
        'Orange Juice',
        1.99,
        'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
        'Juice',
        20,
        300
    ), (
        'Old Fashioned Cocktail',
        2.99,
        'https://images.unsplash.com/photo-1563227812-0ea4c22e6cc8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'Juice',
        50,
        100
    ), (
        'Lemonade',
        3.99,
        'https://images.unsplash.com/photo-1437418747212-8d9709afab22?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
        'Juice',
        40,
        60
    ), (
        'Mango Juice',
        4.99,
        'https://images.unsplash.com/photo-1546173159-315724a31696?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
        'Juice',
        90,
        200
    ), (
        'Sliced Orange Juice',
        5.99,
        'https://images.unsplash.com/photo-1618724980108-a4d3856fd8f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
        'Juice',
        40,
        300
    ), (
        'Melon Juice',
        6.99,
        'https://images.unsplash.com/photo-1597306691225-69ef217a43cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=376&q=80',
        'Juice',
        80,
        900
    ), (
        'Seven Hils Wine',
        7.99,
        'https://images.unsplash.com/photo-1508253730651-e5ace80a7025?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'Wine',
        70,
        150
    ), (
        'Nederburg White Wine',
        8.99,
        'https://images.unsplash.com/photo-1547595628-c61a29f496f0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
        'Wine',
        30,
        250
    ), (
        'Fruit and Wine',
        9.99,
        'https://images.unsplash.com/photo-1474722883778-792e7990302f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=391&q=80',
        'Wine',
        40,
        890
    ), (
        'Ondule Wine',
        10.99,
        'https://images.unsplash.com/photo-1600320183466-7198f22d3c8a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1287&q=80',
        'Wine',
        60,
        760
    ), (
        'Lambrusco Wine',
        11.99,
        'https://images.unsplash.com/photo-1606920301459-d66500c43ff6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=428&q=80',
        'Wine',
        80,
        900
    ), (
        'Ondule Red Wine',
        12.99,
        'https://images.unsplash.com/photo-1609951651973-03b4c838b0d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
        'Wine',
        20,
        700
    ), (
        'Pure Heaven Wine',
        13.99,
        'https://images.unsplash.com/photo-1554230561-31bdc707b537?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
        'Wine',
        850,
        100
    ), (
        'Crafters Beer',
        14.99,
        'https://images.unsplash.com/photo-1612528443702-f6741f70a049?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
        'Beer',
        200,
        100
    ), (
        'Nile Special Beer',
        15.99,
        'https://images.unsplash.com/photo-1618162803775-cd146ebac4c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80',
       'Beer',
        150,
        970
    ), (
        'Baltic Beer',
        16.99,
        'https://images.unsplash.com/photo-1552668093-24771b985482?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'Beer',
        210,
        830
    ), (
        'Houston Beer',
        17.99,
        'https://images.unsplash.com/photo-1573159312725-4dab0e8046f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80',
        'Beer',
        10,
        90
    ), (
        'Canned Soda',
        18.99,
        'https://images.unsplash.com/photo-1588238142232-7108fb7dcbb6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80',
        'Soda',
        90,
        100
    ), (
        'Coca Cola',
        19.99,
        'https://images.unsplash.com/photo-1624552184280-9e9631bbeee9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
        'Soda',
        60,
        500
    ), (
        'Sprite',
        20.99,
        'https://images.unsplash.com/photo-1625772299848-391b6a87d7b3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
        'Soda',
        40,
        50
    );";



// pupils data
// register staff
$sql_staff_data = "INSERT IGNORE INTO sips.staff (staff_ID,staff_name,phone_no,product_line,staff_status) VALUES
('7923SP','John Mugisa','+256790955031','LONG','Allocated'),
('2075SP','Twahirwa Choosen','+256700444642','MEDIUM','Deallocated'),
('7953SP','Mark Desire','+256790958031','MEDIUM','Deallocated'),
('2089SP','Jane Choosen','+256700744642','LONG','Dellocated'),
('7924SP','Simon Mugisa','+256790955031','MEDIUM','Deallocated'),
('2275SP','Jane Martha','+256700444642','LONG','Allocated'),
('7943SP','John Mugisah','+256380958031','LONG','Allocated'),
('2099SP','Ritah Fibi','+256720744642','SHORT','Allocated'),
('7933SP','Peter Mugisa','+256790955031','LONG','Allocated'),
('2675SP','Jane Choosen','+256700444642','MEDIUM','Allocated'),
('7983SP','Mark Desire','+256790958031','LONG','Allocated'),
('2039SP','Jane Choosen','+256700744642','SHORT','Allocated'),
('2823SP','Simon Mugisa','+256790955031','LONG','Allocated'),
('2275SP','Jane Martha','+256700444642','SHORT','Allocated'),
('7873SP','John Mugisah','+256380958031','MEDIUM','Allocated'),
('9973SP','Ming Pa','+256380958031','LONG','Deallocated'),
('9873SP','Yeng Yu','+256380958031','LONG','Allocated'),
('9473SP','Angela Justine','+256380958031','LONG','Deallocated'),
('4973SP','Ming Pa','+256380958031','LONG','Deactivated'),
('5973SP','Shi Fu','+256380958031','LONG','Deallocated'),
('6973SP','Desp Erado','+256380958031','SHORT','Allocated'),
('7973SP','Amos San','+256380958031','LONG','Allocated'),
('8973SP','Ankunda Andante','+256380958031','MEDIUM','Deallocated'),
('1973SP','Alexa Xi','+256380958031','LONG','Deallocated'),
('2973SP','Xxi Jing','+256380958031','SHORT','Deallocated');";


$sql_managers_data = "INSERT IGNORE INTO sips.managers (admin_id,username,email,passwordx) VALUES
('SDC111','Andante Ankunda','ankundaandanter@gmail.com','12345'),
('SDC045','Simon Desire','simondesire001@gmail.com','11111'),
('SDC097','Cephas Brian','cephasbrian@gmail.com','22222'),
('SDC100','Edward Twahira','edwardtwahira@gmail.com','33333'),
('SDC233','Jolly Ssuka','ssukajolly@gmail.com','44444');";

$sql_customers_data = "INSERT IGNORE INTO sips.customers (email,username,preferences,locationx,gender,passwordx) VALUES 
('ankundaandanter@gmail.com','Andante Ankunda','Wines:Beers','Kampala','F','12345'),
('simondesire001@gmail.com','Simon Desire','Wines:Beers','Kampala','M','11111'),
('cephasbrian12@gmail.com','Cephas Brian','Sodas','Kampala','M','22222'),
('edwardtwahira@gmail.com','Edward Twahira','Wines','Kampala','M','33333'),
('ssukajolly@gmail.com','Jolly Ssuka','Juices','Kampala','M','44444');
";


// `user_id` VARCHAR(30),
// `name` varchar(255) NOT NULL,   
// `price` decimal(10, 2) NOT NULL,  
// `image_url` varchar(255) NOT NULL,
// `quantity`

$sql_orders_data = "INSERT IGNORE INTO sips.orders (user_id,name,price,image_url,quantity) VALUES
(
'simondesire001@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'edwardtwahira@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'edwardtwahira@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'simondesire001@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'ankundaandanter@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'ankundaandanter@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'ankundaandanter@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'ankundaandanter@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
),
(
'ankundaandanter@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
5
)

";

// likes data  `name` varchar(255) NOT NULL,   
// `price` decimal(10, 2) NOT NULL,  
// `image_url`
$sql_likes_data =
    "INSERT IGNORE INTO sips.likes (user_id,name,price,image_url ) VALUES
(
'edwardtwahira@gmail.com',
'Orange Juice',
 1.99,
'https://images.unsplash.com/photo-1597403491447-3ab08f8e44dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80'
),

(
'cephasbrian12@gmail.com',
'Old Fashioned Cocktail',
 2.99,
'https://images.unsplash.com/photo-1563227812-0ea4c22e6cc8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ),
(
'simondesire001@gmail.com',
'Lemonade',
3.99,
'https://images.unsplash.com/photo-1437418747212-8d9709afab22?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
  ),

(
'ankundaandanter@gmail.com',
'Mango Juice',
 4.99,
'https://images.unsplash.com/photo-1546173159-315724a31696?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ),
(
'ankundaandanter@gmail.com',
'Sliced Orange Juice',
 5.99,
'https://images.unsplash.com/photo-1618724980108-a4d3856fd8f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80'
       ),
(
'ankundaandanter@gmail.com',
'Melon Juice',
6.99,
'https://images.unsplash.com/photo-1597306691225-69ef217a43cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=376&q=80'
        ),
(
'ankundaandanter@gmail.com',
'Seven Hils Wine',
7.99,
'https://images.unsplash.com/photo-1508253730651-e5ace80a7025?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ),
(
'ankundaandanter@gmail.com',
 'Nederburg White Wine',
 8.99,
 'https://images.unsplash.com/photo-1547595628-c61a29f496f0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ),
(
'ankundaandanter@gmail.com',
'Fruit and Wine',
 9.99,
 'https://images.unsplash.com/photo-1474722883778-792e7990302f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=391&q=80'
        ),
(
'ankundaandanter@gmail.com',
'Ondule Wine',
 10.99,
 'https://images.unsplash.com/photo-1600320183466-7198f22d3c8a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1287&q=80'
        ),
(
'ankundaandanter@gmail.com',
'Lambrusco Wine',
 11.99,
'https://images.unsplash.com/photo-1606920301459-d66500c43ff6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=428&q=80'
        )
;
";



// check if the sips db was selected
if ($conn->select_db('sips') === TRUE) {

    // insert dummy data into the tables by running the data queries
    // if ($conn->query($sql_products_data) === TRUE) {
    //     // echo "Table teachers created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }


    /*  if ($conn->query($sql_pupils_data) === TRUE) {
        // echo "Table pupils created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    if ($conn->query($sql_assignments_data) === TRUE) {
        // echo "Table assignments created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    if ($conn->query($sql_registerpupils_data) === TRUE) {
        // echo "Table registeredpupils created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    if ($conn->query($sql_assignmentscore_data) === TRUE) {
        // echo "Table registeredpupils created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }*/

    // 
    // check if all queries were successful
    // if ($conn->query($sql_teachers_data) === TRUE && $conn->query($sql_pupils_data) === TRUE && $conn->query($sql_assignments_data) === TRUE && $conn->query($sql_registerpupils_data) === TRUE && $conn->query($sql_assignmentscore_data) === TRUE) {
    if ($conn->query($sql_products_data) === TRUE &&  $conn->query($sql_staff_data) === TRUE && $conn->query($sql_managers_data) === TRUE && $conn->query($sql_customers_data) === TRUE && $conn->query($sql_orders_data) === TRUE && $conn->query($sql_likes_data) === TRUE) {
        // set success message
        $_SESSION['settings_success'] = "Dummy Data Successfully!";
        // echo "Tables created successfully";
    } else {
        // set error message
        $_SESSION['settings_error'] = "Error Adding Dummy Data: " . $conn->error;
    }

    // end
    $conn->close();

    // redirect to settings page
    header("Location: ../settings/settings.php");
} else {
    echo "Error selecting database: " . $conn->error;
}