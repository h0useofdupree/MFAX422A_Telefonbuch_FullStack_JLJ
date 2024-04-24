CREATE TABLE providers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(15),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    address VARCHAR(255),
    house_number VARCHAR(10),
    zip_code VARCHAR(10),
    city VARCHAR(100),
    status VARCHAR(50)
);
