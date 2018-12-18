<template>
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div> -->
         <!-- Small Box (Stat card) -->
        <h5 class="mb-2 mt-4">Pages</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fa fa-info-circle" aria-hidden="true"></i></h3>

                <p>About us</p>
              </div>
              <div class="icon">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
              </div>
              <router-link to="/edit-about" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> <i class="fa fa-handshake-o" ></i></h3>

                <p>Services</p>
              </div>
              <div class="icon">
                 <i class="fa fa-handshake-o"></i>
              </div>
              <router-link to="/edit-services" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <i class="fa fa-question-circle-o"></i></h3>

                <p>FAQs and Policies</p>
              </div>
              <div class="icon">
                <i class="fa fa-question-circle-o"></i>
              </div>
              <router-link to="/edit-policies" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> <i class="fa fa-users"></i></h3>

                <p>Team</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <router-link to="/edit-team" class="nav-link">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
             <!-- Small Box (Stat card) -->
        <h5 class="mb-2 mt-4">Sections</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> <i class="fa fa-shopping-cart"></i></h3>

                <p>Slider</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> <i class="fa fa-shopping-cart"></i></h3>

                <p>How it works</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <i class="fa fa-shopping-cart"></i></h3>

                <p>Footer</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> <i class="fa fa-shopping-cart"></i></h3>

                <p>Send money to</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">
                Edit info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
