--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.5
-- Dumped by pg_dump version 9.4.5
-- Started on 2017-06-01 17:45:50

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 196 (class 3079 OID 11855)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2158 (class 0 OID 0)
-- Dependencies: 196
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 172 (class 1259 OID 24916)
-- Name: bus; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bus (
    idbus integer NOT NULL,
    idmarque integer NOT NULL,
    idcooperative integer NOT NULL,
    matricule character varying(50),
    consommation numeric,
    nbrplace integer,
    datesortie date,
    image character varying(50)
);


ALTER TABLE bus OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 24922)
-- Name: bus_chauffeur; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bus_chauffeur (
    idbuschaufffeur integer NOT NULL,
    idchauffeur integer NOT NULL,
    idbus integer NOT NULL
);


ALTER TABLE bus_chauffeur OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 24925)
-- Name: bus_chauffeur_idbuschaufffeur_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bus_chauffeur_idbuschaufffeur_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE bus_chauffeur_idbuschaufffeur_seq OWNER TO postgres;

--
-- TOC entry 2159 (class 0 OID 0)
-- Dependencies: 174
-- Name: bus_chauffeur_idbuschaufffeur_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bus_chauffeur_idbuschaufffeur_seq OWNED BY bus_chauffeur.idbuschaufffeur;


--
-- TOC entry 175 (class 1259 OID 24927)
-- Name: bus_idbus_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bus_idbus_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE bus_idbus_seq OWNER TO postgres;

--
-- TOC entry 2160 (class 0 OID 0)
-- Dependencies: 175
-- Name: bus_idbus_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bus_idbus_seq OWNED BY bus.idbus;


--
-- TOC entry 176 (class 1259 OID 24929)
-- Name: bus_trajet; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bus_trajet (
    idbustrajet integer NOT NULL,
    idbus integer NOT NULL,
    idtrajet integer NOT NULL
);


ALTER TABLE bus_trajet OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 24932)
-- Name: bus_trajet_idbustrajet_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bus_trajet_idbustrajet_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE bus_trajet_idbustrajet_seq OWNER TO postgres;

--
-- TOC entry 2161 (class 0 OID 0)
-- Dependencies: 177
-- Name: bus_trajet_idbustrajet_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bus_trajet_idbustrajet_seq OWNED BY bus_trajet.idbustrajet;


--
-- TOC entry 178 (class 1259 OID 24934)
-- Name: chauffeur; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE chauffeur (
    idchauffeur integer NOT NULL,
    nom character varying(50),
    prenom character varying(50),
    cin character varying(50),
    dateembauche date
);


ALTER TABLE chauffeur OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 24937)
-- Name: chauffeur_idchauffeur_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE chauffeur_idchauffeur_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE chauffeur_idchauffeur_seq OWNER TO postgres;

--
-- TOC entry 2162 (class 0 OID 0)
-- Dependencies: 179
-- Name: chauffeur_idchauffeur_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE chauffeur_idchauffeur_seq OWNED BY chauffeur.idchauffeur;


--
-- TOC entry 180 (class 1259 OID 24939)
-- Name: client; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE client (
    idclient integer NOT NULL,
    nom character varying(50),
    prenom character varying(50),
    cin character varying(50),
    contact character varying(50),
    email character varying(59),
    motdepassse character varying(100)
);


ALTER TABLE client OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 24942)
-- Name: client_idclient_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE client_idclient_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE client_idclient_seq OWNER TO postgres;

--
-- TOC entry 2163 (class 0 OID 0)
-- Dependencies: 181
-- Name: client_idclient_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE client_idclient_seq OWNED BY client.idclient;


--
-- TOC entry 182 (class 1259 OID 24944)
-- Name: cooperative; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cooperative (
    idcooperative integer NOT NULL,
    libelle character varying(100),
    aneedecreation date,
    logo character varying(50)
);


ALTER TABLE cooperative OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 24947)
-- Name: cooperative_idcooperative_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cooperative_idcooperative_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cooperative_idcooperative_seq OWNER TO postgres;

--
-- TOC entry 2164 (class 0 OID 0)
-- Dependencies: 183
-- Name: cooperative_idcooperative_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cooperative_idcooperative_seq OWNED BY cooperative.idcooperative;


--
-- TOC entry 184 (class 1259 OID 24949)
-- Name: marque; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE marque (
    idmarque integer NOT NULL,
    libelle character varying(100)
);


ALTER TABLE marque OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 24952)
-- Name: marque_idmarque_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE marque_idmarque_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE marque_idmarque_seq OWNER TO postgres;

--
-- TOC entry 2165 (class 0 OID 0)
-- Dependencies: 185
-- Name: marque_idmarque_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE marque_idmarque_seq OWNED BY marque.idmarque;


--
-- TOC entry 186 (class 1259 OID 24954)
-- Name: place; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE place (
    idplace integer NOT NULL,
    idbus integer NOT NULL,
    numero integer
);


ALTER TABLE place OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 24957)
-- Name: place_idplace_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE place_idplace_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE place_idplace_seq OWNER TO postgres;

--
-- TOC entry 2166 (class 0 OID 0)
-- Dependencies: 187
-- Name: place_idplace_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE place_idplace_seq OWNED BY place.idplace;


--
-- TOC entry 188 (class 1259 OID 24959)
-- Name: place_reservation; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE place_reservation (
    idplacereservation integer NOT NULL,
    idplace integer NOT NULL,
    idreservation integer NOT NULL
);


ALTER TABLE place_reservation OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 24962)
-- Name: place_reservation_idplacereservation_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE place_reservation_idplacereservation_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE place_reservation_idplacereservation_seq OWNER TO postgres;

--
-- TOC entry 2167 (class 0 OID 0)
-- Dependencies: 189
-- Name: place_reservation_idplacereservation_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE place_reservation_idplacereservation_seq OWNED BY place_reservation.idplacereservation;


--
-- TOC entry 190 (class 1259 OID 24964)
-- Name: reservation; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE reservation (
    idreservation integer NOT NULL,
    idclient integer NOT NULL,
    datedebut date,
    datefin date,
    statut integer,
    datereservation date,
    nbrdeplace integer
);


ALTER TABLE reservation OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 24967)
-- Name: reservation_idreservation_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE reservation_idreservation_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE reservation_idreservation_seq OWNER TO postgres;

--
-- TOC entry 2168 (class 0 OID 0)
-- Dependencies: 191
-- Name: reservation_idreservation_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE reservation_idreservation_seq OWNED BY reservation.idreservation;


--
-- TOC entry 192 (class 1259 OID 24969)
-- Name: tarif; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tarif (
    idtarif integer NOT NULL,
    prix numeric,
    datetarif date
);


ALTER TABLE tarif OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 24975)
-- Name: tarif_idtarif_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tarif_idtarif_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tarif_idtarif_seq OWNER TO postgres;

--
-- TOC entry 2169 (class 0 OID 0)
-- Dependencies: 193
-- Name: tarif_idtarif_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tarif_idtarif_seq OWNED BY tarif.idtarif;


--
-- TOC entry 194 (class 1259 OID 24977)
-- Name: trajet; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE trajet (
    idtrajet integer NOT NULL,
    source character varying(100),
    destination character varying(100),
    distance numeric,
    tarif numeric
);


ALTER TABLE trajet OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 24983)
-- Name: trajet_idtrajet_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE trajet_idtrajet_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE trajet_idtrajet_seq OWNER TO postgres;

--
-- TOC entry 2170 (class 0 OID 0)
-- Dependencies: 195
-- Name: trajet_idtrajet_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE trajet_idtrajet_seq OWNED BY trajet.idtrajet;


--
-- TOC entry 1950 (class 2604 OID 24985)
-- Name: idbus; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus ALTER COLUMN idbus SET DEFAULT nextval('bus_idbus_seq'::regclass);


--
-- TOC entry 1951 (class 2604 OID 24986)
-- Name: idbuschaufffeur; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus_chauffeur ALTER COLUMN idbuschaufffeur SET DEFAULT nextval('bus_chauffeur_idbuschaufffeur_seq'::regclass);


--
-- TOC entry 1952 (class 2604 OID 24987)
-- Name: idbustrajet; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus_trajet ALTER COLUMN idbustrajet SET DEFAULT nextval('bus_trajet_idbustrajet_seq'::regclass);


--
-- TOC entry 1953 (class 2604 OID 24988)
-- Name: idchauffeur; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY chauffeur ALTER COLUMN idchauffeur SET DEFAULT nextval('chauffeur_idchauffeur_seq'::regclass);


--
-- TOC entry 1954 (class 2604 OID 24989)
-- Name: idclient; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY client ALTER COLUMN idclient SET DEFAULT nextval('client_idclient_seq'::regclass);


--
-- TOC entry 1955 (class 2604 OID 24990)
-- Name: idcooperative; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cooperative ALTER COLUMN idcooperative SET DEFAULT nextval('cooperative_idcooperative_seq'::regclass);


--
-- TOC entry 1956 (class 2604 OID 24991)
-- Name: idmarque; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY marque ALTER COLUMN idmarque SET DEFAULT nextval('marque_idmarque_seq'::regclass);


--
-- TOC entry 1957 (class 2604 OID 24992)
-- Name: idplace; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY place ALTER COLUMN idplace SET DEFAULT nextval('place_idplace_seq'::regclass);


--
-- TOC entry 1958 (class 2604 OID 24993)
-- Name: idplacereservation; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY place_reservation ALTER COLUMN idplacereservation SET DEFAULT nextval('place_reservation_idplacereservation_seq'::regclass);


--
-- TOC entry 1959 (class 2604 OID 24994)
-- Name: idreservation; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reservation ALTER COLUMN idreservation SET DEFAULT nextval('reservation_idreservation_seq'::regclass);


--
-- TOC entry 1960 (class 2604 OID 24995)
-- Name: idtarif; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tarif ALTER COLUMN idtarif SET DEFAULT nextval('tarif_idtarif_seq'::regclass);


--
-- TOC entry 1961 (class 2604 OID 24996)
-- Name: idtrajet; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY trajet ALTER COLUMN idtrajet SET DEFAULT nextval('trajet_idtrajet_seq'::regclass);


--
-- TOC entry 2127 (class 0 OID 24916)
-- Dependencies: 172
-- Data for Name: bus; Type: TABLE DATA; Schema: public; Owner: postgres
--



INSERT INTO bus (idbus, idmarque, idcooperative, matricule, consommation, nbrplace, datesortie, image) VALUES (6, 3, 5, '9584TAE', 15, 35, '1997-01-01', NULL);
INSERT INTO bus (idbus, idmarque, idcooperative, matricule, consommation, nbrplace, datesortie, image) VALUES (7, 1, 2, '8579TBC', 12, 20, '2001-01-01', NULL);
INSERT INTO bus (idbus, idmarque, idcooperative, matricule, consommation, nbrplace, datesortie, image) VALUES (8, 2, 4, '8545TAE', 8, 20, '2001-01-01', NULL);
INSERT INTO bus (idbus, idmarque, idcooperative, matricule, consommation, nbrplace, datesortie, image) VALUES (9, 1, 4, '8854TBG', 10, 20, '2001-01-01', NULL);
INSERT INTO bus (idbus, idmarque, idcooperative, matricule, consommation, nbrplace, datesortie, image) VALUES (10, 1, 2, '4451TAG', 12, 20, '2001-01-01', NULL);


--
-- TOC entry 2128 (class 0 OID 24922)
-- Dependencies: 173
-- Data for Name: bus_chauffeur; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2171 (class 0 OID 0)
-- Dependencies: 174
-- Name: bus_chauffeur_idbuschaufffeur_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bus_chauffeur_idbuschaufffeur_seq', 1, false);


--
-- TOC entry 2172 (class 0 OID 0)
-- Dependencies: 175
-- Name: bus_idbus_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bus_idbus_seq', 1, false);


--
-- TOC entry 2131 (class 0 OID 24929)
-- Dependencies: 176
-- Data for Name: bus_trajet; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2173 (class 0 OID 0)
-- Dependencies: 177
-- Name: bus_trajet_idbustrajet_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bus_trajet_idbustrajet_seq', 1, false);


--
-- TOC entry 2133 (class 0 OID 24934)
-- Dependencies: 178
-- Data for Name: chauffeur; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (1, 'Andriatomanga', 'Tahina', '117171017671', '2012-05-04');
INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (2, 'Andriamalala', 'Raoul', '114885266541', '2013-04-05');
INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (3, 'Henintsoa', 'Khoumal', '115224566521', '2011-05-02');
INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (4, 'Razonarison', 'Mahefa', '114885212212', '2014-06-07');
INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (5, 'Randriamanjara', 'Miavotra', '117448521214', '2011-04-02');
INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (6, 'Razakason', 'Kevin', '117845212111', '2015-05-02');
INSERT INTO chauffeur (idchauffeur, nom, prenom, cin, dateembauche) VALUES (7, 'Archad', 'Ali', '117458551212', '2014-05-09');


--
-- TOC entry 2174 (class 0 OID 0)
-- Dependencies: 179
-- Name: chauffeur_idchauffeur_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('chauffeur_idchauffeur_seq', 1, false);


--
-- TOC entry 2135 (class 0 OID 24939)
-- Dependencies: 180
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO client (idclient, nom, prenom, cin, contact, email, motdepassse) VALUES (1, 'Andrianjafy ', 'Mathieu', '117171017671', '0325262199', 'maths.andria@gmail.com', 'zazamaditra');
INSERT INTO client (idclient, nom, prenom, cin, contact, email, motdepassse) VALUES (2, 'Ramiandrisoa', 'Olivier', '114525851214', '0337486328', 'olivier.ramiandrisoa@gmail.com', 'bisounours');
INSERT INTO client (idclient, nom, prenom, cin, contact, email, motdepassse) VALUES (3, 'Andrianirado', 'Sitraka', '117121452123', '0320237751', 'sitrakans@gmail.com', 'sitrakans');
INSERT INTO client (idclient, nom, prenom, cin, contact, email, motdepassse) VALUES (4, 'Rabe-harinoro', 'Amboara', '117221585912', '0331452896', 'amboarakanto@gmail.com', 'kikipanda33');
INSERT INTO client (idclient, nom, prenom, cin, contact, email, motdepassse) VALUES (5, 'Razonarison', 'Mahefa', '117212252114', '0329582961', 'rivozons@gmail.com', 'selfControl');


--
-- TOC entry 2175 (class 0 OID 0)
-- Dependencies: 181
-- Name: client_idclient_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('client_idclient_seq', 1, false);


--
-- TOC entry 2137 (class 0 OID 24944)
-- Dependencies: 182
-- Data for Name: cooperative; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cooperative (idcooperative, libelle, aneedecreation, logo) VALUES (1, 'SONATRA', '2010-01-01', NULL);
INSERT INTO cooperative (idcooperative, libelle, aneedecreation, logo) VALUES (2, 'COTISSE', '2008-01-01', NULL);
INSERT INTO cooperative (idcooperative, libelle, aneedecreation, logo) VALUES (3, 'VATSY ', '2006-01-01', NULL);
INSERT INTO cooperative (idcooperative, libelle, aneedecreation, logo) VALUES (4, 'KOFMAD', '2005-01-01', NULL);
INSERT INTO cooperative (idcooperative, libelle, aneedecreation, logo) VALUES (5, 'SANS RIVAL', '2004-01-01', NULL);


--
-- TOC entry 2176 (class 0 OID 0)
-- Dependencies: 183
-- Name: cooperative_idcooperative_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cooperative_idcooperative_seq', 1, false);


--
-- TOC entry 2139 (class 0 OID 24949)
-- Dependencies: 184
-- Data for Name: marque; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO marque (idmarque, libelle) VALUES (1, 'MERCEDES SPRINTER');
INSERT INTO marque (idmarque, libelle) VALUES (2, 'MAZDA ECLIPSE');
INSERT INTO marque (idmarque, libelle) VALUES (3, 'BOIENG');


--
-- TOC entry 2177 (class 0 OID 0)
-- Dependencies: 185
-- Name: marque_idmarque_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('marque_idmarque_seq', 1, false);


--
-- TOC entry 2141 (class 0 OID 24954)
-- Dependencies: 186
-- Data for Name: place; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2178 (class 0 OID 0)
-- Dependencies: 187
-- Name: place_idplace_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('place_idplace_seq', 1, false);


--
-- TOC entry 2143 (class 0 OID 24959)
-- Dependencies: 188
-- Data for Name: place_reservation; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2179 (class 0 OID 0)
-- Dependencies: 189
-- Name: place_reservation_idplacereservation_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('place_reservation_idplacereservation_seq', 1, false);


--
-- TOC entry 2145 (class 0 OID 24964)
-- Dependencies: 190
-- Data for Name: reservation; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2180 (class 0 OID 0)
-- Dependencies: 191
-- Name: reservation_idreservation_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('reservation_idreservation_seq', 1, false);


--
-- TOC entry 2147 (class 0 OID 24969)
-- Dependencies: 192
-- Data for Name: tarif; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2181 (class 0 OID 0)
-- Dependencies: 193
-- Name: tarif_idtarif_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tarif_idtarif_seq', 1, false);


--
-- TOC entry 2149 (class 0 OID 24977)
-- Dependencies: 194
-- Data for Name: trajet; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO trajet (idtrajet, source, destination, distance, tarif) VALUES (1, 'ANTANANARIVO', 'MAHAJANGA', 595, 140000);
INSERT INTO trajet (idtrajet, source, destination, distance, tarif) VALUES (2, 'ANTANANARIVO', 'TOAMASINA', 320, 120000);
INSERT INTO trajet (idtrajet, source, destination, distance, tarif) VALUES (3, 'ANTANANARIVO ', 'FIANARANTSOA', 498, 130000);
INSERT INTO trajet (idtrajet, source, destination, distance, tarif) VALUES (4, 'ANTANANARIVO ', 'DIEGO', 1000, 450000);
INSERT INTO trajet (idtrajet, source, destination, distance, tarif) VALUES (5, 'ANTANANARIVO', 'ANTSIRABE', 170, 35000);
INSERT INTO trajet (idtrajet, source, destination, distance, tarif) VALUES (6, 'ANTANANARIVO', 'TULEAR', 998, 475000);


--
-- TOC entry 2182 (class 0 OID 0)
-- Dependencies: 195
-- Name: trajet_idtrajet_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('trajet_idtrajet_seq', 1, false);


--
-- TOC entry 1966 (class 2606 OID 24998)
-- Name: pk_bus; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bus
    ADD CONSTRAINT pk_bus PRIMARY KEY (idbus);


--
-- TOC entry 1971 (class 2606 OID 25000)
-- Name: pk_bus_chauffeur; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bus_chauffeur
    ADD CONSTRAINT pk_bus_chauffeur PRIMARY KEY (idbuschaufffeur);


--
-- TOC entry 1976 (class 2606 OID 25002)
-- Name: pk_bus_trajet; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bus_trajet
    ADD CONSTRAINT pk_bus_trajet PRIMARY KEY (idbustrajet);


--
-- TOC entry 1979 (class 2606 OID 25004)
-- Name: pk_chauffeur; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY chauffeur
    ADD CONSTRAINT pk_chauffeur PRIMARY KEY (idchauffeur);


--
-- TOC entry 1982 (class 2606 OID 25006)
-- Name: pk_client; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY client
    ADD CONSTRAINT pk_client PRIMARY KEY (idclient);


--
-- TOC entry 1985 (class 2606 OID 25008)
-- Name: pk_cooperative; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cooperative
    ADD CONSTRAINT pk_cooperative PRIMARY KEY (idcooperative);


--
-- TOC entry 1988 (class 2606 OID 25010)
-- Name: pk_marque; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY marque
    ADD CONSTRAINT pk_marque PRIMARY KEY (idmarque);


--
-- TOC entry 1991 (class 2606 OID 25012)
-- Name: pk_place; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY place
    ADD CONSTRAINT pk_place PRIMARY KEY (idplace);


--
-- TOC entry 1995 (class 2606 OID 25014)
-- Name: pk_place_reservation; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY place_reservation
    ADD CONSTRAINT pk_place_reservation PRIMARY KEY (idplacereservation);


--
-- TOC entry 2000 (class 2606 OID 25016)
-- Name: pk_reservation; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY reservation
    ADD CONSTRAINT pk_reservation PRIMARY KEY (idreservation);


--
-- TOC entry 2003 (class 2606 OID 25018)
-- Name: pk_tarif; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tarif
    ADD CONSTRAINT pk_tarif PRIMARY KEY (idtarif);


--
-- TOC entry 2006 (class 2606 OID 25020)
-- Name: pk_trajet; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY trajet
    ADD CONSTRAINT pk_trajet PRIMARY KEY (idtrajet);


--
-- TOC entry 1993 (class 1259 OID 25021)
-- Name: association_11_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX association_11_fk ON place_reservation USING btree (idreservation);


--
-- TOC entry 1962 (class 1259 OID 25022)
-- Name: association_7_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX association_7_fk ON bus USING btree (idmarque);


--
-- TOC entry 1989 (class 1259 OID 25023)
-- Name: association_9_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX association_9_fk ON place USING btree (idbus);


--
-- TOC entry 1967 (class 1259 OID 25024)
-- Name: bus_chauffeur2_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX bus_chauffeur2_fk ON bus_chauffeur USING btree (idbus);


--
-- TOC entry 1968 (class 1259 OID 25025)
-- Name: bus_chauffeur_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX bus_chauffeur_fk ON bus_chauffeur USING btree (idchauffeur);


--
-- TOC entry 1969 (class 1259 OID 25026)
-- Name: bus_chauffeur_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX bus_chauffeur_pk ON bus_chauffeur USING btree (idchauffeur, idbus);


--
-- TOC entry 1963 (class 1259 OID 25027)
-- Name: bus_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX bus_pk ON bus USING btree (idbus);


--
-- TOC entry 1972 (class 1259 OID 25028)
-- Name: bus_trajet2_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX bus_trajet2_fk ON bus_trajet USING btree (idtrajet);


--
-- TOC entry 1973 (class 1259 OID 25029)
-- Name: bus_trajet_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX bus_trajet_fk ON bus_trajet USING btree (idbus);


--
-- TOC entry 1974 (class 1259 OID 25030)
-- Name: bus_trajet_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX bus_trajet_pk ON bus_trajet USING btree (idbus, idtrajet);


--
-- TOC entry 1977 (class 1259 OID 25031)
-- Name: chauffeur_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX chauffeur_pk ON chauffeur USING btree (idchauffeur);


--
-- TOC entry 1980 (class 1259 OID 25032)
-- Name: client_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX client_pk ON client USING btree (idclient);


--
-- TOC entry 1998 (class 1259 OID 25033)
-- Name: client_reservation_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX client_reservation_fk ON reservation USING btree (idclient);


--
-- TOC entry 1964 (class 1259 OID 25034)
-- Name: cooperative_bus_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX cooperative_bus_fk ON bus USING btree (idcooperative);


--
-- TOC entry 1983 (class 1259 OID 25035)
-- Name: cooperative_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX cooperative_pk ON cooperative USING btree (idcooperative);


--
-- TOC entry 1986 (class 1259 OID 25036)
-- Name: marque_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX marque_pk ON marque USING btree (idmarque);


--
-- TOC entry 1992 (class 1259 OID 25037)
-- Name: place_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX place_pk ON place USING btree (idplace);


--
-- TOC entry 1996 (class 1259 OID 25038)
-- Name: place_reservation_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX place_reservation_fk ON place_reservation USING btree (idplace);


--
-- TOC entry 1997 (class 1259 OID 25039)
-- Name: place_reservation_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX place_reservation_pk ON place_reservation USING btree (idplace, idreservation);


--
-- TOC entry 2001 (class 1259 OID 25040)
-- Name: reservation_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX reservation_pk ON reservation USING btree (idreservation);


--
-- TOC entry 2004 (class 1259 OID 25041)
-- Name: tarif_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX tarif_pk ON tarif USING btree (idtarif);


--
-- TOC entry 2007 (class 1259 OID 25042)
-- Name: trajet_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX trajet_pk ON trajet USING btree (idtrajet);


--
-- TOC entry 2015 (class 2606 OID 25043)
-- Name: fk_associat_associati_place; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY place_reservation
    ADD CONSTRAINT fk_associat_associati_place FOREIGN KEY (idplace) REFERENCES place(idplace) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2016 (class 2606 OID 25048)
-- Name: fk_associat_associati_reservat; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY place_reservation
    ADD CONSTRAINT fk_associat_associati_reservat FOREIGN KEY (idreservation) REFERENCES reservation(idreservation) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2008 (class 2606 OID 25053)
-- Name: fk_bus_associati_marque; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus
    ADD CONSTRAINT fk_bus_associati_marque FOREIGN KEY (idmarque) REFERENCES marque(idmarque) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2010 (class 2606 OID 25058)
-- Name: fk_bus_chau_bus_chauf_bus; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus_chauffeur
    ADD CONSTRAINT fk_bus_chau_bus_chauf_bus FOREIGN KEY (idbus) REFERENCES bus(idbus) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2011 (class 2606 OID 25063)
-- Name: fk_bus_chau_bus_chauf_chauffeu; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus_chauffeur
    ADD CONSTRAINT fk_bus_chau_bus_chauf_chauffeu FOREIGN KEY (idchauffeur) REFERENCES chauffeur(idchauffeur) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2009 (class 2606 OID 25068)
-- Name: fk_bus_cooperati_cooperat; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus
    ADD CONSTRAINT fk_bus_cooperati_cooperat FOREIGN KEY (idcooperative) REFERENCES cooperative(idcooperative) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2012 (class 2606 OID 25073)
-- Name: fk_bus_traj_bus_traje_bus; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus_trajet
    ADD CONSTRAINT fk_bus_traj_bus_traje_bus FOREIGN KEY (idbus) REFERENCES bus(idbus) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2013 (class 2606 OID 25078)
-- Name: fk_bus_traj_bus_traje_trajet; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bus_trajet
    ADD CONSTRAINT fk_bus_traj_bus_traje_trajet FOREIGN KEY (idtrajet) REFERENCES trajet(idtrajet) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2014 (class 2606 OID 25083)
-- Name: fk_place_associati_bus; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY place
    ADD CONSTRAINT fk_place_associati_bus FOREIGN KEY (idbus) REFERENCES bus(idbus) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2017 (class 2606 OID 25088)
-- Name: fk_reservat_client_re_client; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reservation
    ADD CONSTRAINT fk_reservat_client_re_client FOREIGN KEY (idclient) REFERENCES client(idclient) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2157 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-06-01 17:45:51

--
-- PostgreSQL database dump complete
--

