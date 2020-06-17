create database JIMMYCHOO;
-- drop database JIMMYCHOO;
use JIMMYCHOO;

create table ACCOUNTS (
    fname varchar(30) not null, 
    email varchar(40) unique not null, -- use as account name
    pass varchar(20) not null,
    address varchar(100) not null,
    phone char(10)  not null,
    -- bday date, 
    ad bool default false
    -- check (not regexp_like(email, '^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$')),
    -- check (regexp_like(phone, '^0[[:digit:]]{9}'))
);

create table CATEGORY (
	id char(5) primary key, -- CAT00
    cname varchar(20) not null,
    decription text
);

create table PRODUCTS(
	id char(10) primary key, -- JC000000
    pnam varchar(30) not null,
    decription text,
    price decimal(6,2) not null
);

create table CLASSIFICATION (
	pid char(10), -- product id
    cid char(5), -- category id
    primary key(pid, cid),
    foreign key (pid) references PRODUCTS(id),
    foreign key (cid) references CATEGORY(id)
);

create table COLORS(
	color varchar(30) primary key
);

create table PRODUCT_DETAIL (
	pid char(10), -- product id
    color varchar(30), -- color
    image varchar(30) unique,
    primary key (pid, color, image),
    foreign key (pid) references PRODUCTS(id),
    foreign key (color) references COLORS(color)
);

create table SIZE(
	euit decimal(3,1) primary key, -- main size eu/it
    uk decimal(2,1) unique not null,
    us decimal(3,1) unique not null,
    ja decimal(3,1) unique not null,
    au decimal(3,1) unique not null
);

create table STOCK(
	pid char(10), -- product id
    color varchar(30), -- color
    size decimal(3,1), -- main size
    quantity integer default 0,
    primary key (pid, color, size),
    foreign key (pid) references PRODUCTS(id),
    foreign key (color) references COLORS(color),
    foreign key (size) references SIZE(euit),
    check (quantity >= 0)
);

create table SHOPPING_BAG (
	cus char(5), -- customer
    pid char(10), -- product id
    color varchar(30), -- color
    size decimal(3,1), -- main size
    ordered integer not null,
    primary key (cid, pid, color, size),
    foreign key (cid) references CUSTOMERS(id),
    foreign key (pid) references PRODUCTS(id),
    foreign key (color) references COLORS(color),
    foreign key (size) references SIZE(euit),
    check (ordered > 0)
);

-------------------------------------------------
create table BILLS(
	id char(10) primary key, -- B000000000
    cus char(5), -- customer
    billing_date date not null,
    payment_date date,
    address varchar(100) not null,
    phone char(10) not null,
    foreign key (cid) references CUSTOMERS(id),
    check (regexp_like(phone, '^0[[:digit:]]{9}'))
);