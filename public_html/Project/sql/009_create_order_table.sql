CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` BIGINT NULL DEFAULT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` INT,
  `address` VARCHAR(999) DEFAULT NULL,
  `payment_method` VARCHAR(100) 
)