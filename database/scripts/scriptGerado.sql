create table especialidades
(
    id bigint unsigned auto_increment primary key,
    descricao varchar(191) not null,
    created_at timestamp    null,
    updated_at timestamp    null,
    constraint especialidades_descricao_unique unique (descricao)
) collate = utf8mb4_unicode_ci;

create table medicos
(
    id bigint unsigned auto_increment primary key,
    nome varchar(191) not null,
    crm varchar(13)  not null,
    telefone varchar(15)  not null,
    created_at timestamp null,
    updated_at timestamp null
) collate = utf8mb4_unicode_ci;

create table medico_especialidades
(
    id bigint unsigned auto_increment primary key,
    id_medico bigint unsigned not null,
    id_especialidade bigint unsigned not null,
    created_at timestamp null,
    updated_at timestamp null,
    constraint medico_especialidades_id_especialidade_foreign foreign key (id_especialidade) references especialidades (id),
    constraint medico_especialidades_id_medico_foreign foreign key (id_medico) references medicos (id)
) collate = utf8mb4_unicode_ci;

create table migrations
(
    id int unsigned auto_increment primary key,
    migration varchar(191) not null,
    batch int not null
) collate = utf8mb4_unicode_ci;

