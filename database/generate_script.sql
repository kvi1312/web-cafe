

/*==============================================================*/
/* Table: CAGETORY                                              */
/*==============================================================*/
create table CAGETORY
(
   C_ID                 Bigint not null,
   C_NAME               varchar(572),
   C_CODE               varchar(256),
   primary key (C_ID)
);

/*==============================================================*/
/* Table: GALLERY                                               */
/*==============================================================*/
create table GALLERY
(
   G_ID                Bigint not null AUTO_INCREMENT,
   P_ID                 Bigint not null,
   G_NAME               varchar(256),
   G_LINK               varchar(256) not null,
   primary key (G_ID)
);

/*==============================================================*/
/* Table: INVOICE                                               */
/*==============================================================*/
create table INVOICE
(
   I_ID                 Bigint not null AUTO_INCREMENT,
   U_ID                 Bigint not null,
   I_OPEN_TIME          datetime,
   I_CHECKOUT_TIME      datetime,
   I_STATUS             varchar(256),
   I_SHIPPING_ADDRESS   text,
   I_TOTAL              float(8,2),
   primary key (I_ID)
);

/*==============================================================*/
/* Table: PRODUCT                                               */
/*==============================================================*/
create table PRODUCT
(
   P_ID                 Bigint not null AUTO_INCREMENT,
   C_ID                 Bigint not null,
   P_NAME               varchar(256),
   P_SIZE               char(3),
   P_MATERIAL           longtext,
   P_PRICE              float(8,2),
   P_DES                varchar(572),
   P_STATUS             text,
   P_THUMBNAIL          varchar(256),
   primary key (P_ID)
);

/*==============================================================*/
/* Table: PURCHASE_DETAIL                                       */
/*==============================================================*/
create table PURCHASE_DETAIL
(
   P_ID                 Bigint not null,
   I_ID                 Bigint not null,
   PD_AMOUNT            numeric(8,0),
   PD_PRICE             float(8,2) not null,
   primary key (P_ID, I_ID)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   U_ID                 Bigint not null AUTO_INCREMENT,
   U_EMAIL              varchar(256) not null,
   U_PASSWORD           varchar(256),
   U_NAME               varchar(50) not null,
   U_PHONE              varchar(15) not null, 
   U_ADDRESS            varchar(256),
   U_ROLE               varchar(256),
   primary key (U_ID)
);

alter table GALLERY add constraint FK_RELATIONSHIP_2 foreign key (P_ID)
      references PRODUCT (P_ID) on delete restrict on update restrict;

alter table INVOICE add constraint FK_RELATIONSHIP_5 foreign key (U_ID)
      references USER (U_ID) on delete restrict on update restrict;

alter table PRODUCT add constraint FK_RELATIONSHIP_1 foreign key (C_ID)
      references CAGETORY (C_ID) on delete restrict on update restrict;

alter table PURCHASE_DETAIL add constraint FK_RELATIONSHIP_3 foreign key (P_ID)
      references PRODUCT (P_ID) on delete restrict on update restrict;

alter table PURCHASE_DETAIL add constraint FK_RELATIONSHIP_4 foreign key (I_ID)
      references INVOICE (I_ID) on delete restrict on update restrict;
