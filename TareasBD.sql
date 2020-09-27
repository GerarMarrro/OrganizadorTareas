-- DROP SCHEMA public;

CREATE SCHEMA public AUTHORIZATION postgres;

COMMENT ON SCHEMA public IS 'standard public schema';

-- DROP TYPE _tareas;

CREATE TYPE _tareas (
	INPUT = array_in,
	OUTPUT = array_out,
	RECEIVE = array_recv,
	SEND = array_send,
	ANALYZE = array_typanalyze,
	ALIGNMENT = 8,
	STORAGE = any,
	CATEGORY = A,
	ELEMENT = tareas,
	DELIMITER = ',');

-- DROP TYPE tareas;

CREATE TYPE tareas AS (
	id_tarea int4,
	titulo varchar,
	descripcion varchar,
	inicio date(0),
	horainicio varchar,
	importancia int4,
	tipoduracion bpchar(1),
	duracion int4,
	estado bpchar(1));

-- DROP SEQUENCE public.tareas_id_tarea_seq;

CREATE SEQUENCE public.tareas_id_tarea_seq
	INCREMENT BY 1
	MINVALUE 1
	MAXVALUE 2147483647
	START 1
	CACHE 1
	NO CYCLE;

-- Permissions

ALTER SEQUENCE public.tareas_id_tarea_seq OWNER TO postgres;
GRANT ALL ON SEQUENCE public.tareas_id_tarea_seq TO postgres;
-- public.tareas definition

-- Drop table

-- DROP TABLE public.tareas;

CREATE TABLE public.tareas (
	id_tarea int4 NOT NULL GENERATED ALWAYS AS IDENTITY,
	titulo varchar NULL,
	descripcion varchar NULL,
	inicio date NULL,
	horainicio varchar NULL,
	importancia int4 NULL,
	tipoduracion bpchar(1) NULL,
	duracion int4 NULL,
	estado bpchar(1) NULL
);
CREATE UNIQUE INDEX tareas_id_tarea_idx ON public.tareas USING btree (id_tarea);

-- Permissions

ALTER TABLE public.tareas OWNER TO postgres;
GRANT ALL ON TABLE public.tareas TO postgres;




-- Permissions

GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO public;
