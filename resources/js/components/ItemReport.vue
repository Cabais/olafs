<template>
<div class="rows mt-3">
<section class="content">
        <!-- /.col -->
        <div class="col-md-10 offset-1">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Report Item Found</h3>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <tr>
                     <td class="mailbox-name"><a href="">Mark Arjel Cabais</a></td>
                      <td class="mailbox-subject"><b>Samsung S8</b></td>
                      <td class="mailbox-date">January 21, 1997</td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-flat btn-sm" ><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-flat btn-sm" ><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                     <td class="mailbox-name"><a href="">Mark Arjel Cabais</a></td>
                      <td class="mailbox-subject"><b>Samsung S8</b></td>
                      <td class="mailbox-date">January 21, 1997</td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-flat btn-sm" ><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-flat btn-sm" ><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                     <td class="mailbox-name"><a href="">Mark Arjel Cabais</a></td>
                      <td class="mailbox-subject"><b>Samsung S8</b></td>
                      <td class="mailbox-date">January 21, 1997</td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-flat btn-sm" ><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-flat btn-sm" ><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                     <td class="mailbox-name"><a href="">Mark Arjel Cabais</a></td>
                      <td class="mailbox-subject"><b>Samsung S8</b></td>
                      <td class="mailbox-date">January 21, 1997</td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-flat btn-sm" ><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-flat btn-sm" ><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
      <!-- /.row -->

      
    </section>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
