-- db/init.sql
CREATE DATABASE IF NOT EXISTS yaripo_corp;
USE yaripo_corp;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    role VARCHAR(20) DEFAULT 'user'
);

INSERT INTO users (username, password, role) VALUES 
('t_alvarez', 'bravo_tango_77', 'researcher'),
('m_stout', 'militech_secret_01', 'admin'),
('v_valerie', 'night_city_dreamer', 'technician'),
('j_silverhand', 'chippin_in_2023', 'guest'),
('alt_cunningham', 'soul_killer_v1', 'researcher'),
('g_weal', 'mayor_office_secure', 'admin'),
('d_walker', 'sandevistan_fast', 'technician'),
('r_rebecca', 'shotgun_blast_pink', 'security'),
('f_falco', 'driver_pro_404', 'technician'),
('lucy_k', 'deep_network_99', 'researcher');