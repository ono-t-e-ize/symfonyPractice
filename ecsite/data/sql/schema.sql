CREATE TABLE cart (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, product_id BIGINT NOT NULL, INDEX user_id_idx (user_id), INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE order_detail (id BIGINT AUTO_INCREMENT, product_name VARCHAR(255), total_amount DECIMAL(18, 2) NOT NULL, customer_name VARCHAR(255), delivery_address text, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, price DECIMAL(18, 2), description text, image VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, last_name VARCHAR(255), first_name VARCHAR(255), email VARCHAR(255) NOT NULL UNIQUE, phone VARCHAR(20), password VARCHAR(255), address text, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE cart ADD CONSTRAINT cart_user_id_user_id FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE;
ALTER TABLE cart ADD CONSTRAINT cart_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE;
