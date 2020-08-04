<template>
    <div class="content">
        <div class="title m-b-md">
            <div class="row">
                <div class="col-12">
                    Crud con Arquitectura Hexagonal
                </div>
            </div>
        </div>
        <div class="formulario">
            <form action="" @submit.prevent="Guardar" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-5">
                        <input type="text" class="form-control" v-model="name" placeholder="Name">
                    </div>
                    <div class="col-5">
                        <input type="number" max="5" min="0" class="form-control" v-model="points" placeholder="Points">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-warnir" @click.prevent="Limpiar">Limpiar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="title mt-5">
            <div class="row">
                <div class="col-10">
                    Búsqueda avanzada
                </div>
            </div>
        </div>
        <div class="formulario">
            <form action="" method="get" @submit.prevent="Listar">
                <div class="row">
                    <div class="col-3">
                        <input type="number" name="id" class="form-control" v-model="params.id" placeholder="ID">
                    </div>
                    <div class="col-3">
                        <input type="text" name="name" class="form-control" v-model="params.name" placeholder="Name">
                    </div>
                    <div class="col-3">
                        <input type="number" name="points" class="form-control" v-model="params.points" placeholder="Points">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        <button type="button" class="btn btn-warnir" @click.prevent="Limpiar2">Limpiar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="title mt-5">
            <div class="row">
                <div class="col-10">
                    Listar reseñas
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary" @click.prevent="Listar">Actualizar lista</button>
                </div>
            </div>
        </div>
        <div class="listado mt-5">
            <div class="row mt-1" v-for="resenia in resenias" :key="resenia.id">
                <div class="col-5">
                    <input type="text" class="form-control" disabled="true" v-model="resenia.name" placeholder="Name">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" disabled="true" v-model="resenia.points" placeholder="Points">
                    <input type="hidden" v-model="resenia.id">
                </div>
                <div class="col-2">
                    <button type="submit" @click.prevent="Actualizar(resenia)" class="btn btn-primary">Actualizar
                    </button>
                    <button type="submit" class="btn btn-danger" @click.prevent="Eliminar(resenia.id)">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import qs from 'qs';

    export default {
        data() {
            return {
                id: '',
                name: '',
                points: '',
                resenias: [],
                params: {
                    id: '',
                    name: '',
                    points: ''
                }
            }
        },

        mounted() {
            this.Listar();
        },

        methods: {
            Guardar() {
                let formData = new FormData();

                formData.append("id", this.id);
                formData.append("name", this.name);
                formData.append("points", this.points);

                let route = this.id !== '' ? '/update' : '/store';
                axios.post(route, formData).then((response) => {
                    let mensaje = response.data.result;
                    console.log(mensaje);
                    this.Listar();
                    this.Limpiar();
                });
            },
            Listar() {
                axios.post('/list', qs.stringify(this.params)).then((response) => {
                    console.log(response.data.resenias);
                    this.resenias = response.data.resenias;
                });
            },
            Eliminar(articulo_id) {
                let formData = new FormData();
                formData.append("id", articulo_id);

                axios.post('/delete', formData).then((response) => {
                    let mensaje = response.data.result;
                    console.log(response.data.result);
                    this.Listar();
                });
            },
            Actualizar(resenia) {
                this.id = resenia.id;
                this.name = resenia.name;
                this.points = resenia.points;
            },
            Limpiar() {
                this.name = '';
                this.points = '';
            },
            Limpiar2() {
                this.params = {
                    id: '',
                    name: '',
                    points: ''
                };
            },
        },
    }
</script>

<style>

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .formulario > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .listado > a {
        color: #636b6f;
        padding: 0 25px;
        margin-top: 1500px;
        font-size: 10px;
        font-weight: 400;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
