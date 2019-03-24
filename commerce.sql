CREATE DATABASE e_comerce;

use e_comerce;

CREATE TABLE Category(
	id_category int(11) primary key auto_increment,
	created_at datetime,
	is_active boolean,
	meta_keywords varchar(200),
	name varchar(50),
	slug varchar(50),	
	updated_at datetime
);

CREATE TABLE sous_category(
	id_sous_category int(11) primary key auto_increment,
	categorie int(11),
	created_at datetime,
	is_active boolean,
	meta_keywords varchar(200),
	name varchar(50),
	slug varchar(50),	
	updated_at datetime,
	foreign key (categorie) references Category(id_category)
);

CREATE TABLE product(
	id_product int(11) primary key auto_increment,
    brand varchar(50),
	caracteristique varchar(200),
	created_at datetime,
	description varchar(200),
	image varchar(100),
	is_active boolean,
	meta_description varchar(500),
	meta_keywords varchar(200),
	name varchar(50),
	old_price decimal(65),
	price decimal(65),
	quantity int(20),
	sku varchar(50),
	slug varchar(50),
	updated_at datetime,
	id_category int(11),
	id_sous_category int(11),
	foreign key (id_category) references Category(id_category),
	foreign key (id_sous_category) references sous_category(id_sous_category)
);

CREATE TABLE client(
	id_client int(11) auto_increment primary key,
	username varchar(30) unique,
	e_mail varchar(50) unique,
	nom varchar(30),
	password varchar(30), 
	perenom varchar(30),
	telephone varchar(30)
);

CREATE TABLE adress(
	id_adress int(11) primary key auto_increment,
	client int(11),
	adresse varchar(50),
	city varchar(20),
	postcode varchar(10),
	foreign key (client) references client(id_client)
);

CREATE TABLE post(
	id_post int(11) primary key auto_increment,
	posted_by varchar(50),
	allow_comments boolean,
	body_text varchar(1000),
	comment_count int(10),
	image varchar(100),
	modified datetime,
	posted datetime,
	slug varchar(50),
	title varchar(40),
	foreign key (posted_by) references client(username)
);

CREATE TABLE comments(
	id_comment int(11) primary key auto_increment,
	post_id int(11), 
	username int(11),
	body_text varchar(1000),
	post_date datetime,
	user_email varchar(50),
	foreign key (username) references client(id_client),
	foreign key (user_email) references client(e_mail)
); 

CREATE TABLE ordeer(
	id_order int(11),
	client int(11),
	id_adress int(11),
	order_date date,
	prix_livraison decimal(65),
	shipping_date date,
	shipping_status varchar(30),
	status varchar(30),
	foreign key (client) references client(id_client),
	foreign key (id_adress) references adress(id_adress)
);

CREATE TABLE cartline(
	id_cartline int(11) primary key auto_increment,
	client int(11),
	product int(11),
	foreign key (client) references client(id_client),
	foreign key (product) references product(id_product)	
);

CREATE TABLE thumb(
	id_thumb int(11) primary key auto_increment,
	product int(11),
	thumb varchar(150),
	foreign key (product) references product(id_product)	
);

CREATE TABLE wishlist(
	id_wish_list int(11) primary key auto_increment,
	client int(11),
	product int(11),
	foreign key (client) references client(id_client),
	foreign key (product) references product(id_product)	
);

CREATE TABLE orderdetail(
	id_order_detail int(11) primary key auto_increment,
	orderr int(11),
	product int(11),
	product_unit_price float(20),
	qty int(150),
	foreign key (orderr) references ordeer(id_order),
	foreign key (product) references product(id_product)	
);

CREATE TABLE vente_detail(
	id_vente int(11) primary key auto_increment,
	client int(11),
	commande int(11),
	product int(11),
	qty int(150),
	foreign key (client) references client(id_client),
	foreign key (commande) references ordeer(id_order),
	foreign key (product) references product(id_product)	
);

CREATE TABLE facture(
	id_facture int(11) primary key auto_increment,
	client int(11),
	id_order int(11),
	facture_date date,
	foreign key (client) references client(id_client),
	foreign key (id_order) references ordeer(id_order)	
);