/*==============================================================*/
/* Nom de SGBD :  PostgreSQL 8                                  */
/* Date de cr�ation :  02/06/2017 20:36:09                      */
/*==============================================================*/


drop index RELATIONSHIP_5_FK;

drop index ADMIN_PK;

drop table ADMIN cascade;

drop index COOPERATIVE_BUS_FK;

drop index BUS_PK;

drop table BUS cascade;

drop index CHAUFFEUR_PK;

drop table CHAUFFEUR cascade;

drop index CLIENT_PK;

drop table CLIENT cascade;

drop index COOPERATIVE_PK;

drop table COOPERATIVE cascade;

drop index HISTORIQUETARIF_PK;

drop table HISTORIQUETARIF cascade;

drop index MARQUE_PK;

drop table MARQUE cascade;

drop index RELATIONSHIP_6_FK;

drop index PAYEMENT_PK;

drop table PAYEMENT cascade;

drop index ASSOCIATION_9_FK;

drop index PLACE_PK;

drop table PLACE cascade;

drop index RELATIONSHIP_4_FK;

drop index RELATIONSHIP_3_FK;

drop index RELATIONSHIP_2_FK;

drop index PLACE_RESERVATION_PK;

drop table PLACE_RESERVATION cascade;

drop index CLIENT_RESERVATION_FK;

drop index RESERVATION_PK;

drop table RESERVATION cascade;

drop index RELATION_7_FK;

drop index RELATIONSHIP_1_FK;

drop index TRAJET_PK;

drop table TRAJET cascade;

drop index VILLE_PK;

drop table VILLE cascade;

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN (
   IDADMIN              SERIAL               not null,
   IDCOOPERATIVE        INT4                 null,
   NOM                  VARCHAR(50)          null,
   PRENOM               VARCHAR(50)          null,
   EMAIL                VARCHAR(59)          null,
   MOTDEPASSE           VARCHAR(100)         null,
   SUPER                BOOL                 null,
   constraint PK_ADMIN primary key (IDADMIN)
);

/*==============================================================*/
/* Index : ADMIN_PK                                             */
/*==============================================================*/
create unique index ADMIN_PK on ADMIN (
IDADMIN
);

/*==============================================================*/
/* Index : RELATIONSHIP_5_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_5_FK on ADMIN (
IDCOOPERATIVE
);

/*==============================================================*/
/* Table : BUS                                                  */
/*==============================================================*/
create table BUS (
   IDBUS                SERIAL               not null,
   IDCOOPERATIVE        INT4                 not null,
   MARQUE               VARCHAR(50)          null,
   MATRICULE            VARCHAR(50)          not null,
   CONSOMMATION         NUMERIC              null,
   NBRPLACE             INT4                 not null,
   DATESORTIE           DATE                 null,
   ETAT                 INT4                 null,
   constraint PK_BUS primary key (IDBUS)
);

/*==============================================================*/
/* Index : BUS_PK                                               */
/*==============================================================*/
create unique index BUS_PK on BUS (
IDBUS
);

/*==============================================================*/
/* Index : COOPERATIVE_BUS_FK                                   */
/*==============================================================*/
create  index COOPERATIVE_BUS_FK on BUS (
IDCOOPERATIVE
);

/*==============================================================*/
/* Table : CHAUFFEUR                                            */
/*==============================================================*/
create table CHAUFFEUR (
   IDCHAUFFEUR          SERIAL               not null,
   NOM                  VARCHAR(50)          null,
   PRENOM               VARCHAR(50)          null,
   CIN                  VARCHAR(50)          null,
   DATEEMBAUCHE         DATE                 null,
   constraint PK_CHAUFFEUR primary key (IDCHAUFFEUR)
);

/*==============================================================*/
/* Index : CHAUFFEUR_PK                                         */
/*==============================================================*/
create unique index CHAUFFEUR_PK on CHAUFFEUR (
IDCHAUFFEUR
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT (
   IDCLIENT             SERIAL               not null,
   NOM                  VARCHAR(50)          null,
   PRENOM               VARCHAR(50)          null,
   CIN                  VARCHAR(50)          null,
   CONTACT              VARCHAR(50)          null,
   EMAIL                VARCHAR(59)          null,
   MOTDEPASSE          VARCHAR(100)         null,
   constraint PK_CLIENT primary key (IDCLIENT)
);

/*==============================================================*/
/* Index : CLIENT_PK                                            */
/*==============================================================*/
create unique index CLIENT_PK on CLIENT (
IDCLIENT
);

/*==============================================================*/
/* Table : COOPERATIVE                                          */
/*==============================================================*/
create table COOPERATIVE (
   IDCOOPERATIVE        SERIAL               not null,
   LIBELLE              VARCHAR(100)         null,
   ANEEDECREATION       DATE                 null,
   constraint PK_COOPERATIVE primary key (IDCOOPERATIVE)
);

/*==============================================================*/
/* Index : COOPERATIVE_PK                                       */
/*==============================================================*/
create unique index COOPERATIVE_PK on COOPERATIVE (
IDCOOPERATIVE
);

/*==============================================================*/
/* Table : HISTORIQUETARIF                                      */
/*==============================================================*/
create table HISTORIQUETARIF (
   IDTARIF              SERIAL               not null,
   PRIX                 NUMERIC              null,
   DATETARIF            DATE                 null,
   constraint PK_HISTORIQUETARIF primary key (IDTARIF)
);

/*==============================================================*/
/* Index : HISTORIQUETARIF_PK                                   */
/*==============================================================*/
create unique index HISTORIQUETARIF_PK on HISTORIQUETARIF (
IDTARIF
);

/*==============================================================*/
/* Table : MARQUE                                               */
/*==============================================================*/
create table MARQUE (
   IDMARQUE             SERIAL               not null,
   LIBELLE              VARCHAR(100)         null,
   constraint PK_MARQUE primary key (IDMARQUE)
);

/*==============================================================*/
/* Index : MARQUE_PK                                            */
/*==============================================================*/
create unique index MARQUE_PK on MARQUE (
IDMARQUE
);

/*==============================================================*/
/* Table : PAYEMENT                                             */
/*==============================================================*/
create table PAYEMENT (
   IDPAYEMENT           SERIAL               not null,
   IDRESERVATION        INT4                 not null,
   MONTANT              NUMERIC              null,
   DATEPAYEMENT         DATE                 null,
   constraint PK_PAYEMENT primary key (IDPAYEMENT)
);

/*==============================================================*/
/* Index : PAYEMENT_PK                                          */
/*==============================================================*/
create unique index PAYEMENT_PK on PAYEMENT (
IDPAYEMENT
);

/*==============================================================*/
/* Index : RELATIONSHIP_6_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_6_FK on PAYEMENT (
IDRESERVATION
);

/*==============================================================*/
/* Table : PLACE                                                */
/*==============================================================*/
create table PLACE (
   IDPLACE              SERIAL               not null,
   IDBUS                INT4                 not null,
   NUMERO               INT4                 null,
   constraint PK_PLACE primary key (IDPLACE)
);

/*==============================================================*/
/* Index : PLACE_PK                                             */
/*==============================================================*/
create unique index PLACE_PK on PLACE (
IDPLACE
);

/*==============================================================*/
/* Index : ASSOCIATION_9_FK                                     */
/*==============================================================*/
create  index ASSOCIATION_9_FK on PLACE (
IDBUS
);

/*==============================================================*/
/* Table : PLACE_RESERVATION                                    */
/*==============================================================*/
create table PLACE_RESERVATION (
   IDPLACERESERVATION   SERIAL               not null,
   IDTRAJET             INT4                 not null,
   IDRESERVATION        INT4                 not null,
   IDPLACE              INT4                 not null,
   constraint PK_PLACE_RESERVATION primary key (IDPLACERESERVATION)
);

/*==============================================================*/
/* Index : PLACE_RESERVATION_PK                                 */
/*==============================================================*/
create unique index PLACE_RESERVATION_PK on PLACE_RESERVATION (
IDPLACERESERVATION
);

/*==============================================================*/
/* Index : RELATIONSHIP_2_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_2_FK on PLACE_RESERVATION (
IDPLACE
);

/*==============================================================*/
/* Index : RELATIONSHIP_3_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_3_FK on PLACE_RESERVATION (
IDTRAJET
);

/*==============================================================*/
/* Index : RELATIONSHIP_4_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_4_FK on PLACE_RESERVATION (
IDRESERVATION
);

/*==============================================================*/
/* Table : RESERVATION                                          */
/*==============================================================*/
create table RESERVATION (
   IDRESERVATION        SERIAL               not null,
   IDCLIENT             INT4                 not null,
   STATUT               INT4                 null,
   DATERESERVATION      DATE                 null,
   TOTAL                NUMERIC              null,
   PAYE                 NUMERIC              null,
   constraint PK_RESERVATION primary key (IDRESERVATION)
);

comment on column RESERVATION.STATUT is
'SANS STATUT = 0
ANNULE = -1
CONFIRME = 1
PAYE = 2
';

/*==============================================================*/
/* Index : RESERVATION_PK                                       */
/*==============================================================*/
create unique index RESERVATION_PK on RESERVATION (
IDRESERVATION
);

/*==============================================================*/
/* Index : CLIENT_RESERVATION_FK                                */
/*==============================================================*/
create  index CLIENT_RESERVATION_FK on RESERVATION (
IDCLIENT
);

/*==============================================================*/
/* Table : TRAJET                                               */
/*==============================================================*/
create table TRAJET (
   IDTRAJET             SERIAL               not null,
   IDCHAUFFEUR          INT4                 not null,
   IDBUS                INT4                 not null,
   SOURCE               VARCHAR(100)         null,
   DESTINATION          VARCHAR(100)         null,
   DATEDEPART           DATE                 null,
   HEUREDEPART          TIME                 null,
   TARIF                NUMERIC              null,
   constraint PK_TRAJET primary key (IDTRAJET)
);

/*==============================================================*/
/* Index : TRAJET_PK                                            */
/*==============================================================*/
create unique index TRAJET_PK on TRAJET (
IDTRAJET
);

/*==============================================================*/
/* Index : RELATIONSHIP_1_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_1_FK on TRAJET (
IDBUS
);

/*==============================================================*/
/* Index : RELATION_7_FK                                        */
/*==============================================================*/
create  index RELATION_7_FK on TRAJET (
IDCHAUFFEUR
);

/*==============================================================*/
/* Table : VILLE                                                */
/*==============================================================*/
create table VILLE (
   IDVILLE              SERIAL               not null,
   LIBELLE              VARCHAR(100)         null,
   AXE                  INT4                 null,
   PK                   INT4                 null,
   constraint PK_VILLE primary key (IDVILLE)
);

/*==============================================================*/
/* Index : VILLE_PK                                             */
/*==============================================================*/
create unique index VILLE_PK on VILLE (
IDVILLE
);

alter table ADMIN
   add constraint FK_ADMIN_RELATIONS_COOPERAT foreign key (IDCOOPERATIVE)
      references COOPERATIVE (IDCOOPERATIVE)
      on delete restrict on update restrict;

alter table BUS
   add constraint FK_BUS_COOPERATI_COOPERAT foreign key (IDCOOPERATIVE)
      references COOPERATIVE (IDCOOPERATIVE)
      on delete restrict on update restrict;

alter table PAYEMENT
   add constraint FK_PAYEMENT_RELATIONS_RESERVAT foreign key (IDRESERVATION)
      references RESERVATION (IDRESERVATION)
      on delete restrict on update restrict;

alter table PLACE
   add constraint FK_PLACE_ASSOCIATI_BUS foreign key (IDBUS)
      references BUS (IDBUS)
      on delete restrict on update restrict;

alter table PLACE_RESERVATION
   add constraint FK_PLACE_RE_RELATIONS_PLACE foreign key (IDPLACE)
      references PLACE (IDPLACE)
      on delete restrict on update restrict;

alter table PLACE_RESERVATION
   add constraint FK_PLACE_RE_RELATIONS_TRAJET foreign key (IDTRAJET)
      references TRAJET (IDTRAJET)
      on delete restrict on update restrict;

alter table PLACE_RESERVATION
   add constraint FK_PLACE_RE_RELATIONS_RESERVAT foreign key (IDRESERVATION)
      references RESERVATION (IDRESERVATION)
      on delete restrict on update restrict;

alter table RESERVATION
   add constraint FK_RESERVAT_CLIENT_RE_CLIENT foreign key (IDCLIENT)
      references CLIENT (IDCLIENT)
      on delete restrict on update restrict;

alter table TRAJET
   add constraint FK_TRAJET_RELATIONS_BUS foreign key (IDBUS)
      references BUS (IDBUS)
      on delete restrict on update restrict;

alter table TRAJET
   add constraint FK_TRAJET_RELATION__CHAUFFEU foreign key (IDCHAUFFEUR)
      references CHAUFFEUR (IDCHAUFFEUR)
      on delete restrict on update restrict;

create or replace view TRAJET_INFO as 
      select trajet.idtrajet,trajet.idchauffeur,bus.idbus,source,destination,dateDepart,heureDepart,tarif, 
            bus.nbrplace - count(place_reservation.idPlace) as libre, bus.nbrplace ,cooperative.libelle as cooperative,
            chauffeur.nom,chauffeur.prenom,bus.matricule
      from TRAJET
      join BUS on bus.idbus=trajet.idbus
      left join PLACE_RESERVATION on place_reservation.idtrajet=trajet.idtrajet
      join COOPERATIVE on cooperative.idcooperative=bus.idcooperative
      join CHAUFFEUR on chauffeur.idchauffeur=trajet.idchauffeur
      group by trajet.idtrajet,trajet.idchauffeur,bus.idbus,source,destination,dateDepart,heureDepart,tarif,cooperative.libelle,chauffeur.nom,chauffeur.prenom,bus.matricule,bus.nbrplace