-- Doctrine Migration File Generated on 2021-06-28 17:11:13

-- Version DoctrineMigrations\Version20210628150921
CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, order_paypal_id VARCHAR(255) DEFAULT NULL, order_origin_app VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
