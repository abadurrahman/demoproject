 <template>
  <div>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Coupo</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Coupo</a></li>
                            <li class="breadcrumb-item active"><a href="#">Add</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding:25px;margin-top:-5.5rem">
  <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Add Coupon</h3>
        </div>
        <!-- Card body -->
       
        <div class="card-body">
       <form @submit.prevent="couponInsert">
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Coupon Name*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Name" v-model="form.coupon_name">
                <small class="text-danger" v-if="errors.coupon_name">{{ errors.coupon_name[0] }}</small>
              </div>
            </div>   
          <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Discount*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Discount" v-model="form.discount">
                <small class="text-danger" v-if="errors.discount">{{ errors.discount[0] }}</small>
              </div>
            </div>     
          </div>
          <button class="btn btn-primary" style="margin-top:15px;" type="submit">Save Coupon</button>
        </form>  
        </div>
    </div>
</div>

 </div>
</template>


<script>

    export default {
      mounted(){
            if (!User.loggedIn()) {
               this.$router.push({ name:'admin' })
            } 
        },
        data(){
          return{
            form:{
              coupon_name :'',
              discount :''
            },
            errors:{},
          }
        },
        

        methods:{   
          couponInsert(){
            axios.post('/api/coupon/',this.form)
            .then(() => {
              this.$router.push({ name: 'all-coupon' })
              Notification.success()
            })
            .catch(error => this.errors = error.response.data.errors)
          },
          
        }

      
    }



  
</script>

<style>
  
#add_new{
  float: right;
}

</style>
