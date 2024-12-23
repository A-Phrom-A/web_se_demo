-- Create the table for storing user information
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,  -- Unique identifier for each user
    username VARCHAR(255) NOT NULL,          -- Username for the user
    password VARCHAR(255) NOT NULL,          -- Password for the user
    Name VARCHAR(255),                       -- User's first name
    Surname VARCHAR(255),                    -- User's last name
    address TEXT,                            -- User's address
    Number VARCHAR(20),                      -- User's phone number
    Email VARCHAR(255),                      -- User's email address
    Line_ID VARCHAR(255)                     -- User's Line ID
);
-- Create the table for storing item information
CREATE TABLE Items (
    item_id INT PRIMARY KEY AUTO_INCREMENT,  -- Unique identifier for each item
    item_info TEXT NOT NULL,                 -- Information about the item
    item_instorage INT NOT NULL DEFAULT 0    -- Quantity of items left in storage
);
