CREATE table molde(
    id numeric(2) primary key ,
    tipo varchar(15) not null ,
    forma varchar(35),
    tipoPlato varchar(15) ,
    tamano numeric,
    volumen numeric(2,1),
    cantPers numeric(1),
    tipoTaza varchar(15),
    constraint c_tipo check (tipo in ('Jarra','Tetera','Lechera','Azucarera','Cazuela','Bandeja',
                                     'Plato', 'Ensaladera', 'Taza')),
    constraint c_tipoPlato check (tipoPlato in ('Hondo','Llano','Postre','Presentacion','Taza Moka',
                                               'Pasta')),
    constraint c_volumen check (volumen in (1,1.5)),
    constraint c_cantPers check (cantPers in (2,6)),
    constraint c_tipoTaza check (tipoTaza in ('Te con plato','Cafe sin plato','Cafe con plato','Moka con plato',
                                             'Moka sin plato'))
);

CREATE table coleccion(
    id numeric(2) primary key ,
    nombre varchar(20) not null ,
    linea varchar(15) not null ,
    categoria varchar(20) not null ,
    constraint c_linea check (linea in ('Familiar','Institucional')),
    constraint c_categoria check (categoria in ('Clasica','Country','Moderna'))
);

create table diseno(
    id numeric(2)primary key ,
    nombre varchar(20) not null ,
    tipo varchar(10) not null ,
    descripcion varchar(100),
    constraint c_tipo check (tipo in ('Motivo','Color'))
);

create table l_c(
    id_coleccion numeric(2) not null ,
    id_diseno numeric(2)not null ,
    constraint fk_colec foreign key (id_coleccion) references coleccion(id),
    constraint fk_diseno foreign key (id_diseno) references diseno(id),
    constraint pk_lc primary key (id_coleccion,id_diseno)
);

create table pieza(
    id numeric(2) primary key ,
    id_coleccion numeric(2)not null ,
    id_molde numeric(2)not null ,
    descripcion varchar(200),
    constraint fk_colec foreign key (id_coleccion)references coleccion(id),
    constraint fk_molde foreign key (id_molde)references molde(id)
);

create table historial_precio(
    fechaInicio date not null ,
    fechaFin date ,
    precioBs numeric(7)not null ,
    id_pieza numeric(2) not null ,
    constraint fk_pieza foreign key (id_pieza)references pieza(id),
    constraint pk_hist primary key (fechaInicio,id_pieza)
);

create table vajilla(
    id numeric(2)primary key ,
    nombre varchar(30)not null ,
    numPers numeric(2)not null ,
    descripcion varchar(200),
    constraint c_numPers check (numPers between 1 AND 32)
);

create table v_p(
    cantidad numeric(2) not null,
    id_pieza numeric(2)not null ,
    id_vajilla numeric(2)not null ,
    constraint fk_pieza foreign key (id_pieza)references pieza(id),
    constraint fk_vajilla foreign key (id_vajilla)references vajilla(id),
    constraint pk_vp primary key (id_pieza,id_vajilla)
);

create table clientes(
    id numeric(2)primary key ,
    nombre varchar(30)not null ,
    paisub varchar(30) not null ,
    constraint c_paisub check (paisub in ('Venezuela','Colombia','Republica dominicana','Usa'))
);

create table contrato(
    id numeric(2)not null ,
    fecha date not null ,
    descuento numeric(2)not null ,
    id_cliente numeric(2)not null,
    constraint c_descuento check (descuento between 1 AND 50),
    constraing pk_contrato primary key(id,id_cliente),
    constraint fk_id_cliente foreign key (id_cliente) references clientes(id)
);

create table pedido(
    id numeric(3) primary key ,
    fechaPedido date not null ,
    fechaEntrega date not null ,
    id_cliente numeric(2) not null,
    constraint fk_cliente foreign key (id_cliente) references clientes(id)

);

create table factura(
    numFactura numeric(4) not null ,
    fechaEmision date not null ,
    total numeric(15) not null,
    id_pedido numeric(2)not null ,
    constraint fk_pedido foreign key (id_pedido) references pedido(id)
);

create table detalle(
    id numeric(2)not null ,
    cantidad numeric(2) not null ,
    id_pedido numeric(2)not null ,
    id_pieza numeric(2),
    id_vajilla numeric(2) ,
    constraint fk_pedido foreign key (id_pedido)references pedido(id),
    constraint fk_pieza foreign key (id_pieza) references pieza(id),
    constraint fk_vajilla foreign key (id_vajilla) references vajilla(id),
    constraint pk_detalle primary key (id,id_pedido)
);

create table organigrama(
    id numeric(2)primary key ,
    nombre varchar(30)not null ,
    nivel numeric(1)not null ,
    tipo varchar(15)not null ,
    descripcion varchar(200),
    id_org2 numeric(2) ,
    constraint c_nivel check (nivel in (1,2,3,4)),
    constraint c_tipo check (tipo in ('Gerencia','Seccion','Departamento','Almacen')),
    constraint fk_org foreign key (id_org2)references organigrama(id)
);

create table empleado(
    idexpediente numeric(3)primary key ,
    nombre varchar(20)not null ,
    nombre2 varchar(20),
    apellido varchar(20)not null ,
    apellido2 varchar(20)not null ,
    fechaNac date not null ,
    sexo varchar(5)not null ,
    tipoSangre varchar(5)not null ,
    titulo varchar(30)not null ,
    cargo varchar(30)not null ,
    salario numeric(7)not null ,
    id_organigrama numeric(2)not null ,
    
    id_supervisor numeric(2),
    constraint c_sexo check (sexo in ('m','f','o')),
    constraint c_tipoSangre check (tipoSangre in ('O+','O-','A+','A-','B+','B-','AB+','AB-')),
    constraint c_titulo check (titulo in ('Bachiller','Ingeniero quimico','Ingeniero mecanico','Ingeniero industrial','Ingeniero produccion',
                                         'Geologo')),
    constraint c_cargo check (cargo in ('Secretaria','Gerente','Operaciones generales','Electricista','Mecanico','Inspector')),
    constraint fk_organigrama foreign key (id_organigrama)references organigrama(id),
    constraint fk_supervisor foreign key (id_supervisor)references empleado(idexpediente)
);

create table telefono(
    cod numeric(3)not null ,
    numero numeric(14)not null ,
    id_cliente numeric(2),
    id_empleado numeric(2),
    constraint pk_telefono primary key (cod,numero),
    constraint fk_cliente foreign key (id_cliente)references clientes(id),
    constraint fk_empleado foreign key (id_empleado)references empleado(idexpediente)
);

create table detalle_exp(
    id numeric(3)not null ,
    fechaInicio date not null ,
    monto numeric(7)not null ,
    motivo varchar(30)not null ,
    id_empleado numeric(3)not null ,
    retrasos numeric(2),
    totalHrsExtraDia numeric(2),
    observaciones varchar(200),
    constraint c_motivo check (motivo in ('Bono mes','Bono anual','Amonestaciones','Tarde hora','Hora extra')),
    constraint pk_detallexp primary key (id_empleado,id,fechaInicio),
    constraint fk_empleado foreign key (id_empleado)references empleado(idexpediente)
);

create table salud_alergias(
    id numeric(2)primary key ,
    nombre varchar(30)not null ,
    tipo varchar(10)not null ,
    descripcion varchar(200) ,
    constraint c_tipo check(tipo in('Alergia','Otro'))
);

create table e_sa(
    id_empleado numeric(3)not null ,
    id_salud numeric(2)not null ,
    constraint pk_esa primary key (id_salud,id_empleado),
    constraint fk_empleado foreign key (id_empleado)references empleado(idexpediente),
    constraint fk_salud foreign key (id_salud)references salud_alergias(id)
);

create table hist_turno_men(
    fechaInicio date not null ,
    turno numeric(1)not null ,
    id_empleado numeric(3)not null ,
    fechaFin date,
    constraint c_turno check (turno in (1,2,3)),
    constraint pk_histurno primary key (id_empleado,fechaInicio),
    constraint fk_empleado foreign key (id_empleado)references empleado(idexpediente)
);

create table reunion(
    id numeric(3)not null,
    fecha date not null ,
    obserMinuta varchar(200)not null ,
    id_empleado numeric(3)not null ,
    constraint pk_reunion primary key (id_empleado,id,fecha),
    constraint fk_empleado foreign key (id_empleado)references empleado(idexpediente)
);

create table inasistencia_reunion(
    id_empleado numeric(3)not null ,
    id_reunion numeric(3)not null ,
    id_reunionfecha date not null ,
    id_reunionemp numeric(3)not null ,
    constraint pk_inasist primary key (id_empleado,id_reunionemp,id_reunion,id_reunionfecha),
    constraint fk_empleado foreign key (id_empleado)references empleado(idexpediente),
    constraint fk_reunion foreign key (id_reunion,id_reunionemp,id_reunionfecha)references reunion(id,id_empleado,fecha)
);
