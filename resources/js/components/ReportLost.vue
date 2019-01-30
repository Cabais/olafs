<template>
    <div class="row mt-3">
        <div class="col-6 offset-3">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                <h3 class="card-title" style="text-align: center;">Report Lost Item Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Item Name</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date Lost</label>
                                <input type="date" class="form-control" name="" placeholder="">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Type</label>
                                    <select class="form-control" name="">
                                        <option value="">Cellphone</option>
                                        <option value="">Book</option>
                                        <option value="">Wallet</option>
                                        <option value="">ID</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Photo</label>
                                <div class="">
                                    <input type="file" class="form-input" name="">
                                </div><br>
                                <div class="">
                                    <img class="img-size" src="/img/default.png" alt="Photo">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" rows="3" name="" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" class="btn btn-outline-success btn-flat" >SUBMIT</button>
                    <button type="reset" class="btn btn-outline-danger btn-flat pull-right" >RESET</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        methods: {
           
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
