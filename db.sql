CREATE SCHEMA public AUTHORIZATION postgres;

CREATE TABLE public.hotel (
	id bigserial NOT NULL,
	"name" varchar(255) NOT NULL,
	address varchar(255) NOT NULL,
	city varchar(255) NOT NULL,
	nit varchar(255) NULL,
	number_of_rooms int4 NOT NULL,
	asigned_rooms int4 NULL DEFAULT 0,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	CONSTRAINT hotel_name_unique UNIQUE (name),
	CONSTRAINT hotel_pkey PRIMARY KEY (id)
);

CREATE TABLE public.rooms (
	id bigserial NOT NULL,
	id_hotel int4 NOT NULL,
	amount int4 NOT NULL,
	"type" varchar(255) NOT NULL,
	accommodation varchar(255) NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	CONSTRAINT rooms_pkey PRIMARY KEY (id)
);

