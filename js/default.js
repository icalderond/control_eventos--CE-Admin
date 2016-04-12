$(document).ready(function () {

    try {
        $('#divContenedorSubEvento').jtable({
            title: 'Tabla de sub-eventos',
            actions: {
                listAction: '../funciones/subevento_crud.php?action=list',
                createAction: '../funciones/subevento_crud.php?action=create',
                updateAction: '../funciones/subevento_crud.php?action=update',
                deleteAction: '../funciones/subevento_crud.php?action=delete'
            },
            fields: {
                IdSubEvento: {
                    title: 'IdSubEvento',
                    key: true,
                    create: false,
                    edit: false,
                    width: '25%',
                    list: false
                },
                IdTipoEvento: {
                    title: 'Tipo Evento',
                    //key: true,
                    //create: false,
                    //edit: false,
                    width: '25%',
                    //list: false,
                    options:'../funciones/getCollection.php?action=TipoEvento'
                },
                IdEvento: {
                    title: 'IdEvento',
                    //key: true,
                    create: false,
                    edit: false,
                    width: '25%',
                    list: false
                },
                Titulo: {
                    title: 'Titulo',
                    width: '30%'
                },
                Descripcion: {
                    title: 'Descripcion',
                    list: false
                },
                Ponente: {
                    title: 'Ponente',
                    width: '30%'
                },
                Semestre: {
                    title: 'Semestre',
                    list: false
                },
                Requisitos: {
                    title: 'Requisitos',
                    list: false
                },
                Cupo: {
                    title: 'Cupo',
                    width: '13%'
                },
                Costo: {
                    title: 'Costo',
                    list: false
                },
                PersonasInscritas: {
                    title:'Inscritos',
                    width:'13%',
                    list:true,
                    create: false,
                    update:false                    
                }
            }
        });

        $('#divContenedorSubEvento').jtable('load');

    } catch (e) {
        alert("Error SubEvento" + e.Message);
    }

    $('#divContenedorAlumnos').jtable({
        title: 'Tabla de alumnos',
        actions: {
            listAction: 'PersonActions.php?action=list',
            createAction: 'PersonActions.php?action=create',
            updateAction: 'PersonActions.php?action=update',
            deleteAction: 'PersonActions.php?action=delete'
        },
        fields: {
            Control: {
                key: true,
                create: false,
                edit: false,
                list: false
            },
            Control: {
                title: 'No Control',
                width: '100%'
            },
            Nombre: {
                title: 'Nombre',
                width: '100%'
            },
            Apellidos: {
                title: 'Apellidos',
                width: '100%'
            },
            App: {
                title: 'Apellido Paterno',
                list: false,
                width: '100%'
            },
            Apm: {
                title: 'Apellido Materno',
                list: false,
                width: '100%'
            },
            Semestre: {
                title: 'Semestre',
                list: false,
                width: '100%'
            },
            Talla: {
                title: 'Talla',
                width: '100%'
            },
            Manga: {
                title: 'Manga',
                width: '10%'
            },
            Sexo: {
                title: 'Sexo',
                list: false,
                width: '100%',
                options: { 'M': 'Masculino', 'F': 'Femenino' }
            },
            Pago: {
                title: 'Pago',
                width: '100%'
            },
            Pass: {
                title: 'Password',
                list: false,
                width: '100%'
            }
        }
    });


    $('#inscripcionesTablaContenedor').jtable({
        title: 'Tabla de inscripciones',
        actions: {
            listAction: 'PersonActions.php?action=list',
            createAction: 'PersonActions.php?action=create',
            updateAction: 'PersonActions.php?action=update',
            deleteAction: 'PersonActions.php?action=delete'
        },
        fields: {
            NoControl: {
                key: true,
                create: false,
                edit: false,
                list: false
            },
            Control: {
                title: 'No Control',
                width: '20%'
            },
            Nombre: {
                title: 'Nombre',
                width: '20%'
            },
            Descripcion: {
                title: 'Descripcion',
                width: '30%'
            },
            Editar: {
                title: 'Editar',
                width: '10%',
                create: false,
                edit: false
            }
        }
    });



    try {
        $("#divContenedorEventos").jtable({
            actions: {
                listAction: '../funciones/evento_crud.php?action=list',
                createAction: '../funciones/evento_crud.php?action=create',
                updateAction: '../funciones/evento_crud.php?action=update',
                deleteAction: '../funciones/evento_crud.php?action=delete'
            },
            title: 'Tabla de Eventos',
            deleteConfirmation: function (data) {
                data.deleteConfirmMessage = 'Esta seguro de eliminar el evento: ' + data.record.Titulo + '?';
            },
            fields: {
                IdEvento: {
                    key: true,
                    create: false,
                    edit: false,
                    title: 'IdEvento',
                    width: '100%',
                    list: false
                },
                Titulo: {
                    title: 'Titulo',
                    width: '25%'
                },
                Responsable: {
                    title: 'Responsable',
                    width: '25%'
                },
                FechaInicial: {
                    title: 'Fecha Inicial',
                    type: 'date',
                    width: '25%'
                },
                FechaFinal: {
                    title: 'Fecha Final',
                    type: 'date',
                    width: '25%'
                },
                PagoExtemp: {
                    title: 'Pago extemporaneo',
                    width: '100%',
                    list: false
                },
                FechaLimitePago: {
                    title: 'Fecha limite pago',
                    type: 'date',
                    width: '100%',
                    list: false
                },
                CostoPersona: {
                    title: 'Costo Persona',
                    width: '100%',
                    list: false
                },
                CostoPersonaExterna: {
                    title: 'Costo persona externa',
                    width: '100%',
                    list: false
                }
            }
        });

        $('#divContenedorEventos').jtable('load');

    } catch (e) {
        alert("Error Eventos: " + e.Message);
    }

});