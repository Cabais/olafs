<template>
<div class="col-12">
    <div class="content-header">
        <div class="row mb-1">
          <div class="col-sm-6">
                <ol class="breadcrumb float-sm-lett">
                    <li>
                        <h1 class="m-0 text-dark">Found Item</h1>
                    </li>
                </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li>
                    <button @click="modalItemFound" class="btn btn-block btn-outline-success btn-flat">Post Item</button>
                </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-1">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <select class="form-control">
                        <option>All</option>
                        <option>Cellphone</option>
                        <option>Book</option>
                        <option>Wallet</option>
                        <option>ID</option>
                    </select>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                                <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </li>
                </ol>
            </div><!-- /.col -->
        </div>
    </div>

    <!-- Display found item -->
    <div class="row">
        <div class="col-md-4" v-for="postitem in postitems" :key="postitem.founditemid">
            <!-- Box Comment -->
            <div class="card card-widget">
                <div class="card-header">
                <div class="user-block">
                    <span class="text-center"><h3>{{ postitem.itemname | upFirst}}</h3></span>
                    <span class=""><b>Post</b> - {{ postitem.created_at | myDate }}</span>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <img class="img-size" v-bind:src=" 'img/founditem/' + postitem.itemphoto" alt="Photo">
                </div>
                <div class="card-footer">
                    <button type="button" data-toggle="modal" data-target="#claimItem" class="btn btn-block btn-outline-success btn-flat">CLAIM</button>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- Modal -->
        <!-- Post Modal -->
        <div class="modal fade" id="addFoundItem" tabindex="-1" role="dialog" aria-labelledby="addFoundItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFoundItemLabel">Post Item Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="postItem" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input v-model="form.itemname" type="text" name="itemname" placeholder="Item Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('itemname') }">
                                <has-error :form="form" field="itemname"></has-error>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Date Found</label>
                                        <input v-model="form.datefound" type="date" name="datefound" placeholder=""
                                            class="form-control" :class="{ 'is-invalid': form.errors.has('datefound') }">
                                        <has-error :form="form" field="datefound"></has-error>
                                    </div>
                                    <div class="col-6">
                                        <label>Item Type</label>
                                        <select v-model="form.itemtype" class="form-control" name="itemtype" 
                                            :class="{'is-invalid': form.errors.has('itemtype')}">
                                            <option value="1">Cellphone</option>
                                            <option value="2">Book</option>
                                            <option value="3">Wallet</option>
                                            <option value="4">ID</option>
                                            <option value="5">Other</option>
                                        </select>
                                        <has-error :form="form" field="itemtype"></has-error>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                             <div class="form-group">
                                <label>Photo</label>
                                <div>
                                    <input @change="uploadPhoto" type="file" name="itemphoto" class="form-input" :class="{ 'is-invalid': form.errors.has('itemphoto') }">
                                </div>
                                <div v-if="!image">
                                    <img class="img-size" src="img/default.png" alt="Photo">
                                </div>
                                <div v-else>
                                     <img class="img-size" :src="image" alt="Photo">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea v-model="form.description" name="description" class="form-control" rows="3" placeholder="Enter ..."
                                :class="{ 'is-invalid': form.errors.has('datefound') }"></textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-block btn-outline-success btn-flat" >POST</button>
                    <button type="button" class="btn btn-block btn-outline-danger btn-flat" data-dismiss="modal">CANCEL</button>
                </div>
                </form>
                </div>
            </div>
        </div>

        <!-- Claim Modal -->
        <div class="modal fade" id="claimItem" tabindex="-1" role="dialog" aria-labelledby="claimItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="claimItemLabel">Claim Item Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img class="img-size" src="/img/default.png" alt="Photo">
                            <h2 style="text-align: center;">Samsung J7 Core</h2>
                        </div>

                        <div class="col-6">
                            <label for="">Mobile</label>
                            <input v-model="form.name" type="date" name="name" placeholder="Item Name"
                                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                        </div>

                        <div class="col-6">
                            <label for="">Email</label>
                            <input v-model="form.name" type="date" name="name" placeholder="Item Name"
                                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-block btn-outline-success btn-flat">SUBMIT</button>
                    <button type="button" class="btn btn-block btn-outline-danger btn-flat" data-dismiss="modal">CANCEL</button>
                </div>
                </div>
            </div>
        </div>

</div>
</template>

<script>
    export default {
        data() {
            return {
                image: '',
                postitems : {},
                form: new Form({
                   itemname: '',
                   itemphoto: '',
                   datefound: '',
                   itemtype: '',
                   description: '',
                   status: '',
                   approval: ''
                })
            }
        },

        methods: {

            //Arjel - add found item modal show
            modalItemFound(){
                $('#addFoundItem').modal("show");
                this.form.reset();
            },

            //Arjel - get data from database
            loadPostItems(){
                axios.get("api/postitem").then(({ data }) => (this.postitems = data.data ))
            },

            //Arjel - uploading photo
            uploadPhoto(e){
                let file = e.target.files[0];
                console.log(file)
                let reader = new FileReader();
                    reader.onloadend = (file) => {
                        //console.log('Result', reader.result)
                        this.form.itemphoto = reader.result;
                    }
                    reader.readAsDataURL(file);
                
                //Arjel - image files
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
                
            },

            //Arjel - displaying photo
            createImage(file) {
                var image = new Image();
                var reader = new FileReader();
                var vm = this;

                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            removeImage: function (e) {
                this.image = '';
            },

            //Arjel - send data to controller
            postItem(){
                this.$Progress.start();
                this.form.post('api/postitem')
                .then(() => {
                Fire.$emit('afterCreate');
                this.$Progress.finish();
                $('#addFoundItem').modal("hide");
                this.form.reset();
                this.image = '';
                })  
                .catch(()=>{
                    this.$Progress.fail();
                })               
            }
        },
        created() {
             this.loadPostItems();
            Fire.$on('afterCreate', () =>{
            this.loadPostItems();
        })
        },

        mounted() {
           
        }
    }
</script>
