/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     25/4/2017 9:57:39                            */
/*==============================================================*/


drop table if exists ANTECEDENTES;

drop table if exists ANTECEDENTES_PATOLOGICOS;

drop table if exists APRENDIZAJE_BASICO;

drop table if exists CIUDAD;

drop table if exists CONDUCTA;

drop table if exists CONSULTA_MEDICA;

drop table if exists DATOS_PERSONAL;

drop table if exists DESARROLLO_MOTOR_Y_LENGUAJE;

drop table if exists DOCUMENTO_ESTUDIANTE;

drop table if exists EGRESOS_SITUACION_ECONOMICA;

drop table if exists ENTIDAD;

drop table if exists ESTRUCTURA_FAMILIAR;

drop table if exists ESTRUCTURA_Y_FUNCION_ORAL;

drop table if exists ESTUDIANTE;

drop table if exists FICHA_LOGOPEDICA;

drop table if exists HABILIDADES;

drop table if exists HISTORIAL_DESARROLLO_SOCIOAFECTIVO;

drop table if exists HISTORIAL_EDUCATIVO;

drop table if exists HISTORICO_INFORMACION;

drop table if exists INFORMACION_SALUD;

drop table if exists INGRESOS_SITUACION_ECONOMICA;

drop table if exists LDAP;

drop table if exists MOTRICIDAD;

drop table if exists PAIS;

drop table if exists PARROQUIA;

drop table if exists PERSONA_CONTACTO;

drop table if exists PROVINCIA;

drop table if exists REGION;

drop table if exists ROLE;

drop table if exists SEGUIMIENTO_ESTUDIANTE;

drop table if exists SEXO;

drop table if exists TRAZA_USER;

drop table if exists USUARIO;

drop table if exists USUARIO_LDAP;

drop table if exists USUARIO_ROLE;

drop table if exists VIVIENDA;

/*==============================================================*/
/* Table: ANTECEDENTES                                          */
/*==============================================================*/
create table ANTECEDENTES
(
   ID_ANTECEDENTES      int not null auto_increment,
   PARIENTE             text,
   DESCRIPCION          text,
   primary key (ID_ANTECEDENTES)
);

/*==============================================================*/
/* Table: ANTECEDENTES_PATOLOGICOS                              */
/*==============================================================*/
create table ANTECEDENTES_PATOLOGICOS
(
   ID_ANTECEDENTES_PATOLOGICOS int not null auto_increment,
   OIDO_SUPURACION      text,
   OIDO_OPERACIONES     text,
   OIDO_MAREO           text,
   NARIZ_OBSTRUCCION    text,
   NARIZ_TRAUMATISMO    text,
   BOCA_ANOMALIA_PALADAR text,
   BOCA_OPERACIONES     text,
   BOCA_DENTADURA       text,
   LARINGE_INFECCIONES  text,
   LARINGE_OPERACIONES  text,
   FARINGE_INFLAMACIONES text,
   FARINGE_TUMORES      text,
   FERINGE_OPERACIONES  text,
   ALIMENTACION         text,
   DEGLUCION            text,
   OTRO                 text,
   TRACTO_RESPIRATIORIO_INFERIOR text,
   CONVULSIONES         text,
   EXAMENES_Y_TRATAMIENTOS_ANTERIORES text,
   primary key (ID_ANTECEDENTES_PATOLOGICOS)
);

/*==============================================================*/
/* Table: APRENDIZAJE_BASICO                                    */
/*==============================================================*/
create table APRENDIZAJE_BASICO
(
   ID_APRENDIZAJE       int not null auto_increment,
   ACTIVIDAD            text,
   EDAD_LOGRO           int,
   LOGRO                bool,
   DESCRIPCION          text,
   primary key (ID_APRENDIZAJE)
);

/*==============================================================*/
/* Table: CIUDAD                                                */
/*==============================================================*/
create table CIUDAD
(
   ID_CIUDAD            int not null auto_increment,
   ID_PROVINCIA         int,
   CODIGO               varchar(100),
   NOMBRE               text,
   primary key (ID_CIUDAD)
);

/*==============================================================*/
/* Table: CONDUCTA                                              */
/*==============================================================*/
create table CONDUCTA
(
   ID_CONDUCTA          int not null auto_increment,
   CARACTERISTICA       text,
   CUMPLE               bool,
   primary key (ID_CONDUCTA)
);

/*==============================================================*/
/* Table: CONSULTA_MEDICA                                       */
/*==============================================================*/
create table CONSULTA_MEDICA
(
   ID_CONSULTA          int not null auto_increment,
   FECHA                date,
   MOTIVO_CONSULTA      text,
   DIAGNOSTICO_MEDICO   text,
   PRENATAL_MEDICAMENTOS text,
   DOSIS                text,
   PROBLEMATICA_ACTUAL  text,
   PROTESIS             text,
   ALERGIAS             text,
   primary key (ID_CONSULTA)
);

/*==============================================================*/
/* Table: DATOS_PERSONAL                                        */
/*==============================================================*/
create table DATOS_PERSONAL
(
   ID_DATOS_PERSONAL    int not null auto_increment,
   NOMBRES              text,
   APELLIDOS            text,
   CEDULA               int,
   CARGO                text,
   TIPO                 text,
   CICLO                text,
   ESTADO               text,
   FECHA_INGRESO_INSTITUCION text,
   TELEFONO             text,
   EMAIL                text,
   DIRECCION            text,
   primary key (ID_DATOS_PERSONAL)
);

/*==============================================================*/
/* Table: DESARROLLO_MOTOR_Y_LENGUAJE                           */
/*==============================================================*/
create table DESARROLLO_MOTOR_Y_LENGUAJE
(
   ID_DESARROLLO_MOTOR  int not null auto_increment,
   MOTOR_SOSTEN_CEFALICO text,
   MOTOR_GIROS          text,
   MOTOR_POSICION_SENTADA text,
   MOTOR_GATEO          text,
   MOTOR_BEPEDESTACION  text,
   MOTOR_MARCHA         text,
   LENGUAJE_SONRISA_SOCIAL text,
   LENGUAJE_BALBUCEO    text,
   LENGUAJE_FRASES      text,
   LENGUAJE_COMUNICA_ACTUALMENTE text,
   LENGUAJE_GORGEO      text,
   LENGUAJE_PRIMERA_PALABRA text,
   LENGUAJE_ORACIONES   text,
   primary key (ID_DESARROLLO_MOTOR)
);

/*==============================================================*/
/* Table: DOCUMENTO_ESTUDIANTE                                  */
/*==============================================================*/
create table DOCUMENTO_ESTUDIANTE
(
   ID_DOCUMENTO         int not null auto_increment,
   RUTA_DOCUMENTO       text,
   FECHA                date,
   TIPO_DOCUMENTO       text,
   DESCRIPCION          text,
   primary key (ID_DOCUMENTO)
);

/*==============================================================*/
/* Table: EGRESOS_SITUACION_ECONOMICA                           */
/*==============================================================*/
create table EGRESOS_SITUACION_ECONOMICA
(
   ID_EGRESOS           int not null auto_increment,
   DESCRIPCION_RUBRO    text,
   MONTO_EGRESO         decimal(8,2),
   OBSERVACIONES        text,
   primary key (ID_EGRESOS)
);

/*==============================================================*/
/* Table: ENTIDAD                                               */
/*==============================================================*/
create table ENTIDAD
(
   ID_ENTIDAD           int not null auto_increment,
   RAZON_SOCIAL         text,
   NOMBRE_CORTO         text,
   DIRECCION            text,
   TELEFONO             text,
   CORREO               text,
   RUC                  text,
   FECHA_CREACION       date,
   DESCRIPCION          text,
   RUTA_LOGO            text,
   primary key (ID_ENTIDAD)
);

/*==============================================================*/
/* Table: ESTRUCTURA_FAMILIAR                                   */
/*==============================================================*/
create table ESTRUCTURA_FAMILIAR
(
   ID_CONVIVE           int not null auto_increment,
   NOMBRES              text,
   APELLIDOS            text,
   PARENTESCO           text,
   EDAD                 int,
   INSTRUCCION          text,
   OCUPACION            text,
   DISCAPACIDAD         bool,
   DESCRIPCION_DISCAPACIDAD text,
   OBSERVACION          text,
   CONVIVE              bool,
   primary key (ID_CONVIVE)
);

/*==============================================================*/
/* Table: ESTRUCTURA_Y_FUNCION_ORAL                             */
/*==============================================================*/
create table ESTRUCTURA_Y_FUNCION_ORAL
(
   ID_ESTRUCTURA_Y_FUNCION_ORAL int not null auto_increment,
   LENGUA_TAMANIO       text,
   LENGUA_PROTRUCION_RECTA text,
   LANGUA_LATERALIZACION_IZQ text,
   LENGUA_LATERALIZACION_DER text,
   LENGUA_ELEVACION_DIENTES_SUPERIORES text,
   LENGUA_MOV_ALTERNOS_SACAR_METER text,
   LENGUA_MOV_ALTERNOS_PRODUCIR_LA text,
   LENGUA_MOV_ALTERNOS_PRODUCIR_KA text,
   LENGUA_MOV_ALTERNOS_VIBRAR text,
   LENGUA_ACANALARLA    text,
   LENGUA_TEMBLORES     text,
   LENGUA_OBSERVACIONES text,
   LABIOS_SIMETRIA_FORMA text,
   LABIOS_PROTUCION     text,
   LABIOS_RETRACCION    text,
   LABIOS_ABRIR_CERRAR_BOCA text,
   LABIOS_APRETAR_BOCA  text,
   LABIOS_PRODUCCION    text,
   LABIOS_OBSERVACIONES text,
   PALADAR_SIMETRIA_FORMA text,
   PALADAR_UVULA        text,
   PALADAR_MOVILIDAD_VELO text,
   PALADAR_OBSERVACIONES text,
   DIENTES_IMPLANTACION text,
   DIENTES_ESTADOS      text,
   DIENTES_OCLUSION     text,
   DIENTES_DENTATURA_POSTIZA text,
   DIENTES_OBSERVACIONES text,
   MOV_MAXILAR_DER      text,
   MOV_MAXILAR_IZQ      text,
   MOV_MAXILAR_ADELANTE text,
   MOV_MAXILAR_ROTACION text,
   REPORTE_PACIENTE_DEGLUTIR_VOLUNTARIO bool,
   REPORTE_PACIENTE_DEGLUTIR_INVOLUNTARIO bool,
   REPORTE_PACIENTE_MASTICAR text,
   REPORTE_PACIENTE_CARRASPEAR text,
   REPORTE_PACIENTE_CIALORREA text,
   REPORTE_PACIENTE_REFLEJO_PALADAR text,
   REPORTE_PACIENTE_DIFICULTAD_MOV_ORALES text,
   REPORTE_PACIENTE_OBSERVACIONES text,
   primary key (ID_ESTRUCTURA_Y_FUNCION_ORAL)
);

/*==============================================================*/
/* Table: ESTUDIANTE                                            */
/*==============================================================*/
create table ESTUDIANTE
(
   ID_ESTUDIANTE        int not null auto_increment,
   ID_PARROQUIA         int,
   ID_CIUDAD            int,
   ID_PROVINCIA         int,
   ID_REGION            int,
   ID_PAIS              int,
   NOMBRES              text,
   APELLIDOS            text,
   CEDULA               int,
   DOMICILIO            varchar(256),
   SECTOR               varchar(100),
   CAMBIO_DOMICILIO     varchar(256),
   USA_TELEFONO         bool,
   EDAD                 int,
   FECHA_NACIMIENTO     date,
   RUTA_FOTO            varchar(256),
   RIESGO_FAMILIAR_RESPONSABLE_DESPUES_ESCUELA text,
   NUMERO_CARNET_CONADIS bigint,
   CARNET_CONADIS       bool,
   PORCENTAJE_DISCAPACIDAD text,
   FECHA_INGRESO_IFEE   date,
   TRANSPORTE_LLEGADA   text,
   TELEFONO_TRANSPORTE  int,
   primary key (ID_ESTUDIANTE)
);

/*==============================================================*/
/* Table: FICHA_LOGOPEDICA                                      */
/*==============================================================*/
create table FICHA_LOGOPEDICA
(
   ID_LOGOPEDICA        int not null auto_increment,
   MOTIVO_CONSULTA      text,
   CARACTERISTICA_VOZ   text,
   CARACTERISTICA_RESPIRACION text,
   DESPITAJE_AUDICION   text,
   IMPRESION_DIAGNOSTICA text,
   OBSERVACIONES        text,
   RECOMENDACIONES      text,
   primary key (ID_LOGOPEDICA)
);

/*==============================================================*/
/* Table: HABILIDADES                                           */
/*==============================================================*/
create table HABILIDADES
(
   ID_HABILIDAD         int not null auto_increment,
   ETAPA                text,
   EDAD                 int,
   DESCRIPCION          text,
   primary key (ID_HABILIDAD)
);

/*==============================================================*/
/* Table: HISTORIAL_DESARROLLO_SOCIOAFECTIVO                    */
/*==============================================================*/
create table HISTORIAL_DESARROLLO_SOCIOAFECTIVO
(
   ID_PSICOLOGIA2       int not null auto_increment,
   PRENATAL_EDAD_MATERNA_EMBARAZO int,
   PRENATAL_NUMERO_EMBARAZOS int,
   PRENATAL_ABORTOS     int,
   PRENATAL_NUMERO_HIJOS int,
   PRENATAL_CONTROLES_EMBARAZO bool,
   PRENATAL_NUMERO_LUGAR_HIJO int,
   PRENATAL_INFECCION_VAGINAL bool,
   PRENATAL_CAIDAS      bool,
   PRENATAL_AMENAZA_ABORTO bool,
   PRENATAL_RAYOSX      bool,
   PRENATAL_MEDICAMENTOS text,
   PRENATAL_ALCOHOL     bool,
   PRENATAL_TABACO      bool,
   PRENATAL_DROGAS      bool,
   PRENATAL_OTROS_ESTIMULANTE text,
   PRENATAL_ESTADO_EMOCIONAL_EMBARAZO text,
   PRENATAL_ALIMENTACION_EMBARAZO text,
   PRENATAL_EMBARAZO_PLANIFICADO bool,
   PRENATAL_EDAD_GESTACIONAL int,
   PRENATAL_TIPO_PARTO  text,
   PRENATAL_CORDON_UMBILICAL_CUELLO bool,
   POSTNATAL_COLOR      text,
   POSTNATAL_LLANTO     text,
   POSTNATAL_CUIDADOS_ESPECIALES bool,
   POSTNATAL_TIEMPO     int,
   POSTNATAL_HOSPITALIZACIONES bool,
   POSTNATAL_CIRUGIAS   text,
   POSTNATAL_ANOMALIAS  bool,
   POSTNATAL_DESCRIPCION_ANOMALIAS text,
   POSTNATAL_ACCIDENTES text,
   POSTNATAL_PESO       text,
   POSTNATAL_TALLA      text,
   ACTIVIDADES_VIDA_DIARIA_ALIMENTACION_ACTUAL text,
   ACTIVIDADES_VIDA_DIARIA_SUENIO text,
   ESFINTERES_OBSERVACION text,
   VESTIDO_OBSERVACION  text,
   RELACION_PADRE       text,
   RELACION_MADRE       text,
   RELACION_HERMANOS    text,
   RELACION_LUDICA      text,
   METODOS_DISCIPLINA_DESCRIPCION text,
   EDUCACION_EXPECTATIVA_INGRESO text,
   ADICIONALES_METODO_ANTICONCEPTIVO text,
   ADICIONALES_BONO     bool,
   ADICIONALES_BONO_DESCRIPCION text,
   ADICIONALES_EDAD_MENTAL int,
   ADICIONALES_EDAD_FISICA int,
   ADICIONALES_PERIODO  text,
   RELACION_AMIGOS      text,
   METODOS_DISCIPLINA_PEGA bool,
   METODOS_DISCIPLINA_REGANIA bool,
   METODOS_DISCIPLINA_RAZONA bool,
   METODOS_DISCIPLINA_AMENAZA bool,
   METODOS_DISCIPLINA_IGNORA bool,
   METODOS_DISCIPLINA_RETIRA_OBJETO bool,
   METODOS_DISCIPLINA_NINGUNA bool,
   METODOS_DISCIPLINA_OTRA bool,
   METODOS_DISCIPLINA_DESCRIPCION_OTRA text,
   BUEN_COMPORTAMIENTO_ELOGIOS bool,
   BUEN_COMPORTAMIENTO_REGALOS bool,
   BUEN_COMPORTAMIENTO_CARICIAS bool,
   BUEN_COMPORTAMIENTO_NINGUN_PREMIO bool,
   BUEN_COMPORTAMIENTO_COMIDA bool,
   BUEN_COMPORTAMIENTO_OBJETOS bool,
   BUEN_COMPORTAMIENTO_HACE_LO_QUE_LE_GUSTA bool,
   RIESGO_FAMILIAR_PLANIFICACION_FAMILIAR bool,
   RIESGO_FAMILIAR_CUAL_PLANIFICACION_FAMILIAR text,
   RIESGO_FAMILIAR_COMUNICACION_PAREJA text,
   RIESGO_FAMILIAR_RESPONSABLE_DESPUES_ESCUELA text,
   MALTRATO_FISICO      bool,
   MALTRATO_PSICOLOGICO bool,
   MALTRATO_SEXUAL      bool,
   MALTRATO_MACHISMO    bool,
   MALTRATO_VIOLENCIA_INTRAFAMILIAR bool,
   SITUACION_LEGAL      text,
   primary key (ID_PSICOLOGIA2)
);

/*==============================================================*/
/* Table: HISTORIAL_EDUCATIVO                                   */
/*==============================================================*/
create table HISTORIAL_EDUCATIVO
(
   ID_HISTORIAL         int not null auto_increment,
   NIVEL                text,
   CUMPLE               bool,
   LUGAR                text,
   EDAD_DESDE           int,
   EDAD_HASTA           int,
   OBSERVACIONES        text,
   primary key (ID_HISTORIAL)
);

/*==============================================================*/
/* Table: HISTORICO_INFORMACION                                 */
/*==============================================================*/
create table HISTORICO_INFORMACION
(
   ID_HISTORICO         int not null auto_increment,
   ID_ESTUDIANTE        int,
   ID_PSICOLOGIA2       int,
   ID_VIVIENDA          int,
   ID_SALUD             int,
   ID_EGRESOS           int,
   ID_INGRESOS          int,
   ID_DESARROLLO_MOTOR  int,
   ID_LOGOPEDICA        int,
   ID_ANTECEDENTES_PATOLOGICOS int,
   ID_ESTRUCTURA_Y_FUNCION_ORAL int,
   ID_CONSULTA          int,
   ID_APRENDIZAJE       int,
   ID_HISTORIAL         int,
   ID_HABILIDAD         int,
   ID_MOTRICIDAD        int,
   ID_CONDUCTA          int,
   ID_CONVIVE           int,
   ID_SEGUIMIENTO       int,
   FECHA                date,
   DESCRIPCION          text,
   primary key (ID_HISTORICO)
);

/*==============================================================*/
/* Table: INFORMACION_SALUD                                     */
/*==============================================================*/
create table INFORMACION_SALUD
(
   ID_SALUD             int not null auto_increment,
   ENFERMEDADES_GRAVES  text,
   POSTNATAL_ACCIDENTES text,
   COMPLETO_VACUNAS     bool,
   TOMA_MEDICAMENTOS    bool,
   VACUNA_FALTANTE      text,
   DESCONOCE_TOMA_MEDICAMENTO bool,
   NOMBRE_MEDICAMENTO   text,
   HOSPITAL_ATENDIDO    text,
   MEDICO_TRATANTE      text,
   primary key (ID_SALUD)
);

/*==============================================================*/
/* Table: INGRESOS_SITUACION_ECONOMICA                          */
/*==============================================================*/
create table INGRESOS_SITUACION_ECONOMICA
(
   ID_INGRESOS          int not null auto_increment,
   DESCRIPCION_APORTANTE text,
   MONTO_INGRESO        decimal(8,2),
   OBSERVACIONES        text,
   primary key (ID_INGRESOS)
);

/*==============================================================*/
/* Table: LDAP                                                  */
/*==============================================================*/
create table LDAP
(
   ID_LDAP              int not null auto_increment,
   NOMBRE               text,
   PUERTO               text,
   DOMONIO              text,
   BASEDN               text,
   USER                 text,
   PASS                 text,
   primary key (ID_LDAP)
);

/*==============================================================*/
/* Table: MOTRICIDAD                                            */
/*==============================================================*/
create table MOTRICIDAD
(
   ID_MOTRICIDAD        int not null auto_increment,
   ETAPA                text,
   EDAD                 int,
   TIPO                 text,
   primary key (ID_MOTRICIDAD)
);

/*==============================================================*/
/* Table: PAIS                                                  */
/*==============================================================*/
create table PAIS
(
   ID_PAIS              int not null auto_increment,
   CODIGO               varchar(100),
   NOMBRE               text,
   primary key (ID_PAIS)
);

/*==============================================================*/
/* Table: PARROQUIA                                             */
/*==============================================================*/
create table PARROQUIA
(
   ID_PARROQUIA         int not null auto_increment,
   ID_CIUDAD            int,
   CODIGO               varchar(100),
   NOMBRE               text,
   primary key (ID_PARROQUIA)
);

/*==============================================================*/
/* Table: PERSONA_CONTACTO                                      */
/*==============================================================*/
create table PERSONA_CONTACTO
(
   ID_CONTACTO          int not null auto_increment,
   NOMBRES              text,
   APELLIDOS            text,
   CEDULA               int,
   OCUPACION            text,
   DISCAPACIDAD         bool,
   USA_TELEFONO         bool,
   TELEFONO2            int,
   TELEFONO3            int,
   EDAD                 int,
   FECHA_NACIMIENTO     date,
   FECHA_DEFUNCION      date,
   ESTADO_CIVIL         text,
   INSTRUCCION          text,
   PROFESION            text,
   LUGAR_TRABAJO        text,
   DESCRIPCION_DISCAPACIDAD text,
   primary key (ID_CONTACTO)
);

/*==============================================================*/
/* Table: PROVINCIA                                             */
/*==============================================================*/
create table PROVINCIA
(
   ID_PROVINCIA         int not null auto_increment,
   ID_REGION            int,
   CODIGO               varchar(100),
   NOMBRE               text,
   primary key (ID_PROVINCIA)
);

/*==============================================================*/
/* Table: REGION                                                */
/*==============================================================*/
create table REGION
(
   ID_REGION            int not null auto_increment,
   ID_PAIS              int,
   CODIGO               varchar(100),
   NOMBRE               text,
   primary key (ID_REGION)
);

/*==============================================================*/
/* Table: ROLE                                                  */
/*==============================================================*/
create table ROLE
(
   ID_ROLE              int not null auto_increment,
   MOTOR_GIROS          text,
   ROL                  text,
   primary key (ID_ROLE)
);

/*==============================================================*/
/* Table: SEGUIMIENTO_ESTUDIANTE                                */
/*==============================================================*/
create table SEGUIMIENTO_ESTUDIANTE
(
   ID_SEGUIMIENTO       int not null auto_increment,
   MOTOR_GIROS          text,
   FECHA                date,
   ADICIONALES_PERIODO  text,
   RESULTADOS           text,
   OBSERVACIONES        text,
   FECHA_REINGRESO      date,
   FECHA_EGRESO         date,
   CAUSA_EGRESO         text,
   DESCRIPCION          text,
   primary key (ID_SEGUIMIENTO)
);

/*==============================================================*/
/* Table: SEXO                                                  */
/*==============================================================*/
create table SEXO
(
   ID_SEXO              int not null auto_increment,
   SEXO                 text,
   primary key (ID_SEXO)
);

/*==============================================================*/
/* Table: TRAZA_USER                                            */
/*==============================================================*/
create table TRAZA_USER
(
   ID_TRAZA             int not null auto_increment,
   FECHA_CREACION       date,
   ACCION               text,
   primary key (ID_TRAZA)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   ID_USUARIO           int not null auto_increment,
   ID_SEXO              int,
   CEDULA               int,
   DIRECCION            text,
   USA_TELEFONO         bool,
   EMAIL                text,
   USUARIO              text,
   PASSWORD             text,
   SALT                 text,
   ISLDAP               bool,
   DIENTES_ESTADOS      text,
   FECHA_EXPIRACION     date,
   RUTA_FOTO            varchar(256),
   ACCION               text,
   primary key (ID_USUARIO)
);

/*==============================================================*/
/* Table: USUARIO_LDAP                                          */
/*==============================================================*/
create table USUARIO_LDAP
(
   ID_USUARIO_LDAP      int not null auto_increment,
   USUARIO              text,
   primary key (ID_USUARIO_LDAP)
);

/*==============================================================*/
/* Table: USUARIO_ROLE                                          */
/*==============================================================*/
create table USUARIO_ROLE
(
   ID_USUARIO           int not null,
   ID_ROLE              int not null,
   primary key (ID_USUARIO, ID_ROLE)
);

/*==============================================================*/
/* Table: VIVIENDA                                              */
/*==============================================================*/
create table VIVIENDA
(
   ID_VIVIENDA          int not null,
   TENENCIA             text,
   TIPO_VIVIENDA        text,
   NUMERO_PISOS         int,
   MATERIAL_CONSTRUCCION text,
   DESCRIPCION_VIVIENDA text,
   NUMERO_TOTAL_CUARTOS int,
   DOMITORIOS           bool,
   SALA                 bool,
   COMEDOR              bool,
   COCINA               bool,
   BANIO                bool,
   TIPO_BANIO           text,
   NUMERO_CAMAS         int,
   HACINAMIENTO         bool,
   DESCRIPCION_CAPACIDAD_VIVIENDA text,
   VEHICULO_PROPIO      bool,
   DESCRIPCION_VEHICULO text,
   TIPO_SERVICIO_AGUA   text,
   DESCRIPCION_OTRO_SERVICIO_AGUA text,
   TIPO_PISO            text,
   DESCRIPCION_OTRO_PISO text,
   TIPO_TECHO           text,
   DESCRIPCION_OTRO_TECHO text,
   TIPO_LUZ_ELECTRICA   text,
   ALCANTARILLADO       bool,
   USA_TELEFONO         bool,
   TVCABLE              bool,
   INTERNET             bool,
   OBSERVACIONES        text,
   primary key (ID_VIVIENDA)
);

alter table CIUDAD add constraint FK_RELATIONSHIP_3 foreign key (ID_PROVINCIA)
      references PROVINCIA (ID_PROVINCIA) on delete restrict on update restrict;

alter table ESTUDIANTE add constraint FK_RELATIONSHIP_5 foreign key (ID_PARROQUIA)
      references PARROQUIA (ID_PARROQUIA) on delete restrict on update restrict;

alter table ESTUDIANTE add constraint FK_RELATIONSHIP_6 foreign key (ID_CIUDAD)
      references CIUDAD (ID_CIUDAD) on delete restrict on update restrict;

alter table ESTUDIANTE add constraint FK_RELATIONSHIP_7 foreign key (ID_PROVINCIA)
      references PROVINCIA (ID_PROVINCIA) on delete restrict on update restrict;

alter table ESTUDIANTE add constraint FK_RELATIONSHIP_8 foreign key (ID_REGION)
      references REGION (ID_REGION) on delete restrict on update restrict;

alter table ESTUDIANTE add constraint FK_RELATIONSHIP_9 foreign key (ID_PAIS)
      references PAIS (ID_PAIS) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_12 foreign key (ID_ESTUDIANTE)
      references ESTUDIANTE (ID_ESTUDIANTE) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_13 foreign key (ID_PSICOLOGIA2)
      references HISTORIAL_DESARROLLO_SOCIOAFECTIVO (ID_PSICOLOGIA2) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_14 foreign key (ID_VIVIENDA)
      references VIVIENDA (ID_VIVIENDA) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_15 foreign key (ID_SALUD)
      references INFORMACION_SALUD (ID_SALUD) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_16 foreign key (ID_EGRESOS)
      references EGRESOS_SITUACION_ECONOMICA (ID_EGRESOS) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_17 foreign key (ID_INGRESOS)
      references INGRESOS_SITUACION_ECONOMICA (ID_INGRESOS) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_18 foreign key (ID_DESARROLLO_MOTOR)
      references DESARROLLO_MOTOR_Y_LENGUAJE (ID_DESARROLLO_MOTOR) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_19 foreign key (ID_LOGOPEDICA)
      references FICHA_LOGOPEDICA (ID_LOGOPEDICA) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_20 foreign key (ID_ANTECEDENTES_PATOLOGICOS)
      references ANTECEDENTES_PATOLOGICOS (ID_ANTECEDENTES_PATOLOGICOS) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_21 foreign key (ID_ESTRUCTURA_Y_FUNCION_ORAL)
      references ESTRUCTURA_Y_FUNCION_ORAL (ID_ESTRUCTURA_Y_FUNCION_ORAL) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_23 foreign key (ID_APRENDIZAJE)
      references APRENDIZAJE_BASICO (ID_APRENDIZAJE) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_24 foreign key (ID_HISTORIAL)
      references HISTORIAL_EDUCATIVO (ID_HISTORIAL) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_25 foreign key (ID_HABILIDAD)
      references HABILIDADES (ID_HABILIDAD) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_26 foreign key (ID_MOTRICIDAD)
      references MOTRICIDAD (ID_MOTRICIDAD) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_27 foreign key (ID_CONDUCTA)
      references CONDUCTA (ID_CONDUCTA) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_28 foreign key (ID_CONVIVE)
      references ESTRUCTURA_FAMILIAR (ID_CONVIVE) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_29 foreign key (ID_SEGUIMIENTO)
      references SEGUIMIENTO_ESTUDIANTE (ID_SEGUIMIENTO) on delete restrict on update restrict;

alter table HISTORICO_INFORMACION add constraint FK_RELATIONSHIP_31 foreign key (ID_CONSULTA)
      references CONSULTA_MEDICA (ID_CONSULTA) on delete restrict on update restrict;

alter table PARROQUIA add constraint FK_RELATIONSHIP_4 foreign key (ID_CIUDAD)
      references CIUDAD (ID_CIUDAD) on delete restrict on update restrict;

alter table PROVINCIA add constraint FK_RELATIONSHIP_2 foreign key (ID_REGION)
      references REGION (ID_REGION) on delete restrict on update restrict;

alter table REGION add constraint FK_RELATIONSHIP_1 foreign key (ID_PAIS)
      references PAIS (ID_PAIS) on delete restrict on update restrict;

alter table USUARIO add constraint FK_RELATIONSHIP_10 foreign key (ID_SEXO)
      references SEXO (ID_SEXO) on delete restrict on update restrict;

alter table USUARIO_ROLE add constraint FK_RELATIONSHIP_11 foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO) on delete restrict on update restrict;

alter table USUARIO_ROLE add constraint FK_RELATIONSHIP_30 foreign key (ID_ROLE)
      references ROLE (ID_ROLE) on delete restrict on update restrict;

